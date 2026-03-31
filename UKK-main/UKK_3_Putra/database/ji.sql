-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ukk_3_putra
CREATE DATABASE IF NOT EXISTS `ukk_3_putra` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ukk_3_putra`;

-- Dumping structure for table ukk_3_putra.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ukk_3_putra.admin: ~3 rows (approximately)
INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'system', 'monohydrogenperoxyde'),
	(2, 'yana', 'nenji bigga'),
	(3, 'mas narjo', 'saianarjocuaks');

-- Dumping structure for table ukk_3_putra.aspirasi
CREATE TABLE IF NOT EXISTS `aspirasi` (
  `id_aspirasi` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_siswa` int NOT NULL,
  `isi_aspirasi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('menunggu','proses','selesai') COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `id_feedback` int NOT NULL,
  PRIMARY KEY (`id_aspirasi`),
  KEY `kategori-aspirasi_bridge` (`id_kategori`),
  KEY `siswa-aspirasi_bridge` (`id_siswa`),
  CONSTRAINT `kategori-aspirasi_bridge` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  CONSTRAINT `siswa-aspirasi_bridge` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ukk_3_putra.aspirasi: ~3 rows (approximately)
INSERT INTO `aspirasi` (`id_aspirasi`, `judul`, `id_siswa`, `isi_aspirasi`, `status`, `id_kategori`, `id_feedback`) VALUES
	(1, 'kipas rusak', 1, 'kipas rusak banh', 'menunggu', 1, 1),
	(2, 'kipas rusak', 2, 'kipas rusak cuyh', 'menunggu', 1, 1),
	(3, 'wifi lemot', 1, 'ini wifi lemot sangat. 1MBps pun tak dapat', 'proses', 1, 1);

-- Dumping structure for table ukk_3_putra.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int NOT NULL AUTO_INCREMENT,
  `isi_feedback` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_admin` int NOT NULL,
  PRIMARY KEY (`id_feedback`),
  KEY `admin-feedback_bridge` (`id_admin`),
  CONSTRAINT `admin-feedback_bridge` FOREIGN KEY (`id_admin`) REFERENCES `feedback` (`id_feedback`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ukk_3_putra.feedback: ~1 rows (approximately)
INSERT INTO `feedback` (`id_feedback`, `isi_feedback`, `id_admin`) VALUES
	(1, 'belum ada balasan', 1);

-- Dumping structure for table ukk_3_putra.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `isi_kategori` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ukk_3_putra.kategori: ~11 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `isi_kategori`) VALUES
	(1, 'fasilitas kelas'),
	(2, 'fasilitas sekolah'),
	(3, 'gedung'),
	(4, 'aldar'),
	(5, 'aldar'),
	(6, 'nkj'),
	(7, 'nkj'),
	(8, ''),
	(9, 'fewwfe'),
	(10, 'fewwfe'),
	(11, 'tikus bob');

-- Dumping structure for table ukk_3_putra.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nis` int NOT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `nis` (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ukk_3_putra.siswa: ~2 rows (approximately)
INSERT INTO `siswa` (`id_siswa`, `username`, `password`, `kelas`, `nis`) VALUES
	(1, 'jhon', 'jhonreal', 'XXI RPL 5', 1020304050),
	(2, 'rusdi', 'atminjahat', 'XIV RPL 1', 1234567890);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
