<!-- Modal -->
<div class="modal fade" id="ModalCancelT{{$consulta->idtic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalCancelT" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Eliminar Usuario <i class="bi bi-person-x"></i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('ticketC.update',$consulta->idtic)}} ">
          @csrf
          {!!method_field('PUT')!!};

             @endforeach
        @endif


          <h5>Ticket: {{ $consulta->idtic }}</h5>
          <h5>Fecha: {{ $consulta->fecha }} </h5>
          <h5>Detalles: {{ $consulta->detalles }}</h5>

        <input type="hidden" class="form-control" name="status" value="Cancelado" readonly placeholder="Cancelar" />


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close <i class="bi bi-x-octagon-fill"></i></button>
          <button type="submit" class="btn btn-danger">Cancelar <i class="bi bi-trash-fill"></i></button>

      @if($errors->any())
        @foreach($errors->all() as $error)  

             @endforeach
        @endif

        <div class="card-body">
            <!--Agregamos un form con dos inputs y un boton uno que sea el titulo y otro el recuerdo-->
            <form method="post" action="{{route('cancel.update',$consulta->idtic)}}">
            @csrf

            {!!method_field('PUT')!!}

            <p class="text-primary fst-Italic">
                    {{ $errors->first('txtstatus') }} </p>
                <label class="form-label"> Status </label> <i class="bi bi-person-badge-fill"></i>
                <input type="text" class="form-control" name="txtstatus" value="Cancelado">
                
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-secondary">Si, Ticket</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        </form>
        </div>   

      </div>


    </div>
  </div>
</div>