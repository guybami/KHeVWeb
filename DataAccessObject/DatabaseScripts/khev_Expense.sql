-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2017 at 09:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `khev`
--

--
-- Dumping data for table `khev_Expense`
--

INSERT INTO `khev_Expense` (`expenseId`, `eventId`, `title`, `amount`, `category`, `billFileName`, `transactionDate`) VALUES
(35, 19, 'Match Amical contre Pforzheim', 110, 'Sport', 'img_4654.jpg', '2016-08-24 22:00:00'),
(36, 18, 'Amende', 75, 'Challenge', 'img_4650.jpg', '2016-11-09 23:00:00'),
(37, 18, 'Frais de membres Challenge', 80, 'Challenge', 'img_4650.jpg', '2016-05-19 22:00:00'),
(38, 0, 'Fais du Gymnase Handball', 120, 'Sport', 'img_4649.jpg', '2016-05-19 22:00:00'),
(39, 18, 'Afiliation Challenge Camerounais', 400, 'Challenge', 'img_4648.jpg', '2016-11-19 23:00:00'),
(40, 16, 'Tournois Football Germersheim', 50, 'Sport', 'img_4647.jpg', '2017-05-13 22:00:00'),
(41, 18, 'Maillots de Equipe', 422.3, 'Challenge', 'img_4653.jpg', '2017-05-20 15:21:39'),
(42, 17, 'Tournois Football Karlsruhe', 50, 'Sport', 'img_4647.jpg', '2017-05-03 22:00:00'),
(43, 0, 'Sport Insfraktutur - Football', 135, 'Sport', 'img_4652.jpg', '2017-05-12 22:00:00'),
(44, 20, 'Tournois Mannheim', 50, 'Sport', 'img_4647.jpg', '2017-05-11 22:00:00'),
(45, 0, 'Wesbite Hosting - kameruner-heilbronn.de', 40, 'Divers', 'facture-site-kameruner-heilbronn.de.pdf', '2017-05-20 15:38:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
