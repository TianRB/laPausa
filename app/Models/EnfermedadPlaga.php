<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnfermedadPlaga extends Model
{
    protected $table = 'enfermedades_y_plagas';
    protected $fillable = ['name', 'display_name', 'description'];
}
