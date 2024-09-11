-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2017 at 02:29 PM
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
-- Dumping data for table `khev_Conference`
--


INSERT INTO `khev_User` (`userId`, `loginName`, `hashPassword`, `name`, `lastName`, `phoneNumber`, `email`) VALUES
(2, 'root', '11', 'abcd', 'shshs', '23323', 'guybami@xml.de');

INSERT INTO `khev_Conference` (`conferenceId`, `date`, `title`, `location`, `summary`) VALUES
(12, '2017-04-12 22:00:00', 'title-3798003', 'location-370788c', 'sjsjs'),
(13, '2017-04-30 00:00:00', 'Diaspora camerounaise', 'Heilbronn', 'Dirigee par Valere.\r\nAlways have handy the un-minified CSS for bootstrap so you can see what styles they have on their components, then create a CSS file AFTER it, if you don''t use LESS and over-write their mixins or whatever\r\n\r\nThis is the default modal css for 768px and up:\r\n\r\n@media (min-width: 768px) {\r\n  .modal-dialog {\r\n    width: 600px;\r\n    margin: 30px auto;\r\n  }\r\n  ...\r\n}\r\n\r\nThey have a class modal-lg for larger widths\r\n\r\n@media (min-width: 992px) {\r\n  .modal-lg {\r\n    width: 900px;\r\n  }\r\n}');

--
-- Dumping data for table `khev_Event`
--

INSERT INTO `khev_Event` (`eventId`, `title`, `category`, `date`, `location`, `summary`) VALUES
(2, 'Tournoi Karlsruhe 2017', 'Football', '2017-04-25 04:11:17', 'Karslruhe', 'ddd'),
(12, 'AAA', 'Tournament', '2017-04-22 22:00:00', 'AQ', ' d  sdssss'),
(13, 'Tournois Germesheim', 'Tournament', '2017-04-13 22:00:00', 'Gemersheim', 'sssss'),
(14, '-Footbal veteran', 'Gaduation', '2016-02-08 23:00:00', 'Stuttgart', 'je suis un summary content to be...'),
(15, 'Tournois Mannheim', 'Football', '2015-11-06 23:00:00', 'Mannheim birgstrasse 12', 'content to veteran');

--
-- Dumping data for table `khev_EventPhoto`
--

INSERT INTO `khev_EventPhoto` (`photoId`, `eventId`, `fileFullName`, `title`) VALUES
(10, 2, 'imagesl.png', '-bvvv'),
(11, 2, 'PAYPAL--Important.png', '-bvvv'),
(12, 2, 'TestImg3.png', '-bvvv'),
(13, 2, 'Voucher-code.png', '-bvvv'),
(14, 2, 'VPN-Fehler.png', '-bvvv'),
(15, 13, 'facture1.png', '-Ass'),
(16, 13, 'facture2.png', '-Ass'),
(17, 13, 'facture3.png', '-Ass'),
(19, 2, 'facture1.png', '-aa'),
(21, 2, 'facture1_591d8b56.png', '-ss'),
(22, 2, 'ettikett.jpg', 'aa'),
(23, 2, 'facture2_591d8bfa.png', '-ss'),
(24, 2, 'facture1_591d8cce.png', '-aa'),
(25, 2, 'imagesl_591d9347.png', '-aa'),
(26, 2, 'ettikett_591d940d.jpg', '-aa');

--
-- Dumping data for table `khev_Expense`
--

INSERT INTO `khev_Expense` (`expenseId`, `eventId`, `title`, `amount`, `category`, `billFileName`, `transactionDate`) VALUES
(26, 2, 'fd', 43, 'Sport', 'testimg3.png', '2017-05-18 10:41:11'),
(27, 13, 'Test facture', 232, 'Gaduation', 'facture3.png', '2017-05-19 17:06:58'),
(28, 13, '-aaaa', 212, 'Sport', 'facture2.png', '2016-11-08 23:00:00'),
(29, 13, 'wqqq', 34, 'Sport', 'facture3_591ddccd.png', '2016-10-10 22:00:00'),
(30, 13, 'fddd', 554, 'Sport', 'facture2_591ddde8.png', '2016-09-18 22:00:00'),
(31, 15, 'assa', 213, 'Sport', 'facture2_591dde59.png', '2017-05-08 22:00:00'),
(32, 2, '-xs', 211, 'FirstSemesterParty', 'facture2_591ddec9.png', '2017-05-16 22:00:00'),
(33, 2, 'aaa', 123, 'Sport', 'facture2.png', '2017-05-19 17:52:31'),
(34, 13, 'xx', 121, 'Gaduation', 'facture2.png', '2017-05-31 22:00:00');

