<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('origen');
            $table->string('destino');
            $table->integer('numero_viajeros');
            $table->string('tipo_viaje');
            $table->integer('precio');
            $table->string('tipo_desplazamiento');
            $table->string('nombre_viaje');
            $table->string('estado_viaje');
            $table->string('organizador');
            $table->string('transporte');
            $table->date('fecha_inicio_viaje');
            $table->date('fecha_final_viaje');
            //faltan las relaciones
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viajes');
    }
}
