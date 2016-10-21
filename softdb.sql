-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: softmanage
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `asiafont_up`
--

DROP TABLE IF EXISTS `asiafont_up`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asiafont_up` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `asiafont2008` varchar(15) DEFAULT NULL,
  `integrated_Package` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asiafont_up`
--

LOCK TABLES `asiafont_up` WRITE;
/*!40000 ALTER TABLE `asiafont_up` DISABLE KEYS */;
INSERT INTO `asiafont_up` VALUES (1,'WKTTF2008-24736',''),(2,'WKTTF2008-24736','\r'),(3,'WKTTF2008-24736','\r'),(4,'WKTTF2008-24736','\r'),(5,'WKTTF2008-24736','\r'),(6,'WKTTF2008-24737','\r'),(7,'WKTTF2008-24737','\r'),(8,'WKTTF2008-24737','\r');
/*!40000 ALTER TABLE `asiafont_up` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `id_address` varchar(40) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_adobe`
--

DROP TABLE IF EXISTS `g_adobe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_adobe` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `photoshop` varchar(50) DEFAULT NULL,
  `illustrator` varchar(50) DEFAULT NULL,
  `acrobat` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `adobe_product` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COMMENT='전산_어도비';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_adobe`
--

LOCK TABLES `g_adobe` WRITE;
/*!40000 ALTER TABLE `g_adobe` DISABLE KEYS */;
INSERT INTO `g_adobe` VALUES (13,16,'','','','','영구','','Adobe Design Standard CS6\r\n1543-1007-0926-3322-8577-3250'),(74,55,NULL,NULL,NULL,'','영구','ID: nzine0321@nzine.co.kr\r\nPW: !cjfwls0321','Adobe Design Standard CS6\r\n1543-1505-9384-7342-5915-7301'),(75,56,NULL,NULL,NULL,'','영구','ID: nzine0321@nzine.co.kr\r\npw: !cjfwls0321','Adobe Design Standard CS6\r\n1543-1505-9384-7342-5915-7301'),(67,18,NULL,NULL,NULL,'','','','Adobe Design Standard CS6\r\n1543-1505-9384-7342-5915-7301'),(68,21,NULL,NULL,NULL,'','','','Adobe Design Standard CS6\r\n1118-1000-4627-8070-6640-7698'),(69,21,NULL,NULL,NULL,'','영구','ID: nzine0321@nzine.co.kr\r\nPW: !cjfwls0321','Adobe Design Standard CS6\r\n1543-1505-9384-7342-5915-7301'),(70,22,NULL,NULL,NULL,'','','','Adobe Design Standard CS6\r\n1543-1505-9384-7342-5915-7301'),(72,70,NULL,NULL,NULL,'','영구','ID: nzine0321@nzine.co.kr\r\nPW: !cjfwls0321','Adobe Design Standard CS6\r\n1543-1505-9384-7342-5915-7301'),(73,30,NULL,NULL,NULL,'','','','Adobe Design and Web Premium CS6\r\n9014-8700-2366-4691-3980');
/*!40000 ALTER TABLE `g_adobe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_cell`
--

DROP TABLE IF EXISTS `g_cell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_cell` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COMMENT='전산_전화기';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_cell`
--

LOCK TABLES `g_cell` WRITE;
/*!40000 ALTER TABLE `g_cell` DISABLE KEYS */;
INSERT INTO `g_cell` VALUES (73,9,'IP335S',NULL,NULL,'','2016.02.24'),(8,11,'IP335S','','','','2016.02.24'),(9,12,'IP700S','','','','2016.02.24'),(10,13,'IP335S','','','','2016.02.24'),(11,14,'IP335S','','','','2016.02.24'),(12,15,'IP335S','','','','2016.02.24'),(13,16,'IP335S','','','','2016.02.24'),(14,17,'IP335S','','','','2016.02.24'),(15,18,'IP335S','','','','2016.02.24'),(16,19,'IP335S','','','','2016.02.24'),(17,20,'IP335S','','','','2016.05.09'),(18,21,'IP335S',NULL,NULL,'','2016.02.24'),(19,22,'IP335S',NULL,NULL,'','2016.02.24'),(21,24,'IP700S','','','','2016.02.24'),(22,25,'IP335S','','','','2016.02.24'),(23,26,'IP335S','','','','2016.02.24'),(24,27,'IP335S','','','','2016.05.09'),(25,28,'IP335S','','','','2016.02.24'),(26,29,'IP335S','','','','2016.02.24'),(27,30,'IP335S','','','','2016.02.24'),(28,31,'IP335S','','','','2016.02.24'),(29,32,'IP335S','','','','2016.02.24'),(30,33,'IP335S','','','','2016.02.24'),(31,34,'IP335S','','','','2016.02.24'),(32,35,'IP335S','','','','2016.02.24'),(33,36,'IP335S','','','','2016.02.24'),(35,38,'IP335S','','','','2016.02.24'),(36,39,'IP335S','','','','2016.02.24'),(37,40,'IP335S','','','','2016.02.24'),(38,41,'IP335S','','','','2016.02.24'),(39,42,'IP335S','','','','2016.02.24'),(40,43,'IP335S','','','','2016.02.24'),(41,44,'IP335S','','','','2016.02.24'),(42,45,'IP335S','','','','2016.02.24'),(43,46,'IP335S','','','','2016.02.24'),(44,47,'IP335S','','','','2016.02.24'),(45,48,'IP335S','','','','2016.02.24'),(46,49,'IP335S','','','','2016.02.24'),(47,50,'IP335S','','','','2016.02.24'),(48,51,'IP335S','','','','2016.02.24'),(49,52,'IP335S','','','','2016.02.24'),(50,53,'IP335S','','','','2016.02.24'),(51,54,'IP335S','','','','2016.02.24'),(52,55,'IP335S',NULL,NULL,'','2016.02.24'),(53,56,'IP335S',NULL,NULL,'','2016.02.24'),(55,58,'IP700S','','','','2016.02.24'),(56,59,'IP335S','','','','2016.02.24'),(72,9,'IP700S',NULL,NULL,'','2016.02.24'),(74,10,'IP700S',NULL,NULL,'','2016.02.24'),(75,70,'IP335S',NULL,NULL,'','2016.05.09'),(76,38,'IP335S',NULL,NULL,'','2016.02.24'),(77,59,'IP335S',NULL,NULL,'','2016.02.24');
/*!40000 ALTER TABLE `g_cell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_compress`
--

DROP TABLE IF EXISTS `g_compress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_compress` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `alzip` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COMMENT='전산_압축프로그램';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_compress`
--

LOCK TABLES `g_compress` WRITE;
/*!40000 ALTER TABLE `g_compress` DISABLE KEYS */;
INSERT INTO `g_compress` VALUES (1,4,'알집 6.0','AS223','영구');
/*!40000 ALTER TABLE `g_compress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_font`
--

DROP TABLE IF EXISTS `g_font`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_font` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `asia` varchar(50) DEFAULT NULL,
  `a_gian_num` varchar(30) DEFAULT NULL,
  `a_duration` varchar(30) DEFAULT NULL,
  `mukhyang` varchar(50) DEFAULT NULL,
  `m_gian_num` varchar(30) DEFAULT NULL,
  `m_duration` varchar(30) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COMMENT='전산_font';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_font`
--

LOCK TABLES `g_font` WRITE;
/*!40000 ALTER TABLE `g_font` DISABLE KEYS */;
INSERT INTO `g_font` VALUES (71,56,'아시아폰트 TTF 통합패키지 398\r\nWTP01-C3C0-3N7ZLL','영업지원-201602-05','영구','','','',NULL),(67,21,'아시아폰트','영업지원-201602-05','영구','','','',NULL),(69,70,'아시아폰트 TTF 통합패키지 398\r\nWTP01-D3C0-VTVZWR','영업지원-201602-05','영구','','','',NULL),(70,55,'아시아폰트 TTF 통합패키지 398\r\nWTP01-F3C0-1CCZW5','영업지원-201602-05','영구','묵향4\r\n2734-0698-1834-6204','','영구',NULL);
/*!40000 ALTER TABLE `g_font` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_gs`
--

DROP TABLE IF EXISTS `g_gs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_gs` (
  `idx` int(15) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(25) DEFAULT NULL,
  `user_group` varchar(25) DEFAULT NULL,
  `user_grade` varchar(20) DEFAULT NULL,
  `user_number` int(15) DEFAULT NULL,
  `group_key` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COMMENT='경영지원본부';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_gs`
--

LOCK TABLES `g_gs` WRITE;
/*!40000 ALTER TABLE `g_gs` DISABLE KEYS */;
INSERT INTO `g_gs` VALUES (17,'박현숙','','경영지원본부','대리',7740,'gs'),(15,'황익주','','경영지원본부','부장',7788,'gs'),(16,'이승민','','경영지원본부 영업지원팀','차장',7777,'gs'),(9,'황승진','','경영지원팀','경영지원 본부장',7801,'gs'),(10,'곽수정','','경영지원팀','팀장',7822,'gs'),(11,'엄주철','','경영지원팀','과장',7880,'gs'),(12,'박수현','','경영지원팀','사원',7762,'gs'),(13,'이영우','','경영지원팀','사원',7763,'gs'),(14,'최영옥','','경영지원팀','사진매물',7758,'gs'),(18,'윤철진','','R&D사업팀','대리',7773,'gs'),(19,'장근식','','R&D사업팀','사원',7774,'gs'),(20,'홍바울','','R&D사업팀','사원',7778,'gs'),(21,'류정미','','R&D사업팀','대리',7888,'gs'),(22,'이영은(퇴사)','','R&D사업팀','사원',7887,'gs'),(23,'최은정','','R&D사업팀','사원',7779,'gs'),(24,'이순자','','영업1팀','부서장/팀장',7805,'ad1'),(25,'하미옥','','영업1팀','대리',7802,'ad1'),(26,'변길주','','영업1팀','사원',7882,'ad1'),(27,'김민','','영업1팀','사원',7834,'ad1'),(28,'송인규','','영업1팀','사원',7809,'ad1'),(29,'전창우','','영업1팀','사원',7810,'ad1'),(30,'김동회','','영업1팀','사원',7836,'ad1'),(31,'나효순','','영업2팀','팀장',7814,'ad1'),(32,'김병철','','영업2팀','사원',7804,'ad1'),(33,'박희금','','영업2팀','사원',7815,'ad1'),(34,'문현민','','영업2팀','사원',7811,'ad1'),(35,'박혜영','','영업2팀','사원',7816,'ad1'),(36,'김상열','','영업2팀','사원',7806,'ad1'),(38,'유은지','','영업부 지원','사원',7734,'ad1'),(39,'장현정','','영업부 지원','사원',7732,'ad1'),(40,'김성숙','','인바운드','부서장/팀장',7703,'ad2'),(41,'임성희','','인바운드','대리',7714,'ad2'),(42,'오상희','','인바운드','사원',7719,'ad2'),(43,'이계현','','인바운드','사원',7715,'ad2'),(44,'오연희','','인바운드','사원',7704,'ad2'),(45,'양지영','','인바운드','사원',7711,'ad2'),(46,'이민희','','인바운드','사원',7729,'ad2'),(47,'박미영','','인바운드','사원',7713,'ad2'),(48,'황미자','','인바운드','대리',7708,'ad2'),(49,'윤미영','','인바운드','과장',7707,'ad2'),(50,'김승숙','','인바운드','대리',7706,'ad2'),(51,'김진애','','리크루트팀','팀장',7807,'em_edit'),(52,'김은비','','리크루트팀','사원',7730,'em_edit'),(53,'이혜영','','리크루트팀','사원',7731,'em_edit'),(54,'민지희','','리크루트팀','사원',7709,'em_edit'),(55,'백승경','','편집','대리',7833,'em_edit'),(56,'김현영','','편집','사원',7781,'em_edit'),(57,'황주영','','편집','사원',7832,'em_edit'),(58,'장훈','','여행사업팀','팀장',7799,'tv'),(59,'유미라','','여행사업팀','사원',7747,'tv'),(60,'나경희','','여행사업팀','사원',7745,'tv'),(70,'송광헌','','디자인','실장',7776,'gs');
/*!40000 ALTER TABLE `g_gs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_hangul`
--

DROP TABLE IF EXISTS `g_hangul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_hangul` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_number` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COMMENT='전산_사용한글';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_hangul`
--

LOCK TABLES `g_hangul` WRITE;
/*!40000 ALTER TABLE `g_hangul` DISABLE KEYS */;
INSERT INTO `g_hangul` VALUES (6,9,'한글2010 SE+\r\n17011119-000768413','',''),(7,10,'한글2010 SE+\r\n17011119-000768413','',''),(8,11,'한글2010 SE+\r\n17011119-000768413','',''),(9,12,'한글2010 SE+\r\n17011271-239382089','',''),(10,13,'한글2010 SE+\r\n17011119-000768413','',''),(11,14,'한글2010 SE+\r\n17011119-000768413','',''),(12,15,'한글2010 SE+\r\n17011119-000768413','',''),(13,16,'한글2010 SE+\r\n17011119-000768413','',''),(14,17,'한글2010 SE+\r\n17011119-000768413','',''),(15,18,'한글2010 SE+\r\n17011119-000768413','',''),(16,19,'한글2010 SE+\r\n17011119-000768413','',''),(21,24,'한글2010 SE+\r\n17011119-000768413','',''),(22,25,'한글2010 SE+\r\n17011119-000768413','',''),(23,26,'한글2007\r\n16271119-000493224','',''),(24,27,'한글2010 SE+\r\n17011119-000768413','',''),(25,28,'한글2007\r\n16271119-000493224','',''),(26,29,'한글2007\r\n16271119-000493224','',''),(27,30,'한글2007\r\n16271119-000493224','',''),(28,31,'한글2010 SE+\r\n17011119-000768413','',''),(29,32,'한글2007\r\n16271119-000493224','',''),(30,33,'한글2007\r\n16271119-000493224','',''),(31,34,'한글2007\r\n16271119-000493224','',''),(32,35,'한글2007\r\n16271119-000493224','',''),(33,36,'한글2007\r\n16271211-063048230','',''),(35,38,'한글2010 SE+\r\n17011119-000768413','',''),(36,39,'한글2010 SE+\r\n17011119-000768413','',''),(37,40,'한글2007\r\n16271119-000493224','',''),(38,41,'한글2010 SE+\r\n17011119-000768413','',''),(39,42,'한글2010 SE+\r\n17011119-000768413','',''),(40,43,'한글2010 SE+\r\n17011119-000768413','',''),(41,44,'한글2010 SE+\r\n17011119-000768413','',''),(42,45,'한글2010 SE+\r\n17011119-000768413','',''),(43,46,'한글2010 SE+\r\n17011119-000768413','',''),(69,9,'한글2010 SE+\r\n17011119-000768413','',''),(45,48,'한글2010 SE+\r\n17011119-000768413','',''),(46,49,'한글2010 SE+\r\n17011119-000768413','',''),(47,50,'한글2010 SE+\r\n17011119-000768413','',''),(48,51,'한글2010 SE+\r\n17011119-000768413','',''),(49,52,'한글2010 SE+\r\n17011119-000768413','',''),(50,53,'한글2010 SE+\r\n17011119-000768413','',''),(51,54,'한글2010 SE+\r\n17011119-000768413','',''),(76,56,'한글2010 SE+\r\n17011119-000768413','',''),(55,58,'한글2010 SE+\r\n17011119-000768413','',''),(56,59,'한글2010 SE+\r\n17011119-000663086','',''),(67,24,'한글2007\r\n16271119-000493224','',''),(68,47,'한글2010 SE+\r\n17011119-000768413','',''),(70,21,'한글2010 SE+\r\n17011119-000768413','',''),(71,22,'한글2010 SE+\r\n17011119-000768413','',''),(78,20,'한글2010 SE+\r\n17011119-000768413','',''),(73,70,'한글2010 SE+\r\n17011119-000663086','',''),(74,55,'한글2010 SE+\r\n17011119-000768413','',''),(75,55,'한글2010 SE+\r\n17011119-000663086','',''),(77,56,'한글2010 SE+\r\n17011119-000663086','','');
/*!40000 ALTER TABLE `g_hangul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_headset`
--

DROP TABLE IF EXISTS `g_headset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_headset` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COMMENT='전산_헤드셋';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_headset`
--

LOCK TABLES `g_headset` WRITE;
/*!40000 ALTER TABLE `g_headset` DISABLE KEYS */;
INSERT INTO `g_headset` VALUES (37,40,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(38,41,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(39,42,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(40,43,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(41,44,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(42,45,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(43,46,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(44,47,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(45,48,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(46,49,'Jabra GN2110','','','영업지원-201602-04','2016.03.03'),(47,50,'Jabra GN2110','','','영업지원-201602-04','2016.03.03');
/*!40000 ALTER TABLE `g_headset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_keyboard`
--

DROP TABLE IF EXISTS `g_keyboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_keyboard` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COMMENT='전산_키보드';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_keyboard`
--

LOCK TABLES `g_keyboard` WRITE;
/*!40000 ALTER TABLE `g_keyboard` DISABLE KEYS */;
INSERT INTO `g_keyboard` VALUES (1,4,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2015.11','영업지원-201601-03','2016.02.15'),(16,19,'SKG-3000UB','SNJ-SKG-3000UB(B)','2012.04','',''),(69,40,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2016년6월','','2016년10월'),(70,21,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2016.01','영업지원-201604-05','2016.04.25'),(75,20,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2016.01','영업지원-201604-04','2016.04.08'),(72,70,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2015.11','영업지원-201601-03','2016.02.15'),(73,55,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2015.11','영업지원-201601-03','2016.02.15'),(74,56,'SKP-800B','MSIP-REI-SNJ-SKP-800B1','2015.11','영업지원-201601-03','2016.02.15');
/*!40000 ALTER TABLE `g_keyboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_moniter`
--

DROP TABLE IF EXISTS `g_moniter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_moniter` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `model_code` varchar(50) DEFAULT NULL,
  `model_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `soft_num` varchar(50) DEFAULT NULL,
  `gian_num` varchar(50) DEFAULT NULL,
  `buy_day` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COMMENT='전산_모니터';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_moniter`
--

LOCK TABLES `g_moniter` WRITE;
/*!40000 ALTER TABLE `g_moniter` DISABLE KEYS */;
INSERT INTO `g_moniter` VALUES (1,1,'삼성전자(주)','삼성모니터','DSKVJRJNVNRI','S-M-12038','SJFK3NMV83973','2011.09','LSFN39842082N','AS2023','2014.12'),(5,4,'삼성전자(주)','본체','모델코드','모델명','식별부호','2010.12','1235481263','A54','2015.05'),(10,9,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2015.01','0KW4HTMG102546M','',''),(11,10,'삼성전자㈜','CX2243BW','CX2243BWEQAKOR','MY22WS','SEC-MY22WS(B)','2009.02','N943HMAS200250K','',''),(12,11,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601798P','',''),(13,12,'삼성전자㈜','S20B300B','LS20B300BSC/CR','LS20B300','KCC-REM-SEC-LS20B300','2012.03','ZUF3HTLC304447E','',''),(14,13,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601811B','',''),(15,14,'삼성전자㈜','CX743B','CX743B-EQA/KOR','MY17PS','SEC-MY17PS(B)','2008.09','N940HVCQ912787R','',''),(16,15,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602239L','',''),(17,16,'삼성전자㈜','CX2243BW','CX2243BWEQAKOR','MY22WS','SEC-MY22WS(B)','2009.02','N943HMAS200046V','',''),(19,18,'삼성전자㈜','S27E310H','LS27E310HSE/CR','LS27E310','MSIP-REM-SEC-LS27E310','2015.10','ZZE8H4ZGA01557K','영업지원-201601-03',''),(20,19,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2016.01','ZZCKH4ZH101089H','','2016.02.15'),(21,20,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2016.02','ZZCKH4LH200179A','','2016.5.25'),(23,22,'삼성전자㈜','S27E310H','LS27E310HSE/CR','LS27E310','MSIP-REM-SEC-LS27E310','2015.10월','ZZE8H4ZGA03068J','영업지원-201601-03','2016.02.15'),(104,70,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2016.02','ZZCKH4ZH201150Z','영업지원-201604-04','2016.04.08'),(25,24,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602242X','',''),(26,25,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602244E','',''),(27,26,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602540W','',''),(28,27,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602566W','',''),(29,28,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602562R','',''),(30,29,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602541V','',''),(31,30,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601807E','',''),(32,31,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602563H','',''),(33,32,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602245F','',''),(34,33,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602567V','',''),(35,34,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.11','V8C1H9NBB00499Y','',''),(36,35,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602561F','',''),(37,36,'삼성전자㈜','CX2243BW','CX2243BWEQAKOR','MY22WS','SEC-MY22WS(B)','2009.02','N943HMAS200231N','',''),(39,38,'삼성전자㈜','S20B300B','LS20B300BSC/CR','LS20B300','KCC-REM-SEC-LS20B300','2012.04','ZUF3HTLC400198J','',''),(40,39,'삼성전자㈜','S20B300B','LS20B300BSC/CR','LS20B300','KCC-REM-SEC-LS20B300','2012.04','ZUF3HTLC400543R','',''),(41,40,'삼성전자㈜','CX2243BW','CX2243BWEQAKOR','MY22WS','SEC-MY22WS(B)','2009.02','N943HMAS200434N','',''),(42,41,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601752R','',''),(43,42,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601789E','',''),(44,43,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602564J','',''),(45,44,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601788N','',''),(46,45,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601750E','',''),(47,46,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601812K','',''),(48,47,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601851X','',''),(49,48,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602240P','',''),(50,49,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601786D','',''),(51,50,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601800Z','',''),(52,51,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC600822K','',''),(53,52,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602246R','',''),(54,53,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601946H','',''),(55,54,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601441Y','',''),(56,55,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2015.02','0KW4HTMG205294Z','',''),(57,56,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2016.02','ZZCKH4ZH200629V','',''),(59,58,'','','','','LGE-DMLGA51 (B)','2011.12','112QCBD558189','',''),(60,59,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2011.06','V8C1H9NB602241D','',''),(107,21,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2015.02','0KW4HTMG205477E','',''),(100,10,'삼성전자㈜','76B [R] D','76B-KS/KOR','GH17PS','E-B012-05-1445(B)','2007.02','N720HVFP206495N','',''),(106,20,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2016.02','ZZCKH4LH200018B','','2016.5.25'),(99,17,'삼성전자㈜','EX2020X','LC-EX2020SF/KR','CB20WS','SEC-CB20WS(B)','2012.06','V8C1H4LC601787X','',''),(101,12,'삼성전자㈜','CX702B','CX702B-TS4/KOR','GH17PS','E-B012-05-1445(B)','2007.12','N787HVGPC20210W','',''),(102,18,'삼성전자㈜','CX2243BW','CX2243BWEAKOR','MY22WS','SEC-MY22WS(B)','2009.02','N943HMAS200249J','',''),(103,19,'삼성전자㈜','S24D340H','LS24D340HSA/CR','LS24D340','MSIP-REM-SEC-LS24D300','2015.02','0KW4HTMG205274V','',''),(105,55,'삼성전자㈜','76B [R] D','76B-KS/KOR','GH17PS','E-B012-05-1445(B)','2007.02','N720HVFP206491A','','');
/*!40000 ALTER TABLE `g_moniter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_mouse`
--

DROP TABLE IF EXISTS `g_mouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_mouse` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COMMENT='전산_키보드';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_mouse`
--

LOCK TABLES `g_mouse` WRITE;
/*!40000 ALTER TABLE `g_mouse` DISABLE KEYS */;
INSERT INTO `g_mouse` VALUES (15,18,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2015.11','영업지원-201601-03','2016.02.15'),(24,27,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2016.01','영업지원-201604-05','2016.04.25'),(27,30,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2015.11','영업지원-201601-03','2016.02.15'),(33,36,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2016.01','영업지원-201604-05','2016.04.25'),(51,54,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2015.11','영업지원-201601-03','2016.02.15'),(69,46,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2016년6월','','2016년10월'),(70,40,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2016년6월','','2016년10월'),(74,20,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2016.01','영업지원-201604-04','2016.04.08'),(72,70,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2015.11','영업지원-201601-03','2016.02.15'),(73,56,'SKP-800B','MSIP-REI-SNJ-SKP-800B2','2015.11','영업지원-201601-03','2016.02.15');
/*!40000 ALTER TABLE `g_mouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_ms`
--

DROP TABLE IF EXISTS `g_ms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_ms` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_number` varchar(100) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COMMENT='전산_사용msoffice';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_ms`
--

LOCK TABLES `g_ms` WRITE;
/*!40000 ALTER TABLE `g_ms` DISABLE KEYS */;
INSERT INTO `g_ms` VALUES (6,9,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(7,10,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(8,11,'MS-Office 2007\r\nB3VCK-YXC3B-9YF3T-4B3QP-WWTBY','',''),(9,12,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(10,13,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(11,14,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(12,15,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(13,16,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(15,18,'MS-Office Standard 2010\r\nHRCYV-TMKFB-CFK8P-V7QDQ-G','',''),(16,19,'MS-Office Standard 2010\r\nHRCYV-TMKFB-CFK8P-V7QDQ-G','',''),(21,24,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(22,25,'MS-Office 2007\r\nM86WF-FFKQ3-Y963M-WXR2H-TJ4FQ','',''),(23,26,'MS-Office 2007\r\nJRD38-PYV8B-YKD4T-JWP9P-CTV4Q','',''),(24,27,'MS-Office 2007\r\nVRF6F-P8P77-3GX3B-6FPMC-D9DJB','',''),(25,28,'MS-Office 2007\r\nGRC7V-969V3-R99YJ-JVT7Y-B7RFQ','',''),(26,29,'MS-Office 2007\r\nPWQ9Y-GWFVH-C2M2F-FJXHQ-VJCM3','',''),(27,30,'MS-Office 2007\r\nBYCVJ-BWJP8-JYFFW-CJJVX-WPKWD','',''),(28,31,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(29,32,'MS-Office 2007\r\nW2DYV-Y3RTH-7G67P-CJ3GJ-CM68D','',''),(30,33,'MS-Office 2007\r\nCMPKQ-GFT7M-WFGM6-XBFXV-WDTB3','',''),(31,34,'MS-Office 2007\r\nDGRCH-M6PPT-6VX3M-9DGKD-9T2M3','',''),(32,35,'MS-Office 2007\r\nFQDJF-G2TFF-W2W2V-38427-GY676','',''),(33,36,'MS-Office 2007\r\nRCD7Y-RFP8V-77RFH-MT3YJ-QG68D','',''),(35,38,'MS-Office 2007\r\nQYMFV-T433H-T8KTB-B93JG-C6QJD','',''),(36,39,'MS-Office 2007\r\nM6XKC-M7TWW-BG82J-D79PX-H9H4Q','',''),(37,40,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(38,41,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(39,42,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(40,43,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(41,44,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(42,45,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(43,46,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(44,47,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(45,48,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(46,49,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(47,50,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(48,51,'MS-Office 2007\r\nJCHDV-PD33J-32G64-P83DP-2774Q','',''),(49,52,'MS-Office 2007\r\nQGW7Y-KQHWR-G7CG3-K7YJ9-T2BRQ','',''),(50,53,'MS-Office 2007\r\nDX79C-FRBMY-88J86-P77HT-RYQJD','',''),(51,54,'MS-Office 2007\r\nMFQQM-D8KRW-QMY4D-YCMBJ-TTQJD','',''),(76,56,'MS-Office 2007\r\nW8B73-FMYCF-DHFKQ-3KM3G-GTV4Q','',''),(55,58,'MS-Office 2007\r\nD7PCX-MVJRH-7RR2B-X43W4-Y7WYY','',''),(56,59,'MS-Office 2007\r\nBDJWG-C9RPW-7QCVY-DD87T-V9H4M','',''),(67,24,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(68,17,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(69,9,'MS-Office Standard 2010\r\nV7QKV-4XVVR-XYV4D-F7DFM-8','',''),(70,21,'MS-Office 2007\r\nPVK96-M387P-RGGYB-HX9XF-6JTB3','',''),(71,22,'MS-Office 2007\r\nJM9VP-83KWM-WP846-CMH64-8VJ7W','',''),(78,20,'MS-Office Standard 2010\r\nHRCYV-TMKFB-CFK8P-V7QDQ-G','',''),(73,70,'MS-Office Standard 2010\r\nHRCYV-TMKFB-CFK8P-V7QDQ-G','',''),(74,55,'MS-Office 2007\r\nM2G3Y-BHJQ7-26H2J-HF6TY-W34FQ','',''),(75,55,'MS-Office Standard 2010\r\nHRCYV-TMKFB-CFK8P-V7QDQ-G','',''),(77,56,'MS-Office Standard 2010\r\nHRCYV-TMKFB-CFK8P-V7QDQ-G','','');
/*!40000 ALTER TABLE `g_ms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_pc`
--

DROP TABLE IF EXISTS `g_pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_pc` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `model_name` varchar(50) DEFAULT NULL,
  `model_code` varchar(50) DEFAULT NULL,
  `produce_number` varchar(50) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `g_cpu` varchar(30) DEFAULT NULL,
  `g_ram` varchar(30) DEFAULT NULL,
  `g_hdd_c` varchar(30) DEFAULT NULL,
  `g_hdd_d` varchar(30) DEFAULT NULL,
  `g_graphic` varchar(30) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COMMENT='전산_본체';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_pc`
--

LOCK TABLES `g_pc` WRITE;
/*!40000 ALTER TABLE `g_pc` DISABLE KEYS */;
INSERT INTO `g_pc` VALUES (1,4,'삼성전자(주)','슈퍼PC','FMVNJVKXCJK3','DSFJSKLFN34433','324243','3943204-FDSFSDJFL3','2012.04','i7','16GB','1TB','i7','Geforce','B-3231','2016.01'),(6,9,'삼성전자㈜','DB-P400','DB-P400-PA5E4S','HQ0D98DC4B001TX','BA68-04680B Rev 5.0','KCC-REM-SEC-DM-C610','2012.04','[인텔] i5-2500 3.30GHz','4GB','HDD 404GB','HDD 514GB','지포스 GT 530','',''),(7,10,'삼성전자㈜','DB-P400','DB-P400-PA512S','HQ0E98CC5A0019N','BA68-04680B Rev 5.0','KCC-REM-SEC-DM-C610','2012.05','[인텔] i5-2400 3.10GHz','4GB','HDD 181GB','HDD 271GB','지포스 GT 630','',''),(8,11,'삼성전자㈜','DB400T2A','DB400T2A-C216S','JBZT98CF5A0003R','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2014.05','[인텔] Pentium G2120 3.10GHz','4GB','HDD 181GB','HDD 271GB','','',''),(9,12,'삼성전자㈜','DM700T2A','DM700T2A-ASC7','HNMH9NEBC00110P','BA68-07131A Rev 5.0','KCC-REM-SEC-DM00T2A','2011.12','[인텔] 코어 i5-3570 3.40GHz','4GB','HDD 442GB','HDD 488GB','지포스 GT 630','',''),(10,13,'삼성전자㈜','DB400T3A','DB400T3A-A204S','JMLD98CFAA0003R','BA68-07985A Rev 4.0','MSIP-RMM-SEC-DB400T3A','2014.10','[인텔] Pentium G3440 3.30GHz','4GB','HDD 228GB','HDD 224GB','','',''),(11,14,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0037J','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.3GHz','4GB','HDD 181GB','HDD 271GB','','',''),(12,15,'삼성전자㈜','DM-V190','DM-V190-PA11','ZNJ59WAZ600613R','BA68-04084B Rev 3.0','SEC-DM-C200 (B)','2010년 6월','Pentium Dual-Core E5400 2.70GH','2GB','HDD 113GB','HDD 168GB','','',''),(13,16,'삼성전자㈜','DB-P400','DB-P400-PA5E4S','HQ0D98DC4B001CR','BA68-04680B Rev 5.0','KCC-REM-SEC-DM-C610','2012.04','[인텔]코어i5-2500 3.3GHZ','8GB','HDD 367GB','HDD 551GB','지포스 GT 620','',''),(14,17,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0023H','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.3GHz','4GB','HDD 181GB','HDD 271GB','','',''),(15,18,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','지포스 GTX960','영업지원-201604-04','2016.04.08'),(16,19,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','지포스 GTX960','',''),(17,20,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','지포스 GTX960','',''),(19,22,'삼성전자㈜','DB400T2A','DB-400T2A-A5E9S','J9Y298CCBA0008F','BA68-07985A Rev 3.0','KCC-REM-SEC-DB400T2A','2012년 11월','[인텔]i5-3330 3.0GHz','4GB','HDD 195GB','HDD 257GB','','',''),(78,23,'','','','','','','','','','','','','',''),(21,24,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003BL','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.3GHz','4GB','HDD 181GB','HDD 271GB','','',''),(22,25,'삼성전자㈜','DB400T2A','DB400T2A-C216S','JBZT98CF5A0006J','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2014년 5월','[인텔] Pentium G2120 3.1GHz','4GB','HDD 181GB','HDD 271GB','','',''),(23,26,'삼성전자㈜','DB400T2A','DB400T2A-C216S','JBZT98CF5A0004T','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2014년 5월','[인텔] Pentium G2120 3.1GHz','4GB','HDD 181GB','HDD 271GB','','',''),(24,27,'삼성전자㈜','DB400T3A','DB400T3A-A304S','JMLG98CG3B0010V','BA68-07985A Rev 4.0','MSIP-REM-SEC-DB400T3A','2015년 3월','[인텔] 코어 i3-4150 3.50GHz','4GB','HDD 209GB','HDD 235GB','지포스 GT610','',''),(25,28,'삼성전자㈜','DB-P100','DB-P100-AA02JC','Z9UY97AS300002Z','BA68-04680A Rev 1.0','','2009년 3월','[인텔] Core2 Quad CPU Q8200 2.33','4GB','HDD 119GB','','','',''),(26,29,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0035R','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(27,30,'삼성전자㈜','DB-P400','DB-P400-PA5E4S','HQ0D98DC4B1500A','','KCC-REM-SEC-DM-C610','2012년 4월','[인텔] 코어i5-2500 3.30GHz','4GB','HDD 367GB','HDD 551GB','지포스 GT 530','',''),(28,31,'삼성전자㈜','DB-P100','DB-P100-AA02JC','Z9UY97AS300010V','BA68-04680A Rev 1.0','','2009년 3월','[인텔] 코어2 Quad 2.33GHz','4GB','HDD 119GB','','지포스 GT 430','',''),(29,32,'삼성전자㈜','DB-P100','DB-P100-AA02JC','Z9UY97AS300006D','BA68-04680A Rev 1.0','','2009년 3월','[인텔] Core2 Quad CPU Q8200 2.33','4GB','HDD 119GB','','','',''),(30,33,'삼성전자㈜','DB-P100','DB-P100-AA02JC','Z9UY97AS300007X','BA68-04680A Rev 1.0','','2009년 3월','[인텔] 코어2 Quad 2.33GHz','4GB','HDD 119GB','지포스 GT 430','','',''),(31,34,'삼성전자㈜','DB-P100','DB-P100-AA02JC','Z9UY97AS300009E','','','2009년 3월','[인텔] 코어2 Quad 2.33GHz','4GB','HDD 119GB','','지포스 GT 520','',''),(32,35,'삼성전자㈜','DB400T2A','DB400T2A-C216S','JBZT98CF5A0008N','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2014년 5월','[인텔] Pentium G2120 3.1GHz','4GB','HDD 181GB','HDD 271GB','','',''),(33,36,'삼성전자㈜','DB400T3A','DB400T3A-A204S','JMLD98CFAA000EJ','BA68-07985A Rev 4.0','MSIP-RMM-SEC-DB400T3A','2014년 10월','[인텔] Pentium G3440 3.3GHz','4GB','HDD 228GB','HDD 224GB','','',''),(35,38,'삼성전자㈜','DB-P400','DB-P400-PA512S','HQ0E98CC5A000KZ','BA68-04680B Rev 5.0','KCC-REM-SEC-DM-C610','2012년 5월','[인텔] 코어 i5-2400 3.10GHz','4GB','HDD 181GB','HDD 271GB','','',''),(36,39,'삼성전자㈜','DB-P400','DB-P400-PA512S','HQ0E98CC4A005XK','BA68-04680B Rev 5.0','KCC-REM-SEC-DM-C610','2012년 4월','[인텔] 코어 i5-2400 3.10GHz','4GB','HDD181GB','HDD 271GB','','',''),(37,40,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003AV','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(38,41,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003HA','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(39,42,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0003KD','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(40,43,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003JP','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(42,45,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003EK','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(43,46,'삼성전자㈜','DM-V190','DM-V190-PA11','ZNJ59WAZ600613R','BA68-04084B Rev 3.0','SEC-DM-C200 (B)','2010년 6월','Pentium Dual-Core E5400 2.70GH','2GB','HDD 113GB','HDD 168GB','','',''),(44,47,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0039W','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(45,48,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003CT','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(46,49,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0038M','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(47,50,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003DB','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(48,51,'삼성전자㈜','DB400T2A','DB400T2A-C216S','JBZT98CF5A000AY','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2014년 5월','[인텔] Pentium G2120 3.10GHz','4GB','HDD 181GB','HDD 271GB','','',''),(49,52,'삼성전자㈜','DB400T2A','DB400T2A-C216S','JBZT98CF5A0002A','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2014년 5월','[인텔] Pentium G2120 3.10GHz','4GB','HDD 181GB','HDD 271GB','','',''),(50,53,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0032N','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(51,54,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003MN','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(52,55,'삼성전자㈜','DB400T2A','DB400T2A-A5E9S','J9Y298CCBA000EW','BA68-07985A Rev 3.0','KCC-REM-SEC-DB400T2A','2012.11','[인텔] 코어 i5-3330 3.00GHz','3.48GB','HDD 195GB','HDD 257GB','지포스 GT620','',''),(53,56,'삼성전자㈜','DB400T2A','DB400T2A-A5E9S','J9Y298CCBA000DR','BA68-07985A Rev 3.0','KCC-REM-SEC-DB400T2A','2012년 11월','[인텔] 코어 i5-3330 3.00GHz','3.48GB','HDD 195GB','HDD 270GB','지포스 GT620','',''),(55,58,'엘지전자㈜','LGA51(노트북)','A530-PE15K','MEZ63476020','','','2011년 12월','[인텔] 코어 i7-2670QM 2.20GHz','8GB','HDD 296GB','HDD 282GB','','',''),(56,59,'삼성전자㈜','DB-P400','DB-P400-PA5E4S','HQ0D98DC4B001QA','BA68-04680B Rev 5.0','KCC-REM-SEC-DM-C610','2012년 4월','[인텔]코어i5-2500 3.30GHz','4GB','HDD 367GB','HDD 551GB','지포스 GT530','',''),(73,44,'삼성전자㈜','DB400T3A','DB400T3A-A304S','JMLG98CG3A001ZR','BA68-07985A Rev 4.0','MSIP-REM-SEC-DB400T3A','2015년 3월','[인텔] 코어i3-4150 3.50GHz','4GB','HDD229GB','HDD 223GB','HDD 223GB','',''),(74,24,'삼성(노트북)','NT-RV520','NT-RV520-S58L','S/N : HTKA91SC600172X','BA68-07369A 20','SEC-NT-RV411','2012년 6월','[인텔] 코어 i5-2450M 2.5GHz','8GB','HDD 150GB','HDD 295GB','HDD 295GB','지포스 GT 520M',''),(75,9,'삼성전자(주)/노트북','NT-RF511','NT-RF511-WT87','HKU193BBB00286E','BA68-06687A 20','SEC-NT-RF410 (B)','2011.11','[인텔] i7-2670QM 2.20GHz','8GB','HDD 364GB','HDD 546GB','HDD 546GB','',''),(76,12,'삼성전자㈜','DB400T2A','DB400T2A-A5E7S','J9Y098CDBA0003A','BA68-07985A Rev 4.0','KCC-REM-SEC-DB400T2A','2013.11','[인텔] 코어i7-2600 3.40GHz','16GB','1.84GB','891GB','891GB','ATI display adapter',''),(87,21,'삼성전자㈜','DB400T2A','DB400T2A-A5E9S','J9Y298CCBA0006Z','BA68-07985A Rev 3.0','KCC-REM-SEC-DB400T2A','2012.11','[인텔] 코어 i5-3330 3.00GHz','3.48GB','HDD 195GB','HDD 257GB','지포스 GT620','',''),(88,21,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','지포스 GTX960','영업지원-201601-03','2016.02.15'),(79,70,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','지포스 GTX960','영업지원-201601-03','2016.02.15'),(80,55,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','HDD 2TB','지포스 GTX960','영업지원-201601-03'),(81,56,'','','','','','','','[인텔]코어i7-6세대 6700(스카이레이크) 3.4G','32GB','SSD 256GB','HDD 2TB','HDD 2TB','지포스 GTX960','영업지원-201601-03');
/*!40000 ALTER TABLE `g_pc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_quark`
--

DROP TABLE IF EXISTS `g_quark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_quark` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_number` varchar(200) DEFAULT NULL,
  `font` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COMMENT='전산_Quark';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_quark`
--

LOCK TABLES `g_quark` WRITE;
/*!40000 ALTER TABLE `g_quark` DISABLE KEYS */;
INSERT INTO `g_quark` VALUES (1,4,'ㅋㅋ','333','33','3'),(74,56,'Quark 6.5k','','',''),(67,21,'Quark 6.5K','','',''),(68,21,'Quark2015 S/N : JQ50881414050\r\n제품설치코드 : 2C53GDKDQ52X482FBFKQA889CXBJYKQYKNUR35KAJVCGYKZ','세종서체\r\n1TNM-1TZC-N91R-QYFA','','영구'),(71,70,'Quark2015 S/N : JQ51601945817\r\n제품설치코드 : RTR1N762YQNK7X4WZHKFQQKVYCBAVPUG8C7ZYMHGKKSGUKG ','세종서체\r\nELQR-SYKG-FEGZ-D3XA','','영구'),(72,55,'Quark 6.5K','','',''),(73,55,'Quark2015 S/N : JQ51692124866\r\n제품설치코드 : 1X6AP487HAFVZUQV8ZENUVDCCBCZY8P3B9QMN1X3PGVPMR3','세종서체\r\nSLR3-5ZRG-YHOW-6BIV','','영구'),(75,56,'Quark2015 S/N : JQ50091381458\r\n제품설치코드 : SEPKX2FPXF4TDTG4H8A5P322HXW1DA9D9N78BEUCUH49MRA','세종서체\r\n11SU-LL8N-OY37-NNE1','','영구');
/*!40000 ALTER TABLE `g_quark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_security`
--

DROP TABLE IF EXISTS `g_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_security` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_number` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COMMENT='전산_사용보안프로그램';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_security`
--

LOCK TABLES `g_security` WRITE;
/*!40000 ALTER TABLE `g_security` DISABLE KEYS */;
INSERT INTO `g_security` VALUES (1,4,'카스퍼스키2016 4B18C4B0.key','',''),(6,9,'카스퍼스키2016\r\n4B18C4B0.key','',''),(7,10,'카스퍼스키2016\r\n4B18C4B0.key','',''),(8,11,'카스퍼스키2016\r\n4B18C4B0.key','',''),(9,12,'카스퍼스키2016\r\n4B18C4B0.key','',''),(10,13,'카스퍼스키2016\r\n4B18C4B0.key','',''),(11,14,'카스퍼스키2016\r\n4B18C4B0.key','',''),(12,15,'카스퍼스키2016\r\n4B18C4B0.key','',''),(13,16,'카스퍼스키2016\r\n4B18C4B0.key','',''),(14,17,'카스퍼스키2016\r\n4B18C4B0.key','',''),(15,18,'카스퍼스키2016\r\n4B18C4B0.key','',''),(16,19,'카스퍼스키2016\r\n4B18C4B0.key','',''),(21,24,'카스퍼스키2016\r\n4B18C4B0.key','',''),(22,25,'카스퍼스키2016\r\n4B18C4B2.key','',''),(23,26,'카스퍼스키2016\r\n4B18C4B3.key','',''),(24,27,'카스퍼스키2016\r\n4B18C4B17.key','',''),(25,28,'카스퍼스키2016\r\n4B18C4B6.key','',''),(26,29,'카스퍼스키2016\r\n4B18C4B9.key','',''),(27,30,'카스퍼스키2016\r\n4B18C4B5.key','',''),(28,31,'카스퍼스키2016\r\n4B18C4B0.key','',''),(29,32,'카스퍼스키2016\r\n4B18C4B4.key','',''),(30,33,'카스퍼스키2016\r\n4B18C4B5.key','',''),(31,34,'카스퍼스키2016\r\n4B18C4B7.key','',''),(32,35,'카스퍼스키2016\r\n4B18C4B8.key','',''),(33,36,'카스퍼스키2016\r\n4B18C4B7.key','',''),(35,38,'카스퍼스키2016\r\n4B18C4B9.key','',''),(36,39,'카스퍼스키2016\r\n4B18C4B9.key','',''),(37,40,'카스퍼스키2016\r\n4B18C4B9.key','',''),(38,41,'카스퍼스키2016\r\n4B18C4B13.key','',''),(39,42,'카스퍼스키2016\r\n4B18C4B15.key','',''),(40,43,'카스퍼스키2016\r\n4B18C4B16.key','',''),(41,44,'카스퍼스키2016\r\n4B18C4B20.key','',''),(42,45,'카스퍼스키2016\r\n4B18C4B21.key','',''),(43,46,'카스퍼스키2016\r\n4B18C4B22.key','',''),(44,47,'카스퍼스키2016\r\n4B18C4B17.key','',''),(45,48,'카스퍼스키2016\r\n4B18C4B9.key','',''),(46,49,'카스퍼스키2016\r\n4B18C4B10.key','',''),(47,50,'카스퍼스키2016\r\n4B18C4B11.key','',''),(48,51,'카스퍼스키2016\r\n4B18C4B23.key','',''),(49,52,'카스퍼스키2016\r\n4B18C4B25.key','',''),(50,53,'카스퍼스키2016\r\n4B18C4B26.key','',''),(51,54,'카스퍼스키2016\r\n4B18C4B24.key','',''),(76,56,'카스퍼스키2016\r\n4B18C4B9.key','',''),(55,58,'카스퍼스키2016\r\n4B18C4B27.key','',''),(56,59,'카스퍼스키2016\r\n4B18C4B27.key','',''),(67,24,'카스퍼스키2016\r\n4B18C4B0.key','',''),(68,9,'카스퍼스키2016\r\n4B18C4B0.key','',''),(69,21,'카스퍼스키2016\r\n4B18C4B0.key','',''),(70,22,'카스퍼스키2016\r\n4B18C4B0.key','',''),(78,20,'카스퍼스키2016\r\n4B18C4B0.key','',''),(72,70,'카스퍼스키2016\r\n4B18C4B0.key','',''),(73,55,'카스퍼스키2016\r\n4B18C4B9.key','',''),(75,55,'카스퍼스키2016\r\n4B18C4B0.key','',''),(77,56,'카스퍼스키2016\r\n4B18C4B0.key','','');
/*!40000 ALTER TABLE `g_security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_window`
--

DROP TABLE IF EXISTS `g_window`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_window` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_number` varchar(100) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COMMENT='전산_사용윈도우OS';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_window`
--

LOCK TABLES `g_window` WRITE;
/*!40000 ALTER TABLE `g_window` DISABLE KEYS */;
INSERT INTO `g_window` VALUES (7,10,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(8,11,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(9,12,'Windows 7 Home Premium\r\n83RTW-WCQQK-G4TDQ-VDVY4-XM','',''),(10,13,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(11,14,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(71,9,'Window10 Home\r YTMG3-N6DKC-DKB77-7M9GH-8HVX7','',''),(13,16,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(14,17,'Window7 Home Premium\r\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(15,18,'Window10\r\nX7D3N-YCGRC-FXQKQ-7DPXH-B7V24','',''),(70,15,'Window7 Home Premium\r\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(21,24,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(22,25,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(23,26,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(24,27,'Window7 Professional\r GMJQF-JC7VC-76HMH-M4RKY-V4','',''),(25,28,'Window7 Professional\r\n7RWT3-3P3RR-WXH3R-6FVBV-3YBV','',''),(26,29,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(27,30,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(28,31,'Window7 Home Premium\r H3RJK-33MYX-JB2M3-XGFV4-3J','',''),(29,32,'Window7 Home Premium\r\n6VXWM-923GC-8692Q-TP86P-GPDJ','',''),(30,33,'Window7 Home Premium K\r\nYMTFY-T3YBV-CF84G-DHFJW-2G','',''),(31,34,'Window7 Home Premium k\r\nK9V47-RY377-JCT47-8C964-7V','',''),(32,35,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(33,36,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(35,38,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(36,39,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(37,40,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(38,41,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(39,42,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(40,43,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(41,44,'Window7 Professional\r GMJQF-JC7VC-76HMH-M4RKY-V4','',''),(42,45,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(43,46,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(44,47,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(45,48,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(46,49,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(47,50,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(48,51,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(49,52,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(50,53,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(51,54,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(81,56,'window XP\r\nV9BG9-Q496K-4BXM7-RJCXG-QYGJT','',''),(55,58,'Window7 Home Premium\r 38GRR-KMG3D-BTP99-TC9G4-BB','',''),(56,59,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(69,24,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(68,19,'Window10\r\nTNFGR-HFCHC-3HMQR-B979F-6Q724','영업지원-201604-05','영구'),(72,9,'Window7 Home Premium\r\n\nCQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(73,12,'Window7 Home Premium\r  CQBVJ-9J697-PWB9R-4K7W4-2BT4J','',''),(74,21,'Window XP\r\nV9BG9-Q496K-4BXM7-RJCXG-QYGJT','',''),(75,21,'Window10\r\nG7M6N-HWHC7-FFPQJ-K23Q8-K2FC4','영업지원-201601-03','영구'),(76,22,'Window7 Home Premium K\r\nGMR2K-J6MRX-WJ98J-X72MT-3X','',''),(83,20,'Window10\r\n9V2RC-9NKGP-M6RGM-RQM3F-MWR4','영업지원-201604-05','영구'),(78,70,'Window10\r\n42NH3-GMVXR-673HM-VT2WJ-78RC4','영업지원-201601-03','영구'),(79,55,'window XP\r\nV9BG9-Q496K-4BXM7-RJCXG-QYGJT','',''),(80,55,'Window10\r\nC4P6K-NX238-QC4KC-282BM-88F9F','영업지원-201601-03','영구'),(82,56,'Window10\r\nPCG29-TDNB3-88RP3-YXC9Y-R6YP4','영업지원-201601-03','영구');
/*!40000 ALTER TABLE `g_window` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeonsan_cell`
--

DROP TABLE IF EXISTS `jeonsan_cell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeonsan_cell` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT 'NULL',
  `identify` varchar(50) DEFAULT 'NULL',
  `produce_ym` varchar(50) DEFAULT 'NULL',
  `gian_num` varchar(30) DEFAULT 'NULL',
  `buy_day` varchar(30) DEFAULT 'NULL',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeonsan_cell`
--

LOCK TABLES `jeonsan_cell` WRITE;
/*!40000 ALTER TABLE `jeonsan_cell` DISABLE KEYS */;
INSERT INTO `jeonsan_cell` VALUES (14,17,'IP335S','','','','2016.02.24');
/*!40000 ALTER TABLE `jeonsan_cell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeonsan_headset`
--

DROP TABLE IF EXISTS `jeonsan_headset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeonsan_headset` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT 'NULL',
  `identify` varchar(50) DEFAULT 'NULL',
  `produce_ym` varchar(50) DEFAULT 'NULL',
  `gian_num` varchar(30) DEFAULT 'NULL',
  `buy_day` varchar(30) DEFAULT 'NULL',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeonsan_headset`
--

LOCK TABLES `jeonsan_headset` WRITE;
/*!40000 ALTER TABLE `jeonsan_headset` DISABLE KEYS */;
INSERT INTO `jeonsan_headset` VALUES (43,46,'Jabra GN2110','','','영업지원-201602-04','2016.03.03');
/*!40000 ALTER TABLE `jeonsan_headset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeonsan_keyboard`
--

DROP TABLE IF EXISTS `jeonsan_keyboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeonsan_keyboard` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='전산실보관_키보드';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeonsan_keyboard`
--

LOCK TABLES `jeonsan_keyboard` WRITE;
/*!40000 ALTER TABLE `jeonsan_keyboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `jeonsan_keyboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeonsan_moniter`
--

DROP TABLE IF EXISTS `jeonsan_moniter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeonsan_moniter` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `model_code` varchar(50) DEFAULT NULL,
  `model_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `soft_num` varchar(50) DEFAULT NULL,
  `gian_num` varchar(50) DEFAULT NULL,
  `buy_day` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='전산실_보관_모니터';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeonsan_moniter`
--

LOCK TABLES `jeonsan_moniter` WRITE;
/*!40000 ALTER TABLE `jeonsan_moniter` DISABLE KEYS */;
/*!40000 ALTER TABLE `jeonsan_moniter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeonsan_mouse`
--

DROP TABLE IF EXISTS `jeonsan_mouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeonsan_mouse` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='전산실보관_마우스';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeonsan_mouse`
--

LOCK TABLES `jeonsan_mouse` WRITE;
/*!40000 ALTER TABLE `jeonsan_mouse` DISABLE KEYS */;
/*!40000 ALTER TABLE `jeonsan_mouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeonsan_pc`
--

DROP TABLE IF EXISTS `jeonsan_pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeonsan_pc` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `user_idx` int(15) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `model_name` varchar(50) DEFAULT NULL,
  `model_code` varchar(50) DEFAULT NULL,
  `produce_number` varchar(50) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `identify` varchar(50) DEFAULT NULL,
  `produce_ym` varchar(50) DEFAULT NULL,
  `g_cpu` varchar(30) DEFAULT NULL,
  `g_ram` varchar(30) DEFAULT NULL,
  `g_hdd_c` varchar(30) DEFAULT NULL,
  `g_hdd_d` varchar(30) DEFAULT NULL,
  `g_graphic` varchar(30) DEFAULT NULL,
  `gian_num` varchar(30) DEFAULT NULL,
  `buy_day` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COMMENT='전산실_보관_본체';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeonsan_pc`
--

LOCK TABLES `jeonsan_pc` WRITE;
/*!40000 ALTER TABLE `jeonsan_pc` DISABLE KEYS */;
INSERT INTO `jeonsan_pc` VALUES (21,24,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003BL','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.3GHz','4GB','HDD 181GB','HDD 271GB','','',''),(37,40,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003AV','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(38,41,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003HA','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(39,42,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0003KD','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(40,43,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003JP','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(42,45,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003EK','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(43,46,'삼성전자㈜','DM-V190','DM-V190-PA11','ZNJ59WAZ600613R','BA68-04084B Rev 3.0','SEC-DM-C200 (B)','2010년 6월','Pentium Dual-Core E5400 2.70GH','2GB','HDD 113GB','HDD 168GB','','',''),(44,47,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0039W','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(45,48,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003CT','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(46,49,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A0038M','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD181GB','HDD 271GB','','',''),(47,50,'삼성전자㈜','DB-P400','DB-P400-PC312S','HQ0J98CC7A003DB','BA68-07985A Rev 3.0','KCC-REM-SEC-DM-C610','2012년 7월','[인텔] 코어 i3-2120 3.30GHz','4GB','HDD 181GB','HDD 271GB','','',''),(73,44,'삼성전자㈜','DB400T3A','DB400T3A-A304S','JMLG98CG3A001ZR','BA68-07985A Rev 4.0','MSIP-REM-SEC-DB400T3A','2015년 3월','[인텔] 코어i3-4150 3.50GHz','4GB','HDD229GB','HDD 223GB','HDD 223GB','','');
/*!40000 ALTER TABLE `jeonsan_pc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kaspersky`
--

DROP TABLE IF EXISTS `kaspersky`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kaspersky` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `compatibility` varchar(50) DEFAULT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `sirial_num` varchar(200) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `license_numb` varchar(20) DEFAULT NULL,
  `keep_place` varchar(50) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kaspersky`
--

LOCK TABLES `kaspersky` WRITE;
/*!40000 ALTER TABLE `kaspersky` DISABLE KEYS */;
INSERT INTO `kaspersky` VALUES (1,'Kaspersky Antivirus for Win Workstation(50~99)','','한국카스퍼스키랩','PC 보안','√','2016.04.25~2018.04.2','','','','','\r'),(2,'Kaspersky','','한국카스퍼스키랩','Server','√','2016.04.25~2018.04.2','','','','여기','팩스서버'),(3,'Kaspersky Antivirus for Windows Server','','한국카스퍼스키랩','Server 보안','√','2016.04.25~2018.04.2','','','','','\r'),(4,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(5,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(6,'Kaspersky','','한국카스퍼스키랩','Server','√','2017.07.29~2019.07.2','','','','',''),(7,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(8,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(9,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(10,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(11,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(12,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(13,'Kaspersky Endpoint Security for Server','','한국카스퍼스키랩','Server 보안','√','2017.07.29~2019.07.2','','','','','\r'),(14,'Kaspersky Antivirus for Win Workstation(50~99)3','','','','','','','','','',''),(15,'2222','','','','','','','','','','');
/*!40000 ALTER TABLE `kaspersky` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_up`
--

DROP TABLE IF EXISTS `ms_up`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ms_up` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `office2003_pro` varchar(20) DEFAULT NULL,
  `office2007_pro` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_up`
--

LOCK TABLES `ms_up` WRITE;
/*!40000 ALTER TABLE `ms_up` DISABLE KEYS */;
INSERT INTO `ms_up` VALUES (1,'BD2YC-JB896-33F','BDJWG-C9RPW-7QCVY-DD'),(2,'BD2YC-JB896-CQF9C-4F','D7PCX-MVJRH-7RR2B-X4'),(3,'BD2YC-JB896-CQF9C-4F','B3VCK-YXC3B-9YF3T-4B'),(4,'BD2YC-JB896-CQF9C-4F','GCV28-9WRHX-3WJKP-4J'),(5,'BD2YC-JB896-CQF9C-4F','TQHJ2-KCP23-74CVV-GG'),(6,'BD2YC-JB896-CQF9C-4F','VRF6F-P8P77-3GX3B-6F'),(7,'B3RJ9-VCJW6-8FYCG-M8','KGHQP-HQ2PY-2HP2X-47'),(8,'B3RJ9-VCJW6-8FYCG-M8','G93XY-2MM3K-JKQ99-PM'),(9,'B3RJ9-VCJW6-8FYCG-M8','FV7RD-96TD4-Y8677-9D'),(10,'B3RJ9-VCJW6-8FYCG-M8','P397D-PYMWM-4MBMG-48'),(11,'B3RJ9-VCJW6-8FYCG-M8','F726W-VJ2RT-9DM6G-H7'),(12,'XF37319479','XU52192157599'),(13,'XF37330456','XU50911537837'),(14,'XF37342180','XU51652233016'),(15,'XF37895143','XU52280990697'),(16,'XF97738145','XU50321444728'),(17,'XF97740829','XU50801756539'),(18,'XF98576980','XU50821198570'),(19,'XF38236527','XU50390195095'),(20,'PF42607447','XU51090188222'),(21,'PF42607661','XU51031887624');
/*!40000 ALTER TABLE `ms_up` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `printer`
--

DROP TABLE IF EXISTS `printer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `printer` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `use_place` varchar(50) DEFAULT NULL,
  `term` varchar(50) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `color_a4` varchar(50) DEFAULT NULL,
  `color_a3` varchar(50) DEFAULT NULL,
  `black_a4` varchar(50) DEFAULT NULL,
  `black_a3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `printer`
--

LOCK TABLES `printer` WRITE;
/*!40000 ALTER TABLE `printer` DISABLE KEYS */;
INSERT INTO `printer` VALUES (1,'Samsung','1층','','150,000','15','30','100','200'),(2,'Samsung X4300 Series','2층','','150,000','15','30','100','200 \r'),(3,'Samsung SCX-8128NA (흑백)','3층','2016.03.28~2019.03.27','100,000','20','40','-','-\r'),(4,'Samsung X4300 Series','4층','2016.05.03~2018.05.02','150,000','15 ','30','100','200 \r');
/*!40000 ALTER TABLE `printer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quark_up`
--

DROP TABLE IF EXISTS `quark_up`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quark_up` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `quark3` varchar(100) DEFAULT NULL,
  `quark4` varchar(100) DEFAULT NULL,
  `quark8` varchar(100) DEFAULT NULL,
  `quark9` varchar(100) DEFAULT NULL,
  `quark2015` varchar(100) DEFAULT NULL,
  `quark2015_serial` varchar(100) DEFAULT NULL,
  `sejong_font` varchar(100) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quark_up`
--

LOCK TABLES `quark_up` WRITE;
/*!40000 ALTER TABLE `quark_up` DISABLE KEYS */;
INSERT INTO `quark_up` VALUES (1,'XF373194794','XU52192157599','KO50930112000','KO50361347104','JQ51692124866','1X6AP487HAFVZUQV8ZENUVDCCBCZY8P3B9QMN1X3PGVPMR3','SLR3-5ZRG-YHOW-6BIV','editor0111'),(2,'XF37330456','XU50911537837','KO51251441128','KO52110898714','JQ50192291816','EFFMTN7W8QKC6GFZECMJF3K87WUBQEE82VCTNN2YNPKCSTP ','O4NQ-YHF0-VC2J-UJ2P','예비\r'),(3,'XF37342180','XU51652233016','KO52182355665','KO52271113594','JQ50091381458','SEPKX2FPXF4TDTG4H8A5P322HXW1DA9D9N78BEUCUH49MRA','11SU-LL8N-OY37-NNE1','editor02\r'),(4,'XF37895143','XU52280990697','KO52131911724','KO50460496652','JQ52410065222','DEVDX8XJXB444R9YVZ74F67VY5UN43QSE3VNVYHT11U78TR ','AR4U-NMS4-QOPS-L2RG','editor03\r'),(5,'XF97738145','XU50321444728','KO50501215126','KO50640961027','JQ50881414050','2C53GDKDQ52X482FBFKQA889CXBJYKQYKNUR35KAJVCGYKZ','1TNM-1TZC-N91R-QYFA','editor04\r'),(6,'XF97740829','XU50801756539','KO51201205623','KO50872376020','JQ51601945817','RTR1N762YQNK7X4WZHKFQQKVYCBAVPUG8C7ZYMHGKKSGUKG ','ELQR-SYKG-FEGZ-D3XA','editor05\r'),(7,'XF98576980','XU50821198570','KO51240617231','KO51801873428','','','','\r'),(8,'XF38236527','XU50390195095','KO51011165684','KO50631538880','','','','\r'),(9,'PF42607447','XU51090188222','','','','','','\r'),(10,'PF42607661','XU51031887624','','','','','','\r');
/*!40000 ALTER TABLE `quark_up` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soft_keep`
--

DROP TABLE IF EXISTS `soft_keep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soft_keep` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `compatibility` varchar(50) DEFAULT NULL,
  `sirial_num` varchar(300) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `license_numb` varchar(50) DEFAULT NULL,
  `keep_place` varchar(50) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='소프트보관';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soft_keep`
--

LOCK TABLES `soft_keep` WRITE;
/*!40000 ALTER TABLE `soft_keep` DISABLE KEYS */;
INSERT INTO `soft_keep` VALUES (1,'QuarkXpress','4.1K','인큐브테크','편집디자인','','√','최초(3K) : PF42607447 / 변경(4.1K) : XU51090188222 \r\n설치용 사용자 인증 코드 : 39277938ATPEGEP695305539RXYKN \r\nXtension용 사용자 인증 코드 : GRNVHMTGYISWP9QASNW1','','','4층','제품등록완료'),(2,'QuarkXpress','4.1K','인큐브테크','편집디자인','','√','최초(3K) : PF42607661 / 변경(4.1K) : XU51031887624 \r\n설치용 사용자 인증 코드 : 39281934WQZQRFP695295295AYXCU \r\nXtension용 사용자 인증 코드 : MNEMAF1Z7YJGM1OAGWN','','','4층','제품등록완료'),(3,'QuarkXpress xperience design','9','인큐브테크','편집디자인','','√','KO51801873428 \r\n제품설치코드 : JKMQ1-JVKJR-7A3ZN \r\nICP 설치코드 : 69RBY19N2T836Y9U65HQZJMJWXRPGRS31U7SC8QSHX4RJ4D','','','4층','제품등록완료'),(4,'QuarkXpress xperience design','9','인큐브테크','편집디자인','','√','KO50631538880 \r\n제품설치코드 : MA1KT-ONGO8-0E329\r\nICP 설치코드 : 851X3YTPTY9J4K4CDGCE4MN768ZH7XC8P9VG8KZZ8MPP1RS','','','4층','제품등록완료'),(5,'AsiaFont','','아시아소프트','편집디자인','','√','WKTTF2008-247371','','','4층',''),(6,'AsiaFont','','아시아소프트','편집디자인','','√','WKTTF2008-247372','√','','4층','\r'),(7,'Adobe Dreamweaver','CS3','어도비','디자인','','√','1192-1082-5954-5051-5940-8826','√','','4층','\r'),(8,'Adobe Dreamweaver','CS3','어도비','디자인','','√','1192-1082-2111-4891-9305-6562','√','','4층','\r'),(9,'Adobe Flash','5','어도비','디자인','','√','FLW500-01173-90309-05071','√','','4층','\r'),(10,'Adobe Flash (업그레이드)','MX','어도비','디자인','','√','FLD700-00442-08246-50064','√','','4층','\r'),(11,'Adobe Flash','CS3','어도비','디자인','','√','1302-1452-2292-6642-3893-9184','√','','4층','\r'),(12,'Adobe Flash','CS3','어도비','디자인','','√','1302-1438-1092-8626-4225-2132','√','','4층','\r'),(13,'Adobe Illustrator','CS3','어도비','디자인','','√','1034-1044-1970-2689-0934-9905','√','','4층','\r'),(14,'Adobe Illustrator','CS3','어도비','디자인','','√','1034-1043-6537-0420-4148-0033','√','','4층','\r'),(15,'Adobe Photoshop','CS3','어도비','디자인','','√','1045-1060-1343-7640-3380-2463','√','','4층','\r'),(16,'Adobe Photoshop (업그레이드)','CS3','어도비','디자인','','√','구) 1045-1129-5225-9980-6212-0193 \r\n업) 1045-1033-3154-4665-7747-9065','','','4층',''),(17,'Adobe Design Standard','CS3','어도비','디자인','','√','1327-1956-6582-5465-4389-4808','√','','4층','\"CS4 (업그레이드)\"\r'),(18,'Adobe Design Standard','CS3','어도비','디자인','','√','1327-1088-0404-3055-6538-1355','√','','4층','\"CS4 (업그레이드)\"\r'),(19,'Adobe Design Standard','CS3','어도비','디자인','','√','1327-1088-9043-4325-8409-6652','√','','4층','\"CS4 (업그레이드)\"\r'),(20,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1000-2678-4439-7197-7372','√','','4층','\"CS3 (업그레이드)\"\r'),(21,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1000-9615-5849-3728-9108','√','','4층','\"CS3 (업그레이드)\"\r'),(22,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1001-0964-0075-3714-8584','√','','4층','\"CS3 (업그레이드)\"\r'),(23,'Adobe Design Standard','CS4','어도비','디자인','','√','13271522-6173-5866-6112-7912','√','','4층','\r'),(24,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1520-6388-7994-4976-8308','√','','4층','\r'),(25,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1776-3511-7503-8717-7182','√','','4층','\r'),(26,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1775-9098-6852-2735-6028','√','','4층','\r'),(27,'Adobe Design Standard','CS4','어도비','디자인','','√','1327-1521-3523-5763-3463-7743','√','','4층','\r'),(28,'Adobe Design Premium','CS4','어도비','디자인','','√','1326-1002-5701-9208-5948-5465','√','','4층','\r'),(29,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 915026-411244 8PVGA-2J2G8-F6F7M-AD8FG\"','√','','4층','공유서버\r'),(30,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 915026-410721 WTZ4R-YHC34-KAV8Y-N1X8N\"','√','','4층','백업서버\r'),(31,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 915026-417689 WE4KV-1HPTX-5UMQR-N6RUM\"','√','','4층','웹서버\r'),(32,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 895026-108579 FAQQC-MVSUS-XAXX7-58HAT\"','√','','4층','\r'),(33,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 895026-107392 27XDA-YFVD1-QFGPZ-HT22E\"','√','','4층','\r'),(34,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 895026-107663 Y2QEX-D78WN-HCA3V-73NCT\"','√','','4층','\r'),(35,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','Server 보안','','√','\"고객등록번호 : 895026-108471 3AHXY-3N453-JNB96-SVD4U\"','√','','4층','\r'),(36,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','보안','','√','-','√','','4층','\r'),(37,'카스퍼스키 안티 바이러스','6','한국카스퍼스키랩','통합보안솔루션','','√','-','√','','4층','\r'),(38,'JET-RIP','한컴,신명,서울','장원','Font','','√','-','√','','4층','\r'),(39,'JET-RIP','산돌,춘양','장원','Font','','√','-','√','','4층','\r'),(40,'광수폰트생각','sandoll','산돌글자은행','Font','','√','-','√','','4층','\r'),(41,'윤서체','윤디자인연구소','트루타입서체','Font','','√','인증번호 : 3C5EA849FF580E67\r\nS/N : 530D0B1D-9353-E45275D','','','4층',''),(42,'윤서체','윤디자인연구소','윤서체명필','Font','','√','116863E3-7731-351C734','√','','4층','\r'),(43,'윤서체','윤디자인연구소','윤서체명필','Font','','√','-','√','','4층','\r'),(44,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO51201205623','','','폐기','');
/*!40000 ALTER TABLE `soft_keep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soft_progress`
--

DROP TABLE IF EXISTS `soft_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soft_progress` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `compatibility` varchar(50) DEFAULT NULL,
  `sirial_num` varchar(200) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `license_numb` int(20) DEFAULT NULL,
  `keep_place` varchar(50) DEFAULT NULL,
  `use_num` int(20) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soft_progress`
--

LOCK TABLES `soft_progress` WRITE;
/*!40000 ALTER TABLE `soft_progress` DISABLE KEYS */;
INSERT INTO `soft_progress` VALUES (1,'Windows 2000','Server','마이크로소프트','서버OS','편집부','√','MV9YF-XGXKP-2J66J-9B2GM-F64TY','',0,'4층',0,''),(2,'Windows Server 2003','StandardEdition','마이크로 소프트','서버OS','CMS서버','√','MRV88-KKM4J-CJYYV-RR9XP-J84WM','',0,'4층',0,''),(3,'Windows Server 2003 R2','StandardEdition','마이크로소프트','서버OS','파일서버\r\n(공유서버)','√','CVRVF-H6WQY-K7QGR-BWJ6F-7KFB6','',0,'4층',0,''),(4,'Windows Server 2003 R2','Standard','마이크로소프트','서버OS','재무/회계\r\n백업서버','√','D4FDB-CYC24-TXMDV-Y6G3F-663FT','',0,'4층',0,''),(5,'AsiaFont11','','아시아소프트','편집디자인','','√','WKTTF2008-247371','',0,'4층',NULL,''),(6,'Windows Svr Std 2008','Standard Edition','마이크로 소프트','서버OS','','√','C2221071727154','',0,'4층',0,''),(7,'Windows Sever 2012','CAL','마이크로 소프트','서버OS','','√','39626573939','',0,'4층',0,''),(8,'Windows Sever 2012','CAL','마이크로 소프트','서버OS','','√','39626573966','',0,'4층',0,''),(9,'Windows Sever 2012 R2','StandardEdition','마이크로 소프트','서버OS','','√','DHQHV-FWN7X-VD2F3-PH9DB-6VHJT','',0,'4층',0,''),(10,'Windows Sever 2012 R2','StandardEdition','마이크로 소프트','서버OS','','√','NRH2M-T99CC-BBYYH-KJGGH-8HTPG','',0,'4층',0,''),(11,'Windows XP','Home Edition','마이크로 소프트','PC-OS','줄서버','√','JY7W3-YR6M8-V8CGT-3KVDP-746FD','',0,'4층',0,''),(12,'Windows XP','Professional','마이크로 소프트','PC-OS','전산관리\r\n콘솔PC','√','CHTCB-K28YJ-H4C69-FD9GQ-C76QQ','',0,'',0,''),(13,'Windows XP','Professional','마이크로 소프트','PC-OS','','√','F3T9M-J2PHP-H222F-YWC63-QJX4D','',0,'4층',0,''),(14,'Windows XP','Professional','마이크로 소프트','PC-OS','','√','DDHJ3-89YKJ-CFGBV-4CDHX-HXJBT','',0,'4층',0,''),(15,'Windows XP','Professional','마이크로소프트','PC-OS','','√','MFW3G-TTPDH-9C92C-R6R7T-WBPXY','',0,'',0,'전산실 3장 S/N 無'),(16,'Windows XP','Professional','마이크로소프트','PC-OS','구)공유서버','√','PCK7C-4MYYD-D8X62-KTQV9-QJHCB','',0,'',0,'전산실 3장 S/N 無'),(17,'Windows XP','Professional','마이크로소프트','PC-OS','박스서버','√','RHDYC-2YXRY-RFCX9-K4C3X-6XXCY','',0,'',0,'전산실 3장 S/N 無'),(18,'Windows XP','Professional','마이크로소프트','PC-OS','컬러RIP','√','JVB76-VWXRX-HXV9R-4QW24-46H9B','',0,'',0,'전산실 3장 S/N 無'),(19,'Windows XP','Professional','마이크로소프트','PC-OS','','√','V9BG9-Q496K-4BXM7-RJCXG-QYGJT','',8,'4층',1,'Windows 7 (다운그레이드)'),(20,'Windows 7 32Bit(미개봉)','Professional','마이크로소프트','PC-OS','','√','SX8QZO4007','',0,'4층',0,''),(21,'Windows 7 32Bit(미개봉)','Professional','마이크로소프트','PC-OS','','√','SX9C7KZ0RP','',0,'4층',0,''),(22,'Windows 7 32Bit(미개봉)','Professional','마이크로소프트','PC-OS','','√','SX9C7KZ0RZ','',0,'4층',0,''),(23,'Windows 7 32Bit(미개봉)','Professional','마이크로소프트','PC-OS','','√','SX8QZO402E','',0,'4층',0,''),(24,'Windows 7 32Bit(미개봉)','Professional SP1','마이크로소프트','PC-OS','','√','SX9DA5Z0F6','',0,'4층',0,''),(25,'Windows 7 64Bit','Professional','마이크로소프트','PC-OS','','√','YMTFY-T3YBV-CF84G-DHFJW-2GXTD','',0,'4층',0,''),(26,'Windows 7 64Bit','Professional','마이크로소프트','PC-OS','','√','7RWT3-3P3RR-WXH3R-6FVBV-3YBVY','',0,'4층',0,''),(27,'Windows 7 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','MMQY3-04FD6-F77RB-B9B4W-CG4M8','√',0,'4층',0,'\r'),(28,'Windows 7 64Bit','Home Premium','마이크로소프트','PC-OS','','√','6VXWM-923GC-8692Q-TP86P-GPDJF','',0,'4층',0,''),(29,'Windows 7 64Bit','\"Home Premium\"','\"마이크로소프트\"','PC-OS','','√','K9V47-RY377-JCT47-8C964-7VYRK','√',0,'4층',0,'\r'),(30,'Windows 7 64Bit','\"Home Premium\"','\"마이크로소프트\"','PC-OS','','√','J39D6-HM4GQ-MH897-97FF6-BJ6WJ','√',0,'4층',0,'\r'),(31,'Windows 7 64Bit','\"Home Premium\"','\"마이크로소프트\"','PC-OS','','√','H3RJK-33MYX-JB2M3-XGFV4-3JM4M','√',0,'4층',0,'\r'),(32,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','QD8NW-4CY9H-3V7YD-Q2FHB-R6YP4','√',0,'4층',0,'\r'),(33,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','C4P6K-NX238-QC4KC-282BM-88F9F','√',0,'4층',0,'\r'),(34,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','PCG29-TDNB3-88RP3-YXC9Y-R6YP4','√',0,'4층',0,'\r'),(35,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','RY2X6-8NWR7-QHJ3C-V76R2-P9XTR','√',0,'4층',0,'\r'),(36,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','G7M6N-HWHC7-FFPQJ-K23Q8-K2FC4','√',0,'4층',0,'\r'),(37,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','42NH3-GMVXR-673HM-VT2WJ-78RC4','√',0,'4층',0,''),(38,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','X7D3N-YCGRC-FXQKQ-7DPXH-B7V24','√',0,'4층',0,''),(39,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','9V2RC-9NKGP-M6RGM-RQM3F-MWR4','√',0,'4층',0,''),(40,'Windows 10 64Bit','Professional','\"마이크로소프트\"','PC-OS','','√','TNFGR-HFCHC-3HMQR-B979F-6Q724','√',0,'4층',0,''),(41,'MS-Office 2003','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','KV4XK-79988-W42FM-MWBC2-FRHJD','√',0,'4층',0,''),(42,'MS-Office 2003','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','W9J2K-FR8XJ-43FYT-YCX4F-YMY4Q','√',0,'4층',0,''),(43,'MS-Office 2007','Professional','\"마이크로소프트\"','\"문서작성/프리젠테이션\"','','√','JM9VP-83KWM-WP846-CMH64-8VJ7W','',30,'4층',0,''),(44,'MS-Office 2007(업그레이드)','Professional','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','BDJWG-C9RPW-7QCVY-DD87T-V9H4M','√',0,'4층',0,''),(45,'MS-Office 2007(업그레이드)','Professional','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','D7PCX-MVJRH-7RR2B-X43W4-Y7WYY','√',0,'4층',0,''),(46,'MS-Office 2007(업그레이드)','Professional','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','B3VCK-YXC3B-9YF3T-4B3QP-WWTBY','√',0,'4층',0,''),(47,'MS-Office 2007(업그레이드)','Professional','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','GCV28-9WRHX-3WJKP-4JFBX-Y6FFM','√',0,'4층',0,''),(48,'MS-Office 2007(업그레이드)','Professional','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','TQHJ2-KCP23-74CVV-GGHC7-M774M','√',0,'4층',0,''),(49,'MS-Office 2007(업그레이드)','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','VRF6F-P8P77-3GX3B-6FPMC-D9DJB','√',0,'4층',0,''),(50,'MS-Office 2007(업그레이드)','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','KGHQP-HQ2PY-2HP2X-47HMH-4DMRM','√',0,'4층',0,''),(51,'MS-Office 2007(업그레이드)','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','G93XY-2MM3K-JKQ99-PMQPW-P4YRM','√',0,'4층',0,''),(52,'MS-Office 2007(업그레이드)','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','FV7RD-96TD4-Y8677-9DJXQ-B8MRM','√',0,'4층',0,''),(53,'MS-Office 2007(업그레이드)','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','P397D-PYMWM-4MBMG-48CPF-RMV4M','√',0,'4층',0,''),(54,'MS-Office 2007(업그레이드)','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','F726W-VJ2RT-9DM6G-H7YW3-RH3JB','√',0,'4층',0,''),(55,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','JRD38-PYV8B-YKD4T-JWP9P-CTV4Q','√',0,'4층',0,''),(56,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','W2DYV-Y3RTH-7G67P-CJ3GJ-CM68D','√',0,'4층',0,''),(57,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','GRC7V-969V3-R99YJ-JVT7Y-B7RFQ','√',0,'4층',0,''),(58,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','CMPKQ-GFT7M-WFGM6-XBFXV-WDTB3','√',0,'4층',0,''),(59,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','BYCVJ-BWJP8-JYFFW-CJJVX-WPKWD','√',0,'4층',0,''),(60,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','DGRCH-M6PPT-6VX3M-9DGKD-9T2M3','√',0,'4층',0,''),(61,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','PWQ9Y-GWFVH-C2M2F-FJXHQ-VJCM3','√',0,'4층',0,''),(62,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','VCVP3-YGPVP-6YXV4-G2V96-RKPM3','√',0,'4층',0,''),(63,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','JCHDV-PD33J-32G64-P83DP-2774Q','√',0,'4층',0,''),(64,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','QYMFV-T433H-T8KTB-B93JG-C6QJD','√',0,'4층',0,''),(65,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','M6XKC-M7TWW-BG82J-D79PX-H9H4Q','√',0,'4층',0,''),(66,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','FQDJF-G2TFF-W2W2V-38427-GY676','√',0,'4층',0,''),(67,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','MFQQM-D8KRW-QMY4D-YCMBJ-TTQJD','√',0,'4층',0,''),(68,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','DX79C-FRBMY-88J86-P77HT-RYQJD','√',0,'4층',0,''),(69,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','QGW7Y-KQHWR-G7CG3-K7YJ9-T2BRQ','√',0,'4층',0,''),(70,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','M86WF-FFKQ3-Y963M-WXR2H-TJ4FQ','√',0,'4층',0,''),(71,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','RCD7Y-RFP8V-77RFH-MT3YJ-QG68D','√',0,'4층',0,''),(72,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','C6898-YYBFP-39WXT-T8DBM-X7WY3','√',0,'4층',0,''),(73,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','PVK96-M387P-RGGYV-HX9XF-6JTB3','√',0,'4층',0,''),(74,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','W8B73-FMYCF-DHFKQ-3KM3G-GTV4Q','√',0,'4층',0,''),(75,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','FP66C-XKGJH-YMXJ4-BBF9Y-GCBRQ','√',0,'4층',0,''),(76,'MS-Office 2007','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','M2G3Y-BHJQ7-26H2J-HF6TY-W34FQ','√',0,'4층',0,''),(77,'MS-Office 2010','\"Standard Edition\"','\"마이크로소프트\"','\"문서작성 / 프리젠테이션\"','','√','HRCYV-TMKFB-CFK8P-V7QDQ-GHK2Y','',10,'4층',0,''),(78,'한글 2002','','한글과컴퓨터','문서작성','삼보PC','√','15192145-023176942','번들',0,'4층',0,''),(79,'한글 2002','SE','한글과컴퓨터','문서작성','삼보PC','√','15193725-008817130','번들',0,'4층',0,''),(80,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002342208','번들',0,'4층',0,''),(81,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002560884','번들',0,'4층',0,''),(82,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002586522','번들',0,'4층',0,''),(83,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002589587','번들',0,'4층',0,''),(84,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','+','15353715-002586933','번들',0,'4층',0,''),(85,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002537863','번들',0,'4층',0,''),(86,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-006562676','번들',0,'4층',0,''),(87,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002227723','번들',0,'4층',0,''),(88,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-001576971','번들',0,'4층',0,''),(89,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-002342208','번들',0,'4층',0,''),(90,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353715-001672365','번들',0,'4층',0,''),(91,'한글 2004','','한글과컴퓨터','문서작성','삼보PC','√','15353755-034625084','번들',0,'4층',0,''),(92,'한글 2007','','한글과컴퓨터','문서작성','','√','16271211-063047935','√',0,'4층',0,''),(93,'한글 2007','','한글과컴퓨터','문서작성','','√','16271211-063048230','√',0,'4층',0,''),(94,'한글 2007','','한글과컴퓨터','문서작성','','√','16271119-000493224','',10,'4층',0,''),(95,'한글 2010','SE','한글과컴퓨터','문서작성','','√','17011271-239382089','√',0,'4층',0,''),(96,'한글 2010','SE','한글과컴퓨터','문서작성','','√','17011271-239388779','√',0,'4층',0,''),(97,'한글 2010','SE+','한글과컴퓨터','문서작성','','√','17011119-000663086','',8,'4층',0,''),(98,'한글 2010','SE+','한글과컴퓨터','문서작성','','√','17011119-000768413','',42,'4층',0,''),(99,'알집 (업그레이드)','7.0','이스트소프트','파일압축','','√','4W00-EXR7-806C-S36F','',8,'4층',0,''),(100,'알 FTP (업그레이드)','4.0','이스트소프트','\"파일송수신\"','','√','9BV5-M4AA-Y1CF-XPRE','',5,'4층',0,''),(101,'알 FTP','5.0','이스트소프트','\"파일송수신\"','','√','83AY-0RJ0-SPS3-FVY5','√',0,'4층',0,''),(102,'알툴즈','8.0 ','이스트소프트','\"편집파일전송확인\"','','√','BKL8-J6VS-C7EL-WR33','',7,'4층',0,''),(103,'알씨','6.0 ','이스트소프트','\"이미지파일확인\"','','√','QTUB-VX97-65EN-KJB9','',9,'4층',0,'장근식'),(104,'Adobe Acrobat','9','어도비','디자인','','√','1118-1727-6481-5488-8225-7497','√',0,'4층',0,''),(105,'Adobe Dreamweaver','4','어도비','디자인','','√','DWW400-01149-78206-45585','√',0,'4층',0,''),(106,'Adobe Dreamweaver(업그레이드)','MX','어도비','디자인','','√','DWD700-08474-08218-58013','',0,'4층',0,''),(107,'Adobe Design Standard','CS6','어도비','디자인','','√','1543-1007-0926-3322-8577-3250','√',0,'4층',0,''),(108,'Adobe Design Standard','CS6','어도비','디자인','','√','1543-1001-7956-8138-2118-9089','√',0,'4층',0,'류정미'),(109,'Adobe Design Standard','CS6','어도비','디자인','','√','1543-1505-9384-7342-5915-7301','',8,'4층',0,'박성경/백승경'),(110,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ51692124866 S/N - 1X6AP487HAFVZUQV8ZENUVDCCBCZY8P3B9QMN1X3PGVPMR3\r\n세종폰트 - SLR3-5ZRG-YHOW-6BIV','',0,'4층',0,'백승경 editer1'),(111,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ50192291816 S/N - EFFMTN7W8QKC6GFZECMJF3K87WUBQEE82VCTNN2YNPKCSTP \r\n세종폰트 - O4NQ-YHF0-VC2J-UJ2P','',0,'4층',0,''),(112,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ50091381458 S/N - SEPKX2FPXF4TDTG4H8A5P322HXW1DA9D9N78BEUCUH49MRA \r\n세종폰트 - 11SU-LL8N-OY37-NNE1','',0,'4층',0,''),(113,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ52410065222 S/N - DEVDX8XJXB444R9YVZ74F67VY5UN43QSE3VNVYHT11U78TR \r\n세종폰트 - AR4U-NMS4-QOPS-L2RG','',0,'4층',0,''),(114,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ50881414050 S/N - 2C53GDKDQ52X482FBFKQA889CXBJYKQYKNUR35KAJVCGYKZ\r\n세종폰트 - 1TNM-1TZC-N91R-QYFA','',0,'4층',0,''),(115,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ51601945817 S/N - RTR1N762YQNK7X4WZHKFQQKVYCBAVPUG8C7ZYMHGKKSGUKG\r\n세종폰트 - ELQR-SYKG-FEGZ-D3XA','',0,'4층',0,''),(116,'QuarkXpress xperience design','2015','인큐브테크','편집디자인','','√','제품코드 - JQ51601945817 S/N - RTR1N762YQNK7X4WZHKFQQKVYCBAVPUG8C7ZYMHGKKSGUKG \r\n세종폰트 - ELQR-SYKG-FEGZ-D3XA','',0,'4층',0,''),(117,'윤소호 Truetype Font','2010','윤디자인','디자인','','√','25E849C9-3509-E2A7E8A','√',0,'4층',0,''),(118,'윤소호 Truetype Font','2010','윤디자인','디자인','','√','3F709A42-3509-C9D60E2','√',0,'4층',0,''),(119,'CreFont','','윤디자인','디자인','','√','35826E8A-03-A23ABDA006','√',0,'4층',0,''),(120,'AsiaFont','TTF 통합패키지 398','아시아소프트','편집디자인','','√','WTP01-04C0-RJTZMW','√',0,'4층',0,'박성경'),(121,'AsiaFont','TTF 통합패키지 398','아시아소프트','편집디자인','','√','WTP01-F3C0-1CCZW5','√',0,'4층',0,'\"백승경 editer1\"'),(122,'AsiaFont','TTF 통합패키지 398','아시아소프트','편집디자인','','√','WTP01-C3C0-3N7ZLL','√',0,'4층',0,''),(123,'AsiaFont','TTF 통합패키지 398','아시아소프트','편집디자인','','√','WTP01-B3C0-Q59ZQZ','√',0,'4층',0,''),(124,'AsiaFont','TTF 통합패키지 398','아시아소프트','편집디자인','','√','WTP01-E3C0-734ZK3','√',0,'4층',0,''),(125,'AsiaFont','TTF 통합패키지 398','아시아소프트','편집디자인','','√','WTP01-D3C0-VTVZWR','√',0,'4층',0,''),(126,'AsiaFont','스탠다드','아시아소프트','편집디자인','','√','WTP11-D100-QS3ZTW','√',0,'4층',0,''),(127,'AsiaFont','스탠다드','아시아소프트','편집디자인','','√','WTP11-C100-MLZZUH','√',0,'4층',0,''),(128,'묵향','4','한양정보통신','편집디자인','','√','2737-1447-6930-7499','√',0,'4층',0,'박성경'),(129,'묵향','4','한양정보통신','편집디자인','','√','2734-0698-1834-6204','√',0,'4층',0,'\"백승경 editer1\"'),(130,'묵향','4','한양정보통신','편집디자인','','√','2714-1744-2953-2896','√',0,'4층',0,''),(131,'묵향','4','한양정보통신','편집디자인','','√','2777-9356-4693-1347','√',0,'4층',0,''),(132,'묵향','4','한양정보통신','편집디자인','','√','2525-0928-5407-6248','√',0,'4층',0,''),(133,'묵향','4','한양정보통신','편집디자인','','√','2698-3538-1936-3651','√',0,'4층',0,''),(134,'묵향','4','한양정보통신','편집디자인','','√','2656-4881-9078-8508','√',0,'4층',0,''),(135,'묵향','4','한양정보통신','편집디자인','','√','2659-5629-4174-9804','√',0,'4층',0,'');
/*!40000 ALTER TABLE `soft_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soft_stop`
--

DROP TABLE IF EXISTS `soft_stop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soft_stop` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `compatibility` varchar(50) DEFAULT NULL,
  `sirial_num` varchar(300) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `license_numb` varchar(50) DEFAULT NULL,
  `keep_place` varchar(50) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='소프트사용불가';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soft_stop`
--

LOCK TABLES `soft_stop` WRITE;
/*!40000 ALTER TABLE `soft_stop` DISABLE KEYS */;
INSERT INTO `soft_stop` VALUES (1,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO51201205623','','','폐기',''),(2,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO50501215126','','','폐기',''),(3,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO52131911724','','','폐기',''),(4,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO51240617231','','','폐기',''),(5,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO51011165684','','','폐기',''),(6,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO52182355665','','','폐기',''),(7,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO51251441128','','','폐기',''),(8,'QuarkXpress(미개봉) xperience design','8K','인큐브테크','편집디자인','','√','KO50930112000','','','폐기',''),(9,'QuarkXpress(미개봉) xperience design','9','인큐브테크','편집디자인','','√','KO50361347104','','','폐기',''),(10,'QuarkXpress(미개봉) xperience design','9','인큐브테크','편집디자인','','√','KO50460496652','','','폐기',''),(11,'QuarkXpress(미개봉) xperience design','9','인큐브테크','편집디자인','','√','KO50640961027','','','폐기',''),(12,'QuarkXpress(미개봉) xperience design','9','인큐브테크','편집디자인','','√','KO50872376020','√','','폐기',''),(13,'QuarkXpress(미개봉) xperience design','9','인큐브테크','편집디자인','','√','KO52110898714','√','','폐기',''),(16,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE036','√','','4층','\"Windows XP (다운그레이드)\"\r'),(17,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE03E','√','','4층','\"Windows XP (다운그레이드)\"\r'),(18,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE03F','√','','4층','\"Windows XP (다운그레이드)\"\r'),(19,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE038','√','','4층','\"Windows XP (다운그레이드)\"\r'),(20,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE037','√','','4층','\"Windows XP (다운그레이드)\"\r'),(21,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE034','√','','4층','\"Windows XP (다운그레이드)\"\r'),(22,'Windows 7 32Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','SX9X7QE039','√','','4층','\"Windows XP (다운그레이드)\"\r'),(23,'Windows 10 64Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','9DT2N-PGDRM-WG7PV-TGDCW-2GYP4','√','','4층','예비1\r'),(24,'Windows 10 64Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','GYQPC-6NVGR-B49JC-76G9F-WFG6R','√','','4층','예비2\r'),(25,'Windows 10 64Bit(미개봉)','Professional','\"마이크로 소프트\"','PC-OS','','√','8KVDN-Y7V6Q-99WG9-DHJVY-KD724','√','','4층','예비3\r');
/*!40000 ALTER TABLE `soft_stop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software`
--

DROP TABLE IF EXISTS `software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `software` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `window_pro` varchar(20) DEFAULT NULL,
  `msoffice_pro` varchar(20) DEFAULT NULL,
  `hangeul_pro` varchar(20) DEFAULT NULL,
  `use_soft` varchar(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
/*!40000 ALTER TABLE `software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL COMMENT '아이디',
  `password` varchar(50) DEFAULT NULL COMMENT '비밀번호',
  `name` varchar(50) DEFAULT NULL COMMENT '이름',
  `email` varchar(50) DEFAULT NULL COMMENT '이메일',
  `reg_date` datetime DEFAULT NULL COMMENT '가입일',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='회원테이블';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'advisor','1234','palpit','zhfldi4@gmail.com','2016-09-05 10:32:12'),(2,'admin','cjdwnryckfh','admin','keunsik@nzine.co.kr','2016-09-05 15:31:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xp_down`
--

DROP TABLE IF EXISTS `xp_down`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xp_down` (
  `idx` int(20) NOT NULL AUTO_INCREMENT,
  `window7` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xp_down`
--

LOCK TABLES `xp_down` WRITE;
/*!40000 ALTER TABLE `xp_down` DISABLE KEYS */;
INSERT INTO `xp_down` VALUES (1,'SX9XX7QE035'),(2,'SX9X7QE036'),(4,'SX9X7QE038'),(5,'SX9X7QE03E'),(6,'SX9X7QE03F'),(7,'SX9X7QE037'),(8,'SX9X7QE034'),(9,'SX9X7QE039');
/*!40000 ALTER TABLE `xp_down` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-21 17:22:34
