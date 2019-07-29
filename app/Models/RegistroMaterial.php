<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroMaterial extends Model
{
    protected $table = "registro_materiales";
    protected $fillable = ['material_id', 'area_id', 'trabajador_id', 'cantidad', 'unidad_medida', 'precio_total', 'precio_unitario', 'fecha_ingreso', 'notas'];

    public function material()
    {
        return $this->belongsTo('App\Models\Material');
    }
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function trabajador()
    {
        return $this->belongsTo('App\Models\Trabajador');
    }
}
