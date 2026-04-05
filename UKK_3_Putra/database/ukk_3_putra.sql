-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2026 at 02:19 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

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
CREATE DATABASE IF NOT EXISTS `ukk_3_putra` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ukk_3_putra`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin') COLLATE utf8mb4_general_ci NOT NULL,
  `status_akun` enum('aktif','nonaktid') COLLATE utf8mb4_general_ci NOT NULL,
  `profile_path` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
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

CREATE TABLE `aspirasi` (
  `id_aspirasi` int NOT NULL,
  `judul` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_siswa` int NOT NULL,
  `isi_aspirasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('menunggu','proses','selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `id_feedback` int NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `aspirasi`
--

TRUNCATE TABLE `aspirasi`;
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
(9, 'reallllllll', 6, 'ddddddddddddda', 'menunggu', 2, 1, '2026-04-03 17:12:10', '2026-04-03 17:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int NOT NULL,
  `isi_feedback` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_admin` int NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `feedback`
--

TRUNCATE TABLE `feedback`;
--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `isi_feedback`, `id_admin`, `waktu_upload`) VALUES
(1, 'belum ada balasan', 1, '2026-02-12 07:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `isi_kategori` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `kategori`
--

TRUNCATE TABLE `kategori`;
--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `isi_kategori`, `waktu_upload`, `waktu_update`) VALUES
(1, 'fasilitas kelas atas', '2026-02-12 07:47:20', '2026-04-05 15:58:45'),
(2, 'fasilitas sekolah', '2026-02-12 07:47:20', '2026-04-05 13:38:02'),
(20, 'jumpsa', '2026-04-05 16:47:28', '2026-04-05 16:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_log` int NOT NULL,
  `id_actor` int NOT NULL,
  `role` enum('admin','siswa') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aksi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_target` int NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncate table before insert `logs`
--

TRUNCATE TABLE `logs`;
-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nis` int DEFAULT NULL,
  `role` enum('siswa') COLLATE utf8mb4_general_ci NOT NULL,
  `status_akun` enum('aktif','nonaktif') COLLATE utf8mb4_general_ci NOT NULL,
  `profile_path` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `siswa`
--

TRUNCATE TABLE `siswa`;
--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `username`, `password`, `kelas`, `nis`, `role`, `status_akun`, `profile_path`, `waktu_buat`, `waktu_update`) VALUES
(1, 'jhon', 'jhonreal', 'XXI RPL 5', 1020304050, 'siswa', 'aktif', NULL, '2026-01-10 02:49:00', '2026-04-05 13:39:00'),
(2, 'rusdi', 'atminjahat', 'XIV RPL 1', 1234567890, 'siswa', 'aktif', NULL, '2026-02-12 07:49:00', '2026-04-05 13:39:00'),
(6, 'renn', '$2y$10$hOu1w02eiGe79bsfUKQ72utepMmtGa5Snw7Ob2cMWyAM.DG5.RM8e', 'X', NULL, 'siswa', 'aktif', NULL, '2026-04-02 17:42:32', '2026-04-05 13:39:00'),
(15, 'fahim', '$2y$10$a/aHzXBx38Lev2f1UYKP0eTYUgGG86sSoc9R.GwaIRW44Yf4Y/i5a', 'X', NULL, 'siswa', 'aktif', NULL, '2026-04-05 17:41:02', '2026-04-05 17:41:02'),
(16, 'Orangjujurisreal', '$2y$10$YGdBw.EcJhtUXK./kjPIB.ul9XSV/FQR688W8OxTQ3bbqrJiZtAwK', 'XII', NULL, 'siswa', 'aktif', NULL, '2026-04-05 17:45:14', '2026-04-05 17:45:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`),
  ADD KEY `kategori-aspirasi_bridge` (`id_kategori`),
  ADD KEY `siswa-aspirasi_bridge` (`id_siswa`),
  ADD KEY `feedback-aspirasi_bridge` (`id_feedback`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `admin-feedback_bridge` (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `isi_kategori` (`isi_kategori`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
