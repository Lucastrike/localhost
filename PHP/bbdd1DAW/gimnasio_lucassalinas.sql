-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:01:14
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE IF NOT EXISTS `administrativo` (
  `dni_administrativo` char(8) CHARACTER SET utf8 NOT NULL,
  `salario` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparte`
--

CREATE TABLE IF NOT EXISTS `imparte` (
  `codigo_imparte` int(11) NOT NULL,
  `actividad` int(11) NOT NULL,
  `monitor` char(9) CHARACTER SET utf8 NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `dni_monitor` char(9) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `dni` char(8) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(15) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza`
--

CREATE TABLE IF NOT EXISTS `realiza` (
  `codigo_realiza` int(11) NOT NULL,
  `usuario` char(9) CHARACTER SET utf8 NOT NULL,
  `actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `dni` char(9) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(11) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(11) CHARACTER SET utf8 NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD KEY `dni_administrativo` (`dni_administrativo`);

--
-- Indices de la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD UNIQUE KEY `monitor` (`monitor`,`actividad`),
  ADD KEY `codigo_imparte` (`codigo_imparte`),
  ADD KEY `actividad` (`actividad`);

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD KEY `dni_monitor` (`dni_monitor`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `realiza`
--
ALTER TABLE `realiza`
  ADD UNIQUE KEY `usuario` (`usuario`,`actividad`),
  ADD KEY `codigo_realiza` (`codigo_realiza`),
  ADD KEY `actividad` (`actividad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD KEY `dni` (`dni`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD CONSTRAINT `administrativo_ibfk_1` FOREIGN KEY (`dni_administrativo`) REFERENCES `personal` (`dni`);

--
-- Filtros para la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD CONSTRAINT `imparte_ibfk_1` FOREIGN KEY (`monitor`) REFERENCES `monitor` (`dni_monitor`),
  ADD CONSTRAINT `imparte_ibfk_2` FOREIGN KEY (`actividad`) REFERENCES `actividad` (`codigo`);

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `monitor_ibfk_1` FOREIGN KEY (`dni_monitor`) REFERENCES `personal` (`dni`);

--
-- Filtros para la tabla `realiza`
--
ALTER TABLE `realiza`
  ADD CONSTRAINT `realiza_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`dni`),
  ADD CONSTRAINT `realiza_ibfk_2` FOREIGN KEY (`actividad`) REFERENCES `actividad` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
