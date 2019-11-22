@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Departamento</th>
        <th></th>
      </tr>
      @foreach ($empleados as $empleado)
      <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        @if(!is_null($empleado->departamento))
        <td>{{$empleado->departamento->nombre}}</td>
        @endif
        <td><a href="{{route('empleados.empleado',$empleado->id)}}">Más info</a></td>
      </tr>
      @endforeach

    </table>

@endsection
