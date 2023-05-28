-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2023 at 02:05 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnwithus`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(251) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '-1685030470.jpg', 'tukuqaj@mailinator.com', 'Omnis quis quos aspe', '2023-05-25 10:48:05', '2023-05-25 10:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `abouts_features`
--

DROP TABLE IF EXISTS `abouts_features`;
CREATE TABLE IF NOT EXISTS `abouts_features` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts_features`
--

INSERT INTO `abouts_features` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'tapa@mailinator.com', 'Fugiat et soluta dol', '2023-05-25 10:50:32', '2023-05-25 10:50:32'),
(2, 'dycile@mailinator.com', 'Ratione vitae distin', '2023-05-25 10:50:35', '2023-05-25 10:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `img`, `type`, `title`, `article`, `article2`, `created_at`, `updated_at`) VALUES
(1, '-1685030175.jpg', 'fylel@mailinator.com', 'hyhyq@mailinator.com', 'Praesentium cupidita', 'Porro iste aute cons', '2023-05-25 10:50:10', '2023-05-25 10:50:10'),
(2, '-1685030183.jpg', 'takycysury@mailinator.com', 'batovi@mailinator.com', 'Repudiandae mollitia', 'Rerum voluptatem au', '2023-05-25 10:50:17', '2023-05-25 10:50:17'),
(3, '-1685030191.jpg', 'hegysujowa@mailinator.com', 'doryfimuti@mailinator.com', 'Voluptas nobis ut ve', 'Nostrum accusamus er', '2023-05-25 10:50:24', '2023-05-25 10:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, '-1685030251.jpg', '2023-05-25 10:19:37', '2023-05-25 10:19:37'),
(2, '-1685030239.jpg', '2023-05-25 10:19:43', '2023-05-25 10:19:43'),
(3, '-1685030422.jpg', '2023-05-25 10:19:49', '2023-05-25 10:19:49'),
(4, '-1685030443.png', '2023-05-25 10:19:56', '2023-05-25 10:19:56'),
(5, '-1685030450.png', '2023-05-25 10:20:02', '2023-05-25 10:20:02'),
(6, '-1685030458.png', '2023-05-25 10:20:09', '2023-05-25 10:20:09'),
(7, '-1685030463.png', '2023-05-25 10:20:15', '2023-05-25 10:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courseID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `img`, `title`, `price`, `time`, `description`, `description2`, `created_at`, `updated_at`) VALUES
(1, '-1685030239.jpg', 'zozygafezi@mailinator.com', '101', '02:22', 'Tempor est obcaecati', 'Obcaecati praesentiu', '2023-05-25 10:48:53', '2023-05-25 10:48:53'),
(2, '-1685030470.jpg', 'pilevaru@mailinator.com', '813', '22:05', 'Eiusmod autem asperi', 'Enim dolores delectu', '2023-05-25 10:49:14', '2023-05-25 10:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `course_booked`
--

DROP TABLE IF EXISTS `course_booked`;
CREATE TABLE IF NOT EXISTS `course_booked` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Hic totam sed in ut', '530', '2023-05-25 10:48:23', '2023-05-25 10:48:23'),
(2, 'Facere nemo odio eu', '229', '2023-05-25 10:48:28', '2023-05-25 10:48:28'),
(3, 'Voluptate quia lauda', '822', '2023-05-25 10:48:34', '2023-05-25 10:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `img`, `title`, `created_at`, `updated_at`) VALUES
(1, '-1685030175.jpg', 'xyfejokaw@mailinator.com', '2023-05-25 10:11:15', '2023-05-25 10:11:15'),
(2, '-1685030183.jpg', 'puxuhe@mailinator.com', '2023-05-25 10:11:23', '2023-05-25 10:11:23'),
(3, '-1685030191.jpg', 'muhixuniq@mailinator.com', '2023-05-25 10:11:31', '2023-05-25 10:11:31'),
(4, '-1685030219.jpg', 'dekuquduho@mailinator.com', '2023-05-25 10:11:59', '2023-05-25 10:11:59'),
(5, '-1685030231.png', 'wuzi@mailinator.com', '2023-05-25 10:12:11', '2023-05-25 10:12:11'),
(6, '-1685030239.jpg', 'hawinop@mailinator.com', '2023-05-25 10:12:19', '2023-05-25 10:12:19'),
(7, '-1685030251.jpg', 'cymawybyva@mailinator.com', '2023-05-25 10:12:31', '2023-05-25 10:12:31'),
(8, '-1685030422.jpg', 'gipuk@mailinator.com', '2023-05-25 10:15:22', '2023-05-25 10:15:22'),
(9, '-1685030432.png', 'conuzonal@mailinator.com', '2023-05-25 10:15:32', '2023-05-25 10:15:32'),
(10, '-1685030443.png', 'byriw@mailinator.com', '2023-05-25 10:15:43', '2023-05-25 10:15:43'),
(11, '-1685030450.png', 'dibimiq@mailinator.com', '2023-05-25 10:15:50', '2023-05-25 10:15:50'),
(12, '-1685030458.png', 'nobim@mailinator.com', '2023-05-25 10:15:58', '2023-05-25 10:15:58'),
(13, '-1685030463.png', 'pefobunu@mailinator.com', '2023-05-25 10:16:03', '2023-05-25 10:16:03'),
(14, '-1685030470.jpg', 'notiv@mailinator.com', '2023-05-25 10:16:10', '2023-05-25 10:16:10'),
(15, '-1685030477.jpg', 'fivazanixe@mailinator.com', '2023-05-25 10:16:17', '2023-05-25 10:16:17'),
(16, '-1685030485.jpg', 'peselohobi@mailinator.com', '2023-05-25 10:16:25', '2023-05-25 10:16:25'),
(17, '-1685030494.jpg', 'voda@mailinator.com', '2023-05-25 10:16:34', '2023-05-25 10:16:34'),
(18, '-1685030502.jpg', 'myjyneja@mailinator.com', '2023-05-25 10:16:42', '2023-05-25 10:16:42'),
(19, '-1685030509.jpg', 'bobim@mailinator.com', '2023-05-25 10:16:49', '2023-05-25 10:16:49'),
(20, '-1685030519.jpg', 'neboxe@mailinator.com', '2023-05-25 10:16:59', '2023-05-25 10:16:59'),
(21, '-1685030526.jpg', 'kuco@mailinator.com', '2023-05-25 10:17:06', '2023-05-25 10:17:06'),
(22, '-1685030536.jpg', 'rutysow@mailinator.com', '2023-05-25 10:17:16', '2023-05-25 10:17:16'),
(23, '-1685030543.jpg', 'qusesamoba@mailinator.com', '2023-05-25 10:17:23', '2023-05-25 10:17:23'),
(24, '-1685030549.jpg', 'fodyzipe@mailinator.com', '2023-05-25 10:17:29', '2023-05-25 10:17:29'),
(25, '-1685030555.jpg', 'cuquboc@mailinator.com', '2023-05-25 10:17:35', '2023-05-25 10:17:35'),
(26, '-1685030567.png', 'sapacuty@mailinator.com', '2023-05-25 10:17:47', '2023-05-25 10:17:47'),
(27, '-1685030573.png', 'jebocozet@mailinator.com', '2023-05-25 10:17:53', '2023-05-25 10:17:53'),
(28, '-1685030579.png', 'hehuxod@mailinator.com', '2023-05-25 10:17:59', '2023-05-25 10:17:59'),
(29, '-1685030586.png', 'cozutuh@mailinator.com', '2023-05-25 10:18:06', '2023-05-25 10:18:06'),
(30, '-1685030595.png', 'fidu@mailinator.com', '2023-05-25 10:18:15', '2023-05-25 10:18:15'),
(31, '-1685030603.png', 'quvut@mailinator.com', '2023-05-25 10:18:23', '2023-05-25 10:18:23'),
(32, '-1685030609.png', 'belujacyce@mailinator.com', '2023-05-25 10:18:29', '2023-05-25 10:18:29'),
(33, '-1685030615.png', 'lowe@mailinator.com', '2023-05-25 10:18:35', '2023-05-25 10:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_09_121304_create_files_table', 1),
(6, '2023_05_10_054821_create_sliders_table', 1),
(7, '2023_05_10_073843_create_clients_table', 1),
(8, '2023_05_10_080819_create_abouts_table', 1),
(9, '2023_05_10_084214_create_facts_table', 1),
(10, '2023_05_10_085358_create_courses_table', 1),
(11, '2023_05_10_095136_create_why_choose_us_table', 1),
(12, '2023_05_11_143742_create_abouts_features_table', 1),
(13, '2023_05_12_020341_create_teachers_table', 1),
(14, '2023_05_12_124117_create_wishlists_table', 1),
(15, '2023_05_12_124454_create_bookings_table', 1),
(16, '2023_05_12_124736_create_blogs_table', 1),
(17, '2023_05_12_125330_create_testimonials_table', 1),
(18, '2023_05_12_125749_create_settings_table', 1),
(19, '2023_05_12_132048_create_course_bookeds_table', 1),
(20, '2023_05_13_124046_create_newsletters_table', 1),
(21, '2023_05_16_111111_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseID` bigint UNSIGNED DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esewa_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_userid_index` (`userID`),
  KEY `orders_courseid_index` (`courseID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `siteKey` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siteValue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `siteKey`, `siteValue`, `created_at`, `updated_at`) VALUES
(1, 'Logo', '-1685030231.png', '2023-05-25 10:52:00', '2023-05-25 10:52:00'),
(2, 'partner1', 'Minima doloribus nob', '2023-05-25 10:56:06', '2023-05-25 10:56:06'),
(3, 'partner2', 'Enim est fuga Labor', '2023-05-25 10:56:18', '2023-05-25 10:56:18'),
(4, 'partner3', 'Omnis aut voluptatem', '2023-05-25 10:56:26', '2023-05-25 10:56:26'),
(5, 'Gmail', 'sdwasd@gmil.com', '2023-05-25 10:58:19', '2023-05-25 10:58:19'),
(6, 'Tel_no', '061-224433', '2023-05-25 10:58:46', '2023-05-25 10:58:46'),
(7, 'Phone', '9806630977', '2023-05-25 10:59:00', '2023-05-27 08:23:01'),
(8, 'facebook_site', 'https://www.facebook.com/', '2023-05-25 11:01:29', '2023-05-25 11:01:29'),
(9, 'twitter_site', 'https://www.twitter.com/', '2023-05-25 11:03:13', '2023-05-25 11:03:13'),
(10, 'instagram_site', 'https://www.instagram.com/', '2023-05-25 11:05:59', '2023-05-25 11:05:59'),
(11, 'copyright', 'Lorem quis reiciendi', '2023-05-25 11:07:47', '2023-05-25 11:07:47'),
(12, 'whyChooseUsDesc', 'Recusandae Iure est Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, veritatis.', '2023-05-27 08:11:52', '2023-05-27 08:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '-1685030219.jpg', 'vobefaveg@mailinator.com', 'Laborum Est enim q', '2023-05-25 10:21:23', '2023-05-25 10:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `teacherID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedIn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`teacherID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `img`, `name`, `post`, `field`, `experience`, `description`, `facebook`, `twitter`, `linkedIn`, `created_at`, `updated_at`) VALUES
(1, '-1685030477.jpg', 'fami@mailinator.com', 'mazidabete@mailinator.com', 'lupenas@mailinator.com', 'meqad@mailinator.com', 'bedewepe@mailinator.com', 'cyzyxyzuge@mailinator.com', 'syvabunud@mailinator.com', 'qyjo@mailinator.com', '2023-05-25 10:49:27', '2023-05-25 10:49:27'),
(2, '-1685030509.jpg', 'celejyz@mailinator.com', 'hygy@mailinator.com', 'wuzadycywe@mailinator.com', 'qalehi@mailinator.com', 'poba@mailinator.com', 'rowyguxy@mailinator.com', 'tesyjuzo@mailinator.com', 'dybopewe@mailinator.com', '2023-05-25 10:49:39', '2023-05-25 10:49:39'),
(3, '-1685030502.jpg', 'cesi@mailinator.com', 'vequ@mailinator.com', 'qybyfoged@mailinator.com', 'hyhe@mailinator.com', 'hotyw@mailinator.com', 'kuzukovi@mailinator.com', 'dekojowu@mailinator.com', 'jobomexovy@mailinator.com', '2023-05-25 10:49:50', '2023-05-25 10:49:50'),
(4, '-1685030526.jpg', 'hevezila@mailinator.com', 'byzedygi@mailinator.com', 'terawer@mailinator.com', 'gonadop@mailinator.com', 'cevyc@mailinator.com', 'jigiquxo@mailinator.com', 'hynawycor@mailinator.com', 'nobyfefid@mailinator.com', '2023-05-25 10:50:02', '2023-05-25 10:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kylie Stout', 'Mollitia in consecte', '+1 (508) 694-3369', 'admin1@gmail.com', 1, NULL, '$2y$10$MDDRZS/YZ9QTlry6ZzcJcuz0tlURrx/NlHyLM0br.xG8oSexQ.C76', NULL, '2023-05-25 09:44:49', '2023-05-25 09:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

DROP TABLE IF EXISTS `why_choose_us`;
CREATE TABLE IF NOT EXISTS `why_choose_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `logo`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fa-regular fa-user', 'dujosupaf@mailinator.com', 'Officia et qui quia', '2023-05-25 10:37:57', '2023-05-25 10:37:57'),
(2, 'fa-solid fa-gear', 'zimetyly@mailinator.com', 'Qui qui vitae dolore', '2023-05-25 10:38:05', '2023-05-25 10:38:05'),
(3, 'fa-solid fa-gear', 'vywi@mailinator.com', 'Accusantium officia', '2023-05-25 10:38:14', '2023-05-25 10:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` bigint UNSIGNED DEFAULT NULL,
  `courseID` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wishlists_userid_index` (`userID`),
  KEY `wishlists_courseid_index` (`courseID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
