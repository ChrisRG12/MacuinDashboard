@extends('plantilla')

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jefe de Empresa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            background-color: #343a40;
            color: white;
            overflow-x: hidden;
            padding-top: 50px;
        }
        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 16px;
            color: #bbb;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: #fff;
        }
        .sidebar .active {
            background-color: #4CAF50;
            color: white;
        }
        .sidebar .profile {
            margin-bottom: 20px;
        }
        .sidebar .profile img {
            display: block;
            margin: auto;
            border-radius: 50%;
            width: 80%;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .option {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            border: 3px solid #343a40;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            cursor: pointer;
        }
        .option:hover {
            background-color: #343a40;
            color: white;
        }
        .option img {
            max-width: 100%;
            max-height: 100%;
        }
        .option h3 {
            font-size: 30px;
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid">
            <h4 class="text-center mt-2">Jefe de Empresa</h4>
        </div>
        <a href="#" class="active">Dashboard</a>
        <a href="#">Administración de Usuarios</a>
        <a href="#">Registro de Departamento</a>
        <a href="#">Administración de Tickets</a>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="option">
                    <img src="https://via.placeholder.com/200x200" alt="Administración de Usuarios">
                    <h3>Administración de Usuarios</h3>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="option">
                    <img src="https://via.placeholder.com/200x200" alt="Administración de Usuarios">
                    <h3>Administración de Usuarios</h3>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="option">
                    <img src="https://via.placeholder.com/200x200" alt="Administración de Usuarios">
                    <h3>Administración de Usuarios</h3>
                </a>
            </div>
        </div>

@stop

////////////////////////////////////////////


@extends('plantilla')

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jefe de Empresa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .nav-link {
            color: #000;
            font-weight: bold;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .option {
            margin: 20px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease-in-out;
        }
        .option:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Macuin Dashboart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <div class="ml-auto">
                <button class="btn btn-danger">Cerrar sesión</button>
              </div>
    </nav>

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
          <div class="col-lg-9 p-5">
            <h1>Home</h1>
            <hr>
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" alt="Administración de Usuarios">
                  <div class="card-body">
                    <h5 class="card-title">Administración de Usuarios</h5>
                    <p class="card-text">Gestión de usuarios y permisos de acceso en la plataforma.</p>
                    <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img class="card-img-top" src="https://us.123rf.com/450wm/vectorplus/vectorplus1512/vectorplus151200749/49766243-icono-de-lista-de-verificaci%C3%B3n-sobre-fondo-verde-ilustraci%C3%B3n-vectorial.jpg?ver=6" alt="Registro de Departamento">
                  <div class="card-body">
                    <h5 class="card-title">Registro de Departamento</h5>
                    <p class="card-text">Permite agregar, editar y eliminar departamentos en la empresa.</p>
                    <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img class="card-img-top" src="https://img.freepik.com/vector-premium/trabajador-oficina-tomando-carpeta-archivo-administracion-gestion-gestion-archivos-icono-base-datos-catalogo-documentos-diseno-plano-ilustracion-vectorial-aislado-sobre-fondo-blanco_153097-1171.jpg?w=2000" alt="Administración de Tickets">
                  <div class="card-body">
                    <h5 class="card-title">Administración de Tickets</h5>
                    <p class="card-text">Permite asignar tickets a los miembros del equipo, hacer seguimiento y dar solución a los problemas.</p>
                    <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      