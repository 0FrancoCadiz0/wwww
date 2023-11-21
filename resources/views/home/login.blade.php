<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Mundo Libro</title>

</head>

<body style="background-image: /images/fondo.jpg">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" style="margin-left: 1rem">MundoLibros</a>
    </nav>
    <!-- datos -->
    <br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Inicio de Sesión</div>
                        <div class="card-body">
                            <form method="POST"  action="{{route('usuarios.login')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3 text-end">
                                    {{--<a href="{{route('home.index')}}" class="btn btn-success">Iniciar Sesión</a>--}}
                                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                </div>
                                {{--validaciones--}}
                                @if($errors->any())
                                    <div class="alert alert-warning mt-2">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{--/validaciones--}}
                            </form>

                        </div>
                </div>
                <div class="container">
                    <div class="welcome-box">
                        <h2 class="text-center">¡Bienvenido a Mundo Libro!</h2>
                        <p>Gracias por visitar nuestra página dedicada a los amantes de la lectura. En nuestra librería, te ofrecemos una cuidadosa selección de libros que abarcan diversos géneros y temas, desde clásicos atemporales hasta las últimas novedades.</p>
                        <p>Siéntete libre de explorar nuestro catálogo y sumergirte en las historias cautivadoras que cada libro tiene para ofrecer. </p>
                        <p>¡Esperamos que disfrutes tu tiempo en nuestra librería virtual!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Crea tu Cuenta</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('newUser.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                            <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" class="form-control" id="rut" name="rut" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="fono" class="form-label">Número de Celular</label>
                                <input type="text" class="form-control" id="fono" name="fono" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>




</html>