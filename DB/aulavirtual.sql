-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-07-2018 a las 15:49:44
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aulavirtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(20) NOT NULL,
  `password` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `tipo` text NOT NULL,
  `foto` text NOT NULL,
  `email` text NOT NULL,
  `ciudad_origen` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tel_fijo` text NOT NULL,
  `tel_cel` text NOT NULL,
  `curso` text NOT NULL,
  `online` int(5) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  UNIQUE KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `password`, `nombre`, `apellido`, `tipo`, `foto`, `email`, `ciudad_origen`, `fecha_nacimiento`, `tel_fijo`, `tel_cel`, `curso`, `online`) VALUES
(3245, '3245', 'juancito', 'perez', 'Alumno secundaria', 'account-box.png', 'juancito@gmail.com', 'Bahia blanca', '2018-07-18', '4810613', '154298700', '105', 1),
(3356, '3356', 'pedrito', 'ramirez', 'Alummno secundaria', 'account-box.png', 'pedrito@gmail.com', 'bahia blanca', '2017-12-11', '4810613', '154298700', '106', 0),
(7888, '7888', 'pablo', 'ramirez', 'alummno', 'account-box.png', 'pablo@gmail.com', 'bahia blanca', '2018-07-18', '6565456465', '565456456456', '', 1),
(9987, '9987', 'daniela', 'perez', 'Alummno', 'account-box.png', 'daniela@gmail.com', 'suarez', '2018-07-26', '2914810613', '2914298700', '105', 1),
(31439073, '16423', 'nestor', 'Urrutia', 'Alumno', 'account-box.png', 'nestor_urrutia@yahoo.com.ar', 'bahia blanca', '1984-12-24', '02914810613', '02911544298700', '105', 1),
(32071226, '16423', 'Maria Lucrecia', 'Marsal', 'Alumno', 'account-box.png', 'lucreciamarsal@gmail.com', 'Bahia blanca', '2018-07-17', '5465456', '454654654', '106', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(10) NOT NULL,
  `docente` varchar(20) NOT NULL,
  `materias` text NOT NULL,
  `horario` varchar(30) NOT NULL,
  `aula` text NOT NULL,
  `turno` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `docente`, `materias`, `horario`, `aula`, `turno`) VALUES
(105, 'Patricia', 'matemática, física, química, lengua, ingles, educación física', '8hs a 13hs', '5', 'mañana'),
(106, 'Carme', 'matemática, física, química, lengua, ingles, educación física', '13hs a 18hs', '6', 'tarde');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
