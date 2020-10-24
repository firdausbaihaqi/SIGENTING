<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'BerandaController@index');
Route::get('/about', 'BerandaController@about');
Route::get('/kontak', 'BerandaController@kontak');


// Route::group(['prefix' => '/bidan'], function () {
//     Route::get('/', 'BidanController@index')->name('bidan.index');
//     Route::get('/data/ibu', 'BidanController@showDataIbu')->name('bidan.data.ibu');
//     Route::post('/data/ibu/store', 'BidanController@storeDataIbu')->name('addData');

//     Route::delete('/data/ibu/{ibu:id}/delete', 'BidanController@destroyDataIbu');
//     Route::patch('/data/ibu/{ibu:id}/update', 'BidanController@updateDataIbu')->name('bidan.data.ibu.update');

//     Route::get('/data/anak', 'BidanController@showDataAnak')->name('bidan.data.anak');
//     Route::get('/laporan', 'BidanController@showLaporan')->name('bidan.laporan');
//     Route::get('/tracking', 'BidanController@showTracking')->name('bidan.tracking');
// });

Route::view('/bidan', 'livewire.ibu');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testing', "testingController@index");
