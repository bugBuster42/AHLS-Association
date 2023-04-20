-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Octobre 2017 à 13:53
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simple-mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `actuality` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `item`
--

INSERT INTO `actuality` (`date`, `title`, `content`) VALUES
('2023-04-18 06:00', 'Des diplômés de licence et de master célébrés à l’université', 'Cent quatre-vingts lauréats, de la licence au doctorat, ont reçu leur diplôme à la faculté de droit économie gestion de l’université d’Orléans. Sandra Rimbert, enseignant...'),
('2023-04-17 06:00', 'Une élue européenne en visite', 'Salima Yenbou est allée à la rencontre des élèves du lycée Voltaire pour faire mieux connaître le Parlement européen et le rôle de l’Europe. - Salima Yenbou, députée européenne (...'),
('2023-04-17 06:00', 'Des écoliers préparent une pièce sur Jeanne d’Arc', 'Les élèves de CM1 et CM2 de l’école privée du cours Henri-Guillaumet (membre du réseau Espérance banlieue) répètent une pièce de théâtre sur Jeanne d’Arc, qui sera présent...');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
