-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 20:27:44
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_jugadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombreEquipo` varchar(25) NOT NULL,
  `pais` varchar(25) NOT NULL,
  `campeonatos` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombreEquipo`, `pais`, `campeonatos`) VALUES
(2, 'River Plate', 'Argentina', 56),
(4, 'San Lorenzo', 'Argentina', 22),
(5, 'Boca Juniors', 'Argentina', 70),
(7, 'Racing Club', 'Arg', 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `partidosJugados` int(100) NOT NULL,
  `goles` int(100) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `partidosJugados`, `goles`, `id_equipo`) VALUES
(7, 'Roberto', 40, 3, 2),
(20, 'Carlos', 40, 2, 4),
(21, 'Juan', 30, 5, 5),
(22, 'Ricardo', 2, 5, 2),
(23, 'Carlitos', 177, 25, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nick` varchar(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nick`, `usuario`, `contraseña`) VALUES
(1, 'juanpagola', 'admin@gmail.com', '$2y$10$Tms4Lo5VEy/ClHDIHyCOTe2I4LJuDo0S5Ga0tNdhjGXacyAaccoNS'),
(2, 'juanpagola3', 'admin@gmail.coma', '$2y$10$Y1rczzWY01PVBHlMTKCq9eaznLCdLXzn0KinVu161OMLW/uEGiMQa'),
(3, 'juanpagola', 'admin@gmail.com3', '$2y$10$tBLJFGAzogeY2LWr5sfft.FyOerlhMk3aF6oQTr/ix2bYmQ8HcJ1u'),
(4, 'juanpagola', 'ee@ee', '$2y$10$3CWAhXikei9SxHOwcguYzuzTt4FnUoyxYOd5fabfwlc7N3Dv8dydS'),
(5, 'agustin', 'agustin@gmail.com', '$2y$10$o0vy9NSbl46xxog1DRwQXuWnzRPumLXnrh.AsXoZZMVNA.4X7LmGC'),
(6, 'agusti', 'agus@gmail.com', '$2y$10$t6I5MrRuH/HMRG.1Vih6BuKlASHG2mrGfFfst.j3lZRUUOYRgG0dK'),
(7, 'juan', 'admin1@gmail.com', '$2y$10$kimqxXsCp/ICivKkFWrchu1q1RCszuXSMMnuqr/RyhHt1mvAQrFQS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_equipo` (`id_equipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_id_equipo` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
