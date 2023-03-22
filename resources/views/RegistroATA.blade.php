@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Asignar ticket <i class="bi bi-person-add"></i></h1>

<div class="container mb-3 mt-4 col-md-8">

    @if ($errors->any())
    @foreach ($errors->all() as $error) 
    @endforeach  
  @endif


    <div class="card text-center">

        <div class="card-header">
          Asignacion de Ticket
        </div>

        <form action="{{route('ticketA.store')}}"  method="post">
            @csrf

        <div class="card-body">

            <div class="mb-4">
            <p class="text-secondary fst-Italic">
                    {{$errors->first('txtauxiliar')}}
                </p>
                <label for="text" class="form-label" placeholder="TicketA">Nombre del Jefe Auxiliar</label>
                <select class="form-select" name="txtauxiliar" aria-label="Default select example">
                    <option selected></option>
                    
                    @foreach ($moreinfou as $users)
                        <option value="{{$users['id']}}">{{$users['name']}}</option>
                    @endforeach

                  </select>
                
            </div>
            
           

            <div class="mb-4">
            <p class="text-secondary fst-Italic">
                    {{$errors->first('txtticket')}}
                </p>
                <label for="text" class="form-label" placeholder="TicketA">Ticket</label>
                <select class="form-select" name="txtticket" aria-label="Default select example">
                    <option selected></option>
                    
                    @foreach ($moreinfot as $tb_tickets)
                        <option value="{{$tb_tickets['idtic']}}">{{$tb_tickets['idtic']}}</option>
                    @endforeach

                  </select>
                
            </div>

            <div class="mb-3">
            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtobservacion') }} </p>
                <label class="form-label"> Observacion General </label> <i class="bi bi-person-badge-fill"></i>
                <input type="text" class="form-control" name="txtobservacion">
                
            </div>


        </div>

        <div class="card-footer">
            <button type="submit"  class="btn btn-secondary btn-lg"> confirmar Asignacion <i class="bi bi-plus-circle-fill"> </i></button>
        </form>

        </div>
    

      </div>


</div>

@stop