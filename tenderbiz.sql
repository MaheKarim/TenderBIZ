-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 10:27 PM
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
-- Database: `tenderbiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid_infos`
--

CREATE TABLE `bid_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `bidder_id` bigint(20) NOT NULL,
  `bidamount` int(11) NOT NULL,
  `biddes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid_infos`
--

INSERT INTO `bid_infos` (`id`, `service_id`, `bidder_id`, `bidamount`, `biddes`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 58550, 'test work', 1, '2019-12-06 13:43:15', '2019-12-06 14:40:26'),
(2, 2, 3, 156, 'jjhhj', 2, '2019-12-06 13:46:27', '2019-12-06 14:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', '2019-11-30 06:51:53', '2019-11-30 06:51:53'),
(3, 'Testing', '2019-11-30 07:11:26', '2019-11-30 07:11:26');

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
(3, '2019_10_29_194043_create_categories_table', 1),
(4, '2019_10_30_175630_create_user_roles_table', 1),
(5, '2019_11_06_041655_create_services_table', 1),
(6, '2019_12_03_201639_create_teams_table', 2),
(7, '2019_12_06_093256_create_tendersubmits_table', 3),
(8, '2019_12_06_114343_create_reviews_table', 3),
(10, '2019_12_06_182336_create_bid_infos_table', 4);

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reviewer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewer_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewer_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewer_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer_name`, `reviewer_designation`, `reviewer_review`, `reviewer_image`, `created_at`, `updated_at`) VALUES
(2, 'Mahe Karim', 'Dveoper', 'Lorem Ipsum Ipsum', 'reviewer_images/iHqMtGlkRS6f4ROSBXY4lYLeMd89XWmAtGtuBc6a.jpeg', '2019-12-06 06:18:14', '2019-12-06 06:18:14'),
(4, 'Test', 'OOOOOOOOO', 'OOOOOOOOOTest OOOOOOOOO', 'reviewer_images/msjhSeRdNahqoig8dxei8AgSe5iaVZrNongCcZgd.jpeg', '2019-12-06 06:28:52', '2019-12-06 06:28:52'),
(5, 'Boss', 'Cyra Mairo', 'LoremIpsum test', 'reviewer_images/DviYGmeNomtF6Q4bTfMaDtXv47KJBncLR0bHPcxz.jpeg', '2019-12-06 06:31:08', '2019-12-06 06:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_tender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_tender_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_tender_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_tender_any_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_tender_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_tender_name`, `service_tender_description`, `service_tender_quantity`, `service_tender_any_price`, `service_image`, `service_tender_area`, `category_name_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'yyyutuh', 'ukuuu', '12', '1234', 'service_images/MTZUXFBULEe6PkxbyiEETEFxD7RfO6yGWPbaGr0l.jpeg', 'kjukkjkk', '1', 1, '2019-11-30 06:53:49', '2019-11-30 06:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teammember_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teammember_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teammember_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `teammember_name`, `teammember_designation`, `teammember_image`, `created_at`, `updated_at`) VALUES
(4, 'Mahe karim', 'Lorem ipsum, or lipsum as it is sometimes known\\', 'teammember_images/JJMcQnCgxKZIJy48lGLjCFYyeUJyKwR6nSbPpyn6.jpeg', '2019-12-03 18:07:32', '2019-12-03 18:07:32'),
(6, 'Niloy Masum', 'CTO', 'teammember_images/ryuhjBU6nVvJbhbBIMfo8HdhXJUOnUmg6s9tEUMX.jpeg', '2019-12-06 02:01:32', '2019-12-06 02:01:32'),
(7, 'Washing Powder', 'Nirma Washing Powder', 'teammember_images/KQzEdNTZtC3ZWYGsjbX5V9dXfYFc1Fq6ZMdDihQp.jpeg', '2019-12-06 02:02:09', '2019-12-06 02:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$Ub39tUpTmvYEAKKWto.GCuCHXhPTm7DgpLOlVdQTYnFx57i35NGFe', 1, NULL, '2019-11-30 06:51:36', '2019-11-30 06:51:36'),
(2, 'Buyer', 'Buyer@Buyer.com', NULL, '$2y$10$Ljylc/1I0/27K9kHXFWlXu.JEmNSIxjf.6rqOyJdRivp5oYkqexbK', 2, NULL, '2019-12-02 00:03:11', '2019-12-02 00:03:11'),
(3, 'Buyer', 'buy@buy.com', NULL, '$2y$10$j/okgaBkjokhLwgZTQKyWOkcF4gAHd0R1aLzH5vnVOZu3K8AMAQYK', 2, NULL, '2019-12-06 12:48:30', '2019-12-06 12:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Buyer', NULL, NULL),
(3, 'Seller', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid_infos`
--
ALTER TABLE `bid_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid_infos`
--
ALTER TABLE `bid_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
