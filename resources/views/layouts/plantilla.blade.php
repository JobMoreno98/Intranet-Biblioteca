<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

		<link href="{{ asset('css/jquery.flippage.css')}}" type="text/css" rel="stylesheet" />
        
    <!-- Styles -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #footer {
            margin-top: auto;
            display:block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background:#6c0010;">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('img/logobibliotecavirtual.jpg')}}" height="35" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-white" href="#">Letras mexicanas</a>
                <a class="nav-link text-white" href="#">Libros de Lenguas Indígenas</a>
                <a class="nav-link text-white" href="#">Informe Luis Curiel 1903</a>
                <a class="nav-link text-white" href="#">Congreso del Estado de Jalisco</a>
                <a class="nav-link text-white" href="#">Suprema Corte de Justicia de la Nación</a>
                <a class="nav-link text-white" href="#">Impresos Europeos</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer id="footer" class="p-3" style="background:#6c0010;">
        <div class="row" >
            <div class="col-sm-12">
                <p class="text-center text-white m-0">
                    Biblioteca Pública del Estado de Jalisco "Juan José Arreola"
                </p>
            </div>
        </div>
    </footer>

    <script type='text/javascript'>
        document.oncontextmenu = function() {
            return false
        }
    </script>
</body>

</html>