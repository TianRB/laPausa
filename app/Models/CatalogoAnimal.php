<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoAnimal extends Model
{
    protected $table = 'catalogo_animales';
    protected $fillable = ['especie', 'raza', 'nombre_cientifico', 'nombre_comercial', 'dias_gestacion', 'ciclo_celo', 'dias_lactacion', 'alimentacion', 'productos'];
}
