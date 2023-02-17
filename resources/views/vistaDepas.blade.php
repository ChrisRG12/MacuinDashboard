@extends('Plantilla')
@section('contenido')


@if(session()->has('actualizar'))
    {!!" <script > Swal.fire(
  'Proceso Correcto',
  'Actualizacion Correcta!'
)  </script>"!!}
 @endif


 @if(session()->has('Eliminado'))
    {!!" <script > Swal.fire(
  'Proceso Correcto',
  'Eliminacion Correcta!'
)  </script>"!!}
 @endif

<h1 class="text-center">Mostrar Departamentos</h1>
<table class="table table-secondary table-striped mt-5 mb-5 ">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultarDepa as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idDepa }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->Descripcion }}</td>

            <td>
            <td><div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('depa.edit',$consulta->idDepa)}}" class="underline text-gray-900 dark:text-white">Editar</a></div></td>
            <td><div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('contacto.show',$consulta->idDepa)}}" class="underline text-gray-900 dark:text-white">Eliminar</a></div></td>
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>


@stop


