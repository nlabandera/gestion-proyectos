@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto "{{$proyectoshow->nombre}}"</h2>

<table>
  <tr>
    <th>Titulo</th>
    <td>{{$proyectoshow->titulo}}</td>
  </tr>
  <tr>
    <th>Fecha Inicio</th>
    <td>{{$proyectoshow->fechainicio}}</td>
  </tr>
  <tr>
    <th>Fecha fin</th>
    <td>{{$proyectoshow->fechafin}}</td>
  </tr>
  <tr>
    <th>Horas estimadas</th>
    <td>{{$proyectoshow->horasestimadas}}</td>
  </tr>
  <tr>
    <th>Responsable</th>
    <td><a href="{{route('empleados.empleado',$proyectoshow->empleado->id)}}">{{$proyectoshow->empleado->nombre}}</a></td>
  </tr>
</table>
<form action="{{route('proyectos.destroy',$proyectoshow->id)}}" method="post">
  @csrf
  @method('DELETE')
  <button type="submit">Eliminar proyecto</button>
</form>
<form action="{{route('proyectos.edit',$proyectoshow->id)}}" method="get">
  @csrf
  @method('PUT')
  <button type="submit">Editar proyecto</button>
</form>

@endsection