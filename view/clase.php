<main>
    <section class="sectionClase">
        <h1 class="h1clase"><?php echo $dataToView->getNombre() ?></h1>
        <img class="imagenClase" src="<?= $dataToView->getImg() ?>">
        <p><?php echo $dataToView->getDescripcion() ?></p>
        <br>
        <h2><span class="spanAtributos">Rol: </span><?php echo $dataToView->getRol(); ?></h2>
        <br>
        <h2><span class="spanAtributos">Puntos adicionales de estadistica: </span><?php echo $dataToView->getEstadisticas(); ?></h2><br>
        <h2><span class="spanAtributos">Competencias de equipamiento: </span><?php echo $dataToView->getEquipamiento(); ?></h2><br>
        <h2><span class="spanAtributos">Competencias en las Tiradas de salvacion: </span><?php echo $dataToView->getCompetencias() ?></h2>
        <br>
        <br>
    </section>
    <br>
    <section>
        <h1>Habilidades de clase</h1>
        <?php
        $habilidades = $dataToView->getHabilidades();
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
                for ($i = 1; $i <= 18; $i++) {
                ?>
                    <tr>
                        <td>
                            <?php echo $i ?>
                        </td>
                        <td>
                            <?php
                            $texto = "";
                            for ($x = 0; $x < count($habilidades); $x++) {
                                if ($habilidades[$x]->getNivel() == $i) {
                                    $texto .= $habilidades[$x]->getNombre() . ", ";
                                }
                            }
                            $texto = substr($texto, 0, -2);
                            echo $texto
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <?php
        for ($i = 0; $i < count($habilidades); $i++) {
        ?>
            <h3 class="h3Clase"><?php echo $habilidades[$i]->getNombre() . "<span style='margin-left:auto';>Nivel " . $habilidades[$i]->getNivel() . "</span>" ?></h3>
            <?php
            if ($habilidades[$i]->getTipo() != null) {
                echo "<p class='pClase'>Tipo de acción: " . $habilidades[$i]->getTipo() . "</p>";
            }
            if ($habilidades[$i]->getCantidad() != null) {
                echo "<p class='pClase'>Cantidad de usos: " . $habilidades[$i]->getCantidad() . "</p>";
            }
            if ($habilidades[$i]->getDuracion() != null) {
                echo "<p class='pClase'>Duración: " . $habilidades[$i]->getDuracion() . "</p>";
            }
            ?>
            <p class="pClase"><?= $habilidades[$i]->getDescripcion() ?></p>
        <?php
        }
        ?>
    </section>
</main>