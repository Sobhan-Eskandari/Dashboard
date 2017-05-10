<?php

namespace App\Http\Controllers;

use App\Textboxio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TextboxioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('textio');
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
    public function store(Request $request)
    {
        $input = $request->all();
        //dd($input['textboxio']);
        //dd($input);
        Textboxio::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Textboxio  $textboxio
     * @return \Illuminate\Http\Response
     */
    public function show(Textboxio $textboxio)
    {
        $body = $textboxio['attributes']['body'];
        return view('showtextio', compact('body'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Textboxio  $textboxio
     * @return \Illuminate\Http\Response
     */
    public function edit(Textboxio $textboxio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Textboxio  $textboxio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Textboxio $textboxio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Textboxio  $textboxio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textboxio $textboxio)
    {
        //
    }
}
