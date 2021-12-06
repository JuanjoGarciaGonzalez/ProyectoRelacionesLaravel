<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPasajeroVuelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero_vuelo', function (Blueprint $table) {
            $table->integer("pasajero_id")->unsigned();
            $table->integer("vuelo_id")->unsigned();
            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade'); //Añado una clave foránea al campo pasajero_id asociada al campo id de la tabla pasajeros
            $table->foreign('vuelo_id')->references('id')->on('vuelos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("pasajero_vuelo");
    }
}
