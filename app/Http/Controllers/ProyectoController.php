<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProyectoRequest;
use Carbon\Carbon;

class ProyectoController extends Controller
{
    public function index(){

    	$proyectos = Proyecto::all();

    	return view('proyectos.index',['proyectos'=>$proyectos]);
    }
    public function show($id){
    	
        $proyectoshow = Proyecto::find($id);

    	return view('proyectos.proyecto',['proyectoshow'=>$proyectoshow]);
    }
    public function actual(){
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $proyectoactuals = Proyecto::whereDate('fechafin','>=',$date)->get();

        return view('proyectos.actual',['proyectoactuals'=>$proyectoactuals]);
    }

    public function create()
    {
        return view ('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
        $proyecto = new Proyecto();

        $proyecto->nombre = request('nombre');
        $proyecto->titulo = request('titulo');
        $proyecto->fechainicio = request('fechainicio');
        $proyecto->fechafin = request('fechafin');
        $proyecto->horasestimadas = request('horasestimadas');
        $proyecto->empleado_id = request('empleado_id');

        $proyecto->save();

        return redirect('proyectos');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $proyectoedit = Proyecto::find($id);

        return view('proyectos.edit',['proyectoedit'=>$proyectoedit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Busca
        
        $proyectoupdate = Proyecto::find($id);
        
        // Actualiza
        $request->validate([
            'titulo'=>'required|min:2|max:45|regex:/[a-zA-Z+\s]/',
            'fechainicio'=>'required|date',
            'fechafin' => 'required|date|after:fechainicio',
            'horasestimadas' => 'required|numeric',
            'empleado_id' => 'required|min:1|max:10|numeric'
        ]);

        
        $proyectoupdate->titulo = $request->input('titulo');
        $proyectoupdate->fechainicio = $request->input('fechainicio');
        $proyectoupdate->fechafin = $request->input('fechafin');
        $proyectoupdate->horasestimadas = $request->input('horasestimadas');
        $proyectoupdate->empleado_id = $request->input('empleado_id');
        
        // Lo guarda
        
        $proyectoupdate->save();
        return redirect('proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);
        return redirect('proyectos');


    }
}
