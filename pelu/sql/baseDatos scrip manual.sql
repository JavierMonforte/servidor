CREATE DATABASE IF NOT EXISTS `pelu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pelu`;


SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `users` ON CASCADE;
DROP TABLE IF EXISTS `servicios` ON CASCADE;
DROP TABLE IF EXISTS `tipoServicios` ON CASCADE;
DROP TABLE IF EXISTS `user_servicios` ON CASCADE;
DROP TABLE IF EXISTS `fotos` ON CASCADE;


SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `tipoServicios` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` BOOLEAN DEFAULT false,
  `admin` BOOLEAN DEFAULT false,
  UNIQUE INDEX (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `servicios` (
  `idservicio` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `servicio` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipoServicio` int,
  `precio` double not null,
  `genero` varchar(50) DEFAULT NULL,
  `tiempo` int DEFAULT NULL,
  INDEX (`idservicio`),
 FOREIGN KEY (tipoServicio) REFERENCES tipoServicios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

USE `pelu`;

DROP TABLE IF EXISTS `user_servicio`;
CREATE TABLE `user_servicio` (
  `user_id` int NOT NULL,
  `servicio_id` int NOT NULL,
 PRIMARY KEY (user_id, servicio_id),
 FOREIGN KEY (user_id) REFERENCES users(id),
 FOREIGN KEY (servicio_id) REFERENCES servicios(idservicio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `fotos` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tipoServicios` (`id`, `tipo`) VALUES
(1, 'corte'),
(2, 'color'),
(3, 'mechas'),
(4, 'manos')
;

INSERT INTO `servicios` (`idservicio`, `servicio`, `descripcion`, `tipoServicio`, `precio`, `genero`, `tiempo`) VALUES
(1, '\'Short bob\' clásico', 'Elegante y refinado, se caracteriza por su largura a la altura de la barbilla y representa el equili', 1, 20.8, 'Ambos', 1),
(2, '\'Short bob\' con puntas para dentro', 'Con las puntas metidas para dentro, para un look más pulido.', 1, 21, 'Femenino', 1),
(3, 'Pelo largo a capas', 'Un clásico. Hay determinados cortes de pelo que aportan volumen a la melena, pero el más eficaz es e', 1, 31, '', 1),
(4, 'SMOKY GOLD', '', 2, 21, '', 1),
(5, 'SMOKY BRUNETTE', '', 2, 23, '', 1),
(6, 'Pelirroja', '', 2, 23, '', 1),
(7, 'Flequillo abierto y desfilado', 'El flequillo más juvenil, despuntado y abierto en la parte central.', 1, 19.32, 'Ambos', 2);

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `fechaNacimiento`, `admin`) VALUES
(1, 'Pepe', 'Navarro', 'admin@penya.com', '2001-4-1', 1),
(2, 'Ana', 'Garcí­a', 'anagarcia@penya.com', '2001-4-1', 1),
(3, 'Juan', 'Sánchez', 'juan@penya.com', '2001-2-17', 0),
(4, 'Antonio', 'López', 'antonio@penya.com', '2001-8-18', 0),
(5, 'Marisa', 'Gonzáliz', 'marisa@penya.com', '2001-1-14', 0),
(6, 'Toni', 'López', 'toni@penya.com', '2001-8-18', 0),
(7, 'Nacho', 'Villa', 'nacho@penya.com', '2001-8-18', 0)
;
INSERT INTO `user_servicio` (`user_id`, `servicio_id`) VALUES
(1, 1),
(1, 2),
(2, 4),
(1, 6),
(2, 6),
(3, 7);


INSERT INTO `fotos` (`id`, `nombre`, `url`, `descripcion`) VALUES
(17, 'Flequillo recto', 'app/img/galeria/color-2867136__340.webp', 'Atrévete a cortar tu flequillo recto, justo a ras de tus cejas.'),
(18, 'Pixie', 'app/img/galeria/hair-1097112__340.webp', 'Con flequillo asimétrico, para un toque original.'),
(19, 'Mullet', 'app/img/galeria/hair-salons-1479266__340.webp', 'Miley Cyrus es la máxima exponente de este corte rockero, que deja una sección de pelo más larga en la nuca, a modo de mullet.'),
(20, '\'Long bob\' con raya en medio', 'app/img/galeria/models-3740625__340.webp', 'Una versión del bob más larga, con un corte justo por encima de los hombros. Este peinado favorece a los rostros redondos y cuadrados.'),
(21, 'Pixie natural', 'app/img/galeria/models-3740627__340.webp', 'Corto, respetando el crecimiento natural del pelo.'),
(22, 'Media melena con ondas marcadas', 'app/img/galeria/media-melena-1622401652.jpg', 'Con ondas marcadas, justo por encima de los hombros.');

