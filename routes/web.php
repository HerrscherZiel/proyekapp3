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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('kategori', 'KategoriController');
Route::resource('wilayah', 'WilayahController');

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('user', 'UserController');
Route::resource('submit', 'SubmitController');
Route::resource('acc', 'AccController');
Route::resource('objek', 'ObjekController');
