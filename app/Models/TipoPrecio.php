<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPrecio extends Model
{
    protected $table = 'tipos_de_precios';
    protected $fillable = ['name', 'display_name', 'description', 'nombre_pantalla'];
}
