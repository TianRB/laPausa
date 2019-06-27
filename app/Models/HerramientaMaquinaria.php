<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HerramientaMaquinaria extends Model
{
    protected $table = 'herramientas_y_maquinaria';
    protected $fillable = ['herramienta_id', 'area_id', 'trabajador_id', 'cantidad', 'unidad_de_medida', 'fecha_alta', 'fecha_baja', 'notas'];

    public function herramienta()
    {
        return $this->belongsTo('App\Models\CatalogoHerramientaMaquinaria', 'herramienta_id');
    }
    public function area()
    {
        return $this->belongsTo('App\Models\Area', 'area_id');
    }
    public function trabajador()
    {
        return $this->belongsTo('App\Models\Trabajador', 'trabajador_id');
    }
}
