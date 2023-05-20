<main>
    <?php
    if (isset($_SESSION['user'])) {
    ?>
        <article class="nuevoForo">
            <textarea placeholder="añade un comentario..." name="mensaje" id="mensaje"></textarea>
            <input type="button" value="Enviar" onclick="crearForo()">
        </article>
    <?php
    }
    for ($i = 0; $i < count($dataToView); $i++) {
    ?>
        <article class="articuloForos">
            <h1><a href="index.php?action=verForo&id=<?= $dataToView[$i]->getId() ?>"><?= $dataToView[$i]->getNombre() ?></a></h1>
            <div>
                <p><?= $dataToView[$i]->getCreador() ?></p>
                <?php
                if (isset($_SESSION["user"])) {
                    if ($dataToView[$i]->getCreador() == $_SESSION["user"] || $_SESSION["user"] == "Administrador") {
                ?>
                        <input class="botonCerrar" type="button" onclick="borrar('<?= $dataToView[$i]->getId() ?>')" value="Borrar">
                <?php
                    }
                }
                ?>
            </div>
        </article>
    <?php
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
                location.reload();
            }
        }
        xhttp.open("GET", "./view/ajax/borrarForo.php?foro=" + id);
        xhttp.send();
    }

    function crearForo() {
        texto = document.getElementById("mensaje").value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            resultado = this.responseText;
            if (resultado == "correcto") {
                location.reload();
            }
        }
        xhttp.open("GET", "./view/ajax/crearForo.php?mensaje=" + texto);
        xhttp.send();
    }
</script>