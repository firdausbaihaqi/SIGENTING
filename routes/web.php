<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'BerandaController@index');
Route::get('/about', 'BerandaController@about');
Route::get('/kontak', 'BerandaController@kontak');


Route::get('/bidan', 'BidanController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/testing', "testingController@index");
