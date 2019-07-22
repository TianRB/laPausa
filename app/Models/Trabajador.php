<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';
    protected $fillable = ['alias', 'user_id', 'name', 'display_name', 'description', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento', 'rfc', 'curp', 'seguro_social', 'calle', 'poblacion', 'telefono', 'celular', 'telefono_emergencia', 'parentesco_telefono_emergencia', 'fecha_ingreso', 'sueldo_base', 'prestaciones', 'vacaciones', 'bonos'];

    public function usuario()
    {
        return $this->belongsToOne('App\Models\User');
    }
}
