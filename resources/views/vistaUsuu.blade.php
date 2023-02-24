@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Administracion de Tickets</h1>

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
                    <th scope="col">No.1</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Clasificacion</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Software</td>
                    <td>23-02-2023</td>
                    <td>Daño Software</td>
                    <td>No prende la pc</td>
                    <td>Por asignar</td>
                    <td><button type="button" class="btn btn-outline-success">Editar</button> <button type="button" class="btn btn-outline-danger">Eliminar</button></td>
                  </tr>
                  <tr>

                  </tr>
                </tbody>
              </table>

            

        </div>

      </div>

</div>

@stop