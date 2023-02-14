@extends('plantilla')

@section('contenido')

<div class="container">

    <div class="card text-center">

        <div class="card-header">
          LOGIN
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label"> Usuario </label>
                <input type="text" class="form-control" name="txtusuario">
            </div>

            <div class="mb-3">
                <label class="form-label"> Contraseña </label>
                <input type="text" class="form-control" name="txtusuario">
            </div>

        </div>

        <div class="card-footer">
            <a href="#" class="btn btn-primary">Ingresar</a>
        </div>
      </div>



</div>
@stop
