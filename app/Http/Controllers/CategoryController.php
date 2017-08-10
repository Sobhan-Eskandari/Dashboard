<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $referer = $request->header('referer');
        if($request->has('query')){
            if(strpos($referer , 'create') || strpos($referer , 'edit')){
                $categories = Category::search($request->input('query'))->orderBy('created_at','desc')->get();
            }else{
                $categories = Category::search($request->input('query'))->orderBy('updated_at','desc')->paginate(8);
            }
        }else{
            $categories = Category::orderByRaw('updated_at desc')->paginate(8);
        }

        if ($request->ajax()) {
            if(strpos($referer , 'create') || strpos($referer , 'edit')){
                return view('Includes.PostCategories', compact('categories'))->render();
            }else{
                return view('Includes.AllCategories', compact('categories'))->render();
            }
        }

        return view('dashboard.category.index', compact('categories'));
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
     * @return \Illuminate\Http\Response|string
     */
    public function store(CategoryRequest $request)
    {
        $referer = $request->header('referer');
        if($request->ajax()){
            $input = $request->all();
            $user = Auth::user()->id;
            $input['created_by'] = $user;
            $input['updated_by'] = $user;
            try {
                Category::create($input);
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            if(strpos($referer , 'create') || strpos($referer , 'edit')){
                $categories = Category::orderBy('created_at', 'desc')->get();
                return view('Includes.PostCategories', compact('categories'))->render();
            }else{
                $categories = Category::orderByRaw('updated_at desc')->paginate(8);
                return view('Includes.AllCategories', compact('categories'))->render();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Category $category)
    {
        if($request->ajax()){
            return json_encode($category);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if($request->ajax()){

            $input = $request->all();
            $category->revisions++;
            $category->updated_by = Auth::user()->id;
            $category->update($input);

            $categories = Category::pagination();

            return view('Includes.AllCategories', compact('categories'))->render();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        $referer = $request->header('referer');
        if($request->ajax()){
            try {
                $category->update(['updated_by' => Auth::user()->id]);
                $category->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            if(strpos($referer , 'create') || strpos($referer , 'edit')){
                $categories = Category::orderBy('created_at', 'desc')->get();
                return view('Includes.PostCategories', compact('categories'))->render();
            }else {
                $categories = Category::pagination();
                return view('Includes.AllCategories', compact('categories'))->render();
            }
        }
    }

    public function multiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    $deleteCategory = Category::findOrFail($id);
                    $deleteCategory->update(['updated_by' => Auth::user()->id]);
                    $deleteCategory->delete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $categories = Category::pagination();

            return view('Includes.AllCategories', compact('categories'))->render();
        }
    }

    public function postCategoryStore(CategoryRequest $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $user = Auth::user()->id;
            $input['created_by'] = $user;
            $input['updated_by'] = $user;
            try {
                Category::create($input);
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }
            $categories = Category::orderByRaw('updated_at desc')->paginate(8);
            return view('Includes.AllCategories', compact('categories'))->render();
        }
    }
}
