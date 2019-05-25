<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSiembra extends Model
{
    protected $table = 'tipos_siembra';
    protected $fillable = ['name', 'display_name', 'description'];
}
