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
        //return view('empleados.empleado', compact('empleadoInfo')); -->Cuando clave y valor se llaman igual

    }
    public function create()
    {
        return view ('empleados.create');
    }
     public function store(Request $request)
    {
        $empleado = new Empleado();

        $empleado->nombre = $recuest->nombre;
        $empleado->apellido = $recuest->apellido;
        $empleado->email = $recuest->email;
        $empleado->telefono = $recuest->telefono;
        $empleado->safe();

    return redirect(/*route(empleados.index*/);     //Dirigir a la página que se quiera para mostrar datos
    }
    public function edit($id)
    {
        $empleadoInfo = Empleado::find($id);
        return view('empleados.edit', ['empleadoInfo'=>$empleadoInfo]);
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
