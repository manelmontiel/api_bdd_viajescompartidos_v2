<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $table = 'viajes';
    protected $fillable = ['origen', 'destino', 'numero_viajeros', 'tipo_viaje', 'precio', 'tipo_desplazamiento', 'nombre_viaje', 'estado_viaje', 'transporte', 'fecha_inicio_viaje', 'fecha_final_viaje', 'privacidad'];

    //relacion 1:N con Usuarios_Viajes
    public function usuarios_viajes(){
        return $this->hasMany('App\Usuario_Viaje');
    }
}
