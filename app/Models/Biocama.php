<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biocama extends Model
{
    protected $fillable = ['name', 'display_name', 'description', 'area_id', 'largo', 'ancho', 'ancho_pasillos_biocama'];
}
