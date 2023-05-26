-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
-- DROP TABLE IF EXISTS Customers;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;

-- Créer la base de données
CREATE DATABASE IF NOT EXISTS db;
USE db;

-- Créer la table
CREATE TABLE IF NOT EXISTS cadeau (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price FLOAT(10, 2) NOT NULL,
  qte INTEGER NOT NULL
);

-- Insérer des données dans la table
INSERT INTO cadeau (name, price, qte) VALUES
  ('peluche', 11.50, 3),
  ('voiture', 5.36, 5),
  ('echec', 9.99, 7);

-- Créer un utilisateur pour accéder à la base de données
CREATE USER IF NOT EXISTS 'userdb'@'%' IDENTIFIED BY 'Zh0qtDbBRiKsmX4V8dES';

-- Accorder tous les privilèges à l'utilisateur sur la base de données
GRANT ALL PRIVILEGES ON db.* TO 'userdb'@'%';


