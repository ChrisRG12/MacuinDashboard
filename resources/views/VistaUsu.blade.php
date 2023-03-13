@extends('PlantillaJ')

@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title>Macuin Dashboard</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<!-- Main content -->


	<div class="d-flex"> 
		<div class="flex-column flex-shrink-0 p-3 text-bg-dark" class="bg-primary"style="width: 280px; height: 100vh;">
		<a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
		  <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
		  <span class="fs-4">Macuin Dashboard</span>
		</a>
		<hr>
		<ul class="nav nav-pills flex-column mb-auto">
		  <li class="nav-item">
			<a href="{{route('homejefe')}}" class="nav-link active" aria-current="page">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
			  Home
			</a>
		  </li>
		  <li>
			<a href="{{route('Usuario.index')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
			  Administración Usuarios
			</a>
		  </li>
		  <li>
			<a href="{{route('depa.index')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
			  Registro Departamentos
			</a>
		  </li>
		  <li>
			<a href="{{route('ticket.index')}}" class="nav-link text-white">
			  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
			  Administración de Tickets
			</a>
		  </li>
		  <li>
		  </li>
		</ul>
		<hr>
		<div class="dropdown">
		  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
			<strong>{{Auth::user()->name}}</strong>
		  </a>
		  <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
			<li><a class="dropdown-item" href="#">Configuraciones</a></li>
			<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ModalPerfil"> 
				Perfil
			 </button>
		  </ul>
        <div class="fixed-bottom">
			<form method="GET" action="{{ route('Cierra.Sesion') }}">
			  <button class="btn btn-danger ms-3 mb-3" type="submit">Cerrar sesión</button>
		  </form>      
      </div>
		</div>
	  </div>
    
@if(session()->has('confirmacion'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Usuario Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Eliminado',
      'Usuario Eliminado',
      'success'  
) </script> "!!}
@endif


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Usuario Editado',
      'success'  
) </script> "!!}
@endif


<div class="container mt-5">
	<h1 class="text-center mt-4" style="color: rgb(0, 0, 0)"> Administración de Usuarios <i class="fas fa-users"></i></h1>


<div class="container mb-3 mt-4 col-md-5">
                <a type="button"  href="{{route('Usuario.create')}}" class="btn btn-primary">Agregar Usuario +</a>
                <div class="my-3">
              </div>
            </div>
            <form>
                <div class="container mb-3 mt-4 col-md-5">
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn btn-success" type="submit">Buscar</button>
                </form>
    
    <table class="table table-secondary table-striped mt-5 mb-5 col-md-8">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Usuario</th>
            <th scope="col">Tipo</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaUsuario as $consulta)
          <tr>
            <th scope="row">{{ $consulta->id }}</th>
            <td>{{ $consulta->name }}</td>
            <td>{{ $consulta->email }}</td>
            <td>{{ $consulta->TipoUsu }}</td>
            <td>
                <a href="{{route('Usuario.edit' , $consulta->id)}}" class="btn btn-outline-success"> Editar  <i class="bi bi-people"></i></a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarUsu{{$consulta->id}}">
                  Eliminar <i class="bi bi-trash-fill"></i>
               </button>
            </td>
            @include('ModalEliminarUsu')

          </tr>
          @endforeach
        </tbody>

      </table>






</div>


@stop