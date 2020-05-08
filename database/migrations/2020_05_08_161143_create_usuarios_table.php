<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nif');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nickname');
            $table->string('password');
            $table->date('fecha_nacimiento');
            $table->boolean('premium');
            $table->integer('perfil');
            $table->boolean('desactivado');
            $table->string('pais_origen');
            $table->string('sexo');
            $table->string('email');
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
        Schema::dropIfExists('usuarios');
    }
}
