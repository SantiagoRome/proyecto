<main>
    <?php for ($i = 0; $i < count($dataToView); $i++) {
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