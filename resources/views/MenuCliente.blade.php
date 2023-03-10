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

{{-- <div class="container mb-3 mt-4 col-md-3">


    <div class="card text-center">

        <div class="card-header">
          {{Auth::user()->name}}
        </div>

        <div class="card-body">
            
            <div class="mb-3">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalPerfilCliente"> 
                Perfil
               </button>
            {{-- <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary">Configuracion de perfil</a>
            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('ticket.create')}}" class="btn btn-primary">Generar ticket</a>

            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-warning">Mis tickets</button>
            </div>

            <a href="{{route('Cierra.Sesion')}}">
              <button class="btn btn-danger">Cerrar sesión</button></a>

        </div>

      </div>

</div> --}}

@stop