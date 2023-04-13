<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Macuin Dashboard</title>
</head>
<body >
    <style>
    body{
        background-color: darkslategray;
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
    color: rgb(7, 7, 7);
}

.sidebar strong{
    color: rgb(187, 99, 99);
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
    background: #5b7f86;
    background: #910707;
}

.sidebar ion-icon{
    padding-right: 10px;
}

.botonaso{
    margin-top: 340px;
}

button{
    border: 0;
    background-image: linear-gradient(
        150deg,
        #9500ff,
        #09f,
        #00DDFF
    );
    border-radius: 8px;
    color: #fff;
    display: flex;
    font-size: 18px;
    padding: 4px;
    cursor: pointer;
    transition: .3s;
}

button span{
    background-color: rgb(36, 34, 34);
    padding: 16px 24px;
    border-radius: 6px;
    transition: .3s;
}

button:hover span{
    background: none;
}

button:active{
    transform: scale(0.9);
}

img{
    height: 150px;
    width: 150px;
    border-radius: cover;
    background: #dfdfdf;
}
    </style>

<div class="sidebar">
    <h3 class="mt-3 mb-4"><strong>Macuin<br/></strong>Dashboards</h3>
    <img src="{{ Auth::user()->url }}" style="margin-left: 9%">
 <br>
    <h4>{{ Auth::user()->name }}</h4>

    <h5 class="mt-2">{{ Auth::user()->TipoUsu }}</h5>

    <h5 class="mt-2">{{ Auth::user()->email }}</h5>

    <br>
    <a href="" data-bs-toggle="modal" data-bs-target="#ModalPerfilCliente"><i class="bi bi-person-fill-gear"> <strong>Editar Perfil</strong> </i></a>
    <br> 
    <a href="{{route('Cierra.Sesion')}}"><i class="bi bi-box-arrow-left"><strong> Cerrar Sesion</strong></i></a>
    


    </div>

</div>


@yield('contenido')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>