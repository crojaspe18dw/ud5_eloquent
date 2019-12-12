<?php

namespace App;

use App\Empleado;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleados(){
    	return $this->hasMany('Empleado');
    }
}
