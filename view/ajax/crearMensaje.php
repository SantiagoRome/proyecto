<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
session_start();
$mensaje = $_GET['mensaje'];
$foro = $_GET['foro'];
$usuario = $_SESSION['user'];
$conexion = new Db();
$fecha = date('Y') . "-" . date("m") . "-" . date("d");
$sql = "SELECT id FROM usuario WHERE usuario='$usuario'";
$result = $conexion->conection->query($sql);
$row = $result->fetch_assoc();
if (isset($_GET['id'])) {
    $sql = "INSERT INTO mensaje(texto,pregunta,foro,usuario,fecha) VALUES ('$mensaje',$_GET[id],$foro,$row[id],'$fecha')";
} else {
    $sql = "INSERT INTO mensaje(texto,foro,usuario,fecha) VALUES ('$mensaje',$foro,$row[id],'$fecha')";
}
$conexion->conection->query($sql);
echo "correcto";
