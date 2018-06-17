CREATE DATABASE  IF NOT EXISTS `hackathon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hackathon`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: hackathon
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `fazenda`
--

DROP TABLE IF EXISTS `fazenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fazenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fazenda`
--

LOCK TABLES `fazenda` WRITE;
/*!40000 ALTER TABLE `fazenda` DISABLE KEYS */;
INSERT INTO `fazenda` VALUES (1,'Canaã'),(2,'bom jesus'),(3,'alvorada'),(4,'raio de sol'),(5,'lua cheia'),(6,'campo feliz'),(7,'caminho do ceu');
/*!40000 ALTER TABLE `fazenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idade`
--

DROP TABLE IF EXISTS `idade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `idade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faixa_etaria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idade`
--

LOCK TABLES `idade` WRITE;
/*!40000 ALTER TABLE `idade` DISABLE KEYS */;
INSERT INTO `idade` VALUES (1,'0-8'),(2,'9-12'),(3,'13-16'),(4,'16-24'),(5,'24-36'),(6,'36+');
/*!40000 ALTER TABLE `idade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotacao`
--

DROP TABLE IF EXISTS `lotacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_` date NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_rebanho` int(11) NOT NULL,
  `id_idade` int(11) NOT NULL,
  `id_pasto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rebanho` (`id_rebanho`),
  KEY `id_idade` (`id_idade`),
  KEY `id_pasto` (`id_pasto`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotacao`
--

LOCK TABLES `lotacao` WRITE;
/*!40000 ALTER TABLE `lotacao` DISABLE KEYS */;
INSERT INTO `lotacao` VALUES (1,'2017-05-22',80,1,3,2),(2,'2017-06-30',90,2,4,6),(3,'2018-02-01',50,6,2,4),(4,'2017-05-14',8,3,3,7);
/*!40000 ALTER TABLE `lotacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasto`
--

DROP TABLE IF EXISTS `pasto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_pasto` int(11) NOT NULL,
  `tamanho` int(11) NOT NULL,
  `id_retiro` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_retiro` (`id_retiro`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasto`
--

LOCK TABLES `pasto` WRITE;
/*!40000 ALTER TABLE `pasto` DISABLE KEYS */;
INSERT INTO `pasto` VALUES (1,7,0,1),(2,18,0,1),(3,4,0,1),(4,2,0,4),(5,9,0,1),(6,13,0,4),(7,13,0,4),(8,25,0,5),(9,14,0,5),(10,36,0,5),(11,36,0,5),(12,47,0,3),(13,45,0,1),(14,5,0,1),(15,78,0,1),(16,47,0,7),(17,99,0,7),(18,78,0,5),(19,14,0,8),(20,771,0,8);
/*!40000 ALTER TABLE `pasto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rebanho`
--

DROP TABLE IF EXISTS `rebanho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rebanho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rebanho`
--

LOCK TABLES `rebanho` WRITE;
/*!40000 ALTER TABLE `rebanho` DISABLE KEYS */;
INSERT INTO `rebanho` VALUES (1,'nelore'),(2,'touro reprodutor'),(3,'vaca leiteira');
/*!40000 ALTER TABLE `rebanho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retiro`
--

DROP TABLE IF EXISTS `retiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `id_fazenda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fazenda` (`id_fazenda`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retiro`
--

LOCK TABLES `retiro` WRITE;
/*!40000 ALTER TABLE `retiro` DISABLE KEYS */;
INSERT INTO `retiro` VALUES (1,'Retiro lagoa azul',1),(3,'Retiro branco',5),(4,'Retiro caspian',1),(5,'OutroRetiro',1),(6,'Retiro kkk',2),(7,'retiro alma',3),(8,'Retiro cabana',3);
/*!40000 ALTER TABLE `retiro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 10:53:30