@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Jefe</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="{{route('departamentos.departamento',$departamento->id)}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
      @if(!is_null($departamento->jefe))
      <td><a href="{{route('empleados.empleado',$departamento->jefe->id)}}">{{$departamento->jefe->id}}</a></td>
      @endif
    </tr>
    @endforeach

  </table>

@endsection
