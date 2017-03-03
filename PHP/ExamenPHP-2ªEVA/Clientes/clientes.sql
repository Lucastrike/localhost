-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-02-2017 a las 08:33:42
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `cod_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  PRIMARY KEY (`cod_articulo`),
  KEY `cod_categoria` (`cod_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`cod_articulo`, `articulo`, `precio`, `stock`, `cod_categoria`) VALUES
(1, 'Auriculares Bose', 220.00, 8, 3),
(2, 'Suite Microsoft Office 2016', 180.00, 9, 2),
(3, 'Pendrive 8GB', 15.00, 5, 1),
(4, 'Art', 1.00, 12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `categoria`) VALUES
(1, 'hardware'),
(2, 'software'),
(3, 'otros'),
(4, 'hola'),
(5, 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `poblacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nombre`, `direccion`, `poblacion`) VALUES
(1, 'Borja Martí', 'C/ Cervantes 3', 'Quart de Poblet'),
(2, 'María Molina', 'C/ Mayor 7', 'Quart de Poblet'),
(3, 'Luis López', 'Avd. San Onofre 25', 'Quart de Poblet'),
(4, 'Marcos Pérez', 'C/ Mayor 5', 'Quart de Poblet');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`cod_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
