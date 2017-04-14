-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: seguimientoegresados
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

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
  `SE_email` varchar(45) DEFAULT NULL,
  `SE_pEgreso` varchar(45) DEFAULT NULL,
  `SE_generacion` varchar(5) NOT NULL,
  `SE_estudia` tinyint(1) DEFAULT NULL,
  `SE_estudioActual` varchar(50) DEFAULT NULL,
  `SE_empresaTrabajo` varchar(45) DEFAULT NULL,
  `SE_trabajoEspecialidad` tinyint(1) DEFAULT NULL,
  `SE_sectorTrabajo` int(1) DEFAULT NULL,
  `SE_puestoTrabajo` int(1) DEFAULT NULL,
  `SE_tamanoEmpresa` int(1) DEFAULT NULL,
  PRIMARY KEY (`SE_noControl`),
  KEY `SE_sectorTrabajo_idx` (`SE_sectorTrabajo`),
  KEY `SE_puestoTrabajo_idx` (`SE_puestoTrabajo`),
  KEY `SE_tamanoEmpresa_idx` (`SE_tamanoEmpresa`),
  KEY `SE_carrera_idx` (`SE_carrera`),
  CONSTRAINT `SE_carrera` FOREIGN KEY (`SE_carrera`) REFERENCES `carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `SE_puestoTrabajo` FOREIGN KEY (`SE_puestoTrabajo`) REFERENCES `puestoempresa` (`id_puesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SE_sectorTrabajo` FOREIGN KEY (`SE_sectorTrabajo`) REFERENCES `sectorempresa` (`id_sector`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SE_tamanoEmpresa` FOREIGN KEY (`SE_tamanoEmpresa`) REFERENCES `tamañoempresa` (`id_tamano`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosalumnos`
--

LOCK TABLES `datosalumnos` WRITE;
/*!40000 ALTER TABLE `datosalumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosalumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loging`
--

DROP TABLE IF EXISTS `loging`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loging` (
  `id_login` int(11) NOT NULL,
  `nomUsuario` varchar(20) NOT NULL,
  `tipoUsuario` varchar(20) NOT NULL,
  `passwordUsuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loging`
--

LOCK TABLES `loging` WRITE;
/*!40000 ALTER TABLE `loging` DISABLE KEYS */;
INSERT INTO `loging` VALUES (0,'','','1'),(1,'Aracely','Alumno','1'),(2,'Clair','Encragado','1'),(3,'Erick','Administrador','1');
/*!40000 ALTER TABLE `loging` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_conocimiento`
--

DROP TABLE IF EXISTS `pr_conocimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_conocimiento` (
  `idpr_conocimiento` int(11) NOT NULL,
  `pregunta_conocimiento` varchar(80) NOT NULL,
  PRIMARY KEY (`idpr_conocimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_conocimiento`
--

LOCK TABLES `pr_conocimiento` WRITE;
/*!40000 ALTER TABLE `pr_conocimiento` DISABLE KEYS */;
INSERT INTO `pr_conocimiento` VALUES (1,'¿Cómo consideras que es el nivel de conocimientos y dominio de los temas mostrad'),(2,'¿Cómo consideras la experiencia práctica adquirida por parte suya, derivado de l'),(3,'¿Consideras que el nivel de conocimientos que tiene son suficientes para el dese'),(4,'¿Consideras que con los conocimientos adquiridos en el ITSTA, te han permitido c'),(5,'En base a lo anterior, ¿Cómo calificas la aplicación de los conocimientos que ad');
/*!40000 ALTER TABLE `pr_conocimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_equipamiento`
--

DROP TABLE IF EXISTS `pr_equipamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_equipamiento` (
  `idPr_equipamiento` int(11) NOT NULL,
  `Pregunta_equipamiento` varchar(80) NOT NULL,
  PRIMARY KEY (`idPr_equipamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_equipamiento`
--

LOCK TABLES `pr_equipamiento` WRITE;
/*!40000 ALTER TABLE `pr_equipamiento` DISABLE KEYS */;
INSERT INTO `pr_equipamiento` VALUES (1,'¿El equipamiento de los laboratorios y talleres te parecieron?'),(2,'¿Los servicios prestados (servicio médico, curso de inducción)?'),(3,'¿Sabes que en el ITSTA tenemos un proyecto de bolsa de trabajo y cuál es la opin'),(4,'En base a esto: ¿Como calificas los servicios básicos que el ITSTA ofrece?');
/*!40000 ALTER TABLE `pr_equipamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_servicios`
--

DROP TABLE IF EXISTS `pr_servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_servicios` (
  `idpr_servicios` int(11) NOT NULL,
  `pregunta_servicios` varchar(80) NOT NULL,
  PRIMARY KEY (`idpr_servicios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_servicios`
--

LOCK TABLES `pr_servicios` WRITE;
/*!40000 ALTER TABLE `pr_servicios` DISABLE KEYS */;
INSERT INTO `pr_servicios` VALUES (1,'¿Qué es lo que no viste en tu carrera y que consideras que le hizo falta o te ha'),(2,'¿Qué es lo que si viste en tu carrera y que no te sirve ahora que estas trabajan'),(3,'Consideras que la enseñanza adicional que el ITSTA ofrece (talleres, congresos, '),(4,'¿Como calificas el servicio y atención que resiviste el personal del ITSTA duran'),(5,'En base a lo anterior, ¿Cuál sería tu propuesta para mejorar en este sentido?');
/*!40000 ALTER TABLE `pr_servicios` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `puestoempresa`
--

LOCK TABLES `puestoempresa` WRITE;
/*!40000 ALTER TABLE `puestoempresa` DISABLE KEYS */;
INSERT INTO `puestoempresa` VALUES (1,'Operativo'),(2,'Tecnico'),(3,'Puesto administrativo'),(4,'Supervisor'),(5,'Directivo'),(6,'Propietario'),(7,'Otro');
/*!40000 ALTER TABLE `puestoempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuestas_encuesta`
--

DROP TABLE IF EXISTS `respuestas_encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestas_encuesta` (
  `idRe_equipamiento` int(11) NOT NULL,
  `Respuesta_equipamiento` int(1) NOT NULL,
  PRIMARY KEY (`idRe_equipamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuestas_encuesta`
--

LOCK TABLES `respuestas_encuesta` WRITE;
/*!40000 ALTER TABLE `respuestas_encuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestas_encuesta` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `sectorempresa`
--

LOCK TABLES `sectorempresa` WRITE;
/*!40000 ALTER TABLE `sectorempresa` DISABLE KEYS */;
INSERT INTO `sectorempresa` VALUES (1,'Publico'),(2,'Privado');
/*!40000 ALTER TABLE `sectorempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tamañoempresa`
--

DROP TABLE IF EXISTS `tamañoempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tamañoempresa` (
  `id_tamano` int(11) NOT NULL,
  `nom_tamano` varchar(10) NOT NULL,
  PRIMARY KEY (`id_tamano`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tamañoempresa`
--

LOCK TABLES `tamañoempresa` WRITE;
/*!40000 ALTER TABLE `tamañoempresa` DISABLE KEYS */;
INSERT INTO `tamañoempresa` VALUES (1,'Micro'),(2,'Pequeña'),(3,'Mediana'),(4,'Grande');
/*!40000 ALTER TABLE `tamañoempresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-13 19:19:16
