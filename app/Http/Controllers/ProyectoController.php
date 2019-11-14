<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    function show(){
    	return view('/proyectos/index');
    }
}
