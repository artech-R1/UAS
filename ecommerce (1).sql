-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 02:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `beratbersih` int(11) DEFAULT NULL,
  `hargamin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `brand`, `beratbersih`, `hargamin`, `created_at`, `updated_at`) VALUES
(5, 'Handphone', 'Realme', 200, 3000000, '2021-01-05 15:06:23', '2021-01-05 15:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_18_052821_create_pesanans_table', 1),
(5, '2021_01_18_054627_create_pesanan_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `kode`, `jumlah_harga`, `created_at`, `updated_at`, `status`) VALUES
(5, 177, '2021-01-18', 0, 2080000000, '2021-01-18 07:30:08', '2021-01-18 07:36:24', 1),
(6, 177, '2021-01-18', 617, 960000000, '2021-01-18 08:02:23', '2021-01-18 08:05:51', 1),
(7, 177, '2021-01-18', 459, 960000000, '2021-01-18 08:07:01', '2021-01-18 08:20:34', 1),
(8, 178, '2021-01-18', 105, 2112000000, '2021-01-18 09:07:56', '2021-01-18 09:11:55', 1),
(9, 178, '2021-01-19', 448, 288000000, '2021-01-19 05:08:00', '2021-01-19 05:10:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `barang_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(3, 3545, 5, 26, 2080000000, '2021-01-18 07:30:08', '2021-01-18 07:31:51'),
(4, 3545, 6, 12, 960000000, '2021-01-18 08:02:38', '2021-01-18 08:02:38'),
(5, 3545, 7, 12, 960000000, '2021-01-18 08:07:01', '2021-01-18 08:07:01'),
(6, 3548, 8, 264, 2112000000, '2021-01-18 09:07:56', '2021-01-18 09:10:40'),
(7, 3548, 9, 36, 288000000, '2021-01-19 05:08:00', '2021-01-19 05:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` decimal(11,3) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_user`, `nama`, `foto`, `harga`, `berat`, `stok`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3547, 177, 'xiaomi', 'app/img/-1610985803-q5RQw.jpeg', 6000000, '150.000', 200, 'ok', '2021-01-18 09:03:23', '2021-01-18 09:03:23'),
(3548, 177, 'realme', 'app/img/-1610985838-WaJRb.jpeg', 8000000, '150.000', 164, 'Realme XT', '2021-01-18 09:03:58', '2021-01-19 05:10:31'),
(3549, 177, 'Samsung galaxy Plus', 'app/img/-1610985869-UNazR.png', 6000000, '150.000', 200, 'Samsung', '2021-01-18 09:04:29', '2021-01-18 09:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0,
  `jk` int(1) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `level`, `jk`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(177, 'Riwan', 'dd@gmail.com', 'Riwansyah', 1, 1, '$2y$10$p5GNAWbIeATE1XYlwyRXOeYF9m123b3W4mAcsAlF.9SZqPNNngo4C', NULL, '2021-01-17 22:35:31', '2021-01-18 15:22:54'),
(178, 'Justin', 'dm@gmail.com', 'Justin', 0, 0, '$2y$10$p5GNAWbIeATE1XYlwyRXOeYF9m123b3W4mAcsAlF.9SZqPNNngo4C', NULL, '2021-01-17 22:35:31', '2021-01-18 15:22:54'),
(179, 'caesarali', 'riwanbieber@yahoo.co.id', 'Riwansyah', 0, 1, '$2y$10$dnKQ9uxKhwWgxYqdlLnbKu.WFghWy/7sP2hD8XQmMkMGMuhTNGS8.', NULL, '2021-01-18 08:49:28', '2021-01-18 08:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 177, '+6282354782801', '2020-11-22 16:10:33', '2021-01-18 15:27:12'),
(7, 177, '+6282354786776', '2021-01-14 17:42:21', '2021-01-18 15:44:40'),
(8, 179, '+6282354782801', '2021-01-18 08:49:28', '2021-01-18 08:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3550;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
