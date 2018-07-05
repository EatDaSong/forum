-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 juil. 2018 à 22:27
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `pseudo_envoyeur` text NOT NULL,
  `pseudo_receveur` text NOT NULL,
  `id_envoyeur` int(5) NOT NULL,
  `id_receveur` int(5) NOT NULL,
  `titre` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conversation`
--

INSERT INTO `conversation` (`ID`, `pseudo_envoyeur`, `pseudo_receveur`, `id_envoyeur`, `id_receveur`, `titre`) VALUES
(1, 'aze', 'aze', 4, 5, 'aze');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(5) NOT NULL AUTO_INCREMENT COMMENT 'identifiant user',
  `pseudo` text NOT NULL COMMENT 'pseudo affiché',
  `username` text NOT NULL COMMENT 'identifiant connexion',
  `password` text NOT NULL COMMENT 'password connexion',
  `email` text NOT NULL COMMENT 'email utilisateur',
  `rang` int(5) NOT NULL COMMENT 'rang de droit utilisateur',
  `signature` text COMMENT 'signature user',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Table comptes utilisateurs';

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `pseudo`, `username`, `password`, `email`, `rang`, `signature`) VALUES
(4, 'steph2608', 'BouffeMaDub', '4c4fe97fa74afaae3eb34c4e85ac0daf', 'stephane.lavigne2608@gmail.com', 0, 'hédoniste, roi de la procrastination auto proclamé, me voilà tel que je compte m\'affirmer.'),
(6, 'azeaze', 'azeaze', '7c37be7260f8cd7c1f5e4dbdd7bc5b23', 'aze@aze.fr', 0, NULL),
(7, 'GregLeZboub', 'greg123', '7c37be7260f8cd7c1f5e4dbdd7bc5b23', 'greg@greg.com', 0, NULL),
(8, 'azeqsd', 'aze', '7c37be7260f8cd7c1f5e4dbdd7bc5b23', 'azea@azea.fr', 0, NULL),
(9, 'ellynsel', 'ellyn', 'ab4f63f9ac65152575886860dde480a1', 'lyn.selvini@gmail.com', 0, NULL),
(10, 'azeazeazeaze', 'viradosol', '7c37be7260f8cd7c1f5e4dbdd7bc5b23', 'azeazeaze@azeaze.aze', 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
