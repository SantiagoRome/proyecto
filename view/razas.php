<main>
    <?php for($i=0;$i<count($dataToView);$i++){
        ?>
    <section class="sectionClases">
        <a href="index.php?action=verRaza&nombreRaza=<?=$dataToView[$i]->getNombre()?>">
            <h1 class="h1clases">
                <?php echo $dataToView[$i]->getNombre()?>
            </h1>
        </a>
        <div class="divClases">
            <img class="imagenClases" src="<?=$dataToView[$i]->getImg()?>">
            <p class="pclases">
                <?php echo $dataToView[$i]->getDescripcion()?>
            </p>
        </div>
    </section>
    <?php
    }
    ?>
</main>