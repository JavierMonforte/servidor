USE `pelu`;

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `servicio` varchar(50) DEFAULT NULL,
  `tipoServicio` int,
  `precio` double not null,
  INDEX (type_id),
 FOREIGN KEY (tipoServicio) REFERENCES product_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `citas` VALUES
(1, 'Pelo Corto', 1, 0.8),
(2, 'Media Melena', 1, 1),
(3, 'Pelo Largo', 1, 1),
(4, 'Morena', 2, 1),
(5, 'Rubia', 2, 3),
(6, 'Pelirroja', 2, 3)
;