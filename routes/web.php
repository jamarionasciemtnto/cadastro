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

Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/produtos', 'ControladorProduto@index');

Route::get('/categorias/new', 'ControladorCategoria@create');
Route::get('/produtos/new', 'ControladorProduto@create');

Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/delete/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/edit/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');