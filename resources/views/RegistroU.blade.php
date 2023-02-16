@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Agregar nuevo usuario <i class="bi bi-person-add"></i></h1>

<div class="container mb-3 mt-4 col-md-8">

    @if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif


    <div class="card text-center">

        <div class="card-header">
          Agregar Usuario 
        </div>

        <form action="#" method="post">

        <div class="card-body">
           
            
            <div class="mb-3">
                <label class="form-label"> Nombre </label> <i class="bi bi-person-lines-fill"></i>
                <input type="text" class="form-control" name="txtnom">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtnom') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Usuario </label> <i class="bi bi-person-badge-fill"></i>
                <input type="text" class="form-control" name="txtusu">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtusu') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Contraseña </label> <i class="bi bi-person-slash"></i>
                <input type="text" class="form-control" name="txtcon">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtcon') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Tipo </label> <i class="bi bi-person-bounding-box"></i>
                <input type="text" class="form-control" name="txttip">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txttip') }} </p>
            </div>

        </div>

        <div class="card-footer">

            <a href="#" class="btn btn-secondary btn-lg"> Agregar <i class="bi bi-plus-circle-fill"></i></a> 

        </form>

        </div>
    

      </div>


</div>

@stop