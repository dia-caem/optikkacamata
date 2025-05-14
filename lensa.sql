-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2025 at 03:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lensa`
--

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `id` int NOT NULL,
  `jenis_lensa` int NOT NULL,
  `bahan_lensa` int NOT NULL,
  `minus_plus` int NOT NULL,
  `indeks_bias` int NOT NULL,
  `perlindungan_uv` int NOT NULL,
  `anti_radiasi` int NOT NULL,
  `anti_gores` int NOT NULL,
  `cocok_kondisi` int NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `gambar` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `jenis_lensa` varchar(50) NOT NULL,
  `bahan_lensa` varchar(50) NOT NULL,
  `minus_plus` varchar(20) NOT NULL,
  `indeks_bias` decimal(3,2) NOT NULL,
  `perlindungan_uv` enum('Ya','Tidak') NOT NULL,
  `anti_radiasi` enum('Ya','Tidak') NOT NULL,
  `anti_gores` enum('Ya','Tidak') NOT NULL,
  `keluhan_pengguna` text NOT NULL,
  `jenis_aktivitas` text NOT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `jenis_lensa`, `bahan_lensa`, `minus_plus`, `indeks_bias`, `perlindungan_uv`, `anti_radiasi`, `anti_gores`, `keluhan_pengguna`, `jenis_aktivitas`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Single Vision', 'Polycarbonate', 'Minus < -3.00', '1.59', 'Ya', 'Ya', 'Ya', 'Rabun Jauh , Silinder', 'Aktivitas luar ruangan', '120000', 'produk/DzqKvAF7LKQ5iQLkeKuH4imLzoxK3iSkqujNcZGB.png', '2025-04-25 02:31:59', '2025-05-05 20:23:56'),
(2, 'Progreesive', 'Plastic', 'Minus > -6.00', '1.50', 'Ya', 'Tidak', 'Ya', 'Presbiopi , Silinder', 'Membaca dan Menulis', '200000', 'produk/kzOpgAAorzvQoyyisEneT0s1DchfDmImVlhGEIdl.jpg', '2025-04-27 23:40:01', '2025-05-08 18:39:08'),
(3, 'Bifocal', 'Polycarbonate', 'Plus < +2.00', '1.59', 'Tidak', 'Tidak', 'Tidak', 'Rabun Dekat , Silinder', 'Membaca dan Menulis', '170000', 'produk/u1aQVFT3hIRRyFcjAoCOcf39elitRgrVoA6hEUsL.jpg', '2025-04-27 23:43:42', '2025-05-08 18:38:50'),
(4, 'Photochromic', 'High Index', 'Minus < -2.00', '1.67', 'Ya', 'Ya', 'Ya', 'Rabun Jauh, Silinder', 'Penggunaan Komputer , Aktivitas Olahraga , Mengemudi', '325000', 'produk/t4Aa33owA5WN9erkYsa3ryxzhBX2fsQw4EQsu5N1.jpg', '2025-04-27 23:49:50', '2025-05-05 20:22:45'),
(5, 'Blue Light Blocking', 'Polycarbonate', 'Minus < -1.00', '1.59', 'Ya', 'Ya', 'Tidak', 'Rabun Jauh', 'Penggunaan Gadget', '375000', 'produk/yXZlnK9AJ2j6E8GqLEPtWKuuLaE8uRAniSbns5Dx.jpg', '2025-04-27 23:56:36', '2025-05-08 18:38:26'),
(6, 'Lensa Polarized', 'Plastik', 'Minus/Plus', '1.50', 'Ya', 'Ya', 'Ya', 'Silau saat berkendara', 'Mengemudi, Aktivitas luar ruangan', '197000', 'produk/mJXTpelWtDyxiS1csVyxq51cT3xySsb4fCV9mqyc.jpg', '2025-04-28 00:00:21', '2025-05-10 01:26:53'),
(7, 'Lensa Asferis', 'Polycarbonate', 'Minus/Plus', '1.59', 'Ya', 'Tidak', 'Ya', 'Rabun jauh dengan lensa tipis', 'Aktivitas sehari-hari', '300000', 'produk/JXIY2nruQhFe32uHhVR1hlwMCEr4rDyUgJiLTb4J.jpg', '2025-04-28 04:31:09', '2025-05-08 18:33:58'),
(8, 'Lensa Lentikular', 'Plastik', 'Minus sangat tinggi', '1.50', 'Ya', 'Ya', 'Ya', 'Rabun jauh ekstrem', 'Aktivitas terbatas, penglihatan khusus', '245000', 'produk/06qMLCUD3ndyrhULGMwCnIPuzqwybk6SX4v627kc.jpg', '2025-04-28 18:09:43', '2025-05-10 01:27:32'),
(9, 'Lensa Drivewear', 'Trivex', 'Minus/Plus', '1.53', 'Ya', 'Ya', 'Ya', 'Silau & kontras rendah', 'Mengemudi', '985000', 'produk/YhbRyqG3eBz4KR6QvaVlzDTbwIGwPQNESVYmWFCZ.jpg', '2025-04-28 18:15:29', '2025-05-10 01:28:39'),
(10, 'Lensa Digital/HD', 'High Index', 'Minus/Plus', '1.74', 'Ya', 'Ya', 'Ya', 'Kabur, lelah visual', 'Desain grafis, editing, profesi presisi', '500000', 'produk/ybsWsi6daCSVZMBqL3KWvZCbBi7d2lYIHYHkMm9a.jpg', '2025-04-28 18:30:16', '2025-04-29 18:38:37'),
(11, 'Bluechromic', 'Polycarbonate', 'Minus/Plus', '1.59', 'Ya', 'Ya', 'Ya', 'Silau ,  rabun jauh', 'Aktif indoor dan outdoor', '2400000', 'produk/G905AYmd5M0pWLeXUqaR72X716dkEzUQNJTF42Hb.jpg', '2025-04-28 19:33:30', '2025-05-10 01:29:17'),
(12, 'UV420 Smart', 'High Index', 'Minus/Plus', '1.67', 'Ya', 'Ya', 'Ya', 'Mata cepat lelah, sensitif cahaya', 'Penggunaan Gadget, aktif indoor dan outdoor', '325000', 'produk/ACBPZsJVmDkQIWwifcuSlS8PtMcm41HXBL5619eU.jpg', '2025-04-28 19:37:06', '2025-05-10 01:30:04'),
(13, 'Blue Protect', 'Plastic', '< -2.00', '1.50', 'Ya', 'Ya', 'Ya', 'Mata cepat lelah', 'Belajar, kerja kantor, Penggunaa komputer', '225000', 'produk/TzWcAkM9JlKTiuHlXNdtlox9ZBSwdPYWtogAEjVE.jpg', '2025-04-30 05:53:45', '2025-05-10 01:29:41'),
(14, 'Single Vision', 'Plastic', '< -2.00', '1.50', 'Tidak', 'Ya', 'Tidak', 'Rabun Jauh', 'Aktivitas sehari-hari', '90000', 'produk/2eEjL8urrZKMo8sReAVop3fbXa3p3LScGS9IPqZG.jpg', '2025-04-30 05:59:20', '2025-05-08 18:31:15'),
(15, 'Progressive', 'Trivex', '> -3.00', '1.53', 'Ya', 'Ya', 'Ya', 'Rabun Jauh', 'Aktivitas sehari-hari', '150000', 'produk/cIT4W4xxdZIchbk2AXU4FlJVeG2TtlER7nX2HWNU.jpg', '2025-04-30 06:10:38', '2025-05-05 20:35:02'),
(16, 'Bifocal', 'Glass', '> +2.50', '1.52', 'Ya', 'Ya', 'Ya', 'Rabun Dekat', 'Kerja kantor', '130000', 'produk/A3MIu9fLFWZzyQWPCRnRkNdoTE8R9o3LjkZqABCe.jpg', '2025-04-30 06:21:50', '2025-05-05 20:35:26'),
(17, 'Photochromic', 'Plastic', '> -5.00', '1.50', 'Ya', 'Ya', 'Ya', 'Rabun Jauh', 'Aktivitas Olahraga', '225000', 'produk/trYgHrbj0kuU7QeHcDvXMFLufJRc3j2JrlFcLG9B.jpg', '2025-04-30 06:32:32', '2025-05-05 20:35:42'),
(18, 'Blue Light Blocking', 'High Index', '< +1.50', '1.67', 'Tidak', 'Ya', 'Ya', 'Rabun Dekat', 'Pekerjaan Detail', '275000', 'produk/OPnuSYh8T50ciOfuC7sl95sxlf1dpFExdI0lH3yp.jpg', '2025-04-30 06:51:01', '2025-05-08 18:38:07'),
(19, 'Single Vision', 'Trivex', 'Minus < -3.50', '1.53', 'Ya', 'Tidak', 'Ya', 'Rabun Jauh', 'Mengemudi', '400000', 'produk/6gfmH02GnI217K68IfOZqxtQAcEA0mfsgufS1ryT.jpg', '2025-04-30 18:36:47', '2025-05-08 18:37:39'),
(20, 'Progressive', 'Glass', 'Minus > -6.00', '1.52', 'Ya', 'Ya', 'Ya', 'Presbiopi', 'Aktivitas sehari-hari', '565000', 'produk/BBImv5Ud9TKB8tAIIr5xymSLfIEVAcZgvK9o2g3G.jpg', '2025-04-30 18:39:12', '2025-05-10 01:32:16'),
(21, 'Bifocal', 'Plastic', 'Plus > +3.00', '1.50', 'Tidak', 'Ya', 'Tidak', 'Rabun Dekat', 'Aktivitas Menjahit , Membaca dan Menulis', '250000', 'produk/lhgZ3TRJ26WwkpqQRHIgSLucu73BXNWUDx4ivOSk.jpg', '2025-04-30 18:43:42', '2025-05-08 18:37:12'),
(22, 'Blue Light Blocking', 'Trivex', 'Plus < +2.00', '1.53', 'Ya', 'Ya', 'Ya', 'Rabun Dekat', 'Kerja Kantor', '455000', 'produk/qfdYi2pnZQh0BAnIieoet6ougtPndzCdAopt4F8w.jpg', '2025-04-30 18:49:16', '2025-05-10 01:31:38'),
(23, 'Single Vision', 'Glass', 'Minus > -4.50', '1.52', 'Tidak', 'Tidak', 'Ya', 'Rabun Jauh', 'Membaca dan Menulis', '150000', 'produk/YEMfvByXHaAOdkj0s726m9JWwFGPiZL7oyZQqAjB.jpg', '2025-04-30 18:52:06', '2025-05-08 18:36:23'),
(24, 'Progreesive', 'Polycarbonate', 'Minus < -2.50', '1.59', 'Ya', 'Ya', 'Ya', 'Rabun Jauh', 'Aktivitas sehari-hari', '388000', 'produk/ENizd5JxvxGzM6ClOUaiwas7fKKM3pchwC7zkUp4.jpg', '2025-04-30 18:54:39', '2025-05-10 01:33:22'),
(25, 'Photochromic', 'Trivex', 'Minus > -3.00', '1.53', 'Ya', 'Ya', 'Ya', 'Rabun Jauh', 'Aktivitas Luar Ruangan , Aktivitas Olahraga', '250000', 'produk/aoCLMIJYrT5Cszm1pLogpn0EHUFlwPWGNm1Szqft.jpg', '2025-04-30 18:58:28', '2025-05-10 01:31:10'),
(26, 'Bifokal Flat Top', 'Plastik', 'Minus / Plus', '1.50', 'Ya', 'Tidak', 'Ya', 'Presbiopi, Rabun dekat , Rabun Jauh', 'Membaca dan Menulis', '125000', 'produk/2qomXwSn90ChqQBGReKNeu1asIeJCiG5MARApujZ.jpg', '2025-04-30 19:08:45', '2025-05-08 18:34:45'),
(27, 'Bifokal Round Top', 'Polycarbonate', 'Minus/Plus', '1.59', 'Ya', 'Ya', 'Ya', 'Presbiopi, Rabun dekat , Rabun jauh', 'Membaca dan Menulis , kerja kantor', '250000', 'produk/SCJlIwncn9u6Bfwnq6KriJrW1xxvE5SHeIMIDcUd.jpg', '2025-04-30 19:11:46', '2025-05-05 20:38:57'),
(28, 'Bluechromic', 'Trivex', 'Minus/Plus', '1.53', 'Ya', 'Ya', 'Ya', 'Rabun jauh', 'Penggunaan Gadget ,  Aktivitas Luar Ruangan', '420000', 'produk/ueprR71dYaxJpb2PkJwJoYqBiX4LsCdpI5q0ZVCO.jpg', '2025-04-30 19:15:01', '2025-05-10 01:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin123', 'admin@gmail.com', '$2y$10$WhG2cSlakI6NuIc1ksOu3OmmdCpHUQhKxt/5zLCNNiUj00B5J6atC', NULL, '2025-04-16 21:31:53'),
(2, 'ahmad', 'ahmad@gmail.com', '$2y$12$tVr7L5P6neUugpsZlEAEoeA1b45sZZMVWMxoO36o.44o72ElcWa32', '2025-02-23 18:41:51', '2025-02-23 18:41:51'),
(4, 'Ahmad Dia Ulhaq', 'dia.caem.2019@gmail.com', '$2y$12$aM2dAKNINCBtDrjvEFNw.Osls2pNAByJyKe.69BYbpf6jaZ9yEzmO', '2025-04-17 20:34:17', '2025-04-17 20:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hitung`
--
ALTER TABLE `hitung`
  ADD CONSTRAINT `hitung_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
