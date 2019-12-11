<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected $fillable = ['nombre','empleado_id'];

    //protected $table = 'departamentos';

    public function empleados(){

    	return $this->hasMany('App\Empleado');
    
    }

    public function jefe(){

    	return $this->belongsTo('App\Empleado');
    
    }
}
