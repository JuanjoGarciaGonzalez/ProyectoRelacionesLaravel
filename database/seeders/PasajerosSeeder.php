<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasajerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasajeros')->insert([
            'nombre' => 'Hiroshi',
            'apellidos' => 'Si Tae',
            'edad' => 54,
            'sexo' => 'hombre',
        ]);

        DB::table('pasajeros')->insert([
            'nombre' => 'Mery',
            'apellidos' => 'Santos Pereira',
            'edad' => 34,
            'sexo' => 'mujer',
        ]);

        DB::table('pasajeros')->insert([
            'nombre' => 'Joaquín',
            'apellidos' => 'Fernández Sánchez',
            'edad' => 25,
            'sexo' => 'hombre',
        ]);
    }
}
