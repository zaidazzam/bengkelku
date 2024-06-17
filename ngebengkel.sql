-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 11, 2024 at 05:20 AM
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
-- Database: `ngebengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `service_type` enum('repair','wash') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` enum('car','motorcycle') COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` enum('manual','automatic') COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `ammount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('stand_by','on_process','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stand_by',
  `spareparts_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `id_user`, `service_type`, `name`, `vehicle_type`, `transmission`, `license_plate`, `date`, `notes`, `ammount`, `status`, `spareparts_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'repair', 'zaid', 'car', 'manual', 'D 3470 ED', '2024-05-08', 'ganti oli', '1850000', 'done', 1, '2024-05-06 23:50:28', '2024-05-10 02:43:53'),
(3, 1, 'repair', 'zaid', 'car', 'manual', 'D 3470 ED', '2024-05-08', NULL, '1250000', 'on_process', NULL, '2024-05-07 06:21:33', '2024-05-10 03:27:29'),
(4, 1, 'repair', 'alfina', 'motorcycle', 'automatic', 'B 3280 EJ', '2024-05-08', 'ZxZX', '360000', 'on_process', 2, '2024-05-07 06:24:04', '2024-05-10 03:27:25'),
(5, 1, 'repair', 'ucuo', 'car', 'automatic', 'D 2131231 433453', '2024-05-17', 'sdfsfs', '1150000', 'done', 1, '2024-05-10 03:17:15', '2024-05-10 03:18:26'),
(6, 2, 'repair', 'Cbr', 'car', 'automatic', 'B 3280 EJ', NULL, 'fsdf', '650000', 'done', NULL, '2024-05-10 05:30:25', '2024-05-10 05:32:25'),
(7, 1, 'repair', 'Mio Zai', 'motorcycle', 'manual', 'F 2134 FSA', NULL, 'gw kemarin remnya kurang paket', '630000', 'done', 2, '2024-05-10 05:59:32', '2024-05-10 06:01:18'),
(8, 2, 'repair', 'ZX100', 'motorcycle', 'manual', 'D R1', NULL, 'adasa', '220000', 'stand_by', NULL, '2024-05-10 06:06:54', '2024-05-10 06:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `booking_sparepart`
--

CREATE TABLE `booking_sparepart` (
  `id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `sparepart_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_sparepart`
--

INSERT INTO `booking_sparepart` (`id`, `booking_id`, `sparepart_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-05-07 02:33:51', '2024-05-07 02:33:51'),
(2, 1, 1, '2024-05-10 02:43:53', '2024-05-10 02:43:53'),
(3, 5, 1, '2024-05-10 03:18:02', '2024-05-10 03:18:02'),
(4, 4, 2, '2024-05-10 03:19:54', '2024-05-10 03:19:54'),
(5, 7, 1, '2024-05-10 06:01:05', '2024-05-10 06:01:05'),
(6, 7, 2, '2024-05-10 06:01:05', '2024-05-10 06:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_13_152356_create_vehicles_table', 1),
(6, '2023_04_18_113923_create_roles_table', 1),
(7, '2023_04_18_130816_add_role_id_column_to_users_table', 1),
(8, '2023_04_24_020019_create_spareparts_table', 1),
(9, '2023_04_25_035021_create_bookings_table', 1),
(10, '2023_04_28_160831_create_booking_sparepart_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-05-06 23:46:00', '2024-05-06 23:46:00'),
(2, 'user', '2024-05-06 23:46:00', '2024-05-06 23:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

CREATE TABLE `spareparts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id`, `name`, `category`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Kenalpot', 'modif', '500000', '2024-05-07 02:33:29', '2024-05-07 02:33:29'),
(2, 'spion', 'asd', '10000', '2024-05-10 03:19:44', '2024-05-10 03:19:44'),
(3, 'asdadsa', 'asdada', '123132', '2024-05-10 06:02:16', '2024-05-10 06:02:16'),
(4, 'Yamalup', 'Oli', '1313', '2024-05-10 06:19:55', '2024-05-10 06:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `no_hp`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '081234567890', '$2y$10$E6D/557BQhji2WPZagFFKu7pEaoGTU9OEBxaGUHsimtqcAbKXPlDC', 1, '2024-05-06 23:46:00', '2024-05-06 23:46:00'),
(2, 'Zaid Abdullah Azzam', 'azzamzaid10@gmail.com', '089688347718', '$2y$10$UO42oiToV8cMI/b6GjW1WeaP8WknQ4Pq9XbequPTKgsZ1c9aF3Mrm', 2, '2024-05-10 05:25:58', '2024-05-10 05:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` enum('car','motorcycle') COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` enum('manual','automatic') COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `id_user`, `name`, `vehicle_type`, `transmission`, `license_plate`, `created_at`, `updated_at`) VALUES
(1, 1, 'zaid', 'car', 'manual', 'D 3470 ED', '2024-05-06 23:49:38', '2024-05-06 23:49:38'),
(2, 1, 'alfina', 'motorcycle', 'automatic', 'B 3280 EJ', '2024-05-06 23:50:03', '2024-05-06 23:50:03'),
(3, 1, 'ucuo', 'car', 'automatic', 'D 2131231 433453', '2024-05-10 03:16:05', '2024-05-10 03:16:05'),
(5, 1, 'Mio Zai', 'motorcycle', 'manual', 'F 2134 FSA', '2024-05-10 05:56:47', '2024-05-10 05:56:47'),
(6, 2, 'ZX100', 'motorcycle', 'manual', 'D R1', '2024-05-10 06:05:57', '2024-05-10 06:05:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_id_user_foreign` (`id_user`),
  ADD KEY `bookings_spareparts_id_foreign` (`spareparts_id`);

--
-- Indexes for table `booking_sparepart`
--
ALTER TABLE `booking_sparepart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_sparepart_booking_id_foreign` (`booking_id`),
  ADD KEY `booking_sparepart_sparepart_id_foreign` (`sparepart_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spareparts`
--
ALTER TABLE `spareparts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_no_hp_unique` (`no_hp`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_sparepart`
--
ALTER TABLE `booking_sparepart`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spareparts`
--
ALTER TABLE `spareparts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_spareparts_id_foreign` FOREIGN KEY (`spareparts_id`) REFERENCES `spareparts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_sparepart`
--
ALTER TABLE `booking_sparepart`
  ADD CONSTRAINT `booking_sparepart_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_sparepart_sparepart_id_foreign` FOREIGN KEY (`sparepart_id`) REFERENCES `spareparts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
