/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.13-MariaDB : Database - grocery_to_go
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`grocery_to_go` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `grocery_to_go`;

/*Table structure for table `food_category_tb` */

DROP TABLE IF EXISTS `food_category_tb`;

CREATE TABLE `food_category_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` enum('CANNED GOODS/INSTANT FOOD','CONDIMENTS','DAIRY','FRUITS','MEAT/FISH','RICE','VEGETABLES') NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `status_flag` int(1) DEFAULT NULL COMMENT '1 - available; 0 - not available',
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `food_category_tb` */

insert  into `food_category_tb`(`id`,`category`,`name`,`description`,`price`,`status_flag`,`date_created`,`date_updated`) values (1,'CANNED GOODS/INSTANT FOOD','ALASKA','condensed milk','35.00',1,'2016-05-09 13:25:20','2016-05-09 13:25:24'),(2,'VEGETABLES','PETCHAY','baguio petchay','20.75',1,'2016-05-09 13:27:39','2016-05-09 13:32:24');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
