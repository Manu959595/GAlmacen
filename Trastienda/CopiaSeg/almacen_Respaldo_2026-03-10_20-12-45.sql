-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: almacen
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary table structure for view `generapedido`
--

DROP TABLE IF EXISTS `generapedido`;
/*!50001 DROP VIEW IF EXISTS `generapedido`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `generapedido` AS SELECT
 1 AS `Proveedor`,
  1 AS `Producto`,
  1 AS `Unidades` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `historico`
--

DROP TABLE IF EXISTS `historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historico` (
  `ID` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomape` varchar(50) NOT NULL,
  `poblacion` varchar(50) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico`
--

LOCK TABLES `historico` WRITE;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
INSERT INTO `historico` VALUES (103,'22222222N','fb77679472331e0296215ba6206d1293','mabosa@gmail.com','Manuela Bono Sánchez','Adra','606334618','historico/20260118-120109_22222222N.jpg'),(104,'23344567V','93a0a0ef175a74a0ab3f5087b607d5de','marupe@mail.com','María Ruiz Pérez','Adra','654123474','historico/20260118-120107_23344567V.jpg'),(107,'32324456K','93a0a0ef175a74a0ab3f5087b607d5de','juloga2@gmai.com','Julia López Garcés','Adra','695231472','historico/20260115-070105_32324456K.jpg'),(110,'34444222N','93a0a0ef175a74a0ab3f5087b607d5de','ansifer@gmail.com','Antonio Sierra Fernández','Roquetas de Mar','606284618','historico/20260118-120123_34444222N.jpg'),(113,'44444444G','93a0a0ef175a74a0ab3f5087b607d5de','ansava@gmail.com','Antonio Sánchez Vazquez','El Ejido','537975312','historico/20260118-120155_44444444G.jpg'),(116,'45454545H','6a52797885494d535fe7ab99e9902045','mibalo@mail.com','Miguel Baena López','Roquetas de Mar','606284618','historico/20260115-070157_45454545H.JPG'),(121,'12121212F','6a52797885494d535fe7ab99e9902045','misaco@mail.com','Miguel Sanz Contreras','Suflí','678665444','historico/20260118-120134_12121212F.png'),(131,'21212121f','6a52797885494d535fe7ab99e9902045','malovi@mail.com','María López Vicente','Adra','660556443','historico/20260115-070141_21212121F.jpg'),(103,'22222222N','fb77679472331e0296215ba6206d1293','mabosa@gmail.com','Manuela Bono Sánchez','Adra','606334618','historico/20260118-120109_22222222N.jpg'),(104,'23344567V','93a0a0ef175a74a0ab3f5087b607d5de','marupe@mail.com','María Ruiz Pérez','Adra','654123474','historico/20260118-120107_23344567V.jpg'),(107,'32324456K','93a0a0ef175a74a0ab3f5087b607d5de','juloga2@gmai.com','Julia López Garcés','Adra','695231472','historico/20260115-070105_32324456K.jpg'),(110,'34444222N','93a0a0ef175a74a0ab3f5087b607d5de','ansifer@gmail.com','Antonio Sierra Fernández','Roquetas de Mar','606284618','historico/20260118-120123_34444222N.jpg'),(113,'44444444G','93a0a0ef175a74a0ab3f5087b607d5de','ansava@gmail.com','Antonio Sánchez Vazquez','El Ejido','537975312','historico/20260118-120155_44444444G.jpg'),(116,'45454545H','6a52797885494d535fe7ab99e9902045','mibalo@mail.com','Miguel Baena López','Roquetas de Mar','606284618','historico/20260115-070157_45454545H.JPG'),(121,'12121212F','6a52797885494d535fe7ab99e9902045','misaco@mail.com','Miguel Sanz Contreras','Suflí','678665444','historico/20260118-120134_12121212F.png'),(131,'21212121f','6a52797885494d535fe7ab99e9902045','malovi@mail.com','María López Vicente','Adra','660556443','historico/20260115-070141_21212121F.jpg');
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_historico_tras_insert` AFTER INSERT ON `historico` FOR EACH ROW BEGIN
	INSERT INTO log_historico (accion, ID_historico, login, nomape, fecha)
    VALUES ('INSERT', NEW.ID, NEW.login, NEW.nomape, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_historico_tras_update` AFTER UPDATE ON `historico` FOR EACH ROW BEGIN
	INSERT INTO log_historico (accion, ID_historico, login, nomape, fecha)
    VALUES ('UPDATE', NEW.ID, NEW.login, NEW.nomape, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_historico_tras_delete` AFTER DELETE ON `historico` FOR EACH ROW BEGIN
	INSERT INTO log_historico (accion, ID_historico, login, nomape, fecha)
    VALUES ('DELETE', OLD.ID, OLD.login, OLD.nomape, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `log_historico`
--

DROP TABLE IF EXISTS `log_historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_historico` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `accion` varchar(10) DEFAULT NULL,
  `ID_historico` int(11) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `nomape` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_historico`
--

LOCK TABLES `log_historico` WRITE;
/*!40000 ALTER TABLE `log_historico` DISABLE KEYS */;
INSERT INTO `log_historico` VALUES (1,'INSERT',103,'22222222N','Manuela Bono Sánchez','2026-03-05 09:39:29'),(2,'INSERT',104,'23344567V','María Ruiz Pérez','2026-03-05 09:39:29'),(3,'INSERT',107,'32324456K','Julia López Garcés','2026-03-05 09:39:29'),(4,'INSERT',110,'34444222N','Antonio Sierra Fernández','2026-03-05 09:39:29'),(5,'INSERT',113,'44444444G','Antonio Sánchez Vazquez','2026-03-05 09:39:29'),(6,'INSERT',116,'45454545H','Miguel Baena López','2026-03-05 09:39:29'),(7,'INSERT',121,'12121212F','Miguel Sanz Contreras','2026-03-05 09:39:29'),(8,'INSERT',131,'21212121f','María López Vicente','2026-03-05 09:39:29');
/*!40000 ALTER TABLE `log_historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_productos`
--

DROP TABLE IF EXISTS `log_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_productos` (
  `id_log` int(11) NOT NULL,
  `accion` varchar(10) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `nombreproducto` varchar(30) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_productos`
--

LOCK TABLES `log_productos` WRITE;
/*!40000 ALTER TABLE `log_productos` DISABLE KEYS */;
INSERT INTO `log_productos` VALUES (0,'INSERT',1,'Procesadores i5',90,50,'2026-03-05 09:39:29'),(0,'INSERT',2,'Disco SSD 1T Kinstong',75,10,'2026-03-05 09:39:29'),(0,'INSERT',3,'Procesador Rizen 7',150,10,'2026-03-05 09:39:29'),(0,'INSERT',4,'Rartón logitech cable',7,100,'2026-03-05 09:39:29'),(0,'INSERT',5,'Impresora Laserjet M209d',90,10,'2026-03-05 09:39:29'),(0,'INSERT',6,'Micrófono',40,5,'2026-03-05 09:39:29'),(0,'INSERT',11,'Smartwatch huawei',190,5,'2026-03-05 09:39:29'),(0,'INSERT',12,'USB 32Gb Kinstong',20,10,'2026-03-05 09:39:29'),(0,'INSERT',13,'USB 16GB Kinstong',8,9,'2026-03-05 09:39:29'),(0,'INSERT',14,'Ratón wireless SIN cable',9,10,'2026-03-05 09:39:29'),(0,'INSERT',15,'Base dock externa',72,5,'2026-03-05 09:39:29');
/*!40000 ALTER TABLE `log_productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_proveedores`
--

DROP TABLE IF EXISTS `log_proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_proveedores` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `accion` varchar(10) DEFAULT NULL,
  `CIFprov` char(9) DEFAULT NULL,
  `nombreprov` varchar(30) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_proveedores`
--

LOCK TABLES `log_proveedores` WRITE;
/*!40000 ALTER TABLE `log_proveedores` DISABLE KEYS */;
INSERT INTO `log_proveedores` VALUES (1,'INSERT','A12121212','Zara','2026-03-05 09:39:29'),(2,'INSERT','B34343434','Mercadona','2026-03-05 09:39:29'),(3,'INSERT','B67676767','MICROSOFT','2026-03-05 09:39:29'),(4,'INSERT','C56565656','Carrefour','2026-03-05 09:39:29'),(5,'INSERT','Q3435367J','El Corte Inglés','2026-03-05 09:39:29');
/*!40000 ALTER TABLE `log_proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_usuarios`
--

DROP TABLE IF EXISTS `log_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_usuarios` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `accion` varchar(10) DEFAULT NULL,
  `ID_usuario` int(11) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `nomape` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_usuarios`
--

LOCK TABLES `log_usuarios` WRITE;
/*!40000 ALTER TABLE `log_usuarios` DISABLE KEYS */;
INSERT INTO `log_usuarios` VALUES (1,'INSERT',0,'A12121212','aperez@mail.com','2026-03-05 09:39:29'),(2,'INSERT',0,'B34343434','cgarcia@mail.com','2026-03-05 09:39:29'),(3,'INSERT',0,'B67676767','microsoft@mail.com','2026-03-05 09:39:29'),(4,'INSERT',0,'C56565656','jsanchez@mail.com','2026-03-05 09:39:29'),(5,'INSERT',0,'Q3435367J','cingles@mail.com','2026-03-05 09:39:29'),(6,'INSERT',101,'17513693N','Alfonso Bonillo Sierra','2026-03-05 09:39:29'),(7,'INSERT',102,'21122113N','Enrique Ramirez Duran','2026-03-05 09:39:29'),(8,'INSERT',105,'24444222N','Manuel López Gómez','2026-03-05 09:39:29'),(9,'INSERT',106,'27513693N','Carlos Miranda López','2026-03-05 09:39:29'),(10,'INSERT',108,'33333333H','Mario García García','2026-03-05 09:39:29'),(11,'INSERT',111,'34455654V','Antonio Dominguez Sánchez','2026-03-05 09:39:29'),(12,'INSERT',112,'42622143M','Ángela Ruiz Martínez','2026-03-05 09:39:29'),(13,'INSERT',114,'56655665F','Juan Hernández Valle','2026-03-05 09:39:29'),(14,'INSERT',124,'89898989F','Julian García Jiménez','2026-03-05 09:39:29'),(15,'INSERT',125,'56565643G','Francisco Antón García','2026-03-05 09:39:29'),(16,'INSERT',128,'11223332G','Francisca García','2026-03-05 09:39:29'),(17,'INSERT',130,'111222333H','IES TURANIANA','2026-03-05 09:39:29'),(18,'INSERT',135,'36766766T','ALF BON','2026-03-05 09:39:29'),(19,'INSERT',138,'B67676767','MICROSOFT','2026-03-05 09:39:29'),(20,'INSERT',140,'manu','manu','2026-03-05 14:37:12');
/*!40000 ALTER TABLE `log_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!50001 DROP VIEW IF EXISTS `pedidos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pedidos` AS SELECT
 1 AS `nombreproducto`,
  1 AS `precio`,
  1 AS `stock`,
  1 AS `Proveedor` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `procedencia`
--

DROP TABLE IF EXISTS `procedencia`;
/*!50001 DROP VIEW IF EXISTS `procedencia`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `procedencia` AS SELECT
 1 AS `PAIS`,
  1 AS `NUMPRODUCTOS`,
  1 AS `VALOR` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombreproducto` varchar(30) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `CIF` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Procesadores i5','Procesadores intel i5',90,50,'1_i5.png','Corea','A12121212'),(2,'Disco SSD 1T Kinstong','Disco duro 1T Kinstong',75,10,'2_ssd-K1.png','España','B34343434'),(3,'Procesador Rizen 7','Procesador AMD Rizen 7',150,10,'3_ryzen7.png','China','B34343434'),(4,'Rartón logitech cable','Ratón óptico con cable',7,100,'4_ratonlogitech.png','Japón','A12121212'),(5,'Impresora Laserjet M209d','Impresora láser monocromo para oficina',90,10,'5_impresora.png','Francia','C56565656'),(6,'Micrófono','Micrófono profesional para grabaciones',40,5,'6_Microfono.jpg','Corea','B34343434'),(11,'Smartwatch huawei','Reloj inteligente de la marca huawei whatch gt5',190,5,'11_Smartwatch.png','Corea','A12121212'),(12,'USB 32Gb Kinstong','Memoria USB Kinstong de 32Gb de capacidad',20,10,'12_USB32K.png','España','B34343434'),(13,'USB 16GB Kinstong','Memoria USB Kinstong de 16Gb de capacidad',8,9,'13_USB16K.png','China','B34343434'),(14,'Ratón wireless SIN cable','Ratón óptico SIN cable con conexión wireless, por bluetooth y recargable',9,10,'14_ratonwireless.png','Japón','A12121212'),(15,'Base dock externa','Base dock externa para conectar discos al pc por USB',72,5,'15_basedock.png','Francia','C56565656'),(1,'Procesadores i5','Procesadores intel i5',90,50,'1_i5.png','Corea','A12121212'),(2,'Disco SSD 1T Kinstong','Disco duro 1T Kinstong',75,10,'2_ssd-K1.png','España','B34343434'),(3,'Procesador Rizen 7','Procesador AMD Rizen 7',150,10,'3_ryzen7.png','China','B34343434'),(4,'Rartón logitech cable','Ratón óptico con cable',7,100,'4_ratonlogitech.png','Japón','A12121212'),(5,'Impresora Laserjet M209d','Impresora láser monocromo para oficina',90,10,'5_impresora.png','Francia','C56565656'),(6,'Micrófono','Micrófono profesional para grabaciones',40,5,'6_Microfono.jpg','Corea','B34343434'),(11,'Smartwatch huawei','Reloj inteligente de la marca huawei whatch gt5',190,5,'11_Smartwatch.png','Corea','A12121212'),(12,'USB 32Gb Kinstong','Memoria USB Kinstong de 32Gb de capacidad',20,10,'12_USB32K.png','España','B34343434'),(13,'USB 16GB Kinstong','Memoria USB Kinstong de 16Gb de capacidad',8,9,'13_USB16K.png','China','B34343434'),(14,'Ratón wireless SIN cable','Ratón óptico SIN cable con conexión wireless, por bluetooth y recargable',9,10,'14_ratonwireless.png','Japón','A12121212'),(15,'Base dock externa','Base dock externa para conectar discos al pc por USB',72,5,'15_basedock.png','Francia','C56565656');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER LOG_productos_tras_insert AFTER INSERT ON productos FOR EACH ROW BEGIN
	INSERT INTO log_productos (accion, id_producto, nombreproducto, precio, stock, fecha)
    VALUES ('INSERT', NEW.id_producto, NEW.nombreproducto, NEW.precio, NEW.stock, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `trg_descuento_stock_5` BEFORE UPDATE ON `productos` FOR EACH ROW BEGIN
IF NEW.stock = 5 AND OLD.stock <> 5 THEN
SET NEW.precio = NEW.precio * 0.8;
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER LOG_productos_tras_update AFTER UPDATE ON productos FOR EACH ROW BEGIN
	INSERT INTO log_productos (accion, id_producto, nombreproducto, precio, stock, fecha)
    VALUES ('UPDATE', NEW.id_producto, NEW.nombreproducto, NEW.precio, NEW.stock, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER LOG_productos_tras_delete AFTER DELETE ON productos FOR EACH ROW BEGIN
	INSERT INTO log_productos (accion, id_producto, nombreproducto, precio, stock, fecha)
    VALUES ('DELETE', OLD.id_producto, OLD.nombreproducto, OLD.precio, OLD.stock, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `CIFprov` char(9) NOT NULL,
  `nombreprov` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `representante` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES ('A12121212','Zara','C/ Luz 5','España','A. Pérez','aperez@mail.com','612121212'),('B34343434','Mercadona','C/ Luna 3','España','C. García','cgarcia@mail.com','634343434'),('B67676767','MICROSOFT','C/ Luna 23','Estadounidense','B. Gates','microsoft@mail.com','950676767'),('C56565656','Carrefour','C/ Sol 11','Francia','J. Sánchez','jsanchez@mail.com','656565656'),('Q3435367J','El Corte Inglés','Avda de los ingleses, 34','Española','Paco López','cingles@mail.com','950323636'),('A12121212','Zara','C/ Luz 5','España','A. Pérez','aperez@mail.com','612121212'),('B34343434','Mercadona','C/ Luna 3','España','C. García','cgarcia@mail.com','634343434'),('B67676767','MICROSOFT','C/ Luna 23','Estadounidense','B. Gates','microsoft@mail.com','950676767'),('C56565656','Carrefour','C/ Sol 11','Francia','J. Sánchez','jsanchez@mail.com','656565656'),('Q3435367J','El Corte Inglés','Avda de los ingleses, 34','Española','Paco López','cingles@mail.com','950323636');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `trg_altaprov` AFTER INSERT ON `proveedores` FOR EACH ROW BEGIN
INSERT INTO usuarios (login, passw, email, nomape, telefono, imagen) 
VALUES (NEW.CIFProv, md5("cambiarlaclave"), NEW.nombreprov, NEW.email, NEW.telefono, CONCAT("imagenes/",NEW.CIFProv, "PNG"));
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_proveedores_tras_insert` AFTER INSERT ON `proveedores` FOR EACH ROW BEGIN
	INSERT INTO log_proveedores (accion, CIFprov, nombreprov, fecha)
    VALUES ('INSERT', NEW.CIFprov, NEW.nombreprov, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `trg_actualizar_pais_productos` AFTER UPDATE ON `proveedores` FOR EACH ROW BEGIN
IF OLD.nacionalidad <> NEW.nacionalidad THEN
UPDATE productos SET pais = NEW.nacionalidad WHERE CIF = NEW.CIFprov;
END IF ;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_proveedores_tras_update` AFTER UPDATE ON `proveedores` FOR EACH ROW BEGIN
	INSERT INTO log_proveedores (accion, CIFprov, nombreprov, fecha)
    VALUES ('UPDATE', NEW.CIFprov, NEW.nombreprov, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_proveedores_tras_delete` AFTER DELETE ON `proveedores` FOR EACH ROW BEGIN
	INSERT INTO log_proveedores (accion, CIFprov, nombreprov, fecha)
    VALUES ('DELETE', OLD.CIFprov, OLD.nombreprov, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomape` varchar(50) NOT NULL,
  `poblacion` varchar(50) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (101,'17513693N','afcf6afed40a6ef115e7a209897243bd','albosi@gmail.com','Alfonso Bonillo Sierra','Roquetas de Mar','606284618','imagenes/17513693N.png'),(102,'21122113N','fb77679472331e0296215ba6206d1293','enradu@mail.com','Enrique Ramirez Duran','El Ejido','603212445','IMAGENES/21122113N.JPG'),(105,'24444222N','fd66a24e5ae306aa6ced0e1207add8ce','malogo@mail.com','Manuel López Gómez','Enix','606060606','imagenes/24444222N.png'),(106,'27513693N','93a0a0ef175a74a0ab3f5087b607d5de','camilo@gmail.com','Carlos Miranda López','Roquetas de Mar','606284618','imagenes/27513693N.jpg'),(108,'33333333H','af5704f9e5e467b8373a7919169e7b3a','magaga@mail.com','Mario García García','Cádiz','665554443','imagenes/33333333H.jpg'),(111,'34455654V','93a0a0ef175a74a0ab3f5087b607d5de','andosa@mail.com','Antonio Dominguez Sánchez','Adra','950401308','imagenes/34455654V.png'),(112,'42622143M','93a0a0ef175a74a0ab3f5087b607d5de','anruma@gmail.com','Ángela Ruiz Martínez','Vícar','426221143','imagenes/42622143M.png'),(114,'56655665F','6a52797885494d535fe7ab99e9902045','juheva@mail.com','Juan Hernández Valle','Adra','655449009','imagenes/56655665F.png'),(124,'89898989F','6a52797885494d535fe7ab99e9902045','jugaji@mail.com','Julian García Jiménez','La Puebla','640334226','imagenes/89898989F.png'),(125,'56565643G','6a52797885494d535fe7ab99e9902045','franga@gmail.com','Francisco Antón García','Roquetas de Mar','606284618','imagenes/56565643G.png'),(128,'11223332G','6a52797885494d535fe7ab99e9902045','franga@gmail.com','Francisca García','Almería','060628461','imagenes/111222111G.png'),(130,'111222333H','6a52797885494d535fe7ab99e9902045','misato@mail.com','IES TURANIANA','Roquetas de Mar','060628461','imagenes/111222333H.png'),(135,'36766766T','7d5c861599dda092bf59234f6fe57e64','alfbon@mail.com','ALF BON','Adra','950667667','imagenes/66766766T.PNG'),(138,'B67676767','7d5c861599dda092bf59234f6fe57e64','microsoft@mail.com','MICROSOFT','Enix','950676767','imagenes/B67676767.png'),(0,'A12121212','7d5c861599dda092bf59234f6fe57e64','Zara','aperez@mail.com',NULL,'612121212','imagenes/A12121212PNG'),(0,'B34343434','7d5c861599dda092bf59234f6fe57e64','Mercadona','cgarcia@mail.com',NULL,'634343434','imagenes/B34343434PNG'),(0,'B67676767','7d5c861599dda092bf59234f6fe57e64','MICROSOFT','microsoft@mail.com',NULL,'950676767','imagenes/B67676767PNG'),(0,'C56565656','7d5c861599dda092bf59234f6fe57e64','Carrefour','jsanchez@mail.com',NULL,'656565656','imagenes/C56565656PNG'),(0,'Q3435367J','7d5c861599dda092bf59234f6fe57e64','El Corte Inglés','cingles@mail.com',NULL,'950323636','imagenes/Q3435367JPNG'),(101,'17513693N','afcf6afed40a6ef115e7a209897243bd','albosi@gmail.com','Alfonso Bonillo Sierra','Roquetas de Mar','606284618','imagenes/17513693N.png'),(102,'21122113N','fb77679472331e0296215ba6206d1293','enradu@mail.com','Enrique Ramirez Duran','El Ejido','603212445','IMAGENES/21122113N.JPG'),(105,'24444222N','fd66a24e5ae306aa6ced0e1207add8ce','malogo@mail.com','Manuel López Gómez','Enix','606060606','imagenes/24444222N.png'),(106,'27513693N','93a0a0ef175a74a0ab3f5087b607d5de','camilo@gmail.com','Carlos Miranda López','Roquetas de Mar','606284618','imagenes/27513693N.jpg'),(108,'33333333H','af5704f9e5e467b8373a7919169e7b3a','magaga@mail.com','Mario García García','Cádiz','665554443','imagenes/33333333H.jpg'),(111,'34455654V','93a0a0ef175a74a0ab3f5087b607d5de','andosa@mail.com','Antonio Dominguez Sánchez','Adra','950401308','imagenes/34455654V.png'),(112,'42622143M','93a0a0ef175a74a0ab3f5087b607d5de','anruma@gmail.com','Ángela Ruiz Martínez','Vícar','426221143','imagenes/42622143M.png'),(114,'56655665F','6a52797885494d535fe7ab99e9902045','juheva@mail.com','Juan Hernández Valle','Adra','655449009','imagenes/56655665F.png'),(124,'89898989F','6a52797885494d535fe7ab99e9902045','jugaji@mail.com','Julian García Jiménez','La Puebla','640334226','imagenes/89898989F.png'),(125,'56565643G','6a52797885494d535fe7ab99e9902045','franga@gmail.com','Francisco Antón García','Roquetas de Mar','606284618','imagenes/56565643G.png'),(128,'11223332G','6a52797885494d535fe7ab99e9902045','franga@gmail.com','Francisca García','Almería','060628461','imagenes/111222111G.png'),(130,'111222333H','6a52797885494d535fe7ab99e9902045','misato@mail.com','IES TURANIANA','Roquetas de Mar','060628461','imagenes/111222333H.png'),(135,'36766766T','7d5c861599dda092bf59234f6fe57e64','alfbon@mail.com','ALF BON','Adra','950667667','imagenes/66766766T.PNG'),(138,'B67676767','7d5c861599dda092bf59234f6fe57e64','microsoft@mail.com','MICROSOFT','Enix','950676767','imagenes/B67676767.png'),(140,'manu','manu','manu@mail.com','manu','Roquetas de Mar','111111111',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_usuarios_tras_insert` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
	INSERT INTO log_usuarios (accion, ID_usuario, login, nomape, fecha)
    VALUES ('INSERT', NEW.ID, NEW.login, NEW.nomape, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_usuarios_tras_update` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN
	INSERT INTO log_usuarios (accion, ID_usuario, login, nomape, fecha)
    VALUES ('UPDATE', NEW.ID, NEW.login, NEW.nomape, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `LOG_usuarios_tras_delete` AFTER DELETE ON `usuarios` FOR EACH ROW BEGIN
	INSERT INTO log_usuarios (accion, ID_usuario, login, nomape, fecha)
    VALUES ('DELETE', OLD.ID, OLD.login, OLD.nomape, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Temporary table structure for view `valoralmacen`
--

DROP TABLE IF EXISTS `valoralmacen`;
/*!50001 DROP VIEW IF EXISTS `valoralmacen`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `valoralmacen` AS SELECT
 1 AS `nombreproducto`,
  1 AS `valor` */;
