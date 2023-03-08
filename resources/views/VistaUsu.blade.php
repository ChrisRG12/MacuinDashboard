@extends('plantilla')

@section('contenido')

@if(session()->has('confirmacion'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Usuario Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Eliminado',
      'Usuario Eliminado',
      'success'  
) </script> "!!}
@endif


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Usuario Editado',
      'success'  
) </script> "!!}
@endif


<div class="container mt-5 rounded shadow">


<div class="container mb-3 mt-4 col-md-5">
                <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary">Agregar Usuario +</a>
                <div class="my-3">
              </div>
            </div>
            <form>
                <div class="container mb-3 mt-4 col-md-5">
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn btn-success" type="submit">Buscar</button>
                </form>
    
    <table class="table table-secondary table-striped mt-5 mb-5 col-md-8">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Usuario</th>
            <th scope="col">Tipo</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaUsuario as $consulta)
          <tr>
            <th scope="row">{{ $consulta->id }}</th>
            <td>{{ $consulta->name }}</td>
            <td>{{ $consulta->email }}</td>
            <td>{{ $consulta->TipoUsu }}</td>
            <td>
                <a href="{{route('Usuario.edit' , $consulta->id)}}" class="btn btn-outline-success"> Editar  <i class="bi bi-people"></i></a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarUsu{{$consulta->id}}">
                  Eliminar <i class="bi bi-trash-fill"></i>
               </button>
            </td>
            @include('ModalEliminarUsu')

          </tr>
          @endforeach
        </tbody>

      </table>






</div>


@stop