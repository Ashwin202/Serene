-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2021 at 06:51 PM
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
-- Database: `royal_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123', 77874512);

-- --------------------------------------------------------

--
-- Table structure for table `double_ac`
--

DROP TABLE IF EXISTS `double_ac`;
CREATE TABLE IF NOT EXISTS `double_ac` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_ac`
--

INSERT INTO `double_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `double_non_ac`
--

DROP TABLE IF EXISTS `double_non_ac`;
CREATE TABLE IF NOT EXISTS `double_non_ac` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_non_ac`
--

INSERT INTO `double_non_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `single_ac`
--

DROP TABLE IF EXISTS `single_ac`;
CREATE TABLE IF NOT EXISTS `single_ac` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_ac`
--

INSERT INTO `single_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `single_non_ac`
--

DROP TABLE IF EXISTS `single_non_ac`;
CREATE TABLE IF NOT EXISTS `single_non_ac` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `holder_address` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `out_date` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single_non_ac`
--

INSERT INTO `single_non_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 103, 'Bhagat Sekhar', 18008, '545444515', 'tvm', 0, 1, '12-01-2021', '20-01-2021', 1),
(4, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `passsword` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `passsword`) VALUES
(1, 'admin@admin.com', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
