<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasajero;
use App\Models\Vuelo;

class PasajerosVuelosController extends Controller
{
    public function index() {
        $pasajeros = Pasajero::all(); //un método precedido de dos puntos es un método estático, de una flecha es un método normal
        $vuelos = Vuelo::all();
        return view('asignarListar')->with('pasajeros', $pasajeros)->with('vuelos', $vuelos);
    }

    function asignar(Request $request) {
        $pasajeroAsignar = Pasajero::find($request->get("pasajero")); //recoge el objeto con el id que mando por el select
        $vueloAsignar = Vuelo::find($request->get("vuelo")); 
        $pasajeroAsignar->vuelos()->attach($vueloAsignar->id); //el método vuelos se definió en el modelo para acceder a los vuelos relacionados a ese pasajero
        $pasajeros = Pasajero::all(); //un método precedido de dos puntos es un método estático, de una flecha es un método normal
        $vuelos = Vuelo::all();
        return view('asignarListar')->with('pasajeros', $pasajeros)->with('vuelos', $vuelos);
    }

}
