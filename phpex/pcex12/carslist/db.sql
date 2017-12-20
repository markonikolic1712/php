-- MySQL dump 10.13  Distrib 5.7.16, for osx10.12 (x86_64)
--
-- Host: localhost    Database: cars
-- ------------------------------------------------------
-- Server version	5.7.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) DEFAULT NULL,
  `manu` varchar(50) DEFAULT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Fiat 126p','Fiat',300.00,'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Centoventisei.jpg/1200px-Centoventisei.jpg'),(2,'Opel Kadett','Opel',500.00,'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Opel_Kadett_B_BW_2016-09-03_13-52-40.jpg/280px-Opel_Kadett_B_BW_2016-09-03_13-52-40.jpg'),(3,'Citroen Ami','Citroen',500.00,'https://i.ytimg.com/vi/baUYt4EXg2c/maxresdefault.jpg'),(4,'Zastava 1300','Zastava',700.00,'https://c1.staticflickr.com/3/2929/14463120589_52489f27ed_b.jpg'),(5,'Yugo 45','Zastava',1000.00,'https://images.honestjohn.co.uk/imagecache/file/width/640/media/7528376/Yugo%2045%20(1).jpg'),(6,'Zastava 101','Zastava',1200.00,'http://www.autoslavia.com/wp-content/uploads/2016/04/zastava-101-45-godina-autoslavia-cover-1050x500.jpg');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-20 11:24:39
