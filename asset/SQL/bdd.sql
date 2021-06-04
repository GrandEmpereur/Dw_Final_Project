-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 11:13
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
-- Base de données : `bdd`
--
CREATE DATABASE IF NOT EXISTS `bdd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id_article` int(255) NOT NULL,
  `id_auteur` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_article`, `id_auteur`, `titre`, `image`, `description`, `date`) VALUES
(8, 18, 'WireFrame ', 'img/upload/tm_site_part2_6.8_packdev_Header-dev.jpg', 'Apprendre a bien organiser c\'est wireframe corectement ', '2021-06-03 21:43:00'),
(9, 18, 'Premier cour de HTML CSS Responcive avec Alexis  ', 'img/upload/webdigit-univers-dev.jpg', 'Venez decouvire le monde incroyable du deve avec Alexis', '2021-06-03 21:45:00');

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
(15, 'Patrick', 'hello', '2021-05-08 19:08:57'),
(20, 'fvZER', 'Qzrfgqzerfg', '2021-05-22 19:34:15'),
(21, 'vqsrgqe', 'zethrtzrs', '2021-06-03 11:22:00'),
(22, 'pat', 'fdp ass bonsoir', '2021-06-03 11:56:00'),
(23, 'pat', 'fdp ass bonsoir', '2021-06-03 11:57:00'),
(24, 'gergh', 'ass fdp', '2021-06-03 11:57:00'),
(25, 'pat', '&lt;p&gt;pat&lt;/p&gt;', '2021-06-03 13:38:00'),
(26, 'HELLO', '&lt;p&gt;foZBOUBOSZ&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;JSBDVBQIUSBVUQOSDBOV&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;BEBD&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;BDFB&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;DFBDW&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;BWDGB&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; &quot;&gt;&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;KSVJBDVK&amp;lt; SUDBVKSDBVKWSXCV&lt;/span&gt;&lt;/p&gt;', '2021-06-03 13:46:00'),
(28, 'tbsrtbst', '&lt;p&gt;sbtrbstrbsrgb&lt;/p&gt;', '2021-06-03 13:47:00'),
(29, 'hello ', '&lt;p&gt;hello&lt;/p&gt;', '2021-06-03 13:47:00'),
(32, 'gdsrfgdgfv', '<p>i<span style=\\\"background-color: rgb(255, 255, 0);\\\">ubvusibdubvuisbdfivj&lt;s</span></p>', '2021-06-03 16:09:00'),
(33, 'sbetbsetdb', '<p><br></p><table class=\\\"table table-bordered\\\"><tbody><tr><td>qvrfvqdfs</td><td>vqzsdv</td><td><br></td></tr><tr><td><br></td><td><br></td><td>vvqsrfvqsf</td></tr></tbody></table><p><br></p>', '2021-06-03 16:11:00');

-- --------------------------------------------------------

--
-- Structure de la table `contacte`
--

CREATE TABLE `contacte` (
  `id_client` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacte`
--

INSERT INTO `contacte` (`id_client`, `name`, `email`, `message`, `date`) VALUES
(1, 'pat', 'pat@gmail.com', 'je suis une licorne', '2021-06-03 10:56:00'),
(2, 'bqerbqtd', 'zrgzre@gmail.com', 'gqerbserthbsftbg', '2021-06-03 11:00:00'),
(3, 'g&quot;qgrg', 'qgrg@gmail.com', 'qehrhbqdfb', '2021-06-03 11:08:00');

-- --------------------------------------------------------

--
-- Structure de la table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `Cpassword`, `status`) VALUES
(15, 't  ', 't@t.t  ', '$2y$10$.z8.1bQmswdZ51WAgc53iOjOzWlcYgl7fv1ChzlU7kBFmZuBmxfw.', '12345678', 'visitor'),
(16, 'aqfdze ', 'faze@fa.faze ', '$2y$10$U0OQSnI6CNcWHQt37qNNo.td.LpUD0qLk/ShMCziMw47k67b8l/5G', '12345678', 'visitor'),
(17, 'ophélie ', 'ophelie@gmail.com ', '$2y$10$Vm3FTE5H4p1wakNK0DqnxuVvRERE/DXUz36rOg7nsbpKsXtChTAuu', '12345678', 'visitor'),
(18, 'Admin ', 'Admin@admin.fr ', '$2y$10$uVeYiAiWTzBYDwo141rCSudEnFt58O8ccZhNJ/M5qZHjAWUZkg/Qy', '', 'admin'),
(19, 'fZEFG', 'GFZQER@gmail.com', '$2y$10$pLTvhax6uAQCZ/5pqUZRkuxv3Y.F1xg.d4rAuvxa47dEEdb89iQdC', '12345678', 'Visitor'),
(20, 'po', 'po@gmail.com', '$2y$10$wlP2mSKYVPr/n/FVfua77OxgIi5ed5AOjMlFVvsqHeeFbauLz0p0q', '12345678', 'visitor'),
(21, 'modo ', 'modo@modo.fr ', '$2y$10$PGh5OiTkqPTBaFtSqYSR5.1/6Iu/oCHF8C8owua3f7rM2JVWpXSpW', '', 'editor'),
(22, 'Patoche ', 'pat@pat.pat ', '$2y$10$XHE24HpMg7/QdMZ7i2NyLulMd7O3ydRuc6H7XD0L5HA0z7njO5Et.', '', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `contacte`
--
ALTER TABLE `contacte`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_article` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `contacte`
--
ALTER TABLE `contacte`
  MODIFY `id_client` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
