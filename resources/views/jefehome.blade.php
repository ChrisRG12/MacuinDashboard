@extends('plantilla')

@section('contenido')
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled">Disabled</a>
            </div>
        </div>
        </div>
    </nav>
    
    <h1 class="text-center mt-4" style="color: floralwhite"> Home</h1>
    <div class="container mb-3 mt-4 col-md-3">


        <div class="card text-center">

            <div class="card-header">
            Jefe de Soporte
            </div>

            <div class="card-body">
                
                <div class="mb-3">
                    <button type="button" class="btn btn-primary">Administración de Usuarios</button>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-success">Registro de Departamento</button>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-warning">Administración de Tickets</button>
                </div>

            </div>

        </div>

    </div>
</body>

@stop