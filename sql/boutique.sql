-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 mars 2020 à 08:15
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique`
--
CREATE DATABASE IF NOT EXISTS `boutique` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE boutique;

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
  `idcl` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `idetat` int(11) NOT NULL,
  `prix` float DEFAULT NULL,
  `quant` float DEFAULT NULL,
  `numerofacture` varchar(10) NOT NULL,
  PRIMARY KEY (`idcl`,`idp`,`idetat`),
  UNIQUE KEY `numerofacture` (`numerofacture`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `ajouter_panier`
--

DROP TABLE IF EXISTS `ajouter_panier`;
CREATE TABLE IF NOT EXISTS `ajouter_panier` (
  `idcl` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  PRIMARY KEY (`idcl`,`idp`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idcat`)
) ;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcat`, `nom`, `description`) VALUES
(1, 'fourniture', 'fourniture de bureau'),
(2, 'electronique', 'matériel éléctronique');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idcl` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) DEFAULT NULL,
  `pnom` varchar(64) DEFAULT NULL,
  `adr1` varchar(32) DEFAULT NULL,
  `adr2` varchar(32) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idcl`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `idetat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idetat`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `idimage` int(11) NOT NULL AUTO_INCREMENT,
  `idp` int(11) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`idimage`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(64) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `dimensions` varchar(11) DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `rating` int(3) DEFAULT '0',
  `ean` varchar(13) DEFAULT NULL,
  `prix` float DEFAULT '0.01',
  `idcat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idp`)
) ;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idp`, `titre`, `description`, `dimensions`, `poids`, `rating`, `ean`, `prix`, `idcat`) VALUES
(1, 'Marqueur edding bleu pour tableau blanc', 'Superbe stylo pour tableau blanc d\'une qualité exemplaire et a prix discount de couleur bleu', '30x30x120', 65, 0, '4004764850150', 0.99, NULL),
(2, 'Marqueur edding noir pour tableau blanc', 'Superbe stylo pour tableau blanc d\'une qualité exemplaire et a prix discount et de couleur noir vraiment couvrant', '30x30x120', 65, 0, '4004764850099', 0.98, NULL),
(3, 'php solutions 3/2009', 'Superbe magazine sur la tech php', '210x297x4', 68, 0, '14389', 7.5, NULL),
(4, 'refdzs', 'rfzdasx', NULL, NULL, 0, NULL, 0.01, 1),
(5, 'refdzs', 'rfzdasx', NULL, NULL, 0, NULL, 0.01, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
