-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:02:22
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solvam_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `codigo` int(3) unsigned zerofill NOT NULL DEFAULT '000',
  `nombre` varchar(15) DEFAULT NULL,
  `apellidos` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigo`, `nombre`, `apellidos`) VALUES
(001, 'Ana', 'Lopez Garcia'),
(002, 'Maria', 'Ruiz Bernet'),
(003, 'Alejandro', 'Gomez Mora'),
(004, 'Sergio', 'Moreno Lozano'),
(005, 'Sandra', 'Fernandez picas'),
(006, 'David', 'Pedroche Simon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE IF NOT EXISTS `ciclos` (
  `codigo` varchar(3) NOT NULL DEFAULT '',
  `ciclo` varchar(50) DEFAULT NULL,
  `grado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`codigo`, `ciclo`, `grado`) VALUES
('DAW', 'Desarrollo de Aplicaciones Web', 'CFGS'),
('DFM', 'Diseño Fabricación Mecánica', 'CFGS'),
('SMR', 'Sistemas Microinformáticos y Redes', 'CFGM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `codigo` varchar(5) NOT NULL DEFAULT '',
  `curso` varchar(50) DEFAULT NULL,
  `cod_ciclo` varchar(3) DEFAULT NULL,
  `turno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`codigo`, `curso`, `cod_ciclo`, `turno`) VALUES
('1DAW', '1ºDAW', 'DAW', 'Mañanas'),
('1DFM', '1ºDFM', 'DFM', 'Tardes'),
('1SMR', '1ºSMR', 'SMR', 'Mañanas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE IF NOT EXISTS `matriculas` (
  `codigo` int(10) NOT NULL DEFAULT '0',
  `cod_alumno` int(3) unsigned zerofill DEFAULT NULL,
  `cod_modulo` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`codigo`, `cod_alumno`, `cod_modulo`) VALUES
(1, 001, 1),
(2, 002, 2),
(3, 003, 3),
(4, 003, 4),
(5, 003, 5),
(6, 004, 1),
(7, 005, 2),
(8, 006, 3),
(9, 001, 4),
(10, 002, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `codigo` int(10) unsigned NOT NULL DEFAULT '0',
  `modulo` varchar(15) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `cod_curso` varchar(5) DEFAULT NULL,
  `cod_profesor` int(2) unsigned zerofill DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`codigo`, `modulo`, `nombre`, `cod_curso`, `cod_profesor`) VALUES
(1, 'BB.DD', 'Bases de datos', '1DAW', 01),
(2, 'S.I', 'Sistemas informaticos', '1SMR', 02),
(3, 'D.E', 'Developement environment', '1DAW', 03),
(4, 'Rds', 'Redes', '1SMR', 03),
(5, 'D.P.', 'Diseño', '1DFM', 02);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `codigo` int(2) unsigned zerofill NOT NULL DEFAULT '00',
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`codigo`, `nombre`, `apellido`) VALUES
(01, 'Benito', 'Camela'),
(02, 'Fancisco', 'Ñete'),
(03, 'Tomas', 'Turbado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(3) NOT NULL DEFAULT '',
  `usuario` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellido`, `password`) VALUES
('MRC', 'espinete', 'Mariano', 'Rajoy Caco', 'chinchin'),
('PIR', 'maduropower', 'Pablo', 'Iglesias Rojo', 'ilovevenezuela'),
('PSN', 'barcohundido', 'Pedro', 'Sanchez Nimando', 'podemosrules');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod_ciclo` (`cod_ciclo`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod_alumno` (`cod_alumno`),
  ADD KEY `cod_modulo` (`cod_modulo`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod_curso` (`cod_curso`),
  ADD KEY `cod_profesor` (`cod_profesor`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`cod_ciclo`) REFERENCES `ciclos` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`cod_alumno`) REFERENCES `alumnos` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`cod_modulo`) REFERENCES `modulos` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`cod_curso`) REFERENCES `cursos` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `modulos_ibfk_2` FOREIGN KEY (`cod_profesor`) REFERENCES `profesores` (`codigo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
