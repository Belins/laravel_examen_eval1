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
Route::get('git', function () {
    return view('git');
})->name('git');

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/tiendas','TiendaController@index')->name('tiendas.index');
Route::get('/creartienda','TiendaController@create')->name('tiendas.create');
Route::post('/creartienda/store','TiendaController@store')->name('tiendas.store');
Route::get('productos/index','ProductController@index')->name('productos.index');
