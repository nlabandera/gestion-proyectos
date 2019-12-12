<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">




          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <img style="width: 50px;" src="{{asset('img/logo.png')}}">

            <!-- Links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('empleados.index')}}">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('proyectos.index')}}">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos</a>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="{{route('layouts.listados')}}">Listados</a>
                </li>
              -->
                <li class="dropdown"><a class="dropdown-toggle text-white" data-toggle="dropdown" href="#">Listados<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{route('proyectos.actualindex')}}">Proyectos actuales</a></li>
                      <li><a href="#">Empleados sin proyectos</a></li>
                      <li><a href="#">Empleados colaboradores</a></li>
                  </ul>
              </li>


          </ul>
      </nav>

      <div class="op">
        @yield('content')
    </div>
</div>
</div>

<footer class="footer">
  @include('layouts.footer')
</footer>

</body>
</html>
