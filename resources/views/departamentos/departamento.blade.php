@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento {{$dpto->nombre}}</h2>

<h4>Empleados</h4>
<ul>
  @foreach ($dpto->empleados as $empleado)
  <li>{{$empleado->nombre}}</li>
  @endforeach
</ul>



@endsection