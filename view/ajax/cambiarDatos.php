<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
session_start();
$data = $_GET['datos'];
$parte = $_GET['parte'];
$usuario = $_SESSION['user'];
$conexion = new Db();
if ($parte == "contrasena") {
    $data = md5($data);
}
$sql = "UPDATE usuario SET $parte='$data' WHERE usuario='$_SESSION[user]'";

$result = $conexion->conection->query($sql);
if ($conexion->conection->connect_error) {
    echo "error";
} else {

    if ($parte == "usuario") {
        $_SESSION["user"] = $data;
    }
    echo "correcto";
}
