<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    public function proyecto(){

    	return $this->belongsto('App\Proyecto','id','empleado_id');
    }
}
