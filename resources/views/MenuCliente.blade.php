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
    <section>
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </section>
  </div>

  <div class="row align-items-md-stretch">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Crear Ticket</h1>
        <p class="col-md-8 fs-4">Opción para gestionar y resolver problemas y solicitudes de los clientes de la empresa. Permite asignar tickets a los miembros del equipo, hacer seguimiento y dar solución a los problemas.</p>
        <a href="{{route('ticket.create')}}" style="text-decoration: none">
          <button>
      <span>Generar Solitud de Atencion</span> 
    </button></a>

    <a href="{{route('ticketsss')}}" style="text-decoration: none">
      <button>
  <span>Ver mis Quejas</span> 
</button></a>
      </div>
    </div>
  </div>

  <footer class="pt-3 mt-4 text-white border-top">
   Macuin Dashboard © 2022 <br> by: Jelos, Agus y Chris
  </footer>
</div>

@stop