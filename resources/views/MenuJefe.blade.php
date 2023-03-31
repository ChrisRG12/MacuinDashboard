<!DOCTYPE html>
@extends('plantillaJ')


@section('contenido')

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


<html>
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
@stop