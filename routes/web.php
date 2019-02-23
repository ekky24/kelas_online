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
    return view('akame.index');
});

Route::get('/signin', 'UserController@signin');
Route::get('/signup', 'UserController@signup');
Route::post('/signup', 'UserController@simpan');
Route::post('/signin', 'UserController@authenticate');

Route::get('/admin', 'AdminController@member');

Route::get('/admin_class', function () {
    return view('admin.class');
});


Route::get('/post', function () {
    return view('akame.post');
});
