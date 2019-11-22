<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
   public function index(){
   		$departamentos=Departamento::all();
    	return view('departamentos.index',['departamentos'=>$departamentos]);
   }
   public function show($id){

    	$dpto = Departamento::find($id);
        return view('departamentos.departamento', ['dpto'=>$dpto]);

   }
}
