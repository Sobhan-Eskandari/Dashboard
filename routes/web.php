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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/adminProfile', function () {
    return view('mersede.adminProfile');
});

Route::get('/createAdmin', function () {
    return view('mersede.createAdmin');
});

Route::get('/category', function () {
    return view('mersede.category');
});

Route::get('/layout', function () {
    return view('layouts.main');
});

Route::get('/users', function () {
    return view('dashboard.users.index');
});

Route::get('/admins', function () {
    return view('dashboard.admins.index');
});

Route::get('/posts', function () {
    return view('dashboard.posts.index');
});

Route::get('/files', function () {
    return view('dashboard.media.index');
});

Route::get('/comments', function () {
    return view('dashboard.comments.index');
});

Route::get('/messages/outbox', function () {
    return view('dashboard.messages.outbox.index');
});