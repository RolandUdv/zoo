-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2020 at 08:44 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claybrook`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `ad_id` bigint(20) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `company_id` varchar(15) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_phone` varchar(20) NOT NULL,
  `company_phone_secondary` varchar(20) DEFAULT NULL,
  `company_contact_name` varchar(255) NOT NULL,
  `company_existing` tinyint(2) NOT NULL,
  `company_street` varchar(255) NOT NULL,
  `company_town` varchar(50) NOT NULL,
  `company_county` varchar(50) NOT NULL,
  `company_country` varchar(50) NOT NULL,
  `company_postcode` varchar(15) NOT NULL,
  `animal_id` int(20) NOT NULL,
  `ad_sponsorband` varchar(10) NOT NULL,
  `ad_from` date NOT NULL,
  `ad_until` date NOT NULL,
  `ad_price` int(10) DEFAULT NULL,
  `ad_signage_area` varchar(30) NOT NULL,
  `ad_photo` varchar(255) DEFAULT NULL,
  `special_note` mediumtext DEFAULT NULL,
  `ad_agreement_signed` varchar(255) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `ad_verified` tinyint(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`ad_id`, `ad_name`, `company_id`, `company_name`, `company_phone`, `company_phone_secondary`, `company_contact_name`, `company_existing`, `company_street`, `company_town`, `company_county`, `company_country`, `company_postcode`, `animal_id`, `ad_sponsorband`, `ad_from`, `ad_until`, `ad_price`, `ad_signage_area`, `ad_photo`, `special_note`, `ad_agreement_signed`, `user_id`, `user_name`, `user_email`, `ad_verified`, `created_at`, `updated_at`) VALUES
