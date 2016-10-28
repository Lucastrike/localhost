-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:01:07
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE IF NOT EXISTS `artista` (
  `dni` char(9) NOT NULL DEFAULT '',
  `nombre` varchar(25) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`dni`, `nombre`, `direccion`, `telefono`) VALUES
('11111111A', 'Juan González', 'C/ Doctor Fletcher, 3', 961231212),
('22222222B', 'Ramón Arias', 'C/ Corts Valencianes, 24', 961471414),
('33333333C', 'Maríz Sánchez', 'C/ Don Juan Boscó, 45', 961024747),
('3333333C', 'Maria', 'Direcc', 1234567),
('44444444D', 'Luisa Mieres', 'C/ Baja, 25', 961231417),
('55555555E', 'Ana', 'sdfasd', 213546);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `dni` char(9) NOT NULL DEFAULT '',
  `nombre` varchar(25) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`dni`, `nombre`, `direccion`, `telefono`) VALUES
('12345678P', 'Paula', 'sadfsdf', 21654325),
('12345678Q', 'Maite', 'C/ Álvarez, 54', 654987789),
('12345678T', 'Laura', 'ddfds', 564654),
('12345678W', 'Ana', 'Plaza Pintor Sorolla, 21', 654987987),
('12345678Y', 'josé María', 'C/ Marinas, 54', 654787878),
('88888888X', 'Marta', 'Plaza América, 27', 654123123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expone`
--

CREATE TABLE IF NOT EXISTS `expone` (
  `pintura` int(11) NOT NULL DEFAULT '0',
  `exposicion` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expone`
--

INSERT INTO `expone` (`pintura`, `exposicion`) VALUES
(111, 11111),
(222, 11111),
(333, 11111),
(444, 11111),
(555, 11111),
(666, 21111),
(777, 21111),
(888, 21111),
(987, 21111),
(999, 21111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exposicion`
--

CREATE TABLE IF NOT EXISTS `exposicion` (
  `codigo` int(11) NOT NULL DEFAULT '0',
  `fechainicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exposicion`
--

INSERT INTO `exposicion` (`codigo`, `fechainicio`, `fechafin`) VALUES
(11111, '2015-11-01', '2016-01-30'),
(21111, '2015-10-01', '2015-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pintura`
--

CREATE TABLE IF NOT EXISTS `pintura` (
  `codigo` int(11) NOT NULL DEFAULT '0',
  `titulo` varchar(50) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `dni_cliente` char(9) DEFAULT NULL,
  `preciofinal` decimal(5,2) DEFAULT NULL,
  `fechaventa` date DEFAULT NULL,
  `dni_artista` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pintura`
--

INSERT INTO `pintura` (`codigo`, `titulo`, `precio`, `dni_cliente`, `preciofinal`, `fechaventa`, `dni_artista`) VALUES
(111, 'Sol naciente', 215.00, '12345678Q', 200.00, '2015-12-07', '11111111A'),
(113, 'Pintura al óleo', 123.00, '88888888X', 123.00, '2016-02-07', '11111111A'),
(114, 'Acuarela', 700.00, '88888888X', 500.00, '2016-02-03', '11111111A'),
(222, 'Amanecer', 300.00, '12345678Q', 300.00, '2015-11-16', '11111111A'),
(333, 'Las Vegas', 299.00, '12345678Q', 200.00, '2015-12-07', '11111111A'),
(444, 'L.A.', 50.00, '12345678Q', 45.00, '2015-11-16', '11111111A'),
(555, 'El mar', 125.00, '12345678W', 125.00, '2015-12-30', '22222222B'),
(666, 'Alegría', 250.00, '12345678W', 125.00, '2016-01-03', '22222222B'),
(777, 'Mi mundo', 233.00, '88888888X', 200.00, '2015-12-22', '33333333C'),
(888, 'El vuelo', 400.00, '12345678Y', 250.00, '2015-12-29', '44444444D'),
(987, 'La clase', 321.00, '88888888X', 300.00, '2015-12-09', '44444444D'),
(999, 'La playa azul', 654.00, '88888888X', 550.50, '2015-12-23', '44444444D');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `expone`
--
ALTER TABLE `expone`
  ADD PRIMARY KEY (`pintura`,`exposicion`),
  ADD KEY `exposicion` (`exposicion`);

--
-- Indices de la tabla `exposicion`
--
ALTER TABLE `exposicion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pintura`
--
ALTER TABLE `pintura`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `dni_cliente` (`dni_cliente`),
  ADD KEY `dni_artista` (`dni_artista`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `expone`
--
ALTER TABLE `expone`
  ADD CONSTRAINT `expone_ibfk_1` FOREIGN KEY (`pintura`) REFERENCES `pintura` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `expone_ibfk_2` FOREIGN KEY (`exposicion`) REFERENCES `exposicion` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pintura`
--
ALTER TABLE `pintura`
  ADD CONSTRAINT `pintura_ibfk_1` FOREIGN KEY (`dni_cliente`) REFERENCES `cliente` (`dni`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pintura_ibfk_2` FOREIGN KEY (`dni_artista`) REFERENCES `artista` (`dni`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
