@extends('plantillaJ')

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
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="container">
  <h1 class="text-center display-5 fw-bold" style="color: rgb(255, 251, 251)">Tickets Almacenados</h1>
  <a type="button"  href="{{route('homecliente')}}" class="btn btn-primary">Menú</a>


    
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
            @foreach ($ConsultaTicket as $consulta)
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
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarTicket{{$consulta->idtic}}">
                  Eliminar <i class="bi bi-trash-fill"></i>
               </button>
			   @include('ModalEliminarTicket')


          </tr>
                   <!-- include('ModalTicket') AQUI INSERTAS EL MODAL WE PARA QUE TE LEA ELID Y TE MANDE LOS TICKET QUE QUIERAS :)-->


          @endforeach
        </tbody>

      </table>


	  <table class="table table-secondary table-striped mt-5 mb-5 ">
    <h1 class="text-center display-5 fw-bold" style="color: rgb(255, 251, 251)">Tickets Asignados</h1>

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">id Auxiliar</th>
            <th scope="col">Id Ticket</th>
            <th scope="col">Observaciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($TicktesAsig as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idasig }}</th>
            <td>{{ $consulta->name }}</td>
			<td>{{ $consulta->idtic}}</td>
            <td>{{ $consulta->observacion }}</td>

            <td>



          </tr>
                   <!-- include('ModalTicket') AQUI INSERTAS EL MODAL WE PARA QUE TE LEA ELID Y TE MANDE LOS TICKET QUE QUIERAS :)-->


          @endforeach
        </tbody>

      </table>

</div>


@stop