@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Agregar Departamento</h1>
<div class="container mb-3 mt-4 col-md-6">


    <div class="card text-center">

        <div class="card-header">
          Departamentos
        </div>

        <div class="card-body">
            
            <div class="mb-3">
                <label class="form-label"> Nombre </label>
                <input type="text" class="form-control" name="txtnom">
            </div>

            <div class="mb-3">
                <label class="form-label"> Descripción </label>
                <input type="text" class="form-control" name="txtusu">
            </div>

        </div>

        <div class="card-footer">
            <a href="#" class="btn btn-success"> Agregar </a>          <a href="#" class="btn btn-danger"> Cancelar </a>
        </div>


      </div>












</div>

@stop