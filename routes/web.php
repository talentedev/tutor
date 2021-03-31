<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');
Route::get('logout', 'App\Http\Controllers\UserController@logout')->name('logout');

//Admin Route
Route::get('view_admin', 'App\Http\Controllers\AdminController@view_admin')->name('view_admin')->middleware('admin');
Route::get('add_course', 'App\Http\Controllers\Admincontroller@add_course')->name('add_course')->middleware('admin');
Route::post('add_paper' , 'App\Http\Controllers\AdminController@add_paper')->name('add_paper')->middleware('admin');
route::get('view_paper', 'App\Http\Controllers\AdminController@view_paper')->name('view_paper')->middleware('admin');
Route::get('edituser/{id}', 'App\Http\Controllers\AdminController@edit')->name('edituser')->middleware('admin');
Route::get('deluser/{id}', 'App\Http\Controllers\AdminController@delete')->name('deluser')->middleware('admin');
Route::post('updatecourse' , 'App\Http\Controllers\AdminController@updatecourse')->name('updatecourse')->middleware('admin');


//User Route
Route::get('index_page', 'App\Http\Controllers\UserController@index_page')->name('index_page')->middleware('user');
route::get('show_courses', 'App\Http\Controllers\UserController@show_courses')->name('show_courses')->middleware('user');

