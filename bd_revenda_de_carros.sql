-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2023 at 10:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_revenda_de_carros`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `model` varchar(300) DEFAULT NULL,
  `brand` varchar(300) DEFAULT NULL,
  `price` varchar(550) DEFAULT NULL,
  `year` varchar(150) DEFAULT NULL,
  `description` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `brand`, `price`, `year`, `description`) VALUES
(2, 'KA', 'Ford', '29.559,99', '2011', '1.0 8v, C/ar condicionado, Flex MT'),
(1, 'Fiesta 1.6', 'Ford', '24.480,55', '2008', 'Completo, 8v, flex, 4P, Manual'),
(12, 'Clio', 'Renault', '27.990', '2015', 'Expression Hi-power 1.0 16v 5p'),
(4, 'Onix', 'Chevrolet', '62.990', '2021', 'Hatch Lt 1.0 12v Flex 5p Mec.'),
(5, 'Cruze', 'Chevrolet', '15.990', '2022', 'Lt 1.4 16v Turbo Flex 4p Aut.'),
(6, 'Kicks', 'Nissan', '46.990', '2022', 'Sense 1.6 16v Flex Aut.'),
(7, 'Saveiro', 'Volkswagen', '21.990', '2022', 'Robust 1.6 Total Flex 8v'),
(8, 'Tiggo 3x', 'Chery', '76.990', '2023', 'Pro 1.0 Turbo Flex Aut.'),
(9, 'Kwid', 'Renault', '23.990', '2022', 'Zen 1.0 Flex 12v 5p Mec.'),
(10, 'Virtus', 'Volkswagen', '35.990', '2021', 'Comfort. 200 Tsi 1.0 Flex 12v Aut'),
(11, 'Ka', 'Ford', '32.990', '2013', '1.0 8v/1.0 8v St Flex 3p'),
(3, 'Focus', 'Ford', '23.550', '2005', 'Expression Hi-power 1.0 16v 5p');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'Onde fica nossa localização?', 'Em Charqueadas - Rio Grande do Sul'),
(2, 'Os carros são bons?', 'Sim, são ótimos e com garantia.'),
(3, 'Os carros são potentes?', 'São, todos revisados e com peças de ponta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
