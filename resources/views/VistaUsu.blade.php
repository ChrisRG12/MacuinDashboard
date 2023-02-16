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

<div class="container w-75 mt-5 rounded shadow">

    
    <table class="table table-secondary table-striped mt-5 mb-5 ">

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
            <th scope="row">{{ $consulta->idusuario }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->Usuario }}</td>
            <td>{{ $consulta->TipoUsu }}</td>
            <td>
                <a href="#" class="btn btn-outline-danger"> Eliminar</a>
                <a href="#" class="btn btn-outline-success">Editar</a>
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>






</div>


@stop