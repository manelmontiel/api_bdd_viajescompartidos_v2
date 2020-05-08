<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloqueosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloqueos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario_bloqueador')->unsigned()->default(0);
            $table->integer('id_usuario_bloqueado')->unsigned()->default(0);           
            $table->boolean('bloqueado');
            //relacions amb tabla usuarios
            $table->foreign('id_usuario_bloqueador')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_usuario_bloqueado')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('bloqueos');
    }
}
