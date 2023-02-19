@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Home Cliente</h1>
<div class="container mb-3 mt-4 col-md-3">


    <div class="card text-center">

        <div class="card-header">
          Cliente
        </div>

        <div class="card-body">
            
            <div class="mb-3">
            <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary">Configuracion de perfil</a>
            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('depa.create')}}" class="btn btn-primary">Generar ticket</a>

            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-warning">Mis tickets</button>
            </div>

        </div>

      </div>

</div>

@stop