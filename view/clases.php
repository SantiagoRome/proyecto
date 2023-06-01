<main>
    <section class="sectionClases">
        <h1>
            Clases
        </h1>
        <p>
            En esta seccion podras ver imagenes y una breve descripción de las clases introducidas en el sistema, si quiere ver las habilidades y una descripción mas detallada puede hacer click en la imagen o el titulo.
        </p>
    </section>
    <?php
    //creación de las secciones clase por clase
    for ($i = 0; $i < count($dataToView); $i++) {
    ?>
        <section class="sectionClases">
            <a href="index.php?action=verClase&nombreClase=<?= $dataToView[$i]->getNombre() ?>">
                <h1 class="h1clases">
                    <?php echo $dataToView[$i]->getNombre() ?>
                </h1>
            </a>
            <div class="divClases">
                <a class="aclases" href="index.php?action=verClase&nombreClase=<?= $dataToView[$i]->getNombre() ?>">
                    <img class="imagenClases" src="<?= $dataToView[$i]->getImg() ?>">
                </a>
                <p class="pclases">
                    <?php echo $dataToView[$i]->getDescripcion() ?>
                </p>
            </div>
        </section>
    <?php
    }
    ?>
</main>