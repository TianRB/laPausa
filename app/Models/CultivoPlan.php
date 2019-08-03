<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CultivoPlan extends Model
{
    protected $table = 'cultivo_planes';
    protected $fillable = ['cultivo_id', 'plan_id', 'tipo_de_precio_id', 'cantidad_proyectada_por_cosecha', 'cantidad_proyectada_por_semana', 'fechas_de_siembra', 'unidad_de_medida', 'ingreso_proyectado_anual', 'ingreso_proyectado_por_cosecha', 'ingreso_proyectado_por_semana', 'cantidad_por_cosecha', 'cantidad_por_semana', 'cantidad_venta_proyectada', 'cantidad_proyectada_por_cosecha_periodo_anterior', 'cantidad_proyectada_por_semana_periodo_anterior', 'cantidad_venta_periodo_anterior', 'metros_lineales_necesarios', 'frascos_por_siembra', 'cajas_petri_por_siembra'];
}
