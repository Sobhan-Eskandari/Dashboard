<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Photo;
use App\Role;
use App\Todo;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Morilog\Jalali\jDate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::all();
        $todos = Todo::all();
        if($request->has('query')){
            $admins = Admin::search($request->input('query'))->orderBy('updated_at', 'desc')->get();
            $admins->load(['parent', 'role', 'photos']);
        }else{
            $admins = Admin::with(['parent', 'role', 'photos'])->orderBy('updated_at', 'desc')->get();
        }

        if ($request->ajax()) {
            return view('Includes.AllAdmins', compact('admins', 'roles'))->render();
        }

        return view('dashboard.admins.index', compact('admins', 'roles', 'todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photos = Photo::orderBy('created_at', 'desc')->get();
        $roles = Role::pluck('role', 'id')->all();
        return view('dashboard.admins.create', compact('roles', 'photos'));
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

        $admin = Admin::create($input);

        $admin->photos()->attach($input['indexPhoto']);

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
    public function edit($id)
    {
        $admin = Admin::with('photos')->findOrFail($id);
        $photos = Photo::orderBy('created_at', 'desc')->get();
        $roles = Role::pluck('role', 'id')->all();
        return view('dashboard.admins.edit', compact('admin', 'roles', 'photos'));
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
        $user = Auth::user()->id;

        $admin->revisions++;
        $admin->updated_by = $user;
        $input = $request->all();
        if(is_null($input['password'])){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        $admin->photos()->detach();
        $admin->photos()->attach($input['indexPhoto']);

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

            $admins = Admin::with(['parent', 'role', 'photos'])->orderBy('updated_at', 'desc')->get();
            $roles = Role::all();
            return view('Includes.AllAdmins', compact('admins', 'roles'))->render();
        }
    }

    public function trash(Request $request)
    {
        $admins = Admin::with(['parent', 'role', 'photos'])->onlyTrashed()->orderBy('updated_at', 'desc')->paginate(8);
        $roles = Role::all();

        if ($request->ajax()) {
            return view('Includes.AllAdminsTrash', compact('admins', 'roles'))->render();
        }

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
                $admin->photos()->detach();
                $admin->forceDelete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $admins = Admin::pagination();
            $roles = Role::all();
            return view('Includes.AllAdminsTrash', compact('admins', 'roles'))->render();
        }
    }

    public function forceMultiDestroy(Request $request)
    {
        $relations = ['faqs', 'categories', 'outboxes', 'tags'];
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    $admin = Admin::with($relations)->onlyTrashed()->findOrFail($id);
                    foreach ($relations as $relation) {
                        foreach ($admin->{$relation} as $item){
                            $item->forceDelete();
                        }
                    }
                    $admin->photos()->detach();
                    $admin->forceDelete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $admins = Admin::pagination();
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

            $admins = Admin::pagination();
            $roles = Role::all();
            return view('Includes.AllAdminsTrash', compact('admins', 'roles'))->render();
        }
    }

//    public function edit_profile_pic(Request $request, $id)
//    {
//        $admin = Admin::findOrFail($id);
//        $input = $request->all();
//        if($file = $request->file('avatar')){
//            if(isset($admin->photos[0])){
//                $admin->photos()->delete();
//                $admin->photos()->detach();
//                // Below line of code, Remain if the photo is deleted permanently else it should be commented out
//                File::delete('profile_pics/' . $admin->photos[0]->address);
//            }
//            $name = time() . $file->getClientOriginalName();
//            $file->move('profile_pics', $name);
//            $input['address'] = $name;
//        }
//
//        $input['created_by'] = Auth::user()->id;
//
//        $photo = Photo::create($input);
//        $admin->photos()->save($photo);
//
//        return json_encode($photo->address);
//    }
//
//    public function create_profile_pic(Request $request)
//    {
//        $input = $request->all();
//        if($file = $request->file('avatar')){
//            $name = time() . $file->getClientOriginalName();
//            $file->move('profile_pics', $name);
//            $input['address'] = $name;
//        }
//
//        $input['created_by'] = Auth::user()->id;
//
//        $photo = Photo::create($input);
//
//        return json_encode($photo);
//    }
}
