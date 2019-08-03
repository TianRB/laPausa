<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroProcedimiento extends Model
{
    protected $fillable = ['area_id', 'insumo_id', 'trabajador_id', 'procedimientos', 'fecha', 'tiempo_consumido', 'notas'];
}
