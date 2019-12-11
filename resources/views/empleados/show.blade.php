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
        @foreach($proyecto as $j)

        @if($j->empleados_id == $empleado->id)
        <th>proyecto del que es responsable</th>
        @endif


        @endforeach
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
      </tr>

      

    </table>

@endsection