-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 15, 2020 at 08:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `site_de_nono`
--

-- --------------------------------------------------------

--
-- Table structure for table `accueil_cadre_header`
--

CREATE TABLE `accueil_cadre_header` (
  `titre` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_cadre_header` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_cadre_header`
--

INSERT INTO `accueil_cadre_header` (`titre`, `text`, `url_image`, `id`, `id_cadre_header`) VALUES
('Élevage de Saint Prixe', 'Des chiens d\'exceptions', 'https://cdn.pixabay.com/photo/2018/03/31/06/31/dog-3277416_960_720.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_image_header`
--

CREATE TABLE `accueil_image_header` (
  `url_image` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_image_header` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_image_header`
--

INSERT INTO `accueil_image_header` (`url_image`, `position`, `id`, `id_image_header`) VALUES
('https://cdn.pixabay.com/photo/2020/09/13/15/48/turtle-5568624_960_720.jpg', 1, 31, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_image_header_responsive`
--

CREATE TABLE `accueil_image_header_responsive` (
  `url_image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_image_header_reponsive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_image_header_responsive`
--

INSERT INTO `accueil_image_header_responsive` (`url_image`, `id`, `id_image_header_reponsive`) VALUES
('https://zupimages.net/up/20/43/kpyr.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_jumbotron_presentation`
--

CREATE TABLE `accueil_jumbotron_presentation` (
  `titre` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_jumbotron_presentation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_jumbotron_presentation`
--

INSERT INTO `accueil_jumbotron_presentation` (`titre`, `text`, `id`, `id_jumbotron_presentation`) VALUES
('Ici est un titre', 'This is a modified jumbotron that occupies the entire horizontal space of its parent.', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_presentation_bearded`
--

CREATE TABLE `accueil_presentation_bearded` (
  `nom` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_presentation_bearded` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_presentation_bearded`
--

INSERT INTO `accueil_presentation_bearded` (`nom`, `url_image`, `position`, `id`, `id_presentation_bearded`) VALUES
('nom du chien', 'https://cdn.pixabay.com/photo/2020/10/11/10/00/waterfalls-5645361_960_720.jpg', 1, 1, NULL),
('nom du chien', 'https://cdn.pixabay.com/photo/2012/03/04/00/05/cascade-21749_960_720.jpg', 2, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_presentation_chiots`
--

CREATE TABLE `accueil_presentation_chiots` (
  `nom` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_presentation_chiots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_presentation_chiots`
--

INSERT INTO `accueil_presentation_chiots` (`nom`, `url_image`, `position`, `id`, `id_presentation_chiots`) VALUES
('nom du chien', 'https://cdn.pixabay.com/photo/2020/10/11/10/00/waterfalls-5645361_960_720.jpg', 1, 1, NULL),
('nom du chien', 'https://cdn.pixabay.com/photo/2012/03/04/00/05/cascade-21749_960_720.jpg', 2, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_presentation_shihshih`
--

CREATE TABLE `accueil_presentation_shihshih` (
  `nom` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_presentation_shihshih` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_presentation_shihshih`
--

INSERT INTO `accueil_presentation_shihshih` (`nom`, `url_image`, `position`, `id`, `id_presentation_shihshih`) VALUES
('nom du chien', 'https://cdn.pixabay.com/photo/2020/10/11/10/00/waterfalls-5645361_960_720.jpg', 1, 1, NULL),
('nom du chien', 'https://cdn.pixabay.com/photo/2020/10/11/10/00/waterfalls-5645361_960_720.jpg', 2, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_titre_actualite`
--

CREATE TABLE `accueil_titre_actualite` (
  `titre` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_titre_actualite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_titre_actualite`
--

INSERT INTO `accueil_titre_actualite` (`titre`, `id`, `id_titre_actualite`) VALUES
('Nos actus en bref\r\n', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accueil_video`
--

CREATE TABLE `accueil_video` (
  `url_video` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_video` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil_video`
--

INSERT INTO `accueil_video` (`url_video`, `id`, `id_video`) VALUES
('https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `pseudo` varchar(255) NOT NULL,
  `mot_de_passe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`pseudo`, `mot_de_passe`) VALUES
('arnaud', 3120222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accueil_cadre_header`
--
ALTER TABLE `accueil_cadre_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accueil_image_header`
--
ALTER TABLE `accueil_image_header`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `accueil_image_header_responsive`
--
ALTER TABLE `accueil_image_header_responsive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accueil_jumbotron_presentation`
--
ALTER TABLE `accueil_jumbotron_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accueil_presentation_bearded`
--
ALTER TABLE `accueil_presentation_bearded`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `accueil_presentation_chiots`
--
ALTER TABLE `accueil_presentation_chiots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `accueil_presentation_shihshih`
--
ALTER TABLE `accueil_presentation_shihshih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `accueil_titre_actualite`
--
ALTER TABLE `accueil_titre_actualite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accueil_video`
--
ALTER TABLE `accueil_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mot_de_passe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accueil_cadre_header`
--
ALTER TABLE `accueil_cadre_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accueil_image_header`
--
ALTER TABLE `accueil_image_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `accueil_image_header_responsive`
--
ALTER TABLE `accueil_image_header_responsive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accueil_jumbotron_presentation`
--
ALTER TABLE `accueil_jumbotron_presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accueil_presentation_bearded`
--
ALTER TABLE `accueil_presentation_bearded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accueil_presentation_chiots`
--
ALTER TABLE `accueil_presentation_chiots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `accueil_presentation_shihshih`
--
ALTER TABLE `accueil_presentation_shihshih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accueil_titre_actualite`
--
ALTER TABLE `accueil_titre_actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accueil_video`
--
ALTER TABLE `accueil_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
