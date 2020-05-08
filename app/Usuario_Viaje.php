<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_Viaje extends Model
{
    protected $table = 'usuarios_viajes';

    //relacion 1:N con Usuario
    public function usuarios(){
        return $this->hasMany('App\Usuario');
    }
    //relacion 1:N con Viaje
    public function viajes(){
        return $this->hasMany('App\Viaje');
    }
}
