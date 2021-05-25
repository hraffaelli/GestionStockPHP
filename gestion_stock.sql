-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 25 Mai 2021 à 05:00
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `no_piece` int(11) NOT NULL,
  `nom_article` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `detail`
--

INSERT INTO `detail` (`id`, `no_piece`, `nom_article`, `prix`, `quantite`) VALUES
(1, 1002, 'Ruban', 200, 20),
(2, 1003, 'Voiture', 300, 30),
(4, 1005, 'Routeur', 500, 50),
(5, 1006, 'Moto', 600, 60),
(6, 1007, 'Poteau', 700, 70),
(7, 1008, 'Scooter', 800, 80),
(8, 1009, 'Antenne', 900, 90),
(9, 1011, 'Cables', 1100, 110),
(10, 1012, 'Ruban', 1200, 120),
(11, 1013, 'Voiture', 1300, 130),
(12, 1014, 'Vini', 1400, 140),
(13, 1015, 'Routeur', 1500, 150),
(14, 1016, 'Moto', 1600, 160),
(15, 1017, 'Poteau', 1700, 170),
(16, 10245, 'Scooter', 1642, 180),
(17, 1019, 'Antenne', 1900, 190),
(18, 1003, 'Voiture', 300, 30),
(19, 1006, 'Moto', 600, 60),
(20, 1009, 'Antenne', 900, 90),
(21, 1013, 'Voiture', 1300, 130),
(22, 1016, 'Moto', 1600, 160),
(23, 1019, 'Antenne', 1900, 190),
(24, 1004, 'Vini', 400, 40),
(25, 1007, 'Poteau', 700, 70),
(26, 1011, 'Cables', 1100, 110),
(27, 1014, 'Vini', 1400, 140),
(28, 1017, 'Poteau', 1700, 170),
(29, 1003, 'Vini', 400, 40),
(30, 1007, 'Poteau', 700, 70),
(31, 1011, 'Cables', 1100, 110),
(32, 1014, 'Vini', 1400, 140),
(33, 1017, 'Poteau', 1700, 170),
(34, 1004, 'Vini', 400, 40),
(35, 1007, 'Poteau', 700, 70),
(36, 1011, 'Cables', 1100, 110),
(37, 1014, 'Vini', 1400, 140),
(38, 1017, 'Poteau', 1700, 170),
(39, 100212121, 'Voiture', 100, 20),
(40, 1002, 'Ruban', 200, 20),
(41, 1003, 'Voiture', 300, 30),
(42, 1003, 'Vini', 400, 40),
(43, 1005, 'Routeur', 500, 50),
(44, 1006, 'Moto', 600, 60),
(45, 1007, 'Poteau', 700, 70),
(46, 1008, 'Scooter', 800, 80),
(47, 1009, 'Antenne', 900, 90),
(48, 1011, 'Cables', 1100, 110),
(49, 1012, 'Ruban', 1200, 120),
(50, 1013, 'Voiture', 1300, 130),
(51, 1014, 'Vini', 1400, 140),
(52, 1015, 'Routeur', 1500, 150),
(53, 1016, 'Moto', 1600, 160),
(54, 1017, 'Poteau', 1700, 170),
(55, 1018, 'Scooter', 1800, 180),
(56, 1019, 'Antenne', 1900, 190),
(57, 1003, 'Voiture', 300, 30),
(58, 1006, 'Moto', 600, 60),
(59, 1009, 'Antenne', 900, 90),
(60, 1013, 'Voiture', 1300, 130),
(61, 1016, 'Moto', 1600, 160),
(62, 1019, 'Antenne', 1900, 190),
(63, 1004, 'Vini', 400, 40),
(64, 1007, 'Poteau', 700, 70),
(65, 1011, 'Cables', 1100, 110),
(66, 1014, 'Vini', 1400, 140),
(67, 1017, 'Poteau', 1700, 170),
(68, 1003, 'Vini', 400, 40),
(69, 1007, 'Poteau', 700, 70),
(70, 1011, 'Cables', 1100, 110),
(71, 1014, 'Vini', 1400, 140),
(72, 1017, 'Poteau', 1700, 170),
(73, 1004, 'Vini', 400, 40),
(74, 1007, 'Poteau', 700, 70),
(75, 1011, 'Cables', 1100, 110),
(76, 1014, 'Vini', 1400, 140),
(77, 1017, 'Poteau', 1700, 170);

-- --------------------------------------------------------

--
-- Structure de la table `entete`
--

