<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroCombustible extends Model
{
    protected $table = 'registro_combustible';
    protected $fillable = ['herramienta_id', 'trabajador_id', 'litros_cargados', 'costo_litro', 'odometro_u_horas', 'fecha', 'notas'];

    public function herramienta()
    {
        return $this->belongsTo('App\Models\HerramientaMaquinaria', 'herramienta_id');
    }

    public function trabajador()
    {
        return $this->belongsTo('App\Models\Trabajador', 'trabajador_id');
    }
}

