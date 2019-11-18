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
      </tr>
      @endforeach

    </table>

@endsection
