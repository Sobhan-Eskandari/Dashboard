<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Http\Requests\storeSetting;
use Carbon\Carbon;
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
        if(($setting = Setting::first()) !== null) {
            return $this->edit($setting);
        }else{
            return $this->create();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param storeSetting|\App\Http\Requests\storeSetting $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeSetting $request)
    {
        $request['created_by'] = auth()->user()->getAuthIdentifier();
        $setting = Setting::create($request->all());
        auth()->user()->saveSetting($setting);
        Session::flash('success', 'تنظیمات با موفقیت ثبت شد.');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('dashboard.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request['updated_by'] = auth()->user()->getAuthIdentifier();
        $request['updated_at'] = jdate(Carbon::now());
        $request['revisions'] = $setting->revisions + 1;
        auth()->user()->updateSetting($setting->fill($request->all()));
        Session::flash('success', 'تنظیمات با موفقیت ذخیره شد.');
        return back();
    }
}
