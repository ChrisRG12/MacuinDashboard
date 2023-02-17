@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Agregar nuevo Departamento <i class="bi bi-person-add"></i></h1>

<div class="container mb-3 mt-4 col-md-8">

    @if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif


    <div class="card text-center">

        <div class="card-header">
          Agregar Departamento 
        </div>

        <form action="#" method="post">

        <div class="card-body">
           
            
            <div class="mb-3">
                <label class="form-label"> Nombre Departamento </label> <i class="bi bi-person-lines-fill"></i>
                <input type="text" class="form-control" name="txtnombre">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtnombre') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Descripcion </label> <i class="bi bi-person-badge-fill"></i>
                <input type="text" class="form-control" name="txtdescripcion">
                <p class="text-primary fst-Italic">
                    {{ $errors->first('txtdescripcion') }} </p>
            </div>               

        </div>

        <div class="card-footer">

            <a href="#" class="btn btn-secondary btn-lg"> Confirmar Registro <i class="bi bi-plus-circle-fill"></i></a> 

        </form>

        </div>
    

      </div>


</div>

@stop