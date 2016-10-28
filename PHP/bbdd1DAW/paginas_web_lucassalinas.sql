-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2016 a las 09:01:41
-- Versión del servidor: 5.5.44-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginas_web_lucassalinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE IF NOT EXISTS `contiene` (
  `nombreweb` varchar(25) NOT NULL DEFAULT '',
  `ficheromultimedia` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contiene`
--

INSERT INTO `contiene` (`nombreweb`, `ficheromultimedia`) VALUES
('contacto.html', 'img3'),
('index.html', 'img1'),
('index.html', 'img2'),
('index.html', 'img3'),
('index2.html', 'img1'),
('index2.html', 'video2'),
('sobre_nosotros.html', 'video1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlaza`
--

CREATE TABLE IF NOT EXISTS `enlaza` (
  `nombreorigen` varchar(25) NOT NULL DEFAULT '',
  `nombredestino` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enlaza`
--

INSERT INTO `enlaza` (`nombreorigen`, `nombredestino`) VALUES
('index.html', 'contacto.html'),
('index.html', 'servicios.html'),
('index.html', 'sobre_nosotros.html'),
('index2.html', 'contacto2.html'),
('index2.html', 'servicios2.html'),
('index2.html', 'sobre_nosotros2.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `fichero` varchar(25) NOT NULL DEFAULT '',
  `ancho` int(11) DEFAULT NULL,
  `alto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`fichero`, `ancho`, `alto`) VALUES
('img1', 200, 150),
('img2', 200, 150),
('img3', 200, 150),
('img4', 600, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_multimedia`
--

CREATE TABLE IF NOT EXISTS `objeto_multimedia` (
  `fichero` varchar(25) NOT NULL DEFAULT '',
  `tamaño` decimal(5,2) DEFAULT NULL,
  `extension` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objeto_multimedia`
--

INSERT INTO `objeto_multimedia` (`fichero`, `tamaño`, `extension`) VALUES
('cancion1', 25.00, 'mp3'),
('cancion2', 45.00, 'mp3'),
('cancion3', 70.00, 'mp3'),
('img1', 100.00, 'jpg'),
('img2', 150.00, 'jpg'),
('img3', 200.00, 'jpg'),
('img4', 150.00, 'png'),
('video1', 525.00, 'avi'),
('video2', 700.00, 'avi'),
('video3', 400.00, 'mp4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_web`
--

CREATE TABLE IF NOT EXISTS `pagina_web` (
  `nombre` varchar(25) NOT NULL DEFAULT '',
  `fecultimamodif` date DEFAULT NULL,
  `ipsitio` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagina_web`
--

INSERT INTO `pagina_web` (`nombre`, `fecultimamodif`, `ipsitio`) VALUES
('contacto.html', '2016-01-10', '10.10.10.10'),
('contacto2.html', '2015-12-22', '20.20.20.20'),
('index.html', '2016-01-05', '10.10.10.10'),
('index2.html', '2015-12-14', '20.20.20.20'),
('servicios.html', '2016-01-03', '10.10.10.10'),
('servicios2.html', '2016-01-10', '20.20.20.20'),
('sobre_nosotros.html', '2016-01-14', '10.10.10.10'),
('sobre_nosotros2.html', '2015-12-21', '20.20.20.20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE IF NOT EXISTS `sitio` (
  `ip` varchar(15) NOT NULL DEFAULT '',
  `direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`ip`, `direccion`) VALUES
('10.10.10.10', 'dominio1.com'),
('20.20.20.20', 'dominio2.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonido`
--

CREATE TABLE IF NOT EXISTS `sonido` (
  `fichero` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sonido`
--

INSERT INTO `sonido` (`fichero`) VALUES
('cancion1'),
('cancion2'),
('cancion3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `fichero` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`fichero`) VALUES
('video1'),
('video2'),
('video3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`nombreweb`,`ficheromultimedia`),
  ADD KEY `nombreweb` (`nombreweb`),
  ADD KEY `ficheromultimedia` (`ficheromultimedia`);

--
-- Indices de la tabla `enlaza`
--
ALTER TABLE `enlaza`
  ADD PRIMARY KEY (`nombreorigen`,`nombredestino`),
  ADD KEY `nombreorigen` (`nombreorigen`),
  ADD KEY `nombredestino` (`nombredestino`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`fichero`),
  ADD KEY `fichero` (`fichero`);

--
-- Indices de la tabla `objeto_multimedia`
--
ALTER TABLE `objeto_multimedia`
  ADD PRIMARY KEY (`fichero`);

--
-- Indices de la tabla `pagina_web`
--
ALTER TABLE `pagina_web`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `ipsitio` (`ipsitio`);

--
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD PRIMARY KEY (`ip`);

--
-- Indices de la tabla `sonido`
--
ALTER TABLE `sonido`
  ADD PRIMARY KEY (`fichero`),
  ADD KEY `fichero` (`fichero`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`fichero`),
  ADD KEY `fichero` (`fichero`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`nombreweb`) REFERENCES `pagina_web` (`nombre`),
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`ficheromultimedia`) REFERENCES `objeto_multimedia` (`fichero`);

--
-- Filtros para la tabla `enlaza`
--
ALTER TABLE `enlaza`
  ADD CONSTRAINT `enlaza_ibfk_1` FOREIGN KEY (`nombreorigen`) REFERENCES `pagina_web` (`nombre`),
  ADD CONSTRAINT `enlaza_ibfk_2` FOREIGN KEY (`nombredestino`) REFERENCES `pagina_web` (`nombre`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`fichero`) REFERENCES `objeto_multimedia` (`fichero`);

--
-- Filtros para la tabla `pagina_web`
--
ALTER TABLE `pagina_web`
  ADD CONSTRAINT `pagina_web_ibfk_1` FOREIGN KEY (`ipsitio`) REFERENCES `sitio` (`ip`);

--
-- Filtros para la tabla `sonido`
--
ALTER TABLE `sonido`
  ADD CONSTRAINT `sonido_ibfk_1` FOREIGN KEY (`fichero`) REFERENCES `objeto_multimedia` (`fichero`);

--
-- Filtros para la tabla `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`fichero`) REFERENCES `objeto_multimedia` (`fichero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
