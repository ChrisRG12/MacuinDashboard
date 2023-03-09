@extends('PlantillaJ')

@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title>Macuin Dashboard</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<!-- Main content -->
{{-- 
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-3 bg-dark text-light py-4">
				<div class="text-center">
					<img src="https://via.placeholder.com/150" alt="Profile picture" class="rounded-circle img-thumbnail">
					<h3 class="mt-3">{{Auth::user()->name}}</h3>
				</div>
				<hr class="bg-light">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="#">Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Configuración</a>
					</li>
				</ul>
			</div> --}}


	<div class="d-flex"> 
		<div class="flex-column flex-shrink-0 p-3 text-bg-dark" class="bg-primary"style="width: 280px; height: 100vh;">
		<a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
		  <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
		  <span class="fs-4">Macuin Dashboard</span>
		</a>
		<hr>
		<ul class="nav nav-pills flex-column mb-auto">
		  <li class="nav-item">
			<a href="{{route('homejefe')}}" class="nav-link active" aria-current="page">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
			  Home
			</a>
		  </li>
		  <li>
			<a href="#" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
			  Dashboard
			</a>
		  </li>
		  <li>
			<a href="#" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
			  Orders
			</a>
		  </li>
		  <li>
			<a href="#" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
			  Products
			</a>
		  </li>
		  <li>
			<a href="#" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
			  Customers
			</a>
		  </li>
		</ul>
		<hr>
		<div class="dropdown">
		  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
			<strong>{{Auth::user()->name}}</strong>
		  </a>
		  <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
			<li><a class="dropdown-item" href="#">Configuraciones</a></li>
			<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ModalPerfil"> 
				Perfil
			 </button>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="{{route('Cierra.Sesion')}}">Cerrar sesión</a></li>
		  </ul>
		</div>
	  </div>
	  

			
								{{-- <h5 class="card-title">Administración de Tickets de la empresa.</p>
                  <p class="card-text">Gestión de usuarios y permisos de acceso en la plataforma.</p>
                  <a href="#" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Administrar</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body">
            
            <div class="mb-3">
            <a type="button"  href="{{route('Usuario.index')}}" class="btn btn-primary">Administración de Usuarios</a>
            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('depa.index')}}" class="btn btn-primary">Administración de  Departamentos</a>

            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('ticket.index')}}" class="btn btn-primary">Administración de  Tickets</a>

            </div>

        </div>


      </div>
    </div>
	 --}}

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
 
</body>
  </html>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="container">
		<div class="row">
  <html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body>

    @include('ModalPerfil')


    @if(session()->has('Actualizarr'))
    {!! 
    " <script> 
          Swal.fire(
          'Muy Bien Very Good!',
          'Usuario Editado',
          'success'  
    ) </script> "!!}
    @endif

    @if(session()->has('Entrar'))
    {!! 
    " <script> 
          Swal.fire(
          'Muy Bien !',
          'Welcome to the jungle',
          'success'  
    ) </script> "!!}
    @endif

    
  <div class="container py-4">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Administración de Usuarios</h1>
        <p class="col-md-8 fs-4">Gestión de los usuarios de un sistema o aplicación. En esta área, se pueden realizar tareas como crear nuevas cuentas de usuario, editar información de usuario existente, asignar permisos y roles, y eliminar cuentas de usuario. La administración de usuarios es importante para garantizar la seguridad y el control de acceso adecuados en un sistema o aplicación.</p>
		<a href="{{route('Usuario.index')}}" class="btn btn-primary btn-lg"><i class="fas fa-users"></i> Administrar</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Registro de Departamentos</h2>
          <p>Opción que permite registrar nuevos departamentos en la empresa y asignar empleados a ellos. Esta función es útil para mantener un registro organizado de los diferentes departamentos de la empresa y los empleados que trabajan en cada uno de ellos.</p>
		  <a href="{{route('depa.index')}}" class="btn btn-outline-light"><i class="fas fa-building"></i> Registrar</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Administración de Tickets</h2>
          <p>Opción para gestionar y resolver problemas y solicitudes de los clientes de la empresa. Permite asignar tickets a los miembros del equipo, hacer seguimiento y dar solución a los problemas.</p>
		  <a href="{{route('ticket.index')}}" class="btn btn-outline-secondary"><i class="fas fa-ticket-alt"></i> Administrar</a>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-white border-top">
     Macuin Dashboard © 2022 <br> by: Jelos, Agus y Chris
    </footer>
  </div>
</main>
</body>
</html>