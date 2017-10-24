-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 09:25 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biloudfilm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `objet` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `img` varchar(40) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `img`, `titre`, `description`, `date`) VALUES
(1, './img/films/1.jpg', 'Le Sens de la fête', 'Max est traiteur depuis trente ans. Des fêtes il en a organisé des centaines, il est même un peu au bout du parcours. Aujourd\'hui c\'est un sublime mariage dans un château du 17ème siècle, un de plus, celui de Pierre et Héléna...', 2017),
(2, './img/films/2.jpg', 'Le Petit Spirou', 'Petit Spirou, comme toute sa famille avant lui, a un destin professionnel tout tracé. Quand sa mère lui annonce qu’il intègrera dès la rentrée prochaine l’école des grooms, Petit Spirou, avec l’aide de ses copains, va profiter de ses derniers jours de classe pour déclarer sa flamme à Suzette. Et pas n’importe comment. Ils décident de vivre une aventure extraordinaire. ', 2017),
(3, './img/films/3.jpg', 'L\'Ecole buissonnière', 'Paris 1930. Paul n’a toujours eu qu’un seul et même horizon : les hauts murs de l’orphelinat, sévère bâtisse de la banlieue ouvrière parisienne. Confié à une joyeuse dame de la campagne, Célestine et à son mari, Borel, le garde-chasse un peu raide d’un vaste domaine en Sologne, l’enfant des villes, récalcitrant et buté, arrive dans un monde mystérieux et inquiétant, celui d’une région souveraine et sauvage. ', 2017),
(4, './films/4.jpg', 'Blade Runner 2049', 'En 2049, la société est fragilisée par les nombreuses tensions entre les humains et leurs esclaves créés par bioingénierie. L’officier K est un Blade Runner : il fait partie d’une force d’intervention d’élite chargée de trouver et d’éliminer ceux qui n’obéissent pas aux ordres des humains. ', 2017),
(5, './img/films/5.jpg', 'Kingsman : Le Cercle d\'or', 'KINGSMAN, l’élite du renseignement britannique en costume trois pièces, fait face à une menace sans précédent. Alors qu’une bombe s’abat et détruit leur quartier général, les agents font la découverte d’une puissante organisation alliée nommée Statesman, fondée il y a bien longtemps aux Etats-Unis.', 2017),
(6, './img/films/6.jpg', 'Ça', 'À Derry, dans le Maine, sept gamins ayant du mal à s\'intégrer se sont regroupés au sein du "Club des Ratés". Rejetés par leurs camarades, ils sont les cibles favorites des gros durs de l\'école. Ils ont aussi en commun d\'avoir éprouvé leur plus grande terreur face à un terrible prédateur métamorphe qu\'ils appellent "Ça"… ', 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
