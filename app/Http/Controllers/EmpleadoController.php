<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    function index(){

    	$empleado = Empleado::all();

    	return view('empleados.index',['empleado'=>$empleado]);

    }

    
}
