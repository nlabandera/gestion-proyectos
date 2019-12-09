@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<body>
	<h1>Introduce la información para un nuevo proyecto</h1>
	<form method="get" action="{{route('proyectos.store')}}">
		@csrf
		<label>Nombre</label>
		<input type="text" name="p_nombre"><br>
		<label>Titulo</label>
		<input type="text" name="p_titulo"><br>
		<label>Fecha inicio</label>
		<input type="data" name="p_fechainicio"><br>
		<label>Fecha fin</label>
		<input type="data" name="p_fechafin"><br>
		<label>Horas estimadas</label>
		<input type="data" name="p_horasestimadas"><br>
		<label>Responsable</label>
		<input type="text" name="p_empleado_id"><br><br>
		
		<input type="submit" value="Añadir">

	</form>


@endsection