/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.13-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: matche
-- ------------------------------------------------------
-- Server version	10.11.13-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `user_id` int(11) DEFAULT NULL,
  KEY `user_id` (`user_id`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES
(10),
(11);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(100) DEFAULT NULL,
  `match_id` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `match_id` (`match_id`),
  CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES
(31,'Standard',19,100),
(32,'VIP',19,200),
(33,'Premium',19,300),
(34,'Standard',20,200),
(35,'VIP',20,400),
(36,'Premium',20,500),
(37,'Standard',21,200),
(38,'VIP',21,400),
(39,'Premium',21,500),
(40,'Standard',22,200),
(41,'VIP',22,400),
(42,'Premium',22,500),
(43,'Standard',23,2),
(44,'VIP',23,2),
(45,'Premium',23,2);
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `user_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `ticket_id` (`ticket_id`),
  KEY `comment_id` (`comment_id`),
  CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `clients_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`),
  CONSTRAINT `clients_ibfk_3` FOREIGN KEY (`comment_id`) REFERENCES `commentaire` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES
(16,NULL,NULL,5),
(18,NULL,NULL,6),
(19,NULL,NULL,7);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaire`
--

LOCK TABLES `commentaire` WRITE;
/*!40000 ALTER TABLE `commentaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipe1` varchar(255) DEFAULT NULL,
  `equipe2` varchar(255) DEFAULT NULL,
  `logo_equipe1` varchar(255) DEFAULT NULL,
  `logo_equipe2` varchar(255) DEFAULT NULL,
  `banner` varchar(500) DEFAULT NULL,
  `date_matche` datetime DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `nbr_place` int(11) DEFAULT NULL,
  `statut` varchar(40) DEFAULT NULL,
  `organisateur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organisateur_id` (`organisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matches`
--

LOCK TABLES `matches` WRITE;
/*!40000 ALTER TABLE `matches` DISABLE KEYS */;
INSERT INTO `matches` VALUES
(19,'barca','barca','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','0003-02-03 03:03:00','barac',1000,'validée',1),
(20,'mardris','madrid','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','0002-02-02 02:02:00','EGYTPT',1000,'validée',1),
(21,'mardris','madrid','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','0002-02-02 02:02:00','EGYTPT',1000,'en attente',1),
(22,'mardris','madrid','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','0002-02-02 02:02:00','EGYTPT',1000,'en attente',1),
(23,'qwd','wef','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','https://www.freeiconspng.com/uploads/real-madrid-logo-png-7.png','0001-01-11 01:11:00','wf',2,'validée',17);
/*!40000 ALTER TABLE `matches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `nombre_ticket_par_match`
--

DROP TABLE IF EXISTS `nombre_ticket_par_match`;
/*!50001 DROP VIEW IF EXISTS `nombre_ticket_par_match`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `nombre_ticket_par_match` AS SELECT
 1 AS `matche_id`,
  1 AS `nbr_t` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `organisateur`
--

DROP TABLE IF EXISTS `organisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `organisateur` (
  `user_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `organisateur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisateur`
--

LOCK TABLES `organisateur` WRITE;
/*!40000 ALTER TABLE `organisateur` DISABLE KEYS */;
INSERT INTO `organisateur` VALUES
(17,2);
/*!40000 ALTER TABLE `organisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `match_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `categorie` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `match_id` (`match_id`),
  CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES
(20,20,18,NULL),
(21,20,18,NULL),
(22,20,18,NULL),
(23,20,18,NULL),
(24,20,16,NULL),
(25,20,16,NULL),
(26,19,16,NULL),
(27,19,16,NULL),
(28,19,16,NULL),
(29,20,16,NULL),
(30,20,16,NULL),
(31,19,19,NULL),
(32,19,19,NULL),
(33,19,19,NULL),
(34,19,19,NULL),
(35,23,19,NULL),
(36,20,19,NULL);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `etat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'qqt','qef','https://picsum.dev/800/600','saad@gmail.com','organisateur','$2y$12$H2u54T2uZqP/DvCovQWUkeNcis0yt5jmF9OFA6vIhwyVjh.mQuLZi',NULL),
(10,'cheto','ziyad',NULL,'ziyad@gnail','admin','$2y$12$Tlf1EsUI80jljns3cef.vuTSOQ7op3.78bmR9oTgGZazf7gPAXYUq',NULL),
(11,'cheto','ziyad',NULL,'ziyad@ggail','admin','$2y$12$ppvIaSE6cyRpEyCSnV9yveiBlO4wTZOIb3jRRGGTDX0BMONakyYXm',NULL),
(16,'mohsin','ahmed','https://picsum.dev/800/600','ahmed@g','client','$2y$12$peitRonw3xGCja43dUn/3ennljh9XiX9Usit3JQJu97D73hl/mCjq',NULL),
(17,'soufiane','soufiane','https://picsum.dev/800/600','soufiane@g','organisateur','$2y$12$jyFwlbbNLzaX4u3OXrLjK.C9vFl7V/Z83LSiegbXiQVkt3xnSu6OO',NULL),
(18,'osama','osama','https://picsum.dev/800/600','osama@g','client','$2y$12$uto9uBVDrRgwsN/BL8Itge8opPf68LVK4mQgp1hldnQWa8v1Yeare',NULL),
(19,'Cheto','Ziyad','https://picsum.dev/800/600','chetoziyad@gmail.com','client','$2y$12$jffkcfMrLoWjO2/AsJ1hmuGlYm7bZX3k/esrzvC160pxaOjOuZPZe',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!50001 DROP VIEW IF EXISTS `utilisateur`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `utilisateur` AS SELECT
 1 AS `id`,
  1 AS `email`,
  1 AS `role` */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `nombre_ticket_par_match`
--

/*!50001 DROP VIEW IF EXISTS `nombre_ticket_par_match`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `nombre_ticket_par_match` AS select `matches`.`id` AS `matche_id`,count(`ticket`.`id`) AS `nbr_t` from (`matches` left join `ticket` on(`ticket`.`match_id` <> 0)) group by `matches`.`id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `utilisateur`
--

/*!50001 DROP VIEW IF EXISTS `utilisateur`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `utilisateur` AS select `users`.`id` AS `id`,`users`.`email` AS `email`,`users`.`role` AS `role` from `users` */;
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

-- Dump completed on 2026-01-07 11:15:54
