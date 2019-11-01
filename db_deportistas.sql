-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2019 a las 22:59:08
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_deportistas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `disciplina` varchar(25) NOT NULL,
  `celular` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `DNI` int(8) NOT NULL,
  `id_facultad_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Datos personales';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copas`
--

CREATE TABLE `copas` (
  `edicion` varchar(10) NOT NULL,
  `año` int(11) DEFAULT NULL,
  `ganador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `copas`
--

INSERT INTO `copas` (`edicion`, `año`, `ganador`) VALUES
('10°', 1993, 5),
('11°', 1994, 6),
('12°', 1995, 5),
('13°', 1996, 5),
('14°', 1997, 5),
('15°', 1998, 5),
('16°', 1999, 5),
('17°', 2000, 5),
('18°', 2001, 6),
('19°', 2002, 5),
('1°', 1984, 5),
('20°', 2003, 5),
('21°', 2004, 6),
('22°', 2005, 5),
('23°', 2006, 5),
('24°', 2007, 5),
('25°', 2008, 6),
('26°', 2009, 6),
('27°', 2010, 6),
('28°', 2011, 6),
('29°', 2012, 6),
('2°', 1985, 12),
('30°', 2013, 6),
('31°', 2014, 6),
('32°', 2015, 6),
('33°', 2016, 6),
('34°', 2017, 6),
('35°', 2018, 6),
('36°', 2019, 5),
('3°', 1986, 12),
('4°', 1987, 12),
('5°', 1988, 6),
('6°', 1989, 6),
('7°', 1990, 6),
('9°', 1992, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `nombre_facultad` varchar(15) NOT NULL COMMENT 'nombre de la facultad ',
  `sede` varchar(10) NOT NULL COMMENT 'nombre de la sede donde está ubicada la facultad',
  `historia` text NOT NULL COMMENT 'historia de la facultad relacionada a olimpiadas: colores, mascota, apodo.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id_facultad`, `nombre_facultad`, `sede`, `historia`) VALUES
(15, 'Olimpiadas', '', 'En el año 1983, cuando terminó el proceso militar, nació el proyecto de las Olimpiadas por iniciativa de los deportistas de Veterinarias y de Económicas, quienes llevaron este planteo a la secretaría de deportes con el fin de incentivar a todas las facultades de las sedes de UNICEN a la actividad deportiva, siendo la ciudad de Tandil el núcleo para desarrollar la misma.\r\n\r\nCon todo este movimiento surgió la primera mascota de las Olimpiadas Intercede llamada “Piada”, a quien le dió su origen la secretaria de deporte de ese momento llamada Carolina.\r\n\r\nLos primeros años estuvieron abocados principalmente a deportes, donde se practicaba canotaje, tiro y las pruebas de atletismo, que se desarrollaban en las pistas con salto en alto y largo. Las distintas alternativas se fueron adaptando a la actualidad para una mayor integración de los estudiantes, quienes mediante su voto fueron generando este cambio.\r\n\r\nEsta organización se sostuvo los primeros años con el trabajo de los profesores, que mantenían toda esta estructura con las recaudaciones que se hacían a través de los bailes olímpicos en el Club Independiente.\r\n\r\nAl pasar los años, este evento empezó a tomar tal magnitud que era imposible para la Secretaría de Deportes sostener su estructura solamente con los fondos originados de los bailes olímpicos. Cuando la Universidad toma conciencia de esta situación busca evitar que se pierda el espacio generado por los estudiantes, considerándola de interés universitario, pasando la misma a ser parte del presupuesto de la UNICEN para su financiación.'),
(16, 'Agronomía', 'Azul', 'Por el momento no tienen una mascota definida.\r\n\r\nLos colores que utilizan son el bordó y el blanco.'),
(17, 'Arte', 'Tandil', 'Adoptaron como mascota al arlequín.\r\n\r\nSus colores varían entre las tonalidades del rojo. Sus camisetas suelen ser color azul violáceo y rojo.'),
(18, 'Derecho', 'Azul', 'Esta facultad si bien no tiene del todo definida su mascota, el logo de las remeras de sus equipos es un cuervo. Los jugadores decidieron poner esta mascota porque a los abogados se los suele identificar con ese animal.\r\n\r\nLos colores con lo que los vas a poder identificar son el magenta y el azul.'),
(19, 'Económicas', 'Tandil', 'Según cuenta la leyenda, los actuales contadores Gabriel Dadiego y Mario Cabitto fueron designados para establecer el apodo del Centro de estudiantes y los colores que se usarían en olimpiadas.\r\n\r\nEllos, hinchas de Estudiantes de La Plata uno y de Racing Club el otro, hicieron ostentación de esa condición para elegir el apodo de \"León\" y los colores celeste y blanco.'),
(20, 'Exactas', 'Tandil', 'Según el boca en boca, la facultad de Exactas es representada por el gallo debido a que hace mucho tiempo, veterinarias hizo una canción llamándoles gallinas y ellos les retrucaron con otra canción autoproclamándose gallos, alegando a la fiereza combativa de dicho animal.\r\n\r\nEn cuanto a los colores, la historia se remonta a las primeras olimpiadas donde no existía ningún tipo de presupuesto para las remeras. Ante esto, el Club Santamarina les prestó remeras suyas de color oro y negro.'),
(21, 'Humanas', 'Tandil', 'Su mascota es Boxitracio, un personaje inventado por García Ferré para la serie Hijitus. El prefijo “Boxi” anticipa de alguna manera la condición de boxeador del animal.\r\n\r\nSus colores son el azul y el oro.'),
(22, 'Ingeniería', 'Olavarria', 'En el año 2016 se largó una encuesta por Facebook, para que los alumnos puedan decidir la misma, en donde la mascota que obtuvo más votos fue un Lobo.\r\n\r\nLos colores con los cuales lo vamos a encontrar son verde oscuro y blanco; éstos pueden ser combinados con azul en ciertas ocasiones, ya que este color forma parte del logo del centro de estudiantes.'),
(23, 'Quequén', 'Quequén', 'EL origen de su mascota es reciente, la misma es un duende. La historia del porqué se eligió esta mascota viene dada porque en los alrededores del predio, donde se encuentra la sede, está rodeado de gnomos.\r\n\r\nTomando de esta misma manera sus colores, un azul marino, medio verdoso, por el mar.'),
(24, 'Salud', 'Olavarría', 'Se identifican con los colores verde y azul.\r\n\r\nNo tienen mascota por el momento.'),
(25, 'Sociales', 'Olavarría', 'Sus colores son el naranja y el negro.\r\n\r\nPor el momento no tienen definida una mascota.'),
(26, 'Veterinarias', 'Tandil', 'Son conocidos como los borrachos del tablón, no tienen una mascota bien definida, pero el resto de las facultades lo representan con un paisano. Por los equipos de futsal femenino y básquet se vienen representando con el chancho.\r\n\r\nSus colores vienen definidos porque mundialmente la cruz violeta es representativa de la veterinaria, junto con el blanco y negro.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `copas`
--
ALTER TABLE `copas`
  ADD PRIMARY KEY (`edicion`),
  ADD KEY `fk_copas_facultad` (`ganador`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
