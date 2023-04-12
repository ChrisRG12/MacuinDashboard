<!-- Modal -->
<div class="modal fade" id="ModalCancelT{{$consulta->idtic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalCancelT" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Seguro desea Cancelar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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