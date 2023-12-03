@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-lg-6">
                    <div class="card-header"><h4 align="center">Editar Usuarios</h4></div>
                    <form method="POST" action="{{route('usuario.update',$usuario->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <h2>Perfil</h2>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$usuario->nom_cliente}}">
                                </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{$usuario->apellido_cliente}}">
                            </div>
                            <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" class="form-control" id="rut" name="rut" value="{{$usuario->rut}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="fono" class="form-label">Fono</label>
                                <input type="tel" class="form-control" id="fono" name="fono" value="{{$usuario->fono}}">
                            </div>
                            <h2>Direccion</h2>
                            <div class="mb-3">
                                <label for="postal" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" id="postal" name="postal" value="{{$usuario->postal}}">
                            </div>
                            <div class="mb-3">
                                <label for="region" class="form-label">Región</label>
                                <input type="text" class="form-control" id="region" name="region" value="{{$usuario->region}}">
                            </div>
                            <div class="mb-3">
                                <label for="comuna" class="form-label">Comuna</label>
                                <input type="text" class="form-control" id="comuna" name="comuna" value="{{$usuario->comuna}}">
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$usuario->ciudad}}">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{$usuario->direccion}}">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection