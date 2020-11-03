<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'BerandaController@index');
// Route::get('/login', function () {
//     dd(auth()->guard('bidan')->check());
//     if (auth()->guard('bidan')->check()) {
//         return redirect()->route('authBidan');
//     } else if (auth()->guard('ibu')->check()) {
//         return redirect()->route('authIbu');
//     }
//     return redirect()->route('login');
// })->name('login');

Route::get('/about', 'BerandaController@about');
Route::get('/kontak', 'BerandaController@kontak');


Route::group(['prefix' => '/bidan'], function () {
    Route::get('/', 'BidanController@index')->name('bidan_index');
    Route::get('/data/ibu', 'BidanController@showDataIbu')->name('bidan.data.ibu');
    Route::post('/data/ibu/store', 'BidanController@storeDataIbu')->name('addData');

    Route::delete('/data/ibu/{ibu:id}/delete', 'BidanController@destroyDataIbu');
    Route::patch('/data/ibu/{ibu:id}/update', 'BidanController@updateDataIbu')->name('bidan.data.ibu.update');

    Route::get('/data/anak', 'BidanController@showDataAnak')->name('bidan.data.anak');
    Route::get('/laporan', 'BidanController@showLaporan')->name('bidan.laporan');
    Route::get('/tracking', 'BidanController@showTracking')->name('bidan.tracking');
});


Route::group(['prefix' => 'ibu'], function () {
    Route::get('/', function () {
        return "Hello Ibu";
    });
});

Route::view('/bidan', 'livewire.ibu');
Route::view('/anak', 'livewire.anak');

Route::get('testauthibu', function () {
    // return dd(auth()->guard('ibu')->user());
    return "Welkam " . auth()->guard()->user()->nama . "di Halaman ibu";
})->middleware('auth:ibu')->name('authIbu');

Route::get('testauthbidan', function () {
    // return dd(auth()->guard('bidan')->user());
    return "Welkam " . (auth()->guard('bidan')->user()->nama) . " di Halaman Bidan";
})->middleware('auth:bidan')->name('authBidan');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testing', "testingController@index");
