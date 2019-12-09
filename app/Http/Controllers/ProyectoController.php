<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    public function index(){

    	$proyectos = Proyecto::all();

    	return view('proyectos.index',['proyectos'=>$proyectos]);
    }
    public function show($id){
    	$proyectoInfo = Proyecto::find($id);

    	return view('proyectos.proyecto',['proyectoInfo'=>$proyectoInfo]);
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
    public function store(Request $request)
    {
        $proyecto=new Proyecto();

        $proyecto->nombre=$request->new_proyect;
        $proyecto->titulo=$request->new_title;
        $proyecto->fechainicio=$request->new_startdate;
        $proyecto->fechafin=$request->new_enddate;
        $Proyecto->horasestimadas=$request->new_horas;
        $proyecto->empleado_id=$request->new_resp;

        $proyecto->save();

        return redirect('/');
        //return redirect()->route('proyectos.proyecto',$proyecto->empleado_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
