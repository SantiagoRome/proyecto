<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
    $mensaje=$_GET['mensaje'];
    $foro=$_GET['foro'];
    $usuario=$_COOKIE['user'];
    $conexion=new Db();
    
    $sql="SELECT id FROM usuario WHERE usuario='$usuario'";
    $result=$conexion->conection->query($sql);
    $row = $result->fetch_assoc();
    $sql="INSERT INTO mensaje(texto,foro,usuario) VALUES ('$mensaje',$foro,$row[id])";
    $conexion->conection->query($sql);
    echo "correcto";
?>