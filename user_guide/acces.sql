/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.16 : Database - my_api
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`my_api` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `my_api`;

/*Table structure for table `access` */

DROP TABLE IF EXISTS `access`;

CREATE TABLE `access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `function` varchar(40) NOT NULL DEFAULT '',
  `metodo` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `access` */

insert  into `access`(`id`,`key`,`controller`,`date_created`,`date_modified`,`function`,`metodo`) values (1,'123456','/Myrest',NULL,'0000-00-00 00:00:00','',''),(2,'1234567','/api',NULL,'0000-00-00 00:00:00','',''),(3,'nMd4VQ7Zg33LjcVJTRqs7P1nayJbJMhRnM5ElPzh','/Myrest',NULL,'2016-03-28 14:39:33','student','put'),(4,'nMd4VQ7Zg33LjcVJTRqs7P1nayJbJMhRnM5ElPzh','/api',NULL,'2016-03-28 14:39:23','',''),(9,'nMd4VQ7Zg33LjcVJTRqs7P1nayJbJMhRnM5ElPzh','/Myrest','2016-03-14 21:56:17','2016-03-28 10:52:29','student','get'),(10,'nMd4VQ7Zg33LjcVJTRqs7P1nayJbJMhRnM5ElPzh','/Users','2016-03-28 14:21:07','2016-03-28 14:22:07','usr','put'),(11,'nMd4VQ7Zg33LjcVJTRqs7P1nayJbJMhRnM5ElPzh','/Users','2016-03-30 16:10:57','2016-03-30 16:11:08','usr','post');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
