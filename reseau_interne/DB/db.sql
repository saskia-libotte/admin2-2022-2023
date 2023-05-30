
CREATE DATABASE IF NOT EXISTS db;
USE db;

# creer la table 
CREATE TABLE IF NOT EXISTS cadeau (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price FLOAT(10, 2) NOT NULL
);

# on insère les données 
INSERT INTO cadeau (name, price) VALUES
  ('peluche', 20.3),
  ('voiture', 150.2),
  ('echec', 30.54);

# creer un user
CREATE USER IF NOT EXISTS 'userdb'@'%' IDENTIFIED BY 'Zh0qtDbBRiKsmX4V8dES';

# Accorder tous les privilèges à l'utilisateur sur la base de données
GRANT ALL PRIVILEGES ON db.* TO 'userdb'@'%';


