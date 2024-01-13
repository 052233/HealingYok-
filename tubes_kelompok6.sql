-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tubes_kelompok6
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES (1,'ari@gmail.co.id','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','adminweb','081222229999','admin'),(14,'123@123','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855','adminweb123','123123','user'),(18,'nicholas@gmail.com','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','adminweb1','12345','user'),(20,'asdads@adsda.com','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5','adminweba','12345','user'),(23,'122123123@123123','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','sadasdasdaasd','9090','user'),(26,'basirun@gmail.co','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','ari123123','08122222222','user'),(27,'ar1@gmail','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','li','12343','user'),(28,'asdads@adsda','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','admi2nweb123','12345','user'),(29,'arigamaliel@gmail.com','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','ari05','2we32e2','user'),(31,'gamaliel@gmail','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','awsda','13124214','user'),(32,'gama@gmail.com','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','gama','08665785','user');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` VALUES (1,'adminweb','ari@gmail.co.id','asdadsasdasd','adasdasdadasdasd'),(2,'adminweb','ari@gmail.co.id','aljsdalds;jkasd','bau'),(4,'Ari11','ari00@gmail.com','apa','bagus'),(5,'ari05','arigamaliel@gmail.com','coba','bagus'),(6,'gama','gama@gmail.com','tes','baik');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) NOT NULL,
  `destinasi` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'sibolangit1','sibolangit','1.200.000','Paket travel ke Sibolangit selama 3 hari'),(2,'sibolangit 2','sibolangit','400.000','Paket travel satu hari ke Sibolangit'),(3,'Hiking Sibayak','Sibayak','500.000','Pendakian ke puncak Sibayak'),(5,'Penginapan 1 hari','Medan','200.000','Murah'),(6,'Penginapan 1 hari','Tarutung','300.000','Bagus'),(7,'VIlla','Tarutung','1.000.000','Bagus'),(8,'Hotel','Sibolangit','1.000.000','baik');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tglpergi` date NOT NULL,
  `paket` varchar(50) NOT NULL,
  `destinasi` varchar(30) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'belum dikonfirmasi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan`
--

LOCK TABLES `pesanan` WRITE;
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` VALUES (117,'adminweb','Budi','081222229999','2023-12-28','sibolangit1','Sibolangit','1.200.000','Sudah Dikonfirmasi'),(118,'adminweb','Iwan','081222229999','2023-12-14','Hiking Sibayak','Sibayak','500.000','Sudah Dikonfirmasi'),(119,'adminweb','Budi','081222229999','2023-12-12','Hiking Sibayak','Sibayak','500.000','Sudah Dikonfirmasi'),(132,'li','ari','12343','2023-12-13','Penginapan 1 hari','Medan','200.000','Sudah Dikonfirmasi'),(133,'ari123123','Budi','08122222222','2023-11-29','Hiking Sibayak','Sibayak','500.000','belum dikonfirmasi'),(135,'ari05','Ari Gamaliel','2we32e2','2023-12-11','Penginapan 1 hari','Medan','200.000','belum dikonfirmasi'),(136,'ari05','Ari Gamaliel','2we32e2','2023-12-11','Penginapan 1 hari','Medan','200.000','Sudah Dikonfirmasi'),(137,'gama','Ari Manohan','08665785','2023-12-22','sibolangit1','Sibolangit','1.200.000','Sudah Dikonfirmasi'),(139,'adminweb','1','081222229999','0000-00-00','Penginapan 1 hari','Medan','200.000','belum dikonfirmasi'),(140,'adminweb1','Budi','12345','2023-12-05','Hotel','Sibolangit','1.000.000','belum dikonfirmasi'),(142,'adminweb1','Budi','12345','2023-12-21','Penginapan 1 hari','Tarutung','300.000','belum dikonfirmasi');
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-23 20:09:37
