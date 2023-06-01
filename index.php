<?php
//inclusión de los archivos del modelo y el controllador
require_once 'controller/cliente.php';
require_once 'config/config.php';
require_once 'model/db.php';
require_once 'model/Tameforsomis.php';
require_once 'model/clase.php';
require_once 'model/habilidad.php';
require_once 'model/foro.php';
require_once 'model/raza.php';
require_once 'model/origen.php';
require_once 'model/mensaje.php';
require_once 'model/usuario.php';

//En el caso de que no exista accion para el controllador, seteo la accion default usando la variable global de config.php
if (!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

session_start();

$controlador = new Cliente();

$dataToView = array();
$dataToView  = $controlador->{$_GET["action"]}();
//var_dump($dataToView);

// Leer vistas 
require_once 'view/template/header.php';
require_once 'view/' . $controlador->view . '.php';
require_once 'view/template/footer.php';
