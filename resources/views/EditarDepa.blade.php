@extends('plantilla')

@section('contenido')

<div class="container mt-4 col-md-5 text-center">

  
    <div class="card text-center mb-2">
  
        <form action="{{route('depa.update', $consultaId->idDepa)}}" method="post">
            @csrf
  
            @method('PUT')
  
            <div class="card-header fw-bolder">
                Correcciones !!
             </div>
     
             <div class="card-body ">
     
     
                 <div class="mb-1">
                   <label class="form-label"> Nombre </label>
                  <input type="text" class="form-control" name="txtnombre" value="{{ $consultaId->Nombre }}">
                 </div>
     
     
                 <div class="mb-1">
                  <label class="form-label"> Descripcion </label>
                  <input type="text" class="form-control" name="txtdescripcion" value="{{ $consultaId->Descripcion }}">
                 </div>
             </div>
     
             <div class="card-footer text-center">
                 <button type="submit" class="btn btn-secondary btn-lg"> Actualizar Usuario </button>
                </div>
             </form>
            </div>
    
              
        </div>


    
@stop