<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable=['nombre','titulo','fechainicio','fechafin','horasestimadas'];

    function empleados(){
    	return $this->belongTo('App\Empleado');
    }
}
