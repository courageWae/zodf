<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/user-dashboard', 'User\UserController@dashboard')->name('home');

////////////////////////////////////////////// user /////////////////////////////////

Route::get('/', 'User\UserController@index')->name('index');

Route::get('contact', 'User\UserController@contact')->name('contact');

Route::post('send-contact', 'User\UserController@sendcontact')->name('sendcontact');

Route::get('about', 'User\UserController@about')->name('about');

Route::get('aboutproject', 'User\UserController@aboutproject')->name('aboutproject');

Route::get('projects', 'User\UserController@projects')->name('projects');

Route::get('project-detail/{id}', 'User\UserController@projectdetail')->name('projectdetail');

Route::get('register-for-project/{id}', 'User\UserController@projectregister')->name('projectregister');

// Route::post('post-register', 'User\UserController@saveregister')->name('saveregister');

Route::post('post-register', 'User\UserController@postregister')->name('postregister');

Route::get('save-register', 'User\UserController@saveregister')->name('saveregister');

Route::post('subscribe', 'User\UserController@subscribe')->name('subscribe');

Route::get('staff', 'User\UserController@staff')->name('staff');

Route::get('board', 'User\UserController@board')->name('board');

Route::get('executive', 'User\UserController@executive')->name('executive');

Route::get('staff-detail/{id}', 'User\UserController@staffdetail')->name('staffdetail');

Route::get('news', 'User\UserController@news')->name('news');

Route::get('single-news/{id}', 'User\UserController@singlenews')->name('singlenews');

Route::get('gallery', 'User\UserController@gallery')->name('gallery');

Route::get('news/tag/{tag}','User\UserController@tag')->name('tag');

Route::get('news/category/{category}','User\UserController@category')->name('category');

Route::get('news/admin/{admin}','User\UserController@name')->name('admin');

////////////////////////////////////////////// admin /////////////////////////////////////////

Route::get('admin-login', 'Admin\AdminController@adminlogin')->name('adminlogin');

Route::get('admin-dashboard', 'Admin\AdminController@index')->name('admin.dashboard');

Route::get('add-project', 'Admin\AdminController@addproject')->name('addproject');

Route::post('save-project', 'Admin\AdminController@saveproject')->name('saveproject');

Route::get('all-projects', 'Admin\AdminController@allprojects')->name('allprojects');

Route::get('add-material', 'Admin\AdminController@addmaterial')->name('addmaterial');

Route::post('save-material', 'Admin\AdminController@savematerial')->name('savematerial');

Route::get('view-contact','Admin\AdminController@viewcontact')->name('viewcontact');

Route::get('contact-detail/{id}','Admin\AdminController@contactdetail')->name('contactdetail');

Route::get('view-staff','Admin\AdminController@viewstaff')->name('viewstaff');

Route::get('show-staff/{id}','Admin\AdminController@showstaff')->name('showstaff');

Route::post('save-staff','Admin\AdminController@savestaff')->name('savestaff');

Route::put('edit-staff/{id}','Admin\AdminController@editstaff')->name('editstaff');

Route::delete('destroy-staff/{id}','Admin\AdminController@destroystaff')->name('destroystaff');

Route::get('registered','Admin\AdminController@registered')->name('registered');

Route::get('single/{id}','Admin\AdminController@single')->name('single');

Route::get('export-data','Admin\AdminController@exportdata')->name('exportdata');

Route::get('exports-data/{id}','Admin\AdminController@exportsdata')->name('exportsdata');

Route::post('import-data', 'Admin\AdminController@importdata')->name('importdata');

Route::get('view-registered/{id}','Admin\AdminController@viewregistered')->name('viewregistered');

Route::delete('destroy-project/{id}','Admin\AdminController@destroyproject')->name('destroyproject');

Route::get('show-edit-project/{id}','Admin\AdminController@showproject')->name('showproject');

Route::put('edit-project/{id}','Admin\AdminController@editproject')->name('editproject');

Route::delete('destroy-material/{id}','Admin\AdminController@destroymaterial')->name('destroymaterial');

Route::get('show-edit-material/{id}','Admin\AdminController@showmaterial')->name('showmaterial');

Route::put('edit-material/{id}','Admin\AdminController@editmaterial')->name('editmaterial');

Route::post('post-registration', 'Admin\AdminController@postRegistration')->name('postRegistration');

Route::get('view-admin', 'Admin\AdminController@viewadmin')->name('viewadmin');

Route::get('registration', 'Admin\AdminController@registration')->name('registration');

Route::post('admin-logout', 'Admin\AdminController@adminlogout')->name('adminlogout');

Route::delete('destroy-admin/{id}','Admin\AdminController@destroyadmin')->name('destroyadmin');

Route::get('show-admin/{id}','Admin\AdminController@showadmin')->name('showadmin');

Route::get('show-subscribe','Admin\AdminController@showsubscribe')->name('showsubscribe');



Route::get('show-all-news','Admin\AdminController@showallnews')->name('showallnews');

Route::get('show-create-news','Admin\AdminController@showcreatenews')->name('showcreatenews');

Route::post('store-news','Admin\AdminController@storenews')->name('storenews');

Route::get('edit-news/{id}','Admin\AdminController@editnews')->name('editnews');

Route::put('update-news/{id}','Admin\AdminController@updatenews')->name('updatenews');

Route::delete('destroy-news/{id}','Admin\AdminController@destroynews')->name('destroynews');



Route::get('show-gallery', 'Admin\AdminController@showgallery')->name('showgallery');

Route::post('save-gallery', 'Admin\AdminController@savegallery')->name('savegallery');

Route::delete('destroy-gallery/{id}','Admin\AdminController@destroygallery')->name('destroygallery');


Route::get('show-tag', 'Admin\AdminController@indextag')->name('indextag');

Route::get('create-tag', 'Admin\AdminController@createtag')->name('createtag');

Route::post('store-tag', 'Admin\AdminController@storetag')->name('storetag');

Route::get('edit-tag/{id}','Admin\AdminController@edittag')->name('edittag');

Route::put('update-tag/{id}','Admin\AdminController@updatetag')->name('updatetag');

Route::delete('destroy-tag/{id}','Admin\AdminController@destroytag')->name('destroytag');


Route::get('show-category', 'Admin\AdminController@indexcategory')->name('indexcategory');

Route::get('create-category', 'Admin\AdminController@createcategory')->name('createcategory');

Route::post('store-category', 'Admin\AdminController@storecategory')->name('storecategory');

Route::get('edit-category/{id}','Admin\AdminController@editcategory')->name('editcategory');

Route::put('update-category/{id}','Admin\AdminController@updatecategory')->name('updatecategory');

Route::delete('destroy-category/{id}','Admin\AdminController@destroycategory')->name('destroycategory');

Route::post('update-number/{id}','Admin\AdminController@updatenumber')->name('updatenumber');