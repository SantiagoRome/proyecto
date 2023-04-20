<main>
    <h1><?php echo $dataToView->getNombre()?></h1>
    <p><?php echo $dataToView->getDescripcion()?></p>
    <br>
    <h2><span>Rol: </span><?php echo $dataToView->getRol();?></h2>
    <br>
    <h2><span>Puntos adicionales de estadistica: </span><?php echo $dataToView->getEstadisticas();?></h2><br>
    <h2><span>Competencias de equipamiento: </span><?php echo $dataToView->getEquipamiento();?></h2><br>
    <h2><span>Competencias en las Tiradas de salvacion: </span><?php echo $dataToView->getCompetencias()?></h2>
    <br>
    <br>
    <h1>Habilidades de clase</h1><br>
    <section>
    <?php
        $habilidades=$dataToView->getHabilidades();
    ?>
    <table class="tablaClase">
        <thead>
            <tr>
                <th>
                    Nivel
                </th>
                <th>
                    Habilidades de clase
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i=1;$i<=18;$i++){
            ?>
                <tr>
                    <td>
                        <?php echo $i ?>
                    </td>
                    <td>
                        <?php   
                            for($x=0;$x<count($habilidades);$x++){
                                if($habilidades[$x]->getNivel()==$i){
                                    echo $habilidades[$x]->getNombre()." ";
                                }
                            }
                        ?>  
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <br>
    <?php
    for($i=0;$i<count($habilidades);$i++){
    ?>
    <h3 class="h3Clase"><?php echo $habilidades[$i]->getNombre()."<span style='margin-left:auto';>Nivel ".$habilidades[$i]->getNivel()."</span>"?></h3>
    <?php
        if($habilidades[$i]->getTipo()!=null){
            echo "<p class='pClase'>Tipo de acción:".$habilidades[$i]->getTipo()."</p>";
        }
        if($habilidades[$i]->getCantidad()!=null){
            echo "<p class='pClase'>Cantidad de usos:".$habilidades[$i]->getCantidad()."</p>";
        }
        if($habilidades[$i]->getDuracion()!=null){
            echo "<p class='pClase'>Duración:".$habilidades[$i]->getDuracion()."</p>";
        }
    ?>
        <p class="pClase"><?=$habilidades[$i]->getDescripcion()?></p>
    <?php
    }
    ?>
    </section>
</main>