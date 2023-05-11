<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/estilocabecera.css" />
    <link rel="stylesheet" href="view/css/estiloindex.css" />
    <link rel="stylesheet" href="view/css/footer.css" />
    <link rel="stylesheet" href="view/css/estiloclases.css" />
    <link rel="stylesheet" href="view/css/estiloclase.css" />
    <link rel="stylesheet" href="view/css/estiloraza.css" />
    <link rel="stylesheet" href="view/css/estiloforo.css" />
    <script src="https://kit.fontawesome.com/2aa1d70c63.js" crossorigin="anonymous"></script>
    <script src="view/js/jquery-3.6.3.min.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="headerdiv">
            <a class="headera" href="index.php?action=listarClases">
                Clases
            </a>
            <i class="fa-solid fa-caret-down iconoClases" style="color: #ffffff;"></i>
            <i class="fa-solid fa-caret-down ocultarClases invisible" style="color: #ffffff;"></i>
        </div>
        <div class="headerdiv">
            <a class="headera" href="index.php?action=listarRazas">
                Razas
            </a>
            <i class="fa-solid fa-caret-down iconoRazas" style="color: #ffffff;"></i>
            <i class="fa-solid fa-caret-down ocultarRazas invisible" style="color: #ffffff;"></i>
        </div>
        <a class="logo" href="index.php">
            <img class="imagenLogo" src="img/logofinal.jpg" alt="">
        </a>
        <a class="headera" href="index.php?action=listarForos">
            Foros
        </a>
        <?php
        if(isset($_COOKIE['user'])){
            ?>
            <a class="headera" href="index.php?action=verPerfil">
            <?php echo $_COOKIE['user'];?>
        </a>
        <?php
        }else{
            ?>
            <a class="headera" href="index.php?action=verUsuario">
            Usuario
        </a>
            <?php
        }
?>
    </header>
    <div class="razas invisible">
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/humano.png" ><h2>Humano</h2></a>
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/elfo.png"><h2>Elfo</h2></a>
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/robot.png" ><h2>Robot</h2></a>
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/enano.png" ><h2>Enano</h2></a>
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/arcangel.png" ><h2>Arcángel</h2></a>
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/demonio.png" ><h2>Demonío</h2></a>
        <a class="raza " href="index.php"><img class="imagenRaza" src="img/holous.png" ><h2>Holou</h2></a>
    </div>
    <div class="clases invisible">
        <a class="clase" href="index.php?action=verClase&nombreClase=Soldado"><img class="imagenClase" src="img/soldado.png" ><h2>Soldado</h2></a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Caballero%20de%20la%20mesa%20redonda"><img class="imagenClase" src="img/caballero.png"><h2>Caballero</h2></a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Ingeniero"><img class="imagenClase" src="img/ingeniero.png" ><h2>Ingeniero</h2></a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Mago%20compositor"><img class="imagenClase" src="img/mago.png" ><h2>Mago</h2></a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Psiquico"><img class="imagenClase" src="img/psiquico.png" ><h2>Psiquico</h2></a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Religioso"><img class="imagenClase" src="img/religioso.png" ><h2>Religioso</h2></a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Sabio"><img class="imagenClase" src="img/sabio.png" ><h2>Sabio</h2></a>
    </div>
    <script>
    $(document).ready(function() {
$('.iconoRazas').on('click', function () {
$('.razas').removeClass('invisible');
$('.iconoRazas').addClass('invisible');
$('.ocultarRazas').removeClass('invisible');
});

$('.ocultarRazas').on('click', function () {
$('.razas').addClass('invisible');
$('.ocultarRazas').addClass('invisible');
$('.iconoRazas').removeClass('invisible');
});

$('.iconoClases').on('click', function () {
$('.clases').removeClass('invisible');
$('.iconoClases').addClass('invisible');
$('.ocultarClases').removeClass('invisible');
});

$('.ocultarClases').on('click', function () {
$('.clases').addClass('invisible');
$('.ocultarClases').addClass('invisible');
$('.iconoClases').removeClass('invisible');
});
    });
    </script>

    