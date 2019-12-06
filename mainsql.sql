-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table tenderbiz.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
	(1, 'Uncategorized', '2019-11-30 12:51:53', '2019-11-30 12:51:53'),
	(3, 'Testing', '2019-11-30 13:11:26', '2019-11-30 13:11:26');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_10_29_194043_create_categories_table', 1),
	(4, '2019_10_30_175630_create_user_roles_table', 1),
	(5, '2019_11_06_041655_create_services_table', 1),
	(6, '2019_12_03_201639_create_teams_table', 2),
	(7, '2019_12_06_093256_create_tendersubmits_table', 3),
	(8, '2019_12_06_114343_create_reviews_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `reviewer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewer_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewer_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewer_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.reviews: ~2 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id`, `reviewer_name`, `reviewer_designation`, `reviewer_review`, `reviewer_image`, `created_at`, `updated_at`) VALUES
	(2, 'Mahe Karim', 'Dveoper', 'Lorem Ipsum Ipsum', 'reviewer_images/iHqMtGlkRS6f4ROSBXY4lYLeMd89XWmAtGtuBc6a.jpeg', '2019-12-06 12:18:14', '2019-12-06 12:18:14'),
	(4, 'Test', 'OOOOOOOOO', 'OOOOOOOOOTest OOOOOOOOO', 'reviewer_images/msjhSeRdNahqoig8dxei8AgSe5iaVZrNongCcZgd.jpeg', '2019-12-06 12:28:52', '2019-12-06 12:28:52'),
	(5, 'Boss', 'Cyra Mairo', 'LoremIpsum test', 'reviewer_images/DviYGmeNomtF6Q4bTfMaDtXv47KJBncLR0bHPcxz.jpeg', '2019-12-06 12:31:08', '2019-12-06 12:31:08');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_tender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_tender_description` longtext COLLATE utf8mb4_unicode_ci,
  `service_tender_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_tender_any_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_tender_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.services: ~2 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `service_tender_name`, `service_tender_description`, `service_tender_quantity`, `service_tender_any_price`, `service_image`, `service_tender_area`, `category_name_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(2, 'yyyutuh', 'ukuuu', '12', '1234', 'service_images/MTZUXFBULEe6PkxbyiEETEFxD7RfO6yGWPbaGr0l.jpeg', 'kjukkjkk', '1', 1, '2019-11-30 12:53:49', '2019-11-30 12:53:49');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `teammember_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teammember_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teammember_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.teams: ~2 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` (`id`, `teammember_name`, `teammember_designation`, `teammember_image`, `created_at`, `updated_at`) VALUES
	(4, 'Mahe karim', 'Lorem ipsum, or lipsum as it is sometimes known\\', 'teammember_images/JJMcQnCgxKZIJy48lGLjCFYyeUJyKwR6nSbPpyn6.jpeg', '2019-12-04 00:07:32', '2019-12-04 00:07:32'),
	(6, 'Niloy Masum', 'CTO', 'teammember_images/ryuhjBU6nVvJbhbBIMfo8HdhXJUOnUmg6s9tEUMX.jpeg', '2019-12-06 08:01:32', '2019-12-06 08:01:32'),
	(7, 'Washing Powder', 'Nirma Washing Powder', 'teammember_images/KQzEdNTZtC3ZWYGsjbX5V9dXfYFc1Fq6ZMdDihQp.jpeg', '2019-12-06 08:02:09', '2019-12-06 08:02:09');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.tendersubmits
CREATE TABLE IF NOT EXISTS `tendersubmits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.tendersubmits: ~0 rows (approximately)
/*!40000 ALTER TABLE `tendersubmits` DISABLE KEYS */;
/*!40000 ALTER TABLE `tendersubmits` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$Ub39tUpTmvYEAKKWto.GCuCHXhPTm7DgpLOlVdQTYnFx57i35NGFe', 1, NULL, '2019-11-30 12:51:36', '2019-11-30 12:51:36'),
	(2, 'Buyer', 'Buyer@Buyer.com', NULL, '$2y$10$Ljylc/1I0/27K9kHXFWlXu.JEmNSIxjf.6rqOyJdRivp5oYkqexbK', 2, NULL, '2019-12-02 06:03:11', '2019-12-02 06:03:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table tenderbiz.user_roles
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tenderbiz.user_roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', NULL, NULL),
	(2, 'Buyer', NULL, NULL),
	(3, 'Seller', NULL, NULL);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
