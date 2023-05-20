<main>
    <section class="sectionPerfil">
        <h1>Mi cuenta</h1>
        <div>
            <label class="labelPerfil" for="usuario">Nombre de Usuario:</label>
            <input type="text" name="usuario" id="usuario" value="<?= $_SESSION["user"] ?>" disabled>
            <input type="button" name="botonusuario" id="botonusuario" value="Cambiar" onclick="modificarDatos('usuario')">
        </div>
        <div>
            <label class="labelPerfil" for="usuario">Correo electronico:</label>
            <input type="text" name="email" id="email" value="<?= $dataToView->getEmail() ?>" disabled>
            <input type="button" name="botonemail" id="botonemail" value="Cambiar" onclick="modificarDatos('email')">
        </div>
        <div>
            <label class="labelPerfil" for="usuario">Nombre personal:</label>
            <input type="text" name="nombre" id="nombre" value="<?= $dataToView->getNombre() ?>" disabled>
            <input type="button" name="botonnombre" id="botonnombre" value="Cambiar" onclick="modificarDatos('nombre')">
        </div>
        <div>
            <label class="labelPerfil" for="usuario">apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" value="<?= $dataToView->getApellidos() ?>" disabled>
            <input type="button" name="botonApellidos" id="botonapellidos" value="Cambiar" onclick="modificarDatos('apellidos')">
        </div>
        <div>
            <label class="labelPerfil" for="usuario">Contraseña:</label>
            <input type="password" placeholder="Contraseña (1-12, una mayuscula, un numero)" id="contrasena" name="contrasena" required>
            <input type="password" placeholder="repite la contraseña" id="repetir" name="repetir" onchange="comprobarContrasena()" required>
            <label id="coincidencia"></label>
            <input type="button" name="botonContrasena" id="botonContrasena" value="Cambiar" onclick="modificarDatos('contrasena')" disabled>
        </div>

        <a href="index.php?action=deslogear"><input type="submit" value="deslogear"></a>

    </section>
    <script>
        function comprobarContrasena() {
            var contrasena = document.getElementById("contrasena").value;
            var contrasenaRepetir = document.getElementById("repetir").value;
            if (contrasena != contrasenaRepetir) {
                document.getElementById("coincidencia").innerText = "Las contraseñas no coinciden";
                document.getElementById('botonContrasena').disabled = true;
            } else {
                document.getElementById("coincidencia").innerText = "";
                document.getElementById('botonContrasena').disabled = false;
            }
        }

        function modificarDatos(id) {
            document.getElementById(id).disabled = false;
            document.getElementById("boton" + id).value = "guardar";
            document.getElementById("boton" + id).setAttribute("onclick", "guardarDatos('" + id + "')");
        }

        function guardarDatos(id) {
            data = document.getElementById(id).value;
            document.getElementById(id).disabled = true;
            document.getElementById("boton" + id).value = "Cambiar";
            document.getElementById("boton" + id).setAttribute("onclick", "modificarDatos('" + id + "')");
            const xhttp = new XMLHttpRequest();

            xhttp.onload = function() {

            }
            xhttp.open("GET", "./view/ajax/cambiarDatos.php?datos=" + data + "&parte=" + id);
            xhttp.send();
        }
    </script>
</main>