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