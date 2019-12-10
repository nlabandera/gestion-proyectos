@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto "{{$proyectoedit->nombre}}"</h2>

<form method="POST" action="{{ route('proyectos.update',$proyectoedit->id) }}" novalidate>
	@csrf
	@method('PUT')

	<label>Titulo:</label><input type="text" name="titulo" value="{{$proyectoedit->titulo}}" ><br>
	<label>Fecha Inicio: </label><input type="text" name="fechainicio" value="{{$proyectoedit->fechainicio}}" ><br>
	<label>Fecha Fin: </label><input type="text" name="fechafin" value="{{$proyectoedit->fechafin}}" ><br>
	<label>Horas estimadas: </label><input type="text" name="horasestimadas" value="{{$proyectoedit->horasestimadas}}" ><br>
	<label>Responsable: </label><input type="text" name="empleado_id" value="{{$proyectoedit->empleado_id}}" ><br>
	<hr>

	<button type="submit" class="validar">Modificar</button>
</form>



@endsection