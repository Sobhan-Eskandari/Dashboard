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

//Route::get('/users', function () {
//    return view('dashboard.users.index');
//});
Route::get('users','API\UserController@index')->name('all.users');
Route::Delete('users/delete/{user}','API\UserController@destroy')->name('users.destroy');
Route::post('users/MultiDelete','API\UserController@multiDestroy')->name('user.multi.destroy');
Route::get('users/trash','API\UserController@trash')->name('user.trash');
Route::get('users/create','API\UserController@create')->name('user.create');
Route::post('users','API\UserController@store')->name('user.store');
Route::post('photo','API\UserController@photo')->name('user.photo');
Route::get('users/show/{user}','API\UserController@show')->name('user.show');
Route::get('users/edit/{user}','API\UserController@edit')->name('user.edit');
Route::post('users/update/{user}','API\UserController@update')->name('user.update');
Route::delete('users/forceDelete/{user}','API\UserController@forceDelete')->name('user.force.delete');
Route::post('users/forceMultiDelete','API\UserController@forceMultiDelete')->name('user.force.multiDelete');
Route::post('users/restore/{user}','API\UserController@restore')->name('user.restore');
//Route::get('/users/trash', function () {
//    return view('dashboard.users.trash');
//});


Route::get('/files', function () {
    return view('dashboard.media.index');
});
Route::get('/files/trash', function () {
    return view('dashboard.media.trash');
});

Route::resource('comments','CommentController');
Route::post('comments-approve','CommentController@approve')->name('approveComment');
Route::post('comments/multiDestroy','CommentController@multiDestroy')->name('multiCommentsDelete');
route::post('comments-answer','CommentController@answer')->name('answerComment');
Route::get('comments-trash','CommentController@trash')->name('comments.trash');
Route::post('comments-restore/{id}','CommentController@restore')->name('comments.restore');
Route::Delete('comments-forceDelete/{id}','CommentController@forceDelete')->name('comments.forceDelete');
Route::post('comments-multiForceDelete','CommentController@multiForceDelete')->name('comments.multiForceDelete');

Route::get('/sliders', function () {
    return view('dashboard.sliders.index');
});


Route::get('/home', function (){
    return view('dashboard.home.index');
})->name('home');

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

Route::resource('/friends', 'FriendController');
Route::post('/friends-multiDestroy', 'FriendController@multiDestroy')->name('friends.multiDestroy');

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
//    Route::post('/edit_profile_pic/{admin}', 'AdminController@edit_profile_pic')->name('admins.edit_profile_pic');
//    Route::post('/create_profile_pic', 'AdminController@create_profile_pic')->name('admins.create_profile_pic');
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
Route::get('/posts-drafts', 'PostController@draft')->name('posts.draft');
Route::delete('/posts-trash/{post}', 'PostController@forceDestroy')->name('posts.forceDestroy');
Route::post('/posts-restore/{post}', 'PostController@restore')->name('posts.restore');
Route::post('/posts-multiDestroy', 'PostController@multiDestroy')->name('posts.multiDestroy');
Route::post('/posts-trash-forceMultiDestroy', 'PostController@forceMultiDestroy')->name('posts.forceMultiDestroy');

Route::post('/posts-image-upload', 'PostController@imageUpload')->name('posts.imageUpload');

// Todo Routes
Route::resource('/todos','TodoController');

Route::get('/gallery', function () {
    return view('dashboard.gallery.index');
});

Route::post('/gallery', 'PhotoController@store')->name('gallery.store');

Route::post('/admins-restore/{admin}', 'AdminController@restore')->name('admins.restore');

Route::get('/test', function (\Illuminate\Http\Request $request){
    $photos = \App\Photo::orderBy('created_at', 'desc')->get();
    if($request->ajax()){
        return view('Includes.AllPhotos', compact('photos'));
    }
    return view('test', compact('photos'));
})->name('test');

Route::post('/test', 'PhotoController@store');

//Route::get('ckeditor/plugins/imageuploader/imgbrowser.php', function (\Illuminate\Http\Request $request){
//    $photos = \App\Photo::orderBy('created_at', 'desc')->get();
//    if($request->ajax()){
//        return view('Includes.AllPhotos', compact('photos'));
//    }
//    return view('test', compact('photos'));
//});