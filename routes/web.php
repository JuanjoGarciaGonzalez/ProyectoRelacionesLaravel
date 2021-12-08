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
    return view('home');
})->name("home"); //El name se le indica a la ruta no al return

Route::get('/pasajeros/crear', function () {
    return view('crearPasajero');
})->name("crearPasajero");

Route::get('/vuelos/crear', function () {
    return view('crearVuelo');
})->name("crearVuelo");
