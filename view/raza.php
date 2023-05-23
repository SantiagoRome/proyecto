<main>
    <section class="sectionRaza">
        <h1><?php echo $dataToView->getNombre() ?></h1>
        <img class="imgRaza" src="<?= $dataToView->getImg() ?>">

        <p><?php echo $dataToView->getDescripcion() ?></p>
        <br>
        <h2><span class="spanAtributos">Media de vida: </span><?php echo $dataToView->getMediaVida(); ?></h2>
        <br>
        <h2><span class="spanAtributos">Dado de vida: </span><?php echo $dataToView->getDado(); ?></h2><br>
        <h2><span class="spanAtributos">Habilidad racial: </span><?php echo $dataToView->getHabilidad(); ?></h2><br>
        <h2><span class="spanAtributos">Idioma natal: </span><?php echo $dataToView->getIdioma() ?></h2>
        <br>
        <br>
    </section>
    <section>
        <?php
        $origenes = $dataToView->getOrigenes();
        if ($origenes != null) {
        ?>
            <h1>Origenes</h1>

            <br>
            <?php
            for ($i = 0; $i < count($origenes); $i++) {
            ?>
                <h1><?php echo $origenes[$i]->getNombre() ?></h1>
                <p><?php echo $origenes[$i]->getDescripcion() ?></p>
                <br>
                <?php
                if ($origenes[$i]->getMediaVida() != null) {
                ?>
                    <h2><span class="spanAtributos">Media de vida: </span><?php echo $origenes[$i]->getMediaVida(); ?></h2>
                <?php } ?>
                <br>
                <?php
                if ($origenes[$i]->getDado() != null) {
                ?>
                    <h2><span class="spanAtributos">Dado de vida: </span><?php echo $origenes[$i]->getDado(); ?></h2><br>
                <?php } ?>
                <h2><span class="spanAtributos">Habilidad racial: </span><?php echo $origenes[$i]->getHabilidad(); ?></h2><br>
        <?php
            }
        }
        ?>
    </section>
</main>