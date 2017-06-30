<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminUpdateRequest;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::with(['parent', 'role'])->get();
        $roles = Role::all();
        return view('dashboard.admins.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Admin $admin)
    {
        $roles = Role::pluck('role', 'id')->all();
        return view('dashboard.admins.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdateRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $input = $request->all();
        if(is_null($input['password'])){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        $admin->update($input);
        Session::flash('success', 'ادمین با موفقیت ویرایش شد');
        return redirect(route('admins.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $relations = ['faqs', 'categories', 'outboxes', 'tags'];
        $admin = Admin::with($relations)->findOrFail($id);
        if($request->ajax()){
            try {
                foreach ($relations as $relation) {
                    foreach ($admin->{$relation} as $item){
                        $item->delete();
                    }
                }
                $admin->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $admins = Admin::with(['parent', 'role'])->get();
            $roles = Role::all();
            return view('Includes.AllAdmins', compact('admins', 'roles'))->render();
        }
    }

    public function trash()
    {
        return view('dashboard.admins.trash');
    }
}
