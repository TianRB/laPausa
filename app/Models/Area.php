<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name', 'display_name', 'description', 'trabajador_id', 'trabajadores_aux', 'numero_biocamas', 'total_superficie_productiva'];
}
