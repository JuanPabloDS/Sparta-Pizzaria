-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pizzaria_sparta
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `sexo` enum('Masculino','Feminino','Não informado') DEFAULT 'Não informado',
  `email` varchar(150) NOT NULL,
  `senha` char(32) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `cep` varchar(14) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Daniel Lagos','833.333.890-96','1996-10-02','Masculino','danielcliente@email.co',NULL,'(61) 99999-9999','',''),(2,'asdasd','07836393178','2020-06-08','Masculino','juanp@email.com','81dc9bdb52d04dc20036dbd8313ed055','9999','55030-490','ar 10'),(3,'Juan Pablo','07836393178','2020-06-01','Masculino','danielcliente@email.com','e10adc3949ba59abbe56e057f20f883e','6199245454','55030-490','Sobradinho 2 ar 7'),(4,'asdasd','07836393178','2020-06-01','Não informado','juan@email.com','81dc9bdb52d04dc20036dbd8313ed055','6199245454','55030-490','Sobradinho 2 ar 7'),(5,'asdasd','07836393178','2020-01-05','Masculino','danielcliente@email.com','e10adc3949ba59abbe56e057f20f883e','6199245454','55030-490','Sobradinho 2 ar 7'),(6,'Juan','07836393178','2020-06-01','Masculino','juan123@email.com','e10adc3949ba59abbe56e057f20f883e','6199245454','55030-490','Sobradinho 2 ar 7');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-23 21:38:45
