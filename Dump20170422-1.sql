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
INSERT INTO `carrera` VALUES (1,'Agronomía'),(2,'Electrónica '),(3,'Industrial'),(4,'Sistemas'),(5,'Gestión '),(6,'Contabilidad'),(7,'Petrolera'),(8,'Mecatrónica');
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
  CONSTRAINT `SE_tamanoEmpresa` FOREIGN KEY (`SE_tamanoEmpresa`) REFERENCES `tamañoempresa` (`id_tamano`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosalumnos`
--

LOCK TABLES `datosalumnos` WRITE;
/*!40000 ALTER TABLE `datosalumnos` DISABLE KEYS */;
INSERT INTO `datosalumnos` VALUES ('124E0456',2,'Erasto Arteaga del Ángel','calle Bahía Blanca Monterrey Nuevo leon',2147483647,2147483647,'erasto@gmail.com','Ingeniero electronico','2010-2014','no',NULL,'Samsung Electronics','si',2,'2',4),('133G0654',5,'Flor Nayeli Cruz de la Cruz','col. El Abra Tantoyuca Veracruz',2147483647,2147483647,'Flor@gmail.com','Gestor empresarial','2013-2017','si','escuela politecnica','Dif','si',1,'5',3),('133M0876',8,'Abraham García Santiago','Ciudad Victoria',2147483647,2147483647,'Abraham@gmail.com','ingeniero mecatronico','2015-2019','no',NULL,'SMP AUTOMOTIVE SYSTEMS MEXICO, S.A. DE C.V.','no',2,'2',3),('133P0234',7,'Horacio Cruz feliciano','Cerro Azul',2147483647,2147483647,'horacio@gmail.com','Iingeniero petrolero','2011-2015','no',NULL,'Pemex','si',1,'1',4),('133S0245',4,'Rodrigo Alejandro Reyes Hernandez','Tampico tamaulipas',2147483647,2147483647,'rodrigo@gmai.com','ingenero en sistemas computaci','2013-2017','si','ITSTA','IngenetGroup','si',2,'4',2),('133S0267',6,'Ceidy Alonso Baltazar','Ciudad de Mexico',2147483647,2147483647,'ceidy@gmail.com','Contador público','2004-2008','no',NULL,'Banorte','si',2,'1',3);
/*!40000 ALTER TABLE `datosalumnos` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `datosencuestaegresados`
--

LOCK TABLES `datosencuestaegresados` WRITE;
/*!40000 ALTER TABLE `datosencuestaegresados` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosencuestaegresados` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'Aracely','Alumno','1'),(2,'Clair','Encargado','1'),(3,'Erick','Administrador','1');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `preguntasencuesta`
--

LOCK TABLES `preguntasencuesta` WRITE;
/*!40000 ALTER TABLE `preguntasencuesta` DISABLE KEYS */;
INSERT INTO `preguntasencuesta` VALUES (1,'¿El equipamiento de los laboratorios y talleres te ¿El equipamiento de los laboratorios y talleres te parecieron?'),(2,'¿Los servicios prestados (servicio médico, curso de inducción)?'),(3,'¿Sabes que en el ITSTA tenemos un proyecto de bolsa de trabajo y cuál es la opinión acerca del servicio que ofrece?'),(4,'En base a esto: ¿Cómo calificas los servicios básicos que el ITSTA ofrece?'),(5,'¿Cómo consideras que es el nivel de conocimientos y dominio de los temas mostrados por sus profesores al momento de impartirles la cátedra así como el dominio en el dominio en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las prácticas que su carrera requiere?'),(6,'¿Cómo consideras la experiencia práctica adquirida por parte suya, derivado de las visitas y prácticas en las empresas?'),(7,'¿Consideras que el nivel de conocimientos que tiene son suficientes para el desempeño de su trabajo?'),(8,'¿Consideras que con los conocimientos adquiridos en el ITSTA, te han permitido competir con otros egresados a nivel Licenciatura?'),(9,'En base a lo anterior, ¿Cómo calificas la aplicación de los conocimientos que adquiriste en el ITSTA, en relación con tus actividades laborales?'),(10,'¿Qué es lo que no viste en tu carrera y que consideras que le hizo falta o te hace ahora que estás trabajando?'),(11,'¿Qué es lo que si viste en tu carrera y que no te sirve ahora que estás trabajando?'),(12,'Consideras que la enseñanza adicional que el ITSTA ofrece (talleres, congresos, diplomados, certificaciones, entre otros), ¿es fundamental en el desempeño de sus actividades ahora que trabajas?'),(13,'¿Cómo calificas el servicio y atención que recibiste el personal del ITSTA durante tu formación?'),(14,'En base a lo anterior, ¿Cuál sería tu propuesta para mejorar en este sentido?');
/*!40000 ALTER TABLE `preguntasencuesta` ENABLE KEYS */;
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
INSERT INTO `puestoempresa` VALUES (1,'Operativo'),(2,'Técnico'),(3,'Puesto administrativo'),(4,'Supervisor'),(5,'Directivo'),(6,'Propietario'),(7,'Otro');
/*!40000 ALTER TABLE `puestoempresa` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `respuestasencuesta`
--

LOCK TABLES `respuestasencuesta` WRITE;
/*!40000 ALTER TABLE `respuestasencuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestasencuesta` ENABLE KEYS */;
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
INSERT INTO `sectorempresa` VALUES (1,'Público'),(2,'Privado');
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

-- Dump completed on 2017-04-22 20:31:59
