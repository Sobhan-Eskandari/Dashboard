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

Route::get('/home', 'HomeController@index')->name('home');;

Route::get('users','API\UserController@index')->name('all.users');
Route::delete('users/delete/{user}','API\UserController@destroy')->name('users.destroy');
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

//Route::get('/files', function () {
//    return view('dashboard.media.index');
//});
//Route::get('/files/trash', function () {
//    return view('dashboard.media.trash');
//});

Route::resource('comments','CommentController');
Route::post('comments-approve/{comment}','CommentController@approve')->name('approveComment');
Route::post('comments/multiDestroy','CommentController@multiDestroy')->name('multiCommentsDelete');
route::post('comments-answer','CommentController@answer')->name('answerComment');
Route::get('comments-trash','CommentController@trash')->name('comments.trash');
Route::post('comments-restore/{id}','CommentController@restore')->name('comments.restore');
Route::Delete('comments-forceDelete/{id}','CommentController@forceDelete')->name('comments.forceDelete');
Route::post('comments-multiForceDelete','CommentController@multiForceDelete')->name('comments.multiForceDelete');

Route::post('/sliders/modify', 'SliderController@modify');
Route::resource('sliders', 'SliderController');
/**
 *  correct routes starts form here on
 */

Route::post('/categories/multiDestroy', 'CategoryController@multiDestroy')->name('categories.multiDestroy');
Route::resource('/categories', 'CategoryController');

Route::post('/faqs/multiDestroy', 'FaqController@multiDestroy')->name('faqs.multiDestroy');
Route::resource('/faqs', 'FaqController');

Route::post('/friends/multiDestroy', 'FriendController@multiDestroy')->name('friends.multiDestroy');
Route::resource('/friends', 'FriendController');

Route::prefix('inbox')->group(function()
{
    Route::prefix('trash')->group(function()
    {
        Route::get('/', 'InboxController@trash')->name('inbox.trash');
        Route::delete('/{inbox}', 'InboxController@forceDestroy')->name('inbox.forceDestroy');
        Route::post('/forceMultiDestroy', 'InboxController@forceMultiDestroy')->name('inbox.forceMultiDestroy');
    });

    Route::post('/restore/{inbox}', 'InboxController@restore')->name('inbox.restore');
    Route::post('/multiDestroy', 'InboxController@multiDestroy')->name('inbox.multiDestroy');
});

Route::resource('/inbox', 'InboxController');


Route::prefix('outbox')->group(function()
{
    Route::prefix('trash')->group(function () {
        Route::get('/', 'OutboxController@trash')->name('outbox.trash');
        Route::delete('/{outbox}', 'OutboxController@forceDestroy')->name('outbox.forceDestroy');
        Route::post('/forceMultiDestroy', 'OutboxController@forceMultiDestroy')->name('outbox.forceMultiDestroy');
    });

    Route::post('/restore/{outbox}', 'OutboxController@restore')->name('outbox.restore');
    Route::post('/multiDestroy', 'OutboxController@multiDestroy')->name('outbox.multiDestroy');
});

Route::resource('/outbox', 'OutboxController');

Route::resource('/tags','tagController');

Route::prefix('backups')->group(function()
{
    Route::get('/', 'BackupController@index')->name('backups.index');
    Route::get('/posts', 'BackupController@posts')->name('backups.posts');
    Route::get('/inbox', 'BackupController@inbox')->name('backups.inbox');
    Route::get('/users', 'BackupController@users')->name('backups.users');
    Route::get('/comments', 'BackupController@comments')->name('backups.comments');
    Route::get('/admins', 'BackupController@admins')->name('backups.admins');
});

Route::resource('/settings','SettingController');

Auth::routes();

Route::get('user/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admins')->group(function()
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::prefix('trash')->group(function()
    {
        Route::get('/', 'AdminController@trash')->name('admins.trash');
        Route::delete('/{admin}', 'AdminController@forceDestroy')->name('admins.forceDestroy');
        Route::post('/forceMultiDestroy', 'AdminController@forceMultiDestroy')->name('admins.forceMultiDestroy');
    });

    Route::post('/restore/{admin}', 'AdminController@restore')->name('admins.restore');
});

//Route::middleware('role:SuperAdministrator|Administrator')->group(function() {
    Route::resource('/admins', 'AdminController');
//});

Route::prefix('posts')->group(function()
{
    Route::prefix('trash')->group(function()
    {
        Route::get('/', 'PostController@trash')->name('posts.trash');
        Route::delete('/{post}', 'PostController@forceDestroy')->name('posts.forceDestroy');
        Route::post('/forceMultiDestroy', 'PostController@forceMultiDestroy')->name('posts.forceMultiDestroy');
    });

    Route::get('/drafts', 'PostController@draft')->name('posts.draft');
    Route::post('/restore/{post}', 'PostController@restore')->name('posts.restore');
    Route::post('/multiDestroy', 'PostController@multiDestroy')->name('posts.multiDestroy');
    Route::post('/image_upload', 'PostController@imageUpload')->name('posts.imageUpload');
});

Route::resource('/posts', 'PostController');

// Todo Routes
Route::resource('/todos','TodoController');

Route::prefix('/gallery/photos')->group(function(){
    $this->get('','PhotoController@index')->name('photo.all');
    $this->post('','PhotoController@store')->name('photo.store');
    $this->post('/multiDelete','PhotoController@multiDestroy')->name('photo.multi.delete');
});

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