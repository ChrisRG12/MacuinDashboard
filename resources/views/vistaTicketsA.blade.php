@extends('plantillaA')

@section('contenido')

@if(session()->has('Confirmacion'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Ticket Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Proceso Exitoso',
      'Ticket Eliminado',
      'success'  
) </script> "!!}
@endif


@include('ModalPerfil')

@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Ticket Editado',
      'success'  
) </script> "!!}
@endif

@include('ModalPerfilAux')

<div class="container py-4" style="margin-left: 18%"> 
    <table class="table table-secondary table-striped mt-5 mb-5 ">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">id Cliente</th>
            <th scope="col">Fecha</th>
            <th scope="col">Clasificacion</th>
            <th scope="col">Detalles</th>
            <th scope="col">status</th>

            <th scope="col">Departamento</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaTicketA as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idtic }}</th>
            <td>{{ $consulta->autorj_id }}</td>
            <td>{{ $consulta->fecha }}</td>
            <td>{{ $consulta->clasificacion }}</td>
            <td>{{ $consulta->detalles }}</td>
            <td>{{ $consulta->status }}</td>
            
            <td>{{ $consulta->Depa_id }}</td>
            <td>
            <a href="{{route('ticket.edit' , $consulta->idtic)}}" class="btn btn-outline-success"> Editar  <i class="bi bi-people"></i></a>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarDepa{{$consulta->idtic}}">
                  Eliminar <i class="bi bi-trash-fill"></i>
               </button>
          </tr>

          @endforeach
        </tbody>

      </table>
</div>


@stop