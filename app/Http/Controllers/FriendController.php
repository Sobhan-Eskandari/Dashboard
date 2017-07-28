<?php

namespace App\Http\Controllers;

use App\Friend;
use App\Http\Requests\FriendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('query')){
            $friends = Friend::search($request->input('query'))->orderBy('updated_at','desc')->paginate(8);
        }else{
            $friends = Friend::orderByRaw('updated_at desc')->paginate(8);
        }

        if ($request->ajax()) {
            return view('Includes.AllFriends', compact('friends'))->render();
        }

        return view('dashboard.friend.index', compact('friends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FriendRequest $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $user = Auth::user()->id;
            $input['created_by'] = $user;
            $input['updated_by'] = $user;
            try {
                Friend::create($input);
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }
            
            $friends = Friend::orderByRaw('updated_at desc')->paginate(8);
            return view('Includes.AllFriends', compact('friends'))->render();
        }
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
    public function edit(Request $request, Friend $friend)
    {
        if($request->ajax()){
            return json_encode($friend);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FriendRequest $request, Friend $friend)
    {
        if($request->ajax()){

            $input = $request->all();
            $friend->revisions++;
            $friend->updated_by = Auth::user()->id;
            $friend->update($input);

            $friends = Friend::pagination();

            return view('Includes.AllFriends', compact('friends'))->render();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Friend $friend)
    {
        if($request->ajax()){
            try {
                $friend->update(['updated_by' => Auth::user()->id]);
                $friend->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $friends = Friend::pagination();
            return view('Includes.AllFriends', compact('friends'))->render();
        }
    }

    public function multiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    $deleteFriend = Friend::findOrFail($id);
                    $deleteFriend->update(['updated_by' => Auth::user()->id]);
                    $deleteFriend->delete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $friends = Friend::pagination();

            return view('Includes.AllFriends', compact('friends'))->render();
        }
    }
}
