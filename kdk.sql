-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2025 at 05:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_cde49d13dfbb1fff31433db501709856', 'i:1;', 1749998254),
('laravel_cache_cde49d13dfbb1fff31433db501709856:timer', 'i:1749998254;', 1749998254);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kdks`
--

CREATE TABLE `kdks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gamintojas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kiekis` int(11) NOT NULL,
  `aprasas` text NOT NULL,
  `kaina` decimal(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kdks`
--

INSERT INTO `kdks` (`id`, `name`, `gamintojas_id`, `tipas_id`, `kiekis`, `aprasas`, `kaina`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'et', 8, 1, 250, 'Sint temporibus sed provident voluptatibus illum eum.', 1860.12, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(3, 'qui', 8, 6, 222, 'Officiis et omnis earum ad quo impedit explicabo.', 8772.33, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(4, 'non', 11, 6, 287, 'Ut labore occaecati odit velit et.', 3220.78, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(5, 'animi', 7, 6, 39, 'Et qui ut est aliquam tenetur.', 6947.86, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(6, 'a', 2, 4, 21, 'Iure quod odio dolorum repudiandae voluptatem.', 5431.62, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(7, 'dolor', 6, 1, 115, 'Rerum sit et consequuntur voluptatum.', 5281.07, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(8, 'maiores', 3, 6, 82, 'Voluptate accusamus quia quia in enim ut pariatur.', 8424.50, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(9, 'soluta', 1, 5, 23, 'Odio rerum soluta sunt impedit iusto.', 912.92, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(10, 'quibusdam', 3, 2, 206, 'Et suscipit dolorum amet ut.', 2856.31, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(11, 'eveniet', 3, 4, 185, 'Optio explicabo aspernatur voluptatibus et molestiae.', 4104.58, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(12, 'nulla', 5, 6, 210, 'Incidunt repellendus quas ea illum.', 1171.80, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(13, 'aperiam', 1, 2, 86, 'Quas neque fugiat ea in provident provident impedit ullam.', 3492.96, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(14, 'aut', 10, 1, 43, 'Eum sint dolor ut fugit.', 4178.92, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(15, 'asperiores', 3, 5, 187, 'Consequatur nihil est ratione officia sed.', 4719.05, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(16, 'rerum', 1, 6, 256, 'Nisi explicabo aut et error.', 3197.70, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(17, 'libero', 7, 2, 172, 'Deleniti accusamus atque sit cum et voluptatibus.', 5539.81, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(18, 'sequi', 2, 4, 287, 'Quia ut voluptates soluta unde.', 5711.86, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(19, 'voluptatem', 12, 1, 243, 'Illo excepturi omnis sequi quasi voluptatum.', 8987.20, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(20, 'minus', 4, 2, 61, 'Eum maxime quod perferendis eligendi rerum odio deserunt cumque.', 5163.01, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34'),
(21, 'sit', 4, 1, 98, 'Quia aliquid explicabo et qui id libero rem.', 7012.62, NULL, '2025-06-15 11:55:34', '2025-06-15 11:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `kdk_gamintojas`
--

CREATE TABLE `kdk_gamintojas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Gname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kdk_gamintojas`
--

INSERT INTO `kdk_gamintojas` (`id`, `Gname`, `email`, `phone`) VALUES
(1, 'NVidia', 'NVidia@example.com', '+370123456789'),
(2, 'AMD', 'AMD@example.com', '+334 163-9244'),
(3, 'Intel', 'Intel@example.com', '+518 640-3340'),
(4, 'Corsair', 'Corsair@example.com', '+734 905-9703'),
(5, 'Asus', 'Asus@example.com', '+782 418-6497'),
(6, 'Gigabyte', 'Gigabyte@example.com', '+418 085-3487'),
(7, 'MSI', 'MSI@example.com', '+206 238-9385'),
(8, 'Samsung', 'Samsung@example.com', '+704 440-6241'),
(9, 'Western Digital', 'Western-Digital@example.com', '+779 565-2443'),
(10, 'Seagate', 'Seagate@example.com', '+678 191-0317'),
(11, 'Kingston', 'Kingston@example.com', '+402 504-3335'),
(12, 'Crucial', 'Crucial@example.com', '+757 324-4698');

-- --------------------------------------------------------

--
-- Table structure for table `kdk_tipas`
--

CREATE TABLE `kdk_tipas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kdk_tipas`
--

INSERT INTO `kdk_tipas` (`id`, `tipas`) VALUES
(1, 'GPU'),
(2, 'CPU'),
(3, 'RAM'),
(4, 'Motinine plokste'),
(5, 'Kietasis diskas'),
(6, 'PSU');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_26_083526_add_two_factor_columns_to_users_table', 1),
(5, '2025_05_26_083544_create_personal_access_tokens_table', 1),
(6, '2025_05_26_083647_create_kdk_tipas_table', 1),
(7, '2025_05_26_083735_create_kdk_gamintojas_table', 1),
(8, '2025_05_26_083808_create_kdks_table', 1),
(9, '2025_05_27_070750_kdk_tipas_insert_data', 1),
(10, '2025_05_27_080746_kdk_gamintojas_insert_data', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NHqelNcDRpyIkdraYlqMnvjjQVko1fessSACpneF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXN3RmVHVUE1eVJnbE9OcWU5T29nYmhRQW1BUE5UVHhLd3dBOWVzRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749996140),
('UWyCt8LixzvaQNzBvX8RoQ9dobHIHOU9c23uiBKq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib2dWNUFvbnpSaXFabThFaVhQZEpKNzl1Y0x0andXcjRVcXRJdzVJcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9LYXRhbG9nYXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJDZMNWwxQ05CNnJuU2I1dDR1bndtQmUudm4xUVhKS2R4MUMveWx0WlFrOGFDbFZWTkJoRDVLIjt9', 1750000017);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'n1', 'n1@gmail.com', NULL, '$2y$12$6L5l1CNB6rnSb5t4unwmBe.vn1QXJKdx1C/yltZQk8aClVVNBhD5K', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-15 11:31:01', '2025-06-15 11:31:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kdks`
--
ALTER TABLE `kdks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kdks_gamintojas_id_foreign` (`gamintojas_id`),
  ADD KEY `kdks_tipas_id_foreign` (`tipas_id`);

--
-- Indexes for table `kdk_gamintojas`
--
ALTER TABLE `kdk_gamintojas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kdk_tipas`
--
ALTER TABLE `kdk_tipas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kdks`
--
ALTER TABLE `kdks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kdk_gamintojas`
--
ALTER TABLE `kdk_gamintojas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kdk_tipas`
--
ALTER TABLE `kdk_tipas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kdks`
--
ALTER TABLE `kdks`
  ADD CONSTRAINT `kdks_gamintojas_id_foreign` FOREIGN KEY (`gamintojas_id`) REFERENCES `kdk_gamintojas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `kdks_tipas_id_foreign` FOREIGN KEY (`tipas_id`) REFERENCES `kdk_tipas` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
