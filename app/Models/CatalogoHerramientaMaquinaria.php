<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoHerramientaMaquinaria extends Model
{
    protected $table = 'catalogo_herramientas_y_maquinaria';
    protected $fillable = ['name', 'display_name', 'description', 'tipo', 'marca', 'modelo', 'datos'];
}
