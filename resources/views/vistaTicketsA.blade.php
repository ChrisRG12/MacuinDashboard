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
      <h1>Tickets Asignados</h1>
      <form class="d-flex">
        <input name="buscarxs"class="form-control me-2" type="search" placeholder="Busqueda Status" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>

      </form>

      <form class="d-flex">
        <input name="buscarxs"class="form-control me-2" type="search" placeholder="Busqueda Depa" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>

        
      </form>

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">id Cliente</th>
            <th scope="col">Fecha</th>
            <th scope="col">Clasificacion</th>
            <th scope="col">Detalles</th>
            <th scope="col">status</th>

            <th scope="col">Departamento</th>
            <th scope="col">Comentario</th>

            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($tickets as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idtic }}</th>
            <td>{{ $consulta->autorj_id }}</td>
            <td>{{ $consulta->fecha }}</td>
            <td>{{ $consulta->clasificacion }}</td>
            <td>{{ $consulta->detalles }}</td>
            <td>{{ $consulta->status }}</td>
            <td>{{ $consulta->Depa_id }}</td>
            <td>{{ $consulta->comentarioA }}</td>
            
            
            <td>
            <a href="{{route('ticketA.edit' , $consulta->idtic)}}" class="btn btn-outline-success"> Avanzar  <i class="bi bi-people"></i></a>

          </tr>

          @endforeach
        </tbody>

      </table>
</div>


@stop