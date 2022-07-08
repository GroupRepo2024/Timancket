-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 02 juil. 2022 à 19:09
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
-- Structure de la table `UserAccount`
--

CREATE TABLE `UserAccount` (
  `id` int NOT NULL,
  `pseudo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rôle` enum('A','C','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_d'inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `UserAccount`
--

INSERT INTO `UserAccount` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `rôle`, `date_d'inscription`) VALUES
(4, 'raymond', 'ballo@gmail.com', '$2y$13$qiVnD.4V3IUOJKHGbXZg7.Q8Fj..oIANmSlpUM0cac.65xFsNN4HW', '127.0.0.1', '690c25acaef86960e2cad4efc90f28af62310f95640ff41ac8f533d0a3c33c36197614c30b1b5bd432471e40751749b056d2faa9c0263284d1d6b6ce0972a117', 'C', '2022-07-02 18:46:33'),
(5, 'raymondP', 'raymondP@gmail.com', '$2y$13$t0AYc16KpKmuqGBfj8dv4evAPCLn4aA4L5Yy97u6ZyvET2mFTdA8W', '127.0.0.1', '762cb1e7fcc5a57c672d6fbca990a522acba901cebf710b658a9100b0b44e8697ed129a5b8dcd1d802941ebd5c0cf6b30b1ecc004e9f243161018e2e705b8988', 'P', '2022-07-02 18:51:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `UserAccount`
--
ALTER TABLE `UserAccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `UserAccount`
--
ALTER TABLE `UserAccount`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
