<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    function proyectos(){
    	return $this->hasOne('Proyecto');
    }

    function departamentos(){
    	return $this->belongsTo('Departamento');
    }
    public function proyecto(){
    	return $this->belongsToMany('App\Proyecto');
    }

    
}