<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MantenimientoReparacion extends Model
{
    protected $table = 'mantenimiento_y_reparaciones';
    protected $fillable = ['herramienta_id', 'trabajador_id', 'mantenimiento_o_reparacion', 'descripcion_mantenimiento_o_reparacion', 'costo_total', 'fecha', 'notas'];

    public function herramienta()
    {
        return $this->belongsTo('App\Models\HerramientaMaquinaria', 'herramienta_id');
    }

    public function trabajador()
    {
        return $this->belongsTo('App\Models\Trabajador', 'trabajador_id');
    }
}
