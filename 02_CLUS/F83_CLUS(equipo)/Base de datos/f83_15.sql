-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 21-05-2021 a las 01:27:17
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f83_15`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(10) NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) DEFAULT NULL,
  `cantidad_pedido` int(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `b` (`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_producto`, `cantidad_pedido`, `fecha`) VALUES
(3, 1, 10, '2021-04-15'),
(4, 5, 50, '2021-01-14'),
(5, 7, 60, '2020-01-14'),
(6, 2, 20, '2020-09-20'),
(7, 1, 50, '2020-07-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_prod` int(10) NOT NULL AUTO_INCREMENT,
  `id_provedor` int(10) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `a` (`id_provedor`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `id_provedor`, `nombres`, `descripcion`, `stock`) VALUES
(2, 1, 'carbon', 'este producto se calcula por kilos', 200),
(3, 1, 'algodon', 'este producto se calcula por gramos', 1000),
(4, 2, 'esponjas', 'este producto se calcula por pieza', 560),
(5, 3, 'cartera negra', 'este producto se calcula por pieza', 105),
(6, 3, 'sandalias', 'este producto se calcula por pieza', 55),
(1, 3, 'aretes de perla', 'este producto va en dos y se calcula por pieza', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

DROP TABLE IF EXISTS `provedor`;
CREATE TABLE IF NOT EXISTS `provedor` (
  `id_provedor` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `rfc` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_provedor`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`id_provedor`, `nombre`, `descripcion`, `rfc`) VALUES
(3, 'Sergio', 'accesorios', 'SASS940630JJ10'),
(2, 'Cesar', 'productos de limpieza', 'PERC9406028P10'),
(1, 'Brandon', 'materia primas', 'AARB000120I69');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
