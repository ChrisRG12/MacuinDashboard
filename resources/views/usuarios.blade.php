@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Agregate Men</h1>
<div class="container mb-3 mt-4 col-md-8">


    <div class="card text-center">

        <div class="card-header">
          Agregar Usuario
        </div>

        <div class="card-body">
            
            <div class="mb-3">
                <label class="form-label"> Nombre </label>
                <input type="text" class="form-control" name="txtnom">
            </div>

            <div class="mb-3">
                <label class="form-label"> Usuario </label>
                <input type="text" class="form-control" name="txtusu">
            </div>

            <div class="mb-3">
                <label class="form-label"> Contraseña </label>
                <input type="text" class="form-control" name="txtcon">
            </div>

            <div class="mb-3">
                <label class="form-label"> Tipo </label>
                <input type="text" class="form-control" name="txttip">
            </div>

        </div>

        <div class="card-footer">
            <a href="#" class="btn btn-primary"> Agregar </a>
        </div>


      </div>












</div>

@stop