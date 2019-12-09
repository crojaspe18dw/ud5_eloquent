<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/proyectos/{{$proyecto->id}}">

		{{csrf_field()}}
		
		<p>nombre:  {{$proyecto->nombre}}</p>
		titulo: <input type="text" name="titulo" value="{{$proyecto->titulo}}"><br><br>
		fecha inicio: <input type="date" name="fechainicio" value="{{$proyecto->fechainicio}}"><br><br>
		fecha fin: <input type="date" name="fechafin" value="{{$proyecto->fechafin}}"><br><br>
		horas estimadas: <input type="number" name="horasestimadas" value="{{$proyecto->horasestimadas}}"><br><br><br>

		<input type="hidden" name="_method" value="PUT">


		<input type="submit" value="editar">


	</form>

	<form  method="POST" action="/proyectos/{{$proyecto->id}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="eliminar proyecto">
	</form>

</body>
</html>