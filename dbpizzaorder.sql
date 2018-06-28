-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: dbpizzaorder
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladmin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `adminNAME` varchar(255) DEFAULT NULL,
  `adminPASSWORD` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladmin`
--

LOCK TABLES `tbladmin` WRITE;
/*!40000 ALTER TABLE `tbladmin` DISABLE KEYS */;
INSERT INTO `tbladmin` VALUES (1,'Vjon','12345');
/*!40000 ALTER TABLE `tbladmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcust`
--

DROP TABLE IF EXISTS `tblcust`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcust` (
  `custID` int(11) NOT NULL AUTO_INCREMENT,
  `custFNAME` varchar(255) DEFAULT NULL,
  `custLNAME` varchar(255) DEFAULT NULL,
  `custPASS` varchar(255) DEFAULT NULL,
  `custNUMBER` varchar(255) NOT NULL,
  PRIMARY KEY (`custID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcust`
--

LOCK TABLES `tblcust` WRITE;
/*!40000 ALTER TABLE `tblcust` DISABLE KEYS */;
INSERT INTO `tblcust` VALUES (1,'Sheldon','Cooper','123','1234567'),(2,'Leonard','Hofstadter','123','1234567'),(3,'Howard','Wolowitz','123','1234567'),(4,'Amy','Fowler','123','1234567'),(5,'Rajesh','Koothrappali','123','1234567'),(6,'Wil','Wheaton','123','1234567'),(7,'Bernadette','Rostenkowski-Wolowitz','123','1234567'),(8,'Penny','Hofstadter','123','12345678910');
/*!40000 ALTER TABLE `tblcust` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblorder`
--

DROP TABLE IF EXISTS `tblorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblorder` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `custID` int(11) NOT NULL,
  `orderNAME` varchar(255) NOT NULL,
  `orderQUANTITY` int(11) NOT NULL,
  `orderPRICE` double NOT NULL,
  PRIMARY KEY (`orderID`),
  KEY `custID` (`custID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblorder`
--

LOCK TABLES `tblorder` WRITE;
/*!40000 ALTER TABLE `tblorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpizza`
--

DROP TABLE IF EXISTS `tblpizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpizza` (
  `pizzaID` int(11) NOT NULL AUTO_INCREMENT,
  `pizzaNAME` varchar(30) DEFAULT NULL,
  `pizzaPRICE10` double DEFAULT NULL,
  `pizzaPRICE14` double DEFAULT NULL,
  `pizzaPRICE18` double DEFAULT NULL,
  PRIMARY KEY (`pizzaID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpizza`
--

LOCK TABLES `tblpizza` WRITE;
/*!40000 ALTER TABLE `tblpizza` DISABLE KEYS */;
INSERT INTO `tblpizza` VALUES (1,'CHEESE',175,285,440),(2,'NY CLASSIC',210,340,530),(3,'PEPP & MUSHRM',220,250,540),(4,'MANHATTAN',250,295,565),(5,'GARDEN SPECIAL',210,340,530),(6,'HAWAIIAN',210,340,530),(7,'NY FINEST',260,420,575),(8,'TRIBECA MUSHROOM',245,390,560),(9,'ANCHOVY LOVERS',275,450,595),(10,'#4 CHEESE',250,400,560),(11,'CORONA CHICKEN',250,400,575),(12,'GOURMET GARDEN',250,410,585),(13,'ROASTED GARLIC',240,405,505),(14,'FOUR SEASONS',275,430,590);
/*!40000 ALTER TABLE `tblpizza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltop`
--

DROP TABLE IF EXISTS `tbltop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltop` (
  `topID` int(11) NOT NULL AUTO_INCREMENT,
  `topNAME` varchar(30) DEFAULT NULL,
  `topPRICE10` double DEFAULT NULL,
  `topPRICE14` double DEFAULT NULL,
  `topPRICE18` double DEFAULT NULL,
  PRIMARY KEY (`topID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltop`
--

LOCK TABLES `tbltop` WRITE;
/*!40000 ALTER TABLE `tbltop` DISABLE KEYS */;
INSERT INTO `tbltop` VALUES (1,'CHEESE',35,45,60),(2,'BACON',35,45,60),(3,'GROUND BEEF',35,45,60),(4,'HAM',35,45,60),(5,'ITALIAN SAUSAGE',35,45,60),(6,'PEPPERONI',35,45,60),(7,'SALAMI',35,45,60),(8,'CAPERS',35,45,60),(9,'ROASTED GARLIC',35,45,60),(10,'BELL PEPPER',35,45,60),(11,'MUSHROOMS',35,45,60);
/*!40000 ALTER TABLE `tbltop` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-28 11:43:03
