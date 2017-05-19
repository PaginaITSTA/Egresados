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
  `id_carrera` int(2) NOT NULL,
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
  `iddatosAlumnos` int(11) NOT NULL AUTO_INCREMENT,
  `SE_noControl` varchar(8) DEFAULT NULL,
  `SE_carrera` int(2) DEFAULT NULL,
  `SE_nombre` varchar(50) DEFAULT NULL,
  `SE_direccion` varchar(60) DEFAULT NULL,
  `SE_telefono` varchar(12) DEFAULT NULL,
  `SE_telMovil` varchar(12) DEFAULT NULL,
  `SE_email` varchar(30) DEFAULT NULL,
  `SE_pEgreso` varchar(80) DEFAULT NULL,
  `SE_generacion` varchar(9) NOT NULL,
  `SE_estudia` varchar(2) DEFAULT NULL,
  `SE_estudioActual` varchar(50) DEFAULT NULL,
  `SE_empresaTrabajo` varchar(45) DEFAULT NULL,
  `SE_trabajoEspecialidad` varchar(2) DEFAULT NULL,
  `SE_sectorTrabajo` int(1) DEFAULT NULL,
  `SE_puestoTrabajo` varchar(30) DEFAULT NULL,
  `SE_tamanoEmpresa` int(1) DEFAULT NULL,
  PRIMARY KEY (`iddatosAlumnos`),
  KEY `SE_carrera_idx` (`SE_carrera`),
  KEY `SE_sectorTrabajo_idx` (`SE_sectorTrabajo`),
  KEY `SE_puestoTrabajo_idx` (`SE_puestoTrabajo`),
  KEY `SE_tamanoEmpresa_idx` (`SE_tamanoEmpresa`),
  CONSTRAINT `SE_carrera` FOREIGN KEY (`SE_carrera`) REFERENCES `carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `SE_puestoTrabajo` FOREIGN KEY (`SE_puestoTrabajo`) REFERENCES `puestoempresa` (`nom_puesto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `SE_sectorTrabajo` FOREIGN KEY (`SE_sectorTrabajo`) REFERENCES `sectorempresa` (`id_sector`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `SE_tamanoEmpresa` FOREIGN KEY (`SE_tamanoEmpresa`) REFERENCES `sizeorganitation` (`id_tamano`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosalumnos`
--

LOCK TABLES `datosalumnos` WRITE;
/*!40000 ALTER TABLE `datosalumnos` DISABLE KEYS */;
INSERT INTO `datosalumnos` VALUES (1,'133S0123',4,'Abraham García Santiago','call. independencia S/N colonia Ruiz cortinez','7891205678','2147483647','abraham@gmail.com','ingeniero en sistemas computacinales','2013-2018','no',NULL,'Appmed Servicios de Consultoría','si',2,'Operativo',2),(2,'124E0456',2,'Erasto Arteaga del Ángel','calle Bahía Blanca Monterrey Nuevo leon','7891205678','2147483647','erasto@gmail.com','Ingeniero electronico','2010-2014','no',NULL,'Samsung Electronics','si',1,'Operativo',2),(3,'133P0234',7,'Horacio Cruz feliciano','Cerro Azul','9394572538','2846473634','horacio@gmail.com','Ingeniero petrolero','2011-2015','no',NULL,'Pemex','si',2,'Directivo',3);
/*!40000 ALTER TABLE `datosalumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `datosencuesta`
--

DROP TABLE IF EXISTS `datosencuesta`;
/*!50001 DROP VIEW IF EXISTS `datosencuesta`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `datosencuesta` AS SELECT 
 1 AS `Nombre`,
 1 AS `Carrera`,
 1 AS `Generacion`,
 1 AS `EmpleoActual`,
 1 AS `GiroEmpresa`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `preguntasencuesta`
--

DROP TABLE IF EXISTS `preguntasencuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasencuesta` (
  `idpreguntasEncuesta` int(3) NOT NULL,
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
  `id_puesto` int(2) NOT NULL,
  `nom_puesto` varchar(30) NOT NULL,
  PRIMARY KEY (`nom_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puestoempresa`
--

LOCK TABLES `puestoempresa` WRITE;
/*!40000 ALTER TABLE `puestoempresa` DISABLE KEYS */;
INSERT INTO `puestoempresa` VALUES (5,'Directivo'),(1,'Operativo'),(7,'Otro'),(6,'Propietario'),(3,'Puesto administrativo'),(4,'Supervisor'),(2,'Técnico');
/*!40000 ALTER TABLE `puestoempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuestasencuestas`
--

DROP TABLE IF EXISTS `respuestasencuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestasencuestas` (
  `idRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `iddatosAlumnos` int(11) DEFAULT NULL,
  `resUno` int(1) DEFAULT NULL,
  `resDos` int(1) DEFAULT NULL,
  `resTres` int(1) DEFAULT NULL,
  `resCuatro` int(1) DEFAULT NULL,
  `resCinco` int(1) DEFAULT NULL,
  `resSeis` int(1) DEFAULT NULL,
  `resSiete` int(1) DEFAULT NULL,
  `resOcho` int(1) DEFAULT NULL,
  `resNueve` int(1) DEFAULT NULL,
  `resDiez` int(1) DEFAULT NULL,
  `resOnce` int(1) DEFAULT NULL,
  `resDoce` int(1) DEFAULT NULL,
  `resTrece` int(1) DEFAULT NULL,
  `resCatorce` int(1) DEFAULT NULL,
  PRIMARY KEY (`idRespuesta`),
  KEY `iddatosAlumnos_idx` (`iddatosAlumnos`),
  CONSTRAINT `iddatosAlumnos` FOREIGN KEY (`iddatosAlumnos`) REFERENCES `datosalumnos` (`iddatosAlumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuestasencuestas`
--

LOCK TABLES `respuestasencuestas` WRITE;
/*!40000 ALTER TABLE `respuestasencuestas` DISABLE KEYS */;
INSERT INTO `respuestasencuestas` VALUES (1,1,2,3,4,5,2,5,3,2,3,4,5,2,1,3),(2,2,1,1,2,2,3,4,5,2,3,4,1,5,3,4);
/*!40000 ALTER TABLE `respuestasencuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectorempresa`
--

DROP TABLE IF EXISTS `sectorempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectorempresa` (
  `id_sector` int(1) NOT NULL,
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
  `id_tamano` int(1) NOT NULL,
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
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `id_tipoUser` int(1) NOT NULL,
  `descTipo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_tipoUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` VALUES (1,'Alumno'),(2,'Encargado'),(3,'Administrador');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'abraham@gmail.com','01'),(2,'horacio@gmail.com','02'),(3,'erasto@gmail.com','03'),(4,'jesusOrtiz@gmail.com','04');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_tipoUser` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_tipoUser_idx` (`id_tipoUser`),
  KEY `id_user_idx` (`id_user`),
  CONSTRAINT `id_tipoUser` FOREIGN KEY (`id_tipoUser`) REFERENCES `tipousuario` (`id_tipoUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `datosencuesta`
--

/*!50001 DROP VIEW IF EXISTS `datosencuesta`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `datosencuesta` AS select `datosalumnos`.`SE_nombre` AS `Nombre`,`datosalumnos`.`SE_carrera` AS `Carrera`,`datosalumnos`.`SE_generacion` AS `Generacion`,`datosalumnos`.`SE_empresaTrabajo` AS `EmpleoActual`,`datosalumnos`.`SE_sectorTrabajo` AS `GiroEmpresa` from `datosalumnos` where (`datosalumnos`.`iddatosAlumnos` = 1) */;
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

-- Dump completed on 2017-05-18 19:05:49
