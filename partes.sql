-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2016 a las 03:48:47
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `partes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `ciudad` varchar(300) NOT NULL,
  `lugar` varchar(300) NOT NULL,
  `recomendacion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `ciudad`, `lugar`, `recomendacion`) VALUES
(1, 'BENJA', 'BMX', 'RIO GRANDE', 'SI', 'BIKE Y SKATE PARK RG'),
(2, 'ben', 'asdasd', 'ssad', '123', 'asdf'),
(3, 'paul', 'cabrer', 'balcar-C', 'si', 'Skate-park'),
(4, 'manu', 'ramirez', 'buenos ares', 'si', 'getto'),
(5, 'juan', 'sanchez', 'ushuaia', 'si', 'street-view(google)'),
(6, 'asdfasdfasdfasdfasdfasdf', 'asdfasdfasdf', 'asdfasdf', 'asdfasdfa', 'afsdfasdfa'),
(7, 'werqwerqr', 'qwerqrqer', 'rqwerqweqer', 'qwerqwerq', 'rerqwerqewr'),
(8, 'benajbmx2', 'benjabmx2', 'benjabmx2', 'benjabmx2', 'benjabmx2'),
(9, 'qwererq', 'qwerqer', 'rqwerwqwer|', 'qwerqewr||', 'qwerqwer'),
(10, 'bbb', 'bbb', 'bb', 'bbb', 'bbbbbbb'),
(11, 'bneajb', 'ajvsnakjsdv', 'vnaejknvaksdjv', 'anskvajsdnvkad', 'aoksndajsdnkjdsnva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `id_partes` int(11) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `id_partes`, `ruta`) VALUES
(1, 57, 'images/aros.jpg'),
(2, 58, 'images/aros.jpg'),
(3, 58, 'images/asiento.jpg'),
(4, 59, 'images/cuadro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenskate`
--

CREATE TABLE `imagenskate` (
  `id` int(11) NOT NULL,
  `id_parte` int(11) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parte`
--

CREATE TABLE `parte` (
  `id_parte` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `marca` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parte`
--

INSERT INTO `parte` (`id_parte`, `precio`, `nombre`, `marca`) VALUES
(57, 54, 'ff', 'gg ici'),
(59, 5200, 'cuadro', 'Federal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parteskate`
--

CREATE TABLE `parteskate` (
  `id_parte` int(11) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `marca` varchar(300) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenskate`
--
ALTER TABLE `imagenskate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parte`
--
ALTER TABLE `parte`
  ADD PRIMARY KEY (`id_parte`);

--
-- Indices de la tabla `parteskate`
--
ALTER TABLE `parteskate`
  ADD PRIMARY KEY (`id_parte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `imagenskate`
--
ALTER TABLE `imagenskate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parte`
--
ALTER TABLE `parte`
  MODIFY `id_parte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `parteskate`
--
ALTER TABLE `parteskate`
  MODIFY `id_parte` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
