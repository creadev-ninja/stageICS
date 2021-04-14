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
-- Structure de la table `places`
--

CREATE TABLE `places` (
  `placesID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  `country` char(2) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `places`
--

INSERT INTO `places` (`placesID`, `name`, `country`) VALUES
(1, 'Aix en Provence', 'FR'),
(2, 'Alençon', 'FR'),
(3, 'Amiens', 'FR'),
(4, 'Angleterre', 'GB'),
(5, 'Annonay', 'FR'),
(6, 'Argenton', 'FR'),
(7, 'Arles', 'FR'),
(8, 'Barcelone', 'ES'),
(9, 'Baume-les-Dames', 'FR'),
(10, 'Belgique', 'BE'),
(11, 'Besançon', 'FR'),
(12, 'Bontemps', 'FR'),
(13, 'Bourges', 'FR'),
(14, 'Cahors', 'FR'),
(15, 'Charente', 'FR'),
(16, 'Cologne', 'FR'),
(17, 'Condé sur noire', 'FR'),
(18, 'Darantière', 'FR'),
(19, 'Dijon', 'FR'),
(20, 'Evreux', 'FR'),
(21, 'France', 'FR'),
(22, 'Grande Bretagne', 'GB'),
(23, 'Gap', 'FR'),
(24, 'Grenoble', 'FR'),
(25, 'Héricourt', 'FR'),
(26, 'Hong kong', 'HK'),
(27, 'Italie', 'IT'),
(28, 'Jouve', 'FR'),
(29, 'Köln', 'DE'),
(30, 'La flèche', 'FR'),
(31, 'Lausannes', 'CH'),
(32, 'Liege', 'BE'),
(33, 'Ligugé', 'FR'),
(34, 'London', 'GB'),
(35, 'Luçon', 'FR'),
(36, 'Mâcon', 'FR'),
(37, 'Malesherbe', 'FR'),
(38, 'Manchecourt', 'FR'),
(39, 'Marsat', 'FR'),
(40, 'Marsdat', 'FR'),
(41, 'Marseille', 'FR'),
(42, 'Mayenne', 'FR'),
(43, 'Milan', 'IT'),
(44, 'Montréal', 'CA'),
(45, 'Montrouge', 'FR'),
(46, 'Nantes', 'FR'),
(47, 'Nice', 'FR'),
(48, 'Nîmes', 'FR'),
(49, 'Palaiseau', 'FR'),
(50, 'Paris', 'FR'),
(51, 'Poitier', 'FR'),
(52, 'Puyricard', 'FR'),
(53, 'Quebec', 'CA'),
(54, 'Rennes', 'FR'),
(55, 'RFA', 'DE'),
(56, 'Saint Amand', 'FR'),
(57, 'San Francisco', 'US'),
(58, 'Suisse', 'CH'),
(59, 'Toulouse', 'FR'),
(60, 'Tours', 'FR'),
(61, 'Turin', 'IT'),
(62, 'USA', 'US'),
(63, 'Vanves', 'FR'),
(64, 'Vendôme', 'FR'),
(65, 'Vigneux', 'FR'),
(66, 'Vincennes', 'FR'),
(67, 'Freiburg', 'DE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`placesID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `places`
--
ALTER TABLE `places`
  MODIFY `placesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
