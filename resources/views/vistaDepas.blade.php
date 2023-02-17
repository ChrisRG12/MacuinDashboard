@extends('plantilla')

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


<div class="container w-75 mt-5 rounded shadow">

    
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
            </td>


          </tr>
          @endforeach
        </tbody>

      </table>






</div>


@stop