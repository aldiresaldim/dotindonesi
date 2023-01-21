<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('kategori')->group(function () {
		Route::get('/', 'App\Http\Controllers\ApiKategoriController@index')->name('kategori');
		Route::post('/', 'App\Http\Controllers\ApiKategoriController@store')->name('kategori');
		Route::get('/{id}', 'App\Http\Controllers\ApiKategoriController@get')->name('kategori');

		Route::put('/{id}', 'App\Http\Controllers\ApiKategoriController@update')->name('kategori');
		Route::delete('/{id}', 'App\Http\Controllers\ApiKategoriController@delete')->name('kategori');
});
	
Route::prefix('barang')->group(function () {
	Route::get('/', 'App\Http\Controllers\ApiBarangController@index')->name('barang');
	Route::get('/{id}', 'App\Http\Controllers\ApiBarangController@get')->name('barang');
	
	Route::post('/', 'App\Http\Controllers\ApiBarangController@store')->name('barang');
	Route::put('/{id}', 'App\Http\Controllers\ApiBarangController@update')->name('barang');
	Route::delete('/{id}', 'App\Http\Controllers\ApiBarangController@delete')->name('barang');
});