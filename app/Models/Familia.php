<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $fillable = ['name', 'display_name', 'description'];
    
    public function cultivos()
    {
        return $this->belongsToMany('App\Models\Cultivo');
    }
}
