<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProyectoRequest;

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

        $proyecto->nombre = request('p_nombre');
        $proyecto->titulo = request('p_titulo');
        $proyecto->fechainicio = request('p_fechainicio');
        $proyecto->fechafin = request('p_fechafin');
        $proyecto->horasestimadas = request('p_horasestimadas');
        $proyecto->empleado_id = request('p_empleado_id');

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
