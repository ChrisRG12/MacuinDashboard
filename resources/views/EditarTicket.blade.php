@extends('plantilla')

@section('contenido')


<div class="container mt-4 col-md-5 text-center">
@if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif

  
    <div class="card text-center mb-2">
  
        <form action="{{route('ticket.update', $consultaId->idtic)}}" method="post">
            @csrf
  
            @method('PUT')
  
            <div class="card-header fw-bolder">
                Correcciones !!
             </div>
     
             <div class="card-body ">
             <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtfecha') }} </p>
                <label class="form-label"> Fecha </label> <i class="bi bi-person-lines-fill"></i>
                <input type="date" class="form-control" name="txtfecha" value="{{ $consultaId->fecha }}">
                
            </div>

            <div class="mb-4">
            <p class="text-secondary fst-Italic">
                    {{$errors->first('txtcliente')}}
                </p>
                <label for="text" class="form-label" placeholder="Ticket">Cliente</label>
                <select class="form-select" name="txtcliente" aria-label="Default select example" value="{{ $consultaId->autorj_id }}">
                    <option selected></option>
                    
                    @foreach ($moreinfou as $users)
                        <option value="{{$users['id']}}">{{$users['name']}}</option>
                    @endforeach

                  </select>
                
            </div>

            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtclasificacion') }} </p>
                <label class="form-label">Clasificacion</label> <i class="bi bi-person-bounding-box"></i>
                    <select class="form-select" aria-label="Default select example" name="txtclasificacion" >
                    <option ></option>
                    <option >Falla de Office </option>
                    <option >Fallas en la red</option>
                    <option >Errores de Software</option>
                    <option >Errores de Hardware</option>
                    <option >Mantenimientos Preventivo</option>
                </select>
            </div>                        
           

            <div class="mb-4">
            <p class="text-secondary fst-Italic">
                    {{$errors->first('txtdepa')}}
                </p>
                <label for="text" class="form-label" placeholder="Departamento">Tipo Departamento</label>
                <select class="form-select" name="txtdepa" aria-label="Default select example" value="{{ $consultaId->Depa_id }}">
                    <option selected></option>
                    
                    @foreach ($moreinfo as $tb__departamentos)
                        <option value="{{$tb__departamentos['idDepa']}}">{{$tb__departamentos['Nombre']}}</option>
                    @endforeach

                  </select>                
            </div>

            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtdetalles') }} </p>
                <label class="form-label"> Detalles </label> <i class="bi bi-person-badge-fill"></i>
                <input type="text" class="form-control" name="txtdetalles" value="{{ $consultaId->detalles }}">
                
            </div>

            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtstatus') }} </p>
                <label class="form-label">Status</label> <i class="bi bi-person-bounding-box"></i>
                    <select class="form-select" aria-label="Default select example" name="txtstatus" value="{{ $consultaId->status }}">
                    <option ></option>
                    <option >Solicitado </option>
                    <option >Cancelado</option>
                    <option >Asignado</option>
                    <option >En Proceso</option>
                    <option >Nunca Solucionado</option>
                    <option >Completado</option>
                </select>
            </div>

            
     
             <div class="card-footer text-center">
                 <button type="submit" class="btn btn-secondary btn-lg"> Actualizar Departamento </button>
                </div>
             </form>
            </div>
    
              
        </div>


    
@stop