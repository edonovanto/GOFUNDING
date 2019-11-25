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
    return view('landing_page');
});

Route::get('/langkah_pengajuan', function () {
    return view('langkah_pengajuan');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Auth::routes();

// HomeController
Route::get('/welcome', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home')->name('home2');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/buat', 'HomeController@buat')->name('buat');
Route::get('/setting', 'HomeController@setting')->name('setting');

// BuatController
Route::post('/buat/upload', 'BuatController@upload')->name('upload');