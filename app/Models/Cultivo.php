<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $fillable = ['especie', 'variedad', 'nombre_cientifico', 'nombre_comercial', 'tipo_cultivo', 'tipo_siembra', 'tipo_cosecha', 'veces_sembrado', 'temporada_optima_siembra', 'dias_a_germinacion', 'dias_a_trasplante', 'dias_a_comienzo_cosecha', 'dias_a_termino_cosecha', 'fecha_inicio_cosecha', 'fecha_termino_cosecha', 'distancia_siembra', 'densidad_siembra', 'hileras', 'unidad_medida_venta', 'unidad_medida_rendimiento', 'rendimiento_promedio', 'rendimiento_promedio_acumulado', 'semillas_por_gramo', 'calificacion_clientes', 'ingreso_por_metro_lineal', 'indice_ingreso_por_tiempo', 'semillas_por_saco', 'valor_por_hectarea', 'valor_por_kilogramo', 'ingreso_por_arbol', 'tipo_charola'];

    public function familia()
    {
        return $this->belongsToMany('App\Models\Familia');
    }
    public function proveedor()
    {
        return $this->belongsToMany('App\Models\Proveedor');
    }
    public function grupo()
    {
        return $this->belongsToMany('App\Models\Grupo');
    }
    public function resistencias()
    {
        return $this->belongsToMany('App\Models\EnfermedadPlaga', 'cultivo_resistencia', 'cultivo_id', 'enfermedad_o_plaga_id')->withPivot('resistencia_a_enfermedad_o_plaga', 'suceptibilidad_a_enfermedad_o_plaga', 'suceptibilidad_a_enfermedad_o_plaga_acumulada');;
    }
    public function enfermedades()
    {
        return $this->belongsToMany('App\Models\EnfermedadPlaga', 'cultivo_enfermedad', 'cultivo_id', 'enfermedad_o_plaga_id');
    }
}