<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasajero;
use App\Models\Vuelo;

class PasajerosVuelosController extends Controller
{
    public function index() {
        $registros = Mensaje::all();
        //return view('mensajes.index', compact('mensajes'));
        return view('asignarListar')->with('registros', $registros);
    }

    function asignar() {
        return redirect()->route('PasajerosVuelos.listar');
    }

    function listar() {
        return redirect()->route('asignarListar');
    }
}
