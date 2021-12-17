<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasajeroController;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\PasajerosVuelosController;

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

// HOME
Route::get('/', function () {
    return view('home');
})->name("home"); //El name se le indica a la ruta no al return

// CREAR PASAJERO/VUELO
Route::get('/pasajeros', [PasajeroController::class, 'listar'])->name('pasajero.listar');
Route::get('/vuelos', [VueloController::class, 'listar'])->name('vuelo.listar');

Route::get('/pasajeros/store', [PasajeroController::class, 'store'])->name('pasajero.store');
Route::get('/pasajeros/borrar{id}', [PasajeroController::class, 'borrarPasajero'])->name('pasajero.borrar');
Route::get('/vuelos/store', [VueloController::class, 'store'])->name('vuelo.store');
Route::get('/vuelos/borrar{id}', [VueloController::class, 'borrarVuelo'])->name('vuelo.borrar');

// ASIGNAR LISTAR
Route::get('/PasajerosVuelos/listar', [PasajerosVuelosController::class, 'index'])->name('PasajerosVuelos.listar');
Route::post('/PasajerosVuelos/asignar', [PasajerosVuelosController::class, 'asignar'])->name('PasajerosVuelos.asignar');
Route::get('/PasajerosVuelos/borrar{idVuelo}/{idPasajero}', [PasajerosVuelosController::class, 'borrar'])->name('PasajerosVuelos.borrar');

