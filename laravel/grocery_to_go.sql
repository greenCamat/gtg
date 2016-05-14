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

/*Table structure for table `food_category_tb` */

DROP TABLE IF EXISTS `food_category_tb`;

CREATE TABLE `food_category_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` enum('CANNED GOODS/INSTANT FOOD','CONDIMENTS','DAIRY','FRUITS','MEAT/FISH','RICE','VEGETABLES') NOT NULL,
  `brand` int(1) NOT NULL DEFAULT '1' COMMENT '1 - local 2-Imported',
  `name` varchar(250) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `remain_stocks` int(10) NOT NULL DEFAULT '0' COMMENT 'total remaining item available',
  `price` decimal(8,2) NOT NULL,
  `status_flag` int(1) DEFAULT NULL COMMENT '1 - available; 0 - not available',
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `food_category_tb` */

insert  into `food_category_tb`(`id`,`category`,`brand`,`name`,`description`,`remain_stocks`,`price`,`status_flag`,`date_created`,`date_updated`) values (1,'CANNED GOODS/INSTANT FOOD',1,'ALASKA','condensed milk',0,'35.00',1,'2016-05-09 13:25:20','2016-05-09 13:25:24'),(2,'VEGETABLES',1,'PETCHAY','baguio petchay',0,'20.75',1,'2016-05-09 13:27:39','2016-05-09 13:32:24');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
