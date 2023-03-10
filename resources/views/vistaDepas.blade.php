@extends('plantilla')

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
        <button class="btn btn-danger ms-3 mb-3" href="{{route('Cierra.Sesion')}}" type="button">Cerrar sesión</button>
      </div>
		</div>
	  </div>

@if(session()->has('Confirmacion'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Departamento Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Proceso Exitoso',
      'Departamento Eliminado',
      'success'  
) </script> "!!}
@endif


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
        'Proceso Exitoso',
      'Departamento Editado',
      'success'  
) </script> "!!}
@endif


<div class="container w-75 mt-5">
  <a type="button"  href="{{route('depa.create')}}" class="btn btn-primary">Agregar Departamento +</a>
    
    <table class="table table-secondary table-striped mt-5 mb-5 ">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion de Area</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaDepa as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idDepa }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->Descripcion }}</td>
            <td>
            <a href="{{route('depa.edit' , $consulta->idDepa)}}" class="btn btn-outline-success"> Editar  <i class="bi bi-people"></i></a>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarDepa{{$consulta->idDepa}}">
                  Eliminar <i class="bi bi-trash-fill"></i>
               </button>
          </tr>
          @include('ModalEliminarDepa')

          @endforeach
        </tbody>

      </table>






</div>


@stop