@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Agregate Men</h1>

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
                <label class="form-label"> Nombre </label>
                <input type="text" class="form-control" name="txtnom">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtnom') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Usuario </label>
                <input type="text" class="form-control" name="txtusu">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtusu') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Contraseña </label>
                <input type="text" class="form-control" name="txtcon">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtcon') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Tipo </label>
                <input type="text" class="form-control" name="txttip">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txttip') }} </p>
            </div>

        </div>

        <div class="card-footer">

            <a href="#" class="btn btn-secondary btn-lg"> Agregar </a>

        </form>

        </div>
    

      </div>


</div>

@stop