<main>
    <section class="sectionClases">
        <h1>
            Razas
        </h1>
        <p>
            En esta seccion podras ver imagenes y una breve descripción de las razas introducidas en el sistema, si quiere ver los origenes y una descripción mas detallada puede hacer click en la imagen o el titulo.
        </p>
    </section>
    <?php for ($i = 0; $i < count($dataToView); $i++) {
    ?>
        <section class="sectionClases">
            <a href="index.php?action=verRaza&nombreRaza=<?= $dataToView[$i]->getNombre() ?>">
                <h1 class="h1clases">
                    <?php echo $dataToView[$i]->getNombre() ?>
                </h1>
            </a>
            <div class="divClases">
                <a class="aclases" href="index.php?action=verRaza&nombreRaza=<?= $dataToView[$i]->getNombre() ?>">
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