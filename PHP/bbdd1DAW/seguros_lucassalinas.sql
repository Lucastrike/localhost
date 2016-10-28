-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:02:14
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguros_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE IF NOT EXISTS `administrativo` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `categoria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrativo`
--

INSERT INTO `administrativo` (`dni`, `categoria`) VALUES
('11111111E', 'administrativos'),
('22222222E', 'administrativos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE IF NOT EXISTS `beneficiario` (
  `dni` char(9) NOT NULL DEFAULT '',
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`dni`, `nombre`) VALUES
('77777777B', 'Marcos Mateo'),
('88888888B', 'Maria Luna'),
('99999999B', 'Ana Reyes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `nombre` varchar(25) DEFAULT NULL,
  `salario` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`dni`, `nombre`, `salario`) VALUES
('11111111E', 'Empleado1', 850.75),
('22222222E', 'Empleado2', 990.00),
('33333333E', 'Empleado3', 1120.50),
('44444444E', 'Empleado4', 1120.50),
('55555555E', 'Empleado5', 2100.84);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguro`
--

CREATE TABLE IF NOT EXISTS `seguro` (
  `numpoliza` int(11) NOT NULL DEFAULT '0',
  `fechafirma` date DEFAULT NULL,
  `importe` decimal(5,2) DEFAULT NULL,
  `dni_empleado` char(9) NOT NULL,
  `dni_beneficiario` char(9) NOT NULL,
  `fechacobro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguro`
--

INSERT INTO `seguro` (`numpoliza`, `fechafirma`, `importe`, `dni_empleado`, `dni_beneficiario`, `fechacobro`) VALUES
(111, '2015-12-15', 125.50, '33333333E', '77777777B', '2015-12-16'),
(222, '2016-01-10', 200.60, '33333333E', '77777777B', '2016-01-11'),
(333, '2015-12-20', 180.62, '44444444E', '88888888B', '2015-12-21'),
(444, '2015-11-08', 320.84, '44444444E', '99999999B', '2015-11-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `zona` varchar(25) DEFAULT NULL,
  `porcentaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`dni`, `zona`, `porcentaje`) VALUES
('33333333E', 'Zona1', 10),
('44444444E', 'Zona2', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`numpoliza`),
  ADD KEY `dni_empleado` (`dni_empleado`),
  ADD KEY `dni_beneficiario` (`dni_beneficiario`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `dni` (`dni`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD CONSTRAINT `administrativo_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `empleado` (`dni`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguro`
--
ALTER TABLE `seguro`
  ADD CONSTRAINT `seguro_ibfk_1` FOREIGN KEY (`dni_empleado`) REFERENCES `empleado` (`dni`) ON UPDATE CASCADE,
  ADD CONSTRAINT `seguro_ibfk_2` FOREIGN KEY (`dni_beneficiario`) REFERENCES `beneficiario` (`dni`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `empleado` (`dni`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
