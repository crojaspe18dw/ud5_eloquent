<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Proyecto extends Model
{
    protected $fillable=['nombre','titulo','fechainicio','fechafin','horasestimadas'];

    public function empleados(){
    	return $this->belongsTo('App/Empleado');
    }

    public function empleado(){
    	return $this->belongsToMany('App\mepleado');
    }
}
