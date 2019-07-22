<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoMaterial extends Model
{
    protected $table = 'catalogo_materiales';
    protected $fillable = ['display_name', 'description', 'marca', 'proveedor_id', 'categoria'];
}
