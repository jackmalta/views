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
    $nome = "Juca";
    //dd(compact('cursos'));
    return view('ola', compact('nome'));
});
Route::get('/cursos', 'CursosController@index');
Route::get('/cursos/{index}', 'CursosController@show');

Route::get('/inicio', 'InicioController@teste');
