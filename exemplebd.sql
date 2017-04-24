-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 23 Avril 2017 à 22:22
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exemplebd`
--

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE `titre` (
  `idTitre` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `dateAjout` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `titre`
--

INSERT INTO `titre` (`idTitre`, `genre`, `nom`, `album`, `auteur`, `song`, `dateAjout`) VALUES
('humanoide', 'Rap', 'Humanoide', 'nekfeu-cyborg-cover.jpg', 'Nekfeu', 'Nekfeu_Humanoide.mp3', '2017-04-26'),
('realite', 'Rap', 'RÃ©alitÃ©e augmentÃ©e', 'nekfeu-cyborg-cover.jpg', 'Nekfeu', 'Nekfeu_RÃ©alitÃ©_augmentÃ©e.mp3', '2017-04-26');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `passwd`, `role`) VALUES
('maxgolfier@gmail.com', '1acc295174379ec718e1123290d06dcd8d68feb6', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
