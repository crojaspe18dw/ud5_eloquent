<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/proyectos">

		{{csrf_field()}}
		
		nombre: <input type="text" name="nombre"><br><br>
		titulo: <input type="text" name="titulo"><br><br>
		fecha inicio: <input type="date" name="fechainicio"><br><br>
		fecha fin: <input type="date" name="fechafin"><br><br>
		horas estimadas: <input type="number" name="horasestimadas"><br><br><br>

		<input type="submit" value="enviar">

	</form>

</body>
</html>

