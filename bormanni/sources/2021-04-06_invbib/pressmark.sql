-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 avr. 2021 à 18:35
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
-- Structure de la table `pressmark`
--

CREATE TABLE `pressmark` (
  `pressmarkID` int(11) NOT NULL,
  `code` char(3) NOT NULL DEFAULT '',
  `display` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pressmark`
--

INSERT INTO `pressmark` (`pressmarkID`, `code`, `display`) VALUES
(1, 'ADM', 'Administration'),
(2, 'APL', 'Arts plastiques'),
(3, 'ARC', 'Architecture'),
(4, 'ART', 'Art'),
(5, 'BD', 'Bande dessinée'),
(6, 'BIB', 'Bibliothèque'),
(7, 'CUI', 'Cuisine'),
(8, 'CUL', 'Culture'),
(9, 'DES', 'Design'),
(10, 'DIC', 'Dictionnaire'),
(11, 'DRO', 'Droit'),
(12, 'ECO', 'Economie'),
(13, 'ETH', 'Ethnologie'),
(14, 'FRA', 'Français'),
(15, 'GUI', 'Guide'),
(16, 'HIS', 'Histoire'),
(17, 'INF', 'Informatique'),
(18, 'JOB', 'Travail Emploi'),
(19, 'LE', 'Littérature étrangère'),
(20, 'LIT', 'Littérature'),
(21, 'LOI', 'Loisir'),
(22, 'MAT', 'Math'),
(23, 'MED', 'Médical Santé'),
(24, 'MET', 'Méthodologie'),
(25, 'PHI', 'Philosophie'),
(26, 'PHO', 'Photographie'),
(27, 'PSY', 'Psychologie'),
(28, 'PUB', 'Publicité'),
(29, 'SCP', 'Science politique'),
(30, 'SCI', 'Sciences'),
(31, 'SOC', 'Sociologie'),
(32, 'SPO', 'Sport'),
(33, 'SPR', 'Spiritualité religion'),
(34, 'LEA', 'Langues étrangères'),
(35, 'COM', 'InfoCom'),
(36, 'EDU', 'Education');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pressmark`
--
ALTER TABLE `pressmark`
  ADD PRIMARY KEY (`pressmarkID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pressmark`
--
ALTER TABLE `pressmark`
  MODIFY `pressmarkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
