
DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) DEFAULT NULL,
  `manu` varchar(50) DEFAULT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


INSERT INTO `cars` VALUES (1,'Fiat 126p','Fiat',300.00,'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Centoventisei.jpg/1200px-Centoventisei.jpg'),(2,'Opel Kadett','Opel',500.00,'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Opel_Kadett_B_BW_2016-09-03_13-52-40.jpg/280px-Opel_Kadett_B_BW_2016-09-03_13-52-40.jpg'),(3,'Citroen Ami','Citroen',500.00,'https://i.ytimg.com/vi/baUYt4EXg2c/maxresdefault.jpg'),(4,'Zastava 1300','Zastava',700.00,'https://c1.staticflickr.com/3/2929/14463120589_52489f27ed_b.jpg'),(5,'Yugo 45','Zastava',1000.00,'https://images.honestjohn.co.uk/imagecache/file/width/640/media/7528376/Yugo%2045%20(1).jpg'),(6,'Zastava 101','Zastava',1200.00,'http://www.autoslavia.com/wp-content/uploads/2016/04/zastava-101-45-godina-autoslavia-cover-1050x500.jpg');