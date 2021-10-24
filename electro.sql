-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 07 juin 2020 à 20:41
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `electro`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`prenom`, `nom`, `Date`, `genre`, `id`, `password`) VALUES
('ayoub', 'talbi', '28/03/1999', 'homme', 'admin', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `avis` varchar(1000) NOT NULL,
  `note` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`nom`, `email`, `id`, `avis`, `note`, `Date`) VALUES
('ayoub', 'ayb@ayb.com', 'SDF90', 'mfkmdkfmlds msdkfmsdk', 4, '2020-06-04 00:00:00'),
('ayoub', 'ayb@ayb.com', 'SDF90', 'nice', 5, '2020-06-04 00:58:42'),
('ayoub', 'ayb@ayb.com', 'SDF90', 'nice', 5, '2020-06-04 01:01:03'),
('ayoub', 'ayb@ayb.com', 'SDF90', 'j\'aime', 4, '2020-06-04 01:01:24'),
('ayoub', 'ayb@ayb.com', 'FH6K', 'klmjmj kjhlkj mklmklmk ', 5, '2020-06-04 01:26:33'),
('jmklm', 'ayb@ayb.com', 'FH6K', 'mlkjmkl', 3, '2020-06-04 01:26:48'),
('fze', 'ayb@ayb.com', 'FH6K', 'rzerzerez', 2, '2020-06-04 01:27:28'),
('ayoub', 'ayb@ayb.com', 'FH6K', 'jmjmllk', 1, '2020-06-04 01:27:50'),
('ayoub', 'ayb@ayb.com', 'CLSM', 'moyene', 3, '2020-06-04 01:42:26'),
('ayoub', 'ayb@ayb.com', 'RKLS', 'pas mal ', 3, '2020-06-05 22:52:27'),
('ayoub', 'ayb@ayb.com', 'FLG6', 'marche bien\r\n', 4, '2020-06-05 22:53:16'),
('ilyass', 'ilyass@gmail.com', 'FX66D', 'ma meilleur tablet <3 ', 5, '2020-06-05 22:54:41'),
('anass', 'ayb@ayb.coma', 'FL030', 'Le produit a Ã©tÃ© livrÃ© rapidement et correspondait exactement Ã  sa description.', 5, '2020-06-05 23:02:16'),
('ali', 'ali99@gmail.com', 'FL030', 'Le produit a Ã©tÃ© livrÃ© rapidement\r\nmais j\'ai trouvÃ© un probleme ...', 3, '2020-06-05 23:03:20'),
('moad ', 'moad@gmail.com', 'MLKD', 'j\'aime ce produit ', 5, '2020-06-06 11:12:15'),
('rachid', 'rachid@gmail.com', 'BRSON', 'Le produit a Ã©tÃ© livrÃ© rapidement et correspondait exactement Ã  sa description.', 5, '2020-06-06 11:12:55'),
('abdo', 'abdo@gmail.com', 'FLSM5', 'c\'est la meilleur imprimante ', 5, '2020-06-06 11:14:41'),
('ilyass', 'ilyass@ayb.com', 'CLF', 'Le produit a Ã©tÃ© livrÃ© rapidement et correspondait exactement Ã  sa description.', 5, '2020-06-06 11:19:16'),
('ayoub', 'ayoub99@gmail.com', 'CVfd', 'Le produit a Ã©tÃ© livrÃ© rapidement et correspondait exactement Ã  sa description.', 4, '2020-06-06 11:19:41'),
('ayoub', 'ayb@ayb.com', 'RS69', 'j\'aime ce produit ...........', 4, '2020-06-07 00:23:24'),
('ayoub', 'ayb@ayb.com', 'RS69', 'j\'aime ce produit ...........', 4, '2020-06-07 00:24:21'),
('abdo', 'abdo@gjlgk.com', 'FG60', '.....', 3, '2020-06-07 00:25:24'),
('ayoub', 'ayb@ayb.com', 'FG60', '......', 5, '2020-06-07 00:25:46'),
('mouhamed', 'mouhamed@gmail.com', 'AFL96', 'j\'aime ce produit', 4, '2020-06-07 15:56:48'),
('ayoub', 'ayb@ayb.com', 'AFL96', '.......', 5, '2020-06-07 15:57:14'),
('ayoub', 'ayb@ayb.com', 'FX66D', 'j\'aime ce produit ............', 4, '2020-06-07 17:34:46');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` varchar(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `genre`, `Date`, `password`) VALUES
('R123', 'alawi ', 'rachid ', 'homme', '24/06/1993', '98946541351'),
('ANS98', 'talbi', 'anass', 'homme', '25/06/1996', 'ANAsss64652'),
('B975', 'rochdi', 'bochra', 'femme', '10/09/1987', 'az'),
('RLA65', 'talbi', 'ilyass', 'homme', '06/09/2000', '987543213'),
('r123456', 'alami', 'rachida ', 'homme', '14/06/1995', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `email` varchar(30) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `paye` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `tele` int(11) NOT NULL,
  `numero_commande` int(11) NOT NULL AUTO_INCREMENT,
  `type_paiment` varchar(20) NOT NULL,
  `Prix_Total` float NOT NULL,
  `id_client` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `produits` varchar(200) NOT NULL,
  `valide` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'non valide',
  PRIMARY KEY (`numero_commande`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`email`, `adresse`, `ville`, `paye`, `code`, `tele`, `numero_commande`, `type_paiment`, `Prix_Total`, `id_client`, `date`, `produits`, `valide`) VALUES
('ayb@ayb.com', 'CYM rabat', 'rabat', 'dsfdsfs', 10000, 611243685, 11, 'Paiement a Livraison', 4768.8, 'a', '2020-06-02 19:24:30', '1x a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1090.8 DH<br>1x qsqsqs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42 DH<br>5x ayoub &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;727.2 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'dff', 10000, 611243685, 12, 'Paiement a Livraison', 1392, 'z', '2020-06-02 20:08:56', '1x galaxy s6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1350 DH<br>1x qsqsqs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'sqfqf', 10000, 611243685, 13, 'carte Bancaire', 2119.2, 'z', '2020-06-02 20:09:07', '1x galaxy s6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1350 DH<br>1x qsqsqs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42 DH<br>1x ayoub &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;727.2 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'fqsfqsf', 10000, 611243685, 14, 'carte Bancaire', 1375, 'z', '2020-06-02 20:09:31', '1x galaxy s6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1350 DH<br>1x sourie sans fil  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'jhkjh', 10000, 611243685, 15, 'Paiement a Livraison', 4050, 'e', '2020-06-02 20:35:15', '3x galaxy s6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1350 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'dsdqsd', 10000, 611243685, 16, 'Paiement a Livraison', 1475, 'a', '2020-06-02 22:36:01', '5x sourie sans fil  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25 DH<br>1x galaxy s6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1350 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 17, 'Paiement a Livraison', 536, 'A12', '2020-06-03 15:16:59', '1x casque ss50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 DH<br>1x casque ZKL6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;336 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 18, 'Paiement a Livraison', 536, 'A12', '2020-06-03 15:32:29', '1x casque ss50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 DH<br>1x casque ZKL6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;336 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 19, 'Paiement a Livraison', 410, 'A12', '2020-06-03 15:35:28', '1x casque ss50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 DH<br>1x casque MLDK90 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;210 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 20, 'Paiement a Livraison', 11700, 'A12', '2020-06-03 15:41:11', '1x Barre de son RX3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;600 DH<br>1x asus ZENBOOK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6300 DH<br>1x asus Vivo book S5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4800 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 21, 'Paiement a Livraison', 4336, 'A12', '2020-06-03 15:42:49', '1x CANON 690f &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1200 DH<br>1x casque ZKL6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;336 DH<br>1x Canon RL06 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2800 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 22, 'Paiement a Livraison', 336, 'A12', '2020-06-03 18:15:31', '1x casque ZKL6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;336 DH<br>', 'valide'),
('rachid@gmail.com', 'rabat hay barid 36TL', 'rabat', 'maroc', 10000, 698653265, 23, 'Paiement a Livraison', 1680, 'A12', '2020-06-03 18:19:30', '6x casque MLDK90 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;210 DH<br>1x casque RG50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;420 DH<br>', 'non valide'),
('rachid@gmail.com', 'rabat hay barid 36TL', 'rabat', 'maroc', 10000, 664318754, 24, 'Paiement a Livraison', 1680, 'A12', '2020-06-03 18:21:29', '6x casque MLDK90 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;210 DH<br>1x casque RG50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;420 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 25, 'carte Bancaire', 16000, 'A12', '2020-06-04 22:46:49', '1x iphone 11 mro max &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16000 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 26, 'carte Bancaire', 8400, 'A12', '2020-06-04 22:50:19', '1x samsung Z flip  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8400 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'dddddd', 10000, 611243685, 27, 'carte Bancaire', 8400, 'A12', '2020-06-04 22:54:34', '1x samsung Z flip  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8400 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 28, 'carte Bancaire', 2400, 'A12', '2020-06-04 23:21:16', '1x iphone REMADE 6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2400 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'ma', 10000, 611243685, 29, 'carte Bancaire', 3000, 'A12', '2020-06-04 23:26:18', '1x SAMSUNG  TAB S5E  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3000 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 30, 'carte Bancaire', 3000, 'A12', '2020-06-04 23:30:21', '1x SAMSUNG  TAB S5E  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3000 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'dlkÃ¹mdkÃ¹', 10000, 611243685, 31, 'carte Bancaire', 2400, 'A12', '2020-06-04 23:43:48', '1x iphone REMADE 6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2400 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 32, 'carte Bancaire', 19000, 'A12', '2020-06-05 00:35:45', '1x iphone 11 mro max &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16000 DH<br>1x SAMSUNG  TAB S5E  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3000 DH<br>', 'valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 33, 'carte Bancaire', 2400, 'A12', '2020-06-05 00:39:38', '1x iphone REMADE 6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2400 DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 34, 'Paiement a Livraison', 86400, 'r123456', '2020-06-07 16:28:53', '5x iphone 11 mro max &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16000DH<br>\r\n1x HUAWEI NOVA 7i &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2400DH<br>1x LG DD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4000DH<br>', 'non valide'),
('ayb@ayb.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 35, 'Paiement a Livraison', 14500, 'r123456', '2020-06-07 16:46:04', '* 1x HP LASER 107W &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6400 DH<br>* 1x HP LASER w12 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8100 DH<br>', 'valide'),
('rachida99@gmail.com', 'CYM rabat', 'rabat', 'maroc', 10000, 611243685, 36, 'Paiement a Livraison', 8496, 'r123456', '2020-06-07 17:35:59', '* 1x iphone REMADE 6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2400 DH<br>* 1x sourie km12 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;96 DH<br>* 2x SAMSUNG  TAB S5E  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3000 DH<br>', 'valide');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`email`, `date`) VALUES
('ayb@ayb.com', '2020-06-04'),
('aybtalbi99@gmail.com', '2020-06-04'),
('qsdqsdqs@hdl.com', '2020-06-05'),
('ayoub@gmail.com', '2020-06-07'),
('ayoub998@gmail.com', '2020-06-07'),
('anass@gmail.com', '2020-06-07');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  `designation` longtext NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `sous_categorie` varchar(30) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `nom` varchar(20) NOT NULL,
  `remise` int(11) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `prix`, `designation`, `categorie`, `sous_categorie`, `image`, `Date`, `nom`, `remise`) VALUES
('RLD22', 10000, '                                        \r\nArabic AI Function\r\nAI Smart. The New Smart Evolved by AI.\r\n4K Resolution A New Standard for High Definition\r\nQuad Core Processor The Origin of 4K Images\r\nTrue Color Accuracy\r\n4K Active HDR for Incredible Detail', 'televiseur', 'LED Smart TV', 'img/RLD22.png', '2020-06-03 01:23:09', 'MGS', 40),
('tk31f', 6000, '                                        \r\nAI Smart. The New Smart Evolved by AI.\r\n4K Resolution A New Standard for High Definition\r\nTrue Immersion. Even at A Wide Viewing Angle\r\nQuad Core Processor The Origin of 4K Images\r\nTrue Color Accuracy\r\n4K Active HDR for Incredible Detail', 'televiseur', 'LED Smart TV', 'img/tk31f.png', '2020-06-03 01:21:21', 'Samsung FG10', 30),
('fhk00', 4000, '                                        TAILLE Dâ€™Ã‰CRAN : 43\r\nTYPE Dâ€™ECRAN : FLAT\r\nSMART TV : OUI\r\nNORME HD : FULL HD', 'televiseur', 'LED Smart TV', 'img/fhk00.png', '2020-06-03 01:13:25', 'LG 43', 20),
('RX50', 5000, '                                    \r\nAI Smart. The New Smart Evolved by AI.\r\n4K Resolution A New Standard for High Definition\r\nTrue Immersion. Even at A Wide Viewing Angle\r\nQuad Core Processor The Origin of 4K Images\r\nTrue Color Accuracy\r\n4K Active HDR for Incredible Detail    ', 'televiseur', 'LED TNT', 'img/RX50.png', '2020-06-03 01:16:29', 'LG DD', 20),
('FX220', 4000, '                                        PROCESSEUR : INTEL CORE I3-1005G1\r\nTAILLE D\'Ã‰CRAN : 15.6\"\r\nMÃ‰MOIRE VIVE : 4 Go\r\nCAPACITE DISQUE DUR HDD : 1To\r\nSYSTÃˆME D\'EXPLOITATION: WINDOWS 10', 'ordinateur', 'pc portable notebook', 'img/FX220.png', '2020-06-03 00:29:58', 'lenovo s20', 20),
('Hisense', 3000, '                    Full HD\r\nVIDAA SMART OS\r\nNetrange App store\r\nNetflix\\Youtube\r\nAnyview cast                    ', 'televiseur', 'LED Smart TV', 'img/Hisense.png', '2020-06-03 01:06:49', 'Hisense', 0),
('FL030', 5300, '                                        Ram : 4 Go\r\nDisque dur : 500 Go SATA\r\nEcran 15.6\" HD\r\nWindows 10 Inclus', 'ordinateur', 'pc portable notebook', 'img/FL030.png', '2020-06-03 01:28:11', 'ASUS x50', 10),
('PMS 06', 9000, '                              Product ideapad S145-15IWL Processor Intel Core i7-8565U (4C / 8T, 1.8 / 4.6GHz, 8MB) Graphics NVIDIA GeForce MX110 2GB GDDR5 Memory 4GB Soldered DDR4-2400 + 4GB SO-DIMM DDR4-2400 Storage 1TB HDD           ', 'ordinateur', 'pc portable ultrabook', 'img/PMS 06.png', '2020-06-03 02:02:30', 'lenovo lk10', 50),
('SR20', 100, '                                        BUBM 7D programmable 6400 DPI rÃ©glable mÃ©canique rvb Gamer souris de jeu', 'accessoire', 'souries', 'img/SR20.png', '2020-06-03 02:06:32', 'sourie g10', 10),
('SEFss', 120, '                                        BUBM ergonomique LED rvb filaire optique PC souris de jeu', 'accessoire', 'souries', 'img/SEFss.png', '2020-06-03 02:08:31', 'sourie km12', 20),
('CGHK', 200, '                                        BUBM PersonnalisÃ© De Jeu MÃ©canique RVB PC Clavier D\'ordinateur En MÃ©tal\r\n', 'accessoire', 'claviers', 'img/CGHK.png', '2020-06-03 02:11:05', 'clavier SFG', 20),
('DSLF', 220, '                                        BUBM Ã‰tanche En MÃ©tal LED Kit Combo MÃ©canique Clavier De Jeu et Souris\r\n', 'accessoire', 'claviers', 'img/DSLF.png', '2020-06-03 02:12:40', 'clavier S50', 30),
('KJH20', 16200, '                  Usine 17 \'\'Ordinateur Portable Gamer MarchÃ© Pas Cher Nouveau OEM i9 4 core Ordinateur Portable De Jeu 17.3 Intel Core i7 16 GO ram 1 TO Nvidia GTX                      ', 'ordinateur', 'pc portable gamer', 'img/KJH20.png', '2020-06-03 02:37:08', 'HT LP', 40),
('FFGF662', 16000, '                                        Usine Haut De Gamme 17.3 pouces intel i7 7700HQ 16 GO Ram 512 GO Ã  1 TO Portable Avec GTX1060 GTX1070 Discreted graphique Pour D\'Ã©tudiant Entrepreneur ', 'ordinateur', 'pc portable gamer', 'img/FFGF662.png', '2020-06-03 03:06:26', 'PC GAMER TLC', 60),
('CLF', 600, '                      Resolution : 20,5 mÃ©gapixels\r\nTaille d\'ecran : 2,7\"\r\nZoom optique : 8                  ', 'camera', 'APPAREIL PHOTO COMPACT', 'img/CLF.png', '2020-06-03 03:13:02', 'Canon d20', 10),
('CVfd', 3000, '                                 Resolution : 18 mpx\r\nTaille d\'ecran : 3\"\r\nZoom optique : optique x3       ', 'camera', 'APPAREIL PHOTO REFLEX', 'img/CVfd.png', '2020-06-03 03:24:57', 'Canon d2f0', 10),
('RFGs0', 3500, '                                        Resolution : 921000 pixels\r\nTaille d\'ecran : 7,5 cm\r\nZoom optique : 83x ultra grand angle 24-2000 mm', 'camera', 'APPAREIL PHOTO BRIDGE', 'img/RFGs0.png', '2020-06-03 03:26:44', 'NIKON W2f0', 20),
('ES30', 2500, '                                        Resolution : 921000 pixels\r\nTaille d\'ecran : 7,5 cm\r\nZoom optique : 83x ultra grand angle 24-2000 mm', 'camera', 'APPAREIL PHOTO COMPACT', 'img/ES30.png', '2020-06-03 03:28:48', 'NIKON MC0', 10),
('DSG5', 3500, '                                     Resolution : 18 megapixels\r\nTaille d\'ecran : 3,0 \"\r\nZoom optique : 3x   ', 'camera', 'APPAREIL PHOTO BRIDGE', 'img/DSG5.png', '2020-06-03 03:29:42', 'Canon RL06', 20),
('ALDV5', 4600, '                                  Resolution : 16\r\nTaille d\'ecran : 7,5\r\nZoom optique : 40      ', 'camera', 'APPAREIL PHOTO BRIDGE', 'img/ALDV5.png', '2020-06-03 03:31:38', 'NIKON sf', 10),
('BRSON', 1500, '                        Puissance rms : 15\r\nConnexion wifi : non\r\nBluetooth : oui                ', 'accessoire', 'Autres', 'img/BRSON.png', '2020-06-03 11:45:58', 'Barre de son RX3', 60),
('FLG6', 9000, '                                        PROCESSEUR : INTEL CORE I7\r\nTAILLE D\'Ã‰CRAN : 13.3\"\r\nMÃ‰MOIRE VIVE : 8 RAM\r\nCAPACITE DISQUE DUR HDD : 256', 'ordinateur', 'pc portable ultrabook', 'img/FLG6.png', '2020-06-03 11:47:52', 'asus ZENBOOK', 30),
('RKLS', 8000, '                               PROCESSEUR : INTEL CORE I7\r\nTAILLE D\'Ã‰CRAN : 15.6\"\r\nMÃ‰MOIRE VIVE : 8 RAM\r\nCAPACITE DISQUE DUR HDD : 1000         ', 'ordinateur', 'pc portable ultrabook', 'img/RKLS.png', '2020-06-03 11:49:38', 'asus Vivo book S5', 40),
('OJLM', 4000, '                           PROCESSEUR : INTEL CORE I3\r\nTAILLE D\'Ã‰CRAN : (1 600 x 900) de 46,99 cm (18.5 pouces )\r\nMÃ‰MOIRE VIVE : 4 RAM\r\nSYSTÃˆME D\'EXPLOITATION : WINDOWS             ', 'ordinateur', 'pc bureau desktop', 'img/OJLM.png', '2020-06-03 11:57:10', 'HP  5TE50EA', 10),
('ALLFS', 5000, '                                    PROCESSEUR : AMD\r\nTAILLE D\'Ã‰CRAN : 19,5\"\r\nMÃ‰MOIRE VIVE : 4 RAM\r\nSYSTÃˆME D\'EXPLOITATION : WINDOWS    ', 'ordinateur', 'pc bureau All In One', 'img/ALLFS.png', '2020-06-03 11:58:24', 'DHP PC AIO  7D', 20),
('ALLFG', 6000, '                                        PROCESSEUR : INTEL CORE I3\r\nTAILLE D\'Ã‰CRAN : 22\"\r\nMÃ‰MOIRE VIVE : 4 RAM\r\nSYSTÃˆME D\'EXPLOITATION : WINDOWS', 'ordinateur', 'pc bureau All In One', 'img/ALLFG.png', '2020-06-03 11:59:46', 'LENOVO AIO A301', 20),
('DSFODS', 9000, '                                        TYPE D\'IMPRESSION : MONOCHROME\r\nWIFI : OUI\r\nBLUETOOTH : NON', 'imprimantes', 'IMPRIMANTE LASER', 'img/DSFODS.png', '2020-06-03 12:11:28', 'HP LASER w12', 10),
('RLMS62', 8000, '                                       TYPE D\'IMPRESSION : MONOCHROME\r\nWIFI : OUI ', 'imprimantes', 'IMPRIMANTE LASER', 'img/RLMS62.png', '2020-06-03 12:12:48', 'HP LASER 107W', 20),
('FLSM5', 1500, '                                Imprimante sans fil Ã©conomique pour la maison\r\nConnectivitÃ© : 1 port usb 2.0 haut dÃ©bit standard\r\nWi-fi 802.11b/g/n\r\nImpression mobile hp et application        ', 'imprimantes', 'IMPRIMANTE JET ENCRE', 'img/FLSM5.png', '2020-06-03 12:15:28', 'CANON 690f', 20),
('SDFSD', 1600, '                                   Imprimante sans fil Ã©conomique pour la maison\r\nConnectivitÃ© : 1 port USB 2.0 haut dÃ©bit standard\r\nWi-Fi 802.11b/g/n\r\nImpression mobile HP et application intelligente\r\nHP ePrint\r\nJet d\'encre - couleur\r\nDÃ©tecteur automatique de papier     ', 'imprimantes', 'IMPRIMANTE JET ENCRE', 'img/SDFSD.png', '2020-06-03 12:16:20', 'HD DESK60', 10),
('QSDQS6', 4000, '                                     Imprimante sans fil Ã©conomique pour la maison\r\nConnectivitÃ© : 1 port USB 2.0 haut dÃ©bit standard\r\nWi-Fi 802.11b/g/n\r\nImpression mobile HP et application intelligente\r\nHP ePrint\r\nJet d\'encre - couleur\r\nDÃ©tecteur automatique de papier   ', 'imprimantes', 'autres', 'img/QSDQS6.png', '2020-06-03 12:18:28', 'EPSON M21', 30),
('FSDF50', 2500, 'Impression, copie et numÃ©risation\r\nLivrÃ©e avec encre noire jusqu\'Ã  8100 pages et 6500 pages en couleur\r\nVitesse d\'impression noir: jusqu\'Ã  33 ppm \r\nVitesse d\'impression couleur: jusqu\'Ã  10 ppm ', 'imprimantes', 'autres', 'img/FSDF50.png', '2020-06-03 12:20:16', 'EPSON KD6', 10),
('D6d2', 1800, '\r\nVitesse d\'impression couleur: jusqu\'Ã  10 ppm \r\nQualitÃ© d\'impression couleur: 5760 x 1440 dpi (ppp)\r\nImpression recto/verso: manuelle\r\nFonctionne avec: 4 cartouches (noire, cyan, magenta, jaune)\r\nConnectivitÃ©: 1 port usb 2.0\r\nWi-fi ', 'imprimantes', 'IMPRIMANTE JET ENCRE', 'img/D6d2.png', '2020-06-03 12:28:47', 'EPSON K64', 30),
('CLSM', 150, '                          HP  CLAVIER OMEN 1100 1MY13AA\r\nSANS FIL : NON              ', 'accessoire', 'claviers', 'img/CLSM.png', '2020-06-03 12:39:07', 'clavier FIl dm50', 10),
('S64s', 600, '                     CASQUES AUDIO AVEC MICRO\r\nENERGY SISTEM  CASQUE FILAIRE STYLE1 TALK ROUGE                   ', 'accessoire', 'casques', 'img/S64s.png', '2020-06-03 12:42:39', 'casque RG50', 30),
('SDF90', 250, '                            CASQUES AUDIO AVEC MICRO SANS FIL\r\nENERGY SISTEM  CASQUE BLUETOOTH 2BT VERT            ', 'accessoire', 'casques', 'img/SDF90.png', '2020-06-03 12:47:27', 'casque ss50', 20),
('DSD90', 300, '                                        CASQUES AUDIO AVEC MICRO SANS FIL\r\nTNB  CBSHINEBK', 'accessoire', 'casques', 'img/DSD90.png', '2020-06-03 12:51:05', 'casque MLDK90', 30),
('FH6K', 560, '                                        CASQUES AUDIO AVEC MICRO SANS FIL\r\nENERGY SISTEM  URBAN 3', 'accessoire', 'casques', 'img/FH6K.png', '2020-06-03 12:57:40', 'casque ZKL6', 40),
('6FD9', 3000, '                                   SYSTEME AUDIO : 5.1\r\nPUISSANCE RMS : 1000\r\nWIFI : NON\r\nNOMBRE D\'ELEMENT : 7     ', 'accessoire', 'Autres', 'img/6FD9.png', '2020-06-03 13:08:44', 'SONY  DAV-2E3', 10),
('FG60', 3000, '                                        TAILLE D\'ECRAN : 6,4\"\r\nMÃ‰MOIRE RAM : 8 GO\r\nMÃ‰MOIRE DE STOCKAGE : 128\r\nRESEAU : 4G+', 'smartphone', 'Telephone Android', 'img/FG60.png', '2020-06-04 13:31:52', 'HUAWEI NOVA 7i', 20),
('AZ98', 12000, '                                        TAILLE D\'ECRAN : 6,7\"\r\nMÃ‰MOIRE RAM : 8 GO\r\nMÃ‰MOIRE DE STOCKAGE : 256\r\nRESEAU : 4G+', 'smartphone', 'Telephone Android', 'img/AZ98.png', '2020-06-04 13:34:15', 'samsung Z flip ', 30),
('AFL96', 20000, '                               TAILLE D\'ECRAN : 6.5\"\r\nMÃ‰MOIRE DE STOCKAGE : 512\r\nCOULEUR : MIDNIGHT GREEN         ', 'smartphone', 'Telephone Iphone', 'img/AFL96.png', '2020-06-04 13:35:27', 'iphone 11 mro max', 20),
('MLK89', 4000, '               TAILLE D\'ECRAN : 4.7\"\r\nMÃ‰MOIRE DE STOCKAGE : 128\r\nCOULEUR : GOLD                         ', 'smartphone', 'Telephone Iphone', 'img/MLK89.png', '2020-06-04 13:38:32', 'iphone REMADE 6', 40),
('FX66D', 6000, 'TAILLE D\'ECRAN : 10.5\"\r\nMÃ‰MOIRE RAM : 4 GO\r\nMÃ‰MOIRE DE STOCKAGE : 64\r\nCOULEUR : GOLD', 'smartphone', 'Tablet Android', 'img/FX66D.png', '2020-06-04 13:40:57', 'SAMSUNG  TAB S5E ', 50),
('MLKD', 4000, '                                 TAILLE D\'ECRAN : 8\r\nMÃ‰MOIRE RAM : 2\r\nMÃ‰MOIRE DE STOCKAGE : 32\r\nRESEAU : 4G       ', 'smartphone', 'Tablet Android', 'img/MLKD.png', '2020-06-04 13:42:07', 'SAMSUNG  A8 2019 ', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
