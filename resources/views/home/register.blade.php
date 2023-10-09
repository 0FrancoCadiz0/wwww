@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
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
@endsection   