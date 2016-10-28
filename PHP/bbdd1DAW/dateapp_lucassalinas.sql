-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:00:26
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dateapp_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `codigo` int(3) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `codigo_pais` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`codigo`, `ciudad`, `codigo_pais`) VALUES
(1, 'Valencia', 1),
(2, 'Madridddd', 1),
(3, 'Barcelona', 1),
(4, 'Zaragoza', 1),
(6, 'Manchester', 2),
(7, 'Bristol', 2),
(8, 'Bournemouth', 2),
(9, 'Paris', 3),
(10, 'New York', 4),
(11, 'Otawa', 5),
(12, 'Tokyo', 6),
(13, 'Cuenca', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likke`
--

CREATE TABLE IF NOT EXISTS `likke` (
  `codigo` int(8) NOT NULL,
  `match` char(2) NOT NULL DEFAULT 'No',
  `cod_user1` int(8) NOT NULL,
  `cod_user2` int(8) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `likke`
--

INSERT INTO `likke` (`codigo`, `match`, `cod_user1`, `cod_user2`, `fecha`) VALUES
(1, 'Si', 1, 6, '2016-03-16'),
(2, 'Si', 3, 8, '2016-04-21'),
(3, 'No', 5, 10, NULL),
(4, 'No', 7, 8, NULL),
(5, 'No', 9, 2, NULL),
(6, 'No', 2, 1, NULL),
(7, 'No', 4, 3, NULL),
(8, 'Si', 6, 1, '2016-03-16'),
(9, 'Si', 8, 3, '2016-04-21'),
(10, 'No', 10, 9, NULL),
(11, 'Si', 4, 5, '2016-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `codigo` int(3) NOT NULL,
  `pais` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`codigo`, `pais`) VALUES
(1, 'España'),
(2, 'Reino Unido'),
(3, 'Francia'),
(4, 'EE.UU'),
(5, 'Canada'),
(6, 'China'),
(7, 'India');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(8) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `edad` tinyint(2) NOT NULL,
  `codigo_ciudad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre`, `edad`, `codigo_ciudad`) VALUES
(1, 'Lucas', 25, 1),
(2, 'Sara', 21, 1),
(3, 'Tony', 24, 2),
(4, 'Elena', 25, 2),
(5, 'Victor', 18, 1),
(6, 'Claudia', 27, 1),
(7, 'Fran', 22, 2),
(8, 'Lola', 26, 2),
(9, 'Alberto', 24, 1),
(10, 'Elisa', 22, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_pais` (`codigo_pais`);

--
-- Indices de la tabla `likke`
--
ALTER TABLE `likke`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `cod_user1_2` (`cod_user1`,`cod_user2`),
  ADD KEY `cod_user1` (`cod_user1`),
  ADD KEY `cod_user2` (`cod_user2`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_ciudad` (`codigo_ciudad`),
  ADD KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `likke`
--
ALTER TABLE `likke`
  MODIFY `codigo` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`codigo_pais`) REFERENCES `paises` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `likke`
--
ALTER TABLE `likke`
  ADD CONSTRAINT `likke_ibfk_1` FOREIGN KEY (`cod_user1`) REFERENCES `usuario` (`codigo`),
  ADD CONSTRAINT `likke_ibfk_2` FOREIGN KEY (`cod_user2`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`codigo_ciudad`) REFERENCES `ciudades` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
