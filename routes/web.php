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

Route::get('/transaksi/form','Transaksis@index');
	Route::get('/transaksi/create','Transaksis@create');
	Route::post('/transaksi/store','Transaksis@store');
	Route::get('/transaksi/edit/{id}','Transaksis@edit');
	Route::put('/transaksi/update/{id}','Transaksis@update');
	Route::get('/transaksi/destroy/{id}','Transaksis@destroy');

Route::get('/data/form','BiayaController@index');
	Route::get('/data/create','BiayaController@create');
	Route::post('/data/store','BiayaController@store');
	Route::get('/data/edit/{id}','BiayaController@edit');
	Route::put('/data/update/{id}','BiayaController@update');
	Route::get('/data/destroy/{id}','BiayaController@destroy');

Route::get('/diskon/form','DiskonController@index');
	Route::get('/diskon/create','DiskonController@create');
	Route::post('/diskon/store','DiskonController@store');
	Route::get('/diskon/edit/{id}','DiskonController@edit');
	Route::put('/diskon/update/{id}','DiskonController@update');
	Route::get('/diskon/destroy/{id}','DiskonController@destroy');