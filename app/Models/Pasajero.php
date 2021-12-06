<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    use HasFactory; //se usa para poder crear faactorías(llenar la tabla de datos aleatorios) de este modelo
    protected $fillable = [ 
        "nombre",
        "apellidos",
        "edad",
        "sexo"
    ];

    public function vuelos() { //El modelo Pasajero va a tener un método que le da acceso a los vuelos relacionados consigo mismo
        return $this->belongsToMany('App\Models\Vuelo');
    }

}
