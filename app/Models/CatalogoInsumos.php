<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoInsumos extends Model
{
    protected $table = 'catalogo_insumos';
    protected $fillable = ['display_name', 'description', 'unidad_medida', 'procedimientos', 'datos', 'costo'];
    
    public function provision()
    {
        //return $this->hasMany('App\Models\Trabajador');
    }
}
