-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: seguimientoegresados
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nom_carrera` varchar(15) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datosalumnos`
--

DROP TABLE IF EXISTS `datosalumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datosalumnos` (
  `SE_noControl` varchar(8) NOT NULL,
  `SE_carrera` int(1) NOT NULL,
  `SE_nombre` varchar(50) NOT NULL,
  `SE_direccion` varchar(45) DEFAULT NULL,
  `SE_telefono` int(12) DEFAULT NULL,
  `SE_telMovil` int(12) DEFAULT NULL,
  `SE_email` varchar(30) DEFAULT NULL,
  `SE_pEgreso` varchar(30) DEFAULT NULL,
  `SE_generacion` varchar(9) NOT NULL,
  `SE_estudia` varchar(2) DEFAULT NULL,
  `SE_estudioActual` varchar(50) DEFAULT NULL,
  `SE_empresaTrabajo` varchar(45) DEFAULT NULL,
  `SE_trabajoEspecialidad` varchar(2) DEFAULT NULL,
  `SE_sectorTrabajo` int(1) DEFAULT NULL,
  `SE_puestoTrabajo` varchar(40) DEFAULT NULL,
  `SE_tamanoEmpresa` int(1) DEFAULT NULL,
  PRIMARY KEY (`SE_noControl`),
  KEY `SE_sectorTrabajo_idx` (`SE_sectorTrabajo`),
  KEY `SE_tamanoEmpresa_idx` (`SE_tamanoEmpresa`),
  KEY `SE_carrera_idx` (`SE_carrera`),
  CONSTRAINT `SE_carrera` FOREIGN KEY (`SE_carrera`) REFERENCES `carrera` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SE_sectorTrabajo` FOREIGN KEY (`SE_sectorTrabajo`) REFERENCES `sectorempresa` (`id_sector`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SE_tamanoEmpresa` FOREIGN KEY (`SE_tamanoEmpresa`) REFERENCES `sizeorganitation` (`id_tamano`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datosencuestaegresados`
--

DROP TABLE IF EXISTS `datosencuestaegresados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datosencuestaegresados` (
  `iddatosencuestaEgresados` int(6) NOT NULL,
  `SE_nombre` varchar(50) DEFAULT NULL,
  `SE_carrera` int(11) DEFAULT NULL,
  `SE_generacion` varchar(9) DEFAULT NULL,
  `SE_empresaTrabajo` varchar(45) DEFAULT NULL,
  `SE_sectorTrabajo` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddatosencuestaEgresados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nomUsuario` varchar(20) NOT NULL,
  `tipoUsuario` varchar(20) NOT NULL,
  `passwordUsuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `preguntasencuesta`
--

DROP TABLE IF EXISTS `preguntasencuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasencuesta` (
  `idpreguntasEncuesta` int(2) NOT NULL,
  `pregunta` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idpreguntasEncuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `puestoempresa`
--

DROP TABLE IF EXISTS `puestoempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puestoempresa` (
  `id_puesto` int(11) NOT NULL,
  `nom_puesto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `respuestasencuesta`
--

DROP TABLE IF EXISTS `respuestasencuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestasencuesta` (
  `idRespuestas` int(2) NOT NULL,
  `respuesta` int(1) NOT NULL,
  `iddatosencuestaEgresados` int(6) DEFAULT NULL,
  `idpreguntasEncuesta` int(2) DEFAULT NULL,
  PRIMARY KEY (`idRespuestas`),
  KEY `idencuestaEgresados_idx` (`iddatosencuestaEgresados`),
  KEY `idpreguntasEncuesta_idx` (`idpreguntasEncuesta`),
  CONSTRAINT `iddatosencuestaEgresados` FOREIGN KEY (`iddatosencuestaEgresados`) REFERENCES `datosencuestaegresados` (`iddatosencuestaEgresados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idpreguntasEncuesta` FOREIGN KEY (`idpreguntasEncuesta`) REFERENCES `preguntasencuesta` (`idpreguntasEncuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sectorempresa`
--

DROP TABLE IF EXISTS `sectorempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectorempresa` (
  `id_sector` int(11) NOT NULL,
  `nom_sector` varchar(8) NOT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sizeorganitation`
--

DROP TABLE IF EXISTS `sizeorganitation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sizeorganitation` (
  `id_tamano` int(11) NOT NULL,
  `nom_tamano` varchar(10) NOT NULL,
  PRIMARY KEY (`id_tamano`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-03 19:09:46
