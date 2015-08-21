-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2015 a las 16:54:49
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `safetaxi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permisos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE IF NOT EXISTS `autos` (
  `id_auto` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_auto`, `marca`, `modelo`) VALUES
(1, 'Atos', 'Prime 2001'),
(3, 'Tsuru', '2010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE IF NOT EXISTS `base` (
  `id_base` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`id_base`, `nombre`) VALUES
(4, 'Base Paseo Durango'),
(5, 'Base 87');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `activo` int(1) NOT NULL,
  `imei` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `paterno`, `materno`, `correo`, `password`, `foto`, `activo`, `imei`) VALUES
(45, 'ca', 'a', 'ca', 'ca@ca.com', '', '', 1, ''),
(46, 'isaac', 'sa', 'sa', 'sa@sa.com', 'sa', '', 1, ''),
(47, 'isaac', 'valenzuela', 'escobedo', 'taxiseguroalianza@gmail.com', '38554e20e72a8c1bf4df3d61e01b7cef0bb600fe4c1d9fe68b4f104107a93749', '', 1, ''),
(48, 'Lisbeth', 'Valenzuela', 'Escobedo', 'lisbeth@gmail.com', '9a11ec840ea360065990c59e20e88735ad762a6990e08d60d85f138cc56aaa2a', '', 1, ''),
(50, 'Antonio', 'Alvarez', 'Guevara', 'zsckare@gmail.com', '0ae98847dfc7eff7589d839e8a00510e70a8475b1172ef802d1b23e7e4ee7809', '', 1, ''),
(51, 'admin', 'admin', 'admin', 'admin@admin.com', '94d161f749f18733975b26771504ef69ef74533968cd0fcab720adc3beabd09c', '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `id_driver` int(11) NOT NULL,
  `name_driver` varchar(100) NOT NULL,
  `paterno_driver` varchar(100) NOT NULL,
  `materno_driver` varchar(100) NOT NULL,
  `emails_driver` varchar(100) NOT NULL,
  `image_driver` varchar(100) NOT NULL,
  `phone_driver` varchar(20) NOT NULL,
  `password_driver` varchar(150) NOT NULL,
  `code_taxi` varchar(50) NOT NULL,
  `placas_taxi` varchar(50) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `tipo_auto` varchar(20) NOT NULL,
  `activo` int(1) NOT NULL,
  `sindical` varchar(20) NOT NULL,
  `base` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `driver`
--

INSERT INTO `driver` (`id_driver`, `name_driver`, `paterno_driver`, `materno_driver`, `emails_driver`, `image_driver`, `phone_driver`, `password_driver`, `code_taxi`, `placas_taxi`, `calle`, `colonia`, `numero`, `tipo_auto`, `activo`, `sindical`, `base`) VALUES
(22, 'Edga', 'Alan', 'Poe', 'sa@a.com', '1', '123456723', 'd4b30990581becf79a73ae93d83e0c7b22a37a138df7766b2378f7749adb52b3', 'COD-okmn', 'ppappap', 'amuerto', 'eres', '219', '1', 1, 'asdfk', 'plpl'),
(20, 'Pedro', 'Castro', 'Quintanilla', 'a@a.com', '/assets/img/default.png', '6181138046', 'a20d2e01959dc2b755f8cd1dd2e2b09b319ed65f8c43f1a0dfe532aba6b16f49', 'COD-oosp', 'ppallallal', 'a', 'Centro', '11', '', 1, '', ''),
(19, 'Eduardo', 'Pinedo', 'Velarde', 'a@a.com', '/assets/img/default.png', '123456789', 'a9bf4e7f2638db57b50fe8f3299b5efe30dfefb355745c63b3ce754cbb172e31', 'COD-oosp', 'ppallallal', '20 de Noviembre', 'Centro', '1', '', 0, '', ''),
(18, 'Samael', 'Romero', 'Zubia', 'a@a.com', '/assets/img/default.png', '123456789', '2b4539bab4d2a10dd607f82e9bf93fd388ca48ea56e6ddd522fe02a0c917d5a7', 'a1212', 'wweweaa', 'asdfg', 'asdfghjkl', '11', '', 0, '', ''),
(14, 'Antonio', 'Alvarez', 'Guevara', 'tokyo.blue.tsubasa@gmaill.com', '/assets/img/default.png', '6181138046', '917c7d6ddc0fcc89933a3fb988442fdd00d14972b8b9369f6e7c45e9e5dd46b4', 'COD-oosp', 'ppallallal', 'De Las Palmas', 'Valle Verde', '102', '', 0, '', ''),
(23, 'Carlos', 'Villa', 'Avila', 'a@a.com', '/assets/img/default.png', '123456789', '8a548594aed570d5bdb61edf78975fdb4ef67e236121645af71c8a2ac3c86b94', 'COD-oosp', 'ppallallal', '20 de Noviembre', 'aaa', '102', '', 0, '', ''),
(21, 'Jorge Orlando', 'Carrasco', 'Poe', 'a@a.com', '/assets/img/default.png', '6181138046', 'f16f9df4639c36e36f524ceeb0604f7cd2fb8bf2c6aeb53cd3436b54a1800b59', 'COD-oosp', 'ppallallal', '20 de Noviembre', 'Centro', '12', '', 0, '', ''),
(24, 'Diego', 'Acosta', 'Simental', 'a@a.com', '/assets/img/default.png', '6181138046', 'd6f2b43c801b857ac114c8de688bcf1f0d8680ed80501c75a2d7919262e3b6ee', 'COD-oosp', 'ppallallal', '20 de Noviembre', 'Centro', '200', '', 0, '', ''),
(26, 'Aldo', 'Garcia', 'Urbina', 'a@a.com', '/assets/img/default.png', '6181138046', 'a20d2e01959dc2b755f8cd1dd2e2b09b319ed65f8c43f1a0dfe532aba6b16f49', 'COD-oosp', 'plplpl', 'a', 'Valle Verde', '102', 'Atos', 1, '', ''),
(27, 'Carlos Gerardo', 'Villa', 'Avila', 'okyo.blue.tsubasa@gmaill.com', '/assets/img/logo.png', '123456723', 'fdddf0d3ba91e98a8b9a7fafb9b6ae7f5704e9b34443b37e4799c508b57d3a26', 'COD-oospa', 'ppallallala', 'Por ahi', 'Vaalle Verde', '112', 'Spark', 1, 'qaqqaqa', 'Base PAseo Durango'),
(28, 'Isaias', 'Medina', 'Beltran', 'tokyo.blue.tsubasa@gmaill.com', '/assets/img/default.png', '6181138046', 'a20d2e01959dc2b755f8cd1dd2e2b09b319ed65f8c43f1a0dfe532aba6b16f49', 'a1212', 'kakoa', 'De Las Palmas', 'Centro', '102', 'Tsuru', 1, 'qwqwqw', 'Base 87'),
(29, 'isaac', 'valenzuela', 'escobedo', 'aa@a.com', '/assets/img/default.png', 'asaa', '', 'asas', 'asas', 'Ca', 'aa', 'as', 'Tsuru', 1, 'asasa', 'Base 87'),
(30, 'Ivam', 'Esquivel', 'Medina', 'zsckare@gmail.com', '1', '1234567', '0ae98847dfc7eff7589d839e8a00510e70a8475b1172ef802d1b23e7e4ee7809', 'COD-oosp', 'ppallallal', 'a', 'a', 'a', 'Atos', 1, 'qwqwqw', 'Base Paseo Durango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id_foto` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_foto`, `ruta`) VALUES
(1, '/assets/img/logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `id_servico` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_driver` int(11) NOT NULL,
  `disponible` int(1) NOT NULL,
  `inico` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `dirfisica` varchar(100) NOT NULL,
  `lat_driver` varchar(100) NOT NULL,
  `lon_driver` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servico`, `id_cliente`, `fechainicio`, `fechafin`, `id_driver`, `disponible`, `inico`, `latitud`, `longitud`, `dirfisica`, `lat_driver`, `lon_driver`) VALUES
(79, 51, '0000-00-00', '2015-08-20 23:49:44', 30, 0, '0000-00-00 00:00:00', '23.9945401', '-104.64727189999999', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(80, 51, '0000-00-00', '2015-08-20 23:51:58', 30, 2, '0000-00-00 00:00:00', '23.994551899999998', '-104.6472969', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(81, 51, '0000-00-00', '2015-08-21 00:03:14', 30, 2, '0000-00-00 00:00:00', '23.9945038', '-104.6472361', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(82, 51, '0000-00-00', '2015-08-21 00:05:47', 30, 2, '0000-00-00 00:00:00', '23.994540900000004', '-104.6472701', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(83, 51, '0000-00-00', '2015-08-21 00:06:44', 30, 2, '0000-00-00 00:00:00', '23.994526', '-104.6472715', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(84, 51, '0000-00-00', '2015-08-21 00:15:39', 30, 2, '0000-00-00 00:00:00', '23.994518', '-104.64726859999999', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(85, 51, '0000-00-00', '2015-08-21 00:34:14', 30, 2, '0000-00-00 00:00:00', '23.9944925', '-104.6472373', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(86, 51, '0000-00-00', '2015-08-21 00:36:22', 30, 2, '0000-00-00 00:00:00', '23.994498800000002', '-104.64724779999999', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(87, 51, '0000-00-00', '2015-08-21 00:37:03', 30, 2, '0000-00-00 00:00:00', '23.994484099999998', '-104.6472285', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(88, 51, '0000-00-00', '2015-08-21 00:41:19', 30, 2, '0000-00-00 00:00:00', '23.994493799999997', '-104.6472483', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(89, 51, '0000-00-00', '2015-08-21 00:43:35', 30, 2, '0000-00-00 00:00:00', '23.9945147', '-104.6472673', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(90, 51, '0000-00-00', '2015-08-21 00:44:55', 30, 2, '0000-00-00 00:00:00', '23.994505099999998', '-104.64727409999999', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(91, 51, '0000-00-00', '2015-08-21 00:45:49', 30, 2, '0000-00-00 00:00:00', '23.9944857', '-104.6472312', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(92, 51, '0000-00-00', '2015-08-21 00:46:46', 30, 2, '0000-00-00 00:00:00', '23.994489899999998', '-104.64720469999999', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(93, 51, '0000-00-00', '2015-08-21 00:49:16', 30, 2, '0000-00-00 00:00:00', '23.9945092', '-104.647263', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(94, 51, '0000-00-00', '2015-08-21 00:50:40', 30, 2, '0000-00-00 00:00:00', '23.9945147', '-104.6472737', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(95, 51, '0000-00-00', '2015-08-21 00:52:52', 30, 2, '0000-00-00 00:00:00', '23.994515', '-104.647251', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(96, 51, '0000-00-00', '2015-08-21 00:55:16', 30, 2, '0000-00-00 00:00:00', '23.994550699999998', '-104.6472644', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(97, 51, '0000-00-00', '2015-08-21 14:23:38', 30, 2, '0000-00-00 00:00:00', '23.9944343', '-104.6472737', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(98, 51, '0000-00-00', '2015-08-21 14:25:04', 0, 1, '0000-00-00 00:00:00', '23.9944343', '-104.6472737', 'Valle Verde, Durango, Dgo., MÃ©xico', '', ''),
(99, 51, '0000-00-00', '2015-08-21 14:25:22', 0, 1, '0000-00-00 00:00:00', '23.9944343', '-104.6472737', 'Valle Verde, Durango, Dgo., MÃ©xico', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `avatar_user` varchar(255) NOT NULL,
  `type_user` varchar(55) NOT NULL,
  `email_user` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `password_user`, `avatar_user`, `type_user`, `email_user`) VALUES
(3, 'zsckare', '0ae98847dfc7eff7589d839e8a00510e70a8475b1172ef802d1b23e7e4ee7809', '', 'admin', ''),
(4, 'admin', 'c1f480c51c8cdc933fc8318cb5073a3b956832f59a5bbdc91d5ce28dfc6b1190', '', 'admin', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id_base`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servico`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `base`
--
ALTER TABLE `base`
  MODIFY `id_base` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
