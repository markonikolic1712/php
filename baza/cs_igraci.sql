-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2018 at 10:48 AM
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
-- Database: `cs_igraci`
--

-- --------------------------------------------------------

--
-- Table structure for table `igraci`
--

DROP TABLE IF EXISTS `igraci`;
CREATE TABLE IF NOT EXISTS `igraci` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `slika` varchar(1024) NOT NULL,
  `zastava` varchar(1024) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `nadimak` varchar(255) NOT NULL,
  `tim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igraci`
--

INSERT INTO `igraci` (`id`, `slika`, `zastava`, `ime`, `prezime`, `nadimak`, `tim`) VALUES
(1, 'https://static.hltv.org/images/playerprofile/thumb/9172/400.jpeg?v=2', 'https://static.hltv.org/images/bigflags/30x20/KR.gif', 'Hyun-Pyo', 'Lee', '\"XigN\"', 'MVP PK'),
(2, 'https://static.hltv.org/images/playerprofile/thumb/174/400.jpeg?v=3', 'https://static.hltv.org/images/bigflags/30x20/KR.gif', 'Keun-Chul', 'Kang', '\"solo\"', 'MVP PK\r\n'),
(3, 'https://static.hltv.org/images/playerprofile/thumb/205/400.jpeg?v=3', 'https://static.hltv.org/images/bigflags/30x20/KR.gif', 'Min-Soo', 'Kim', '\"glow\"', 'MVP PK'),
(4, 'https://static.hltv.org/images/playerprofile/thumb/4637/400.jpeg?v=3', 'https://static.hltv.org/images/bigflags/30x20/KR.gif', 'Min-Seok', 'Park', '\"zeff\"', 'MVP PK'),
(5, 'https://static.hltv.org/images/playerprofile/thumb/9174/400.jpeg?v=2', 'https://static.hltv.org/images/bigflags/30x20/KR.gif', 'Hae-Sung', 'Kim', '\"HSK\"', 'MVP PK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
