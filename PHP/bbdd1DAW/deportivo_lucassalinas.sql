-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:00:51
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deportivo_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE IF NOT EXISTS `deportes` (
  `codigo` tinyint(3) unsigned NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`codigo`, `nombre`, `precio`) VALUES
(1, 'Tennis', 25.00),
(2, 'Natacion', 45.00),
(3, 'Basquet', 28.50),
(4, 'Voley', 20.50),
(5, 'Paddle', 29.50),
(6, 'Futbol', 15.00),
(7, 'Karate', 22.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE IF NOT EXISTS `inscritos` (
  `codigo` int(11) NOT NULL,
  `dni` char(8) NOT NULL,
  `codigodeporte` tinyint(3) unsigned NOT NULL,
  `curso` year(4) NOT NULL,
  `cuota` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscritos`
--

INSERT INTO `inscritos` (`codigo`, `dni`, `codigodeporte`, `curso`, `cuota`) VALUES
(7, '11111111', 1, 2005, 's'),
(8, '11111111', 1, 2006, 's'),
(11, '22222222', 2, 2006, 's'),
(13, '22222222', 1, 2006, 's'),
(14, '33333333', 6, 2006, 'n'),
(16, '33333333', 6, 2007, 'n'),
(17, '44444444', 2, 2006, 's'),
(18, '44444444', 1, 2005, 'n'),
(21, '88888888', 1, 2005, 'n'),
(22, '88888888', 4, 2006, 'n'),
(24, '77777777', 6, 2005, 'n'),
(25, '77777777', 6, 2007, 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE IF NOT EXISTS `socios` (
  `dni` char(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`dni`, `nombre`, `email`) VALUES
('11111111', 'Juan Perez', 'jp@hotmail.com'),
('22222222', 'Ana Garcia', 'anagar@hotmail.com'),
('33333333', 'Hector Fuentes', 'hfuentes@hotmail.com'),
('44444444', 'Marta Molina', 'martamol@hotmail.com'),
('55555555', 'Jose Perez', 'jperez@hotmail.com'),
('66666666', 'Ahinoa Garcia', 'agarcia@hotmail.com'),
('77777777', 'Victor Fuentes', 'vfuentes@hotmail.com'),
('88888888', 'Maria Molina', 'mamolina@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `dni` (`dni`),
  ADD KEY `codigodeporte` (`codigodeporte`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`dni`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD CONSTRAINT `inscritos_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `socios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscritos_ibfk_2` FOREIGN KEY (`codigodeporte`) REFERENCES `deportes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
