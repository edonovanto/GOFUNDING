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
Route::get('/histori', 'HomeController@histori')->name('histori');
Route::get('/setting', 'HomeController@setting')->name('setting');
// Route::get('/revisi', 'HomeController@revisi')->name('revisi_siswa');

// BuatController
Route::get('/buat', 'BuatController@index')->name('buat');
Route::post('/buat/upload', 'BuatController@upload')->name('upload');

// HistoryController
Route::get('/histori', 'HistoryController@index')->name('histori');
Route::get('/histori/edit/{proposalId}', 'HistoryController@editProposal')->name('editProposal');
Route::get('/histori/edit/simpan/{id}', 'HistoryController@uploadEditProposal')->name('uploadEditProposal');
Route::get('/histori/hapus/{proposalId}', 'HistoryController@hapusProposal')->name('hapusProposal');

// CheckController
Route::get('/check', 'CheckController@index')->name('check');
Route::get('/accept', 'CheckController@accept')->name('checks');
Route::get('/check/terima/{proposalId}', 'CheckController@terima')->name('terima');
Route::get('/check/{proposalId}', 'CheckController@check')->name('download');

// RevisiController
Route::get('/revisi_siswa', 'RevisiController@index')->name('revisi_siswa');
Route::post('/check/upload', 'RevisiController@revisi')->name('revisi');
Route::get('/check/revisi/{proposalId}', 'RevisiController@form_revisi')->name('revisiProposal');
Route::get('/check/download/{proposalId}', 'RevisiController@check')->name('download');