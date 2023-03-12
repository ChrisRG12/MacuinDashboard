@extends('plantilla')

@section('contenido')
<a href="{{route('Usuario.index')}}" class="btn btn-primary float-end me-3 mt-3"><svg class="bi me-2" width="16" height="16"><use xlink:href="#arrow-left"></use></svg>Regresar</a>
<div class="container mt-4 col-md-5 text-center">

    @if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif

  <div class="card text-center mb-2">
  
        <form action="{{route('Usuario.update', $consultaId->id)}}" method="POST">
            @csrf
            @method('PUT')
  
            <div class="card-header fw-bolder">
                Correcciones !!
             </div>
     
             <div class="card-body ">
     
     
                 <div class="mb-1">
                    <p class="text-primary fst-Italic">
                        {{ $errors->first('txtnom') }} </p>
                   <label class="form-label"> Nombre </label>
                  <input type="text" class="form-control" name="txtnom" value="{{ $consultaId->name }}">
                 </div>
     
     
                 <div class="mb-1">
                    <p class="text-primary fst-Italic">
                        {{ $errors->first('txtusu') }} </p>
                  <label class="form-label"> Usuario </label>
                  <input type="text" class="form-control" name="txtusu" value="{{ $consultaId->email }}">
                 </div>

                 <div class="mb-1">
                    <p class="text-primary fst-Italic">
                        {{ $errors->first('txttip') }} </p>
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

                   <div class="mb-1">
                    <p class="text-primary fst-Italic">
                        {{ $errors->first('txtcon') }} </p>
                    <label class="form-label"> Contraseña </label>
                    <input type="text" placeholder="Contraseña" class="form-control" name="txtcon" required>
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