USE `pelu`;

DROP TABLE IF EXISTS `servicios`;
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

INSERT INTO `servicios` VALUES
(1, 'Pelo Corto','', 1, 20.8,'',1),
(2, 'Media Melena','', 1, 21,'',1),
(3, 'Pelo Largo','', 1, 31,'',1),
(4, 'Morena','', 2, 21,'',1),
(5, 'Rubia','', 2, 23,'',1),
(6, 'Pelirroja','', 2, 23,'',1)
;


