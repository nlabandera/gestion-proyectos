<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    function show(){

    	$empleado = Empleado::find($id);
    	
    	//$info = Empleado::All();

    	return view('/empleados/index',['empleado'=>$empleado]);

    }

    
}
