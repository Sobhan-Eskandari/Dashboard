<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Http\Requests\storeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class settingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($id = Setting::first()) {
            $info = Setting::findOrFail($id->id);
        }else{
            $info = collect(new Setting);
        }
        return view('dashboard.settings.index',compact('info'));
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
     * @param storeSetting|\App\Http\Requests\storeSetting $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeSetting $request)
    {
        auth()->user()->saveSetting(new Setting($request->all()));
        return 'ok';
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
}
