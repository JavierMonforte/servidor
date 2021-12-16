USE `pelu`;

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `idservicio` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `servicio` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipoServicio` varchar(50) DEFAULT NULL,
  `precio` double not null,
  INDEX (`idservicio`),
 FOREIGN KEY (tipoServicio) REFERENCES tipoServicios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `servicios` VALUES
(1, 'Pelo Corto','', 'corte', 20.8),
(2, 'Media Melena','', 'corte', 18.23),
(3, 'Pelo Largo','', 'corte', 19.35),
(4, 'Morena','', 'color', 16.23),
(5, 'Rubia','', 'color', 24.50),
(6, 'Pelirroja','', 'color', 23)
;


