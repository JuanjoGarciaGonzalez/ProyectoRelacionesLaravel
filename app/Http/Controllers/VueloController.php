<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;

class VueloController extends Controller
{
    protected $vuelos;
    public function __construct(Vuelo $vuelos) {
        $this->vuelo = $vuelos;
    }

    public function listar() {
        $vuelos = Vuelo::all();
        return view('crearVuelo')->with('vuelos', $vuelos);
    }

    public function store(Request $request) {
        $vuelo = new Vuelo();
        $vuelo->create($request->all());
        $vuelos = Vuelo::all();
        return view('crearVuelo')->with('vuelos', $vuelos);
    }

    public function borrarVuelo($id) {
        $vuelo = Vuelo::find($id);
        $vuelo->delete();
        $vuelos = Vuelo::all();
        return view('crearVuelo')->with('vuelos', $vuelos);
    }
}
