<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiembraHongo extends Model
{
    protected $table = 'siembras_hongos';
    protected $fillable = ['cultivo_id', 'fecha_prevista_siembra', 'numero_de_bloques_previsto', 'numero_de_frascos_previsto', 'numero_de_cajas_petri_necesarias', 'cantidad_semillas_necesaria', 'fecha_real_siembra', 'trabajador_semilla_id', 'fecha_siembra_f1', 'contaminaciones', 'fecha_siembra_f2', 'numero_f2', 'contaminaciones_f2', 'numero_total_frascos', 'notas_semillas', 'area_semilla_id', 'area_bloques_id', 'trabajador_bloque_id', 'fechas_siembra_bloque', 'numero_frascos', 'bloques_sembrados', 'fecha_invasion', 'bloques_invadidos', 'fecha_termino', 'tipo_de_termino', 'notas_bloque'];
}
