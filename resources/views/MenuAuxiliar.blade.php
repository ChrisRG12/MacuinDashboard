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

 <div class="container mb-3 mt-4 col-md-3">


    <div class="card text-center">

        <div class="card-header">
          {{Auth::user()->name}}
        </div>

        <div class="card-body">

            <div class="mb-3">
            <a type="button"  href="{{route('ticketC.index')}}" class="btn btn-primary">Soporte a ticktes</a>

            </div>

        </div>

      </div>

</div> 

@stop