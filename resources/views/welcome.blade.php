<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="{{route('produto.show')}}">Home</a></li>
                    <li><a href="">Sobre nós</a></li>
                    <li><a href="">Contato</a></li>
                    <li>Pintobola</li>
                </ul>
            </nav>
        </header>
    </body>
</html>
