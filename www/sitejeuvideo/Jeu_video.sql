-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 05 jan. 2025 à 13:14
-- Version du serveur : 5.7.44
-- Version de PHP : 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Jeu_video`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(4) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `anneeSortie` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `pegi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Notation`
--

CREATE TABLE `Notation` (
  `id` int(4) NOT NULL,
  `idJeu` int(4) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Notation`
--
ALTER TABLE `Notation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Notation`
--
ALTER TABLE `Notation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
