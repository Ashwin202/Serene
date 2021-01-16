-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2021 at 06:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

DROP TABLE IF EXISTS `contactdata`;
CREATE TABLE IF NOT EXISTS `contactdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `attachement` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdata`
--

INSERT INTO `contactdata` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `attachement`) VALUES
(4, 'Ashwin', 'm', '9849856', 'aaa@gmail.com', 'naice', NULL),
(5, 'Ashwin', 'M', '7994771185', 'ashes192000@gmail.com', 'GOOD', NULL),
(6, 'angha', 'thomas', '656465', 'aa@gmail.com', 'Naice Hotel', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
