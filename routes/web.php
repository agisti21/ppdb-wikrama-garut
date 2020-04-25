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
Route::resource('pesertas','PesertaController');
Route::resource('jekas','JekaController');
Route::resource('agamas','AgamaController');
Route::resource('goldars','GoldarController');
Route::resource('tinggals','TinggalController');
Route::resource('pendidikans','PendidikanController');
Route::resource('infos','InfoController');
Route::resource('jalurs','JalurController');
Route::get('pesertas/cetak', 'PesertaController@cetak_pdf');

