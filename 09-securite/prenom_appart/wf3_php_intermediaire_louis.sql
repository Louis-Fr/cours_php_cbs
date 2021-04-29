-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 01 avr. 2021 à 15:03
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_louis`
--
CREATE DATABASE IF NOT EXISTS `wf3_php_intermediaire_louis` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wf3_php_intermediaire_louis`;

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `postal_code` int(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` int(3) NOT NULL,
  `reservation_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(1, 'Maison 3étages', 'belle maison de 3étage à deux pas des halles, bien rare.', 75001, 'paris', 'vente', 1900000, ''),
(2, 'Maison', 'belle maison', 75001, 'paris', 'vente', 120, 'Je suis intéressé par votre bien, pouvez-vous me recontacter?\r\nCldt'),
(3, 'Appartement ancien', 'Appartement dans une résidence des années 70, bien entretenu et lumineux.', 26000, 'Valence', 'location', 1100, 'Bonjour, votre appartement est toujours disponible?'),
(4, 'Appart', 'super appart', 26000, 'Valence', 'location', 550, 'Je le veux'),
(5, 'Maison neuve', 'Maison récente, construction 2012.', 64000, 'Pau', 'Vente', 182000, ''),
(6, '2 pièces proche métro', '2 pièces meublé proche du métro charonne', 75011, 'Paris', 'Location', 980, ''),
(7, 'Parking', 'place de parking (box fermé et sécurisé)', 75010, 'Paris', 'Location', 115, ''),
(8, 'Maison neuve', 'Maison récente, construction 2012.', 64000, 'Pau', 'Vente', 182000, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
