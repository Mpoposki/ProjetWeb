-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 02 fév. 2019 à 20:05
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monstre`
--

-- --------------------------------------------------------

--
-- Structure de la table `monstres`
--

DROP TABLE IF EXISTS `monstres`;
CREATE TABLE IF NOT EXISTS `monstres` (
  `name` varchar(15) NOT NULL,
  `strength` int(11) NOT NULL,
  `life` int(11) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `monstres`
--

INSERT INTO `monstres` (`name`, `strength`, `life`, `type`) VALUES
('Domovoï', 30, 300, 'water'),
('Wendigos', 100, 450, 'earth'),
('Thunderbird', 400, 500, 'air'),
('Sirrush', 250, 1500, 'fire');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
