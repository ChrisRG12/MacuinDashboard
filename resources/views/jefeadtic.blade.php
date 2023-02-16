@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Administración de Tickets
</h1>

        <div class="position-absolute top-0 end-0 p-3">
          <button type="button" class="btn btn-primary">Generar PDF</button>
        </div>
        <div class="card-body">
            <form>
                <div class="container mb-3 mt-4 col-md-5">
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-success" type="submit">Buscar</button>
                  </form>
                </div>
                <div class="container mb-3 mt-4 col-md-8">
            <table class="table table-dark table-sm">
                <thead class="table-light">
                  <tr>
                    <th scope="col">Autor</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Clasificación</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Observación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Jelos</th>
                    <td>por ai</td>
                    <td>12/05/23</td>
                    <td>hay</td>
                    <td>alto</td>
                    <td>mucho texto</td>
                    <td>ta bueno</td>
                    <td>si se puede</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Apue</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Chris</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <div class="d-grid gap-2 d-flex justify-content-center ">
                <button class="btn btn-warning" type="button"> <i class="bi bi-plus"></i> Asignar</button>
                <button class="btn btn-info" type="button"> <i class="bi bi-pencil-square"></i> Comentarios</button>
                <button class="btn btn-light" type="button"> <i class="bi bi-eye"></i> Observaciones</button>
              </div>

        </div>

      </div>

</div>

@stop