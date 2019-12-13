@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table border="1">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        @foreach($proyecto as $j)
        @if($j->empleados_id == $empleado->id)
        <th>proyecto del que es responsable</th>
        @endif
        @endforeach
        <th>pertenece al departamento</th>
        <th>proyectos en los que colabora</th>
      </tr>
      <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        @foreach($proyecto as $j)
        @if($j->empleados_id == $empleado->id)
        <td><a>{{$j->nombre}}</a></td>
        @endif
        @endforeach
        <td><a href="departamentos/{{$departamento->id}}">{{$departamento->nombre}}</a></td>
        <td>
        @foreach($empleado_proyecto->empleado as $r)
        <a href="proyectos/{{$j->id}}">{{$r->id}}</a>
        @endforeach
        </td>
        
      </tr>

      

    </table>

@endsection