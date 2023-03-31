<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Macuin Dashboard</title>
</head>
<body>
<style>
    body{
        background: darkslategray;
    }
    
.sidebar{
    position:  fixed;
    width: 280px;
    height: 100%;
    padding-top: 20px;
    left: 0;
    background-color: #f0bf92;
}

.sidebar h3{
    margin-left: 20px;
    font-size: 35px;
    color: white;
}

.sidebar strong{
    color: black;
}

.sidebar h4{
    margin-left: 20px;
    font-size: 25px;
    color: black;
}

.sidebar h5{
    margin-left: 20px;
    font-size: 15px;
    color: black;

}

.sidebar a{
    color: black;
    display: block;
    width: 100%;
    line-height: 60px;
    text-decoration: none;
    padding-left: 40px;
    box-sizing: border-box;
    transition: 0.5s;
    transition-property:background;
}

.sidebar a:hover{
    background: #2f4f4f;
}

.sidebar ion-icon{
    padding-right: 10px;
}

.botonaso{
    margin-top: 340px;
}
</style>

<div class="sidebar">
    <h3 class="mt-3 mb-4"><strong>Macuin<br/></strong>Dashboards</h3>

    <img src="{{ Auth::user()->url }}"  width="200" height="150" style="margin-left: 9%">
<br> 
    <h4>{{ Auth::user()->name }}</h4>

    <h5 class="mt-2">Tipo de usuario: {{ Auth::user()->TipoUsu }}</h5>

    <h5 class="mt-2"> Correo: {{ Auth::user()->email }}</h5>
   

    <br>
    <a href="{{route('Usuario.index')}}"><i class="bi bi-people-fill"><strong> Administración Usuarios</strong></i></a>

    <a href="{{route('depa.index')}}"><i class="bi bi-building-add"><strong> Registro Departamentos</strong></i></a>

    <a href="{{route('ticket.index')}}"><i class="bi bi-ticket"><strong> Administración Tickets</strong></i></a>

    <a href="" data-bs-toggle="modal" data-bs-target="#ModalPerfilJef"><i class="bi bi-person-fill-gear"> <strong> Editar Perfil </strong></i></a>
    
    <a href="{{route('Cierra.Sesion')}}"><i class="bi bi-box-arrow-left"><strong> Cerrar Sesion</strong></i></a>
    

                <div class="tablita overflow-auto" style="max-height: 230px; overflow-y: scroll;">

                </div>
            </div>


@yield('contenido')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>