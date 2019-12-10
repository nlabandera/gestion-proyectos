@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<body>
	<h1>Introduce la información para un nuevo proyecto</h1>
	<form method="get" action="{{route('proyectos.store')}}">
		@csrf
		<label>Nombre</label>
		<input type="text" name="p_nombre"> @if ($errors->has('p_nombre'))<span>{{ $errors->first('p_nombre')}}  @endif<br>
		<label>Titulo</label>
		<input type="text" name="p_titulo"> @if ($errors->has('p_titulo'))<span>{{ $errors->first('p_titulo')}}  @endif<br>
		<label>Fecha inicio</label>
		<input type="data" name="p_fechainicio"> @if ($errors->has('p_fechainicio'))<span>{{ $errors->first('p_fechainicio')}}  @endif<br>
		<label>Fecha fin</label>
		<input type="data" name="p_fechafin"><br>
		<label>Horas estimadas</label>
		<input type="data" name="p_horasestimadas"><br>
		<label>Responsable</label>
		<input type="text" name="p_empleado_id"><br><br>
		
		<input type="submit" value="Añadir">

	</form>


@endsection