-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2023 at 06:21 AM
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
-- Database: `attsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(11) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `member_id`, `date`, `attendance`) VALUES
(96, 4, '2022-06-30', 0),
(95, 3, '2022-06-30', 1),
(94, 2, '2022-06-30', 1),
(93, 1, '2022-06-30', 1),
(97, 1, '2022-07-01', 1),
(98, 3, '2022-07-01', 1),
(99, 4, '2022-07-01', 1),
(100, 1, '2022-07-02', 1),
(101, 3, '2022-07-02', 1),
(102, 4, '2022-07-02', 1),
(103, 1, '2023-01-28', 1),
(104, 3, '2023-01-28', 1),
(105, 4, '2023-01-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `rollno`) VALUES
(1, 'arya', 1),
(3, 'Arun', 2),
(9, 'AMAL', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
