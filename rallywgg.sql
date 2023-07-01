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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `scene` int(1) NOT NULL,
  `harga` int(10) NOT NULL,
  `repaired` int(1) NOT NULL,
  `image` varchar(255) NOT NULL,
  `shop_image` varchar(255) DEFAULT NULL,
  `width` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `z-index` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama`, `scene`, `harga`, `repaired`, `image`, `shop_image`, `width`, `height`, `z-index`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pohon 1', 1, 10000, 0, 'assets/climate/pohon-kuning.png', NULL, 99, 105, 2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(2, 'Pohon 1', 1, 10, 1, 'assets/climate/pohon-kuning-repaired.png', 'assets/climate/pohon-kuning-shop.png', 99, 105, 2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(3, 'Pohon 2', 1, 10000, 0, 'assets/climate/pohon-merah.png', NULL, 99, 100, 2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(4, 'Pohon 2', 1, 10, 1, 'assets/climate/pohon-merah-repaired.png', 'assets/climate/pohon-merah-shop.png', 99, 100, 2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(5, 'Background', 1, 10000, 0, 'assets/climate/background.png', NULL, 99, 100, -2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(6, 'Background', 1, 10000, 1, 'assets/climate/background-repaired.png', NULL, 99, 100, -2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(7, 'Tanah', 1, 10000, 0, 'assets/climate/tanah.png', NULL, 99, 100, -2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(8, 'Tanah', 1, 10000, 1, 'assets/climate/tanah-repaired.png', NULL, 99, 100, -2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(9, 'Sungai', 1, 10000, 0, 'assets/climate/sungai.png', NULL, 85, 115, 2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(10, 'Sungai', 1, 20, 1, 'assets/climate/sungai-repaired.png', 'assets/climate/sungai-shop.png', 85, 115, 2, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(11, 'Bukit', 1, 15, 1, 'assets/climate/bukit.png', 'assets/climate/bukit-shop.png', 99, 100, 0, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(12, 'Rumput', 1, 5, 1, 'assets/climate/rumput.png', 'assets/climate/rumput-shop.png', 99, 100, 3, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(13, 'Buah', 1, 5, 1, 'assets/climate/buah.png', 'assets/climate/buah-shop.png', 99, 100, 3, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(14, 'Bunga', 1, 5, 1, 'assets/climate/bunga.png', 'assets/climate/bunga-shop.png', 99, 100, 3, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(15, 'Kupu-kupu', 1, 15, 1, 'assets/climate/kupu.png', 'assets/climate/kupu-shop.png', 99, 100, 3, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL),
(16, 'Jerapah', 1, 15, 1, 'assets/climate/jerapah.png', 'assets/climate/jerapah-shop.png', 99, 100, 3, '2023-07-01 10:48:18', '2023-07-01 10:48:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama`, `ruangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ISD-1', 'P.236', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(2, 'ISD-2', 'P.959', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(3, 'ISD-3', 'P.511', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(4, 'ISD-4', 'P.227', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(5, 'ISD-5', 'P.690', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(6, 'ISD-6', 'P.135', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(7, 'ISD-7', 'P.811', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(8, 'ISD-8', 'P.723', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(9, 'ISD-9', 'P.272', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(10, 'ISD-10', 'P.384', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(11, 'ISD-11', 'P.933', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(12, 'ISD-12', 'P.246', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(13, 'ISD-13', 'P.548', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(14, 'ISD-14', 'P.318', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(15, 'ISD-15', 'P.712', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(16, 'ISD-16', 'P.377', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(17, 'ISD-17', 'P.967', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(18, 'ISD-18', 'P.370', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(19, 'ISD-19', 'P.955', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(20, 'ISD-20', 'P.655', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(21, 'Finest-1', 'P.456', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(22, 'Finest-2', 'P.810', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(23, 'Finest-3', 'P.441', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(24, 'Finest-4', 'P.960', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(25, 'Finest-5', 'P.190', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(26, 'Finest-6', 'P.393', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(27, 'Finest-7', 'P.321', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(28, 'Finest-8', 'P.219', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(29, 'Finest-9', 'P.786', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL),
(30, 'Finest-10', 'P.990', '2023-07-01 10:48:16', '2023-07-01 10:48:16', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(65, '2023-06-27-084134', 'App\\Database\\Migrations\\Kelompok', 'default', 'App', 1688233695, 1),
(66, '2023-06-27-084320', 'App\\Database\\Migrations\\KelompokRally', 'default', 'App', 1688233695, 1),
(67, '2023-06-27-135749', 'App\\Database\\Migrations\\Item', 'default', 'App', 1688233695, 1),
(68, '2023-06-27-143900', 'App\\Database\\Migrations\\Pembelian', 'default', 'App', 1688233695, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kelompok` int(10) UNSIGNED NOT NULL,
  `id_item` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok_rally`
--
ALTER TABLE `kelompok_rally`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompok_rally_id_kelompok_foreign` (`id_kelompok`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelian_id_kelompok_foreign` (`id_kelompok`),
  ADD KEY `pembelian_id_item_foreign` (`id_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kelompok_rally`
--
ALTER TABLE `kelompok_rally`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelompok_rally`
--
ALTER TABLE `kelompok_rally`
  ADD CONSTRAINT `kelompok_rally_id_kelompok_foreign` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_id_item_foreign` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_id_kelompok_foreign` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok_rally` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
