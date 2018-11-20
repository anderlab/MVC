@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado:{{$empleado->nombre}}</h2>


  @if(isset($empleado->proyecto))
  
  <h3>Responsable:<a href="{{route('proyecto',$empleado->proyecto->id)}}">{{ $empleado->proyecto->nombre }}</a></h3>
  
  @endif
  @if(isset($empleado->departamentoJefe))
  <h3>Jefe del departamento:<a href="{{route('departamento',$empleado->departamentoJefe->id)}}">{{ $empleado->departamentoJefe->nombre }}</a></h3>
  @endif
  <h3>Colabora en los siguientes proyectos:</h3>
  
  @if(isset($empleado->proyectos))
  @foreach ($empleado->proyectos as $proyecto)
  <p><a href="{{route('empleado',$proyecto->empleado_id)}}">    {{ $proyecto->nombre }}</a>Desde: {{$proyecto->pivot->fechainicio}} ||| Hasta: {{$proyecto->pivot->fechafin}}</p>
  
  @endforeach
  @endif

@endsection
