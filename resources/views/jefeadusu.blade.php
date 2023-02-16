@extends('plantilla')

@section('contenido')

<h1 class="text-center mt-4" style="color: floralwhite"> Administracion de Usuarios</h1>

        <div class="card-body">
            

            <div class="container mb-3 mt-4 col-md-5">
                <button type="button" class="btn btn-primary">Agregar Usuario +</button>
            </div>
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
                    <th scope="col">id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Tipo de Usuario</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Chris</td>
                    <td>Otto</td>
                    <td><button type="button" class="btn btn-outline-success">Editar</button> <button type="button" class="btn btn-outline-danger">Eliminar</button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jelos</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Apue</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>

            

        </div>

      </div>

</div>

@stop