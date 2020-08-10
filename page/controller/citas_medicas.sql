-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2017 a las 19:54:54
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas_medicas`
--
CREATE DATABASE IF NOT EXISTS `citas_medicas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `citas_medicas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `fecha_c` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_horarios` date NOT NULL,
  `quirofano` enum('quirofano A','quirofano B','quirofano C','quirofano D') NOT NULL,
  `hora` time NOT NULL,
  `estado` enum('disponible','asignado','ocupado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `fecha_c`, `fecha_horarios`, `quirofano`, `hora`, `estado`) VALUES
(3, '2017-04-10 12:43:07', '2017-04-25', 'quirofano A', '07:00:00', 'disponible'),
(4, '2017-04-10 12:43:07', '2017-04-25', 'quirofano A', '07:30:00', 'disponible'),
(5, '2017-04-10 12:44:52', '2017-04-25', 'quirofano A', '08:00:00', 'disponible'),
(6, '2017-04-10 12:44:52', '2017-04-25', 'quirofano A', '08:30:00', 'disponible'),
(7, '2017-04-10 12:44:52', '2017-04-25', 'quirofano A', '09:00:00', 'disponible'),
(8, '2017-04-10 12:44:52', '2017-04-25', 'quirofano A', '09:30:00', 'disponible'),
(9, '2017-04-10 12:44:52', '2017-04-25', 'quirofano A', '10:00:00', 'disponible'),
(10, '2017-04-10 12:44:52', '2017-04-25', 'quirofano A', '10:30:00', 'disponible'),
(11, '2017-04-10 12:46:11', '2017-04-25', 'quirofano B', '13:00:00', 'disponible'),
(12, '2017-04-10 12:46:11', '2017-04-25', 'quirofano B', '13:30:00', 'disponible'),
(13, '2017-04-10 12:46:11', '2017-04-25', 'quirofano B', '14:00:00', 'disponible'),
(14, '2017-04-10 12:46:11', '2017-04-25', 'quirofano B', '14:30:00', 'disponible'),
(15, '2017-04-10 12:46:11', '2017-04-25', 'quirofano B', '15:00:00', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `is_active`, `is_admin`, `created_at`) VALUES
(1, 'admin', 'andres2805', 1, 1, '2017-03-02 10:08:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
