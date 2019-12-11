@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos Actuales</h2>


<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Inicio</th>
    <th>Fecha fin</th>
    <th>Horas estimadas</th>
    <th>Responsable</th>
  </tr>
  @foreach ($proyectoactuals as $proyectoactual)
  <tr>
    <td><a href="">{{$proyectoactual->id}}</a></td>
    <td>{{$proyectoactual->nombre}}</td>
  </tr>
</table>
@endforeach

@endsection
