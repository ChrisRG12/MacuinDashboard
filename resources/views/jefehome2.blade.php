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
			<a href="{{route('Usuario.index')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
			  Administración Usuarios
			</a>
		  </li>
		  <li>
			<a href="{{route('depa.index')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
			  Registro Departamentos
			</a>
		  </li>
		  <li>
			<a href="{{route('ticket.index')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
			  Administración de Tickets
			</a>
		  </li>
		  <li>
		  </li>
      <li>
			<a href="{{route('ticketA.create')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
			  Asignar ticket
			</a>
		  </li>
		  <li>
		  </li>
		</ul>
		<hr>
		<div class="dropdown">
		  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ Auth::user()->url }}"  width="32" height="32" class="rounded-circle me-2">
			<strong>{{Auth::user()->name}}</strong>
		  </a>
		  <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
			<li><a class="dropdown-item" href="#">Configuraciones</a></li>
			<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ModalPerfil"> 
				Perfil
			 </button>
		  </ul>
      <div class="fixed-bottom">

        <a href="{{route('Cierra.Sesion')}}">
        <button class="btn btn-danger ms-3 mb-3"  type="button">Cerrar sesión</button>
      </div>
      </a>
        </div>

		</div>
	  </div>
	  
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>


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



<div class="container">
  <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

   <!--Content before waves-->
   <div class="inner-header flex">
   </div>
   
   <!--Waves Container-->
   <div>
   <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
   viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
   <defs>
   <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
   </defs>
   <g class="parallax">
   <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
   <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
   <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
   <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
   </g>
   </svg>
   </div>
   <!--Waves end-->    
   </div>
   <!--Content starts-->
   <div class="content flex">
     <p></p>
   </div>
   <!--Content ends-->
<body >
   <style>
       @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
 margin:0;
}

h1 {
 font-family: 'Lato', sans-serif;
 font-weight:300;
 letter-spacing: 2px;
 font-size:48px;
}
p {
 font-family: 'Lato', sans-serif;
 letter-spacing: 1px;
 font-size:14px;
 color: #333333;
}

.header {
 position:relative;
 text-align:center;
 background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
 color:white;
}
.logo {
 width:50px;
 fill:white;
 padding-right:15px;
 display:inline-block;
 vertical-align: middle;
}

.inner-header {
 height:65vh;
 width:100%;
 margin: 0;
 padding: 0;
}

.flex { /*Flexbox for containers*/
 display: flex;
 justify-content: center;
 align-items: center;
 text-align: center;
}

.waves {
 position:relative;
 width: 100%;
 height:15vh;
 margin-bottom:-7px; /*Fix for safari gap*/
 min-height:100px;
 max-height:150px;
}

.content {
 position:relative;
 height:20vh;
 text-align:center;
 background-color: white;
}

/* Animation */

.parallax > use {
 animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
 animation-delay: -2s;
 animation-duration: 7s;
}
.parallax > use:nth-child(2) {
 animation-delay: -3s;
 animation-duration: 10s;
}
.parallax > use:nth-child(3) {
 animation-delay: -4s;
 animation-duration: 13s;
}
.parallax > use:nth-child(4) {
 animation-delay: -5s;
 animation-duration: 20s;
}
@keyframes move-forever {
 0% {
  transform: translate3d(-90px,0,0);
 }
 100% { 
   transform: translate3d(85px,0,0);
 }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
 .waves {
   height:40px;
   min-height:40px;
 }
 .content {
   height:30vh;
 }
 h1 {
   font-size:24px;
 }
}