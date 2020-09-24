-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 12:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecareer`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qualification_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `qualification_id`, `name`, `created_at`, `updated_at`) VALUES
(11, '42', 'C#', '2020-04-21 14:42:19', '2020-04-21 14:42:19'),
(12, '42', 'PHP', '2020-04-21 14:42:27', '2020-04-21 14:42:27'),
(13, '44', 'PM', '2020-04-21 14:42:33', '2020-04-21 14:42:33'),
(14, '45', 'Python', '2020-04-21 14:42:54', '2020-04-21 14:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_19_160709_create_qualifications_table', 1),
(5, '2020_04_20_043249_create_categories_table', 2),
(8, '2020_04_20_150623_create_user_qualifications_table', 4),
(11, '2014_10_12_000000_create_users_table', 5);

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
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `name`, `created_at`, `updated_at`) VALUES
(42, 'Codeing', '2020-04-21 14:40:47', '2020-04-22 14:07:34'),
(43, 'Quality Assurance', '2020-04-21 14:41:24', '2020-04-21 14:41:24'),
(44, 'Project Management', '2020-04-21 14:41:39', '2020-04-21 14:41:39'),
(45, 'Network Administration', '2020-04-21 14:41:51', '2020-04-21 14:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/profile_pic/default.png',
  `user_type` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `nic`, `phone`, `university`, `student_id`, `company`, `profile_pic`, `user_type`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kavindu Theekshana', 'kavindutheekshana@gmail.com', NULL, '971901306V', '0715421423', 'NSBM', '10013615', NULL, 'uploads/profile_pic/20200418184713.jpg', 0, 1, '$2y$10$npcAwrfGIS8CYf1rUms0SOkEm.mFPOVQb8NQ1r4emOXcOC0t0Tc5S', NULL, '2020-04-21 14:00:47', '2020-04-21 14:00:47'),
(2, 'Adeline Mills', 'emard.devonte@example.org', NULL, '984581624V', '0718082452', 'NSBM', '10610025', NULL, 'uploads/profile_pic/default.png', 1, 1, '$2y$10$woIS.J00uZkAo7xW.eYsbe3g/xsrw42gHWDUnhcQ/Bj4Uk64jpEw.', NULL, '2020-04-21 14:03:02', '2020-04-21 14:03:02'),
(3, 'Esta Reynolds', 'orn.elsie@example.org', NULL, '942561458V', '0710854153', NULL, NULL, 'CreatX Software', 'uploads/profile_pic/default.png', 2, 0, '$2y$10$BJxlTO/ATW/GwTf5xOO7Ge6bd9EBYKsPsOtvXv5D1VGH4DXbGZL0.', NULL, '2020-04-21 14:03:20', '2020-04-21 14:03:20'),
(4, 'Kayli Mertz', 'jbechtelar@example.org', NULL, '948564526V', '0771541453', NULL, '100165256', NULL, 'uploads/profile_pic/default.png', 1, 0, '$2y$10$IB6M/0RlA.mKJ6XDmUFtd./jB5J7xgqHzf4qHPQ/oOiOyekRv3t0m', NULL, '2020-04-21 14:09:49', '2020-04-21 14:09:49'),
(5, 'Elva Kassulke', 'hward@example.org', NULL, '924784695V', '0758468712', NULL, NULL, '99X Software', 'uploads/profile_pic/default.png', 2, 0, '$2y$10$josPuRoCuo0TFFfd5afXLe/iC3bv38Aq2hP5cC/M058KTq4hT7vLe', NULL, '2020-04-21 14:11:14', '2020-04-21 14:11:14'),
(6, 'Leann Ondricka', 'padberg.frida@example.net', NULL, '951451469V', '0712584695', 'Colombo', '12365489', NULL, 'uploads/profile_pic/default.png', 1, 0, '$2y$10$wzLQ/EGIRhZhKtEprvtBjOxy.vBroMVHv1..06LGcYuQFazWxC72W', NULL, '2020-04-21 14:12:33', '2020-04-21 14:12:33'),
(7, 'Niwantha Ranawaka', 'niwantharanwaka@gmail.com', NULL, '964584953V', '0715421547', 'NSBM GREEN UNIVERSITY', '100125648', NULL, 'uploads/profile_pic/default.png', 1, 0, '$2y$10$8jr/et5DZD4fwiufnJoJPOSvf.3YrPY0tJsadqNw27aiOqHLpR/UO', NULL, '2020-04-22 13:51:02', '2020-04-22 13:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_qualifications`
--

CREATE TABLE `user_qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `persantage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_qualifications`
--
ALTER TABLE `user_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_qualifications`
--
ALTER TABLE `user_qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
