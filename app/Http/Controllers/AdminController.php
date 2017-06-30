<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Role;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    public function index(Request $request)
    {
        $roles = Role::all();
        if($request->has('query')){
            $admins = Admin::search($request->input('query'))->get();
            $admins->load(['parent', 'role']);
        }else{
            $admins = Admin::with(['parent', 'role'])->get();
        }

        if ($request->ajax()) {
            return view('Includes.AllAdmins', compact('admins', 'roles'))->render();
        }

        return view('dashboard.admins.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('role', 'id')->all();
        return view('dashboard.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStoreRequest $request)
    {
        $user = Auth::user()->id;
        $input = $request->all();
        $input['created_by'] = $user;
        $input['updated_by'] = $user;
        $input['email_token'] = str_random(30) . Uuid::uuid();
        $input['password'] = bcrypt($request->password);

        Admin::create($input);
        Session::flash('success', 'ادمین با موفقیت ساخته شد');
        return redirect(route('admins.index'));
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
        $admin->revisions++;
        $admin->updated_by = Auth::user()->id;
        $input = $request->all();
        if(is_null($input['password'])){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        $admin->update($input);
        Session::flash('warning', 'ادمین با موفقیت ویرایش شد');
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
        $admin->updated_by = Auth::user()->id;
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
        $admins = Admin::with(['parent', 'role'])->onlyTrashed()->get();
        $roles = Role::all();
        return view('dashboard.admins.trash', compact('admins', 'roles'));
    }

    public function forceDestroy(Request $request, $id)
    {
        $relations = ['faqs', 'categories', 'outboxes', 'tags'];
        $admin = Admin::with($relations)->onlyTrashed()->findOrFail($id);
        if($request->ajax()){
            try {
                foreach ($relations as $relation) {
                    foreach ($admin->{$relation} as $item){
                        $item->forceDelete();
                    }
                }
                $admin->forceDelete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $admins = Admin::with(['parent', 'role'])->onlyTrashed()->get();
            $roles = Role::all();
            return view('Includes.AllAdminsTrash', compact('admins', 'roles'))->render();
        }
    }

    public function restore(Request $request, $id)
    {
        $user = Auth::user()->id;
        $relations = ['faqs', 'categories', 'outboxes', 'tags'];
        $admin = Admin::onlyTrashed()->findOrFail($id);
        if($request->ajax()){
            try {
                foreach ($relations as $relation) {
                    foreach ($admin->{$relation} as $item){
                        $item->updated_by = $user;
                        $item->save();
                        $item->restore();
                    }
                }
                $admin->updated_by = $user;
                $admin->save();
                $admin->restore();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $admins = Admin::with(['parent', 'role'])->onlyTrashed()->get();
            $roles = Role::all();
            return view('Includes.AllAdminsTrash', compact('admins', 'roles'))->render();
        }
    }
}
