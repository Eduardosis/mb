-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 20:11:06
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
use moneybank
--
-- Base de datos: `moneybank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idcompra` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `membresia` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `compañia_servicio` varchar(30) NOT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idcompra`, `precio`, `membresia`, `fecha`, `compañia_servicio`, `correo`) VALUES
(3, 139, 'mensual', '2020-12-07 02:49:28', 'Netflix', NULL),
(4, 139, 'mensual', '2020-12-07 02:49:55', 'Netflix', NULL),
(5, 139, 'basico', '2020-12-07 02:49:55', 'Netflix', NULL),
(6, 196, 'Estandar', '0000-00-00 00:00:00', 'Netflix', NULL),
(7, 196, 'Estandar', '0000-00-00 00:00:00', 'Netflix', NULL),
(8, 196, 'Estandar', '2020-12-07 02:59:30', 'Netflix', NULL),
(9, 196, 'Estandar', '2020-12-07 02:59:30', 'Netflix', NULL),
(10, 196, 'Estandar', '2020-12-07 02:59:51', 'Netflix', NULL),
(11, 196, 'Estandar', '2020-12-07 02:59:51', 'Netflix', NULL),
(12, 266, 'Premium', '2020-12-07 03:02:23', 'Netflix', NULL),
(13, 266, 'Premium', '2020-12-07 03:02:23', 'Netflix', NULL),
(14, 139, 'basico', '2020-12-08 23:08:41', 'Netflix', 'Eduardo@gmail.com'),
(15, 139, 'basico', '2020-12-08 23:08:35', 'Netflix', 'Eduardo@gmail.com'),
(16, 139, 'basico', '2020-12-08 23:08:30', 'Netflix', 'Eduardo@gmail.com'),
(17, 139, 'basico', '2020-12-07 03:10:40', 'Netflix', NULL),
(18, 115, 'Individual', '2020-12-07 03:11:43', 'Spotify', NULL),
(19, 115, 'Individual', '2020-12-07 03:11:43', 'Spotify', NULL),
(20, 149, 'Duo', '2020-12-07 03:16:09', 'Spotify', NULL),
(21, 179, 'Familiar', '2020-12-07 03:16:11', 'Spotify', NULL),
(22, 5, 'Mensual', '2020-12-07 03:21:46', 'GeForce', NULL),
(23, 5, 'Mensual', '2020-12-07 03:21:46', 'GeForce', NULL),
(24, 25, 'Semestral', '2020-12-07 03:31:33', 'GeForce', NULL),
(25, 100, 'Anual', '2020-12-07 03:31:36', 'GeForce', NULL),
(26, 229, 'Ultimate', '2020-12-07 03:40:32', 'GamePass', NULL),
(27, 229, 'Ultimate', '2020-12-07 03:40:32', 'GamePass', NULL),
(28, 149, 'PC', '2020-12-07 03:41:58', 'GamePass', NULL),
(29, 149, 'Consola', '2020-12-07 03:42:00', 'GamePass', NULL),
(30, 149, 'PC', '2020-12-07 03:42:01', 'GamePass', NULL),
(31, 149, 'PC', '2020-12-07 03:42:01', 'GamePass', NULL),
(32, 229, 'Ultimate', '2020-12-07 03:43:09', 'GamePass', NULL),
(33, 5, 'Mensual', '2020-12-07 22:39:55', 'GeForce', NULL),
(35, 5, 'Mensual', '2020-12-09 01:19:11', 'GeForce', 'Eduardo@gmail.com'),
(36, 25, 'semestral', '2020-12-09 01:23:54', 'GeForce', 'Eduardo@gmail.com'),
(37, 25, 'semestral', '2020-12-09 01:24:41', 'GeForce', 'Eduardo@gmail.com'),
(38, 299, 'Ultimate', '2020-12-09 01:30:37', 'GeForce', 'Eduardo@gmail.com'),
(39, 149, 'PC', '2020-12-09 01:32:13', 'GeForce', 'Eduardo@gmail.com'),
(40, 149, 'Consola', '2020-12-09 01:32:14', 'GeForce', 'Eduardo@gmail.com'),
(41, 115, 'Individual', '2020-12-09 01:36:20', 'Spotify', 'Eduardo@gmail.com'),
(42, 149, 'Duo', '2020-12-09 01:38:15', 'Spotify', 'Eduardo@gmail.com'),
(43, 266, 'Premium', '2020-12-09 01:41:28', 'Netflix', 'Eduardo@gmail.com'),
(44, 139, 'Basico', '2020-12-09 02:11:02', 'Netflix', 'Oscar@hotmail.com'),
(45, 25, 'semestral', '2020-12-09 02:33:56', 'GeForce', 'Oscar@hotmail.com'),
(46, 100, 'anual', '2020-12-09 02:38:58', 'GeForce', 'jesus@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `appat` varchar(30) NOT NULL,
  `apmat` varchar(30) NOT NULL,
  `numtarjeta` bigint(20) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`correo`, `contraseña`, `nombre`, `appat`, `apmat`, `numtarjeta`, `cvv`) VALUES
('Eduardo@gmail.com', 'Eduardo12', 'Eduardo', 'Lopez', 'Gonzalez', 1234567898765432, 933),
('jesus@gmail.com', 'jesus12', 'jesus', 'hernandez', 'cortez', 0, 0),
('Oscar@hotmail.com', 'Oscar12', 'Oscar', 'Palafox', 'Loredo', 1234123412341234, 420);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `numtarjeta` bigint(20) NOT NULL,
  `cvv` int(11) NOT NULL,
  `Dinero` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`numtarjeta`, `cvv`, `Dinero`, `correo`) VALUES
(1234123456785678, 123, 10000, 'Oscar@hotmail.com'),
(1234567812345678, 142, 10000, 'jesus@gmail.com'),
(1234567898765432, 933, 6000, 'Eduardo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idcompra`),
  ADD KEY `fk_correo` (`correo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`numtarjeta`),
  ADD KEY `fk_tarjeta_registro` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idcompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_correo` FOREIGN KEY (`correo`) REFERENCES `registro` (`correo`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `fk_tarjeta_registro` FOREIGN KEY (`correo`) REFERENCES `registro` (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
