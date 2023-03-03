
<!-- Modal -->
<div class="modal fade" id="ModalPerfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalPerfil" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> {{Auth::user()->TipoUsu}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{route('Usuario.actaulizar', Auth::user()->id)}}">
          @csrf
          @method('PUT')
  
        <div class="modal-body">

     
            <div class="mb-1">
                <label class="form-label"> Nombre </label>
               <input type="text" class="form-control" name="txtnom" value="{{Auth::user()->name}}">
              </div>
  
  
              <div class="mb-1">
               <label class="form-label"> Usuario </label>
               <input type="text" class="form-control" name="txtusu" value="{{Auth::user()->email}}">
              </div>

              <div class="mb-1 text-center">
                <label class="form-label">  </label>
               </div>


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close <i class="bi bi-x-octagon-fill"></i></button>
          <button type="submit" class="btn btn-success">Actualizar<i class="bi bi-trash-fill"></i></button>
        </form>
        </div>

      </div>
    </div>
  </div>

