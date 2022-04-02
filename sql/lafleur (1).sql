
-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 14, 2021 at 06:03 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lafleur`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` varchar(32) NOT NULL,
  `libelle` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
('bul', 'Bulbes'),
('mas', 'Plantes &agrave; massif'),
('ros', 'Roses');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `email` varchar(50) NOT NULL DEFAULT '0',
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `rue` varchar(100) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `cp` varchar(25) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `mob` int(11) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` varchar(32) NOT NULL,
  `description` varchar(50) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `idCategorie` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `description`, `prix`, `image`, `idCategorie`) VALUES
('c01', 'Panier de fleurs variées', '53.00', '../assets/compo/aniwa.gif', 'bul'),
('c02', 'Coup de charme jaune', '38.00', '../assets/compo/kos.gif', 'bul'),
('c03', 'Bel arrangement de fleurs de saison', '68.00', '../assets/compo/loth.gif', 'bul'),
('c04', 'Coup de charme vert', '41.00', '../assets/compo/luzon.gif', 'bul'),
('c05', 'Très beau panier de fleurs précieuses', '98.00', '../assets/compo/makin.gif', 'bul'),
('c06', 'Bel assemblage de fleurs précieuses', '68.00', '../assets/compo/mosso.gif', 'bul'),
('c07', 'Présentation prestigieuse', '128.00', '../assets/compo/rawaki.gif', 'bul'),
('f01', 'Bouquet de roses multicolores', '58.00', '../assets/fleurs/comores.gif', 'ros'),
('f02', 'Bouquet de roses rouges', '50.00', '../assets/fleurs/grenadines.gif', 'ros'),
('f03', 'Bouquet de roses jaunes', '78.00', '../assets/fleurs/mariejaune.gif', 'ros'),
('f04', 'Bouquet de petites roses jaunes', '48.00', '../assets/fleurs/mayotte.gif', 'ros'),
('f05', 'Fuseau de roses multicolores', '63.00', '../assets/fleurs/philippines.gif', 'ros'),
('f06', 'Petit bouquet de roses roses', '43.00', '../assets/fleurs/pakopoka.gif', 'ros'),
('f07', 'Panier de roses multicolores', '78.00', '../assets/fleurs/seychelles.gif', 'ros'),
('p01', 'Plante fleurie', '43.00', '../assets/plantes/antharium.gif', 'mas'),
('p02', 'Pot de phalaonopsis', '58.00', '../assets/plantes/galante.gif', 'mas'),
('p03', 'Assemblage paysagé', '103.00', '../assets/plantes/lifou.gif', 'mas'),
('p04', 'Belle coupe de plantes blanches', '128.00', '../assets/plantes/losloque.gif', 'mas'),
('p05', 'Pot de mitonia mauve', '83.00', '../assets/plantes/papouasi.gif', 'mas'),
('p06', 'Pot de phalaonopsis blanc', '58.00', '../assets/plantes/pionosa.gif', 'mas'),
('p07', 'Pot de phalaonopsis rose mauve', '58.00', '../assets/plantes/sabana.gif', 'mas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);
