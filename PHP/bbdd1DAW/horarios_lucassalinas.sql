-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:01:21
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horarios_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `nombre` varchar(25) DEFAULT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  `numAula` int(11) DEFAULT NULL,
  `nomProfesor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE IF NOT EXISTS `aula` (
  `numAula` int(11) NOT NULL DEFAULT '0',
  `capacidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`numAula`, `capacidad`) VALUES
(111, 50),
(222, 50),
(333, 50),
(444, 95),
(555, 95),
(666, 60),
(777, 60),
(888, 60),
(999, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula_con_pizarra`
--

CREATE TABLE IF NOT EXISTS `aula_con_pizarra` (
  `numAula` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aula_con_pizarra`
--

INSERT INTO `aula_con_pizarra` (`numAula`) VALUES
(222),
(333),
(444),
(555),
(666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula_informatica`
--

CREATE TABLE IF NOT EXISTS `aula_informatica` (
  `numAula` int(11) NOT NULL DEFAULT '0',
  `numOrdenadores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aula_informatica`
--

INSERT INTO `aula_informatica` (`numAula`, `numOrdenadores`) VALUES
(111, 25),
(777, 30),
(888, 30),
(999, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizarra`
--

CREATE TABLE IF NOT EXISTS `pizarra` (
  `numAula` int(11) NOT NULL DEFAULT '0',
  `ancho` decimal(5,2) DEFAULT NULL,
  `alto` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pizarra`
--

INSERT INTO `pizarra` (`numAula`, `ancho`, `alto`) VALUES
(222, 122.00, 100.00),
(333, 122.00, 100.00),
(444, 200.00, 100.00),
(555, 200.00, 100.00),
(666, 150.00, 100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `nombre` varchar(40) NOT NULL DEFAULT '',
  `departamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`nombre`, `departamento`) VALUES
('Profesor1', 'Informática'),
('Profesor2', 'Informática'),
('Profesor3', 'Informática'),
('Profesor4', 'Matemáticas'),
('Profesor5', 'Idiomas'),
('Profesor6', 'Idiomas'),
('Profesor7', 'Administrativo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`nomProfesor`),
  ADD KEY `numAula` (`numAula`),
  ADD KEY `nomProfesor` (`nomProfesor`);

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`numAula`);

--
-- Indices de la tabla `aula_con_pizarra`
--
ALTER TABLE `aula_con_pizarra`
  ADD PRIMARY KEY (`numAula`),
  ADD KEY `numAula` (`numAula`);

--
-- Indices de la tabla `aula_informatica`
--
ALTER TABLE `aula_informatica`
  ADD PRIMARY KEY (`numAula`),
  ADD KEY `numAula` (`numAula`);

--
-- Indices de la tabla `pizarra`
--
ALTER TABLE `pizarra`
  ADD PRIMARY KEY (`numAula`),
  ADD KEY `numAula` (`numAula`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`nombre`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`numAula`) REFERENCES `aula` (`numAula`),
  ADD CONSTRAINT `asignatura_ibfk_2` FOREIGN KEY (`nomProfesor`) REFERENCES `profesor` (`nombre`);

--
-- Filtros para la tabla `aula_con_pizarra`
--
ALTER TABLE `aula_con_pizarra`
  ADD CONSTRAINT `aula_con_pizarra_ibfk_1` FOREIGN KEY (`numAula`) REFERENCES `aula` (`numAula`);

--
-- Filtros para la tabla `aula_informatica`
--
ALTER TABLE `aula_informatica`
  ADD CONSTRAINT `aula_informatica_ibfk_1` FOREIGN KEY (`numAula`) REFERENCES `aula` (`numAula`);

--
-- Filtros para la tabla `pizarra`
--
ALTER TABLE `pizarra`
  ADD CONSTRAINT `pizarra_ibfk_1` FOREIGN KEY (`numAula`) REFERENCES `aula_con_pizarra` (`numAula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
