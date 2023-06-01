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
    <link rel="stylesheet" href="view/css/estiloregistro.css" />
    <link rel="stylesheet" href="view/css/estiloforos.css" />
    <link rel="stylesheet" href="view/css/estiloperfil.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="view/js/jquery-3.6.3.min.js"></script>
    <script src="https://kit.fontawesome.com/2aa1d70c63.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <section class="desktop">
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
            if (isset($_SESSION["user"])) {
            ?>
                <a class="headera" href="index.php?action=verPerfil">
                    <?php echo $_SESSION["user"]; ?>
                </a>
            <?php
            } else {
            ?>
                <a class="headera" href="index.php?action=verUsuario">
                    Usuario
                </a>
            <?php
            }
            ?>
        </section>
        <section class="desplegable movil off">
            <a class="logo" href="index.php">
                <img class="imagenLogo" src="img/logofinal.jpg" alt="">
            </a>

            <a class="headera" href="index.php?action=listarClases">
                Clases
            </a>

            <a class="headera" href="index.php?action=listarRazas">
                Razas
            </a>
            <a class="headera" href="index.php?action=listarForos">
                Foros
            </a>
            <?php
            if (isset($_SESSION["user"])) {
            ?>
                <a class="headera" href="index.php?action=verPerfil">
                    <?php echo $_SESSION["user"]; ?>
                </a>
            <?php
            } else {
            ?>
                <a class="headera" href="index.php?action=verUsuario">
                    Usuario
                </a>
            <?php
            }
            ?>
        </section>
        <div class="menu icono_barras">
            <span class="lineaUno"></span>
            <span class="lineaDos"></span>
            <span class="lineaTres"></span>
        </div>
    </header>
    <div class="razas invisible">
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Humano"><img class="imagenRazaHeader" src="img/humano.png">
            <h2>Humano</h2>
        </a>
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Elfos"><img class="imagenRazaHeader" src="img/elfo.png">
            <h2>Elfo</h2>
        </a>
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Robots"><img class="imagenRazaHeader" src="img/robot.png">
            <h2>Robot</h2>
        </a>
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Enanos"><img class="imagenRazaHeader" src="img/enano.png">
            <h2>Enano</h2>
        </a>
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Arcángeles"><img class="imagenRazaHeader" src="img/arcangel.png">
            <h2>Arcángel</h2>
        </a>
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Demonios"><img class="imagenRazaHeader" src="img/demonio.png">
            <h2>Demonío</h2>
        </a>
        <a class="raza " href="index.php?action=verRaza&nombreRaza=Holous"><img class="imagenRazaHeader" src="img/holous.png">
            <h2>Holou</h2>
        </a>
    </div>
    <div class="clases invisible">
        <a class="clase" href="index.php?action=verClase&nombreClase=Soldado"><img class="imagenClaseHeader" src="img/soldado.png">
            <h2>Soldado</h2>
        </a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Caballero%20de%20la%20mesa%20redonda"><img class="imagenClaseHeader" src="img/caballero.png">
            <h2>Caballero</h2>
        </a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Ingeniero"><img class="imagenClaseHeader" src="img/ingeniero.png">
            <h2>Ingeniero</h2>
        </a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Mago%20compositor"><img class="imagenClaseHeader" src="img/mago.png">
            <h2>Mago</h2>
        </a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Psiquico"><img class="imagenClaseHeader" src="img/psiquico.png">
            <h2>Psiquico</h2>
        </a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Religioso"><img class="imagenClaseHeader" src="img/religioso.png">
            <h2>Religioso</h2>
        </a>
        <a class="clase" href="index.php?action=verClase&nombreClase=Sabio"><img class="imagenClaseHeader" src="img/sabio.png">
            <h2>Sabio</h2>
        </a>
    </div>
    <script>
        $(document).ready(function() {
            $('.iconoRazas').on('click', function() {
                $('.razas').removeClass('invisible');
                $('.iconoRazas').addClass('invisible');
                $('.ocultarRazas').removeClass('invisible');
            });

            $('.ocultarRazas').on('click', function() {
                $('.razas').addClass('invisible');
                $('.ocultarRazas').addClass('invisible');
                $('.iconoRazas').removeClass('invisible');
            });

            $('.iconoClases').on('click', function() {
                $('.clases').removeClass('invisible');
                $('.iconoClases').addClass('invisible');
                $('.ocultarClases').removeClass('invisible');
            });

            $('.ocultarClases').on('click', function() {
                $('.clases').addClass('invisible');
                $('.ocultarClases').addClass('invisible');
                $('.iconoClases').removeClass('invisible');
            });
        });
        $('.menu').on('click', function() {
            $(this).toggleClass('icono_cruz icono_barras');

            $('.desplegable').toggleClass('off on');
        });
        $('.movil').on('click', function() {
            $('.menu').toggleClass('icono_cruz icono_barras');

            $('.desplegable').toggleClass('off on');
        });
        $('section').on('click', function() {
            $(this).parents().find('.menu').removeClass('icono_cruz');
            $(this).parents().find('.menu').addClass('icono_barras');

            $('.desplegable').removeClass('on');
            $('.desplegable').addClass('off');
        });
    </script>