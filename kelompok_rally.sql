-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rallywgg`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_rally`
--

CREATE TABLE `kelompok_rally` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kelompok` int(10) UNSIGNED NOT NULL,
  `scene` int(1) NOT NULL,
  `poin` int(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kelompok_rally`
--

INSERT INTO `kelompok_rally` (`id`, `id_kelompok`, `scene`, `poin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(2, 2, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(3, 3, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(4, 4, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(5, 5, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(6, 6, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(7, 7, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(8, 8, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(9, 9, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(10, 10, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(11, 11, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(12, 12, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(13, 13, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(14, 14, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(15, 15, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(16, 16, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(17, 17, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(18, 18, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(19, 19, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(20, 20, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(21, 21, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(22, 22, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(23, 23, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(24, 24, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(25, 25, 3, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(26, 26, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(27, 27, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(28, 28, 1, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(29, 29, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(30, 30, 2, 200, '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelompok_rally`
--
ALTER TABLE `kelompok_rally`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompok_rally_id_kelompok_foreign` (`id_kelompok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelompok_rally`
--
ALTER TABLE `kelompok_rally`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelompok_rally`
--
ALTER TABLE `kelompok_rally`
  ADD CONSTRAINT `kelompok_rally_id_kelompok_foreign` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