CREATE TABLE `entete` (
  `id` int(11) NOT NULL,
  `no_piece` int(11) NOT NULL,
  `date_code` date NOT NULL,
  `id_tiers` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type_code` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `entete`
--

INSERT INTO `entete` (`id`, `no_piece`, `date_code`, `id_tiers`, `type_code`) VALUES
(1, 1002, '2021-02-02', 'OPT', 'Livraison'),
(2, 1003, '2021-02-03', 'OPT', 'Retour'),
(4, 1005, '2021-02-05', 'ONATI', 'Livraison'),
(5, 1006, '2021-02-06', 'ONATI', 'Retour'),
(6, 1007, '2021-02-07', 'EDT', 'Reception'),
(7, 1008, '2021-02-08', 'EDT', 'Livraison'),
(8, 1009, '2021-02-09', 'EDT', 'Retour'),
(9, 1011, '2021-02-11', 'OPT', 'Reception'),
(10, 1012, '2021-02-12', 'OPT', 'Livraison'),
(11, 1013, '2021-02-13', 'OPT', 'Retour'),
(12, 1014, '2021-02-14', 'ONATI', 'Reception'),
(13, 1015, '2021-02-15', 'ONATI', 'Livraison'),
(14, 1016, '2021-02-16', 'ONATI', 'Retour'),
(15, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(16, 10245, '2021-02-18', 'EasyMarket', 'Livraison'),
(17, 1019, '2021-02-19', 'EasyMarket', 'Retour'),
(18, 1003, '2021-02-03', 'OPT', 'Retour'),
(19, 1006, '2021-02-06', 'ONATI', 'Retour'),
(20, 1009, '2021-02-09', 'EDT', 'Retour'),
(21, 1013, '2021-02-13', 'OPT', 'Retour'),
(22, 1016, '2021-02-16', 'ONATI', 'Retour'),
(23, 1019, '2021-02-19', 'EasyMarket', 'Retour'),
(24, 1004, '2021-02-04', 'ONATI', 'Reception'),
(25, 1007, '2021-02-07', 'EDT', 'Reception'),
(26, 1011, '2021-02-11', 'OPT', 'Reception'),
(27, 1014, '2021-02-14', 'ONATI', 'Reception'),
(28, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(29, 1003, '2021-02-04', 'ONATI', 'Reception'),
(30, 1007, '2021-02-07', 'EDT', 'Reception'),
(31, 1011, '2021-02-11', 'OPT', 'Reception'),
(32, 1014, '2021-02-14', 'ONATI', 'Reception'),
(33, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(34, 1004, '2021-02-04', 'ONATI', 'Reception'),
(35, 1007, '2021-02-07', 'EDT', 'Reception'),
(36, 1011, '2021-02-11', 'OPT', 'Reception'),
(37, 1014, '2021-02-14', 'ONATI', 'Reception'),
(38, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(39, 100212121, '2021-04-08', 'Manu', 'Reception'),
(40, 1002, '2021-02-02', 'OPT', 'Livraison'),
(41, 1003, '2021-02-03', 'OPT', 'Retour'),
(42, 1003, '2021-02-04', 'ONATI', 'Reception'),
(43, 1005, '2021-02-05', 'ONATI', 'Livraison'),
(44, 1006, '2021-02-06', 'ONATI', 'Retour'),
(45, 1007, '2021-02-07', 'EDT', 'Reception'),
(46, 1008, '2021-02-08', 'EDT', 'Livraison'),
(47, 1009, '2021-02-09', 'EDT', 'Retour'),
(48, 1011, '2021-02-11', 'OPT', 'Reception'),
(49, 1012, '2021-02-12', 'OPT', 'Livraison'),
(50, 1013, '2021-02-13', 'OPT', 'Retour'),
(51, 1014, '2021-02-14', 'ONATI', 'Reception'),
(52, 1015, '2021-02-15', 'ONATI', 'Livraison'),
(53, 1016, '2021-02-16', 'ONATI', 'Retour'),
(54, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(55, 1018, '2021-02-18', 'EasyMarket', 'Livraison'),
(56, 1019, '2021-02-19', 'EasyMarket', 'Retour'),
(57, 1003, '2021-02-03', 'OPT', 'Retour'),
(58, 1006, '2021-02-06', 'ONATI', 'Retour'),
(59, 1009, '2021-02-09', 'EDT', 'Retour'),
(60, 1013, '2021-02-13', 'OPT', 'Retour'),
(61, 1016, '2021-02-16', 'ONATI', 'Retour'),
(62, 1019, '2021-02-19', 'EasyMarket', 'Retour'),
(63, 1004, '2021-02-04', 'ONATI', 'Reception'),
(64, 1007, '2021-02-07', 'EDT', 'Reception'),
(65, 1011, '2021-02-11', 'OPT', 'Reception'),
(66, 1014, '2021-02-14', 'ONATI', 'Reception'),
(67, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(68, 1003, '2021-02-04', 'ONATI', 'Reception'),
(69, 1007, '2021-02-07', 'EDT', 'Reception'),
(70, 1011, '2021-02-11', 'OPT', 'Reception'),
(71, 1014, '2021-02-14', 'ONATI', 'Reception'),
(72, 1017, '2021-02-17', 'EasyMarket', 'Reception'),
(73, 1004, '2021-02-04', 'ONATI', 'Reception'),
(74, 1007, '2021-02-07', 'EDT', 'Reception'),
(75, 1011, '2021-02-11', 'OPT', 'Reception'),
(76, 1014, '2021-02-14', 'ONATI', 'Reception'),
(77, 1017, '2021-02-17', 'EasyMarket', 'Reception');

-- --------------------------------------------------------

--
-- Structure de la table `tiers`
--

CREATE TABLE `tiers` (
  `id` int(11) NOT NULL,
  `nom_tiers` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `site_web` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `tiers`
--

INSERT INTO `tiers` (`id`, `nom_tiers`, `telephone`, `adresse`, `site_web`) VALUES
(1, 'Manu', '87525635', 'Pirae', 'Manu.com');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type_code` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `statut` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `type_code`, `statut`) VALUES
(1, 'Livraison', 'En cours'),
(2, 'Retour', 'En cours'),
(4, 'Livraison', 'En cours'),
(5, 'Retour', 'En cours'),
(6, 'Reception', 'En cours'),
(7, 'Livraison', 'En cours'),
(8, 'Retour', 'En cours'),
(9, 'Reception', 'En cours'),
(10, 'Livraison', 'En cours'),
(11, 'Retour', 'En cours'),
(12, 'Reception', 'En cours'),
(13, 'Livraison', 'En cours'),
(14, 'Retour', 'En cours'),
(15, 'Reception', 'En cours'),
(16, 'Livraison', 'En cours'),
(17, 'Retour', 'En cours'),
(18, 'Retour', 'En cours'),
(19, 'Retour', 'En cours'),
(20, 'Retour', 'En cours'),
(21, 'Retour', 'En cours'),
(22, 'Retour', 'En cours'),
(23, 'Retour', 'En cours'),
(24, 'Reception', 'En cours'),
(25, 'Reception', 'En cours'),
(26, 'Reception', 'En cours'),
(27, 'Reception', 'En cours'),
(28, 'Reception', 'En cours'),
(29, 'Reception', 'En cours'),
(30, 'Reception', 'En cours'),
(31, 'Reception', 'En cours'),
(32, 'Reception', 'En cours'),
(33, 'Reception', 'En cours'),
(34, 'Reception', 'En cours'),
(35, 'Reception', 'En cours'),
(36, 'Reception', 'En cours'),
(37, 'Reception', 'En cours'),
(38, 'Reception', 'En cours'),
(39, 'Reception', 'En cours'),
(40, 'Livraison', 'En cours'),
(41, 'Retour', 'En cours'),
(42, 'Reception', 'En cours'),
(43, 'Livraison', 'En cours'),
(44, 'Retour', 'En cours'),
(45, 'Reception', 'En cours'),
(46, 'Livraison', 'En cours'),
(47, 'Retour', 'En cours'),
(48, 'Reception', 'En cours'),
(49, 'Livraison', 'En cours'),
(50, 'Retour', 'En cours'),
(51, 'Reception', 'En cours'),
(52, 'Livraison', 'En cours'),
(53, 'Retour', 'En cours'),
(54, 'Reception', 'En cours'),
(55, 'Livraison', 'En cours'),
(56, 'Retour', 'En cours'),
(57, 'Retour', 'En cours'),
(58, 'Retour', 'En cours'),
(59, 'Retour', 'En cours'),
(60, 'Retour', 'En cours'),
(61, 'Retour', 'En cours'),
(62, 'Retour', 'En cours'),
(63, 'Reception', 'En cours'),
(64, 'Reception', 'En cours'),
(65, 'Reception', 'En cours'),
(66, 'Reception', 'En cours'),
(67, 'Reception', 'En cours'),
(68, 'Reception', 'En cours'),
(69, 'Reception', 'En cours'),
(70, 'Reception', 'En cours'),
(71, 'Reception', 'En cours'),
(72, 'Reception', 'En cours'),
(73, 'Reception', 'En cours'),
(74, 'Reception', 'En cours'),
(75, 'Reception', 'En cours'),
(76, 'Reception', 'En cours'),
(77, 'Reception', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `cree_a` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom_utilisateur`, `mot_de_passe`, `cree_a`) VALUES
(1, 'root', '$2y$10$5VUqxvhZsxJiGDGsFFp1IuFWrQN4wtRPAwds5rtxJMOukbs84NUsm', '2021-02-17 10:26:32'),
(2, 'Heremoana', '$2y$10$Zymvv0rbP7013IF1ljz87ON2RQtNvMlOYwt0q7ShtdSVfAaGISFKS', '2021-02-17 13:16:19'),
(3, 'Raffaelli', '$2y$10$RxKwjbv6a2Golbju28Gn2uuea2uCOP/qP7clATemufokqqHJOvJIC', '2021-03-01 14:11:41'),
(4, 'Manu', '$2y$10$FFcGGHE8noI2vRXDLT6unOFFq6.axi4TAUNsqA0ZWk0DCBdpBqTj6', '2021-04-15 15:03:20');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entete`
--
ALTER TABLE `entete`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`nom_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `entete`
--
ALTER TABLE `entete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
