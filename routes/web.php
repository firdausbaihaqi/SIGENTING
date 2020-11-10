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

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('create', 'PostController@create')->name('post.create');
    Route::post('create', 'PostController@store')->name('post.store');
    Route::get('{post:slug}/edit', 'PostController@edit')->name('post.edit');
    Route::patch('{post:slug}/edit', 'PostController@update')->name('post.update');
    Route::delete('{post:id}/delete', 'PostController@destroy')->name('post.delete');
});

Route::get('/status-kesehatan-anak', 'StatusKesehatanAnakController@index')->name('ska.index');


Route::post('/images', 'PostController@uploadImage')->name('post.image');

Route::group(['prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
