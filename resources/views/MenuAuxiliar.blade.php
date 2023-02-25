@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Home Auxiliar</h1>
<div class="container mb-3 mt-4 col-md-3">


    <div class="card text-center">

        <div class="card-header">
          Auxiliar de Soporte
        </div>

        <div class="card-body">
            
            <div class="mb-3">
            <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary">Configuracion de perfil</a>
            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('depa.create')}}" class="btn btn-primary">Soporte a ticktes</a>

            </div>

            <a href="{{route('Cierra.Sesion')}}">
              <button class="btn btn-danger">Cerrar sesión</button></a>



        </div>

      </div>

</div>

@stop