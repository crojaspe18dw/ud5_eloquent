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
        <th>¿es responsable de algun proyecto?</th>
      </tr>


      @foreach($empleado as $i)

      <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nombre}}</td>
        <td>{{$i->email}}</td>
        <td>{{$i->telefono}}</td>
          @foreach($proyecto as $j)

        @if($i->id == $j->empleados_id)
        <td><a href="proyectos/{{$j->id}}">si</a></td>
        @endif


        @endforeach

      </tr>

      @endforeach

    </table>

@endsection
