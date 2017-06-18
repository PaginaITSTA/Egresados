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
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Agronomía'),(2,'Electrónica '),(3,'Industrial'),(4,'Sistemas'),(5,'Gestión '),(6,'Contabilidad'),(7,'Petrolera'),(8,'Mecatrónica'),(9,'Ambiental');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `datosalumnos`
--

LOCK TABLES `datosalumnos` WRITE;
/*!40000 ALTER TABLE `datosalumnos` DISABLE KEYS */;
INSERT INTO `datosalumnos` VALUES ('133s0219',4,'Erick Clair del Ángel del Ángel','Colonia','789-893-4702','789-100-5239','iscEClair@gmail.com','Ingeniero en SIstemas','2013-2017','No',NULL,'Softtech','Si',1,'Administrador',1,'12345678','Masculino','Encargado'),('133s0220',4,'Aracely Santiago Fernanández','Colonia','111-111-1111','111-111-1111','aracely@gmail.com','Ingemiero en Sistemas','2013-2017','No',NULL,'UNAM','No',2,'Administrador',2,'12345678','Femenino','Alumno'),('133s0221',3,'Abraham García Santíago','Colonia','',NULL,'abraham@gmail.com','Ingeniero en Sistemas','2013-2017','No',NULL,'Totaltek','No',1,'Administrador',3,'12345678','Masculino','Egresado');
/*!40000 ALTER TABLE `datosalumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `datosencuesta`
--

LOCK TABLES `datosencuesta` WRITE;
/*!40000 ALTER TABLE `datosencuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosencuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `preguntasencuesta`
--

LOCK TABLES `preguntasencuesta` WRITE;
/*!40000 ALTER TABLE `preguntasencuesta` DISABLE KEYS */;
INSERT INTO `preguntasencuesta` VALUES (1,'¿El equipamiento de los laboratorios y talleres te parecieron?'),(2,'¿Los servicios prestados (servicio médico, curso de inducción)?'),(3,'¿Sabes que en el ITSTA tenemos un proyecto de bolsa de trabajo y cuál es la opinión acerca del servicio que ofrece?'),(4,'En base a esto: ¿Cómo calificas los servicios básicos que el ITSTA ofrece?'),(5,'¿Cómo consideras que es el nivel de conocimientos y dominio de los temas mostrados por sus profesores al momento de impartirles la cátedra así como el dominio en el dominio en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las prácticas que su carrera requiere?'),(6,'¿Cómo consideras la experiencia práctica adquirida por parte suya, derivado de las visitas y prácticas en las empresas?'),(7,'¿Consideras que el nivel de conocimientos que tiene son suficientes para el desempeño de su trabajo?'),(8,'¿Consideras que con los conocimientos adquiridos en el ITSTA, te han permitido competir con otros egresados a nivel Licenciatura?'),(9,'En base a lo anterior, ¿Cómo calificas la aplicación de los conocimientos que adquiriste en el ITSTA, en relación con tus actividades laborales?'),(10,'¿Qué es lo que no viste en tu carrera y que consideras que le hizo falta o te hace ahora que estás trabajando?'),(11,'¿Qué es lo que si viste en tu carrera y que no te sirve ahora que estás trabajando?'),(12,'Consideras que la enseñanza adicional que el ITSTA ofrece (talleres, congresos, diplomados, certificaciones, entre otros), ¿es fundamental en el desempeño de sus actividades ahora que trabajas?'),(13,'¿Cómo calificas el servicio y atención que recibiste el personal del ITSTA durante tu formación?'),(14,'En base a lo anterior, ¿Cuál sería tu propuesta para mejorar en este sentido?');
/*!40000 ALTER TABLE `preguntasencuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `puestoempresa`
--

LOCK TABLES `puestoempresa` WRITE;
/*!40000 ALTER TABLE `puestoempresa` DISABLE KEYS */;
INSERT INTO `puestoempresa` VALUES (1,'Operativo'),(2,'Técnico'),(3,'Puesto administrativo'),(4,'Supervisor'),(5,'Directivo'),(6,'Propietario'),(7,'Otro');
/*!40000 ALTER TABLE `puestoempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `respuestasencuesta`
--

LOCK TABLES `respuestasencuesta` WRITE;
/*!40000 ALTER TABLE `respuestasencuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestasencuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sectorempresa`
--

LOCK TABLES `sectorempresa` WRITE;
/*!40000 ALTER TABLE `sectorempresa` DISABLE KEYS */;
INSERT INTO `sectorempresa` VALUES (1,'Público'),(2,'Privado');
/*!40000 ALTER TABLE `sectorempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sizeorganitation`
--

LOCK TABLES `sizeorganitation` WRITE;
/*!40000 ALTER TABLE `sizeorganitation` DISABLE KEYS */;
INSERT INTO `sizeorganitation` VALUES (1,'Micro'),(2,'Pequeña'),(3,'Mediana'),(4,'Grande');
/*!40000 ALTER TABLE `sizeorganitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `temporal`
--

LOCK TABLES `temporal` WRITE;
/*!40000 ALTER TABLE `temporal` DISABLE KEYS */;
INSERT INTO `temporal` VALUES (15,'133s0123','alguien@gmail.com','123','111-111-1111','111-111-1111','alguien@gmail.com','Masculino','Alumno'),(19,'133S0220','Erick Clair','123','111-111-1111','111-111-1111','alguien@gmail.com','Masculino','Alumno'),(22,'133s0221','Alexis Elizalde Mendoza','12345678','111-111-1111','111-111-1111','alexis@gmail.com','Masculino','Egresado'),(26,'133S0222','test de prueba','12345678','','','alguien@gmail.com','Masculino','Alumno');
/*!40000 ALTER TABLE `temporal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'seguimientoegresados'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-18 13:04:15
