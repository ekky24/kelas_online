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

Route::get('/', 'UserController@index');
Route::get('/signin', 'UserController@signin');
Route::get('/signup', 'UserController@signup');
Route::get('/signout', 'UserController@signout');
Route::get('/pengaturan', 'UserController@pengaturan');
Route::get('/daftar_promo', 'UserController@daftar_promo');
Route::get('/list_promo', 'UserController@list_promo');
Route::get('/download/{filename}', 'UserController@download');
Route::get('/pos/{post_id}', 'UserController@displayPost');
Route::get('/list_materi/{post_id}', 'UserController@list_materi');
Route::get('/lihat_video/{video_id}', 'UserController@lihat_video');
Route::get('/download_video/{path}', 'UserController@download_video');
Route::post('/signup', 'UserController@simpan');
Route::post('/signin', 'UserController@authenticate');
Route::post('/pengaturan', 'UserController@simpan_pass_baru');
Route::post('/daftar_promo', 'UserController@submit_promo');

Route::get('/admin', 'AdminController@member');
Route::post('/admin', 'AdminController@store_course');
Route::post('/admin/success', 'AdminController@store');
Route::get('/admin_signout', 'AdminController@admin_signout');
Route::get('/list_user_promo', 'AdminController@get_user_promo');
Route::resource('kelas', 'KelasController');
Route::resource('posts', 'PostController');
Route::get('/kelas/{kelas_id}', 'SubKelasController@detail');
Route::get('/post', 'SubKelasController@post');
Route::get('/get_sub_kelas/{kelas_id}', 'SubKelasController@get_sub_kelas');
Route::post('/post', 'SubKelasController@simpan_post');

Route::resource('subkelas', 'SubController');
Route::resource('video', 'VideoController');
Route::resource('promo', 'PromoController');

Route::get('/admin/promo/upload', 'PromoController@upload');
Route::get('/admin/promo', 'PromoController@show_all');
Route::get('/admin/promo/{id}/delete', 'PromoController@delete');
Route::get('/admin/promo/{id}/edit', 'PromoController@edit');
Route::get('/admin/video/upload', 'VideoController@upload');
Route::get('/admin/video', 'VideoController@show_all');
Route::get('/admin/video/{id}/edit', 'VideoController@edit');
Route::get('/admin/video/{id}/delete', 'VideoController@delete');
Route::get('/admin/video/{id}', 'VideoController@show');
Route::get('/enroll', 'EnrollController@show_all');
Route::post('/admin/video/upload', 'VideoController@simpan');
Route::post('/admin/promo/upload', 'PromoController@simpan');

Route::get('/phpconfig', function() {
	return view('includes.php_config');
});

