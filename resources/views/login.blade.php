@extends('plantilla')

@section('contenido')

<div class="container w-75 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <!--md mediano, lg largo, xl extralargo-->
      
      <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 ">
        <img src="\ima\conv.jpg" width="800" height="700" alt="">
      </div>
  
      <div class="col bg-white p-5 rounded-end" style="color: rgb(57, 36, 58)">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 w-100 border-0" id="imagen" style="display: flex; aling-items: center; justify-content: center;">
            <img src="\ima\conv.jpg" width="150" height="100" alt="">
          </div>
          <h2 class="fw-bold text-center pt-3 mb-5 ">Iniciar Sesion</h2>

          <!--Form-->
  
          <form class="form-signin" action="#" method="post">

              <div class="mb-4">
                <label for="text" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="txtuser" required>
              </div>

              <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="txtcontra" required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-dark">Iniciar Sesion</button>
              </div>

              <div class="my-3">
                <span>¿No tienes cuenta?<a href="#" class="nav-link"> <p style="color: blue">Registrate </p></a></span>
              </div>
  
          </form>
  
      </div>
    </div>
  </div> 
@stop
