/*
SQLyog Community Edition- MySQL GUI v6.15
MySQL - 5.6.21 : Database - grocery_to_go
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `grocery_to_go`;

USE `grocery_to_go`;

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `items_tb` */

insert  into `items_tb`(`id`,`category`,`brand`,`name`,`description`,`remain_stocks`,`price`,`status_flag`,`date_created`,`date_updated`) values (1,'CANNED GOODS/INSTANT FOOD',1,'ALASKA','condensed milk',0,'35.000',1,'2016-05-09 13:25:20','2016-05-09 13:25:24'),(2,'VEGETABLES',1,'PETCHAY','baguio petchay',0,'20.750',1,'2016-05-09 13:27:39','2016-05-09 13:32:24'),(3,'FRUITS',1,'Apple','Fuji apple',0,'40.120',1,'2016-05-14 00:00:00','2016-05-14 16:38:14'),(4,'CONDIMENTS',1,'Patis','Lorin\'s Patis',0,'15.000',1,'2016-05-14 00:00:00','2016-05-15 17:53:35'),(5,'DAIRY',1,'Milk','Cowhead',1,'52.500',1,'2016-05-14 00:00:00','2016-05-14 17:56:27'),(6,'MEAT/FISH',1,'Breast','Magnolia Chicken Breast',0,'240.000',1,'2016-05-14 00:00:00','2016-05-14 17:40:52'),(7,'RICE',1,'Sinandomeng','Maharlika Rice Co.',0,'42.500',1,'2016-05-16 00:00:00','2016-05-16 12:50:46'),(8,'CHIPS',1,'Cream-O Cakewich Vanilla','jnj',0,'25.000',1,'2016-05-16 00:00:00','2016-05-16 15:05:09'),(9,'BEVERAGES',1,'Kopiko 3in1','10pcs',0,'100.000',1,'2016-05-16 00:00:00','2016-05-16 14:10:23'),(10,'BEVERAGES',1,'Nescafe Gold 175g','Nescafe Gold 175g',0,'417.790',1,'2016-05-16 00:00:00','2016-05-16 14:10:24'),(11,'BEVERAGES',1,'C2 Solo Apple','C2 Solo Apple 230ml',0,'10.000',1,'2016-05-16 00:00:00','2016-05-16 14:06:38'),(12,'BEVERAGES',1,'C2 Solo Lemon','C2 Solo Lemon 230ml',0,'10.000',1,'2016-05-16 00:00:00','2016-05-16 14:07:15'),(13,'BEVERAGES',1,'C2 Litro Lemon','C2 Litro Lemon 1L',0,'30.880',1,'2016-05-16 00:00:00','2016-05-16 14:08:16'),(14,'BEVERAGES',1,'C2 Iced tea Lemon','C2 Iced tea Lemon 355ml',0,'17.000',1,'2016-05-16 00:00:00','2016-05-16 14:09:12'),(15,'BEVERAGES',1,'C2 Red tea Raspberry','C2 Red tea Raspberry 355ml',0,'17.000',1,'2016-05-16 00:00:00','2016-05-16 16:25:19'),(16,'CHIPS',1,'Quake Bars Choco filled','',0,'57.000',1,'2016-05-16 00:00:00','2016-05-16 16:25:21'),(17,'TOILETRIES',1,'Palmolive Sachet','15ml',50,'50.000',1,'2016-05-16 00:00:00','2016-05-16 16:25:23'),(18,'CHIPS',1,'Quake Bard Vanilla filled','10\'s',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:37:27'),(19,'CHIPS',1,'Quake Bars Combo pack','10x14',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:38:14'),(20,'CHIPS',1,'Espesyal mamon de leche','30g',10,'65.280',1,'2016-05-16 00:00:00','2016-05-16 17:39:07'),(21,'CHIPS',1,'Quake Overload Strawberry','10\'s',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:39:49'),(22,'CHIPS',1,'Quake Overload Mocha butter','10\'s',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:40:26'),(23,'CHIPS',1,'Quake overload Black Forest','10\'s',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:41:05'),(24,'CHIPS',1,'JnJ Mallowpuffs','28g',10,'15.000',1,'2016-05-16 00:00:00','2016-05-16 17:41:57'),(25,'CHIPS',1,'JnJ Quake Overload caramel craze','Jack\'n Jill',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:42:41'),(26,'CHIPS',1,'Quake overload favorites','Quake',10,'57.000',1,'2016-05-16 00:00:00','2016-05-16 17:43:33'),(27,'CHIPS',1,'Cream-O Vanilla','10\'s',10,'60.000',1,'2016-05-16 00:00:00','2016-05-16 17:44:56');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
