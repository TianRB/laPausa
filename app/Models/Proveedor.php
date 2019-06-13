<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['name', 'display_name', 'description', 'direccion', 'cp'];
    
    public function cultivos()
    {
        return $this->belongsToMany('App\Models\Cultivo');
    }
}
