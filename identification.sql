-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2015 at 02:06 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `identification`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `district_of_birth` varchar(30) NOT NULL,
  `place_of_issue` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` text NOT NULL,
  `thumb` varchar(10) DEFAULT NULL,
  `fingerprints` varchar(50) DEFAULT NULL,
  `sign` varchar(50) DEFAULT NULL,
  `pfname` text NOT NULL,
  `pmname` text NOT NULL,
  `plname` text NOT NULL,
  `district` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `sublocation` varchar(30) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `serialnumber` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `fname`, `mname`, `lname`, `picture`, `district_of_birth`, `place_of_issue`, `date_of_birth`, `sex`, `thumb`, `fingerprints`, `sign`, `pfname`, `pmname`, `plname`, `district`, `division`, `location`, `sublocation`, `idnumber`, `serialnumber`) VALUES
(1, 'Sein', 'Nyarondia', 'Mageto', 'Sein_21.jpg', 'Nairobi', 'kasarani', '1992-09-09', 'Male', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'david', 'mageto', 'mageto', 'kisii', 'rigoma', 'kitutu', 'rigena', 10000001, 100000001),
(2, 'Denis', 'Nyarondia', 'Mageto', 'IMG-20140528-WA0000.jpg', 'Nairobi', 'kasa', '1992-09-09', 'Male', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'david', 'mageto', 'mageto', 'kisii', 'rigoma', 'kitutu', 'rigena', 10000002, 100000002),
(3, 'Lucy', 'Ann', 'Njeri', 'thisone.png', 'Central', 'Nyeri', '1992-01-25', 'Female', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'Denis', 'Mageto', 'Gatutha', 'Nyeri', 'Nyeri', 'Mathari', 'Mathari', 10000003, 100000003),
(5, 'Dennis', 'Zambarau', 'Quincy', 'collo.jpg', 'Nairobi', 'Nyeri', '1992-09-09', 'Male', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'Wewere', 'Uziza', 'Juala', 'kisii', 'qwerty', 'kitutu', 'rigena', 10000004, 100000004),
(7, 'jane', 'njeri', 'kamau', 'good.jpg', 'kiambu', 'kiambu', '1996-03-04', 'Female', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'david', 'kamau', 'njoroge', 'karatina', 'mathari', 'mathari', 'kiambu', 10000006, 100000005),
(8, 'Griffin', 'Muteti', 'Musembi', 'good1.jpg', 'Kitui', 'Machakos', '1995-05-08', 'Male', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'Denis', 'Mageto', 'Musembi', 'Kitui', 'Mbooni', 'Masii', 'Masii', 10000007, 100000006),
(9, 'Simion', 'Gikera', 'Njoroge', 'peter2.jpg', 'Nzoia', 'Kitale', '1994-05-17', 'Male', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'Peter', 'Wangenga', 'Mwai', 'Nairobi', 'Nairobi', 'Kasarani', 'kasa', 10000008, 100000007),
(11, 'EVANCE', 'GWOROH', 'BARRACKS', 'geto3.jpg', 'HOMABAY', 'HOMABAY', '1995-05-09', 'Male', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'SIMION', 'OMONDI', 'BARRACKS', 'HOMABAY', 'AWENDO', 'KARACHUONYO', 'AWENDO', 10000009, 100000008),
(12, 'Brian', 'Mosigisi', 'Nyamwange', 'IMG-20140616-WA0018.jpg', 'Kisii', 'Makadara', '1993-02-16', 'Male', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'Naftal', 'Nyamwange', 'Ondigi', 'Kisii', 'Marani', 'Ngenyi', 'Gesangero', 10000010, 100000009),
(13, 'caroline', 'wanjira', 'wamae', 'DSC063661.JPG', 'Nyeri', 'karatina', '1995-03-09', 'Female', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'ephraim', 'wamae', 'nderitu', 'nyeri', 'mathira', 'ngandu', 'ngandu', 10000011, 100000010),
(14, 'Irene', 'A', 'Opondo', 'MWASS(281).jpg', 'siaya', 'Kisumu', '1993-03-28', 'Female', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'Raphael', 'N', 'Opondo', 'Siaya', 'Kondele', 'Yala', 'Gem', 10000012, 100000011),
(15, 'Agnes', 'Noni', 'Karonji', 'IMG_20121013_154144.jpg', 'Kakamega', 'kiambu', '1992-03-02', 'Male', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'david', 'Annett', 'Naliaka', 'Mumias', 'Kondele', 'Siaya', 'Homabay', 10000013, 100000012),
(16, 'Alex', 'N', 'Kimani', 'IMG_20121013_185731.jpg', 'Nyeri', 'kasarani', '1991-03-25', 'Male', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'Mum', 'Muum', 'Muuum', 'karatina', 'Kondele', 'Kasarani', 'kiambu', 10000014, 100000013),
(17, 'Ruth', 'Waithera', 'Wachira', 'Photo0035_0011.jpg', 'Nairobi', 'kariokor', '1990-03-15', 'Female', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'Victor', 'Wachira', 'Waithera', 'Nairobi', 'Nairobi', 'embakasi', 'Kariokor', 10000015, 100000014),
(18, 'Mercy', 'Wacuka', 'Maina', 'IMG_20131023_205111.jpg', 'Kirinyaga', 'Sagana', '1993-08-06', 'Female', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'James', 'Maina', 'Peter', 'Kirinyaga', 'Ndia', 'Kiine', 'Kibingoti', 10000016, 100000015),
(19, 'Prisillah', 'maina', 'wacheke', 'sheke[1].jpg', 'Embakasi', 'Umoja', '1995-02-15', 'Female', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'Elizabeth', 'wanjiku', 'kamau', 'muranga', 'muranga', 'sabasaba', 'muthithi', 10000017, 100000016),
(20, 'angela', 'muthoni', 'muraguri', 'IMG_20131023_205008.jpg', 'Kirinyaga', 'kirinyaga', '1993-12-05', 'Female', 'f.jpg', 'fingurep.jpg', 'sign2.png', 'joseph', 'mwaa', 'mutinda', 'machakos', 'matuu', 'ekalakala', 'zukini', 10000018, 100000017),
(21, 'denis', 'Nyarondia', 'Mageto', 'me.jpg', 'Nairobi', 'kasarani', '1992-03-02', 'Male', 'f.jpg', 'fingurep.jpg', 'sign1.png', 'tabitha', 'nyansiaboka', 'omwega', 'kisii', 'rigoma', 'kitutu', 'rigena', 10000019, 100000018);

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

CREATE TABLE IF NOT EXISTS `clerk` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `usertype` enum('admin','clerk') NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`id`, `fname`, `lname`, `phone`, `username`, `usertype`, `password`, `picture`) VALUES
(2, 'Denis', 'Mageto', '0715274848', 'mageto', 'admin', 'f1f9ee2ed990fc5fe17830d445661c7c', 'collo1.jpg'),
(3, 'Irene', 'Opondo', '0715274843', 'shiro', 'clerk', '6dfdc384d6025b2ab9b71ec15971aa11', NULL),
(4, 'Mercy', 'Maina', '0705685840', 'wacukamaina', 'admin', '55bcb5b22e126345d70814c13a99d22e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(30) DEFAULT NULL,
  `second` varchar(30) DEFAULT NULL,
  `third` varchar(40) DEFAULT NULL,
  `fourth` varchar(40) DEFAULT NULL,
  `idnumber` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000024 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `first`, `second`, `third`, `fourth`, `idnumber`) VALUES
(10000018, 'IMG_20131023_2050172.jpg', NULL, NULL, NULL, 0),
(10000019, 'IMG_20131023_204755.jpg', 'WP_20131014_005.jpg', 'WP_20131014_001.jpg', 'WP_20131014_003.jpg', 10000018),
(10000020, '', 'WP_20131014_005.jpg', 'WP_20131014_001.jpg', 'WP_20131014_003.jpg', 10000018),
(10000021, '', 'WP_20131014_005.jpg', 'WP_20131014_001.jpg', 'WP_20131014_003.jpg', 10000018),
(10000022, 'IMG_20131023_205008.jpg', 'WP_20131014_005.jpg', 'WP_20131014_001.jpg', 'WP_20131014_003.jpg', 10000018),
(10000023, 'WP_20131010_003.jpg', NULL, NULL, NULL, 10000018);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
