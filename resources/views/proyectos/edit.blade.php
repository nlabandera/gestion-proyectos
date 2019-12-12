@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto "{{$proyectoedit->nombre}}"</h2>

<form method="POST" action="{{ route('proyectos.update',$proyectoedit->id) }}" novalidate>
	@csrf
	@method('PUT')

	<label>Titulo:</label>
	<input type="text" name="titulo" value="{{$proyectoedit->titulo}}" >@if ($errors->has('titulo'))<span>{{ $errors->first('titulo')}}  @endif<br>
	
	<label>Fecha Inicio: </label>
	<input type="data" name="fechainicio" value="{{$proyectoedit->fechainicio}}" >@if ($errors->has('fechainicio'))<span>{{ $errors->first('fechainicio')}}  @endif<br>
	
	<label>Fecha Fin: </label>
	<input type="data" name="fechafin" value="{{$proyectoedit->fechafin}}" >@if ($errors->has('fechafin'))<span>{{ $errors->first('fechafin')}}  @endif<br>
	
	<label>Horas estimadas: </label>
	<input type="number" name="horasestimadas" value="{{$proyectoedit->horasestimadas}}" >@if ($errors->has('horasestimadas'))<span>{{ $errors->first('horasestimadas')}}  @endif<br>
	
	<label>Responsable: </label>
	<input type="number" name="empleado_id" value="{{$proyectoedit->empleado_id}}" >@if ($errors->has('empleado_id'))<span>{{ $errors->first('empleado_id')}}  @endif<br>
	<hr>

	<button type="submit" class="validar">Modificar</button>
</form>



@endsection