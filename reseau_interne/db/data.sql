DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `Product` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
);

INSERT INTO `Products` (`Product`, `Quantity`, `Price`) VALUES
('Teddy Bear', 10, 100),
('Car', 20, 200),
('Doll', 30, 300),
('Train', 40, 400),
('Snakes', 50, 500);