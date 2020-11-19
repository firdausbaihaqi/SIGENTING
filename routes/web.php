<?php

use App\Http\Livewire\Bidan\Ska\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Bidan\Ska\Detail;

Route::get('/', 'BerandaController@index');


Route::get('/about', 'BerandaController@about');
Route::get('/kontak', 'BerandaController@kontak');

Route::get('testauthibu', function () {
    return "Welkam " . auth()->guard()->user()->nama . "di Halaman ibu";
})->middleware('auth:ibu')->name('authIbu');

Route::get('testauthbidan', function () {
    return "Welkam " . auth()->guard('bidan')->user()->nama . " di Halaman Bidan";
})->middleware('auth:bidan')->name('authBidan');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testing', "testingController@index");

Route::group(['prefix' => 'bidan', 'middleware' => 'auth:bidan'], function () {
    Route::get('/', function () {
        return 'ini root bidan';
    });
    Route::view('/anak', 'livewire.anak');
    Route::view('/data-ibu', 'livewire.ibu')->name('data.ibu');
    Route::view('/status-kesehatan-anak', 'livewire.ska')->name('ska.index');
    Route::get('/status-kesehatan-anak/anak/{id}', 'StatusKesehatanAnakController@show')->name('ska.detail');
    Route::get('/status-kesehatan-anak/anak/{id}/create', 'StatusKesehatanAnakController@create')->name('ska.create');
    Route::post('/status-kesehatan-anak/anak/{id}/create', 'StatusKesehatanAnakController@store')->name('ska.store');
    Route::get('/status-kesehatan-anak/anak/{id}/edit/{status_kesehatan_anak:id}', 'StatusKesehatanAnakController@edit')->name('ska.edit');
    Route::patch('/status-kesehatan-anak/anak/{id}/update/{status_kesehatan_anak:id}', 'StatusKesehatanAnakController@update')->name('ska.update');
});
//post
Route::group(['prefix' => 'bidan/posts', 'middleware' => 'auth:bidan'], function () {
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('create', 'PostController@create')->name('post.create');
    Route::post('create', 'PostController@store')->name('post.store');
    Route::get('{post:slug}/edit', 'PostController@edit')->name('post.edit');
    Route::patch('{post:slug}/edit', 'PostController@update')->name('post.update');
    Route::delete('{post:id}/delete', 'PostController@destroy')->name('post.delete');
});


// Route::view('/status-kesehatan-anak/detail/{id}', 'livewire.ska_detail')->name('ska.detail');

Route::post('/images', 'PostController@uploadImage')->name('post.image');

Route::group(['prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


// list testing
Route::get('/beritaList', function () {
    return view('testing.beritaList');
})->name('berita.list');
