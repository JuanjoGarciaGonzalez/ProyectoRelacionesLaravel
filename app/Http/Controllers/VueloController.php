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

    public function store(Request $request) {
        $vuelo = new Vuelo();
        $vuelo->create($request->all());
        return redirect()->route('home');
    }
}
