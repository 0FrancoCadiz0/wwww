    function mostrarContenido(opcion) {
        // Ocultar todos los contenidos
        document.getElementById('perfilContenido').style.display = 'none';
        document.getElementById('enviosContenido').style.display = 'none';
        document.getElementById('historialContenido').style.display = 'none';

        // Mostrar el contenido seleccionado
        document.getElementById(opcion + 'Contenido').style.display = 'block';
    }

    function habilitarEdicion() {
        // Obtener los elementos de los campos y botones
        const nombreInput = document.getElementById('nombre');
        const apellidoInput = document.getElementById('apellido');
        const rutInput = document.getElementById('rut');
        const emailInput = document.getElementById('email');
        const fonoInput = document.getElementById('fono');
        const imagenInput = document.getElementById('imagen');
        const guardarBtn = document.querySelector('button[id="Guardar1"]');
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
        const guardarBtn = document.querySelector('button[id="Guardar1"]');
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

    function habilitarEdicion2() {
        // Obtener los elementos de los campos y botones
        const postalInput = document.getElementById('postal');
        const regionInput = document.getElementById('region');
        const comunaInput = document.getElementById('comuna');
        const ciudadInput = document.getElementById('ciudad');
        const direccionInput = document.getElementById('direccion');
        const guardarBtn2 = document.querySelector('button[id="2"]');
        const cancelarBtn2 = document.querySelector('button[onclick="deshabilitarEdicion2()"]');

        // Función para copiar el valor del placeholder al campo
        function copiarPlaceholder(input) {
            input.value = input.placeholder;
        }

        // Habilitar todos los campos al hacer clic en el botón "Editar"
        postalInput.disabled = false;
        regionInput.disabled = false;
        comunaInput.disabled = false;
        ciudadInput.disabled = false;
        direccionInput.disabled = false;

        // Copiar el valor del placeholder al campo
        copiarPlaceholder(postalInput);
        copiarPlaceholder(regionInput);
        copiarPlaceholder(comunaInput);
        copiarPlaceholder(ciudadInput);
        copiarPlaceholder(direccionInput);

        // Mostrar el botón "Guardar"
        guardarBtn2.style.display = 'block';
        cancelarBtn2.style.display = 'block';
    }

    function deshabilitarEdicion2() {
        // Obtener los elementos de los campos y botones
        const postalInput = document.getElementById('postal');
        const regionInput = document.getElementById('region');
        const comunaInput = document.getElementById('comuna');
        const ciudadInput = document.getElementById('ciudad');
        const direccionInput = document.getElementById('direccion');
        const guardarBtn2 = document.querySelector('button[id="2"]');
        const cancelarBtn2 = document.querySelector('button[onclick="deshabilitarEdicion2()"]');


        // Deshabilitar la edición de todos los campos
        postalInput.disabled = true;
        regionInput.disabled = true;
        comunaInput.disabled = true;
        ciudadInput.disabled = true;
        direccionInput.disabled = true;

        // Ocultar el botón "Guardar"
        guardarBtn2.style.display = 'none';
        cancelarBtn2.style.display = 'none';
    }
