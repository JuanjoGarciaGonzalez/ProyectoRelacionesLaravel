<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vuelos')->insert([
            'nombre' => 'G-321',
            'origen' => 'París',
            'destino' => 'Londres',
        ]);

        DB::table('vuelos')->insert([
            'nombre' => 'f-211',
            'origen' => 'Berlín',
            'destino' => 'Moscú',
        ]);

        DB::table('vuelos')->insert([
            'nombre' => 'L-692',
            'origen' => 'San Francisco',
            'destino' => 'Nueva Jersey',
        ]);
    }
}
