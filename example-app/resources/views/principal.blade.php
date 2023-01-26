<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
</head>
<body>
    <h1>Bienvenidos a Laravel, DAW</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est inventore, nam quisquam eaque id reprehenderit, dignissimos vitae magni vero aspernatur perspiciatis sunt fuga deleniti labore neque consectetur earum recusandae voluptate.</p>
    <nav>
        <a href="{{url('principal.blade.php')}}">Principal</a>
        <a href="{{url('/nosotros')}}">Nosotros</a>
        <a href="{{url('proyecto.blade.php')}}">Proyecto</a>
    </nav>
    @yield('nosotros')
</body>
</html>