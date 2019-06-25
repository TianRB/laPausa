<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales'; 
    protected $fillable = ['animal_id', 'trabajador_id', 'name', 'display_name', 'description', 'sexo', 'fecha_nac', 'padres', 'fecha_alta', 'fecha_baja', 'tiempo_consumido', 'peso', 'racion_alimento', 'unidad_medida', 'costo', 'preventivos', 'enfermedades', 'vacunas', 'notas'];
    
    public function info()
    {
        return $this->hasOne('App\Models\CatalogoAnimal');
    }
    public function trabajador()
    {
        return $this->hasOne('App\Models\Trabajador');
    }
}
