@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Registro ticket <i class="bi bi-person-add"></i></h1>

<div class="container mb-3 mt-4 col-md-8">

    @if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif


    <div class="card text-center">

        <div class="card-header">
          Nuevo Ticket de Reporte 
        </div>

        <form action="{{route('ticket.store')}}"  method="post">
            @csrf

        <div class="card-body">


            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtfecha') }} </p>
                <label class="form-label"> Fecha </label> <i class="bi bi-person-lines-fill"></i>
                <input type="date" class="form-control" name="txtfecha">
                
            </div>

            <div class="mb-4">
            <p class="text-secondary fst-Italic">
                    {{$errors->first('txtcliente')}}
                </p>
                <label for="text" class="form-label" placeholder="Departamento">Cliente</label>
                <select class="form-select" name="txtcliente" aria-label="Default select example">
                    <option selected></option>
                    
                    @foreach ($moreinfou as $tb_usuarios)
                        <option value="{{$tb_usuarios['idusuario']}}">{{$tb_usuarios['name']}}</option>
                    @endforeach

                  </select>
                
            </div>

            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtclasificacion') }} </p>
                <label class="form-label">Clasificacion</label> <i class="bi bi-person-bounding-box"></i>
                    <select class="form-select" aria-label="Default select example" name="txtclasificacion">
                    <option selected placeholder=""></option>
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
                <select class="form-select" name="txtdepa" aria-label="Default select example">
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
                <input type="text" class="form-control" name="txtdetalles">
                
            </div>

            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtstatus') }} </p>
                <label class="form-label"> Status </label> <i class="bi bi-person-badge-fill"></i>
                <input type="text" class="form-control" name="txtstatus">
                
            </div>

            

            



        </div>

        <div class="card-footer">
            <button type="submit"  class="btn btn-secondary btn-lg"> Registrar Ticket <i class="bi bi-plus-circle-fill"> </i></button>
        </form>

        </div>
    

      </div>


</div>

@stop