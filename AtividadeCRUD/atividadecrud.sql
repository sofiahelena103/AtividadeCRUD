# mysqldump -u root atividadecrud
-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: atividadecrud
-- ------------------------------------------------------
-- Server version       10.4.32-MariaDB

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` char(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (3,'CaraLegal11','diversao@teste.com','$2y$10$7koTC045pPvkQMpdA.0kIeGE.wsJ7riAQ4zI2W4uTrHz3xMP425eG'),(4,'espaguete','espaguetebom@teste.com','$2y$10$10LEVuVLgrVmx5QgaDBvf.4FbEEMuU2ZeB1WkJDT0a8Cnyg3D2Byu'),(5,'bobesponja','estoupronto@teste.com','$2y$10$691FIzwlDLWvSlRGmx07eerpVvFTimLkRP6xsEpIR0/nTHNlw5p3e'),(6,'coolskeleton99','papyrussnowdin@teste.com','$2y$10$sgdTzNpywtOiAFfM3sqncuZZVkZ2S97W7KuwW6wwMyPhWABy4EW/6'),(7,'shanestardewvalley','ilovebeer@teste.com','$2y$10$WGGfPag.Zwg6zyVd7MCX7.8M7hx42r8CDTzucHlIUW223dhjjVYtW'),(8,'meuusuariolegal','user@teste.com','$2y$10$Mj5qyR1x6m4TmWK5anGC9OL17xuk2NV.KGbLq7KgdSl8WBtpCkleC'),(9,'segredossecretos','fanficruim@teste.com','$2y$10$4ydgL6TRbGGyRdyuLeE.ye3YZPBCN.ZVBJ3O4pfumBxaTiPcdkn1u'),(10,'undynesnowdin20','undyne@teste.com','$2y$10$TjfjFnP2s.8LkrHeQWWdpeTS1FU0zTuoeFrmaBJ31xqsPI/sZA9ei'),(12,'picoledemorango','morango@teste.com','$2y$10$d9zeQ0Z9UJKKMo9Pfu7FOOAg1ZciwXS8pSVCclZ3D6R7lvb9EOHvi');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-14 22:43:18