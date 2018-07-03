-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 11:53 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_mula`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_pages`
--

CREATE TABLE `content_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` longtext COLLATE utf8mb4_unicode_ci,
  `page_order` tinyint(4) DEFAULT NULL,
  `display_status` tinyint(4) NOT NULL DEFAULT '1',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_pages`
--

INSERT INTO `content_pages` (`id`, `page_name`, `page_slug`, `page_description`, `page_order`, `display_status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(5, 'Samples', 'samples', '<p>1111111111</p>', 21, 1, 'sasa', 'asas', 'asas', '2018-06-28 02:22:36', '2018-06-28 02:22:36'),
(6, 'About Us', 'about-us', '<p>1111111111</p>', 2, 1, 'sasa', 'asas', 'asas', '2018-06-28 02:25:50', '2018-06-28 02:25:50'),
(7, 'Our Terms', 'asasasa-2', '1111111111', 21, 0, 'sasa', 'asas', 'asas', '2018-06-28 02:26:08', '2018-06-28 02:26:08'),
(8, 'Your Privacy', 'asasasa-3', '1111111111', 21, 0, 'sasa', 'asas', 'asas', '2018-06-28 02:26:23', '2018-06-28 02:26:23'),
(9, 'Logo Design', 'asasasa-4', '1111111111', 21, 0, 'sasa', 'asas', 'asas', '2018-06-28 02:26:41', '2018-06-28 02:26:41'),
(10, 'Digital Marketing', 'asasasa-5', '1111111111', 21, 0, 'sasa', 'asas', 'asas', '2018-06-28 02:27:03', '2018-06-28 02:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_reply_email` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `email`, `no_reply_email`, `phone_number`, `contact_address`, `meta_title`, `meta_description`, `meta_keywords`, `logo_image`) VALUES
(1, 'sunilp333@gmail.comsd', 'atrmula@no-reply.comsd', '8764321', 'NOIDA', 'Artmula - title', 'Artmula - descritions', 'Artmula - Keywords', '1530091963.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_25_080617_create_pages_table', 1),
(4, '2018_06_26_044510_add_role_to_users_table', 1),
(5, '2018_06_26_060721_create_roles_table', 1),
(6, '2018_06_26_061541_create_role_user_table', 1),
(7, '2018_06_26_101850_create_new_tests_table', 2),
(8, '2018_06_27_053206_create_admin_global_settings_table', 3),
(9, '2018_06_27_110105_create_admin_payment_settings_table', 4),
(10, '2018_06_28_050406_content_pages', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_order` tinyint(4) NOT NULL,
  `display_status` tinyint(4) NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_slug`, `page_description`, `page_order`, `display_status`, `meta_title`, `meta_description`, `meta_keyword`, `role`, `created_at`, `updated_at`) VALUES
(1, 'df', 'slug', 'df', 1, 1, 'meta_title', 'meta_description', 'meta_keyword', 'user', '2018-06-26 04:23:48', '2018-06-26 04:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_options`
--

CREATE TABLE `payment_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `currency` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_gateway_environment` tinyint(4) NOT NULL DEFAULT '0',
  `stripe_client_id` text COLLATE utf8mb4_unicode_ci,
  `stripe_secret_key` text COLLATE utf8mb4_unicode_ci,
  `test_stripe_secret_key` text COLLATE utf8mb4_unicode_ci,
  `test_stripe_client_id` text COLLATE utf8mb4_unicode_ci,
  `stripe_publish_key` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_options`
--

INSERT INTO `payment_options` (`id`, `currency`, `currency_code`, `stripe_gateway_environment`, `stripe_client_id`, `stripe_secret_key`, `test_stripe_secret_key`, `test_stripe_client_id`, `stripe_publish_key`) VALUES
(1, 'cv', 'cv', 1, 'sdsd', 'sdsd', 'sdsdsdsdsd', 'sdsd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Website User', '2018-06-26 01:07:09', '2018-06-26 01:07:09'),
(2, 'admin', 'Website Owner', '2018-06-26 01:07:09', '2018-06-26 01:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `phone_number` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status`, `phone_number`, `contact_address`, `user_slug`) VALUES
(1, 'Employee Name1', 'sunilp333@gmailcom', '$2y$10$EPfqTiHYiH0vgLz3K/MbLe8fWyh96/wcC6YG7i2pleDkhmdHHxpka', 'an42OYoumpeU6zolcEOfkyVcGAk6U1E1zCSWNOeUVAKygIvRcE04F2RyXj6N', '2018-06-26 01:07:09', '2018-06-26 01:07:09', 'user', 0, '12345678', '344444', '3333'),
(2, 'Manager Name', 'admin@gmail.com', '$2y$10$8jy1WkCCTzokKfVKFJfeQuijR1UrLCYR5D6hEFt/daxD/6IoHvbfC', 'vo9VZbfSmpUz5K3enoraUofhhWJVtOraAu87KPBPFiQPzwTIYJzndzInzATW', '2018-06-26 01:07:09', '2018-06-26 01:07:09', 'user', 0, '12345678', '344444', '3333'),
(6, 'sdsds@asd.hj', 'sdsds@asd.hj', '$2y$10$KHI3uQ6AlDUEJ2qSNJB9xuOx2EY6BnUSnJ2ujJwxrf2LLTXJnHpFS', 'bSUsxxnYT7uzJyGSJBjMMfoF8iQ8GNh8XA7Hh7FdOKDARK1gzvMNXojlpyzB', '2018-06-26 02:41:34', '2018-06-26 02:41:34', 'user', 0, '11111', 'ghgh', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_pages`
--
ALTER TABLE `content_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_options`
--
ALTER TABLE `payment_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `content_pages`
--
ALTER TABLE `content_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_options`
--
ALTER TABLE `payment_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