SET character_set_client = @saved_cs_client;

--
-- Dumping routines for database 'almacen'
--
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP FUNCTION IF EXISTS `almacenvalor` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `almacenvalor`() RETURNS int(11)
BEGIN
	DECLARE total INT;
	select sum(precio*stock) into total from productos;
	RETURN total;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP FUNCTION IF EXISTS `cuantosproductosde` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `cuantosproductosde`(`nacion` VARCHAR(30)) RETURNS int(11)
BEGIN
	DECLARE N, numero INT;
	select count(*) into numero from productos where (pais = nacion);
	Set N = numero;
	RETURN N;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP FUNCTION IF EXISTS `PRODUCTOSXPAIS` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `PRODUCTOSXPAIS`(`PROCEDENCIA` VARCHAR(30)) RETURNS int(11)
BEGIN
	DECLARE numero INT;
	SELECT SUM(precio*stock) INTO numero FROM productos GROUP BY pais HAVING pais = procedencia;
	RETURN numero;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP FUNCTION IF EXISTS `TOTALALMACEN` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `TOTALALMACEN`() RETURNS int(11)
BEGIN
	DECLARE total INT;
	SELECT SUM(VALOR) INTO total FROM VALORALMACEN;
	RETURN total;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP FUNCTION IF EXISTS `valorproductospais` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `valorproductospais`(`procedencia` VARCHAR(30)) RETURNS int(11)
