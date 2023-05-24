-- DROP TABLE IF EXISTS `Products`;

-- CREATE TABLE `Products` (
--   `Produit` varchar(255) DEFAULT NULL,
--   `Quantite` int(11) DEFAULT NULL,
--   `Prix` int(11) DEFAULT NULL
-- );

-- INSERT INTO `Products` (`Produit`, `Quantite`, `Prix`) VALUES
-- ('Voiture', 20, 200),
-- ('Poupee', 30, 300),
-- ('train', 40, 400),
-- ('serpent', 50, 500);

DROP TABLE IF EXISTS `Customers`;

CREATE TABLE `Customers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
);

INSERT INTO `Customers` (`Nom`, `Email`) VALUES
('Jean Dupont', 'jean.dupont@example.com'),
('Marie Lambert', 'marie.lambert@example.com'),
('Pierre Leclerc', 'pierre.leclerc@example.com'),
('Sophie Martin', 'sophie.martin@example.com');
