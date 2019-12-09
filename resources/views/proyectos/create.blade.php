@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<body>
	<h1>Introduce la información para un nuevo proyecto</h1>
	<form method="get" action="{{route('proyectos.index')}}">
		@csrf
		<label>Nombre</label>
		<input type="text" name="new_proyect"><br>
		<label>Titulo</label>
		<input type="text" name="new_title"><br>
		<label>Fecha inicio</label>
		<input type="data" name="new_startdate"><br>
		<label>Fecha fin</label>
		<input type="data" name="new_enddate"><br>
		<label>Horas estimadas</label>
		<input type="data" name="new_horas"><br>
		<label>Responsable</label>
		<input type="text" name="new_resp"><br><br>
		
		<input type="submit" value="Añadir">

	</form>


@endsection