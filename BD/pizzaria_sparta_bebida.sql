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
-- Table structure for table `bebida`
--

DROP TABLE IF EXISTS `bebida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bebida` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bebida`
--

LOCK TABLES `bebida` WRITE;
/*!40000 ALTER TABLE `bebida` DISABLE KEYS */;
INSERT INTO `bebida` VALUES (1,'Refrigerante Coca-Cola 350ml',2.59),(2,'Refrigerante Coca-Cola 600ml',3.79),(3,'Refrigerante Coca-Cola 1l',4.99),(4,'Refrigerante Coca-Cola 2l',5.89),(5,'Refrigerante Coca-Cola 3l',6.99),(6,'Refrigerante Fanta-Laranja 350ml',2.59),(7,'Refrigerante Fanta-Laranja 600ml',3.79),(8,'Refrigerante Fanta-Laranja 1L',4.99),(9,'Refrigerante Fanta-Laranja 2L',5.89),(10,'Refrigerante Fanta-Laranja 3L',6.99),(11,'Refrigerante Fanta-uva 350ml',2.59),(12,'Refrigerante Fanta-uva 600ml',3.79),(13,'Refrigerante Fanta-uva 1L',4.99),(14,'Refrigerante Fanta-uva 2L',5.89),(15,'Refrigerante Fanta-uva 3L',6.99),(16,'Refrigerante Pepsi-cola 350ml',2.59),(17,'Refrigerante Pepsi-cola 600ml',3.79),(18,'Refrigerante Pepsi-cola 1L',4.99),(19,'Refrigerante Pepsi-cola 2L',5.89),(20,'Refrigerante Pepsi-cola 3L',6.99),(21,'Refrigerante Guaraná Antarctica 350ml',2.59),(22,'Refrigerante Guaraná Antarctica 600ml',3.79),(23,'Refrigerante Guaraná Antarctica 1L',4.99),(24,'Refrigerante Guaraná Antarctica 2L',5.89),(25,'Refrigerante Guaraná Antarctica 3L',6.99),(26,'Refrigerante SPRITE Sabor Limão 350ml',2.59),(27,'Refrigerante SPRITE Sabor Limão 600ml',3.79),(28,'Refrigerante SPRITE Sabor Limão 1L',4.99),(29,'Refrigerante SPRITE Sabor Limão 2L',5.89),(30,'Refrigerante SPRITE Sabor Limão 3L',6.99);
/*!40000 ALTER TABLE `bebida` ENABLE KEYS */;
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
