<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <meta charset="utf-8">
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
            <ul class="nav navbar-nav">
             <!-- <li class="active"><a href="#">Home</a></li>-->
              <li><a href="#">Inicio</a></li>
              <li><a href="empleados">Empleados</a></li>
              <li><a href="departamentos">Departamentos</a></li>
              <li><a href="proyectos">Proyectos</a></li>
            </ul>
            </div>
        </nav>
        <section>
            @yield('content')
        </section>

    

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>