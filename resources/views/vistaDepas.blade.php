@extends('plantillaJ')

@section('contenido')

@if(session()->has('Confirmacion'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Departamento Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Proceso Exitoso',
      'Departamento Eliminado',
      'success'  
) </script> "!!}
@endif


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Departamento Editado',
      'success'  
) </script> "!!}
@endif

@include('ModalPerfil')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="container">	

<h1 class="text-center display-5 fw-bold" style="color: rgb(255, 251, 251)">Administración de Departamentos</h1>

<h1 class="text-center mt-4" style="color: rgb(255, 251, 251)"> Registro Departamento <i class="fas fa-building"></i></h1>

  <a type="button"  href="{{route('depa.create')}}" class="btn btn-primary">Agregar Departamento +</a>
    
    <table class="table table-secondary table-striped mt-5 mb-5 ">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion de Area</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaDepa as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idDepa }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->Descripcion }}</td>
            <td>
            <a href="{{route('depa.edit' , $consulta->idDepa)}}" class="btn btn-outline-success"> Editar  <i class="bi bi-people"></i></a>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarDepa{{$consulta->idDepa}}">
                  Eliminar <i class="bi bi-trash-fill"></i>
               </button>
          </tr>
          @include('ModalEliminarDepa')

          @endforeach
        </tbody>

      </table>






</div>


@stop