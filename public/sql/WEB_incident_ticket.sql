-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 juil. 2022 à 07:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web_incident_ticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(3) NOT NULL,
  `titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  `priorite` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `titre`, `description`, `priorite`) VALUES
(1, 'Reglage de la navbar dans Timancket', 'La navbar n\'est pas bien implemente, il faudrait penser a l\'arranger, merci.', 'moyen'),
(2, 'Changement background', 'Changer le background car il ne correspond pas a ce qui etait mis dans la conception du projet.', 'faible'),
(3, 'Creation d\'un onglet statistique', 'Il faut un onglet statistique avec les statistiques suivantes : nombre de tickets crees par mois et par rapporteur, nombre de tickets traites par mois et par developpeur, et autres statistiques inutiles.', 'eleve'),
(4, 'Fixer l\'utilisation des boutons', 'Impossible d\'utiliser les boutons de la navbar, urgent !!!', 'critique');

-- --------------------------------------------------------

--
-- Structure de la table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
CREATE TABLE IF NOT EXISTS `useraccount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `ip` varchar(20) COLLATE utf8_bin NOT NULL,
  `token` text COLLATE utf8_bin NOT NULL,
  `rôle` enum('A','C','P') COLLATE utf8_bin NOT NULL,
  `date_d'inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `useraccount`
--

INSERT INTO `useraccount` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `rôle`, `date_d'inscription`) VALUES
(4, 'raymond', 'ballo@gmail.com', '$2y$13$qiVnD.4V3IUOJKHGbXZg7.Q8Fj..oIANmSlpUM0cac.65xFsNN4HW', '127.0.0.1', '690c25acaef86960e2cad4efc90f28af62310f95640ff41ac8f533d0a3c33c36197614c30b1b5bd432471e40751749b056d2faa9c0263284d1d6b6ce0972a117', 'C', '2022-07-02 18:46:33'),
(5, 'raymondP', 'raymondP@gmail.com', '$2y$13$t0AYc16KpKmuqGBfj8dv4evAPCLn4aA4L5Yy97u6ZyvET2mFTdA8W', '127.0.0.1', '762cb1e7fcc5a57c672d6fbca990a522acba901cebf710b658a9100b0b44e8697ed129a5b8dcd1d802941ebd5c0cf6b30b1ecc004e9f243161018e2e705b8988', 'P', '2022-07-02 18:51:50'),
(6, 'mf', 'mf@mf.mf', '$2y$13$XRwmuJBCw5jzhnv2SbwG8ujgLnD1.93JI20i2JtV3jIJyw8xTIcQy', '::1', '396d533574fad0e1a95d3d1a8372ffda1e43593c020ebaa9f5ae4a1a58f6ea4db0198dc10939863b89d7f0f6a9bee19e7cf1c3ccca02c2a1e50235834b2008c8', 'C', '2022-07-06 11:10:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
