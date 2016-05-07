-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-05-2016 a las 12:19:40
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

