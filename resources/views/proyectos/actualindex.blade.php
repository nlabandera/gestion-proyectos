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
    
  </tr>
  @foreach ($proyectoactuals as $proyectoactual)
  <tr>
    <td><a href="">{{$proyectoactual->id}}</a></td>
    <td>{{$proyectoactual->nombre}}</td>
    <td>{{$proyectoactual->titulo}}</td>
    <td>{{$proyectoactual->fechainicio}}</td>
    <td>{{$proyectoactual->fechafin}}</td>
    <td>{{$proyectoactual->horasestimadas}}</td>
  </tr>
</table>
@endforeach

@endsection
