USE `pelu`;

DROP TABLE IF EXISTS `employee_service`;
CREATE TABLE `employee_service` (
  `employee_id` int NOT NULL,
  `service_id` int NOT NULL,
 PRIMARY KEY (employee_id, service_id),
 FOREIGN KEY (employee_id) REFERENCES employee(id),
 FOREIGN KEY (service_id) REFERENCES service(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `employee_service` VALUES
(1, 1),
(1, 2)
;


