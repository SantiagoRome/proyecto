<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
    $data=$_GET['datos'];
    $parte=$_GET['parte'];
    $usuario=$_COOKIE['user'];
    $conexion=new Db();
    $sql="UPDATE usuario SET $parte='$data' WHERE usuario='$_COOKIE[user]'";

    $result = $conexion->conection->query($sql);
    if ($conexion->conection->connect_error) {
        echo "error";
    }else{

        if($parte=="usuario"){
            setcookie("user",$data,time()+3600*24*365,'/');
        }
        echo "correcto";
        
    }
?>