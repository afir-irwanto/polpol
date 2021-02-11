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
    return view('welcome');
});

Route::get('mahasiswa',"MahasiswaController@index");
Route::post('mahasiswa',"MahasiswaController@insert")->name('mahasiswa.insert');
Route::get('kelompok', 'KelompokController@index');
Route::post('kelompok', 'KelompokController@insert')->name('kelompok.insert');