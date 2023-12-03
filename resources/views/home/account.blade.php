@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Lado Izquierdo: Foto y Opciones -->
        <div class="col-md-3">
            <!-- Contenedor Circular para la Foto del Usuario -->
            <div class="text-center mb-3">
                <!-- Si hay imagen, mostrarla en un círculo; de lo contrario, mostrar la imagen por defecto -->
                @if ($usuario->imagen)
                <img src="{{ asset('storage/images/' . basename($usuario->imagen)) }}" alt="Foto de Usuario" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                @else
                    <img src="{{ asset('images/defectoimg.png') }}" alt="Imagen por Defecto" class="img-fluid rounded-circle" style="width: 150px;">
                @endif
            </div>

            <!-- Opciones del Usuario -->
            <div class="list-group">
                <h3 class="list-group-item list-group">{{ Auth::user()->nom_cliente}} {{ Auth::user()->apellido_cliente}}</h3>
                <a href="#" class="list-group-item list-group-item-action active" onclick="mostrarContenido('perfil')">Perfil</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="mostrarContenido('envios')">Envíos</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="mostrarContenido('historial')">Historial</a>
            </div>
        </div>

        <!-- Lado Derecho: Contenido Dinámico -->
        <div class="col-md-9">
            <!-- Card para el Texto del Contenido -->
            <div class="card contenido-panel">
                <div class="card-body">
                    <!-- Contenido del Perfil (Inicialmente Visible) -->
                    <div id="perfilContenido">
                        <h2>Perfil del Usuario</h2>
                        <!-- Contenido del Perfil aquí -->
                        <form method="POST" action="{{route('usuario.update',$usuario->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{ Auth::user()->nom_cliente}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="{{ Auth::user()->apellido_cliente}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" class="form-control" id="rut" name="rut" placeholder="{{ Auth::user()->rut}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="{{ Auth::user()->email}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="fono" class="form-label">Fono</label>
                                <input type="tel" class="form-control" id="fono" name="fono" placeholder="{{ Auth::user()->fono}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" disabled>
                                <small class="form-text text-muted">Formato permitido (jpg, jpeg, png).</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Botón "Editar" a la izquierda -->
                                <button type="button" class="btn btn-primary" onclick="habilitarEdicion()">Editar</button>
                                <button type="button" class="btn btn-primary" onclick="deshabilitarEdicion()">Cancelar</button>
                                <!-- Botón "Guardar" a la derecha -->
                                <button type="submit" class="btn btn-primary" id="Guardar1">Guardar</button>
                            </div>
                        </form>
                        <br>
                        <h2>Direccion</h2>
                        <form method="POST" action="{{route('usuario.update2',$usuario->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                    
                            <!-- Nuevos Campos para la Dirección -->
                            <div class="mb-3">
                                <label for="postal" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" id="postal" name="postal" placeholder="{{ Auth::user()->postal}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="region" class="form-label">Región</label>
                                <input type="text" class="form-control" id="region" name="region" placeholder="{{ Auth::user()->region}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="comuna" class="form-label">Comuna</label>
                                <input type="text" class="form-control" id="comuna" name="comuna" placeholder="{{ Auth::user()->comuna}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="{{ Auth::user()->ciudad}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="{{ Auth::user()->direccion}}" disabled>
                            </div>
                    
                            <!-- Botones -->
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Botón "Editar" a la izquierda -->
                                <button type="button" class="btn btn-primary" onclick="habilitarEdicion2()">Editar</button>
                                <button type="button" class="btn btn-primary" onclick="deshabilitarEdicion2()">Cancelar</button>
                                <!-- Botón "Guardar" a la derecha -->
                                <button type="submit" class="btn btn-primary" id="2">Guardar</button>
                            </div>
                        </form>
                    </div>

                    <!-- Contenido de Envíos (Inicialmente Oculto) -->
                    <div id="enviosContenido" style="display: none;">
                        <h2>Envíos del Usuario</h2>
                        <!-- Contenido de Envíos aquí -->
                    </div>

                    <!-- Contenido de Historial (Inicialmente Oculto) -->
                    <div id="historialContenido" style="display: none;">
                        <h2>Historial del Usuario</h2>
                        <!-- Contenido de Historial aquí -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
