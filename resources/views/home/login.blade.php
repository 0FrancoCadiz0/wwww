<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Sistema de Campeonato de Fútbol</title>

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
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>




</html>