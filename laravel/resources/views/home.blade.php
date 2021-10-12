<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contacto</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
        </ul>
    </nav>

    <h1>Bienvenido</h1>

    Hola {{ $nombre ?? 'Invitado'}}
</body>
</html>