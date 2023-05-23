<main class="mainForo">
    <h1>
        <?= $dataToView->getNombre() ?>
    </h1>
    <article class="nuevoMensaje">
        <textarea placeholder="añade un comentario..." name="mensaje" id="mensaje"></textarea>
        <input type="button" value="Enviar" onclick="crearMensaje()">
    </article>
    <?php
    $mensajes = $dataToView->getMensajes();
    listarMensajes($mensajes);
    function listarMensajes($mensajes)
    {
        for ($i = 0; $i < count($mensajes); $i++) {
    ?>
            <article class="articleForo" id="<?= $mensajes[$i]->getId() ?>">
                <div class="tituloArticulo">
                    <h2><?= $mensajes[$i]->getCreador() ?></h2>
                    <h3><?= $mensajes[$i]->getFecha() ?></h3>
                </div>
                <p class="textoMensaje">
                    <?= $mensajes[$i]->getTexto() ?>
                </p>
                <div class="botones">
                    <?php
                    if (!empty($mensajes[$i]->getMensajes())) {
                    ?>
                        <p value="respuestas" onclick="verRespuestas('<?php echo $mensajes[$i]->getId() ?>')">Ver respuestas<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></p>
                        <?php
                    }
                    if (isset($_SESSION["user"])) {
                        if ($mensajes[$i]->getCreador() == $_SESSION["user"] || $_SESSION["user"] == "Administrador") {
                        ?>
                            <input class="botonCerrar" type="button" onclick="borrar('<?= $mensajes[$i]->getId() ?>')" value="Borrar">
                        <?php
                        }
                    }
                    if (isset($_SESSION["user"])) {
                        ?>
                        <input type="button" onclick="contestar('<?= $mensajes[$i]->getId() ?>')" value="Contestar">
                    <?php
                    }
                    ?>
                </div>
                <div class="contestaciones oculto">
                    <?php
                    if (!empty($mensajes[$i]->getMensajes())) {
                        listarMensajes($mensajes[$i]->getMensajes());
                    } ?>
                </div>
            </article>
    <?php
        }
    }

    ?>
</main>
<script>
    function borrar(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            resultado = this.responseText;
            if (resultado == "error") {
                console.log("error");
            } else if (resultado == "correcto") {
                location.reload();
            }
        }
        xhttp.open("GET", "./view/ajax/borrarMensaje.php?mensaje=" + id);
        xhttp.send();
    }

    function crearMensaje(id = null) {
        if (id == null) {
            texto = document.getElementById("mensaje").value;
            foro = <?= $_GET['id'] ?>;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                resultado = this.responseText;
                if (resultado == "correcto") {
                    location.reload();
                }
            }
            xhttp.open("GET", "./view/ajax/crearMensaje.php?mensaje=" + texto + "&foro=" + foro);
            xhttp.send();
        } else {
            texto = document.getElementById("mensaje" + id).value;
            foro = <?= $_GET['id'] ?>;

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                resultado = this.responseText;
                console.log(resultado);
                if (resultado == "correcto") {
                    location.reload();
                }
            }
            xhttp.open("GET", "./view/ajax/crearMensaje.php?mensaje=" + texto + "&foro=" + foro + "&id=" + id);
            xhttp.send();
        }
    }

    function verRespuestas(id) {
        articulo = document.getElementById(id);
        div = articulo.children[articulo.children.length - 1];
        div.setAttribute("class", "contestaciones");
        boton = articulo.children;
        boton = boton[2];
        boton = boton.children;
        boton = boton[0];
        boton.setAttribute("onclick", "ocultarRespuestas(" + id + ")");
        boton.innerHTML = "Ocultar respuestas <i class='fa-solid fa-caret-up' style='color: #ffffff;'></i>";
    }

    function ocultarRespuestas(idarticulo) {
        articulo = document.getElementById(idarticulo);
        div = articulo.children[articulo.children.length - 1];
        div.setAttribute("class", "contestaciones oculto");
        boton = articulo.children;
        boton = boton[2];
        boton = boton.children;
        boton = boton[0];
        boton.setAttribute("onclick", "verRespuestas(" + idarticulo + ")");
        boton.innerHTML = "Ver respuestas <i class='fa-solid fa-caret-down' style='color: #ffffff;'></i>";



    }

    function contestar(id) {
        articulo = document.getElementById(id);

        textarea = document.createElement("textarea");

        div = document.createElement("div");
        div.setAttribute("class", "contestacion");

        textarea.setAttribute("name", "mensaje");
        textarea.setAttribute("id", "mensaje" + id);
        textarea.setAttribute("Placeholder", "añade un comentario...");
        boton = document.createElement("input");
        boton.setAttribute("type", "button");
        boton.setAttribute("value", "enviar");
        boton.setAttribute("onclick", "crearMensaje(" + id + ")");

        botonCancelar = document.createElement("input");
        botonCancelar.setAttribute("type", "button");
        botonCancelar.setAttribute("value", "cancelar");
        botonCancelar.setAttribute("onclick", "cancelarMensaje(" + id + ")");
        articulo.insertBefore(div, articulo.children[articulo.children.length - 1]);
        div.appendChild(textarea);
        div.appendChild(botonCancelar);
        div.appendChild(boton);
    }

    function cancelarMensaje(id) {
        articulo = document.getElementById(id);
        div = articulo.children[articulo.children.length - 2];
        articulo.removeChild(div);
    }
</script>