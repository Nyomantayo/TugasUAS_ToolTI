/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - dbudayana
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbudayana` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbudayana`;

/*Table structure for table `tbdosen` */

DROP TABLE IF EXISTS `tbdosen`;

CREATE TABLE `tbdosen` (
  `idDosen` int(5) NOT NULL AUTO_INCREMENT,
  `namaDosen` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noTlp` varchar(25) NOT NULL,
  `mataKuliah` varchar(50) NOT NULL,
  PRIMARY KEY (`idDosen`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbdosen` */

insert  into `tbdosen`(`idDosen`,`namaDosen`,`alamat`,`noTlp`,`mataKuliah`) values 
(2,'Ketut Agung Cahyawan Wiranatha','Denpasar','0361701806','Tool TI'),
(22,'I Ketut Gede Darma Putra','Badung','0361701806','Tren TI'),
(35,'A.A. Kompiang Oka Sudana','Denpasar','0361701806','Dosen'),
(36,'Gusti Made Arya Sasmita','Denpasar','0361701806','Dosen'),
(37,'I Nyoman Piarsa','Badung','0361701806','Dosen'),
(38,'Putu Wira Buana','Denpasar','0361701806','Dosen'),
(39,'I Ketut Adi Purnawan','Badung','0361701806','Dosen'),
(40,'Ni Made Ika Marini Mandenni','Buleleng','0361701806','Dosen'),
(41,'I Made Agus Dwi Suarjaya','Denpasar','0361701806','Dosen'),
(42,'Gusti Agung Ayu Putri','Denpasar','0361701806','Dosen'),
(43,'I Made Sukarsa','Badung','0361701806','Dosen'),
(44,'I Putu Agung Bayupati','Denpasar','0361701806','Kaprodi'),
(45,'Ni Kadek Ayu Wirdiani','Denpasar','0361701806','Dosen'),
(46,'Ni Kadek Dwi Rusjayanti','Badung','0361701806','Dosen'),
(47,'KADEK SUAR WIBAWA','Buleleng','0361701806','Dosen'),
(48,'I Putu Agus Eka Pratama','Gianyar','0361701806','Dosen'),
(49,'Dwi Putra Githa','Denpasar','0361701806','Basis Data'),
(50,'Desy Purnami Singgih Putri','Badung','0361701806','Algoritma Pemrograman'),
(51,'Ni Putu Sutramiani','Denpasar','0361701806','Dosen'),
(52,'I Putu Arya Dharmadi','Denpasar','0361701806','Dosen'),
(53,'Made Sunia Raharja','Gianyar','0361701806','Algoritma Pemrograman'),
(54,'I Made Suwija Putra','Denpasar','0361701806','Dosen'),
(55,'Anak Agung Ngurah Hary Susila','Denpasar','0361701806','Dosen'),
(56,'Dewa Made Sri Arsa','Denpasar','0361701806','Dosen'),
(57,'Putu Veda Andreyana','Badung','0361701806','Dosen'),
(58,'I Putu Sugi Almantara','Badung','0361701806','Dosen'),
(59,'Wayan Oger Vihikan','Badung','0361701806','Dosen'),
(60,'Ni Wayan Emyy Rosiana Dewi','Badung','0361701806','Tren TI'),
(61,'Nyoman Prayana Trisna','Badung','0361701806','Dosen'),
(62,'Muhammad Alamn Pasirulloh','Badung','0361701806','Dosen'),
(63,'Fajar Purnama','Badung','0361701806','Dosen');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
