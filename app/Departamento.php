<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected $fillable = ['nombre'];

    //protected $table = 'departamentos';

    public function empleados(){

    	return $this->hasMany('App\Empleado');
    }
}
