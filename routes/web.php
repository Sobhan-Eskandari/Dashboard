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

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
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

Route::get('/sliders', function () {
    return view('dashboard.sliders.index');
});

Route::get('/home', function (){
    return view('dashboard.home.index');
});
Route::get('/create_slider', function (){
    return view('dashboard.sliders.create');
});
/**
 *  correct routes starts form here on
 */

Route::resource('/categories', 'CategoryController');
Route::post('/categories-multiDestroy', 'CategoryController@multiDestroy')->name('categories.multiDestroy');

Route::resource('/faqs', 'FaqController');
Route::post('/faqs-multiDestroy', 'FaqController@multiDestroy')->name('faqs.multiDestroy');

Route::resource('/inbox', 'InboxController');
Route::get('/inbox-trash', 'InboxController@trash')->name('inbox.trash');
Route::delete('/inbox-trash/{inbox}', 'InboxController@forceDestroy')->name('inbox.forceDestroy');
Route::post('/inbox-restore/{inbox}', 'InboxController@restore')->name('inbox.restore');
Route::post('/inbox-multiDestroy', 'InboxController@multiDestroy')->name('inbox.multiDestroy');
Route::post('/inbox-trash-forceMultiDestroy', 'InboxController@forceMultiDestroy')->name('inbox.forceMultiDestroy');

Route::resource('/outbox', 'OutboxController');
Route::get('/outbox-trash', 'OutboxController@trash')->name('outbox.trash');
Route::delete('/outbox-trash/{outbox}', 'OutboxController@forceDestroy')->name('outbox.forceDestroy');
Route::post('/outbox-restore/{outbox}', 'OutboxController@restore')->name('outbox.restore');
Route::post('/outbox-multiDestroy', 'OutboxController@multiDestroy')->name('outbox.multiDestroy');
Route::post('/outbox-trash-forceMultiDestroy', 'OutboxController@forceMultiDestroy')->name('outbox.forceMultiDestroy');

Route::resource('/tags','tagController');

Route::get('/backups', 'BackupController@index')->name('backups.index');
Route::get('/backups-posts', 'BackupController@posts')->name('backups.posts');
Route::get('/backups-inboxes', 'BackupController@inboxes')->name('backups.inboxes');
Route::get('/backups-users', 'BackupController@users')->name('backups.users');
Route::get('/backups-comments', 'BackupController@comments')->name('backups.comments');
Route::get('/backups-admins', 'BackupController@admins')->name('backups.admins');

Route::resource('/settings','settingsController');

Auth::routes();

Route::get('user/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admins')->group(function()
{
    Route::get('/', 'AdminController@index')->name('admins.index');
    Route::get('/create', 'AdminController@create')->name('admins.create');
    Route::post('/', 'AdminController@store')->name('admins.store');
    Route::post('/edit_profile_pic/{admin}', 'AdminController@edit_profile_pic')->name('admins.edit_profile_pic');
    Route::post('/create_profile_pic', 'AdminController@create_profile_pic')->name('admins.create_profile_pic');
    Route::get('/{admin}', 'AdminController@show')->name('admins.show');
    Route::get('/{admin}/edit', 'AdminController@edit')->name('admins.edit');
    Route::put('/{admin}', 'AdminController@update')->name('admins.update');
    Route::delete('/{admin}', 'AdminController@destroy')->name('admins.destroy');

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::get('/admins-trash', 'AdminController@trash')->name('admins.trash');
Route::delete('/admins-trash/{admin}', 'AdminController@forceDestroy')->name('admins.forceDestroy');
Route::post('/admins-trash-forceMultiDestroy', 'AdminController@forceMultiDestroy')->name('admins.forceMultiDestroy');
Route::post('/admins-restore/{admin}', 'AdminController@restore')->name('admins.restore');

Route::resource('/posts', 'PostController');
Route::get('/posts-trash', 'PostController@trash')->name('posts.trash');
Route::delete('/posts-trash/{post}', 'PostController@forceDestroy')->name('posts.forceDestroy');
Route::post('/posts-restore/{post}', 'PostController@restore')->name('posts.restore');
Route::post('/posts-multiDestroy', 'PostController@multiDestroy')->name('posts.multiDestroy');
Route::post('/posts-trash-forceMultiDestroy', 'PostController@forceMultiDestroy')->name('posts.forceMultiDestroy');
Route::post('/admins-restore/{admin}', 'AdminController@restore')->name('admins.restore');

// Todo Routes
Route::resource('/todos','TodoController');
