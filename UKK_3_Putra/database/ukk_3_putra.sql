-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2026 at 07:39 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_3_putra`
--
CREATE DATABASE IF NOT EXISTS `ukk_3_putra` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ukk_3_putra`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_akun` enum('aktif','nonaktid') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profile_path` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `role`, `status_akun`, `profile_path`, `waktu_buat`, `waktu_update`) VALUES
(1, 'system', 'monohydrogenperoxyde', 'admin', 'aktif', NULL, '2026-02-12 07:51:00', '2026-04-05 13:37:08'),
(2, 'yana', 'nenji bigga', 'admin', 'aktif', NULL, '2026-02-12 07:51:00', '2026-04-05 13:37:08'),
(3, 'mas narjo', 'saianarjocuaks', 'admin', 'aktif', NULL, '2026-02-12 07:51:00', '2026-04-05 13:37:08'),
(4, 'meong_gaming4', '$2y$10$Su5BPBjjWoPJTYaTy58qkOTbu31XiYPO12g8fySKKFrwyFiBOqw9K', 'admin', 'aktif', NULL, '2026-04-03 12:42:18', '2026-04-05 13:37:08'),
(5, 'rennmin', '$2y$10$JvAD0Ig1wQMCrcyfZfF2MOFCECMK6xEixUa5ey10fDRbSqSD738IG', 'admin', 'aktif', NULL, '2026-04-03 12:43:06', '2026-04-05 13:37:08'),
(6, 'Orangjujurisreal', '$2y$10$stoqpZ03o2Ri8vkDrX6nK.Ck7gOnfC02oZCmWbFHDPVXxvFKJJQMW', 'admin', 'aktif', NULL, '2026-04-05 17:47:19', '2026-04-05 17:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE IF NOT EXISTS `aspirasi` (
  `id_aspirasi` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_siswa` int NOT NULL,
  `isi_aspirasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('menunggu','proses','selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `id_feedback` int NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_aspirasi`),
  KEY `kategori-aspirasi_bridge` (`id_kategori`),
  KEY `siswa-aspirasi_bridge` (`id_siswa`),
  KEY `feedback-aspirasi_bridge` (`id_feedback`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `judul`, `id_siswa`, `isi_aspirasi`, `status`, `id_kategori`, `id_feedback`, `waktu_upload`, `waktu_update`) VALUES
(1, 'kipas rusak', 1, 'kipas rusak banh', 'menunggu', 1, 1, '2026-02-12 06:53:05', '2026-04-03 16:17:47'),
(2, 'kipas rusak', 2, 'kipas rusak cuyh', 'menunggu', 1, 1, '2026-02-12 06:53:05', '2026-04-03 16:17:47'),
(3, 'wifi lemot', 1, 'ini wifi lemot sangat. 1MBps pun tak dapat', 'proses', 1, 1, '2026-02-12 06:53:05', '2026-04-03 16:17:47'),
(6, 'stes', 6, 'some text', 'menunggu', 1, 1, '2026-04-03 17:09:19', '2026-04-03 17:09:19'),
(7, 'as', 6, 'dadada', 'menunggu', 2, 1, '2026-04-03 17:11:25', '2026-04-03 17:11:25'),
(8, 'dawdad', 6, 'dawdada', 'menunggu', 1, 1, '2026-04-03 17:11:57', '2026-04-03 17:11:57'),
(9, 'reallllllll', 6, 'ddddddddddddda', 'menunggu', 2, 1, '2026-04-03 17:12:10', '2026-04-03 17:12:10'),
(10, 'dadsadas', 6, 'dasdwa', 'menunggu', 1, 1, '2026-04-09 12:28:29', '2026-04-09 12:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int NOT NULL AUTO_INCREMENT,
  `isi_feedback` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_admin` int NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_feedback`),
  KEY `admin-feedback_bridge` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `isi_feedback`, `id_admin`, `waktu_upload`) VALUES
(1, 'belum ada balasan', 1, '2026-02-12 07:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `isi_kategori` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `isi_kategori` (`isi_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `isi_kategori`, `waktu_upload`, `waktu_update`) VALUES
(1, 'fasilitas kelas atas', '2026-02-12 07:47:20', '2026-04-05 15:58:45'),
(2, 'fasilitas sekolah', '2026-02-12 07:47:20', '2026-04-05 13:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `tingkat` int NOT NULL,
  `jurusan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `bagian` int NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`),
  UNIQUE KEY `tingkat` (`tingkat`),
  UNIQUE KEY `kelas` (`jurusan`),
  UNIQUE KEY `bagian` (`bagian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id_log` int NOT NULL AUTO_INCREMENT,
  `id_actor` int NOT NULL,
  `role` enum('admin','siswa') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aksi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_target` int NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id_log`, `id_actor`, `role`, `aksi`, `id_target`, `detail`, `user_agent`, `alamat_ip`, `waktu_upload`) VALUES
(1, 6, 'siswa', 'manipulasi aspirasi', 10, 'Menambah aspirasi: dadsadas, dasdwa, kategori: ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '::1', '2026-04-09 12:28:29'),
(2, 6, 'siswa', 'manipulasi aspirasi', 11, 'Menambah aspirasi: rwa, rwara, kategori: fasilitas kelas atas', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '::1', '2026-04-09 12:31:56'),
(3, 6, 'siswa', 'manipulasi aspirasi', 12, 'Menambah aspirasi: dsad, dsad, kategori: fasilitas kelas atas', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '::1', '2026-04-09 12:32:04'),
(4, 6, 'siswa', 'manipulasi aspirasi', 12, 'Menghapus aspirasi dengan id: 12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '::1', '2026-04-09 13:35:15'),
(5, 6, 'siswa', 'manipulasi aspirasi', 11, 'Menghapus aspirasi dengan id: 11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '::1', '2026-04-09 13:36:00'),
(6, 5, 'admin', 'manipulasi kategori', 20, 'menghapus kategori dengan id: 20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '::1', '2026-04-09 13:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nis` int DEFAULT NULL,
  `role` enum('siswa') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_akun` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profile_path` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `nis` (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `username`, `password`, `kelas`, `nis`, `role`, `status_akun`, `profile_path`, `waktu_buat`, `waktu_update`) VALUES
(1, 'jhon', 'jhonreal', 'XXI RPL 5', 1020304050, 'siswa', 'aktif', NULL, '2026-01-10 02:49:00', '2026-04-05 13:39:00'),
(2, 'rusdi', 'atminjahat', 'XIV RPL 1', 1234567890, 'siswa', 'aktif', NULL, '2026-02-12 07:49:00', '2026-04-05 13:39:00'),
(6, 'renn', '$2y$10$hOu1w02eiGe79bsfUKQ72utepMmtGa5Snw7Ob2cMWyAM.DG5.RM8e', 'X', NULL, 'siswa', 'aktif', NULL, '2026-04-02 17:42:32', '2026-04-05 13:39:00'),
(15, 'fahim', '$2y$10$a/aHzXBx38Lev2f1UYKP0eTYUgGG86sSoc9R.GwaIRW44Yf4Y/i5a', 'X', NULL, 'siswa', 'aktif', NULL, '2026-04-05 17:41:02', '2026-04-05 17:41:02'),
(16, 'Orangjujurisreal', '$2y$10$YGdBw.EcJhtUXK./kjPIB.ul9XSV/FQR688W8OxTQ3bbqrJiZtAwK', 'XII', NULL, 'siswa', 'aktif', NULL, '2026-04-05 17:45:14', '2026-04-05 17:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `feedback-aspirasi_bridge` FOREIGN KEY (`id_feedback`) REFERENCES `feedback` (`id_feedback`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori-aspirasi_bridge` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa-aspirasi_bridge` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `admin-feedback_bridge` FOREIGN KEY (`id_admin`) REFERENCES `feedback` (`id_feedback`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
