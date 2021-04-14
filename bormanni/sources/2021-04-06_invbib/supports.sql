-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 avr. 2021 à 18:36
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sh_invbib`
--

-- --------------------------------------------------------

--
-- Structure de la table `supports`
--

CREATE TABLE `supports` (
  `supportsID` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 physical, 2 digital',
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `supports`
--

INSERT INTO `supports` (`supportsID`, `type`, `name`) VALUES
(1, 1, 'livre'),
(2, 1, 'périodique'),
(3, 1, 'dépliant'),
(4, 1, 'carte'),
(5, 1, 'carnet'),
(6, 1, 'cahier'),
(7, 1, 'classeur'),
(8, 1, 'cdrom'),
(9, 1, 'dvd'),
(10, 2, 'pdf'),
(11, 2, 'epub'),
(12, 2, 'azw'),
(13, 2, 'txt'),
(14, 2, 'doc'),
(15, 2, 'odt'),
(16, 1, 'photocopie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`supportsID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `supports`
--
ALTER TABLE `supports`
  MODIFY `supportsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
