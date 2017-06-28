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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('user/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});

/* mersede */

Route::get('/profile', function () {
    return view('dashboard.admins.profile');
});

Route::get('/create', function () {
    return view('dashboard.admins.create');
});



Route::get('/tag', function () {
    return view('dashboard.tag.index');
});

Route::get('/category', function () {
    return view('dashboard.category.index');
});
Route::resource('/tags','tagController');
//Route::get('/tag', function () {
//    return view('dashboard.tag.index');
//});

Route::get('/createPost', function () {
    return view('dashboard.posts.createPost');
});

Route::get('/backup', function () {
    return view('dashboard.backup.backup');
});

Route::get('/answerMsg', function () {
    return view('dashboard.answerMsg.index');
});

/* mersede */

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


Route::resource('/settings','settingsController');

Route::get('/home', function (){
    return view('dashboard.home.index');
});

Route::get('/email', function (){
    Mail::to('hamid.vetr@gmail.com')->send(new \App\Mail\TestMail());
});

/**
 *  correct routes starts form here on
 */

Route::resource('/categories', 'CategoryController');
Route::post('/categories-multiDestroy', 'CategoryController@multiDestroy')->name('categories.multiDestroy');

Route::resource('/faqs', 'FaqController');
Route::post('/faqs-multiDestroy', 'FaqController@multiDestroy')->name('faqs.multiDestroy');