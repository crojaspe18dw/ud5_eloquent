@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table border="1">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
@foreach($departamentos as $i)
    <tr>
      
      <td>{{$i->id}}</td>
      <td><a href="/departamentos/{{$i->id}}">{{$i->nombre}}</a></td>
    </tr>
    @endforeach

  </table>

@endsection
