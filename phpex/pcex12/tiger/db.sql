DROP TABLE IF EXISTS `tanks`;
CREATE TABLE `tanks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `url` varchar(1024) DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO `tanks` VALUES (1,'Tiger 1','https://en.wikipedia.org/wiki/Tiger_I','https://upload.wikimedia.org/wikipedia/commons/b/ba/Bundesarchiv_Bild_101I-299-1805-16%2C_Nordfrankreich%2C_Panzer_VI_%28Tiger_I%29.2.jpg');