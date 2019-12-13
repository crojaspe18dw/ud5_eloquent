@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table border="1">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>empleado responsable</th>
      </tr>

      

      <tr>
        <td>{{$proyecto->id}}</td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        @foreach($empleado as $j)

        @if($proyecto->empleados_id == $j->id)
        <td><a>{{$j->nombre}}</a></td>
        @endif


        @endforeach
        <td>
        @foreach($empleado_proyecto->proyecto as $r)
        <a href="empleados/{{$r->id}}">{{$r->nombre}}</a>
        @endforeach
        </td>
      </tr>

    


    </table>

@endsection