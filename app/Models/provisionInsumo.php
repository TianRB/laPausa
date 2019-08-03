<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provisionInsumo extends Model
{
    protected $table = 'provision_insumos';
    protected $fillable = ['area_id', 'insumo_id', 'trabajador_id', 'fecha', 'cantidad', 'unidad_medida', 'area_destino_id', 'notas'];
}
