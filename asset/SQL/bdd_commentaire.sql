-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 mai 2021 à 16:02
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_commentaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `Id` int(11) NOT NULL,
  `Pseudo` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`Id`, `Pseudo`, `Message`, `Date`) VALUES
(1, 'yy', 'yy', '2021-05-07 16:09:05'),
(2, 'soren', 'soren.jpeg', '2021-05-07 16:14:26'),
(15, 'Patrick', 'hello', '2021-05-08 19:08:57');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
