@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artur</title>
</head>
<body>
    <h1> {{Auth::user()->TipoUsu}}, {{Auth::user()->name}} </h1>
    <a href="{{route('Cierra.Sesion')}}">cerrar sesion</a>
</body>
</html>





@endauth