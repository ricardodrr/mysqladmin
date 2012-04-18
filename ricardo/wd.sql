-- MySQL dump 10.13  Distrib 5.1.44, for apple-darwin8.11.1 (i386)
--
-- Host: localhost    Database: REGPER
-- ------------------------------------------------------
-- Server version	5.1.44

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
-- Table structure for table `TipoVivienda`
--

DROP TABLE IF EXISTS `TipoVivienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TipoVivienda` (
  `idVivienda` decimal(1,0) NOT NULL,
  `TipoVivienda` varchar(20) NOT NULL,
  PRIMARY KEY (`idVivienda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TipoVivienda`
--

LOCK TABLES `TipoVivienda` WRITE;
/*!40000 ALTER TABLE `TipoVivienda` DISABLE KEYS */;
INSERT INTO `TipoVivienda` VALUES ('1','Casa'),('2','Departamento'),('3','Departamento UH'),('4','Departamento Lujo');
/*!40000 ALTER TABLE `TipoVivienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delegacion`
--

DROP TABLE IF EXISTS `delegacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delegacion` (
  `idDelegacion` decimal(2,0) NOT NULL,
  `Delegacion` varchar(20) NOT NULL,
  PRIMARY KEY (`idDelegacion`),
  UNIQUE KEY `uqDelegacionNomDelegacion` (`Delegacion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delegacion`
--

LOCK TABLES `delegacion` WRITE;
/*!40000 ALTER TABLE `delegacion` DISABLE KEYS */;
INSERT INTO `delegacion` VALUES ('1','Alvaro Obregón'),('2','Azcapotzalco'),('3','Benito Juárez'),('4','Coyoacan'),('5','Cuajimalpa'),('6','Cuahémoc'),('7','Gustavo A. Madero'),('8','Iztacalco'),('9','Iztapalapa'),('10','Magdalena Contreras'),('11','Miguel Hidalgo'),('12','Milpa Alta'),('13','Tláhuac'),('14','Tlalpan'),('15','Venustiano Carranza'),('16','Xochimilco');
/*!40000 ALTER TABLE `delegacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `idPersona` int(2) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(10) NOT NULL,
  `ApellidoPaterno` varchar(10) NOT NULL,
  `ApellidoMaterno` varchar(10) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `FechaNaciemiento` date NOT NULL,
  `idDelegacion` decimal(2,0) NOT NULL,
  `idVivienda` decimal(1,0) DEFAULT NULL,
  PRIMARY KEY (`idPersona`),
  UNIQUE KEY `uqPerosonaNomApellPatApellMat` (`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (5,'Ricardo','Lham','Aguilar','M','55442310','1980-06-10','1','1'),(6,'Elvis','Ruiz','Ruiz','M','57402745','2001-06-10','2','4'),(7,'Esmeralda','Inn','leal','F','55147833','1990-04-03','7','2'),(8,'John ','Lennon,','Winston','M','999999999','1940-10-09','16','4'),(9,'Sir Paul','McCartney','James','M','0184739382','1942-10-09','10','4'),(10,'Hilary','Duff','Erhard','F','0190039582','1987-09-28','7','2'),(11,'Yasmin','Reyes','Alcantar','F','5703837437','1985-05-20','4','1'),(15,'Elvis','TRON','TRON','M','57538700','2001-01-10','7','4');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-15 20:13:38
