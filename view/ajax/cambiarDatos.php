<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
session_start();
$data = $_GET['datos'];
$parte = $_GET['parte'];
$usuario = $_SESSION['user'];
$conexion = new Db();

//si el dato que cambio es la contraseña, la encripto
if ($parte == "contrasena") {
    $data = md5($data);
}
//modifico la parte que he recogido, con los datos enviados en el usuario de la session.
$sql = "UPDATE usuario SET $parte='$data' WHERE usuario='$_SESSION[user]'";

$result = $conexion->conection->query($sql);
if ($conexion->conection->connect_error) {
    echo "error";
} else {
    //si modifico el usuario modifico la variable de session.
    if ($parte == "usuario") {
        $_SESSION["user"] = $data;
    }
    echo "correcto";
}
