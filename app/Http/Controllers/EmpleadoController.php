<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function index(){

    	$empleados = Empleado::all();

    	return view('empleados.index',['empleados'=>$empleados]);

    }
    public function show($id){

    	$empleadoInfo = Empleado::find($id);
        return view('empleados.empleado', ['empleadoInfo'=>$empleadoInfo]);

    }


    
}
