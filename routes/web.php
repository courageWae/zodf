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

Route::get('/home', 'HomeController@index')->name('home');

////////////////////////////////////////////// user /////////////////////////////////

Route::get('/', 'User\UserController@index')->name('index');

Route::get('contact', 'User\UserController@contact')->name('contact');

Route::get('about', 'User\UserController@about')->name('about');

Route::get('projects', 'User\UserController@projects')->name('projects');

Route::get('project-detail/{id}', 'User\UserController@projectdetail')->name('projectdetail');

Route::get('register-for-project/{id}', 'User\UserController@projectregister')->name('projectregister');

Route::post('save-register', 'User\UserController@saveregister')->name('saveregister');

////////////////////////////////////////////// admin /////////////////////////////////////////

Route::get('admin-login', 'Admin\AdminController@adminlogin')->name('adminlogin');

Route::get('admin-dashboard', 'Admin\AdminController@index')->name('admin.dashboard');

Route::get('add-project', 'Admin\AdminController@addproject')->name('addproject');

Route::post('save-project', 'Admin\AdminController@saveproject')->name('saveproject');

Route::get('all-projects', 'Admin\AdminController@allprojects')->name('allprojects');

Route::get('add-material', 'Admin\AdminController@addmaterial')->name('addmaterial');

Route::post('save-material', 'Admin\AdminController@savematerial')->name('savematerial');
