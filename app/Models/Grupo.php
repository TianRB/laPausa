<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['name', 'display_name', 'description', 'distancia_entre_arboles', 'rango_de_edad', 'enfermedades_o_plagas'];
}
