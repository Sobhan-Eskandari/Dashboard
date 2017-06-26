<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Http\Requests\FaqRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faqs = FAQ::orderBy('updated_at', 'desc')->get();

        if($request->has('query')){
            $faqs = FAQ::search($request->input('query'))->orderBy('updated_at','desc')->get();
        }

        if ($request->ajax()) {
            return view('Includes.AllFaqs', compact('faqs'))->render();
        }

        return view('dashboard.FAQ.index', compact('faqs'));
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
    public function store(FaqRequest $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $input['created_by'] = Auth::user()->id;
            $input['updated_by'] = Auth::user()->id;
            try{
                FAQ::create($input);
            }catch (\Exception $exception){
                dd($exception);
            }

            $faqs = FAQ::orderBy('updated_at', 'desc')->get();
            return view('Includes.AllFaqs', compact('faqs'))->render();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, FAQ $faq)
    {
        if($request->ajax()){
            return json_encode($faq);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $faq)
    {
        if($request->ajax()){
            $input = $request->all();
            $faq->revisions++;
            $faq->updated_by = Auth::user()->id;
            $faq->update($input);

            $faqs = FAQ::orderBy('updated_at', 'desc')->get();
            return view('Includes.AllFaqs', compact('faqs'))->render();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, FAQ $faq)
    {
        if($request->ajax()){
            try {
                $faq->updated_by = Auth::user()->id;
                $faq->save();
                $faq->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $faqs = FAQ::orderBy('updated_at', 'desc')->get();
            return view('Includes.AllFaqs', compact('faqs'))->render();
        }
    }

    public function multiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    $deleteFaq = FAQ::findOrFail($id);
                    $deleteFaq->updated_by = Auth::user()->id;
                    $deleteFaq->save();
                    $deleteFaq->delete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $faqs = FAQ::orderBy('updated_at', 'desc')->get();
            return view('Includes.AllFaqs', compact('faqs'))->render();
        }
    }
}
