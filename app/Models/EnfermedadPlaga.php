<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnfermedadPlaga extends Model
{
    protected $table = 'enfermedades_y_plagas';
    protected $fillable = ['name', 'display_name', 'description'];

    public function cultivosResistentes()
    {
        return $this->belongsToMany('App\Models\Cultivo', 'cultivo_resistencia', 'enfermedad_o_plaga_id', 'cultivo_id');
    }
    public function cultivosEnfermos()
    {
        return $this->belongsToMany('App\Models\Cultivo', 'cultivo_enfermedad', 'enfermedad_o_plaga_id', 'cultivo_id');
    }
}
