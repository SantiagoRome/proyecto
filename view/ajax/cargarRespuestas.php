<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
include_once ("../../model/mensaje.php");
include_once("../../model/foro.php");
    $mensaje=$_GET['mensaje'];

    $conexion=new Db();
    
    $sql="SELECT m.*, u.usuario FROM mensaje m JOIN usuario u ON u.id=m.usuario WHERE pregunta=$mensaje";
    $result=$conexion->conection->query($sql);
    $i=0;
    while($row = $result->fetch_assoc()){
        $mensajes[$i]=$row;
        $i++;
    }
    echo json_encode($mensajes);
?>