@extends('plantilla')

@section('contenido')
<a href="{{route('depa.index')}}" class="btn btn-primary float-end me-3 mt-3"><svg class="bi me-2" width="16" height="16"><use xlink:href="#arrow-left"></use></svg>Regresar</a>
<h1 class="text-center mt-4" style="color: floralwhite"> Registro Departamento <i class="bi bi-person-add"></i></h1>

<div class="container mb-3 mt-4 col-md-8">

    @if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif


    <div class="card text-center">

        <div class="card-header">
          Nuevo Departamento 
        </div>

        <form action="{{route('depa.store')}}"  method="post">
            @csrf

        <div class="card-body">
           
            
            <div class="mb-3">
                <label class="form-label"> Nombre </label> <i class="bi bi-person-lines-fill"></i>
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
            <button type="submit"  class="btn btn-secondary btn-lg"> Agregar <i class="bi bi-plus-circle-fill"> </i></button>
        </form>

        </div>
    

      </div>


</div>

@stop