@extends('plantillaC')

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


@include('ModalPerfilCliente')

<div class="container py-4" style="margin-left: 20%">

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

@stop