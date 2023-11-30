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
                    <dd></dd>
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
                                <button type="submit" class="btn btn-primary">Guardar</button>
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

<script>
    function mostrarContenido(opcion) {
        // Ocultar todos los contenidos
        document.getElementById('perfilContenido').style.display = 'none';
        document.getElementById('enviosContenido').style.display = 'none';
        document.getElementById('historialContenido').style.display = 'none';

        // Mostrar el contenido seleccionado
        document.getElementById(opcion + 'Contenido').style.display = 'block';
    }

    document.addEventListener('DOMContentLoaded', function() {
    // Ocultar el botón "Guardar" al cargar la página
    const guardarBtn = document.querySelector('button[type="submit"]');
    guardarBtn.style.display = 'none';
    const cancelarBtn = document.querySelector('button[onclick="deshabilitarEdicion()"]');
    cancelarBtn.style.display = 'none';
    });

    function habilitarEdicion() {
        // Obtener los elementos de los campos y botones
        const nombreInput = document.getElementById('nombre');
        const apellidoInput = document.getElementById('apellido');
        const rutInput = document.getElementById('rut');
        const emailInput = document.getElementById('email');
        const fonoInput = document.getElementById('fono');
        const imagenInput = document.getElementById('imagen');
        const guardarBtn = document.querySelector('button[type="submit"]');
        const cancelarBtn = document.querySelector('button[onclick="deshabilitarEdicion()"]');

        // Función para copiar el valor del placeholder al campo
        function copiarPlaceholder(input) {
            input.value = input.placeholder;
        }

        // Habilitar todos los campos al hacer clic en el botón "Editar"
        nombreInput.disabled = false;
        apellidoInput.disabled = false;
        rutInput.disabled = false;
        emailInput.disabled = false;
        fonoInput.disabled = false;
        imagenInput.disabled = false;

        // Copiar el valor del placeholder al campo
        copiarPlaceholder(nombreInput);
        copiarPlaceholder(apellidoInput);
        copiarPlaceholder(rutInput);
        copiarPlaceholder(emailInput);
        copiarPlaceholder(fonoInput);

        // Mostrar el botón "Guardar"
        guardarBtn.style.display = 'block';
        cancelarBtn.style.display = 'block';
    }

    function deshabilitarEdicion() {
        // Obtener los elementos de los campos y botones
        const nombreInput = document.getElementById('nombre');
        const apellidoInput = document.getElementById('apellido');
        const rutInput = document.getElementById('rut');
        const emailInput = document.getElementById('email');
        const fonoInput = document.getElementById('fono');
        const imagenInput = document.getElementById('imagen');
        const guardarBtn = document.querySelector('button[type="submit"]');
        const cancelarBtn = document.querySelector('button[onclick="deshabilitarEdicion()"]');


        // Deshabilitar la edición de todos los campos
        nombreInput.disabled = true;
        apellidoInput.disabled = true;
        rutInput.disabled = true;
        emailInput.disabled = true;
        fonoInput.disabled = true;
        imagenInput.disabled = true;

        // Ocultar el botón "Guardar"
        guardarBtn.style.display = 'none';
        cancelarBtn.style.display = 'none';
    }
</script>
@endsection
