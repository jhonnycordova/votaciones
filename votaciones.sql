-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2014 a las 08:11:07
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `partido` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `votos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `nombre`, `apellido`, `partido`, `imagen`, `votos`) VALUES
(14, 'Megan Josefina', 'Fox', 'PSUV', 'megan.jpg', 1),
(15, 'Rick', 'Zombie', 'MUD', 'rick.jpg', 1),
(16, 'Penny', 'Linda', 'NoSe', 'peny.jpg', 3),
(17, 'Leonel', 'Rojas', 'PODEMOS', 'michone.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`,`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `user`, `clave`, `cedula`, `tipo`, `status`) VALUES
(50, 'Rafael', 'Jimenez', 'rafael', '1234', '82732837', 'E', 'I'),
(51, 'Leonel', 'Rojas', 'leo', '1234', '2836273', 'E', 'I'),
(52, 'anthony', 'habano', 'delegado', '1234', '984937', 'E', 'I'),
(53, 'Keila Dayselin', 'Ramirez', 'keila', '1234', '2983893', 'E', 'I'),
(54, 'Alberto', 'bastardo', 'alberto', '1234', '29389', 'E', 'I');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
