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
    return view('paginaInicial');
});

Route::get('/equiposNFL', function () {
    return view('equiposNFL');
});

Route::get('/equiposAFC', function () {
    return view('equiposAFC');
});

Route::get('/equiposNFC', function () {
    return view('equiposNFC');
});

Route::get('datosEquipo/{nombre}', 'EquiposController@carga_equipo'); 
