<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand/logo -->
		<img style="width: 50px;" src="{{asset('img/logo.png')}}">

		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="{{route('empleados')}}">Empleados</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('proyectos')}}">Proyectos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('departamentos')}}">Departamentos</a>
			</li>
		</ul>
	</nav>

</body>
</html>