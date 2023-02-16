@extends('Plantilla')
@section('contenido')


@if(session()->has('actualizar'))
    {!!" <script > Swal.fire(
  'Eres bueno',
  'Actualizacion Correcta!'
)  </script>"!!}


 @endif


 @if(session()->has('Eliminado'))
    {!!" <script > Swal.fire(
  'Eres bueno',
  'Eliminacion Correcta!'
)  </script>"!!}


 @endif

<h1 class="text-center">Mostrar Recuerdos</h1>
@foreach ($ConsultaRec as $consulta)


<div class="container col-md-6 mb-5">
    
    <div class="card">
        <div class="card-header text-center">
        <h5 class="text-primary text center">{{$consulta->fecha}}</h5>

            
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$consulta->Titulo}}</h5>
            <p class="card-text">{{$consulta->Recuerdo}}</p>
        </div>
        <div class="card-footer text-muted">
            <a href="{{route('recuerdo.edit',$consulta->idRecuerdo)}}" class="btn btn-primary">Actualizar</a>
            <a href="{{route('Eliminar.show',$consulta->idRecuerdo)}}" class="btn btn-secondary">Eliminar</a>
        </div>

        
    </div>

</div>
@endforeach


@stop


