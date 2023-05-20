<?php
$usuario = $_GET['usuario'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$email = $_GET['email'];
$fnac = $_GET['fnac'];
$contrasena = $_GET['contrasena'];
$texto = "";
if (strlen($usuario) > 20 || !preg_match("/[A-Za-zñáéíóú]+/", $usuario)) {
    $texto = "El nombre de usuario ha de tener como maximo 25 caracteres y solo permite caracteres normales sin espacios.";
}
if (strlen($nombre) > 35 || !preg_match("/[A-ZÁÉÍÓÚ]{1}[A-Za-zñáéíóú\s]+/", $nombre)) {
    $texto = $texto . " El nombre solo permite caracteres normales y debe empezar por una mayuscula.";
}
if (!preg_match("/[A-ZÁÉÍÓÚ]{1}[A-Za-zñáéíóú\s]+/", $apellidos)) {
    $texto = $texto . " Los apellidos solo permiten caracteres normales y deben empezar por una mayuscula.";
}
if (!preg_match("/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/", $email)) {
    $texto = $texto . " Por favor introduzca un email valido.";
}
if (!preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/", $contrasena)) {
    $texto = $texto . " Por favor introduzca una contraseña de entre 8 y 16 caracteres, con un digito, una mayuscula, una minuscula y sin caracteres especiales.";
}
if ($fnac == "") {
    $texto = $texto . " Por favor introduzca una fecha de nacimiento.";
}
if ($texto == "") {
    echo "true";
} else {
    echo $texto;
}
