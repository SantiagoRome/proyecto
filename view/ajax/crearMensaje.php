<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
session_start();
$mensaje = $_GET['mensaje'];
$foro = $_GET['foro'];
$usuario = $_SESSION['user'];
$conexion = new Db();
//recojo el dia actual con la sintaxis de YYYY-MM-DD para poder guardarla en base de datos
$fecha = date('Y') . "-" . date("m") . "-" . date("d");
//recojo el id del usuario
$sql = "SELECT id FROM usuario WHERE usuario='$usuario'";
$result = $conexion->conection->query($sql);
$row = $result->fetch_assoc();
//si se ha enviado un dato por $_GET['id'] lo interpreto como que es una respuesta a un mensaje, por lo cual modifico la consulta sql para que se introduza en la columna pregunta el id del mensaje
if (isset($_GET['id'])) {
    $sql = "INSERT INTO mensaje(texto,pregunta,foro,usuario,fecha) VALUES ('$mensaje',$_GET[id],$foro,$row[id],'$fecha')";
} else {
    $sql = "INSERT INTO mensaje(texto,foro,usuario,fecha) VALUES ('$mensaje',$foro,$row[id],'$fecha')";
}
$conexion->conection->query($sql);
echo "correcto";
