
<!-- Modal -->
<div class="modal fade" id="ModalEliminarDepa{{$consulta->idDepa}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarDepa" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Eliminar Departamento <i class="bi bi-person-x"></i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('depa.destroy',$consulta->idDepa)}} ">
          @csrf
          {!!method_field('DELETE')!!};

        <div class="modal-body">


          <h5 class="text-primary text-center">{{$consulta->Nombre}} </h5>
          <h5 class="card-title text-center"> {{$consulta->Descripcion}} </h5>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close <i class="bi bi-x-octagon-fill"></i></button>
          <button type="submit" class="btn btn-danger">Eliminar <i class="bi bi-trash-fill"></i></button>
        </form>
        </div>

      </div>
    </div>
  </div>


