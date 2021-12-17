<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasajero;

class PasajeroController extends Controller
{
    protected $pasajeros;
    public function __construct(Pasajero $pasajeros) {
        $this->pasajero = $pasajeros;
    }

    public function listar() {
        $pasajeros = Pasajero::all();
        return view('crearPasajero')->with('pasajeros', $pasajeros);
    }

    public function store(Request $request) {
        $pasajero = new Pasajero();
        $pasajero->create($request->all());
        $pasajeros = Pasajero::all();
        return view('crearPasajero')->with('pasajeros', $pasajeros);
    }

    public function borrarPasajero($id) {
        $pasajero = Pasajero::find($id);
        $pasajero->delete();
        $pasajeros = Pasajero::all();
        return view('crearPasajero')->with('pasajeros', $pasajeros);
    }
}
