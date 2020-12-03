<?php

use App\Http\Livewire\Bidan\Ska\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Bidan\Ska\Detail;

Route::get('/', 'BerandaController@index');


Route::get('/about', 'BerandaController@about');
Route::get('/kontak', 'BerandaController@kontak');

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
    Route::view('/data-anak', 'livewire.anak');
    Route::view('/data-ibu', 'livewire.ibu')->name('data.ibu');
    //Status Kesehatan Anak
    Route::view('/status-kesehatan-anak', 'livewire.ska')->name('ska.index');
    Route::get('/status-kesehatan-anak/anak/{id}', 'StatusKesehatanAnakController@show')->name('ska.detail');
    Route::get('/status-kesehatan-anak/anak/{id}/create', 'StatusKesehatanAnakController@create')->name('ska.create');
    Route::post('/status-kesehatan-anak/anak/{id}/create', 'StatusKesehatanAnakController@store')->name('ska.store');
    Route::get('/status-kesehatan-anak/anak/{id}/edit/{status_kesehatan_anak:id}', 'StatusKesehatanAnakController@edit')->name('ska.edit');
    Route::patch('/status-kesehatan-anak/anak/{id}/update/{status_kesehatan_anak:id}', 'StatusKesehatanAnakController@update')->name('ska.update');
    //Status Kesehatan Ibu
    Route::view('/status-kesehatan-ibu', 'livewire.ski')->name('ski.index');
    Route::get('/status-kesehatan-ibu/ibu/{id}', 'StatusKesehatanIbuController@show')->name('ski.detail');
    Route::get('/status-kesehatan-ibu/ibu/{id}/create', 'StatusKesehatanIbuController@create')->name('ski.create');
    Route::post('/status-kesehatan-ibu/ibu/{id}/create', 'StatusKesehatanIbuController@store')->name('ski.store');
    Route::get('/status-kesehatan-ibu/ibu/{id}/edit/{status_kesehatan_ibu:id}', 'StatusKesehatanIbuController@edit')->name('ski.edit');
    Route::patch('/status-kesehatan-ibu/ibu/{id}/update/{status_kesehatan_ibu:id}', 'StatusKesehatanIbuController@update')->name('ski.update');
});
//Post Untuk Bidan
Route::group(['prefix' => 'bidan/posts', 'middleware' => 'auth:bidan'], function () {
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('create', 'PostController@create')->name('post.create');
    Route::post('create', 'PostController@store')->name('post.store');
    Route::get('{post:slug}/edit', 'PostController@edit')->name('post.edit');
    Route::patch('{post:slug}/edit', 'PostController@update')->name('post.update');
    Route::delete('{post:id}/delete', 'PostController@destroy')->name('post.delete');
});


Route::group(['prefix' => 'ibu',  'middleware' => 'auth:ibu'], function () {
    Route::get('/', 'IbuController@index')->name('ibu.index');
    Route::get('/data-anak', 'IbuController@data_anak')->name('ibu.data.anak');
});

// Route::view('/status-kesehatan-anak/detail/{id}', 'livewire.ska_detail')->name('ska.detail');

Route::post('/images', 'PostController@uploadImage')->name('post.image');

Route::group(['prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// Halaman Utama
Route::get('list-berita', 'PostController@listBerita')->name('list.berita');

// list testing
Route::get('/beritaList', function () {
    return view('testing.beritaList');
})->name('berita.list');
