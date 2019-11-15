<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
   function index(){
   		$departamentos=Departamento::all();
    	return view('departamentos.index',['departamentos'=>$departamentos]);
    }
}
