@extends('plantilla')

@section('contenido')

<div class="container mt-4 col-md-5 text-center">

  
    <div class="card text-center mb-2">
  
        <form action="{{route('Usuario.update', $consultaId->id)}}" method="POST">
            @csrf
  
            @method('PUT')
  
            <div class="card-header fw-bolder">
                Correcciones !!
             </div>
     
             <div class="card-body ">
     
     
                 <div class="mb-1">
                   <label class="form-label"> Nombre </label>
                  <input type="text" class="form-control" name="txtnom" value="{{ $consultaId->name }}">
                 </div>
     
     
                 <div class="mb-1">
                  <label class="form-label"> Usuario </label>
                  <input type="text" class="form-control" name="txtusu" value="{{ $consultaId->email }}">
                 </div>

                 <div class="mb-1">
                    <label class="form-label"> Tipo Usuario</label> <i class="bi bi-person-bounding-box"></i>
                    <select class="form-select" aria-label="Default select example"  name="txttip" value="{{ $consultaId->TipoUsu }}">
                    <option selected ></option>
                    <option >Jefe-Soporte</option>
                    <option >Auxiliar-Jefe</option>
                    <option >Cliente</option>
                    <p class="text-primary fst-Italic">
                    {{ $errors->first('txttip') }} </p>
                </select>
                   </div>

             </div>
     
             <div class="card-footer text-center">
                 <button type="submit" class="btn btn-secondary btn-lg"> Actualizar Usuario </button>
                 <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary btn-lg">Administración de Usuarios</a>

                </div>
             </form>
            </div>
    
              
        </div>


    
@stop