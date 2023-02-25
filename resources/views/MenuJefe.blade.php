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
	<!-- Navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Macuin Dashboard</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="{{route('Cierra.Sesion')}}">
						<button class="btn btn-danger">Cerrar sesión</button></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<h1 class="text-center mt-4" style="color: floralwhite"> Home Jefe</h1>
<div class="container mb-3 mt-4 col-md-3">


	<!-- Main content -->
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-3 bg-dark text-light py-4">
				<div class="text-center">
					<img src="https://via.placeholder.com/150" alt="Profile picture" class="rounded-circle img-thumbnail">
					<h3 class="mt-3">Jelos</h3>
				</div>
				<hr class="bg-light">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="#">Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Configuración</a>
					</li>
				</ul>
			</div>

			<!-- Main content -->
			<div class="col-md-9 py-4">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Administración de Usuarios</h5>
								<p class="card-text">Gestión de usuarios y permisos de acceso en la plataforma.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-users"></i> Ir a la administración de usuarios</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Registro de Departamentos</h5>
								<p class="card-text">Gestión de usuarios y permisos de acceso en la plataforma.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-building"></i> Ir al registro de departamentos</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Administración de Tickets de la empresa.</p>
                  <p class="card-text">Gestión de usuarios y permisos de acceso en la plataforma.</p>
                  <a href="#" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Ir a la administración de tickets</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body">
            
            <div class="mb-3">
            <a type="button"  href="{{route('Usuario.index')}}" class="btn btn-primary">Administración de Usuarios</a>
            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('depa.index')}}" class="btn btn-primary">Administración de  Departamentos</a>

            </div>

            <div class="mb-3">
            <a type="button"  href="{{route('ticket.index')}}" class="btn btn-primary">Administración de  Tickets</a>

            </div>

        </div>


      </div>
    </div>
  
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  </body>
  </html>
  
