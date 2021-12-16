-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 11-12-2021 a las 14:01:25
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pelu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `nombre`, `url`, `descripcion`) VALUES
(17, 'Flequillo recto', 'app/img/galeria/color-2867136__340.webp', 'Atrévete a cortar tu flequillo recto, justo a ras de tus cejas.'),
(18, 'Pixie', 'app/img/galeria/hair-1097112__340.webp', 'Con flequillo asimétrico, para un toque original.'),
(19, 'Mullet', 'app/img/galeria/hair-salons-1479266__340.webp', 'Miley Cyrus es la máxima exponente de este corte rockero, que deja una sección de pelo más larga en la nuca, a modo de mullet.'),
(20, '\'Long bob\' con raya en medio', 'app/img/galeria/models-3740625__340.webp', 'Una versión del bob más larga, con un corte justo por encima de los hombros. Este peinado favorece a los rostros redondos y cuadrados.'),
(21, 'Pixie natural', 'app/img/galeria/models-3740627__340.webp', 'Corto, respetando el crecimiento natural del pelo.'),
(22, 'Media melena con ondas marcadas', 'app/img/galeria/media-melena-1622401652.jpg', 'Con ondas marcadas, justo por encima de los hombros.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idservicio` int(11) NOT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipoServicio` int(11) DEFAULT NULL,
  `precio` double NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idservicio`, `servicio`, `descripcion`, `tipoServicio`, `precio`, `genero`, `tiempo`) VALUES
(1, '\'Short bob\' clásico', 'Elegante y refinado, se caracteriza por su largura a la altura de la barbilla y representa el equili', 1, 20.8, 'Ambos', 1),
(2, '\'Short bob\' con puntas para dentro', 'Con las puntas metidas para dentro, para un look más pulido.', 1, 21, 'Femenino', 1),
(3, 'Pelo largo a capas', 'Un clásico. Hay determinados cortes de pelo que aportan volumen a la melena, pero el más eficaz es e', 1, 31, '', 1),
(4, 'SMOKY GOLD', '', 2, 21, '', 1),
(5, 'SMOKY BRUNETTE', '', 2, 23, '', 1),
(6, 'Pelirroja', '', 2, 23, '', 1),
(7, 'Flequillo abierto y desfilado', 'El flequillo más juvenil, despuntado y abierto en la parte central.', 1, 19.32, 'Ambos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoServicios`
--

CREATE TABLE `tipoServicios` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoServicios`
--

INSERT INTO `tipoServicios` (`id`, `tipo`) VALUES
(1, 'corte'),
(2, 'color'),
(3, 'mechas'),
(4, 'manos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `fechaNacimiento`, `password`, `active`, `admin`) VALUES
(1, 'Pepe', 'Navarro', 'admin@penya.com', '2001-04-01', '$2y$10$0/oePPaSXwTdNbAcf1ikCuH8p2TiXR/PjiQf2ENubjVCBpR0dijm6', 0, 1),
(2, 'Ana', 'Garcí­a', 'anagarcia@penya.com', '2001-04-01', '$2y$10$5MRALK1ZDCbVy80aRcj26eM71P4EEbn.qAN/aRt1e5LkpkFIpyK2u', 0, 1),
(3, 'Juan', 'Sánchez', 'juan@penya.com', '2001-02-17', '$2y$10$j5p3bDa7XKh1Ovfwi6Clk./OTvQm38cj2jnjweiLlEHW7P4HZbpDy', 0, 0),
(4, 'Antonio', 'López', 'antonio@penya.com', '2001-08-18', '$2y$10$IoFM/bL4SGljDImBW5SpZOkf2WdWirqnUIrIG2lAKZXUnO/hZF2AS', 0, 0),
(5, 'Marisa', 'Gonzáliz', 'marisa@penya.com', '2001-01-14', '$2y$10$TM8HWJxb3.pnb8wAWPxbiuQhy4SK/dOs8fpNO5PEyOl/wy/Rwgb9a', 0, 0),
(6, 'Toni', 'López', 'toni@penya.com', '2001-08-18', '$2y$10$9clgxrMn5kjHwoXM3brUA.d7KOIX0Cf7opedjdw0reygFuK33T/Fm', 0, 0),
(7, 'Nacho', 'Villa', 'nacho@penya.com', '2001-08-18', '$2y$10$8H3WoFssJ.SvOb.kUjAC6.fAOqjJKHocqpA.ZD7NAIII4B4oHNU8m', 0, 0),
(8, 'Javier', 'Monforte Taboada', 'jmonforte@fontecabras.es', '1977-07-24', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_servicio`
--

CREATE TABLE `user_servicio` (
  `user_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_servicio`
--

INSERT INTO `user_servicio` (`user_id`, `servicio_id`) VALUES
(1, 1),
(1, 2),
(2, 4),
(1, 6),
(2, 6),
(3, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idservicio`),
  ADD KEY `idservicio` (`idservicio`),
  ADD KEY `tipoServicio` (`tipoServicio`);

--
-- Indices de la tabla `tipoServicios`
--
ALTER TABLE `tipoServicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `user_servicio`
--
ALTER TABLE `user_servicio`
  ADD PRIMARY KEY (`user_id`,`servicio_id`),
  ADD KEY `servicio_id` (`servicio_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idservicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipoServicios`
--
ALTER TABLE `tipoServicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`tipoServicio`) REFERENCES `tipoServicios` (`id`);

--
-- Filtros para la tabla `user_servicio`
--
ALTER TABLE `user_servicio`
  ADD CONSTRAINT `user_servicio_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_servicio_ibfk_2` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`idservicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
