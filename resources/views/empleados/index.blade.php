@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
      </tr>
      @foreach ($info as $empleado)
      <tr>
        <td>{{$empleado->id}}</td>
        <td>Aqui el nombre</td>
        <td>Aqui el email</td>
        <td>Aqui el telefono</td>
      </tr>
      @endforeach

    </table>

@endsection
