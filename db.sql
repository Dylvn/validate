-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: validate
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Current Database: `validate`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `validate` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `validate`;

--
-- Table structure for table `categorie_film`
--

DROP TABLE IF EXISTS `categorie_film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie_film` (
  `categorie_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  KEY `fk_cat_id_idx` (`categorie_id`),
  KEY `fk_film_id_idx` (`film_id`),
  CONSTRAINT `fk_cat_id` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_film_id` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie_film`
--

LOCK TABLES `categorie_film` WRITE;
/*!40000 ALTER TABLE `categorie_film` DISABLE KEYS */;
INSERT INTO `categorie_film` VALUES (1,2),(2,1),(3,1),(4,1),(1,3),(5,3),(7,3),(2,4),(6,4),(5,5),(5,9),(2,10),(4,11),(5,12),(5,13),(5,14);
/*!40000 ALTER TABLE `categorie_film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Animations'),(2,'Romance'),(3,'Drame'),(4,'Erotique'),(5,'Comédie'),(6,'Comédie Musicale'),(7,'Famille');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `img` varchar(45) NOT NULL,
  `synopsis` mediumtext NOT NULL,
  `realisateur` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Cinquante nuances plus sombre','cinquante_nuance_plus_sombre','C’est un Christian blessé qui tente de reconquérir Anastasia. Cette dernière exige un nouveau contrat avant de lui laisser une seconde chance. Mais une ombre surgit du passé de Christian et plane sur les deux amants, déterminée à détruire un quelconque espoir de vie commune.','James Foley'),(2,'Lego Batman 2','lego_batman_2','Il en rêvait depuis La Grande Aventure Lego : Batman est enfin le héros de son propre film ! Mais la situation a bien changé à Gotham – et s\'il veut sauver la ville des griffes du Joker, il lui faudra arrêter de jouer au justicier masqué et découvrir le travail d\'équipe ! Peut-être pourra-t-il alors se décoincer un peu…','Chris McKay'),(3,'Tous en scéne','tous_en_scene','Buster Moon est un élégant koala qui dirige un grand théâtre, jadis illustre, mais aujourd’hui tombé en désuétude. Buster est un éternel optimiste, un peu bougon, qui aime son précieux théâtre au-delà de tout et serait prêt à tout pour le sauver. C’est alors qu’il trouve une chance en or pour redorer son blason tout en évitant la destruction de ses rêves et de toutes ses ambitions: une compétition mondiale de chant. Cinq candidats sont retenus pour ce défi: Une souris aussi séduisante que malhonnête, un jeune éléphant timide dévoré par le trac, une truie mère de famille débordée par ses 25 marcassins, un jeune gorille délinquant qui ne cherche qu’à échapper à sa famille, et une porc épic punk qui peine à se débarrasser de son petit ami à l’égo surdimensionné pour faire une carrière solo. Tout ce petit monde va venir chercher sur la scène de Buster l’opportunité qui pourra changer leur vie à jamais.','Garth Jennings'),(4,'La la land','la_la_land','Au cœur de Los Angeles, une actrice en devenir prénommée Mia sert des cafés entre deux auditions. \nDe son côté, Sebastian, passionné de jazz, joue du piano dans des clubs miteux pour assurer sa subsistance. \nTous deux sont bien loin de la vie rêvée à laquelle ils aspirent…\nLe destin va réunir ces doux rêveurs, mais leur coup de foudre résistera-t-il aux tentations, aux déceptions, et à la vie trépidante d’Hollywood ?','Damien Chazelle'),(5,'Il a déjà tes yeux','il_a_deja_tes_yeux','Paul est marié à Sali. Tout irait pour le mieux s’ils arrivaient à avoir un enfant. Jusqu\'au jour où Sali reçoit l\'appel qu\'ils attendent depuis si longtemps : leur dossier d\'adoption est approuvé. Il est adorable, il a 6 mois, il s\'appelle Benjamin. Il est blond aux yeux bleus et il est blanc. Eux… sont noirs !','Lucien Jean-Baptiste'),(9,'le nom d\'un autre film','le_nom_dun_autre_film','Bonjour','réalisateur deux'),(10,'une film romance','une_film_romance','romance','romance'),(11,'Le film d\'antony','le_film_dantony','Antony et son cheval','antony'),(12,'Le film de dinh','le_film_de_dinh','dinhatoir','Dinh'),(13,'Le film de dinh','le_film_de_dinh','dinhatoir','Dinh'),(14,'Le film de dinh','le_film_de_dinh','dinhatoir','Dinh');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mails`
--

DROP TABLE IF EXISTS `mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `content` mediumtext NOT NULL,
  `lu` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mails`
--

LOCK TABLES `mails` WRITE;
/*!40000 ALTER TABLE `mails` DISABLE KEYS */;
INSERT INTO `mails` VALUES (1,'Test','Test','Test',0),(2,'Dylan','dylan@dylan.fr','Test',0),(3,'Dylab','dylan@dylan.fr','lololol',1),(4,'Test2','test2@test.fr','test2mdr',1),(5,'test avec view more','viewmore@more.fr','fefezfez fezfezfzefez efezfezz grg gergregr grr htrh guhuirehg ghghreg hregrhgruir r ehreughreghr eguireh guirehgr h rghre guhreg rehgrug hre rhg hreghrekjg hre ighregregregrehg re gbrghreg lrehgr jknlhvnv dsh ijb hv',1);
/*!40000 ALTER TABLE `mails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191)),
  KEY `password_resets_token_index` (`token`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.fr','$2y$10$/kikxvBaphp6PMeZWBVf0uoeNjkB0XWFZEPC5wSqBLYvhpLOK7cO.','tUn4bPhMxnTGlus7dBX2PuvKiJuYxLmxRV7Yr928rFWI6ojhTkpIyWiHayTM','2017-02-09 14:28:31','2017-02-09 14:28:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-10 15:00:20
