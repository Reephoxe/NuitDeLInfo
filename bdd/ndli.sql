-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 déc. 2023 à 23:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ndli`
--

-- --------------------------------------------------------

--
-- Structure de la table `identifiant`
--

DROP TABLE IF EXISTS `identifiant`;
CREATE TABLE IF NOT EXISTS `identifiant` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `motdepasse` varchar(75) COLLATE utf8_bin NOT NULL,
  `identifiant` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=80985 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `identifiant`
--

INSERT INTO `identifiant` (`ID`, `motdepasse`, `identifiant`) VALUES
(1, '$2y$10$d/77UiPRHsMrrxHDZHUsKOt3PV7wdoZPvdeixnJZWwehaBItUmgCC', 'utilisateur@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `ID` int(5) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `naissance` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`ID`, `nom`, `prenom`, `naissance`) VALUES
(1, 'Bond', 'Jean', '2000-04-04');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `informations`
--
ALTER TABLE `informations`
  ADD CONSTRAINT `informations_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `identifiant` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
