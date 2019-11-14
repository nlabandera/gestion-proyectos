<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    function show(){
    	
    	$info = Empleado::All();

    	return view('/empleados/index',['info'=>$info]);

    }

    
}
