<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellidos', 'nif', 'nickname', 'password', 'fecha_nacimiento', 'pais_origen', 'sexo', 'email'];

    //relacion 1:N con Usuario_Viaje
    public function usuarios_viajes(){
        return $this->hasMany('App\Usuario_Viaje');
    }
    //relacion 1:1 con Bloqueo
    public function usuario_bloqueador(){
        return $this->belongsTo('App\Bloqueo');
    }
    //relacion 1:1 con Bloqueo
    public function usuario_bloqueado(){
        return $this->belongsTo('App\Bloqueo');
    }
}
