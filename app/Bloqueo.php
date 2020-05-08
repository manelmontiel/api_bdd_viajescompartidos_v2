<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloqueo extends Model
{
    protected $table = 'bloqueos';

    //relacion 1:1 con Usuario
    public function usuario_bloqueador(){
        return $this->belongsTo('App\Usuario');
    }

    //relacion 1:1 con Usuario
    public function usuario_bloqueado(){
        return $this->belongsTo('App\Usuario');
    }
}
