@extends('plantilla')

@section('contenido')

<div class="container mt-4 col-md-5 text-center">

  
    <div class="card text-center mb-2">
  
        <form action="{{route('Usuario.update', $consultaId->idusuario)}}" method="post">
            @csrf
  
            @method('PUT')
  
            <div class="card-header fw-bolder">
                Correcciones !!
             </div>
     
             <div class="card-body ">
     
     
                 <div class="mb-1">
                   <label class="form-label"> Nombre </label>
                  <input type="text" class="form-control" name="txtnom" value="{{ $consultaId->Nombre }}">
                 </div>
     
     
                 <div class="mb-1">
                  <label class="form-label"> Usuario </label>
                  <input type="text" class="form-control" name="txtusu" value="{{ $consultaId->Usuario }}">
                 </div>
  
                 <div class="mb-1">
                  <label class="form-label"> Contraseña  </label>
                  <input type="text" class="form-control" name="txtcon" value="{{ $consultaId->Contra }}">
                 </div>

                 <div class="mb-1">
                    <label class="form-label"> Tipo  </label>
                    <input type="text" class="form-control" name="txttip" value="{{ $consultaId->TipoUsu }}">
                   </div>

             </div>
     
             <div class="card-footer text-center">
                 <button type="submit" class="btn btn-secondary btn-lg"> Actualizar Usuario </button>
                </div>
             </form>
            </div>
    
              
        </div>


    
@stop