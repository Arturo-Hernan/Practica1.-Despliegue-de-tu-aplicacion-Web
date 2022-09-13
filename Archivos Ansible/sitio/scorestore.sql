-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-09-2022 a las 21:36:55
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
-- Base de datos: `scorestore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `password` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `password`) VALUES
(1, 'administrador', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCat` varchar(50) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `NombreCat`) VALUES
(1, 'Tecnologia'),
(2, 'Ropa y Accesorios'),
(3, 'Hogar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `critica`
--

DROP TABLE IF EXISTS `critica`;
CREATE TABLE IF NOT EXISTS `critica` (
  `idcritica` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `idTienda` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `critica` varchar(1000) NOT NULL,
  PRIMARY KEY (`idcritica`),
  KEY `idTienda` (`idTienda`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `critica`
--

INSERT INTO `critica` (`idcritica`, `email`, `idTienda`, `puntuacion`, `fecha`, `critica`) VALUES
(9, 'arturohm85@yahoo.com', 7, 5, '2021-06-30 23:56:50', 'Excelente servicio y los productos son tal cual lo describe'),
(10, 'aliciagutierrez12@gmail.com', 1, 4, '2021-07-01 00:06:28', 'Yo acabo de comprar mi velo y tocado y estÃ¡n sÃºper econÃ³micos y llegaron bien. Todo sÃºper bien y estÃ¡n hermosos e igual que la foto.'),
(11, 'guerreroherrerafcoemmanuel@gmail.com', 8, 4, '2021-07-01 00:09:22', 'Excelente tienda, siempre fueron muy atentos y cuidadosos con el pedido, el paquete llego en perfectas condiciones muy bien protegido, ademÃ¡s me entregaron la guia de rastreo super rapido'),
(13, 'guerreroherrerafcoemmanuel@gmail.com', 7, 4, '2021-07-01 00:11:38', 'Tiene muy buenos precios, al principio desconfiaba que no me llegarÃ­an las cosas, cuando se tardaron caÃ­ en esa preocupaciÃ³n pero todo llego en orden, tarde pero llego que fue lo mas importante. '),
(14, 'alejandraluz@live.com.mx', 2, 3, '2021-07-01 00:12:22', 'bastante descuidados con sus clientes pedi un par de prendas muchas de ellas no llegaron me puse en contacto con el personal de la pagina pero nunca me atendieron debidamente al final no me resolvieron el problema tengan cuidado con la tienda'),
(15, 'oscarrangelavila@gmail.com', 5, 4, '2021-07-01 00:14:56', 'Esta tienda es muy segura los productos llegan sin problemas, pero debes tener suerte de que los repartidores quieran entregar en tu domicilio.'),
(16, 'oscarrangelavila@gmail.com', 4, 5, '2021-07-01 00:16:03', 'bastante bien no tardaron en enviar el paquete que solicite'),
(17, 'arturohm85@yahoo.com', 9, 2, '2022-05-24 12:31:01', 'El producto tardo mucho en llegar, tardaron en mandarme la guÃ­a de rastreo.'),
(18, 'arturohm85@yahoo.com', 7, 4, '2022-05-26 12:50:49', 'Excelente tienda, buena atenciÃ³n'),
(19, 'arturohm85@yahoo.com', 8, 4, '2022-06-14 16:28:12', 'pedÃ­ hace un tiempo y lleva 3 semanas parado en MÃ©xico el servicio de paqueterÃ­a es pÃ©simo, nada que ver con Shein llega que unas veces llega antes de la fecha indicada.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

DROP TABLE IF EXISTS `tienda`;
CREATE TABLE IF NOT EXISTS `tienda` (
  `idTienda` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `urlT` varchar(1000) NOT NULL,
  `DescripcionT` varchar(1000) NOT NULL,
  `NombreT` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL,
  PRIMARY KEY (`idTienda`),
  KEY `idcategoria` (`idcategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`idTienda`, `idcategoria`, `urlT`, `DescripcionT`, `NombreT`, `Link`) VALUES
(1, 2, 'https://mx.romwe.com/', 'Camisetas, Vestidos, Sueteres, Sudaderas, BaÃ±adores, Pantalones', 'ROMWE', 'Tiendas/romwe.jpg'),
(2, 2, 'https://www.shein.com.mx/', 'tienda online de moda fundada en 2011. AquiÂ­ puedes encontrar todo tipo de prendas, aunque lo mas destacable son los vestidos para ocasiones especiales.', 'shein', 'Tiendas/shein.png'),
(3, 2, 'https://www.jjshouse.com/es/', 'tienda de una variedad de ropa para chicos y chicas, accesorios de moda, gadgets llamativos y hasta decoracion del hogar.', 'JJS HOUSE', 'Tiendas/house.jpg'),
(4, 3, 'https://www.beddinginn.com/', 'Beddinginn ofrece una gran seleccion de juegos de cama 3D de alta calidad, cortinas 3D, ropa 3D', 'Beddinginn', 'Tiendas/Beddinginn.png'),
(5, 3, 'https://www.lowes.com/', 'Es una cadena de distribucion minorista de productos de mejora del hogar, materiales de construccion y bricolaje', 'Lowes Home', 'Tiendas/Lowes Home.png'),
(6, 3, 'https://www.homedepot.com.mx/', 'Tienda de herramientas, electrodomesticos, muebles, etc', 'The Home Depot', 'Tiendas/TheHomeDepot.png'),
(7, 1, 'https://www.steren.com.mx/', 'Tienda de electronica', 'steren', 'Tiendas/steren.jpg'),
(8, 1, 'https://miphonemx.com/', 'Venta de equipos celulares de manera rapida y segura.', 'miphone', 'Tiendas/miphone.png'),
(9, 1, 'https://www.linio.com.mx/s/tienda-de-electro-nicos', 'Linio es uno de los mas grandes portales de ventas por internet', 'Linio.com', 'Tiendas/linio.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarior`
--

DROP TABLE IF EXISTS `usuarior`;
CREATE TABLE IF NOT EXISTS `usuarior` (
  `emailu` varchar(1000) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `nombreu` varchar(100) NOT NULL,
  `apellidopaterno` varchar(100) NOT NULL,
  `apellidomaterno` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`emailu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarior`
--

INSERT INTO `usuarior` (`emailu`, `nombreu`, `apellidopaterno`, `apellidomaterno`, `password`) VALUES
('arturohm85@yahoo.com', 'Luis Arturo', 'Hernandez', 'Martinez', '1236589'),
('VictorRuizPalacios512@gmail.com', 'Victor', 'Ruiz', 'Palacios', '485694'),
('oscarrangelavila@gmail.com', 'Oscar', 'Rangel', 'Avila', '7485963'),
('alejandraluz@live.com.mx', 'Alejandra', 'Cruz', 'Vieyra', '478596'),
('aliciagutierrez12@gmail.com', 'Alicia', 'Villareal', 'Gutierrez', '23652'),
('guerreroherrerafcoemmanuel@gmail.com', 'Francisco', 'Guerrero', 'Herrera', '456285'),
('alismoislas@gmail.com', 'Carlos', 'Islas', 'Mora', '12345678'),
('manuel.lopez@gmail.com', 'Manuel', 'Lopez', 'Ruiz', '1234567');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
