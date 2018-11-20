@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento: {{$departamento->nombre}}</h2>
  <h3>Codigo: {{$departamento->codigo}}</h3>
  <h3>Jefe de departamento: {{$departamento->jefe->nombre}}</h3>
  @if(isset($departamento->empleados))
  <h3>Empleados:</h3>
  @foreach($departamento->empleados as $empleado)

  <p><a href="{{route('empleado',$empleado->id)}}">{{ $empleado->nombre }}</a></p>
 

  @endforeach
  @endif

@endsection
