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
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pizza` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sabor` varchar(65) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `descricao` varchar(145) NOT NULL,
  `categoria` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pizza`
--

LOCK TABLES `pizza` WRITE;
/*!40000 ALTER TABLE `pizza` DISABLE KEYS */;
INSERT INTO `pizza` VALUES (2,'Calabresa',14.9,'0','Molho, mussarela, calabresa, cebola fatiada e orégano...','1'),(3,'Margherita',14.9,'assets\\img\\pizzas\\24-margherita3-233x200@2x.png','Molho, mussarela, tomates em rodelas e manjericão...','1'),(4,'Basca',14.9,'assets\\img\\pizzas\\08-basca3-233x200@2x.png','Molho, mussarela, bacon, rodelas de tomates, catupiry e orégano....','1'),(5,'Mafiosa',14.9,'assets\\img\\pizzas\\10-mafiosa2-233x200@2x.png','Molho, mussarela, calabresa apimentada, berinjela, cebola fatiada e orégano...','1'),(6,'Brócolis c/ Catupiry',14.9,'assets\\img\\pizzas\\23-brocolis-com-catupiry2-233x200@2x.png','Molho, mussarela, alho, azeite de oliva e orégano...','1'),(7,'Alho e Óleo',14.9,'assets\\img\\pizzas\\15-alho-e-oqueijo2-233x200@2x.png','Molho, mussarela, calabresa, cebola fatiada e orégano...','1'),(8,'Escarola',14.9,'assets\\img\\pizzas\\25-escarola2-233x200@2x.png','Molho, chicória refogada com azeite de oliva e alho e mussarela...','1'),(9,'Milho c/ Bacon',14.9,'assets\\img\\pizzas\\02-milho-com-bacon2-233x200@2x.png','Molho, mussarela, milho, bacon, parmesão e orégano...','1'),(10,'Saborosa',14.9,'assets\\img\\pizzas\\27-saborosa3-233x200@2x.png','Molho, presunto, cobertura de mussarela, manjericão e orégano...','1'),(11,'5 Queijos',17.9,'assets\\img\\pizzas\\06-cinco-queijos2-233x200@2x.png','Molho, mussarela, provolone, gorgonzola, parmesão, catupiry e orégano...','1'),(12,'Napolitana',17.9,'assets\\img\\pizzas\\04-napolitana2-233x200@2x.png','Molho, mussarela, tomates em rodelas, parmesão, azeitonas e orégano...','1'),(13,'Anchovas',17.9,'assets\\img\\pizzas\\09-anchovas2-233x200@2x.png','Molho, mussarela, tomates em rodelas, parmesão, anchovas e orégano...','1'),(14,'Portuguesa',17.9,'assets\\img\\pizzas\\14-portuguesa2-233x200@2x.png','Molho, mussarela, presunto, calabresa, ovos, cebola, azeitonas e orégano...','1'),(15,'Vegetariana',17.9,'assets\\img\\pizzas\\18-vegetariana2-233x200@2x.png','Molho, mussarela, brócolis, palmito, tomate, champignon, cebola e orégano...','1'),(16,'Lombo c/ Catupiry',17.9,'assets\\img\\pizzas\\19-lombo-com-catupiry2-233x200@2x.png','Molho, mussarela, lombo tipo canadense, catupiry e orégano...','1'),(17,'Pepperoni',17.9,'assets\\img\\pizzas\\26-pepperoni-233x200@2x.png','Molho, mussarela, salame pepperoni fatiado e orégano...','1'),(18,'Chester c/ Catupiry',17.9,'assets\\img\\pizzas\\05-chester-com-catupiry1-233x200@2x.png','Molho, mussarela, chester defumado, catupiry, azeitonas e orégano...','1'),(19,'Frango c/ Catupiry',17.9,'assets\\img\\pizzas\\37-frango-com-catupiry1-233x200@2x.png','Molho, mussarela, frango desfiado, catupiry e orégano...','1'),(20,'Califórnia',14.9,'assets\\img\\pizzas\\07-california1-233x200@2x.png','Mussarela, pêssego, figo, abacaxi e uva passa...','0'),(21,'Chocolate',14.9,'ssets\\img\\pizzas\\38-chocolate-11-233x200@2x.png','Mussarela, chocolate ao leite...','0'),(22,'Banana',14.9,'assets\\img\\pizzas\\16-banana1-233x200@2x.png','Mussarela, banana, açúcar e canela...','0'),(23,'Chocolate Branco',14.9,'assets\\img\\pizzas\\39-chocolate-branco1-233x200@2x.png','Mussarela, chocolate branco...','0'),(24,'Beijinho',14.9,'assets\\img\\pizzas\\43-beijinho1-233x200@2x.png','Beijinho Moça Nestlé...','0'),(25,'Brigadeiro',14.9,'assets\\img\\pizzas\\42-brigadeiro-233x200@2x.png','Brigadeiro Moça Nestlé e chocolate granulado...','0'),(26,'Chocolate c/ M&M’s',17.9,'ssets\\img\\pizzas\\41-MMs1-233x200@2x.png','Mussarela, chocolate e M&M`s...','0'),(27,'Chocolate Branco c/ M&M’s',17.9,'assets\\img\\pizzas\\39-chocolate-branco1-233x200@2x.png','Mussarela, chocolate branco e M&M`s...','0'),(28,'Chocolate c/ Morango',17.9,'assets\\img\\pizzas\\40-chocolate-com-morango-233x200@2x.png','Mussarela, chocolate ao leite e morango...','0');
/*!40000 ALTER TABLE `pizza` ENABLE KEYS */;
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
