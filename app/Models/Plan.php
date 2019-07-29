<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';
    protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'total_ventas', 'subtotal_por_semana', 'total_ventas_periodo_anterior', 'total_anual_proyectado'];
}
