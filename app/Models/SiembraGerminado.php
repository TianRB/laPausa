<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiembraGerminado extends Model
{
    protected $table = 'siembras_germinados';
    protected $fillable = ['cultivo_id', 'trabajador_id', 'fecha_prevista_siembra', 'tipo_charola_prevista', 'cantidad_charolas_prevista', 'densidad_siembra_prevista', 'cantidad_semilla_prevista', 'fecha_real_siembra', 'area_id', 'tipo_charola', 'cantidad_charolas', 'densidad_siembra', 'cantidad_semilla', 'registro_cancelacion_siembras', 'notas'];
}
