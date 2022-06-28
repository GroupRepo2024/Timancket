-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 28 juin 2022 à 09:06
-- Version du serveur : 8.0.29-0ubuntu0.22.04.2
-- Version de PHP : 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `WEB_incident_ticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `Paccount`
--

CREATE TABLE `Paccount` (
  `id_particulier` int NOT NULL,
  `pseudo_particulier` varchar(100) NOT NULL,
  `email_particulier` varchar(100) NOT NULL,
  `password_particulier` text NOT NULL,
  `ip_particulier` varchar(20) NOT NULL,
  `date_inscription_particulier` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Paccount`
--
ALTER TABLE `Paccount`
  ADD PRIMARY KEY (`id_particulier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Paccount`
--
ALTER TABLE `Paccount`
  MODIFY `id_particulier` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
