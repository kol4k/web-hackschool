<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichR
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/logoutx', 'OtentikasiController@processLogout');
Route::post('/login', 'OtentikasiController@processLogin')->name('process.login');
Route::post('/logout', 'OtentikasiController@processLogout')->name('process.logout');
Route::get('/index.html', 'SiswaController@controlPage');

Route::get('/playujian', function () {
    return view('playujian');
})->name('ujian.play');
Route::post('/selesai_ujian', 'SiswaController@storeNilai')->name('process.nilai');

Route::group(['prefix' => '/pages'], function () {
    Route::get('/ujian.html', 'SiswaController@viewUjian')->name('view.ujian');
    Route::post('/playujian', 'SiswaController@storeUjian')->name('store.ujian');
    Route::get('/detail_ujian.html', 'SiswaController@detailUjian')->name('view.ujian.detail');
    Route::get('/pengumuman.html', function () {
        return view('pages.pengumuman');
    })->name('pengumuman');
    Route::get('/nilai.html', 'SiswaController@nilaiView')->name('nilai');    
});

Route::group(['prefix' => '/json'], function () {
    Route::get('/soal', 'SiswaController@getSoal');
});