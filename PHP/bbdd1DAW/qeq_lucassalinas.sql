-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:02:00
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qeq_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complementos`
--

CREATE TABLE IF NOT EXISTS `complementos` (
  `codigo` int(11) NOT NULL,
  `complemento` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `complementos`
--

INSERT INTO `complementos` (`codigo`, `complemento`) VALUES
(1, 'gafas'),
(2, 'bufanda'),
(3, 'barba'),
(4, 'gorra'),
(5, 'casco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `codigo` int(11) NOT NULL,
  `genero` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`codigo`, `genero`) VALUES
(1, 'chica'),
(2, 'chico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ojos`
--

CREATE TABLE IF NOT EXISTS `ojos` (
  `codigo` int(11) NOT NULL,
  `ojos` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ojos`
--

INSERT INTO `ojos` (`codigo`, `ojos`) VALUES
(1, 'Azules'),
(2, 'Marrones'),
(3, 'Negros'),
(4, 'Verdes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelo`
--

CREATE TABLE IF NOT EXISTS `pelo` (
  `codigo` int(11) NOT NULL,
  `pelo` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelo`
--

INSERT INTO `pelo` (`codigo`, `pelo`) VALUES
(1, 'Castaño'),
(2, 'Moreno'),
(3, 'Rubio'),
(4, 'Pelirrojo'),
(5, 'Azul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cod_pelo` int(11) NOT NULL,
  `cod_ojos` int(11) NOT NULL,
  `cod_genero` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `imagen` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `cod_pelo`, `cod_ojos`, `cod_genero`, `flag`, `imagen`) VALUES
(1, 'Sergio', 2, 2, 2, 1, 'SERGIO.jpg'),
(2, 'Lucas', 1, 4, 2, 1, 'LUCAS.jpg'),
(3, 'Victor', 1, 2, 2, 1, 'VICTOR.jpg'),
(4, 'Javi', 2, 2, 2, 1, 'JAVI.jpg'),
(5, 'María', 4, 2, 1, 1, 'MARIA.jpg'),
(7, 'Samuel', 2, 3, 2, 1, 'SAMUEL.jpg'),
(8, 'DavidSa', 2, 2, 2, 1, 'DAVIDSA.jpg'),
(9, 'Carlos', 2, 2, 2, 1, 'CARLOS.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona-complemento`
--

CREATE TABLE IF NOT EXISTS `persona-complemento` (
  `codigo` int(11) NOT NULL,
  `cod_complemento` int(11) NOT NULL,
  `cod_persona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona-complemento`
--

INSERT INTO `persona-complemento` (`codigo`, `cod_complemento`, `cod_persona`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 5),
(4, 2, 1),
(5, 2, 3),
(6, 2, 5),
(7, 2, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasena`) VALUES
('lucas', 'alumno1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `complementos`
--
ALTER TABLE `complementos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `ojos`
--
ALTER TABLE `ojos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pelo`
--
ALTER TABLE `pelo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `cod_genero` (`cod_genero`),
  ADD KEY `cod_pelo` (`cod_pelo`),
  ADD KEY `cod_ojos` (`cod_ojos`);

--
-- Indices de la tabla `persona-complemento`
--
ALTER TABLE `persona-complemento`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod_complemento` (`cod_complemento`),
  ADD KEY `cod_persona` (`cod_persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `complementos`
--
ALTER TABLE `complementos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ojos`
--
ALTER TABLE `ojos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pelo`
--
ALTER TABLE `pelo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `persona-complemento`
--
ALTER TABLE `persona-complemento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`cod_genero`) REFERENCES `genero` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`cod_pelo`) REFERENCES `pelo` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`cod_ojos`) REFERENCES `ojos` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona-complemento`
--
ALTER TABLE `persona-complemento`
  ADD CONSTRAINT `persona-complemento_ibfk_1` FOREIGN KEY (`cod_persona`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pp` FOREIGN KEY (`cod_complemento`) REFERENCES `complementos` (`codigo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
