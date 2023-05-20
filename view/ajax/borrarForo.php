<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
session_start();
$foro = $_GET['foro'];
$usuario = $_SESSION['user'];
$conexion = new Db();

$sql = "SELECT u.usuario FROM usuario u JOIN foro f ON u.id=f.creador WHERE f.id='$foro'";
$result = $conexion->conection->query($sql);
$row = $result->fetch_assoc();

if ($usuario == $row['usuario'] || $usuario == "Administrador") {
    $sql = "DELETE FROM foro WHERE id=$foro";
    $conexion->conection->query($sql);
    echo "correcto";
} else {
    echo "error";
}
