@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
      </tr>

      @foreach($proyecto as $i)

      <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nombre}}</td>
        <td>{{$i->titulo}}</td>
        <td>{{$i->fechainicio}}</td>
        <td>{{$i->fechafin}}</td>
        <td>{{$i->horasestimadas}}</td>
      </tr>

      @endforeach


    </table>

@endsection
