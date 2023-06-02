-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2023 a las 17:12:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tameforsomis`
--
CREATE DATABASE IF NOT EXISTS `tameforsomis` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tameforsomis`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `estadisticas` varchar(100) NOT NULL,
  `competencias` varchar(1000) NOT NULL,
  `equipamiento` varchar(1000) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`nombre`, `descripcion`, `rol`, `estadisticas`, `competencias`, `equipamiento`, `imagen`) VALUES
('Caballero de la mesa redonda', 'Los caballeros de la mesa redonda son caballeros honorables que buscan la paz en el universo e impedir que el sello del portal hacia el abismo se rompa.<br><br>Los caballeros se fundaron en el planeta de Garbadia. Allí, los 3 caballeros fundadores, reunieron a un ejercito de valientes guerreros que lucharon contra las criaturas del abismo que asolaban el planeta y cazaban a los fetidos, una raza proveniente del planeta.<br><br>Actualmente, son una alianza poderosa de la justicia y cazadores de bestias, listos para dar la vida en el combate.', 'Tanque.', '+2 en Constitución y +1 en Fuerza.', 'Constitución y\r\nFuerza.', 'Armas cuerpo a cuerpo y a distancia, y armaduras medianas.', 'img/caballeroCompleto.png'),
('Ingeniero', 'Estos intelectuales son capaces de mejorar e innovar en el ámbito armamentístico o capaces de crear armas de destrucción masiva. Por eso y más, se les teme en gran parte del universo.<br><br>Grandes ingenieros de las razas con poder político mas notorio han podido crear armas capaces de destruir planetas enteros con una precisión perfecta, pudiendo disparar cañones recargados de energía cuasar desde una punta de la galaxia hasta la otra.<br><br>Dentro de esta categoría se encuentran los mecanomagos, creadores de la tecnomagia y, accidentalmente, la antimagia.', 'Apoyo defensivo.', '+2 en Destreza y +1 en Inteligencia.', 'Destreza e Inteligencia.', 'Armas cuerpo a cuerpo y a distancia, y armaduras ligeras.', 'img/ingenieroCompleto.png'),
('Mago compositor', 'Estos artistas se consideran estudiosos de la magia extravagante de Yuma, pergaminos capaces de enseñar el poder de la magia y el baile.<br><br>Son excelentes aliados para sentir la motivación en momentos críticos, capaces de controlar las emociones con sus instrumentos imbuidos en la magia compositora.<br><br>Nadie escapa a la hipnotizadora sinfonía de estos magos musicales.', 'Apoyo.', '+2 en Carisma y +1 en Sabiduría.', 'Carisma y Sabiduría.', 'Armas cuerpo a cuerpo y a distancia, y armaduras ligeras.', 'img/magoCompleto.png'),
('Psíquico', 'Seres mutados por la influencia y existencia de los dioses del universo físico, son perseguidos por las religiones más estrictas y se consideran marginados de la sociedad.<br><br>Los psíquicos están mal vistos y se les rechaza por miedo a sus poderes, capaces de dañar la mente de cualquier ser orgánico.<br><br>Lejos de los mitos y mentiras que se han generado debido a las religiones extremistas, ciertamente los psíquicos pueden controlar sin problema sus poderes. De hecho, la mayoría no es consciente de sus poderes hasta lleagada la etapa de adolescencia, donde estos se manifiestan a voluntad del psíquico.', 'Daño casteador.', '+3 en Inteligencia.', 'Inteligencia.', 'Armas cuerpo a cuerpo y a distancia, y armaduras ligeras.', 'img/psiquicoCompleto.png'),
('Religioso', 'Estudiosos de nuestra historia y creación, los religiosos son aquellos dedicados a la comprensión del origen de nuestro universo y las acciones que tienen los dioses sobre el mismo, además, es gracias a estos que conocemos los motivos y las intenciones de estos.<br><br>Estos religiosos consiguen sus poderes con el estudio de la magia celestial, capaces de mejorar sus habilidades para enfrentar al Sastronimus y ayudar a los mas necesitados.<br><br>Dependiendo de la religión que elijas como religioso, las doctrinas enseñadas pueden ser muy diferentes unas de otras, sin embargo, todas mantienen en sus templos los pergaminos de la magia celestial.', 'Apoyo curativo.', '+2 en Sabiduría y +1 en Carisma.', 'Sabiduría y Carisma.', 'Bastones y armaduras ligeras.', 'img/religiosoCompleto.png'),
('Sabio', 'Los sabios son guerreros errantes que una vez lucharon mano a mano junto a gobiernos importantes establecidos en la Vía Láctea.<br><br>Cuando la inquisición se estableció como el poder dominante, fueron perseguidos durante años hasta la caída de Lord Deus.<br><br>Cuando los sabios volvieron, se dispersaron, ayudando a la prosperidad universo. Son guerreros que luchan con el entrenamiento de sus antiguos maestros por la supervivencia y bajo sus propios valores, sustituyendo aquellos que se perdieron durante las guerras santas en la Vía Láctea.', 'Daño defensivo', '+2 en Sabiduría y +1 en Destreza.', 'Sabiduría y Destreza.', 'Armas cuerpo a cuerpo y armaduras ligeras.', 'img/sabioCompleto.png'),
('Soldado', 'Especialistas en el combate a distancia, se tratan de veteranos y expertos de guerra. la guerra no es la norma en el universo, existen claros indicios de paz en ciertos rincones y galaxias, quienes tienen otro tipo de cultura. La tecnología varia en grandes cantidades, pues al tratarse del universo en su enteridad, cada cultura, religión y sociedad mantiene un tipo de tecnología distinto. Todo escala desde el lugar en el que estas razas nacen o hasta donde llega la inteligencia de los mismos. Es por eso que no todos tienen las mismas estrategias o estilo de pelea.\n', 'Daño', '+2 en Inteligencia y +1 en Destreza.', 'Inteligencia y Destreza.', 'Armas cuerpo a cuerpo y a distancia, y armaduras medianas.', 'img/soldadoCompleto.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `creador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id`, `nombre`, `creador`) VALUES
(1, 'Normas', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE `habilidad` (
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `cantidad` varchar(100) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habilidad`
--

INSERT INTO `habilidad` (`nombre`, `tipo`, `cantidad`, `duracion`, `descripcion`) VALUES
('Acción adicional', NULL, NULL, NULL, 'Obtienes una acción adicional en tu turno.'),
('Aprendizaje místico', NULL, NULL, NULL, 'Suma a tu defensa el Bonf. de destreza + Bonf. de sabiduría mientras no lleves armadura.'),
('Aracnido espía', NULL, NULL, NULL, 'Eres capaz de crear un pequeño robot con cámara según los planos del ingeniero durante una ronda/10 minutos.<br>Puede desplazarse hasta 10 metros de movimiento y retransmite todo lo que ve.'),
('Armadura psíquica', 'Acción/adicional.', 'Una vez por combate.', 'Tres rondas/30 minutos.', 'Añade +3 puntos a la defensa.'),
('Arte de la guerra', NULL, NULL, NULL, 'Al realizar un ataque con un arma de sabio, añade al daño 1d4 de tipo de daño correspondiente al arma usada. Las armas del sabio son bastones, espadas, puños y martillos.<br>Nivel 1-4: 1d4.<br>Nivel 5-10: 2d4.<br>Nivel 11-16: 3d4.<br>Nivel 17: 4d4.'),
('Ataque extra', NULL, NULL, NULL, 'Obtienes un ataque adicional en tu turno.'),
('Automatización bélica', 'Acción/adicional', NULL, NULL, 'Eres capaz de crear una torreta cada dos rondas, con un máximo de hasta 3 torretas.<br>Las torretas tienen un alcance de 5 metros, 15 PV y 8 + Bonf. de destreza de defensa, además, causan 2d6 de daño Perforante.<br>El bonificador de acierto es tu Bonf. de inteligencia.<br>Una vez construyas las 3 torretas, no podrás construir otra, incluso si se destruye una, hasta después de un descanso largo.<br>Nivel 6-9:<br>15 PV<br>8 + Bonf. de destreza DEF.<br>2d6 daño<br>Nivel 10-14:<br>30 PV<br>10 + Bonf. de destreza DEF.<br>4d4 daño.<br>Nivel 15:<br>45 PV<br>12 + Bonf. de destreza DEF.<br>6d4 daño.'),
('Bastión', NULL, NULL, NULL, 'Obtienes competencia con armaduras pesadas y añade tu nivel de caballero de la mesa redonda a tus PV máximos.'),
('Bastón barato', NULL, NULL, NULL, 'Obtienes un 25 % de descuento en los bastones y sus modificaciones.'),
('Baterías de recarga', 'Acción/adicional.', 'Una vez por descanso largo.', 'Hasta que acabe el combate.', 'Eres capaz de añadir 3d12 de daño tesla a tus ataques con armas a distancia.<br>Adicionalmente, todos los aliados en un radio de 3 metros adyacentes a ti obtienen 2d12 de daño plasma adicional en todos sus ataques.'),
('Bendición musical', 'Acción/adicional.', 'Una vez por descanso largo.', 'Dos rondas/20 minutos.', 'Con un alcance de 5 metros, en un radio de 2 metros adyacentes a la habilidad, todos los aliados dentro del área obtienen +4 a las habilidades de curación y al Bonf. de daño.'),
('Bloquear proyectiles', 'Acción de reacción.', 'Dos veces por descansolargo.', NULL, 'Eres capaz de reducir el daño de un ataque a distancia en tu Bonf. de sabiduría + tu nivel de sabio.<br>Si anulas todo el daño del ataque, puedes devolver el proyectil a cualquier enemigo que se encuentre a rango.<br>Utiliza el mismo alcance que tenga el arma con la que se realizó el ataque, y el mismo Bonf. de acierto del atacante.'),
('Calma nostálgica', 'Acción/adicional.', 'Dos veces por descanso largo.', NULL, 'Eres capaz de curar 1d8 + Bonf. de carisma a quien tú desees, con un alcance de 4 metros.<br>Nivel 2-8: 1d8.<br>Nivel 9-12: 2d6.<br>Nivel 13-16: 2d8.<br>Nivel 17: 2d10.'),
('Cancelado', 'Acción/adicional.', 'Una vez por descanso largo.', NULL, 'Eres capaz de causar el estado silenciado con un alcance de 5 metros.'),
('Capa invisible', 'Acción/adicional.', 'Una vez por descanso largo.', 'Cuatro rondas/40 minutos.', 'Eres capaz de construir una capa de nanobots con la capacidad de volverte invisible según los planos del ingeniero durante dos días, a cambio obtienes un punto de cansancio.<br>Eres capaz de volverte invisible mientras vistas esta capa, sin embargo, podrás ser visto bajo visión térmica.'),
('Concentración', 'Acción/adicional.', 'Una vez por descanso corto.', NULL, 'Puedes eliminar un efecto negativo tuyoo de un aliado que se encuentre a 1 metro de manera automática.<br>A nivel 12 puedes realizar esta habilidad dos veces por descanso corto.'),
('Conexión mental', NULL, NULL, 'Dura una ronda/10 minutos.', 'Eres capaz de comunicarte telepáticamente con cualquier ser vivo si este habla como mínimo un idioma en un radio de 9 metros.<br>A nivel 10, aumenta el radio en 18 metros y, con una acción, puedes duplicar el radio.<br>'),
('Corazón de guerrero', 'Acción de reacción.', 'Dos veces por descanso corto.', NULL, 'Eres capaz de redirigir un estado negativo que afecta a un aliado hacia a ti mismo.'),
('Cruzado', 'Acción/adicional.', 'Una vez por descanso largo.', 'Una ronda/10 minutos.', 'En tus párpados aparecen cruces negras que afectan a tu visión. Ahora puedes ver todas las resistencias, inmunidades y debilidades de un objetivo si este falla una TS de sabiduría de dificultad 12 + Bonf. de inteligencia + Bonf. Competencia.'),
('Deber de lucha', NULL, 'Una vez por descanso largo.', NULL, 'Si sufres el estado ’Paralizado’, ’Derribado’ o ’Incapacitado’, puedes realizar una última acción antes de que el estado cause efecto.'),
('Defensa improvisada', NULL, NULL, NULL, 'Obtienes +2 a la defensa contra ataques a\r\ndistancia.<br>Nivel 2-6: +2.<br>Nivel 7-11: +3.<br>Nivel 12-16: +4.<br>Nivel 17: +5.'),
('Destructor de escuadras', 'Acción de ataque.', 'Una vez por descanso largo.', 'Dos rondas/20 minutos.', 'Utilizando un arma cuerpo a cuerpo, puedes realizar un ataque en un área, en un  radio de metros igual al alcance de tu arma.<br><br> El daño causado se le añade la etiqueta de ataque en área, por lo tanto, si aciertas a más de un objetivo, el resultado del daño se divide entre dos.<br><br> Para acertar este ataque, los objetivos dentro del área deben fallar una TS de destreza de dificultad 8 + Bonf. de acierto de tu arma + Bonf. Competencia.<br><br> Todos los individuos que hayan sufrido este ataque, adicionalmente, sufren un penalizador de -2 a todas sus acciones de ataque.'),
('Determinación triunfante', 'Automáticamente.', 'Una vez por combate.', 'Tres rondas/30 minutos.', 'Cuando tus PV máximos llegan a la mitad, obtienes una curación de +15 por ronda, +2 a la defensa y +2 al Bonf. de fuerza. Adicionalmente, cualquier estado negativo que hayas sufrido se elimina automáticamente.'),
('Efectos secundarios', 'Acción/adicional.', 'Dos veces por descanso largo.', NULL, 'Con un alcance de 5 metros, lanza 1d4 causando automáticamente uno de los siguientes estados a un objetivo.<br>1: Asustado.<br>2: Cegado.<br>3: Desmotivado.<br>4: Confundido.'),
('En el ojo del huracán', 'Acción/adicional.', 'Una vez por descanso largo.', 'Dos rondas/20 minutos.', 'Obtienes un ataque adicional.<br>+6 metros a los metros de movimiento.<br>+3 puntos a la defensa.<br>Puedes utilizar ’vida extra’ sin gastar usos de la misma y obtienes el estado motivado.'),
('Envío de vuelta', 'Acción/adicional.', 'Una vez por descanso largo.', NULL, 'Eres capaz de desintegrar Holous, Humanos resucitados o cualquier espectro.<br>El objetivo debe superar una TS de sabiduría de dificultad 8 + Bonf. de sabiduría + Bonf. Competencia.<br>La dificultad varía dependiendo de tu nivel.<br><br>Si eres nivel superiór:<br>Si eres un nivel superior al del objetivo, la dificultad que debe superar este será de 9.<br>Si eres dos niveles superior al del objetivo, la dificultad que debe superar este será de 10.<br>Si eres tres niveles superior al del objetivo, la dificultad que debe superar este será de 12.<br>Si eres cuatro niveles superior al del objetivo, la dificultad que debe superar este será de 14.<br><br>Si eres nivel inferior:<br>Si eres un nivel inferior al del objetivo, la dificultad a superar será de 7.<br>Si eres dos niveles inferior al del objetivo, la dificultad a superar será de 6.<br>Si eres tres niveles inferior al del objetivo, la dificultad a superar será de 5.<br>Si eres cuatro niveles inferior al del objetivo, la dificultad a su'),
('Erradicar habladurías', NULL, NULL, NULL, 'Cualquier individuo que trate de realizar la dote ’Intimidación’, ’Persuasión’ o ’Mentir’ contra ti, tiene desventaja.'),
('Escucha mis plegarias', 'Acción/adicional.', 'Una vez por descanso largo.', NULL, 'Recupera todos los usos de habilidades a cambio de recibir tres puntos de cansancio.'),
('Escudo de aviso', 'Acción de reacción', 'Una vez por descanso largo', NULL, 'Eres capaz de resistir el daño de cualquier ataque a distancia.'),
('Escudo psíquico', 'Acción de reacción.', NULL, NULL, 'Eres capaz de reducir el daño de los ataques a distancia en 1d10 + Bonf. de inteligencia + tu nivel de psíquico.<br>Si llega a 0, puedes devolver el proyectil con tu Bonf. de inteligencia con un alcance igual a los metros del arma que se haya utilizado.'),
('Especializado', NULL, NULL, NULL, 'Puedes elegir competencia con dos dotes.<br>A nivel 10, puedes elegir competencia otras dos dotes.'),
('Espíritu inquebrantable', NULL, NULL, NULL, 'Obtienes inmunidad al estado ’Hemorrágico’, ’Quemado’, ’Envenenado’ y ’Gangrenado’.'),
('Estilo caballeresco', 'Acción/adicional.', 'ilimitada', 'Hasta el final del combate o uso de esta habilidad', 'Puedes elegir entre adoptar una posición ofensiva o defensiva. Si decides elegir la posición ofensiva, obtienes un +3 a tu Bonf. de acierto, sin embargo, tu defensa disminuye en -2. Si decides elegir la posición defensiva obtienes +3 a tu defensa, sin embargo, tu Bonf. de acierto disminuye en -2.'),
('Estilo de combate', NULL, NULL, NULL, 'Elige uno de los 3 estilos de combate, consiguiendo las siguientes ventajas.<br><br>\r\nEstilo a dos manos:<br>\r\nSuma 1d4 al daño de todos tus ataques con armas a dos manos.<br>\r\nNivel 1-5: 1d4.<br>\r\nNivel 6-11: 2d4.<br>\r\nNivel 12-17: 3d4.<br>\r\n<br>\r\nEstilo a una mano:<br>\r\nSuma +1 al Bonf. de acierto de todos tus ataques con armas a una mano.<br>\r\nNivel 1-5: +1.<br>\r\nNivel 6-11: +2.<br>\r\nNivel 12-17: +3.<br>\r\n<br>\r\nEstilo de defensa:<br>\r\nSuma +1 a la defensa.<br>\r\nNivel 1-5: +1.<br>\r\nNivel 6-11: +2.<br>\r\nNivel 12-17: +3.'),
('Fluidez de combate', NULL, NULL, NULL, 'Ganas +3 metros a los metros de movimiento y no sufres penalizadores por el terreno difícil.'),
('Foco diestro', 'Acción/adicional.', 'Dos veces por descanso corto.', NULL, 'Eres capaz de crear un orbe de luz en la palma de tu mano, alumbrando un área de 3 metros adyacentes a ti.<br>Puedes usarlo en combate, obligando a un objetivo a realizar una TS de destreza de dificultad 10 + Bonf. de sabiduría + Bonf. de carisma.<br>Si falla, sufre el estado ’Cegado’.'),
('Fuerza universal', NULL, NULL, NULL, 'Elige uno de los siguientes poderes heredados.<br>Gravedad.<br>Telequinesis.<br>Magnetismo.'),
('Fulgor', 'Acción/adicional.', 'Una vez por descanso largo.', 'Una ronda/10 minutos.', 'Añade al Bonf. de daño de tus ataques cuerpo a cuerpo tu nivel de caballero entre 3, además, obtiene resistencia al daño ’Contundente’ y ’Cortante’. A nivel 8, puedes realizar esta habilidad dos veces por descanso largo. A nivel 15, puedes realizar esta habilidad tres veces por descanso largo.'),
('Fundir mente', 'Acción/adicional.', 'Una vez por descanso largo.', 'Hasta que termine el combate.', 'Eres capaz de dañar el cerebro de un objetivo si este falla una TS de constitución de dificultad 8 + Bonf. de inteligencia + Bonf. Competencia.<br>Si falla, reduce la estadística de inteligencia del objetivo en -2.<bR>Adicionalmente, sufre 1d8 de daño Sangrado.'),
('Golpe de poder', 'Acción de ataque.', 'Una vez por descanso largo.', NULL, 'Eres capaz de invocar un corte mágico mientras tengas equipada un arma cuyo estilo de manos sea de dos.<br><br> Tiene un alcance de 6 metros que impactará a todos los individuos que se encuentren dentro del alcance.<br><br> Todos los objetivos deben realizar una TS de destreza de dificultad 12 + Bonf. de fuerza + Bonf. Competencia, si fallan, sufren 4d8 + Bonf. de fuerza de daño mágico y la mitad del daño total del arma que se haya usado.'),
('Golpe de sabiduría', 'Acción de ataque.', 'Una vez por descanso largo.', 'Hasta que acabe el combate.', 'Eres capaz de realizar un ataque con tu arma cuerpo a cuerpo a un objetivo que se encuentre a 6 metros de distancia y desplazarte hacia el mismo sin sufrir ataques de oportunidad al activar esta habilidad.<br>Utiliza el Bonf. de acierto de tu arma para causar 6d8 + Bonf. de destreza de daño verdadero.<br>Después de acertar y realizar el daño, el objetivo debe superar una TS de constitución de dificultad 12 + Bonf. de destreza + Bonf Competencia. Si falla, sufre el estado ’Cansado’ y ’Confundido’.<br>Adicionalmente, elimina una de las resistencias o inmunidades del objetivo a elección.'),
('Golpe inconsciente', 'Acción/adicional.', 'Dos veces por descanso corto.', NULL, 'Eres capaz de causar el estado mareado con el siguiente ataque que realices en tu turno si el objetivo falla una TS de constitución de dificultad 8 + Bonf. de sabiduría + Bonf. Competencia.'),
('Gracia artística', NULL, NULL, NULL, 'Por cada uso de ’Calma nostálgica’ suma +5 a la curación en todos sus usos.<br>Adicionalmente, los PV que sobran en la curación se suman como PV temporales.'),
('Granadero furtivo', 'Acción de ataque.', 'Una vez por descanso largo.', NULL, 'Eres capaz de crear y lanzar un cinturón de explosivos en un radio de 4 metros, con un alcance de 8 metros.<br>Todos los objetivos dentro del área deben realizar una TS de destreza de dificultad 12 + Bonf. de inteligencia + Bonf. de competencia, si fallan, sufren 9d6 de daño explosivo.'),
('Hélices mortales', 'Acción/adicional.', 'Una vez cada dos rondas.', 'Hasta que termine el combate.', 'Añade a tus torretas mecanismos de vuelo para que estos puedan desplazarse con 4 metros de movimiento.<br>Se desplazan hacia la dirección que hayas indicado antes de que termine tu turno.<br>El mecanismo se destruye después de que termine el combate.'),
('Holograma defensivo', 'Acción/adicional.', 'Una vez por descanso largo.', 'Dos rondas/20 minutos.', 'Eres capaz de crear un dispositivo que activa un muro semitransparente holográfico con un alcance de 3 metros, el cual cubrirá un largo y alto de 4 metros.<br>El escudo es inmune al daño a distancia,si es atacado cuerpo a cuerpo, se destruye al instante.'),
('Honor de caballero', NULL, NULL, NULL, 'En los niveles 3, 7, 11 y 15, obtienes un honor de caballero, el cual desbloquea la siguiente habilidad correspondiente de la especialidad de tu clase.'),
('Imposición feroz', 'Acción de ataque.', 'Una vez por descanso largo.', NULL, 'Eres capaz de desplazarte y cargar contra un objetivo que esté a 8 metros o menos. <br><br>El objetivo debe superar una TS de constitución de dificultad 10 + Bonf. de constitución + Bonf. Competencia, si falla, desplazas al objetivo los metros restantes del recorrido.<br><br> Si durante el trayecto se encuentra una superficie u otro individuo, la carga cesará antes de recorrer el trayecto entero.<br><br>Si no es interrumpido:<br> El objetivo sufre 2d8 + Bonf. de constitución de daño Contundente y el estado ’Derribado’.<br><br> Si es interrumpido por una superficie sólida:<br> El objetivo sufre 2d10 + Bonf. de constitución + la mitad de tu defensa de daño Contundente y un penalizador de -2 a la defensa durante dos rondas.<br><br> Si es interrumpido por un segundo objetivo:<br>Ambos recibirán 2d6 + Bonf. de constitución de daño Contundente y el estado ’Derribado’.'),
('Inspiración divina', 'Acción/adicional.', 'Tres veces por descanso largo.', NULL, 'Ofrece 1d6 adicional a un aliado en la tirada que desee.<br>No puedes ofrecer más de una inspiración a un objetivo que ya tiene esta habilidad aplicada hasta que la gaste en una acción.<br>Adicionalmente, no se puede sumar a habilidades que suman acierto, daño o defensa adicional.<br>Nivel 1-5: 1d6.<br>Nivel 6-9: 1d8.<br>Nivel 10-14: 2d8.<br>Nivel 15: 2d10.'),
('Intocable', NULL, 'Una vez por descanso corto.', NULL, 'Puedes repetir una TS fallida.<br>A nivel 14, puedes realizar esta habilidad dos veces por descanso corto.<br>A nivel 17, puedes realizar esta habilidad tres veces por descanso corto.'),
('Jerga de mecánicos', NULL, NULL, NULL, 'Obtienes un lenguaje que solo puede ser entendido por otros ingenieros.'),
('Listo para el combate', 'Acción/adicional.', 'Una vez por combate.', NULL, 'Al principio de un combate, puedes obtener u ofrecer a un aliado ventaja en la tirada de iniciativa.'),
('Maldición del portal', 'Acción/adicional.', 'Una vez por descanso largo.', 'Dos rondas/20 minutos.', 'Puedes maldecir a un objetivo obligándole a realizar una TS de sabiduría de dificultad 10 + Bonf. de sabiduría + Bonf. de competencia, si falla, elimina todas las inmunidades y resistencias del individuo.'),
('Mano de Lorus', NULL, NULL, NULL, 'Consigue el poder híbrido ’Mano de Lorus’.'),
('Mejora de estadísticas', NULL, NULL, NULL, 'En los niveles 4, 8, 12 y 16, obtienes 2 puntos extra a repartir entre tus 6 estadísticas.'),
('Mejora de prótesis', NULL, NULL, NULL, 'Añade mejoras a las prótesis de cualquier aliado según los planos del ingeniero durante dos días, a cambio, recibes un punto de cansancio.<br>Piernas:<br>Eres capaz de crear propulsores que añaden +3 metros a los metros de movimiento, además, pueden elevar al portador 2 metros de la superficie.<br>Brazos:<br>Eres capaz de añadir a los brazos protésicos cualquier modificación del catálogo de armas que el individuo ya haya comprado previamente.<br>Pecho:<br>Eres capaz de añadir a los brazos cualquier modificación del catálogo de armaduras que el individuo ya haya compradopreviamente.<br>Cabeza:<br>Eres capaz de crear un recubrimiento que vuelve resistente al daño psíquico.<br>Ojos:<br>Eres capaz de crear ojos con visión noc-turna o visión térmica.'),
('Mentalidad expandida', NULL, NULL, NULL, 'Obtienes el poder heredado ’Psíque’.'),
('Mente calma', NULL, NULL, NULL, 'Obtienes resistencia al daño psíquico.<br>A nivel 12, obtienes inmunidad al daño Psíquico.'),
('Mente indomable', NULL, NULL, NULL, 'Obtienes inmunidad a las habilidades de control mental y física.'),
('Muro', 'Acción de reacción.', 'Una vez por descanso corto.', 'null', 'Eres capaz de reducir el daño en área sufrido por ti y todos tus aliados, restandolo al resultado tu Bonf. de destreza + tu Bonf. de inteligencia.'),
('Nadie escapa', 'Acción/adicional.', 'Una vez por descanso largo.', 'Tres rondas/30 minutos.', 'Con un alcance de 10 metros, reduce los metros de movimiento de un objetivo a 0 metros si este falla una TS de fuerza de dificultad 8 + Bonf. de inteligencia + Bonf. Competencia.'),
('Patines avanzados', NULL, NULL, 'tres rondas/30 minutos.', 'Eres capaz de crear unos patines que te permite desplazarte mucho mas rápido según los planos del ingeniero.<br>Añade +3 metros a los metros de movimiento.'),
('Pergamino de la aleatoriedad maliciosa', 'Acción de reacción.', 'Una vez por descanso largo.', NULL, 'Con un alcance de 6 metros, realiza un estado negativo a quien desees lanzando 1d20.<br>Dependiendo del resultado, puedes causar uno de los siguientes estados.<br>1-3: Ensordecido.<br>4-6: Mareado.<br>7-9: Asustado.<br>10-12: Super desmotivado.<br>13-15: Confundido.<br>16-20: Locura.'),
('Pergamino de la benevolencia', 'Acción/adicional.', 'Una vez por descanso corto.', 'Una ronda/10 minutos.', 'Aplica el estado ’Super motivado’ a quien tú desees.'),
('Plumas', NULL, NULL, NULL, 'Obtienes resistencia al daño por caída.<br>A nivel 14, obtienes inmunidad al daño por caída.'),
('Potenciador vital metálico', 'Acción/adicional.', 'Una vez por descanso largo.', 'Tres rondas/30 minutos.', 'Eres capaz de crear placas de acero que se adhieren a tu cuerpo, obteniendo +25 PV temporales y resistencia al daño ’Explosivo’ y elemental ’Sónico’.'),
('Presión de banda', 'Acción/adicional.', 'Una vez por descanso largo.', NULL, 'Eres capaz de causar el estado ’Paralizado’.'),
('Proeza', NULL, NULL, NULL, 'Añade la mitad de tu Bonf. Competencia a todas las TS con las que no tengas competencia.'),
('Protección celestial', 'Acción de reacción.', 'Una vez por descanso largo.', 'Tres rondas/30 minutos.', 'Invoca un escudo el cual ofrece resistencia al tipo de daño que elijas.<br>Puedes invocarlo para ti o a un aliado.'),
('Proyectiles controlados', NULL, NULL, 'dos rondas/20 minutos', 'Eres capaz de crear un dispositivo que genera una pequeña explosión según los planos del ingeniero.'),
('Psique natural', 'Acción de ataque.', NULL, NULL, 'Eres capaz de causar 1d4 + Bonf. de inteligencia de daño Psíquico.<br>El bonificador de acierto es tu Bonf. de inteligencia.<br><br>Nivel 1-3: 1d4<br>Nivel 4-6: 2d4<br>Nivel 7-8: 3d4<br>Nivel 9-10: 4d4<br>Nivel 11-12: 5d4<br>Nivel 13-14: 6d4<br>Nivel 15-16: 7d4<br>Nivel 17: 8d4'),
('Quemarropa', NULL, NULL, NULL, 'Ignora el penalizador por atacar a corto rango con armas a distancia.'),
('Radiante milagroso', NULL, NULL, NULL, 'Si causas el estado ’Cegado’, aplicas un penalizador de -4 en lugar de -2.'),
('Rasgo de militancia', NULL, NULL, NULL, 'En los niveles 3, 7, 11 y 15, obtienes un rasgo de militancia, el cual desbloquea la siguiente habilidad correspondiente de la especialidad de tu clase.'),
('Regalo de un dios', NULL, 'Una vez por descanso largo.', NULL, 'Eres capaz de superar cualquier TS automáticamente.'),
('Resurrección', 'Acción/adicional.', 'Una vez por descanso largo.', NULL, 'Eres capaz de revivir a cualquier ser que haya fallecido recientemente.<br>Cuando realices esta habilidad, el objetivo volverá a la vida con 1 PV y estará bajo el estado ’Incapacitado’.'),
('Sacrificio altruista', 'Acción de reacción.', 'Una vez por descanso largo.', NULL, 'Eres capaz de redirigir todo el daño de un ataque en área hacia ti mismo, evitando el daño hacia tus aliados.'),
('Salto atrás', 'Acción de reacción.', 'Dos veces por descanso corto.', NULL, 'Puedes evitar un ataque en área y moverte hasta la mitad de tu movimiento sin generar oportunidad de ataque, pudiendo evitar el daño del ataque si sales del radio.'),
('Silenciar mente', 'Acción/adicional.', 'Una vez por descanso largo.', NULL, 'Causa el estado ’Silenciado’ automáticamente.<br>A nivel 13, puedes realizar esta habilidad dos veces por descanso largo.'),
('Sintonía universal', NULL, 'Una vez cada ronda.', NULL, 'Obtienes inmunidad al daño ’Mágico’.<br>Adicionalmente, cada vez que seas atacado por ese tipo de daño, obtendrás la mitad del resultado como PV temporales.<br>Como dato adicional, tu esperanza de vida se duplica gracias a las habilidades del sabio que han llegado a su punto máximo.'),
('Subida de nivel', 'Acción/adicional.', 'Una vez por descanso largo.', 'Una ronda/10 minutos.', 'Cualquiera de tus habilidades afecta en un radio de 2 metros.<br>A nivel 13, la primera habilidad que utilices dentro de la ronda en la que esta habilidad esté activa no gastará su uso.'),
('Superioridad defensiva', NULL, NULL, NULL, 'Obtienes competencia con armaduras super pesadas.'),
('Tornillo reforzado', NULL, NULL, NULL, 'Eres capaz de cambiar el tipo de daño de las torretas entre ’Perforante’, ’Plasma’ y ’Tesla’.'),
('Trueque', NULL, NULL, NULL, 'Obtienes un 25 % de descuento en los precios de las modificaciones de todo el catálogo sobre armas y armaduras.<br>A nivel 13, aumenta el porcentaje al 35 %.\r\n<br>A nivel 16, aumenta el porcentaje al 50 %.'),
('Última oportunidad', 'Acción/adicional.', NULL, NULL, 'Al llegar a los 0 PV, puedes realizar una TS de constitución de dificultad 12, si lo superas, vuelves a estabilizarte con 1 PV.<br><br> Si vuelves a caer, puedes realizar la misma tirada añadiendo +5 a la dificultad.<br><br> Podrás lanzar hasta fallar la tirada. Al fallar, se recupera tras un descanso corto.'),
('Último álbum', 'Acción/adicional.', 'Una vez por descanso corto.', NULL, 'Lanza 1d8 y aplica uno de los siguientes efectos.<br>1: Elimina los puntos de cansancio de todos tus aliados y el siguiente punto que obtengan.<br><br>2: Tus aliados obtienen 25 PV temporales.<br>Dura dos rondas/20 minutos.<br><br>3: Tus aliados obtienen +3 de Defensa. Dura una ronda/10 minutos.<br><br>4: Tus aliados obtienen inmunidad a pena-lizadores mentales. Dura dos rondas/20 minutos.<br><br>5: Tus aliados obtienen inmunidad a los estados negativos a excepción de los estados causados por elementos.<br><br>6: Tus aliados recuperan un uso de habilidad de nivel 9 o inferior que ellos elijan.<br><br>7: Tus aliados obtienen +3 al Bonf. de acierto de todos sus ataques y habilidades ofensivas. Dura dos rondas/20 minutos.<br><br>8: Tus aliados se curan una cantidad de PV igual al 25 % de tus PV máximos.'),
('Venganza milenaria', NULL, NULL, NULL, 'Obtienes ventaja en todas tus habilidades ofensivas y acciones de ataque contra seres con la etiqueta de Sastronimus o Sastrodus.'),
('Vida extra', 'Acción/adicional.', 'Una vez por combate.', NULL, 'Puedes curar tus PV lanzando 1d10 + tu nivel de soldado. A nivel 8, puedes realizar esta habilidad dos veces por combate.'),
('Vigor perfecto', 'Acción de ataque.', 'Una vez por descanso largo.', 'Dos rondas/20 minutos.', 'Concentra todo tu poder interior e incrementa tu fuerza, creando un potente estallido en el terreno que estés pisando, causando un leve temblor en un radio de 5 metros adyacentes a ti.<br>El terreno se convierte en terreno difícil y todos los individuos dentro del área sufren 3d12 de daño Contundente y el estado ’Derribado’ si fallan una TS de fuerza de dificultad 12 + Bonf. de sabiduría + Bonf. Competencia.'),
('Visión mental', NULL, NULL, NULL, 'Al cerrar los ojos, en oscuridad absoluta o bajo el estado ’Cegado’, puedes detectar trampas, seres vivos, elementos y magia a través de la mente en un radio de 10 metros adyacentes a ti.'),
('Vitalidad inquebrantable', NULL, NULL, NULL, 'Añade la mitad de tu Bonf. de constitución a tu defensa.'),
('Voluntad de acero', NULL, NULL, NULL, 'Obtienes competencia y ventaja en las TS de sabiduría.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `pregunta` int(11) DEFAULT NULL,
  `foro` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `texto`, `pregunta`, `foro`, `usuario`, `fecha`) VALUES
(127, 'Regla 1.<br>No se permitirá la toxicidad.', NULL, 1, 4, '2023-05-30'),
(128, 'Regla 2.<br>Es importante respetar a los administradores o semi-administradores.', NULL, 1, 4, '2023-05-30'),
(129, 'Regla 3.<br>Mantén una buena vibra.', NULL, 1, 4, '2023-05-30'),
(130, 'Regla 4.<br>Es fundamental comportarse correctamente.', NULL, 1, 4, '2023-05-30'),
(131, 'Regla 5.<br>No se debe hacer spam en los chats.', NULL, 1, 4, '2023-05-30'),
(132, 'Regla 6.<br>Es necesario respetar a los demás.', NULL, 1, 4, '2023-05-30'),
(133, 'Regla 7.<br>Disfruta del momento.', NULL, 1, 4, '2023-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `clase` varchar(100) NOT NULL,
  `habilidad` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`clase`, `habilidad`, `nivel`) VALUES
('Caballero de la mesa redonda', 'Accion adicional', 5),
('Caballero de la mesa redonda', 'Ataque extra', 5),
('Caballero de la mesa redonda', 'Bastion', 5),
('Caballero de la mesa redonda', 'Corazon de guerrero', 16),
('Caballero de la mesa redonda', 'Deber de lucha', 7),
('Caballero de la mesa redonda', 'Destructor de escuadras', 9),
('Caballero de la mesa redonda', 'Determinacion triunfante', 17),
('Caballero de la mesa redonda', 'Estilo caballeresco', 2),
('Caballero de la mesa redonda', 'fulgor', 1),
('Caballero de la mesa redonda', 'fulgor', 8),
('Caballero de la mesa redonda', 'fulgor', 15),
('Caballero de la mesa redonda', 'Golpe de poder', 13),
('Caballero de la mesa redonda', 'Honor de caballero', 3),
('Caballero de la mesa redonda', 'Honor de caballero', 7),
('Caballero de la mesa redonda', 'Honor de caballero', 11),
('Caballero de la mesa redonda', 'Honor de caballero', 15),
('Caballero de la mesa redonda', 'Imposicion feroz', 14),
('Caballero de la mesa redonda', 'Listo para el combate', 6),
('Caballero de la mesa redonda', 'Maldicion del portal', 18),
('Caballero de la mesa redonda', 'Mejora de estadisticas', 4),
('Caballero de la mesa redonda', 'Mejora de estadisticas', 8),
('Caballero de la mesa redonda', 'Mejora de estadisticas', 12),
('Caballero de la mesa redonda', 'Mejora de estadisticas', 16),
('Caballero de la mesa redonda', 'Ultima oportunidad', 11),
('Caballero de la mesa redonda', 'Vitalidad inquebrantable', 10),
('Caballero de la mesa redonda', 'Voluntad de acero', 8),
('Ingeniero', 'Acción adicional', 5),
('Ingeniero', 'Aracnido espía', 1),
('Ingeniero', 'Automatización bélica', 6),
('Ingeniero', 'Baterías de recarga', 18),
('Ingeniero', 'Capa invisible', 8),
('Ingeniero', 'Defensa improvisada', 2),
('Ingeniero', 'Escudo de aviso', 5),
('Ingeniero', 'Granadero furtivo', 16),
('Ingeniero', 'Helices mortales', 13),
('Ingeniero', 'Holograma defensivo', 10),
('Ingeniero', 'Jerga de mecánicos', 1),
('Ingeniero', 'Mejora de estadísticas', 4),
('Ingeniero', 'Mejora de estadísticas', 8),
('Ingeniero', 'Mejora de estadísticas', 12),
('Ingeniero', 'Mejora de estadísticas', 16),
('Ingeniero', 'Muro', 7),
('Ingeniero', 'Patines avanzados', 6),
('Ingeniero', 'Potenciador vital metalico', 14),
('Ingeniero', 'Proyectiles controlados', 4),
('Ingeniero', 'Superioridad defensiva', 17),
('Ingeniero', 'Tornillo reforzado', 9),
('Mago compositor', 'Acción adicional', 5),
('Mago compositor', 'Bendición musical', 17),
('Mago compositor', 'calma nostalgica', 2),
('Mago compositor', 'Cancelado', 5),
('Mago compositor', 'Especializado', 3),
('Mago compositor', 'Gracia artística', 7),
('Mago compositor', 'Inspiración divina', 1),
('Mago compositor', 'Mejora de estadísticas', 4),
('Mago compositor', 'Mejora de estadísticas', 8),
('Mago compositor', 'Mejora de estadísticas', 12),
('Mago compositor', 'Mejora de estadísticas', 16),
('Mago compositor', 'Presión de banda', 14),
('Mago compositor', 'Subida de nivel', 6),
('Mago compositor', 'Subida de nivel', 13),
('Mago compositor', 'Último album', 18),
('Psíquico', 'Acción adicional', 5),
('Psíquico', 'Armadura psíquica', 14),
('Psíquico', 'Ataque extra', 5),
('Psíquico', 'Conexión mental', 2),
('Psíquico', 'Conexión mental', 10),
('Psíquico', 'Cruzado', 18),
('Psíquico', 'Efectos secundarios', 10),
('Psíquico', 'Escudo psíquico', 6),
('Psíquico', 'Fundir mente', 7),
('Psíquico', 'Mejora de estadísticas', 4),
('Psíquico', 'Mejora de estadísticas', 8),
('Psíquico', 'Mejora de estadísticas', 12),
('Psíquico', 'Mejora de estadísticas', 16),
('Psíquico', 'Mentalidad expandida', 4),
('Psíquico', 'Mente calma', 1),
('Psíquico', 'Mente calma', 12),
('Psíquico', 'Mente indomable', 9),
('Psíquico', 'nadie escapa', 3),
('Psíquico', 'Psique natural', 1),
('Psíquico', 'Silenciar mente', 5),
('Psíquico', 'Silenciar mente', 13),
('Psíquico', 'Visión mental', 8),
('Religioso', 'Acción adicional', 5),
('Religioso', 'Acción adicional', 10),
('Religioso', 'Acción adicional', 14),
('Religioso', 'Bastón barato', 6),
('Religioso', 'Envío de vuelta', 6),
('Religioso', 'Erradicar habladurías', 5),
('Religioso', 'Escucha mis plegarias', 17),
('Religioso', 'Foco diestro', 4),
('Religioso', 'Mano de Lorus', 1),
('Religioso', 'Mejora de estadísticas', 4),
('Religioso', 'Mejora de estadísticas', 8),
('Religioso', 'Mejora de estadísticas', 12),
('Religioso', 'Mejora de estadísticas', 16),
('Religioso', 'Pergamino de la aleatoriedad maliciosa', 10),
('Religioso', 'Pergamino de la benevolencia', 11),
('Religioso', 'Protección celestial', 7),
('Religioso', 'Radiante milagroso', 13),
('Religioso', 'Regalo de un dios', 15),
('Religioso', 'Resurrección', 18),
('Religioso', 'Sacrificio altruista', 12),
('Religioso', 'Venganza milenaria', 8),
('Sabio', 'Acción adicional', 5),
('Sabio', 'Aprendizaje místico', 1),
('Sabio', 'Arte de la guerra', 1),
('Sabio', 'Bloquear proyectiles', 3),
('Sabio', 'Concentración', 6),
('Sabio', 'Concentración', 12),
('Sabio', 'Espíritu inquebrantable', 10),
('Sabio', 'Fluidez de combate', 9),
('Sabio', 'Fuerza universal', 2),
('Sabio', 'Golpe de sabiduría', 18),
('Sabio', 'Golpe inconsciente', 5),
('Sabio', 'Mejora de estadísticas', 4),
('Sabio', 'Mejora de estadísticas', 8),
('Sabio', 'Mejora de estadísticas', 12),
('Sabio', 'Mejora de estadísticas', 16),
('Sabio', 'Plumas', 4),
('Sabio', 'Plumas', 14),
('Sabio', 'salto atrás', 7),
('Sabio', 'sintonía universal', 13),
('Sabio', 'Vigor perfecto', 14),
('soldado', 'accion adicional', 2),
('soldado', 'ataque extra', 5),
('soldado', 'Ataque extra', 10),
('soldado', 'en el ojo del huracan', 18),
('soldado', 'estilo de combate', 1),
('soldado', 'Intocable', 9),
('soldado', 'intocable', 14),
('soldado', 'intocable', 17),
('soldado', 'mejora de estadisticas', 4),
('soldado', 'mejora de estadisticas', 8),
('soldado', 'mejora de estadisticas', 12),
('soldado', 'mejora de estadisticas', 16),
('soldado', 'proeza', 7),
('soldado', 'quemarropa', 5),
('soldado', 'rasgo de militancia', 3),
('soldado', 'Rasgo de militancia', 7),
('soldado', 'Rasgo de militancia', 11),
('soldado', 'rasgo de militancia', 15),
('soldado', 'trueque', 6),
('soldado', 'trueque', 13),
('soldado', 'trueque', 16),
('soldado', 'Vida extra', 1),
('soldado', 'vida extra', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `dado` varchar(200) DEFAULT NULL,
  `mediaVida` varchar(200) DEFAULT NULL,
  `habilidad` varchar(1000) DEFAULT NULL,
  `raza` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`nombre`, `descripcion`, `dado`, `mediaVida`, `habilidad`, `raza`) VALUES
('Aflorados', 'Humanos con una enfermedad única que germina el crecimiento de plantas y flores en su sistema orgánico, provocándoles un intenso dolor. Se desconoce el origen de esta enfermedad, pero se cree que pueda ser del planeta Garbadia, situado en la galaxia Andrómeda.', NULL, NULL, 'Obtienes inmunidad al daño elemental ’Natural’ y debilidad al daño elemental ’Fuego’.', 'humano'),
('Altos Elfos', 'Son aquellos que representan la clase alta de la sociedad élfica, además, se distinguen por tener características muy marcadas. Sus cabellos suelen variar entre tonos claros al igual que sus pieles, orejas puntiagudas pero pequeñas como las de un humano y una estatura de 2 metros.<br>La cultura de estos elfos se basa en la vida rica y las tradiciones de la nobleza, siendo la representación de la sociedad moderna y rica.', NULL, NULL, 'Obtienes competencia en la dote ’Persuasión’ y +1 en la estadística de ’Carisma’.', 'Elfos'),
('Androides', 'Los androides son la versión más pura de los robots. Solo se rigen por módulos de comportamiento y órdenes programadas. Son creados para recibir y cumplir su código y no han desarrollado el nucleo de personalidad.', NULL, NULL, 'Al elegir este origen, debes decidirte por un módulo de personalidad limitada, el cual se mantendrá siempre activo. Con una acción, eres capaz de cambiar tu módulo una vez por descanso corto.<br><br>Módulo doméstico: Obtienes +1 a todas tus TS.<br><br>Módulo de protección: Añade +2 a tu defensa base.<br><br><br><br>Módulo de ataque: Obtienes +1 al Bonf. de acierto de todos tus ataques.', 'Robots'),
('Ásperos', 'Humanos nacidos con las peores condiciones físicas, casi esqueléticos y con una resistencia menor que la de un humano común. Su única escapatoria es encerrarse en trajes de hierro que los protegen de sus débiles cuerpos. Tienden a vivir pocos años y sus cuerpos provienen de una extraña mutación aleatoria, única de la humanidad.', NULL, '30 años.', 'Añade +2 a tu defensa base', 'humano'),
('Brutos', 'De gran altura, pueden llegar a medir 2,5 metros. Además de estar cubiertos por un vello abundante, destacan por tener el físico similar al de un gorila. Sin embargo, su inteligencia se ha visto reducida y limitada a la mente de un guerrero. Estos humanos nacen de antiguas colonias en planetas donde la gravedad es mucho mayor, acostumbrando el cuerpo a grandes cargas de peso gravitatorio, atrofiando el cerebro y sus capacidades intelectuales.', '1d12.', NULL, 'Obtienes competencia en la dote ’Aguante', 'humano'),
('Celestinos', 'Son seres albinos cuyos ojos emanan el poder del trueno. Muestran características eléctricas que completan la estética de su energía dorada. Estos humanos se han visto envueltos en el elemento de la electricidad durante décadas, dándoles este aspecto.', NULL, NULL, 'Obtiene resistencia al daño elemental ’Electricidad’ y competencia en la dote ’Reflejos’.', 'humano'),
('Cyborgs', 'Se tratan de cuerpos orgánicos que dependen de la tecnología y las prótesis para seguir viviendo. Un cyborg puede componerse de cualquier otra raza orgánica que haya sustituido sus organos vitales. Entre los mas comunes se encuentran humanos y elfos.', '1d10.', NULL, 'Cuando realizas un ataque de oportunidad, puedes realizar un segundo ataque consecutivo contra el mismo objetivo.', 'Robots'),
('Elfos Lunares', 'Bajo la influencia de la magia y la noche, los elfos lunares, de piel violeta, largas orejas puntiagudas y ojos inundados de un verde fosforescente, son la subraza de elfos más pacífica dentro de la cultura élfica, sin embargo, tienen a grandes guerreros que representan su valor como protectores de sus tribus. Los elfos lunares son elfos místicos que fluyen con la magia y las creencias, son la subraza mas devota a los dioses y sus beneficios, creando varios cultos dentro de las pequeñas tribus que los conforman.', NULL, NULL, 'Obtienes visión nocturna y competencia en la dote ’Religión’.', 'Elfos'),
('Elfos Salvajes', 'Los elfos de esta índole son tribales que viven en las profundidades de las junglas y los bosques, los cuales creen y profesan culturas antiguas, parecidas a las primeras culturas élficas que vanagloriaba la guerra. Esta subraza desconoce el común como idioma universal y se comunican a través del élfico. Visten ropas hechas de la misma naturaleza y siguen fervientemente las tradiciones de sus pueblos.', NULL, NULL, 'Obtienes competencia en las dotes ’Atletismo’ y ’Nadar’.', 'Elfos'),
('Elfos Solaris', 'Representan una de las grandes tribus élficas. De piel oscura, su estatura es la mínima de su especie, llegando hasta 1.75 metros. Viven en los desiertos y zonas cálidas, siendo la parte de la sociedad más activa en el apartado industrial. Durante las guerras élficas, los elfos solaris fueron parte importante del ejercito unificado. Tras la victoria, fueron recompensados con el control total del mercado nómada.', NULL, NULL, 'Obtienes +2 en las tira-\r\ndas de salvación de ’Constitución’.', 'Elfos'),
('Enanos de las Forjas', 'Enanos que viven por y para el trabajo y el funcionamiento de las grandes máquinas que mantienen encendidas las ciudades enanas. El aspecto de estos enanos se ve afectada por el calor de las grandes calderas, tostando sus pieles en una tez morena y un cabello casi negro como la calborita.', '[value-3]', '[value-4]', 'Obtienes inmunidad al daño elemental ’Fuego’.', 'Enanos'),
('Enanos de las Guerras', 'Enanos preparados para las constantes guerras a las que se enfrentan diariamente. Su cultura es puramente barbárica y utilizan la tecnología sin el conocimiento necesario, acabando con sus enemigos de forma burda. Llenos de runas, estos enanos nacen con el propósito de combatir contra los enemigos del pueblo enano, tatuándose frases de las antiguas guerras para tener suerte en el campo de batalla.', NULL, NULL, 'Obtienes inmunidad al daño elemental ’Contundente’.', 'Enanos'),
('Enanos de las Minas', 'Estos enanos viven como ermitaños en las minas abandonadas de las antiguas guerras en planetas inhóspitos. Se han acostumbrado al ambiente tóxico de algunos elementos, ofreciéndoles gran resistencia al veneno. De barbas y cabellos largos, el color del mismo se torna rojo como la sangre, además de la blanca piel que rara vez ve el sol.', NULL, NULL, 'Obtienes inmunidad al daño elemental ’Veneno’.', 'Enanos'),
('Forjas', 'Se tratan de modelos primitivos de los robots. Aunque son pocos los que aún quedan, se mantienen en buen estado y son utilizados para situaciones de guerra. Utilizan combustible para mantenerse activos y han desarrollado un ’Alma artificial’, cuya comprensión aún esta en estudio.', NULL, NULL, 'Con una acción de ataque, eres capaz de causar el estado ’Derribado’ si estás a 1 metro de un objetivo.<br>Una vez por descanso largo.', 'Robots'),
('Humanos 2000', 'Humanos criogenizados a finales de la Tercera Guerra Mundial, fueron despertados 1001 años más tarde. Se les encontró en unas viejas instalaciones subterráneas de Marte y poco a poco se integraron en la nueva sociedad. Estos humanos son genéticamente diferentes a los actuales pero con rasgos y características similares. La única barrera que los separa es la cultura y el idioma.', NULL, '80 años.', 'Obtienes competencia en las dotes ’Historia’ e ’Investigación’.', 'humano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `dado` varchar(200) NOT NULL,
  `mediaVida` varchar(200) NOT NULL,
  `idioma` varchar(200) NOT NULL,
  `habilidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`nombre`, `descripcion`, `imagen`, `dado`, `mediaVida`, `idioma`, `habilidad`) VALUES
('Arcángeles', 'Los arcángeles son almas elegidas por los serafines del Pancelonium, que deciden que almas podrán reencarnar en un arcángel.<br><br>Estos tienen la libertad de elegir si quedarse en el universo celestial o volver al universo físico.<br><br>El Pancelonium existe en la dimensión conocida como ’El universo celestial’, donde residen los dioses desde antes de nuestra creación e incluso la creación de nuestra dimensión, llamada ’El universo físico’.<br><br>El Pancelonium es la ciudad creada por los dioses donde residen los arcangeles.Tiene la estética de una ciudad futurista, con los colores blanco y dorado que adornan los cuerpos de los arcangeles, vigilados por los tronos y custodiado por los querubines, soldados de marmol creados por los serafines, jueces del Pancelonium.', 'img/arcangelCompleto.png', '1d10.', 'Indeterminado.', 'Trascendente.', 'Puedes resucitar tras fallecer 1 vez. La resurrección ocurre tras pasar 1 hora.'),
('Demonios', 'Los demonios son almas que reencarnan por accidente en el Sastronimus, su aspecto físico puede variar de diversas formas.<br><br>Estos no se atan al universo celestial, pudiendo viajar libremente al universo físico.<br><br>El Sastronimus es la otra mitad del universo celestial. Creado por los 9 Sastres, es un lugar que se baña en distintos tonos de rojo, desde el cielo hasta el suelo y las edificaciones, separando este lugar en 9 paredes de niebla carmesí con funciones únicas.<br><br>Dentro del Sastronimus nacen los demonios, los diablos, que son la evolución de aquellos demonios que quedan dentro del universo celestial, los Lucifinicos, también conocidos como los gigantes del Sastronimus, seres de un rango superior a los diablos y cercanos a los Sastres, quienes controlan y manipulan todo aquello que se encuentre dentro de su territorio.', 'img/demonioCompleto.png', '1d10.', 'Indeterminado.', 'Abysal.', 'Obtienes competencia en las dotes ’Mentir’ y ’Persuasión’.'),
('Elfos', 'Nacidos en un planeta vecino al antiguo sistema solar, los elfos crecieron mucho antes que los humanos en la Vía Láctea, en el planeta Alfa Centauri B.<br><br>Hace 2.000.000 millones de años A.C., los elfos existían en sociedad mucho antes de que los primeros humanos empezasen a usar lanzas y piedras, viviendo separados por sus diferencias culturales, siendo la subraza dominante, y futura unificadora de todas, los altos elfos.<br><br>Los elfos comunes son similares a los humanos a excepción de sus orejas puntiagudas, al igual que el resto de sus tribus.', 'img/elfoCompleto.png', '1d10.', '5.000 años.', 'Élfico.', 'Obtienes visión nocturna y competencia en la dote ’Reflejos’.'),
('Enanos', 'Los enanos son una raza entregada completamente a la guerra. Su sociedad está dividida en una jerarquía tecnológica. Mientras que el ejército obtiene la tecnología más avanzada, sus ciudadanos conviven con versiones más anticuadas.<br><br>Es por esto que su sociedad se ha fragmentado en diferentes gremios. Los enanos pueden medir un promedio de 1.4 metros y tener largas extensiones de cabello o vello corporal.<br><br>Como curiosidad, tanto los nombres como los apellidos de los enanos se escriben bajo la norma del palíndromo, es decir, se leen igual desde el inicio o desde el final de la palabra.<br><br>Durante las guerras contra los marwas, uno de los guerreros mas reconocidos entre los enanos fue Palilap Grorg.', 'img/enanoCompleto.png', '1d12.', '800-900 años.', 'Rulur.', 'Obtienes inmunidad al daño ’Mágico’.'),
('Holous', 'Estos nacen tras la muerte de un ser orgánico, dentro del sector maldito.<br><br>Este sector se encuentra dentro de la Vía Láctea y esta maldito por la magia de un planeta nigromante.<br><br>Todo ser que muera en este sector, renacerá como el esqueleto de su estructura interior, sin recuerdos de su vida pasada.<br><br>El nombre ’Holou’ significa ’Aún vivo’ en el idioma de los espectros, es por eso que se les nombra así, pues renacen de la muerte para seguir viajando por el universo una vez mas. Normalmente no suelen ser bien aceptados por las razas mas tradicionales, sin embargo, encuentran hueco entre los robots y comunidades de seres marginados.', 'img/holouCompleto.png', '1d6.', '3-5 años.', 'Poltergeisen.', 'Obtienes resistencia a todo tipo de daño a excepción del daño ’Tesla’, ’Plasma’ y ’Mágico’. Obtienes debilidad al daño elemental ’Radiante’ y no puedes utilizar armaduras pesadas.'),
('Humano', 'Desde el año 200.000 A.C. hasta nuestros días, la humanidad ha seguido los mismos eventos históricos que nuestra realidad, con pequeños cambios indiferentes. El impacto de un meteorito produjo un avance tecnológico desmesurado. Muchas de las naciones del momento se hicieron con tal poder y crearon desigualdad social en sus paises, mientras otros lo utilizaron para prosperar.<br><br>El meteorito caído en el 2015 ofreció a los humanos un conocimiento tecnológico tan avanzado, que durante los 4 próximos años fueron capaces de poblar Marte y el resto de planetas del sistema solar.<br><br>La Tierra es desintegrada tras la Tercera Guerra Mundial en el 2019. Actualmente, la cuna de la humanidad se encuentra en Marte y la Luna ha ocupado la órbita de La Tierra.', 'img/humanoCompleto.png', '1d10.', '100-300 años.', 'Común', 'Obtienes competencia en las dotes ’Hechicería’ y ’Religión’.'),
('Robots', 'Creación original de la humanidad, los robots nacieron de un fallo en el código que les permitió desarrollar el ’núcleo de personalidad’, una parte importante dentro del cuerpo robótico que les permitió escapar de las órdenes programadas.<br><br>Los robots, en un principio, se rebelaron contra los humanos hasta obtener sus derechos. Tras pocos años después del primer caso, pudieron desarrollar comunidades propias y culturas basadas en creencias mas allá de la comprensión orgánica.', 'img/robotCompleto.png', '1d12.', 'Indefinido', 'binario', 'Obtienes inmunidad a todos los penalizadores mentales y al daño psíquico y debilidad al daño elemental ’Electricidad’. Puedes ser hackeado si un individuo se encuentra a 1 metro de tu posición y super');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `contrasena` varchar(1000) NOT NULL,
  `usuario` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `email`, `fechaNacimiento`, `contrasena`, `usuario`, `id`) VALUES
('Santiago', 'Romero Alba', 'santiagorome@hotmail.es', '2023-05-02', 'a740486850d52ca0e382bc06b5d8fb0c', 'Maeselink', 1),
('Juanjo', 'Martinez', 'ajuanjojjj@gmail.com', '0000-00-00', '4433d4795ccb063aa326d50daed21fe7', 'ajuanjojjj', 2),
('Santiesunbuenestudiante', 'Lamamadesanti', 'a111222333444555666777888999@hotmail.com', '2001-12-21', 'f7bdf2c08ceb263cefd1c1aba131e44f', 'santiesunbuenestu', 3),
('Administrador', 'Administrador', 'admin@admin.es', '2023-05-21', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Administrador', 4),
('ChupiTrupi', 'Martínez', 'chupitrupi@hotmail.com', '2011-08-21', '211021d2b119d78fe0e0d4d29eeff687', 'ChupiTrupi', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creador` (`creador`);

--
-- Indices de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `mensaje_ibfk_2` (`pregunta`),
  ADD KEY `mensaje_ibfk_1` (`foro`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`clase`,`habilidad`,`nivel`),
  ADD KEY `habilidad` (`habilidad`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `raza` (`raza`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Usuario` (`usuario`) USING HASH;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`creador`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`foro`) REFERENCES `foro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensaje_ibfk_2` FOREIGN KEY (`pregunta`) REFERENCES `mensaje` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mensaje_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD CONSTRAINT `nivel_ibfk_1` FOREIGN KEY (`habilidad`) REFERENCES `habilidad` (`Nombre`),
  ADD CONSTRAINT `nivel_ibfk_2` FOREIGN KEY (`clase`) REFERENCES `clase` (`Nombre`);

--
-- Filtros para la tabla `origen`
--
ALTER TABLE `origen`
  ADD CONSTRAINT `origen_ibfk_1` FOREIGN KEY (`raza`) REFERENCES `raza` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