--
-- Dumping data for table `khev_Income`
--

INSERT INTO `khev_Income` (`incomeId`, `eventId`, `title`, `amount`, `category`, `billFileName`, `transactionDate`) VALUES
(3, 2, 'g', 432, 'GalaNight', 'testimg3.png', '2017-05-18 11:24:48');

--
-- Dumping data for table `khev_Member`
--

INSERT INTO `khev_Member` (`memberId`, `gender`, `name`, `lastName`, `email`, `phoneNumber`, `zipCode`, `city`, `address`, `position`) VALUES
(9, 'Male', 'Akouen', ' Prudence', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(13, 'Male', 'Bami Watcho', 'Guy', 'guybami@yahoo.fr', '017675205386', '74172', 'Neckarsulm', 'Sebastian-Bach-Weg 16', 'Président'),
(14, 'Female', 'Bokem Atchomou', 'Rodrigue', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(15, 'Male', 'Bomba', 'Rodrigue', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(16, 'Male', 'Damfe Dandjeu', 'Cedric Arnaud', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(17, 'Male', 'Dikoka Ngando', 'Dorette', '-', '-', '-', 'Heilbronn', '-', 'Chargé Activités Culturelles'),
(18, 'Male', 'Donmeza Penka', 'Paul vermon', '-', '017624360663', '-', 'Heilbronn', '-', 'Secretaire'),
(19, 'Male', 'Yamdjeu', 'Duplex', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(20, 'Male', 'Egbekaseh Assick', 'Robinson', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(21, 'Male', 'Foaleng', 'Denis', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(22, 'Male', 'Fotso Ouafo', 'Raoul', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(23, 'Male', 'Galiatcha Siekapen', 'Max Achille', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(24, 'Male', 'Kapawe', 'Levis', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(25, 'Male', 'Kaze Kenne', 'Valere', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(26, 'Female', 'Youtamba', 'Kevine', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(27, 'Male', 'Magni', 'Lucas Edgard', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(28, 'Male', 'Manock Bayap', 'Thierry', '-', '-', '-', 'Heilbronn', '-', 'Chargé Activités Sportivités'),
(29, 'Male', 'Misse Misse', 'Achille', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(30, 'Male', 'Ngague Toualeu', 'Serge Amede', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(31, 'Male', 'Ngoka', 'Wilfried', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(32, 'Male', 'Nkongo Essobo', 'Pecos', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(33, 'Male', 'Ntouala Kameni', 'Jean Desire', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(34, 'Male', 'Nya Djanwa', 'Reuel Patrick', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(35, 'Male', 'Nyetindema Fomete', 'Franck Gill', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(36, 'Male', 'Tiatcho', 'Patrick', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(37, 'Male', 'Talla Ouafeu', 'Edmond', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(38, 'Male', 'Tamdem Wabo', 'Aristide Brice', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(39, 'Male', 'Youtamba Fotso', 'Patrick', '-', '-', '-', 'Heilbronn', '-', 'Membre'),
(40, 'Female', 'Keudjio Dipah', 'Christelle Larissa', '-', '-', '-', 'Heilbronn', '-', 'Tresoriere');

--
-- Dumping data for table `khev_OfficeMember`
--

INSERT INTO `khev_OfficeMember` (`officeMemberId`, `memberId`, `position`) VALUES
(1, 13, 'President'),
(2, 17, 'ChiefCulture'),
(3, 18, 'Secretary'),
(4, 28, 'ChiefSport'),
(5, 40, 'Treasurer');

--
-- Dumping data for table `khev_OldExam`
--

INSERT INTO `khev_OldExam` (`examId`, `userId`, `subject`, `title`, `semester`, `date`) VALUES
(1, 1, 'Mathe 1', 'title-5ea363a', 'semester-4', '2017-04-08 00:00:00'),
(2, 1, 'Info 1', 'title-5ea363a', 'semester-4', '2017-04-08 00:00:00');

--
-- Dumping data for table `khev_User`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
