<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        if($file = $request->file('file')){
            $name = time() . $file->getClientOriginalName();
            $file->move('gallery', $name);
            $input['file'] = $name;
        }
    }
}
