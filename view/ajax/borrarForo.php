<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
session_start();
$foro = $_GET['foro'];
$usuario = $_SESSION['user'];
$conexion = new Db();
//vuelvo a comprobar si el usuario es Administrador por si acaso
if ($usuario == "Administrador") {
    //borro el foro
    $sql = "DELETE FROM foro WHERE id=$foro";
    $conexion->conection->query($sql);
    echo "correcto";
} else {
    echo "error";
}
