@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento {{$dpto->nombre}}</h2>

<h4>Empleados</h4>
<ul>
  @foreach ($dpto->empleados as $empleado)
  <li><a href="{{route('empleados.empleado',$empleado->id)}}">{{$empleado->nombre}}</a></li>
  @endforeach
</ul>

<h4>Jefe</h4>
@if(!is_null($dpto->jefe))

<a href="{{route('empleados.empleado',$dpto->jefe->id)}}">
	<span>{{$dpto->jefe->nombre}}</span>
</a>
@endif


@endsection