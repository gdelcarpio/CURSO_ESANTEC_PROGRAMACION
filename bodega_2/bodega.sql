-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-06-2016 a las 12:17:08
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `bodega`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clientes`
-- 

CREATE TABLE `clientes` (
  `id_cliente` int(6) NOT NULL auto_increment,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `activo` int(100) NOT NULL COMMENT '0 inactivo 1 activo',
  PRIMARY KEY  (`id_cliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 

INSERT INTO `clientes` VALUES (4, 'ANTONIO', 'LOPEZ', 'SURCO', '36549566', 1);
INSERT INTO `clientes` VALUES (13, 'Luis', 'Sanchez', 'av PerÃº 6545 - San MartÃ­n', '123654', 1);
INSERT INTO `clientes` VALUES (17, 'Alfredo', 'Cluk', 'lima', '987654', 1);
INSERT INTO `clientes` VALUES (15, 'Gonzalo', 'Del carpio', 'lince', '987653651', 1);
INSERT INTO `clientes` VALUES (14, 'Luis', 'Sanchez', 'av PerÃº 6545 - San MartÃ­n', '123654', 1);
INSERT INTO `clientes` VALUES (18, 'Camilo', 'Ayala', 'San MartÃ­n', '4784457', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidos`
-- 

CREATE TABLE `pedidos` (
  `id_pedido` int(6) NOT NULL auto_increment,
  `id_cliente` int(1) NOT NULL,
  `fecha` date NOT NULL,
  `monto` float(8,2) NOT NULL,
  `estado_pago` int(1) NOT NULL,
  `estado_envio` int(1) NOT NULL,
  PRIMARY KEY  (`id_pedido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `pedidos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidos_productos`
-- 

CREATE TABLE `pedidos_productos` (
  `id_pedido_producto` int(6) NOT NULL auto_increment,
  `id_pedido` int(1) NOT NULL,
  `id_producto` int(1) NOT NULL,
  PRIMARY KEY  (`id_pedido_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `pedidos_productos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `id_producto` int(6) NOT NULL auto_increment,
  `codigo` varchar(10) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `caracteristica` varchar(50) NOT NULL,
  `precio` float(8,2) NOT NULL,
  `activo` int(10) NOT NULL COMMENT '0 inactivo 1 activo',
  PRIMARY KEY  (`id_producto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (1, '001', 'Platano', 'fruta selvatica', 1.20, 1);
INSERT INTO `productos` VALUES (2, '002', 'manzana', 'manzana chilena cascara verde', 2.50, 1);
INSERT INTO `productos` VALUES (3, '003', 'Pera', 'pera jugoisa', 0.90, 1);
INSERT INTO `productos` VALUES (4, '015', 'Coca cola', 'gaseosa negra 3litros', 5.00, 1);
INSERT INTO `productos` VALUES (5, '020', 'Fanta', 'gaseosa naranja de 2L', 4.00, 1);
INSERT INTO `productos` VALUES (6, '120', 'Sublime', 'Chcolate nestle', 1.20, 1);
INSERT INTO `productos` VALUES (7, '125', 'Agua San Mateo 0.5Litro', 'agua de mesa', 1.00, 1);
INSERT INTO `productos` VALUES (8, '652', 'Velitas Misioneras', 'velas', 0.20, 1);
INSERT INTO `productos` VALUES (9, '031', 'Palta', 'rica palta', 2.00, 1);
INSERT INTO `productos` VALUES (10, '052', 'Colgate chico', 'pasta dental', 2.20, 1);
