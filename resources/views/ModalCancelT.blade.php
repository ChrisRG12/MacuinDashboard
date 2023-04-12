
<!-- Modal -->
<div class="modal fade" id="ModalCancelT{{$consulta->idtic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalCancelT" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cancelar Ticket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('ticketC.update',$consulta->idtic)}} ">
          @csrf
          {!!method_field('PUT')!!}

        <div class="modal-body">

          <h5>Ticket: {{ $consulta->idtic }}</h5>
          <h5>Fecha: {{ $consulta->fecha }} </h5>
          <h5>Detalles: {{ $consulta->detalles }}</h5>

        <input type="hidden" class="form-control" name="status" value="Cancelado" readonly placeholder="Cancelar" />


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close <i class="bi bi-x-octagon-fill"></i></button>
          <button type="submit" class="btn btn-danger">Cancelar <i class="bi bi-trash-fill"></i></button>
        </form>
        </div>

      </div>
    </div>
  </div>