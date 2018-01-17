-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2017 at 07:47 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g6_zaposleni`
--

-- --------------------------------------------------------

--
-- Table structure for table `glumice`
--

DROP TABLE IF EXISTS `glumice`;
CREATE TABLE IF NOT EXISTS `glumice` (
  `imeprezime` varchar(256) NOT NULL,
  `godiste` int(11) NOT NULL,
  `film` text NOT NULL,
  PRIMARY KEY (`imeprezime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glumice`
--

INSERT INTO `glumice` (`imeprezime`, `godiste`, `film`) VALUES
('Cate Mara', 1985, 'House of cards'),
('Jessica Chastain', 1977, 'Interstelar'),
('Kevin Space', 1985, 'House of cards'),
('Robin Wright', 1966, 'House of cards'),
('Scarlet Jochanson', 1984, 'Ghost in a shell');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('marija', '234'),
('sss', '444'),
('Uros', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
