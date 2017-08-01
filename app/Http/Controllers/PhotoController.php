<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
//    public function store(Request $request)
//    {
//        $file = $request->file('file');
//
//        $name = time() . $file->getClientOriginalName();
//
//        $file->move('gallery', $name);
//
//        Photo::create([
//            'name' => $name,
//            'created_by' => Auth::user()->id
//        ]);
//    }
public function index(){
    $photos = Photo::all();
    return view('dashboard.gallery.index',compact('photos'));
}

public function store(Request $request){
//    dd($request->file('file'));
//    return view('dashboard.posts.index');
    $image = $request->file('file');
    $imageName = time().$image->getClientOriginalName();
    $image->move(public_path('photos'),$imageName);
    Photo::create([
        'name'=>$imageName,
        'created_by'=>1
    ]);
    $photos = Photo::all();
//    return response()->json(['success'=>$imageName]);
    return view('Includes.AllPhotos',compact('photos'));
}

}
