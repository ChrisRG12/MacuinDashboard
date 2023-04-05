@extends('plantillaC')

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


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Ticket Editado',
      'success'  
) </script> "!!}
@endif


@include('ModalPerfil')

<div class="container py-4" style="margin-left: 20%">
  <h1> Tickets Personales</h1>
  <a type="button"  href="{{route('homecliente')}}" class="btn btn-primary">Menú</a>


    
    <table class="table table-secondary table-striped mt-5 mb-5 ">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fecha</th>
            <th scope="col">Clasificacion</th>
            <th scope="col">Detalles</th>
            <th scope="col">status</th>

            <th scope="col">Departamento</th>

			
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($Misticktes as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idtic }}</th>
            <td>{{ $consulta->fecha }}</td>
            <td>{{ $consulta->clasificacion }}</td>
            <td>{{ $consulta->detalles }}</td>
            <td>{{ $consulta->status }}</td>


            
            <td>{{ $consulta->Depa_id }}</td>
            <td>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalCancelT{{$consulta->idtic}}">
                  Cancelar Ticket <i class="bi bi-trash-fill"></i>
               </button>
			   @include('ModalCancelT')

          </tr>
                   <!-- include('ModalTicket') AQUI INSERTAS EL MODAL WE PARA QUE TE LEA ELID Y TE MANDE LOS TICKET QUE QUIERAS :)-->


          @endforeach
        </tbody>

      </table>


</div>


@stop