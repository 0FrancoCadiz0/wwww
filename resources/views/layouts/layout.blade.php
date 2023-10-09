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
    <div class="container-fluid bg-navbar text-white py-2">
        <div class="row">
            <div class="col-md-8 col-12">
                <p class="fs-5 m-0">Bienvenido <span class="fw-bold">{{ Auth::user()->nom_cliente}} {{ Auth::user()->apellido_cliente}}</span></p>
            </div>
            <div class="col-md-4 col-12 text-end">
                <a href="{{ route('usuarios.logout') }}" class="btn btn-danger btn-sm">Cerrar Sesión</a>
            </div>
        </div>
    </div>
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
                        <a class="nav-link" href="{{ route('control.panelUser') }}">Mantenedor usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mantenedor Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mantenedor Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mantenedor Editoriales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mantenedor Genero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mantenedor Idioma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mantenedor Clasificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pedidos por Enviar</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cuenta</a>
                    </li>           
                    <li class="nav-item ml-auto"> 
                        <a class="nav-link" href="#" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg> 
                        </a>
                    </li>                             
                @endif
            </ul>
        </div>
    </nav>

    <div class="container fondo-galeria">
        @yield('content')
    </div>

    <!-- Bootstrap 5 requiere jQuery, Popper.js ya no es necesario -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>