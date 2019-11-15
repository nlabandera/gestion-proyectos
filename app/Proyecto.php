<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    public function proyecto(){

    	return $this->hasOne('App\Empleado');
    }
}
