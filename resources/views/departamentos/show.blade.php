@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table border="1">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      @php($a=0);
      @foreach($empleado as $i)
      @php($a=$a+1);
      <th>empleado {{$a}}</th>
      @endforeach
    </tr>

    <tr>
      
      <td>{{$departamento->id}}</td>
      <td>{{$departamento->nombre}}</td>
      @foreach($empleado as $j)
      <td><a href="/empleados/{{$j->id}}">{{$j->nombre}}</a></td>
      @endforeach
      </tr>
      
  

  </table>

@endsection