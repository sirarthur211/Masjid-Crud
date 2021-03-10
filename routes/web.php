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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduk', 'App\Http\Controllers\pendudukController@index');
Route::post('/penduduk/create', 'App\Http\Controllers\pendudukController@create');
Route::get('/penduduk.{id}/edit', 'App\Http\Controllers\pendudukController@edit');
Route::post('/penduduk/{id}/update', 'App\Http\Controllers\pendudukController@update');
Route::get('/penduduk.{id}/delete', 'App\Http\Controllers\pendudukController@delete');
