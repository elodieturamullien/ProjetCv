-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 18:33
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvatelier`
--
CREATE DATABASE IF NOT EXISTS `cvatelier` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cvatelier`;

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `id_education` int(1) NOT NULL,
  `etablissement` varchar(20) DEFAULT NULL,
  `diplôme` varchar(20) DEFAULT NULL,
  `information` varchar(30) DEFAULT NULL,
  `date_education` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `education`
--

INSERT INTO `education` (`id_education`, `etablissement`, `diplôme`, `information`, `date_education`) VALUES
(1, 'PARIS YNOV CAMPUS', 'Informatique', 'Bachelor en informatique', '2019-09-13'),
(2, 'FAC PARIS OUEST', 'Economie-gestion', 'Licence en économie et gestion', '2015-09-15'),
(3, 'Lycée Lucie Aubrac', 'Baccalauréat', 'Filière economique et sociale', '2012-09-04');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(1) NOT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `training` varchar(20) DEFAULT NULL,
  `information` varchar(20) NOT NULL,
  `date_experience` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `emploi`, `training`, `information`, `date_experience`) VALUES
(52, 'cc', 'cc', 'cc', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
