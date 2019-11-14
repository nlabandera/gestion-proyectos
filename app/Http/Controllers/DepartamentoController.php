<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
   function show(){
    	return view('/departamentos/index');
    }
}
