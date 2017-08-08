<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\storeSlider;
use App\Photo;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
//    /**
//     * SliderController constructor.
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photos = Photo::all();
        return view('dashboard.sliders.create', compact('photos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param storeSlider|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeSlider $request)
    {
        $request['created_by'] = 1;
        Slider::create($request->all());

        return redirect()->action('SliderController@index')->with('success', "اسلایدر با موفقیت ذخیره شد.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
