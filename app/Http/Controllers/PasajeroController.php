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

    public function store(Request $request) {
        $pasajero = new Pasajero();
        $pasajero->create($request->all());
        return redirect()->route('home');
    }
}
