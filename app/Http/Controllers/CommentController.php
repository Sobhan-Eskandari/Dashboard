<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comments = Comment::latest()->paginate(8);
        $commentsArray = [];
        if ($request->has('query') && $request->query != null) {
            $comments = Comment::search($request->input('query'))->paginate(8);
        }
//        if($request->has('start') || $request->has('end')){
//            $comments = $comment->where('created_at','>=',str_replace('/','-',$request->start));
//            $comment = $comments->where('created_at','<=',str_replace('/','-',$request->end));
//            $start = $request->start;
//            $end = $request->end;
//        }
//        foreach ($comment as $comments){
//            $commentsArray[] = $comments;
//        }
//        $comments = new LengthAwarePaginator(array_slice($commentsArray, 0, 8, true),
//            count($commentsArray),
//            8,
//            1,
//            ['path' => 'http://dash.dev/comments']
//        );
        if ($request->ajax()) {
            return view('Includes.AllComments', compact('comments','start','end'));
        }
        return view('dashboard.comments.index', compact('comments','start','end'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $comments = Comment::search(" ")->where('deleted_at','=',NULL)->get();
//        $comments = Comment::withTrashed()->find(1);
////        dd($comments);
//        dd($comments->children()->withTrashed()->get());
        $comment = Comment::find(6);
//        $comment->destroy();
//        dd('skjdnksd');
        dd($comment->parent);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('dashboard.comments.show', compact('comment'));
    }

    public function answer(Request $request)
    {
        $input = $request->all();
        $input['full_name'] = 'admin';
        $input['user_id'] = 1;
//        $input['']
        $input['tracking_code'] = 'jasndkajsdnasjdasdasdjkasd';
        $comments = Comment::create($input);
//        dd($comments);
//        $comments = Comment::paginate(8);
//        return view('dashboard.comments.index',compact('comments'));
        return redirect()->route('comments.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $comments = Comment::with('parent')->find($comment->id);
        return view('dashboard.comments.edit', compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
//        $comments = Comment::paginate(8);
//        return view('dashboard.comments.index',compact('comments'));
        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Comment $comment)
    {
//        dd( $request->input('query'));
        $comment = Comment::with('children')->find($comment->id);
        $comment->children()->delete();
        $comment->delete();
        if ($request->has('query')) {
            $comments = Comment::search($request->input('query'))->paginate(8);
        } else {
            $comments = Comment::paginate();
        }
        return view('Includes.AllComments', compact('comments'))->render();
    }

    public function multiDestroy(Request $request)
    {
        foreach ($request->input('checkboxes') as $checkbox) {
            if ($checkbox === "on") {
                continue;
            }
            $comment = Comment::with('children')->find($checkbox);
            $comment->children()->delete();
            $comment->delete();
        }
//            sleep(5);
        if ($request->has('query')) {
            $comments = Comment::search($request->input('query'))->paginate(8);
        } else {
            $comments = Comment::paginate();
        }
        return view('Includes.AllComments', compact('comments'))->render();
    }

    public function approve(Comment $comment)
    {
        $comment->status = 'checked';
        $comment->save();
        return redirect()->route('comments.index');
    }

    public function trash(Request $request)
    {
        $comments = Comment::onlyTrashed()->paginate(8);
//        dd($comments);
//        if($request->has('query')) {
//            $comment= Comment::onlyTrashed()->search($request->input('query'));
////            $comments = $comment->where('deleted_at','==',NULL)->get();
//            dd($comment);
////            $comments = Comment::search($request->input('query'))->paginate(8);
//        }
        if ($request->ajax()){
            return view('Includes.AllTrashedComments',compact('comments'));
        }
//        dd($comments);
        return view('dashboard.comments.trash', compact('comments'));
    }

    public function restore(Request $request, $id)
    {
        $comment = Comment::with('children')->onlyTrashed()->find($id);
        $comment->children()->restore();
        $comment->restore();
        if ($request->has('query')) {
            $comments = Comment::search($request->input('query'))->paginate(8);
        } else {
            $comments = Comment::onlyTrashed()->paginate();
        }
        return view('Includes.AllTrashedComments', compact('comments'))->render();
    }

    public function forceDelete(Request $request, $id)
    {
        $comment = Comment::with('children')->onlyTrashed()->find($id);
        $comment->children()->forceDelete();
        $comment->forceDelete();
        if ($request->has('query')) {
            $comments = Comment::search($request->input('query'))->paginate(8);
        } else {
            $comments = Comment::onlyTrashed()->paginate();
        }
        return view('Includes.AllTrashedComments', compact('comments'))->render();
    }

    public function multiForceDelete(Request $request)
    {
        foreach ($request->input('checkboxes') as $checkbox) {
            if ($checkbox === "on") {
                continue;
            }
            $comment = Comment::with('children')->onlyTrashed()->find($checkbox);
            $comment->children()->forceDelete();
            $comment->forceDelete();
        }
//            sleep(5);

        if ($request->input('query')!==null) {
            $comments = Comment::search($request->input('query'))->paginate(8);
        } else {
            $comments = Comment::onlyTrashed()->paginate();
        }
        return view('Includes.AllTrashedComments', compact('comments'))->render();
    }
}