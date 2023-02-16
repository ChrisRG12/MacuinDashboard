@extends('plantilla')

@section('contenido')

<div class="container mb-3 mt-4 col-md-6 text-center">

    <h1><i class="bi bi-door-open-fill"></i></h1>

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
                <input type="text" class="form-control" name="txtcontra">
            </div>

            <a href="#" class="btn btn-success btn-lg"><i class="bi bi-box-arrow-in-right"></i> Ingresar</a>

        </div>

        <div class="card-footer">
            <a href="#" class="btn btn-secondary"> <i class="bi bi-person-add"></i>  Agregar Usuario</a>
           
        </div>


      </div>



</div>
@stop
