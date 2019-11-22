@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>{{$empleadoInfo->nombre}} {{$empleadoInfo->apellido}}</h2>

<table>
  <tr>
    <th>Email</th>
    <td>{{$empleadoInfo->email}}</td>
  </tr>
  <tr>
    <th>Teléfono</th>
    <td>{{$empleadoInfo->telefono}}</td>
  </tr>
  <tr>
    <th>Departamento</th>
    <td><a href="{{route('departamentos.departamento',$empleadoInfo->departamento->id)}}">{{$empleadoInfo->departamento->nombre}}</a></td>
  </tr>
</table>

@endsection