BEGIN
	DECLARE numero INT;
	SELECT sum(precio*stock) into numero from productos group by pais having pais = procedencia;
	RETURN numero;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GeneraPedidoProv` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GeneraPedidoProv`(`nombreproveedor` CHAR(30))
BEGIN
	SELECT nombreproducto as PRODUCTO, stock as STOCK, stock * 3 as 'UNIDADES A PEDIR' from productos, proveedores 
	where (nombreprov=nombreproveedor) and (stock <=10) and (CIFprov=CIF)
	order by STOCK;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `OfertasxPais` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `OfertasxPais`(`procedencia` CHAR(30), `dto` INT)
BEGIN
	SELECT nombreproducto as PRODUCTO, precio as "PRECIO", precio-precio*(dto/100) as "OFERTA %", pais as PAIS FROM productos WHERE pais = procedencia;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Productos_del_proveedor` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Productos_del_proveedor`(`proveedor` CHAR(9))
BEGIN
	SELECT nombreproducto, descripcion, pais FROM productos WHERE CIF = proveedor;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Productos_stock` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Productos_stock`(IN `cantidad` INT)
BEGIN
	SELECT nombreproducto, descripcion, pais, stock FROM productos WHERE stock < cantidad;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `TotalAlmacen` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `TotalAlmacen`()
