@extends('plantillaJ')

@section('contenido')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="container">

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

  <form class="d-flex">
        <input name="buscarxs"class="form-control me-2" type="search" placeholder="Busqueda Status" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>

      </form>

      <form class="d-flex">
        <input name="buscarxs"class="form-control me-2" type="search" placeholder="Busqueda Depa" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>

      </form>




    
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
      <a href="{{route('descargarPDF')}}" class="btn btn-sm btn-primary"> Imprimir PDF</a>

      


	  

</div>


@stop