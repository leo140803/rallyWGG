-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 04:27 PM
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

INSERT INTO `item` (`id`, `nama`, `scene`, `harga`, `repaired`, `shop_image`, `width`, `height`, `z-index`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pohon 1', 1, 10000, 0, NULL, 99, 105, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(2, 'Pohon 1', 1, 10, 1, 'assets/climate/pohon-kuning-shop.png', 99, 105, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(3, 'Pohon 2', 1, 10000, 0, NULL, 99, 100, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(4, 'Pohon 2', 1, 10, 1, 'assets/climate/pohon-merah-shop.png', 99, 100, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(5, 'Background', 1, 10000, 0, NULL, 99, 100, -2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(6, 'Background', 1, 10000, 1, NULL, 99, 100, -2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(7, 'Tanah', 1, 10000, 0, NULL, 99, 100, -2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(8, 'Tanah', 1, 10000, 1, NULL, 99, 100, -2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(9, 'Sungai', 1, 10000, 0, NULL, 85, 115, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(10, 'Sungai', 1, 20, 1, 'assets/climate/sungai-shop.png', 85, 115, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(11, 'Bukit', 1, 15, 1, 'assets/climate/bukit-shop.png', 99, 100, 0, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(12, 'Rumput', 1, 5, 1, 'assets/climate/rumput-shop.png', 99, 100, 3, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(13, 'Buah', 1, 5, 1, 'assets/climate/buah-shop.png', 99, 100, 3, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(14, 'Bunga', 1, 5, 1, 'assets/climate/bunga-shop.png', 99, 100, 3, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(15, 'Kupu-kupu', 1, 15, 1, 'assets/climate/kupu-shop.png', 99, 100, 3, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(16, 'Jerapah', 1, 15, 1, 'assets/climate/jerapah-shop.png', 99, 100, 3, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(17, 'Gedung Merah', 2, 5, 1, 'assets/eco/red-shop.png', 100, 100, 7, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(18, 'Gedung Orange', 2, 8, 1, 'assets/eco/orange-shop.png', 100, 100, 7, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(19, 'Gedung Kuning', 2, 10, 1, 'assets/eco/yellow-shop.png', 100, 100, 5, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(20, 'Gedung Hijau', 2, 12, 1, 'assets/eco/green-shop.png', 100, 100, 6, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(21, 'Gedung Biru', 2, 15, 1, 'assets/eco/blue-shop.png', 100, 100, 3, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(22, 'Gedung Ungu', 2, 20, 1, 'assets/eco/purple-shop.png', 100, 100, 2, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(23, 'Bianglala', 2, 7, 1, 'assets/eco/bianglala-shop.png', 100, 100, 4, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(24, 'Mobil Mewah', 2, 15, 1, 'assets/eco/car-shop.png', 100, 100, 11, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(25, 'Background', 2, 10000, 0, NULL, 100, 100, 11, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(26, 'Sky', 2, 10000, 0, NULL, 100, 100, 11, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL),
(27, 'Road', 2, 10000, 0, NULL, 100, 100, 11, '2023-07-02 07:26:44', '2023-07-02 07:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_img`
--

CREATE TABLE `item_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_item` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `item_img`
--

INSERT INTO `item_img` (`id`, `id_item`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'assets/climate/pohon-kuning.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(2, 2, 'assets/climate/pohon-kuning-repaired.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(3, 3, 'assets/climate/pohon-merah.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(4, 4, 'assets/climate/pohon-merah-repaired.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(5, 5, 'assets/climate/background.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(6, 6, 'assets/climate/background-repaired.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(7, 7, 'assets/climate/tanah.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(8, 8, 'assets/climate/tanah-repaired.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(9, 9, 'assets/climate/sungai.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(10, 10, 'assets/climate/sungai-repaired.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(11, 11, 'assets/climate/bukit.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(12, 12, 'assets/climate/rumput.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(13, 13, 'assets/climate/buah.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(14, 14, 'assets/climate/bunga.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(15, 15, 'assets/climate/kupu.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(16, 16, 'assets/climate/jerapah.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(17, 17, 'assets/eco/red.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(18, 18, 'assets/eco/orange1.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(19, 18, 'assets/eco/orange2.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(20, 19, 'assets/eco/yellow1.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(21, 19, 'assets/eco/yellow2.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(22, 20, 'assets/eco/green1.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(23, 20, 'assets/eco/green2.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(24, 21, 'assets/eco/blue1.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(25, 21, 'assets/eco/blue2.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(26, 22, 'assets/eco/purple.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(27, 23, 'assets/eco/bianglala.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(28, 24, 'assets/eco/car1.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(29, 24, 'assets/eco/car2.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(30, 24, 'assets/eco/car3.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(31, 24, 'assets/eco/car4.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(32, 24, 'assets/eco/car5.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(33, 25, 'assets/eco/background.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(34, 26, 'assets/eco/sky.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL),
(35, 27, 'assets/eco/road.png', '2023-07-02 07:26:45', '2023-07-02 07:26:45', NULL);

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
(1, 'ISD-1', 'P.700', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(2, 'ISD-2', 'P.363', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(3, 'ISD-3', 'P.419', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(4, 'ISD-4', 'P.685', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(5, 'ISD-5', 'P.252', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(6, 'ISD-6', 'P.113', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(7, 'ISD-7', 'P.321', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(8, 'ISD-8', 'P.883', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(9, 'ISD-9', 'P.994', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(10, 'ISD-10', 'P.201', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(11, 'ISD-11', 'P.366', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(12, 'ISD-12', 'P.122', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(13, 'ISD-13', 'P.370', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(14, 'ISD-14', 'P.302', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(15, 'ISD-15', 'P.982', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(16, 'ISD-16', 'P.285', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(17, 'ISD-17', 'P.748', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(18, 'ISD-18', 'P.105', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(19, 'ISD-19', 'P.291', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(20, 'ISD-20', 'P.583', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(21, 'Finest-1', 'P.393', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(22, 'Finest-2', 'P.225', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(23, 'Finest-3', 'P.506', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(24, 'Finest-4', 'P.646', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(25, 'Finest-5', 'P.237', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(26, 'Finest-6', 'P.952', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(27, 'Finest-7', 'P.403', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(28, 'Finest-8', 'P.958', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(29, 'Finest-9', 'P.905', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(30, 'Finest-10', 'P.979', '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL);

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
(1, 1, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(2, 2, 1, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(3, 3, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(4, 4, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(5, 5, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(6, 6, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(7, 7, 1, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(8, 8, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(9, 9, 1, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(10, 10, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(11, 11, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(12, 12, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(13, 13, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(14, 14, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(15, 15, 1, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(16, 16, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(17, 17, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(18, 18, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(19, 19, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(20, 20, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(21, 21, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(22, 22, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(23, 23, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(24, 24, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(25, 25, 1, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(26, 26, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(27, 27, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(28, 28, 2, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(29, 29, 3, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL),
(30, 30, 1, 200, '2023-07-02 07:26:42', '2023-07-02 07:26:42', NULL);

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
(84, '2023-06-27-084134', 'App\\Database\\Migrations\\Kelompok', 'default', 'App', 1688308000, 1),
(85, '2023-06-27-084320', 'App\\Database\\Migrations\\KelompokRally', 'default', 'App', 1688308000, 1),
(86, '2023-06-27-135749', 'App\\Database\\Migrations\\Item', 'default', 'App', 1688308000, 1),
(87, '2023-06-27-143900', 'App\\Database\\Migrations\\Pembelian', 'default', 'App', 1688308000, 1),
(88, '2023-07-02-130436', 'App\\Database\\Migrations\\ItemImages', 'default', 'App', 1688308000, 1);

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
-- Indexes for table `item_img`
--
ALTER TABLE `item_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_img_id_item_foreign` (`id_item`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `item_img`
--
ALTER TABLE `item_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_img`
--
ALTER TABLE `item_img`
  ADD CONSTRAINT `item_img_id_item_foreign` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
