-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2017 a las 04:23:18
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prototipo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

CREATE TABLE IF NOT EXISTS `tabla1` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `pedidos` int(50) NOT NULL,
  `stock` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `tabla1`
--

INSERT INTO `tabla1` (`id`, `descripcion`, `pedidos`, `stock`) VALUES
(1, 'lija', 100, 30),
(2, 'electrodos', 500, 300),
(3, 'laminas de acero inoxidables', 300, 100),
(4, 'laminas de hierro pulido', 300, 100),
(5, 'esmalte', 30, 15),
(6, 'fondo', 100, 50),
(7, 'laminas de mdf', 100, 50),
(8, 'jabon', 30, 10),
(9, 'martillos', 20, 15),
(10, 'esmeriles', 0, 10),
(11, 'tuercas', 200, 50),
(12, 'tornillos', 200, 100),
(13, 'casco', 20, 12),
(14, 'alicates', 20, 19),
(15, 'taladros', 5, 10),
(16, 'pinzas ', 30, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
