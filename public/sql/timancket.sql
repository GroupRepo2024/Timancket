-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 juil. 2022 à 22:37
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `timancket`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `description` text NOT NULL,
  `chef_du_projet` text NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `description`, `chef_du_projet`, `date_debut`, `date_fin`) VALUES
(1, 'AVA', 'application qui permet de créer des tickets', 'Michel Florantin', '2022-07-06', '2023-07-06'),
(2, 'App recette', 'Application qui aide à trouver des recettes et les cuisiner', 'Raymond Ballo', '2021-10-05', '2022-12-25');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `priorite` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `titre`, `description`, `priorite`) VALUES
(1, 'problème de connexion', 'Il faudrait changer le mode de connexion', 'facile'),
(2, 'retirer la carte', 'Retirer la carte seulement sur la page de connexion', 'difficile'),
(3, 'bug', 'Impossible d\'accéder la page d\'accueil, car chargement sans arrêt', 'moyen');

-- --------------------------------------------------------

--
-- Structure de la table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
CREATE TABLE IF NOT EXISTS `useraccount` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rôle` enum('A','C','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_d'inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `useraccount`
--

INSERT INTO `useraccount` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `rôle`, `date_d'inscription`) VALUES
(4, 'raymond', 'ballo@gmail.com', '$2y$13$qiVnD.4V3IUOJKHGbXZg7.Q8Fj..oIANmSlpUM0cac.65xFsNN4HW', '127.0.0.1', '690c25acaef86960e2cad4efc90f28af62310f95640ff41ac8f533d0a3c33c36197614c30b1b5bd432471e40751749b056d2faa9c0263284d1d6b6ce0972a117', 'C', '2022-07-02 18:46:33'),
(5, 'raymondP', 'raymondP@gmail.com', '$2y$13$t0AYc16KpKmuqGBfj8dv4evAPCLn4aA4L5Yy97u6ZyvET2mFTdA8W', '127.0.0.1', '762cb1e7fcc5a57c672d6fbca990a522acba901cebf710b658a9100b0b44e8697ed129a5b8dcd1d802941ebd5c0cf6b30b1ecc004e9f243161018e2e705b8988', 'P', '2022-07-02 18:51:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
