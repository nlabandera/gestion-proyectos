@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<body>
	<h1>Introduce la información para un nuevo proyecto</h1>
	<form method="get" action="{{route('proyectos.store')}}">
		@csrf
		<label>Nombre</label>
		<input type="text" name="nombre" value="{{old('nombre')}}"> @if ($errors->has('nombre'))<span>{{ $errors->first('nombre')}}  @endif<br>
		<label>Titulo</label>
		<input type="text" name="titulo" value="{{old('titulo')}}"> @if ($errors->has('titulo'))<span >{{ $errors->first('titulo')}}  @endif<br>
		<label>Fecha inicio</label>
		<input type="data" name="fechainicio" value="{{old('fechainicio')}}"> @if ($errors->has('fechainicio'))<span>{{ $errors->first('fechainicio')}}  @endif<br>
		<label>Fecha fin</label>
		<input type="data" name="fechafin" value="{{old('fechafin')}}">@if ($errors->has('fechafin'))<span>{{ $errors->first('fechafin')}}  @endif<br>
		<label>Horas estimadas</label>
		<input type="number" name="horasestimadas" value="{{old('horasestimadas')}}">@if ($errors->has('horasestimadas'))<span>{{ $errors->first('horasestimadas')}}@endif<br>
		<label>Responsable</label>
		<input type="number" name="empleado_id" value="{{old('empleado_id')}}">@if ($errors->has('empleado_id'))<span>{{ $errors->first('empleado_id')}}  @endif<br><br>
		
		<input type="submit" value="Añadir">

	</form>


@endsection