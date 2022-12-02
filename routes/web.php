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
    return view('user/home');
});

Route::get('/about', function () {
    return view('user/about');
});

Route::get('/admin', function () {
    return view('admin/home');
});
Route::get('/upload', function () {
    return view('admin/upload');
});

Auth::routes();

Route::get('/redirect', 'HomeController@redirect')->name('redirect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'mainController@shop')->name('shop');
Route::get('/update/{id}', 'mainController@update')->name('update');
Route::post('/update/{id}', 'mainController@updateNow')->name('updateNow');
Route::get('/delete/{id}', 'mainController@delete')->name('delete');

Route::POST('/upload', 'mainController@index')->name('upload');
