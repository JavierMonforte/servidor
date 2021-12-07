USE `mvc`;

DROP TABLE IF EXISTS `tipoServicios`;
CREATE TABLE `tipoServicios` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `tipoServicios` (`id`, `tipo`) VALUES
(1, 'corte'),
(2, 'color'),
(3, 'mechas'),
(4, 'manos'),
;
