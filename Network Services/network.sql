-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: network
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `Trigger_time`
--

DROP TABLE IF EXISTS `Trigger_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Trigger_time` (
  `Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Trigger_time`
--

LOCK TABLES `Trigger_time` WRITE;
/*!40000 ALTER TABLE `Trigger_time` DISABLE KEYS */;
INSERT INTO `Trigger_time` VALUES (2147483647);
/*!40000 ALTER TABLE `Trigger_time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Admin_id` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `ph_no` int(10) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('cooper@gmail.com','cooper','',0),('abc@gmail.com','abcdef','',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bills` (
  `U_name` varchar(50) NOT NULL,
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `amount` int(10) NOT NULL,
  `pay_method` varchar(15) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bills`
--

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` VALUES ('abc',15,1590,'paytm'),('abc',26,49,'tez'),('abcd@gmail.com',27,99,'paytm'),('ban',28,49,'card');
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call_plans`
--

DROP TABLE IF EXISTS `call_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_plans` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_amount` int(10) NOT NULL,
  `c_description` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_plans`
--

LOCK TABLES `call_plans` WRITE;
/*!40000 ALTER TABLE `call_plans` DISABLE KEYS */;
INSERT INTO `call_plans` VALUES (201,'c1',59,'Rs.59  Full talktime & 5 Local SMS Valid for 5 days '),(202,'c2',99,'Rs.99  Full talktime & 9 Local SMS Valid for 14 days'),(203,'c3',198,'Rs.198  Full talktime & 14 Local SMS Valid for 28 days'),(204,'c4',399,'Rs.399  Full talktime & 14 Local SMS Valid for 28 days'),(205,'c5',19,'Rs.19  Advance talktime. rs.2 extra charges on next recharge '),(206,'c6',29,'Rs.29 Advance talktime. rs.5 extra charges on next recharge \r\n          \r\n       '),(207,'c7',39,'Rs.39  Advance talktime. rs.7 extra charges on next recharge '),(208,'c8',27,'call rate -Local and STD call for Rs.27 @1ps/s '),(209,'c9',69,'call rate -Local and STD call for Rs.69 @2ps/s  '),(210,'c10',199,'call rate -Local call for Rs.199 @10ps/min  '),(211,'c11',499,'call rate -Unlimited International calls for 1 month');
/*!40000 ALTER TABLE `call_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_plans`
--

DROP TABLE IF EXISTS `data_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_plans` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(10) NOT NULL,
  `d_amount` int(10) NOT NULL,
  `d_description` text NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_plans`
--

LOCK TABLES `data_plans` WRITE;
/*!40000 ALTER TABLE `data_plans` DISABLE KEYS */;
INSERT INTO `data_plans` VALUES (101,'d1',49,'500 mb 2G data for 14 days'),(102,'d2',99,'1 gb 2G data for 14 days'),(103,'d3',199,'3 gb 2G data for 28 days\r\n'),(104,'d4',299,'5 gb 2G data for 28 days '),(105,'d5',69,'500 mb 3G data for 14 days'),(106,'d6',129,'1 gb 3G data for 14 days\r\n'),(107,'d7',189,'2 gb 3G data for 28 days\r\n'),(108,'d8',399,'3 gb 3G data for 28 days'),(109,'d9',59,'250 mb 4G data for 14 days'),(110,'d10',139,'500 mb 4G data for 14 days\r\n'),(111,'d11',499,'1gb 4G data for 28 days'),(112,'d12',599,'3 gb 4G data for 28 days\r\n');
/*!40000 ALTER TABLE `data_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `phone` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (1,'lmn',102,99,'9876543210'),(2,'abc',101,49,'9876543210'),(3,'abcd@gmail.com',102,99,'9876543210'),(4,'ban',101,49,'9876543210');
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trigger_time`
--

DROP TABLE IF EXISTS `trigger_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trigger_time` (
  `Time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trigger_time`
--

LOCK TABLES `trigger_time` WRITE;
/*!40000 ALTER TABLE `trigger_time` DISABLE KEYS */;
INSERT INTO `trigger_time` VALUES ('2018-04-26 13:45:24'),('2018-01-10 20:02:44'),('2017-12-05 12:44:16'),('2017-11-24 10:35:42'),('2018-11-21 16:40:46'),('2018-11-21 20:39:29');
/*!40000 ALTER TABLE `trigger_time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tv_plans`
--

DROP TABLE IF EXISTS `tv_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tv_plans` (
  `t_id` int(10) NOT NULL,
  `t_name` varchar(10) NOT NULL,
  `t_amount` int(10) NOT NULL,
  `t_description` text NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tv_plans`
--

LOCK TABLES `tv_plans` WRITE;
/*!40000 ALTER TABLE `tv_plans` DISABLE KEYS */;
INSERT INTO `tv_plans` VALUES (301,'t1',1590,'DTH- 193 channels for 30 days'),(302,'t2',1300,'DTH- 140 channels for 30 days'),(303,'t3',1700,'DTH- 140 channels for 30 days'),(304,'t4',1490,'DTH- 185 channels for 30 days'),(305,'t5',1000,'netTV- 100 HD channels for 30 days'),(306,'t6',1500,'netTV- 150 HD channels for 30 days'),(307,'t7',2000,'netTV- 200 HD channels for 30 days'),(308,'t8',2500,'netTV- 250 HD channels for 30 days');
/*!40000 ALTER TABLE `tv_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ph_no` int(10) NOT NULL DEFAULT '0',
  `address` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('bob@gmail.com','bob123',0,''),('sukku','anju',0,''),('tom12@gmail.com','tom123',0,''),('ban','ban',0,''),('sghegde','sgh',0,''),('abcd@gmail.com','abcd',0,''),('srivishnu.k90@gmail.com','sri9012',0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`%`*/ /*!50003 TRIGGER `trig` BEFORE INSERT ON `users`
 FOR EACH ROW INSERT INTO Trigger_time(Time) VALUES(NOW()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `wifi_plans`
--

DROP TABLE IF EXISTS `wifi_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wifi_plans` (
  `w_id` int(10) NOT NULL,
  `w_name` varchar(10) NOT NULL,
  `w_amount` int(10) NOT NULL,
  `w_description` text NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wifi_plans`
--

LOCK TABLES `wifi_plans` WRITE;
/*!40000 ALTER TABLE `wifi_plans` DISABLE KEYS */;
INSERT INTO `wifi_plans` VALUES (401,'w1',500,'Modem-- 10 GB @45Mbps for 1 month '),(402,'w2',1000,'Modem-- 20 GB @50Mbps for 1 month '),(403,'w3',1200,'Modem-- 30 GB @60Mbps for 1 month'),(404,'w4',1600,'Modem-- 40 GB @80Mbps for 1 month'),(405,'w5',486,'Data card-- 20 GB @50Mbps for 1 month'),(406,'w6',978,'Data card-- 20 GB @50Mbps for 1 month'),(407,'w7',1130,'Data card-- 30 GB @60Mbps for 1 month'),(408,'w8',1459,'Data card-- 40 GB @80Mbps for 1 month');
/*!40000 ALTER TABLE `wifi_plans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-22 13:27:33
