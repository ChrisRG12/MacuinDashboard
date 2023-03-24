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
    <link rel="shortcut icon" href="\ima\Mac.png" type="image/x-icon">
</head>
<body >
    <style>
    body{
        background-color: darkslategray;
    }
    .auxiliares {
    padding: 1rem;
}

.auxiliares-container{
    display: grid;
    grid-template-columns: repeat(4, 16rem);
    align-items: flex-start;
    justify-content: center;
    padding: .4rem 0;
}

.auxiliares-card{
    position: relative;
    text-align: center;
    width: 94%;
    height: 17.5rem;
    margin: 0 0 2.5vh 1.5vh;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    background-color: #ffffff;
    border-radius: 1px;
    transition: all 0.3s ease;
    border-radius: 5px;
}

.btn_buscar{
    border: none;
    background-color: #FFFFFF;
}
.btn_buscar i{
    font-size: .9rem;
}
.auxiliares-name{
    height: 10%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size:.9rem;
}

.auxiliares-data{
    height: 30%;
    color: #9f9f9f;
    font-size:.9rem;
}

.auxiliares .img-container{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 35%;
}

.auxiliares img{
    border-radius: 100%;
    width: 40%;
    height: 95%;
    overflow: hidden;
    object-fit: cover;
}

.auxiliares-bar{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 8%;
    font-weight: 600;
    color: #00a2ff;
}

    </style>
     <section class="auxiliares">

    <div class="auxiliares-container">
        @foreach ($ConsultaUsuario as $consul)
            <div class="auxiliares-card">
                <div class="img-container">
                    <img src="{{ $consul->url }}" alt="FotodePerfil">
                </div>
                <div class="auxiliares-name">
                    <p>{{ $consul->name }}</p>
                </div>
                <div class="auxiliares-data">
                    <p>ID: {{ $consul->id }}</p>
                    <p>{{ $consul->email }}</p>
                    <p>Tel: </p>
                    <p>--------------------</p>
                </div>
                <div class="auxiliares-bar">
                    <p class="">60 %</p>
                </div>
                <div class="auxiliares-btns">
                         <a onclick="#" title="Editar" class="btn-edit"><i
                            class="fa-solid fa-pen"></i></a>
                    <a onclick="#" title="Eliminar" class="btn-delete"><i
                            class="fa-solid fa-trash-can"></i></a>
                </div>
            </div>


        @endforeach
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>