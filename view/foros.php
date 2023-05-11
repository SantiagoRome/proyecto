<main>
    <?php 
    for($i=0;$i<count($dataToView);$i++){
    ?>
    <article>
        <?php
        ?>
        <h1><a href="index.php?action=verForo&id=<?=$dataToView[$i]->getId()?>"><?=$dataToView[$i]->getNombre()?></a></h1>
        <p><?=$dataToView[$i]->getCreador()?></p>
    </article>
    <?php
    }
    ?>
</main>