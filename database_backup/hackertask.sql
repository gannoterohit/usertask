-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 10:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackertask`
--

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_11_02_174557_create_tasks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `task_detail` varchar(255) NOT NULL,
  `task_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `username`, `task_detail`, `task_type`, `created_at`, `updated_at`) VALUES
(33, '128', 'php', 'Pending', '2023-11-03 03:53:45', '2023-11-03 03:53:45'),
(34, '127', 'react.js', 'Pending', '2023-11-03 03:54:02', '2023-11-03 03:54:02'),
(35, '129', 'laravel', 'Done', '2023-11-03 03:54:13', '2023-11-03 03:54:13'),
(36, '130', 'php', 'Pending', '2023-11-03 03:54:24', '2023-11-03 03:54:24'),
(37, '131', 'php', 'Pending', '2023-11-03 03:54:39', '2023-11-03 03:54:39'),
(38, '132', 'html', 'Done', '2023-11-03 03:54:53', '2023-11-03 03:54:53'),
(39, '134', 'php', 'Pending', '2023-11-03 03:55:04', '2023-11-03 03:55:04'),
(40, '133', 'php', 'Pending', '2023-11-03 03:55:22', '2023-11-03 03:55:22'),
(41, '135', 'c++', 'Done', '2023-11-03 03:55:41', '2023-11-03 03:55:41'),
(42, '136', 'C++', 'Pending', '2023-11-03 03:55:51', '2023-11-03 03:55:51'),
(44, '139', 'java', 'Pending', '2023-11-03 03:56:15', '2023-11-03 03:56:15'),
(45, '140', 'php', 'Pending', '2023-11-03 03:56:24', '2023-11-03 03:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(127, 'aaditya', 'admin@gmail.com', NULL, '9009775909', NULL, '2023-11-03 03:24:20', '2023-11-03 03:24:20'),
(128, 'aakash', 'admin123@gmail.com', NULL, '9009775909', NULL, '2023-11-03 03:24:45', '2023-11-03 03:24:45'),
(129, 'rohit', 'rohit@gmail.com', NULL, '9009775909', NULL, '2023-11-03 03:25:19', '2023-11-03 03:25:19'),
(130, 'rahul', 'rahul@gmail.com', NULL, '9009776786', NULL, '2023-11-03 03:25:43', '2023-11-03 03:25:43'),
(131, 'vishal', 'vishal@gmail.com', NULL, '9009775904', NULL, '2023-11-03 03:27:22', '2023-11-03 03:27:22'),
(132, 'mukesh jat', 'mukesh@gmail.com', NULL, '9009775904', NULL, '2023-11-03 03:27:49', '2023-11-03 03:27:49'),
(133, 'sachin', 'sachin@gmail.com', NULL, '6543456776', NULL, '2023-11-03 03:28:20', '2023-11-03 03:28:20'),
(134, 'poonam', 'poonam@gmail.com', NULL, '8984678645', NULL, '2023-11-03 03:28:40', '2023-11-03 03:28:40'),
(135, 'nikita', 'nikita@gmail.com', NULL, '6543456776', NULL, '2023-11-03 03:29:07', '2023-11-03 03:29:07'),
(136, 'ravina', 'ravina@gmail.com', NULL, '9009775904', NULL, '2023-11-03 03:29:27', '2023-11-03 03:29:27'),
(137, 'Ram', 'Ram@gmail.com', NULL, '6543456776', NULL, '2023-11-03 03:29:46', '2023-11-03 03:29:46'),
(138, 'Anjali', 'anjali@gmail.com', NULL, '9009775904', NULL, '2023-11-03 03:30:19', '2023-11-03 03:30:19'),
(139, 'jyoti', 'jyoti@gmail.com', NULL, '6543456776', NULL, '2023-11-03 03:31:09', '2023-11-03 03:31:09'),
(140, 'sejal', 'sejal@gmail.com', NULL, '6543456776', NULL, '2023-11-03 03:31:32', '2023-11-03 03:31:32');

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
