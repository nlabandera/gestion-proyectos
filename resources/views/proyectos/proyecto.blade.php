@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto "{{$proyectoInfo->nombre}}"</h2>

<table>
  <tr>
    <th>Titulo</th>
    <td>{{$proyectoInfo->titulo}}</td>
  </tr>
  <tr>
    <th>Fecha Inicio</th>
    <td>{{$proyectoInfo->fechainicio}}</td>
  </tr>
  <tr>
    <th>Fecha fin</th>
    <td>{{$proyectoInfo->fechafin}}</td>
  </tr>
  <tr>
    <th>Horas estimadas</th>
    <td>{{$proyectoInfo->horasestimadas}}</td>
  </tr>
  <tr>
    <th>Responsable</th>
    <td><a href="{{route('empleados.empleado',$proyectoInfo->empleado->id)}}">{{$proyectoInfo->empleado->nombre}}</a></td>
  </tr>
</table>

@endsection