@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Home Jefe</h1>
<div class="container mb-3 mt-4 col-md-3">


    <div class="card text-center">

        <div class="card-header">
          Jefe de Soporte
        </div>

        <div class="card-body">
            
            <div class="mb-3">
            <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary">Administración de Usuarios</a>
            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('depa.create')}}" class="btn btn-primary">Administración de  Departamentos</a>

            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-warning">Administración de Tickets</button>
            </div>

        </div>

      </div>

</div>

@stop