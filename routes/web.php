<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasajeroController;
use App\Http\Controllers\VueloController;

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

Route::get('/pasajeros/store', [PasajeroController::class, 'store'])->name('pasajero.store');
Route::get('/vuelos/store', [VueloController::class, 'store'])->name('vuelo.store');