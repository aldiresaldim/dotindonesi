<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware('auth');
Route::get('/', 'App\Http\Controllers\LoginController@index')->middleware('guest');
Route::get('/login', 'App\Http\Controllers\LoginController@index')->middleware('guest');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
	Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout')->middleware('auth');
	Route::post('/postLogin', 'App\Http\Controllers\LoginController@postLogin')->name('postLogin')->middleware('guest');
	Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
	
	Route::prefix('kategori')->group(function () {
		Route::get('/', 'App\Http\Controllers\KategoriController@index')->name('kategori')->middleware('auth');
		Route::get('/add', 'App\Http\Controllers\KategoriController@add')->name('kategori')->middleware('auth');
		Route::get('/edit/{id}', 'App\Http\Controllers\KategoriController@edit')->name('kategori')->middleware('auth');
		
		Route::post('/store', 'App\Http\Controllers\KategoriController@store')->name('kategori')->middleware('auth');
		Route::post('/update', 'App\Http\Controllers\KategoriController@update')->name('kategori')->middleware('auth');
		Route::post('/delete', 'App\Http\Controllers\KategoriController@delete')->name('kategori')->middleware('auth');
	});
	
	Route::prefix('barang')->group(function () {
		Route::get('/', 'App\Http\Controllers\BarangController@index')->name('barang')->middleware('auth');
		Route::get('/add', 'App\Http\Controllers\BarangController@add')->name('barang')->middleware('auth');
		Route::get('/edit/{id}', 'App\Http\Controllers\BarangController@edit')->name('barang')->middleware('auth');
		
		Route::post('/store', 'App\Http\Controllers\BarangController@store')->name('barang')->middleware('auth');
		Route::post('/update', 'App\Http\Controllers\BarangController@update')->name('barang')->middleware('auth');
		Route::post('/delete', 'App\Http\Controllers\BarangController@delete')->name('barang')->middleware('auth');
	});
	
	
});



