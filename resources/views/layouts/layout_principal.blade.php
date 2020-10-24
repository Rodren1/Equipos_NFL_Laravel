<html>

<head>
    <title>@yield('titulo')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fuente.css') }}" rel="stylesheet">
</head>

<body>
    @section('navbar')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
            <a class="navbar-brand logo" href="{{ url('/') }}"><img src="{{ asset('img/logoNFL.png')}}" alt="" width="90" height="90"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <h3><b>|<br>|<br>|</b></h3>
                    <a class="nav-link active" href="{{ url('equiposNFL') }}">
                        <h3 class="fuenteNavbar"><b>Equipos NFL</b></h3>
                    </a>
                    <h3><b>|<br>|<br>|</b></h3>
                    <a class="nav-link active" href="{{ url('equiposAFC') }}">
                        <h3 class="fuenteNavbar"><b>División American Football Conference</b></h3>
                    </a>
                    <h3><b>|<br>|<br>|</b></h3>
                    <a class="nav-link active" href="{{ url('equiposNFC') }}">
                        <h3 class="fuenteNavbar"><b>División National Football Conference</b></h3>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    @show
    @section('infoPrincipal')
    @show
    @section('cartas')
    @show
</body>

</html>