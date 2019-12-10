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
  @if(!is_null($empleadoInfo->proyecto))
  <tr>
    <th>Proyecto</th>
    <td><a href="{{route('proyectos.proyecto',$empleadoInfo->proyecto->id)}}">{{$empleadoInfo->proyecto->nombre}}</a></td>
  </tr>
  @endif
  @if(!is_null($empleadoInfo->proyectos))
  <tr>
    <th>Colabora en: </th>
    <td>
      @foreach($empleadoInfo->proyectos as $proyecto)
      <a href="{{route('proyectos.proyecto', $proyecto->id)}}">{{$proyecto->nombre}}</a>,
      @endforeach
    </td>
  </tr>
  @endif
</table>

@endsection
