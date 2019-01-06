/*
SQLyog Community Edition- MySQL GUI v7.0  
MySQL - 5.0.51b-community-nt : Database - details
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`details` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `details`;

/*Table structure for table `details` */

DROP TABLE IF EXISTS `details`;

CREATE TABLE `details` (
  `personal_id` int(11) NOT NULL auto_increment,
  `name` varchar(20) default NULL,
  `dob` date default NULL,
  `gender` varchar(20) default NULL,
  `street` varchar(20) default NULL,
  `town` varchar(20) default NULL,
  `state` char(3) default NULL,
  `post_code` decimal(10,0) default NULL,
  `country_birth` varchar(20) default NULL,
  PRIMARY KEY  (`personal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `details` */

insert  into `details`(`personal_id`,`name`,`dob`,`gender`,`street`,`town`,`state`,`post_code`,`country_birth`) values (1,'SEAN LEE','1986-12-20','M','16 HUNTER STREET','BANKSTOWN','NSW','2200','MALAYSIA'),(2,'JANE DOE','1980-05-01','F','201 FAIRMOUNT ST','PYMBLE','NSW','2122','AUSTRALIA'),(3,'BARRY WHITE','1988-08-01','M','123 BLACKWELL','HOLSWORTHY','ACT','5445','USA'),(4,'MARY JANE','1984-09-13','F','11 STRATH ST','MAINLAND','ACT','7667','USA'),(5,'SARAH HIGH','1992-07-17','F','150 BLACKWELL ST','HOLSWORTHY','ACT','5445','USA'),(6,'JONATHAN MOE','1988-11-23','M','160 AIRPORT AVE','BANKSTOWN','NSW','2200','AUSTRALIA'),(7,'SARAH MITCHi','1978-05-16','F','57 MARY ST','STRATHFIELD','NSW','2451','AUSTRALIA'),(8,'JASON SPIKE','1989-03-06','M','16 BORN AVE','BANKSTOWN','NSW','2200','USA'),(9,'JOHN MICHEALS','1984-05-14','M','40 BLACKWELL ST','HOLSWORTHY','ACT','5445','AUSTRALIA'),(17,'sean','1111-11-11','m','12 asdad','','','12312','');

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `name` varchar(20) default NULL,
  `phonenum` decimal(10,0) default NULL,
  `time` time default NULL,
  `pax` decimal(2,0) default NULL,
  `date` date default NULL,
  `tablenum` varchar(20) default NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `reservation` */

insert  into `reservation`(`id`,`name`,`phonenum`,`time`,`pax`,`date`,`tablenum`) values (20,'ASDASD','12312312','12:12:00','99','0000-00-00','123123'),(21,'HHH','12312312','10:10:00','1','1111-11-11','33'),(33,'ASDASD','12312321','12:12:00','12','0000-00-00','12'),(32,'ASD','12312312','12:12:00','11','1111-11-11','123');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` mediumint(9) NOT NULL auto_increment,
  `username` varchar(60) default NULL,
  `password` varchar(60) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`ID`,`username`,`password`) values (5,'seanlee','seanlee'),(7,'test2','test2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
