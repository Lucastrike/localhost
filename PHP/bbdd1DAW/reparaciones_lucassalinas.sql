-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:02:08
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reparaciones_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `telefono`) VALUES
(1, 'Angel', 'Fernandez', 961212121),
(2, 'Eric', 'Martinez', 961414141),
(3, 'Sergio', 'Valentino', 961451414),
(4, 'Maria', 'Navarro', 654213254),
(5, 'Ana', 'Villaplana', 632541478),
(6, 'Marcos', 'Martinez', 654456654),
(8, 'Victor', 'Ramos', 652323212),
(9, 'Sergio', 'Dominguez', 652212258);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE IF NOT EXISTS `dispositivos` (
  `id_dispositivo` int(11) NOT NULL DEFAULT '0',
  `id_cliente` int(11) DEFAULT NULL,
  `id_tipodispositivo` int(11) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `num_serie` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id_dispositivo`, `id_cliente`, `id_tipodispositivo`, `marca`, `modelo`, `num_serie`) VALUES
(1, 1, 1, 'DELL', 'ModelDELL', 'DELL-01254-XLJ'),
(2, 1, 2, 'HP', 'PAVILION', 'HP-8754365-47XFT'),
(3, 1, 3, 'SAMSUNG', 'TAB3', 'SAF-DAS7-XP'),
(4, 2, 4, 'NOKIA', 'LUMIA', 'NK-9878sd-e'),
(5, 2, 5, 'PLAY STATION', '3', 'PS3-sdf0-es'),
(6, 3, 1, 'LENOVO', 'IBQM', 'osdf-234-LNV'),
(7, 3, 1, 'APPLE', 'iMAC', 'MC-sdaf343-fd'),
(8, 4, 4, 'iPHONE', '6', 'IP-asdf-987-re'),
(9, 5, 2, 'APPLE', 'MACBOOK', 'MCB-asdf-23453-54'),
(10, 6, 2, 'SONY', 'VAIO', 'VAIO-sdfa-324-dff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE IF NOT EXISTS `reparaciones` (
  `id_reparacion` int(11) NOT NULL DEFAULT '0',
  `reparacion` varchar(150) DEFAULT NULL,
  `id_dispositivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id_reparacion`, `reparacion`, `id_dispositivo`) VALUES
(1, 'Ampliacion de memoria', 1),
(2, 'Cambio de HD', 2),
(3, 'Formatear e instalar SO', 3),
(4, 'Liberar operador móvil', 4),
(5, 'Cambiar HD', 5),
(6, 'Añadir Disco Sólido', 6),
(7, 'Actualizar SO', 7),
(8, 'Cambiar pantalla', 8),
(9, 'Formatear y actualizar SO', 9),
(10, 'Formatear y reinstalar SO', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodispositivo`
--

CREATE TABLE IF NOT EXISTS `tipodispositivo` (
  `id_tipodispositivo` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodispositivo`
--

INSERT INTO `tipodispositivo` (`id_tipodispositivo`, `tipo`) VALUES
(1, 'PC'),
(2, 'Portatil'),
(3, 'Tablet'),
(4, 'Movil'),
(5, 'Video Consola');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id_dispositivo`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_tipodispositivo` (`id_tipodispositivo`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id_reparacion`),
  ADD KEY `id_dispositivo` (`id_dispositivo`);

--
-- Indices de la tabla `tipodispositivo`
--
ALTER TABLE `tipodispositivo`
  ADD PRIMARY KEY (`id_tipodispositivo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD CONSTRAINT `dispositivos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dispositivos_ibfk_2` FOREIGN KEY (`id_tipodispositivo`) REFERENCES `tipodispositivo` (`id_tipodispositivo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `reparaciones_ibfk_1` FOREIGN KEY (`id_dispositivo`) REFERENCES `dispositivos` (`id_dispositivo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
