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

      <nav class="navbar navbar-expand-md bg-info navbar-light">

        <!-- Logo -->
        <img style="width: 50px;" src="{{asset('img/logo.png')}}">

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

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

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Listados</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item"  href="{{route('proyectos.actual')}}">Proyectos actuales</a>
              <a class="dropdown-item" href="#">Empleados sin proyectos</a>
              <a class="dropdown-item" href="#">Colaboradores de varios proyectos</a>
            </div>
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
