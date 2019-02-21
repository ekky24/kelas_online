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

Route::get('/signin', function () {
    return view('akame.signin');
});

Route::get('/signup', function () {
    return view('akame.signup');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/post', function () {
    return view('akame.post');
});
