<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCultivo extends Model
{
    protected $table = 'tipos_cultivo';
    protected $fillable = ['name', 'display_name', 'description'];
}
