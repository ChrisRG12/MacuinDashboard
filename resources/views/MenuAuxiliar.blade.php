@extends('plantillaA')

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


@include('ModalPerfilAux')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="container">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

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


 {{-- <div class="container mb-3 mt-4 col-md-3">


    <div class="card text-center">

        <div class="card-header">
          {{Auth::user()->name}}
        </div>

        <div class="card-body">

            <div class="mb-3">
            <a type="button"  href="{{route('ticketA.index')}}" class="btn btn-primary">Soporte a ticktes</a>

            </div>

        </div>


</div>  --}}



@stop