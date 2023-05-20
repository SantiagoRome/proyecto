<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
    session_start();
    $mensaje=$_GET['mensaje'];
    $usuario=$_SESSION['user'];
    $conexion=new Db();
    
    $sql="SELECT u.usuario FROM usuario u JOIN mensaje m ON u.id=m.usuario WHERE m.id='$mensaje'";
    $result=$conexion->conection->query($sql);
    $row = $result->fetch_assoc();
    
    if($usuario==$row['usuario'] || $usuario=="Administrador"){
        $sql="DELETE FROM mensaje WHERE id=$mensaje";
        $conexion->conection->query($sql);
        echo "correcto";
    }else{
        echo "error";
    }
