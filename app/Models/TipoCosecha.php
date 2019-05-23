<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCosecha extends Model
{
    protected $table = 'tipos_cosecha';
    protected $fillable = ['name', 'display_name', 'description'];
}
