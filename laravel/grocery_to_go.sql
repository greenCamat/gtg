/*
SQLyog Community Edition- MySQL GUI v6.15
MySQL - 5.6.21 : Database - grocery_to_go
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `items_tb` */

DROP TABLE IF EXISTS `items_tb`;

CREATE TABLE `items_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` enum('CANNED GOODS/INSTANT FOOD','CONDIMENTS','DAIRY','FRUITS','MEAT/FISH','RICE','VEGETABLES','CHIPS','BEVERAGES','TOILETRIES','SUPPLIES','OTHERS') NOT NULL,
  `brand` int(1) NOT NULL DEFAULT '1' COMMENT '1 - local 2-Imported',
  `name` varchar(250) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `remain_stocks` int(10) NOT NULL DEFAULT '0' COMMENT 'total remaining item available',
  `price` decimal(8,3) NOT NULL,
  `status_flag` int(1) DEFAULT NULL COMMENT '1 - available; 0 - not available',
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `items_tb` */

insert  into `items_tb`(`id`,`category`,`brand`,`name`,`description`,`remain_stocks`,`price`,`status_flag`,`date_created`,`date_updated`) values (1,'CANNED GOODS/INSTANT FOOD',1,'ALASKA','condensed milk',0,'35.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'VEGETABLES',1,'PETCHAY','baguio petchay',10,'20.750',1,'0000-00-00 00:00:00','2016-06-04 20:22:13'),(3,'FRUITS',1,'Apple','Fuji apple',0,'40.120',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'CONDIMENTS',1,'Patis','Lorin\'s Patis',0,'15.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'DAIRY',1,'Milk','Cowhead',1,'52.500',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'MEAT/FISH',1,'Breast','Magnolia Chicken Breast',0,'240.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'RICE',1,'Sinandomeng','Maharlika Rice Co.',0,'42.500',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'CHIPS',1,'Cream-O Cakewich Vanilla','jnj',0,'25.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'VEGETABLES',1,'White Onion','10pcs',20,'50.000',1,'0000-00-00 00:00:00','2016-06-08 15:13:15'),(10,'VEGETABLES',1,'Nescafe Gold','175g',0,'417.790',1,'0000-00-00 00:00:00','2016-06-08 16:17:23'),(11,'VEGETABLES',1,'C2 Solo Apple','C2 Solo Apple 230ml',0,'10.000',1,'0000-00-00 00:00:00','2016-06-08 15:24:36'),(12,'VEGETABLES',1,'C2 Solo Lemon','C2 Solo Lemon 230ml',0,'10.000',1,'0000-00-00 00:00:00','2016-06-14 15:06:20'),(13,'VEGETABLES',1,'C2 Litro Lemon','C2 Litro Lemon 1L',0,'30.880',1,'0000-00-00 00:00:00','2016-06-14 15:06:24'),(14,'VEGETABLES',1,'C2 Iced tea','C2 Iced tea Lemon 355ml',0,'17.000',1,'0000-00-00 00:00:00','2016-06-14 15:07:11'),(15,'VEGETABLES',1,'C2 Red tea ','C2 Red tea Raspberry 355ml',0,'17.000',1,'0000-00-00 00:00:00','2016-06-14 15:07:16'),(16,'CHIPS',1,'Quake Bars ','Choco filled',0,'57.000',1,'0000-00-00 00:00:00','2016-06-14 15:07:26'),(17,'TOILETRIES',1,'Palmolive Sachet','15ml',50,'50.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'CHIPS',1,'Quake Bard Vanilla filled','10\'s',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,'CHIPS',1,'Quake Bars Combo pack','10x14',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,'CHIPS',1,'Espesyal mamon de leche','30g',10,'65.280',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,'CHIPS',1,'Quake Overload Strawberry','10\'s',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,'CHIPS',1,'Quake Overload Mocha butter','10\'s',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'CHIPS',1,'Quake overload Black Forest','10\'s',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,'CHIPS',1,'JnJ Mallowpuffs','28g',10,'15.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,'CHIPS',1,'JnJ Quake Overload caramel craze','Jack\'n Jill',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,'CHIPS',1,'Quake overload favorites','Quake',10,'57.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,'CHIPS',1,'Cream-O Vanilla','10\'s',10,'60.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'CHIPS',1,'Nova','50g',10,'20.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,'CHIPS',1,'CHIPPY','CHIPPY NG BAYAN',10,'15.500',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,'MEAT/FISH',1,'PORK MONTEREY','desc',10,'250.000',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