(1, 'testAd1', NULL, '1', '32323', NULL, 'dsdsds', 0, 'dsdsds', 'dsdsds', 'dsdsds', 'dsdsds', 'dsdsds', 6, '1/8', '2020-06-15', '2020-07-31', NULL, '1/8', NULL, NULL, 'dsdsds', 2, 'admin', 'admin@admin.com', 1, '2020-06-15 19:55:39', '2020-07-17 23:47:59'),
(2, 'McDonald\'s', NULL, 'McDonald\'s Corporation', '3705244', NULL, 'Chris Kempczinski (CEO)', 0, 'Apple Street', 'New York', 'Brooklyn', 'United States', 'NYC238123', 8, '1/8', '2020-06-15', '2020-07-31', NULL, '1/8', 'loose_change1_1592341503.jpg', NULL, 'Chris Kempczinski', 2, 'admin', 'admin@admin.com', 1, '2020-06-15 19:59:16', '2020-06-16 20:05:03'),
(4, 'Demo Advertisement', 'Demo', 'Demo Advertisement', '1234567890', NULL, 'Ms. Demo Advertisement', 0, '23 Demo Street', 'Demotown', 'Demoshire', 'United Kingdom', 'DE3 0DE', 7, '1/8', '2020-06-16', '2020-07-31', NULL, '1/8', '800px-Test-Logo.svg_1595049869.png', 'Demo Advertisement', 'Demo Advertisement', 2, 'admin', 'admin@admin.com', 1, '2020-06-15 23:47:23', '2020-07-18 04:26:42'),
(5, 'Zenth Staybrite Ltd', 'SP1021', 'Zenth Staybrite Ltd', '532346', NULL, 'Mrs Jane Woods (Senior Accountant)', 0, '45 Blackwood Road', 'Longbottom', 'North Yorkshire', 'United Kingdom', 'NY12 D454', 5, '1/8', '2020-06-16', '2020-07-21', NULL, '1/8', 'zenith-staybrite_1592346989.png', NULL, 'J Woods', 2, 'admin', 'admin@admin.com', 1, '2020-06-16 00:11:12', '2020-06-16 21:36:29'),
(9, 'Giraffe Ad', NULL, 'Adverting Inc', '4343', NULL, 'noimag', 0, 'noimag', 'noimag', 'noimag', 'noimag', 'noimag', 9, 'A', '2020-06-16', '2020-07-31', NULL, '1/8', 'kids-camp_1592340977.jpg', 'noimag', 'noimag', 2, 'admin', 'admin@admin.com', 1, '2020-06-16 14:22:53', '2020-07-17 23:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animal_id` bigint(20) UNSIGNED NOT NULL,
  `species` varchar(255) NOT NULL DEFAULT 'N/A',
  `species_category` varchar(255) NOT NULL DEFAULT 'N/A',
  `name` varchar(255) NOT NULL DEFAULT 'N/A',
  `animal_photo` varchar(255) NOT NULL DEFAULT 'N/A',
  `dob` date DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `location_code` varchar(10) NOT NULL DEFAULT 'N/A',
  `born_in` varchar(255) DEFAULT 'N/A',
  `special_note` longtext DEFAULT 'N/A',
  `date_joined_zoo` date DEFAULT NULL,
  `join_dimension` varchar(255) DEFAULT 'N/A',
  `average_dimension` varchar(255) DEFAULT 'N/A',
  `average_lifespan` varchar(30) DEFAULT NULL,
  `dietary_req` mediumtext DEFAULT 'N/A',
  `habitat_description` varchar(255) DEFAULT 'N/A',
  `mammal_gestational` varchar(255) DEFAULT 'N/A',
  `mammal_category` varchar(255) DEFAULT 'N/A',
  `mammal_colour` varchar(255) DEFAULT 'N/A',
  `bird_nest_construction` varchar(255) DEFAULT 'N/A',
  `bird_clutch_size` varchar(255) DEFAULT 'N/A',
  `bird_wingspan` varchar(255) DEFAULT 'N/A',
  `bird_ability_fly` varchar(255) DEFAULT 'N/A',
  `bird_colour` varchar(255) DEFAULT 'N/A',
  `fish_reprod_type` varchar(255) DEFAULT 'N/A',
  `fish_avg_no_offspring` varchar(255) DEFAULT 'N/A',
  `fish_avg_clutch` varchar(255) DEFAULT 'N/A',
  `rep_reproduction` varchar(255) DEFAULT 'N/A',
  `rep_avg_no_offspring` varchar(255) DEFAULT 'N/A',
  `rep_avg_clutch` varchar(255) DEFAULT 'N/A',
  `ach_medical_record` longtext DEFAULT 'N/A',
  `ach_transfer_from_zoo` varchar(255) DEFAULT 'N/A',
  `ach_reason_transfer` longtext DEFAULT 'N/A',
  `ach_date_animal_death` date DEFAULT NULL,
  `ach_cause_death` longtext DEFAULT 'N/A',
  `date_incineration_animal` varchar(255) DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animal_id`, `species`, `species_category`, `name`, `animal_photo`, `dob`, `age`, `location_code`, `born_in`, `special_note`, `date_joined_zoo`, `join_dimension`, `average_dimension`, `average_lifespan`, `dietary_req`, `habitat_description`, `mammal_gestational`, `mammal_category`, `mammal_colour`, `bird_nest_construction`, `bird_clutch_size`, `bird_wingspan`, `bird_ability_fly`, `bird_colour`, `fish_reprod_type`, `fish_avg_no_offspring`, `fish_avg_clutch`, `rep_reproduction`, `rep_avg_no_offspring`, `rep_avg_clutch`, `ach_medical_record`, `ach_transfer_from_zoo`, `ach_reason_transfer`, `ach_date_animal_death`, `ach_cause_death`, `date_incineration_animal`, `created_at`, `updated_at`) VALUES
(5, 'Lowland Gorilla', 'Mammal - Primate', 'Redwell', 'animal-hero-gorilla_1592319041.jpg', '1995-03-15', NULL, 'MC1-A1', 'Wild', 'N/A', '2007-09-21', 'Height: 1.75m, Weight: 200kg', 'Height 1.65–1.75 metres (5 ft 5 in–5 ft 9 in), and in weight 140–200 kg (310–440 lb).', '30-50 years', '2.2 Kg Green Leaf Matter, 1.5 Kg Assorted Fruit', 'West and Central Africa', '8 months', 'Eutheria', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '-Front canine tooth damaged on outer compound fence after fall.  Minor dental treatment carried out. (11/1/2009)', 'N/A', 'N/A', NULL, 'N/A', 'N/A', '2020-06-15 01:12:07', '2020-06-17 00:13:07'),
(6, 'Hippopotamus', 'Mammal', 'Hippo', 'hippo_1592356269.jpg', '1990-01-17', NULL, 'MC1-A3', 'Captivity', 'N/A', '2020-05-04', 'Male: 1,500 – 1,800 kg (Adult), Female: 1,300 – 1,500 kg (Adult)', 'Male: 1,500 – 1,800 kg (Adult), Female: 1,300 – 1,500 kg (Adult)', '40-50 years', 'Herbivore', 'sub-Saharan Africa', '243 days', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-15 01:30:32', '2020-06-17 00:11:09'),
(7, 'Lion', 'Mammal', 'Bob', 'lion_1592356179.jpeg', NULL, NULL, 'test', 'Captivity', 'test', '2020-04-29', 'test', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-15 01:32:38', '2020-06-17 00:09:39'),
(8, 'Kangaroo', 'Mammal', 'Jack', 'a-kangaroo02-joe-wells_1592341710.jpg', '2017-07-07', NULL, 'MC3-AB2', 'Captivity', 'test', '2020-06-16', 'test', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-16 14:16:09', '2020-06-16 20:08:30'),
(9, 'Giraffe', 'African artiodactyl mammal', 'Giri', 'giraffe_1592339985.jpg', '2016-02-10', NULL, 'MC2-AB2', 'Wild', 'animalss', '2020-06-16', 'Height: 4.6m – 6.1 m, 843kg', 'Height: 4.6m – 6.1 m, 800kg', '26 years', 'Acacia', 'Savanna, Grassland, Woodland', '15 months', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-16 14:17:01', '2020-06-16 19:41:42'),
(10, 'Zebra', 'Mammal', 'Stripy', 'zebra_1592356161.jpg', NULL, NULL, 'noimag', 'Captivity', 'noimag', '2020-06-17', 'noimag', 'noimag', 'noimag', 'noimag', 'noimag', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-16 14:21:54', '2020-06-17 00:09:21'),
(11, 'Camel', 'Camel', 'Camel', 'camel2_1592356227.jpg', NULL, NULL, 'Camel', 'Captivity', 'Camel', '2019-12-12', 'Camel', 'Camel', 'Camel', 'Camel', 'Camel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-17 00:01:23', '2020-06-17 00:10:27'),
(12, 'Penguin', 'Penguin', 'Penguin', 'penguin_1592356150.jpg', '2014-06-19', NULL, 'Penguin', 'Captivity', 'Penguin', '2020-06-17', 'Penguin', 'Penguin', 'Penguin', 'Penguin', 'Penguin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-17 00:02:05', '2020-06-17 00:09:10'),
(13, 'Seal', 'Seal', 'Seal', 'seal_1592356140.jpg', '2010-02-06', NULL, 'Seal', 'Captivity', 'Seal', '2020-04-26', 'Seal', 'Seal', 'Seal', 'Seal', 'Seal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-17 00:03:02', '2020-06-17 00:09:00'),
(14, 'Tiger', 'Tiger', 'Tiger', 'tiger_1592356113.jpg', '2008-02-27', NULL, 'Tiger', 'Captivity', 'Tiger', '2018-06-01', 'Tiger', 'Tiger', 'Tiger', 'Tiger', 'Tiger', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-17 00:04:00', '2020-06-17 00:08:33'),
(15, 'Panda', 'Panda', 'Panda', 'panda_1592356124.jpg', '2012-10-05', NULL, 'Panda', 'Captivity', 'Panda', '2019-03-16', 'Panda', 'Panda', 'Panda', 'Panda', 'Panda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-17 00:05:00', '2020-06-17 00:08:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_id`, `username`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 'admin', 'It was really great', 5, '2020-06-17 03:03:00', NULL),
(3, 2, 'admin', 'It was really great', 5, '2020-06-17 03:03:00', NULL),
(4, 2, 'admin', 'It was really great', 5, '2020-06-17 03:03:00', NULL),
(5, 2, 'admin', 'This is a review', 4, '2020-06-17 11:18:29', '2020-06-17 11:18:29'),
(6, 2, 'admin', 'Great', 5, '2020-06-17 11:19:07', '2020-06-17 11:19:07'),
(7, 2, 'admin', 'A lot of animals', 4, '2020-06-17 11:19:17', '2020-06-17 11:19:17'),
(8, 2, 'admin', 'Excellent customer service', 5, '2020-06-17 11:19:28', '2020-06-17 11:19:28'),
(9, 2, 'admin', 'Not bad, will probably come back in the near future with family and friends', 4, '2020-06-17 11:19:55', '2020-06-17 11:19:55'),
(10, 2, 'admin', 'The queue took forever!', 3, '2020-06-17 11:26:01', '2020-06-17 11:26:01'),
(11, 2, 'admin', 'It was great but could\'ve been better', 4, '2020-06-17 11:32:17', '2020-06-17 11:32:17'),
(13, 2, 'admin', 'Great', 5, '2020-07-18 04:28:34', '2020-07-18 04:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(2) NOT NULL DEFAULT 0,
  `isStaff` tinyint(2) DEFAULT 0,
  `isSponsor` tinyint(2) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`id`, `name`, `isAdmin`, `isStaff`, `isSponsor`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 1, 1, 1, 'admin@admin.com', NULL, '$2y$10$inHesLBqeJo6zXLUCqMc8./ukB9FkmTfteVtvGYFeRDCV8aoFZTF6', NULL, '2020-06-14 14:22:18', '2020-06-14 14:22:18'),
(3, 'Roland Udvarlaki', 0, 0, 1, 'u.roland58@gmail.com', NULL, '$2y$10$YKB3VfS0N2lkIjRb6xvc6e65sZFk/lp4C4BDk7WzIGLhPcbBn5iLy', NULL, '2020-06-14 14:26:59', '2020-06-15 14:14:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `ad_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
