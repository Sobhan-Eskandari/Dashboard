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
        $categories = Category::orderByRaw('updated_at desc')->paginate(8);

        if ($request->ajax()) {
            return view('Includes.AllCategories', compact('categories'))->render();
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
    public function edit(Category $category)
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
    public function update(Request $request,Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        if($request->ajax()){
            try {
                $category->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $allCategories = Category::orderByRaw('updated_at desc')->get();
            $categoriesArray = [];
            foreach ($allCategories as $category){
                $categoriesArray[] = $category;
            }

            $page = Input::get('page', 1); // Get the current page or default to 1
            $perPage = 8;
            $offset = ($page * $perPage) - $perPage;
            $path = "http://dashboard.dev/categories";

            $categories = new LengthAwarePaginator(array_slice($categoriesArray, $offset, $perPage, true),
                count($categoriesArray),
                $perPage,
                $page,
                ['path' => $path]
            );

            return view('Includes.AllCategories', compact('categories'))->render();
        }
    }

    public function multiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                Category::destroy($ids);
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $allCategories = Category::orderByRaw('updated_at desc')->get();
            $categoriesArray = [];
            foreach ($allCategories as $category){
                $categoriesArray[] = $category;
            }

            $page = Input::get('page', 1); // Get the current page or default to 1
            $perPage = 8;
            $offset = ($page * $perPage) - $perPage;
            $path = "http://dashboard.dev/categories";

            $categories = new LengthAwarePaginator(array_slice($categoriesArray, $offset, $perPage, true),
                count($categoriesArray),
                $perPage,
                $page,
                ['path' => $path]
            );

            return view('Includes.AllCategories', compact('categories'))->render();
        }
    }
}
