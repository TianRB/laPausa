<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarioMaterial extends Model
{
    protected $table = 'inventario_materiales';
    protected $fillable = ['material_id', 'area_id', 'cantidad', 'unidad_medida', 'fecha_alta', 'notificaciones'];
}