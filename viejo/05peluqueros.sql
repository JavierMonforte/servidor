USE `pelu`;

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `clasificacion` varchar(50) DEFAULT NULL,
  `precio` double not null,
  
  INDEX (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `personal` VALUES
(1, 'Javier','Perez', "Junior", 20),
(2, 'Maria','Bernal', "Junior", 20),
(3, 'Candida','Rodriguez', "Senior", 60),
(4, 'Ruben','Notivol', "Junior", 20),
(5, 'Silvia','Pallares', "Junior", 20),
;
