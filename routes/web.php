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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/form','Transaksis@index');
	Route::get('/create','Transaksis@create');
	Route::post('/store','Transaksis@store');
	Route::get('/edit/{id}','Transaksis@edit');
	Route::put('/update/{id}','Transaksis@update');
	Route::get('/destroy/{id}','Transaksis@destroy');