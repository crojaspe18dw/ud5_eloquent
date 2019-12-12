<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    function proyectos(){
    	return $this->hasOne('App\Proyecto');
    }

    function departamentos(){
    	return $this->belongsTo('App\Departamento');
    }
}