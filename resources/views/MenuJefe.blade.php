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
						<button class="btn btn-danger">Cerrar sesión</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Main content -->
	<div class="container">
        <div class="row">
          <div class="col-lg-2 bg-dark text-light p-3">
            <h3>Jefe de Empresa</h3>
            <hr>
            <img src="https://via.placeholder.com/150" alt="Foto de perfil" class="rounded-circle">
            <hr>
            <p>Jelos es Angel</p>
            <hr>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-light" href="#">CEO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Administración de Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Registro de Departamento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Administración de Tickets</a>
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
								<a href="#" class="btn btn-primary"><i class="fas fa-users"></i> Entrar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Registro de Departamentos</h5>
								<p class="card-text">Gestión de usuarios y permisos de acceso en la plataforma.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-building"></i> Entrar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Administración de Tickets<</h5>
								<p class="card-text">Permite asignar tickets a los miembros del equipo, hacer seguimiento y dar solución a los problemas.</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Entrar</a>
							</div>
						</div>
					</div>
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
  
