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
    return view('login');
});

Route::post('/login', 'OtentikasiController@processLogin')->name('process.login');
Route::post('/logout', 'OtentikasiController@processLogout')->name('process.logout');

Route::get('/index.html', 'SiswaController@controlPage');
Route::get('/play/{kode}', function () {
    return view('playujian');
});
Route::group(['prefix' => '/pages'], function () {
    Route::get('/ujian.html', 'SiswaController@viewUjian')->name('view.ujian');
});