<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['nombre','titulo','fechainicio','fechafin','horasestimadas'];

    //protected $table = 'proyectos';

    public function empleado(){

    	return $this->belongsTo('App\Empleado');
    }
    public function empleados(){
    	return $this->belongsToMany('App\Empleado');
    }
}
