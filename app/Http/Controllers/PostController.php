<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('query')){
            $posts = Post::search($request->input('query'))->orderBy('updated_at', 'desc')->paginate(8);
            $posts->load(['updater', 'creator', 'categories', 'tags']);
        }else{
            $posts = Post::with(['updater', 'creator', 'categories', 'tags'])->orderBy('updated_at', 'desc')->paginate(8);
        }

        if($request->ajax()){
            return view('Includes.AllPosts', compact('posts'))->render();
        }

        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        if($request->ajax()){
            try {
                $post->update(['updated_by' => Auth::user()->id]);
                $post->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $posts = Post::pagination();

            return view('Includes.AllPosts', compact('posts'))->render();
        }
    }

    public function trash()
    {
        return view('dashboard.posts.trash');
    }
}
