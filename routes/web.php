<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/adminProfile', function () {
    return view('dashboard.adminProfile.index');
});

Route::get('/createAdmin', function () {
    return view('dashboard.createAdmin.index');
});

Route::get('/category', function () {
    return view('dashboard.category.index');
});

Route::get('/layout', function () {
    return view('layouts.main');
});

Route::get('/users', function () {
    return view('dashboard.users.index');
});
Route::get('/users/trash', function () {
    return view('dashboard.users.trash');
});

Route::get('/admins', function () {
    return view('dashboard.admins.index');
});
Route::get('/admins/trash', function () {
    return view('dashboard.admins.trash');
});

Route::get('/posts', function () {
    return view('dashboard.posts.index');
});
Route::get('/posts/trash', function () {
    return view('dashboard.posts.trash');
});



Route::get('/files', function () {
    return view('dashboard.media.index');
});
Route::get('/files/trash', function () {
    return view('dashboard.media.trash');
});

Route::get('/comments', function () {
    return view('dashboard.comments.index');
});
Route::get('/comments/trash', function () {
    return view('dashboard.comments.trash');
});

Route::get('/messages/outbox', function () {
    return view('dashboard.messages.outbox.index');
});
Route::get('/messages/outbox/trash', function () {
    return view('dashboard.messages.outbox.trash');
});

Route::get('/messages/inbox', function () {
    return view('dashboard.messages.inbox.index');
});
Route::get('/messages/inbox/trash', function () {
    return view('dashboard.messages.inbox.trash');
});

Route::get('/sliders', function () {
    return view('dashboard.sliders.index');
});
Route::get('/sliders/trash', function () {
    return view('dashboard.sliders.trash');
});

Route::get('/settings', function () {
    return view('dashboard.settings.index');
});

Route::get('/email', function (){
    Mail::to('hamid.vetr@gmail.com')->send(new \App\Mail\TestMail());
});