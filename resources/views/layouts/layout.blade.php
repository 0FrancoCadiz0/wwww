<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Mundo Libro</title>
</head>
<body>
    <!-- Barra de navegación de Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" style="margin-left: 1rem">MundoLibros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @if(Gate::allows('usuarios-listar'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('control.panelUser') }}">Gestionar usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gestionar Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('control.autor-editorial') }}">Gestionar Tablas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gestionar Pedidos</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.home') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.login') }}">Login/Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.quienes') }}">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.contacto') }}">Contáctanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.account') }}">Cuenta</a>
                        </li>           
                        <li class="nav-item"> 
                            <a class="nav-link" href="#" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg> 
                            </a>
                        </li>  
                    @endif
                </ul>
        </div>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-lg" href="{{ route('usuarios.logout') }}" style="margin-right: 10px;">
                    Cerrar Sesión
                </a>
            </li>
        </ul>
    </nav>

    <div class="container fondo-galeria">
        @yield('content')
    </div>

    <!-- Bootstrap 5 requiere jQuery, Popper.js ya no es necesario -->
    <script src="{{ asset('JS/js.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>