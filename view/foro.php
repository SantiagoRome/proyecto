<main class="mainForo">
    <h1>
        <?= $dataToView->getNombre() ?>
    </h1>
    <?php
    if ($dataToView->getNombre() == "Normas") {
        if ($_SESSION['user'] == "Administrador") {
            echo "hola?";
    ?>
            <article class="nuevoMensaje">
                <textarea placeholder="añade un comentario..." name="mensaje" id="mensaje"></textarea>
                <input type="button" value="Enviar" onclick="crearMensaje()">
            </article>
        <?php
        }
    } else if (isset($_SESSION['user'])) {
        ?>
        <article class="nuevoMensaje">
            <textarea placeholder="añade un comentario..." name="mensaje" id="mensaje"></textarea>
            <input type="button" value="Enviar" onclick="crearMensaje()">
        </article>
        <?php
    }
    $mensajes = $dataToView->getMensajes();
    if ($mensajes != null) {
        //función para llamar de forma recursiva e ir creando los mensajes del foro
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
                        //compruebo si tiene contestaciones
                        if (!empty($mensajes[$i]->getMensajes())) {
                        ?>
                            <p value="respuestas" onclick="verRespuestas('<?php echo $mensajes[$i]->getId() ?>')">Ver respuestas<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></p>
                            <?php
                        }
                        //compruebo si es el usuario administrador o el usuario que escribio el mensaje y le doy permiso de borrar
                        if (isset($_SESSION["user"])) {
                            if ($mensajes[$i]->getCreador() == $_SESSION["user"] || $_SESSION["user"] == "Administrador") {
                            ?>
                                <input class="botonCerrar" type="button" onclick="borrar('<?= $mensajes[$i]->getId() ?>')" value="Borrar">
                            <?php
                            }
                        }
                        //compruebo si el mensaje no es de un administrador para permitir contestaciones
                        if ($mensajes[$i]->getCreador() != "Administrador") {
                            if (isset($_SESSION["user"])) {
                            ?>
                                <input type="button" onclick="contestar('<?= $mensajes[$i]->getId() ?>')" value="Contestar">
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="contestaciones oculto">
                        <?php
                        //llamada recursiva a la funcion para crear los mensajes hasta que se acaben
                        if (!empty($mensajes[$i]->getMensajes())) {
                            listarMensajes($mensajes[$i]->getMensajes());
                        } ?>
                    </div>
                </article>
    <?php
            }
        }
        listarMensajes($mensajes);
    }
    ?>
</main>
<script>
    function borrar(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            resultado = this.responseText;
            console.log(resultado);
            if (resultado == "error") {
                console.log("error");
            } else if (resultado == "correcto") {
                document.getElementById(id).remove();
            }
        }
        xhttp.open("GET", "./view/ajax/borrarMensaje.php?mensaje=" + id);
        xhttp.send();
    }

    function crearMensaje(id = null) {
        //compruebo si se ha mandado un id para hacer recoger el elemento correcto y hacer una llamada distinta al ajax
        if (id == null) {
            texto = document.getElementById("mensaje").value;
            if (texto == "") {
                return;
            }
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
            if (texto == "") {
                return;
            }
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
        //Recojo el elemento 
        articulo = document.getElementById(id);
        //recojo el ultimo elemento del articulo: el div oculto donde estan los mensajes
        div = articulo.children[articulo.children.length - 1];
        //le cambio la clase
        div.setAttribute("class", "contestaciones");
        //reojo el div de donde se encuentran los botones
        boton = articulo.children[2];
        //y recojo el primer boton, el cual es el que muestra las respuestas
        boton = boton.children[0];
        //le cambio el onclick, para que al pulsarlo oculte las respuestas
        boton.setAttribute("onclick", "ocultarRespuestas(" + id + ")");
        //y le cambio el texto y el icono de la flecha
        boton.innerHTML = "Ocultar respuestas <i class='fa-solid fa-caret-up' style='color: #ffffff;'></i>";
    }

    function ocultarRespuestas(idarticulo) {
        //esta función es similar a la anterior pero al reves, cuando cojo el div lo oculto y cambio el boton a verRespuestas
        articulo = document.getElementById(idarticulo);
        div = articulo.children[articulo.children.length - 1];
        div.setAttribute("class", "contestaciones oculto");
        boton = articulo.children[2];
        boton = boton.children[0];
        boton.setAttribute("onclick", "verRespuestas(" + idarticulo + ")");
        boton.innerHTML = "Ver respuestas <i class='fa-solid fa-caret-down' style='color: #ffffff;'></i>";



    }

    function contestar(id) {
        //recojo el articulo 
        articulo = document.getElementById(id);
        //compruebo si ya existe un input para contestar, y si existe salgo de la función
        if (articulo.children.length > 4) {
            return;
        }
        //creo los elementos dentro del articulo similar al creado en html.
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
        //introduzco todos los elementos uno por uno en el articulo, primero el div y luego el resto dentro del div.
        articulo.insertBefore(div, articulo.children[articulo.children.length - 1]);
        div.appendChild(textarea);
        div.appendChild(botonCancelar);
        div.appendChild(boton);
    }

    function cancelarMensaje(id) {
        //recojo el articulo
        articulo = document.getElementById(id);
        //borro div de contestar mensaje
        div = articulo.children[articulo.children.length - 2];
        articulo.removeChild(div);
    }
</script>