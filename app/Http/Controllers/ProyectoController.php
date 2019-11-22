<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    function index(){

    	$proyectos = Proyecto::all();

    	return view('proyectos.index',['proyectos'=>$proyectos]);
    }
    public function show($id){
    	$proyectoInfo = Proyecto::find($id);

    	return view('proyectos.proyecto',['proyectoInfo'=>$proyectoInfo]);
    }
}
