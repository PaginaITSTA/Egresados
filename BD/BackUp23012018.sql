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
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Agronomía'),(2,'Electrónica '),(3,'Industrial'),(4,'Sistemas'),(5,'Gestión '),(6,'Contabilidad'),(7,'Petrolera'),(8,'Mecatrónica'),(9,'Ambiental');
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
  `SE_telefono` varchar(12) DEFAULT NULL,
  `SE_telMovil` varchar(12) DEFAULT NULL,
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
  `SE_pass` varchar(10) NOT NULL,
  `SE_sexo` varchar(9) DEFAULT NULL,
  `SE_tipoUsuario` varchar(13) NOT NULL,
  PRIMARY KEY (`SE_noControl`),
  UNIQUE KEY `SE_noControl_UNIQUE` (`SE_noControl`),
  KEY `SE_sectorTrabajo_idx` (`SE_sectorTrabajo`),
  KEY `SE_tamanoEmpresa_idx` (`SE_tamanoEmpresa`),
  KEY `SE_carrera_idx` (`SE_carrera`),
  CONSTRAINT `SE_carrera` FOREIGN KEY (`SE_carrera`) REFERENCES `carrera` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SE_sectorTrabajo` FOREIGN KEY (`SE_sectorTrabajo`) REFERENCES `sectorempresa` (`id_sector`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SE_tamanoEmpresa` FOREIGN KEY (`SE_tamanoEmpresa`) REFERENCES `sizeorganitation` (`id_tamano`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosalumnos`
--

LOCK TABLES `datosalumnos` WRITE;
/*!40000 ALTER TABLE `datosalumnos` DISABLE KEYS */;
INSERT INTO `datosalumnos` VALUES ('133s0219',4,'Erick Clair del Ángel del Ángel','Colonia','789-893-4702','789-100-5239','iscEClair@gmail.com','Ingeniero en SIstemas','2013-2017','No',NULL,'Softtech','Si',1,'Administrador',1,'12345678','Masculino','Encargado'),('133s0220',4,'Aracely Santiago Fernanández','Colonia','111-111-1111','111-111-1111','aracely@gmail.com','Ingemiero en Sistemas','2013-2017','No',NULL,'UNAM','No',2,'Administrador',2,'12345678','Femenino','Alumno'),('133s0221',3,'Abraham García Santíago','Colonia','',NULL,'abraham@gmail.com','Ingeniero en Sistemas','2013-2017','No',NULL,'Totaltek','No',1,'Administrador',3,'12345678','Masculino','Egresado');
/*!40000 ALTER TABLE `datosalumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datosencuesta`
--

DROP TABLE IF EXISTS `datosencuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datosencuesta` (
  `iddatosEncuesta` int(11) NOT NULL AUTO_INCREMENT,
  `pre1` int(1) NOT NULL,
  `pre2` int(1) NOT NULL,
  `pre3` int(1) NOT NULL,
  `pre4` int(1) NOT NULL,
  `pre5` int(1) NOT NULL,
  `pre6` int(1) NOT NULL,
  `pre7` int(1) NOT NULL,
  `pre8` int(1) NOT NULL,
  `pre9` int(1) NOT NULL,
  `pre10` int(1) NOT NULL,
  `pre11` int(1) NOT NULL,
  `pre12` int(1) NOT NULL,
  `pre13` int(1) NOT NULL,
  `pre14` int(1) NOT NULL,
  `SE_noControl` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`iddatosEncuesta`),
  UNIQUE KEY `SE_noControl_UNIQUE` (`SE_noControl`),
  CONSTRAINT `SE_noControl` FOREIGN KEY (`SE_noControl`) REFERENCES `datosalumnos` (`SE_noControl`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosencuesta`
--

LOCK TABLES `datosencuesta` WRITE;
/*!40000 ALTER TABLE `datosencuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosencuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `login`
--

DROP TABLE IF EXISTS `login`;
/*!50001 DROP VIEW IF EXISTS `login`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `login` AS SELECT 
 1 AS `user`,
 1 AS `nombre`,
 1 AS `mail`,
 1 AS `control`,
 1 AS `pass`*/;
SET character_set_client = @saved_cs_client;

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
INSERT INTO `preguntasencuesta` VALUES (1,'¿El equipamiento de los laboratorios y talleres te parecieron?'),(2,'¿Los servicios prestados (servicio médico, curso de inducción)?'),(3,'¿Sabes que en el ITSTA tenemos un proyecto de bolsa de trabajo y cuál es la opinión acerca del servicio que ofrece?'),(4,'En base a esto: ¿Cómo calificas los servicios básicos que el ITSTA ofrece?'),(5,'¿Cómo consideras que es el nivel de conocimientos y dominio de los temas mostrados por sus profesores al momento de impartirles la cátedra así como el dominio en el dominio en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las prácticas que su carrera requiere?'),(6,'¿Cómo consideras la experiencia práctica adquirida por parte suya, derivado de las visitas y prácticas en las empresas?'),(7,'¿Consideras que el nivel de conocimientos que tiene son suficientes para el desempeño de su trabajo?'),(8,'¿Consideras que con los conocimientos adquiridos en el ITSTA, te han permitido competir con otros egresados a nivel Licenciatura?'),(9,'En base a lo anterior, ¿Cómo calificas la aplicación de los conocimientos que adquiriste en el ITSTA, en relación con tus actividades laborales?'),(10,'¿Qué es lo que no viste en tu carrera y que consideras que le hizo falta o te hace ahora que estás trabajando?'),(11,'¿Qué es lo que si viste en tu carrera y que no te sirve ahora que estás trabajando?'),(12,'Consideras que la enseñanza adicional que el ITSTA ofrece (talleres, congresos, diplomados, certificaciones, entre otros), ¿es fundamental en el desempeño de sus actividades ahora que trabajas?'),(13,'¿Cómo calificas el servicio y atención que recibiste el personal del ITSTA durante tu formación?'),(14,'En base a lo anterior, ¿Cuál sería tu propuesta para mejorar en este sentido?');
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
  PRIMARY KEY (`idRespuestas`)
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

--
-- Dumping data for table `sizeorganitation`
--

LOCK TABLES `sizeorganitation` WRITE;
/*!40000 ALTER TABLE `sizeorganitation` DISABLE KEYS */;
INSERT INTO `sizeorganitation` VALUES (1,'Micro'),(2,'Pequeña'),(3,'Mediana'),(4,'Grande');
/*!40000 ALTER TABLE `sizeorganitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporal`
--

DROP TABLE IF EXISTS `temporal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temporal` (
  `IdTemporal` int(3) NOT NULL AUTO_INCREMENT,
  `T_noControl` varchar(8) NOT NULL,
  `T_Nombre` varchar(50) NOT NULL,
  `T_pass` varchar(10) NOT NULL,
  `T_telefono` varchar(12) DEFAULT NULL,
  `T_celular` varchar(12) DEFAULT NULL,
  `T_correo` varchar(30) NOT NULL,
  `T_sexo` varchar(9) NOT NULL,
  `T_tipoAlumno` varchar(13) NOT NULL,
  PRIMARY KEY (`IdTemporal`),
  UNIQUE KEY `T_noControl_UNIQUE` (`T_noControl`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporal`
--

LOCK TABLES `temporal` WRITE;
/*!40000 ALTER TABLE `temporal` DISABLE KEYS */;
INSERT INTO `temporal` VALUES (15,'133s0123','alguien@gmail.com','123','111-111-1111','111-111-1111','alguien@gmail.com','Masculino','Alumno'),(19,'133S0220','Erick Clair','123','111-111-1111','111-111-1111','alguien@gmail.com','Masculino','Alumno'),(22,'133s0221','Alexis Elizalde Mendoza','12345678','111-111-1111','111-111-1111','alexis@gmail.com','Masculino','Egresado'),(26,'133S0222','test de prueba','12345678','','','alguien@gmail.com','Masculino','Alumno'),(28,'133S0225','Agustin Ruiz Flores','123','','','agustin@gmail.com','Masculino','Alumno'),(29,'133s0219','Erick Clair del Ángel','123','789-100-5239','789-100-5239','isceclair@gmail.com','Masculino','Alumno');
/*!40000 ALTER TABLE `temporal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `ver_alumnos`
--

DROP TABLE IF EXISTS `ver_alumnos`;
/*!50001 DROP VIEW IF EXISTS `ver_alumnos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `ver_alumnos` AS SELECT 
 1 AS `control`,
 1 AS `nombre`,
 1 AS `carrera`,
 1 AS `mail`,
 1 AS `telefono`,
 1 AS `movil`,
 1 AS `egreso`,
 1 AS `sexo`,
 1 AS `usuario`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'seguimientoegresados'
--

--
-- Dumping routines for database 'seguimientoegresados'
--

--
-- Final view structure for view `login`
--

/*!50001 DROP VIEW IF EXISTS `login`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login` AS select `datosalumnos`.`SE_tipoUsuario` AS `user`,`datosalumnos`.`SE_nombre` AS `nombre`,`datosalumnos`.`SE_email` AS `mail`,`datosalumnos`.`SE_noControl` AS `control`,`datosalumnos`.`SE_pass` AS `pass` from `datosalumnos` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `ver_alumnos`
--

/*!50001 DROP VIEW IF EXISTS `ver_alumnos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `ver_alumnos` AS select `datosalumnos`.`SE_noControl` AS `control`,`datosalumnos`.`SE_nombre` AS `nombre`,`carrera`.`nom_carrera` AS `carrera`,`datosalumnos`.`SE_email` AS `mail`,`datosalumnos`.`SE_telefono` AS `telefono`,`datosalumnos`.`SE_telMovil` AS `movil`,`datosalumnos`.`SE_pEgreso` AS `egreso`,`datosalumnos`.`SE_sexo` AS `sexo`,`datosalumnos`.`SE_tipoUsuario` AS `usuario` from (`datosalumnos` join `carrera` on((`datosalumnos`.`SE_carrera` = `carrera`.`id_carrera`))) where (`datosalumnos`.`SE_tipoUsuario` = 'Alumno') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-23 14:35:09
