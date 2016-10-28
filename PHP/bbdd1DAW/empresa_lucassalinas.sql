-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:00:59
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camioneros`
--

CREATE TABLE IF NOT EXISTS `camioneros` (
  `dni` int(8) NOT NULL,
  `nombre` varchar(15) CHARACTER SET utf8 NOT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(40) CHARACTER SET utf8 NOT NULL,
  `salario` int(4) NOT NULL,
  `poblacion` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE IF NOT EXISTS `camiones` (
  `matricula` varchar(7) CHARACTER SET utf8 NOT NULL,
  `tipo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `modelo` int(10) NOT NULL,
  `potencia` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `nombre` varchar(15) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dni` int(8) NOT NULL,
  `direccion` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `codigo` int(8) NOT NULL,
  `dni_cliente` int(8) NOT NULL,
  `codigo_producto` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conduce`
--

CREATE TABLE IF NOT EXISTS `conduce` (
  `codigo` int(8) NOT NULL,
  `id_camionero` int(8) NOT NULL,
  `id_camion` varchar(7) CHARACTER SET utf8 NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE IF NOT EXISTS `paquetes` (
  `codigo` int(8) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nom_destinatario` varchar(40) CHARACTER SET utf8 NOT NULL,
  `dir_destinatario` varchar(40) CHARACTER SET utf8 NOT NULL,
  `id_camionero` int(8) NOT NULL,
  `id-provincia` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `nombre` varchar(10) CHARACTER SET utf8 NOT NULL,
  `codigo` int(8) NOT NULL,
  `precio` decimal(6,0) NOT NULL,
  `codigo_proveedor` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `NIF` int(8) NOT NULL,
  `nombre` varchar(15) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `cod_provincia` int(8) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camioneros`
--
ALTER TABLE `camioneros`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo` (`codigo`),
  ADD KEY `dni_cliente` (`dni_cliente`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `conduce`
--
ALTER TABLE `conduce`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_camion` (`id_camion`),
  ADD KEY `fecha` (`fecha`),
  ADD KEY `id_camionero` (`id_camionero`,`id_camion`,`fecha`) USING BTREE,
  ADD KEY `id_camion_2` (`id_camion`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_camionero` (`id_camionero`),
  ADD KEY `id-provincia` (`id-provincia`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo` (`codigo`),
  ADD KEY `codigo_proveedor` (`codigo_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`NIF`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`cod_provincia`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`dni_cliente`) REFERENCES `clientes` (`dni`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo`);

--
-- Filtros para la tabla `conduce`
--
ALTER TABLE `conduce`
  ADD CONSTRAINT `conduce_ibfk_1` FOREIGN KEY (`id_camionero`) REFERENCES `camioneros` (`dni`),
  ADD CONSTRAINT `conduce_ibfk_2` FOREIGN KEY (`id_camion`) REFERENCES `camiones` (`matricula`);

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `paquetes_ibfk_1` FOREIGN KEY (`id_camionero`) REFERENCES `camioneros` (`dni`),
  ADD CONSTRAINT `paquetes_ibfk_2` FOREIGN KEY (`id-provincia`) REFERENCES `provincias` (`cod_provincia`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedor` (`NIF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