BEGIN
	SELECT nombreproducto as PRODUCTO, precio*stock as VALOR from productos order by valor;
	SELECT almacenvalor() as "Coste total del Almacén";
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `generapedido`
--

/*!50001 DROP VIEW IF EXISTS `generapedido`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `generapedido` AS select 'proveedores.nombreprov' AS `Proveedor`,`pedidos`.`nombreproducto` AS `Producto`,'pedidos.stock' * 3 AS `Unidades` from (`pedidos` join `proveedores`) where 'proveedores.CIFprov' = 'pedidos.Proveedor' order by 'proveedores.nombreprov' */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pedidos`
--

/*!50001 DROP VIEW IF EXISTS `pedidos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pedidos` AS select 'productos.nombreproducto' AS `nombreproducto`,'productos.precio' AS `precio`,'productos.stock' AS `stock`,'productos.CIF' AS `Proveedor` from `productos` where 'productos.stock' <= 10 */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `procedencia`
--

/*!50001 DROP VIEW IF EXISTS `procedencia`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `procedencia` AS select 'productos.pais' AS `PAIS`,count('productos.id_producto') AS `NUMPRODUCTOS`,`valorproductospais`('productos.pais') AS `VALOR` from `productos` group by 'productos.pais' order by count('productos.id_producto') desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `valoralmacen`
--

/*!50001 DROP VIEW IF EXISTS `valoralmacen`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `valoralmacen` AS select 'productos.nombreproducto' AS `nombreproducto`,'productos.precio' * 'productos.stock' AS `valor` from `productos` order by 'productos.precio' * 'productos.stock' */;
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

-- Dump completed on 2026-03-10 20:12:45
