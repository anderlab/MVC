@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>
  @csrf
  <form action="insert" method="post">
    <input type="text" name="nombre" placeholder="nombre" style="width:100px;"> 
    <input type="text" name="apellido" placeholder="apellido" style="width:100px;"> 
    <select name="dep">
    @foreach ($empleados as $empleado)
    @if(isset($empleado->departamento))
      <option value="{{$empleado->departamento->id}}">{{$empleado->departamento->nombre}}</option>
      @endif
    @endforeach
  </select>
  

      <select name="emple">
    @foreach ($empleados as $empleado)
      <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
    @endforeach
  </select>
  <button type="submit">Insertar</button>

  </form>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>
  
      @foreach ($empleados as $empleado)
      <tr>
          <td><a href="{{route('empleado',$empleado->id)}}">{{ $empleado->id }}</a></td>
          <td><a href="{{route('empleado',$empleado->id)}}">{{ $empleado->nombre }}</a>, <a href="{{route('empleado',$empleado->id)}}">{{ $empleado->apellido1 }}</a></td>
          
          @if(isset($empleado->departamento))
          <td><a href="{{route('departamento',$empleado->departamento->id)}}">{{ $empleado->departamento_id }}</a></td>
          
          @endif
          
          @if(isset($empleado->proyecto))  
          <!--<td>{{$empleado->proyecto->id}}</td>-->
          <td><a href="{{route('proyecto',$empleado->proyecto->id)}}">{{$empleado->proyecto->id}}</a></td>
          @endif
      </tr>
      @endforeach
  </table>
<!--{{is_null($empleado->proyecto)?"":($empleado->proyecto->titulo)}}-->
@endsection
