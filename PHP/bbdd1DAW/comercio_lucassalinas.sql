-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:00:41
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercio_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `clientes_id` int(11) NOT NULL,
  `clientes_nombre` char(50) NOT NULL,
  `direccion` char(50) DEFAULT NULL,
  `ciudad` char(50) DEFAULT NULL,
  `pais` char(25) DEFAULT NULL,
  `codigo_postal` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`clientes_id`, `clientes_nombre`, `direccion`, `ciudad`, `pais`, `codigo_postal`) VALUES
(111, 'Lucas', 'alcacias 46', 'Albacete', 'Espanya', '72001'),
(222, 'Pablo', 'cuenca 53', 'Valencia', 'Espanya', '46008'),
(333, 'Silvia', 'shevon way', 'Brentwood', 'United Kingdom', 'PO33'),
(444, 'Mariano', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `departamentos_id` int(11) NOT NULL,
  `departamentos_nombre` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`departamentos_id`, `departamentos_nombre`) VALUES
(111, 'contabilidad'),
(222, 'I+d'),
(333, 'marketing'),
(444, 'administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `empleados_num` int(11) NOT NULL,
  `empleados_nombre` char(50) NOT NULL,
  `departamentos_id` int(11) DEFAULT NULL,
  `salario` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`empleados_num`, `empleados_nombre`, `departamentos_id`, `salario`, `edad`) VALUES
(111, 'Manolo', 111, 3000, 35),
(222, 'Lucas', 222, 7000, 25),
(333, 'Samuel', 333, 2000, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `productos_id` decimal(10,0) NOT NULL,
  `proveedores` int(11) NOT NULL,
  `descripcion` char(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productos_id`, `proveedores`, `descripcion`, `precio`) VALUES
(111, 222, 'Warcraft', 40),
(222, 111, 'GTA', 60),
(333, 333, 'PacMan', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `proveedores_id` int(11) NOT NULL,
  `proveedores_nombre` char(50) NOT NULL,
  `contacto_nombre` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`proveedores_id`, `proveedores_nombre`, `contacto_nombre`) VALUES
(111, 'RockStar', 'Charlie'),
(222, 'Blizzard', 'Rob'),
(333, 'Atari', 'Mike');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clientes_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`departamentos_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`empleados_num`),
  ADD KEY `fk_departamentos` (`departamentos_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productos_id`),
  ADD KEY `proveedores` (`proveedores`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`proveedores_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_departamentos` FOREIGN KEY (`departamentos_id`) REFERENCES `departamentos` (`departamentos_id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`proveedores`) REFERENCES `proveedores` (`proveedores_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
