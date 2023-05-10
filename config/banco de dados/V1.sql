  -- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: agendaJmf2023
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contatoA`
--

DROP TABLE IF EXISTS `contatoA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contatoA` (
  `idcontatoA` int NOT NULL AUTO_INCREMENT,
  `fotocontatoA` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomecontatoA` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonecontatoA` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emaicontatoA` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idcontatoA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatoA`
--

LOCK TABLES `contatoA` WRITE;
/*!40000 ALTER TABLE `contatoA` DISABLE KEYS */;
/*!40000 ALTER TABLE `contatoA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventoA`
--

DROP TABLE IF EXISTS `eventoA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventoA` (
  `ideventoA` int NOT NULL AUTO_INCREMENT,
  `fotoeventoA` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tituloeventoA` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataieventoA` date DEFAULT NULL,
  `datafeventoA` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ideventoA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventoA`
--

LOCK TABLES `eventoA` WRITE;
/*!40000 ALTER TABLE `eventoA` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventoA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfilA`
--

DROP TABLE IF EXISTS `perfilA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfilA` (
  `perfilA` int NOT NULL AUTO_INCREMENT,
  `fotoperfilA` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomeperfilA` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailperfilA` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senhaperfilA` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`perfilA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfilA`
--

LOCK TABLES `perfilA` WRITE;
/*!40000 ALTER TABLE `perfilA` DISABLE KEYS */;
INSERT INTO `perfilA` VALUES (1,'','matheus','matheus@host.com','mpsilva123'),(2,NULL,'ze','ze@gmail.com','123');
/*!40000 ALTER TABLE `perfilA` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-18  8:07:09
