DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `Produit` varchar(255) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL,
  `Prix` int(11) DEFAULT NULL
);

INSERT INTO `Products` (`Produit`, `Quantite`, `Prix`) VALUES
('Voiture', 20, 200),
('Poupee', 30, 300),
('train', 40, 400),
('serpent', 50, 500);