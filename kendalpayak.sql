-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kendalpayak`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_01_11_021038_create_warga_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kasun', 'Kasun_Segaran', 'kendalpayak@gmail.com', NULL, '$2y$10$4voKCb9vnBSHPXFnxhMnQ.xmbiXcQAQxW5YBXJmp7FKacwlKtLksC', 'LSCn931nD6cWeM8Y2aFv7z44LHHXFzYpFWMzYSrxPTTKBjogcL4vbgDrtJzD', '2021-01-15 06:49:53', '2021-01-15 06:49:53'),
(3, 'RT_06', 'RT_06', 'kendalpayak06@gmail.com', NULL, '$2y$10$D78IZotRnp.YyYemVQGCDeY/PloAfugkxBm0Mq6rfa4965BadMyM.', 'TkKjyCYOUL1TyEq4nTqYsdSI9fcFmTOeTJD8WO8mmfNYqoL1656XUxE2qJ8O', '2021-01-15 08:11:03', '2021-01-15 08:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jenis_Kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RW` int(11) NOT NULL,
  `RT` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `NIK`, `Nama`, `TTL`, `Tempat_lahir`, `Jenis_Kelamin`, `Alamat`, `Agama`, `RW`, `RT`, `created_at`, `updated_at`) VALUES
(3, '2327382382823', 'Andi', '2222-02-22', 'sidoarjo', 'L', 'dadedwkqmdkqw', 'Islam', 6, 3, '2021-01-11 08:21:00', '2021-01-14 06:41:29'),
(4, '231232312231', 'roby', '3133-02-21', 'sidoarjo', 'L', 'efadas', 'Islam', 6, 3, '2021-01-11 08:22:06', '2021-01-14 06:41:43'),
(6, '32131', 'adq', '2222-12-22', 'sidoarjo', 'L', 'qdwwd', 'Kristen', 6, 6, '2021-01-11 09:44:24', '2021-01-16 06:18:32'),
(8, '43298892', 'wea', '2332-12-23', 'we', 'L', 'efssdsf', 'Konghucu', 6, 6, '2021-01-11 19:11:58', '2021-01-16 01:52:00'),
(9, '2323132', 'asda', '3232-02-23', 'wqeq', 'L', 'wadadas', 'Buddha', 7, 2, '2021-01-11 19:16:35', '2021-01-14 07:36:50'),
(10, '23123', 'dasdad', '1232-12-23', 'asfsaf', 'L', 'wdadws', 'Lainnya', 7, 4, '2021-01-11 19:19:57', '2021-01-14 07:37:08'),
(11, '432432231321', 'adsasd', '1211-12-23', 'sidoarjo', 'P', 'wdwq', 'Islam', 6, 6, '2021-01-12 07:51:23', '2021-01-16 06:18:46'),
(13, '23123123', 'root', '1311-02-23', 'sidoarjo', 'P', 'dasdasd', 'Islam', 7, 2, '2021-01-16 08:23:30', '2021-01-16 08:23:30'),
(14, '23123123', 'root', '1311-02-23', 'sidoarjo', 'P', 'dasdasd', 'Islam', 6, 6, '2021-01-16 08:25:06', '2021-01-16 08:25:06'),
(15, '3213123123', 'dwi', '1231-03-21', 'sidoarjo', 'P', 'dascdasd', 'Islam', 6, 6, '2021-01-16 08:31:20', '2021-01-16 08:31:20'),
(17, '2131231', 'ridd', '3131-02-21', 'sidoarjo', 'L', 'asdasdas', 'Kristen', 6, 6, '2021-01-16 08:40:39', '2021-01-16 08:40:39'),
(18, '20123120301231', 'teqwy', '1211-12-31', 'sidoarjo', 'L', 'huhdiwhiqhd', 'Kristen', 6, 6, '2021-01-17 04:37:46', '2021-01-17 04:37:46'),
(19, '312312312', 'rutt', '1111-12-31', 'sidoarjo', 'P', 'sadasd', 'Katolik', 6, 6, '2021-01-17 04:43:46', '2021-01-17 04:43:46'),
(20, '3123123', 'yuy', '1211-12-31', 'sidoarjo', 'L', 'dadsd', 'Kristen', 6, 6, '2021-01-17 06:07:43', '2021-01-17 06:07:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
