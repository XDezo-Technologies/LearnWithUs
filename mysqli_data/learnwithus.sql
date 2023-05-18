-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2023 at 12:07 PM
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
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'pebe@mailinator.com', 'Consequuntur repelle', '2023-05-17 07:04:11', '2023-05-17 07:04:11'),
(2, 'jaqehidyz@mailinator.com', 'Quibusdam incididunt', '2023-05-17 07:04:17', '2023-05-17 07:04:17');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `img`, `type`, `title`, `article`, `article2`, `created_at`, `updated_at`) VALUES
(1, '-1684384237.jpg', 'news', 'kutupi@mailinator.com', 'Voluptate blanditiis', 'Atque saepe eiusmod', '2023-05-17 22:46:36', '2023-05-17 22:46:36'),
(2, '-1684384252.jpg', 'si-fi', 'pejilicobo@mailinator.com', 'Duis neque qui eaque', 'Ullamco velit volup', '2023-05-17 22:46:49', '2023-05-17 22:46:49'),
(3, '-1684384261.jpg', 'fedadiqa@mailinator.com', 'juticeh@mailinator.com', 'Aspernatur elit nos', 'Sint magnam non sed', '2023-05-17 22:47:01', '2023-05-17 22:47:01'),
(4, '-1684384280.jpg', 'ronafyxop@mailinator.com', 'zaco@mailinator.com', 'Ea ea voluptatem No', 'Voluptatem officia s', '2023-05-17 23:21:07', '2023-05-17 23:21:07'),
(5, '-1684384280.jpg', 'deholid@mailinator.com', 'homyfi@mailinator.com', 'Adipisci corrupti n', 'Quia occaecat qui do', '2023-05-17 23:23:22', '2023-05-17 23:23:22'),
(6, '-1684384237.jpg', 'jeqifuqeqi@mailinator.com', 'xujiqava@mailinator.com', 'Enim deserunt cupida', 'Rerum accusantium en', '2023-05-17 23:23:50', '2023-05-17 23:23:50'),
(7, '-1684384261.jpg', 'cejo@mailinator.com', 'sekid@mailinator.com', 'Ut est quasi error', 'Consequatur Minima', '2023-05-17 23:24:00', '2023-05-17 23:24:00'),
(8, '-1684384261.jpg', 'xosiwewah@mailinator.com', 'liwofyrid@mailinator.com', 'Nisi id aspernatur n', 'Rem quos ullamco ame', '2023-05-17 23:24:28', '2023-05-17 23:24:28'),
(9, '-1684384237.jpg', 'vuhe@mailinator.com', 'ribomahigo@mailinator.com', 'Dolore maiores tempo', 'Non et corporis fuga', '2023-05-17 23:24:46', '2023-05-17 23:24:46'),
(10, '-1684384237.jpg', 'zihovidop@mailinator.com', 'dufakyzyv@mailinator.com', 'Voluptatem et ipsam', 'Adipisicing minim al', '2023-05-17 23:24:54', '2023-05-17 23:24:54'),
(11, '-1684327684.jpg', 'zegi@mailinator.com', 'zehy@mailinator.com', 'Est placeat nobis l', 'Omnis do magnam Nam', '2023-05-17 23:25:48', '2023-05-17 23:25:48');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`, `created_at`, `updated_at`) VALUES
(4, '-1684341614.png', '2023-05-17 10:56:04', '2023-05-17 10:56:04'),
(2, '-1684341630.png', '2023-05-17 10:55:50', '2023-05-17 10:55:50'),
(3, '-1684341607.png', '2023-05-17 10:55:55', '2023-05-17 10:55:55'),
(5, '-1684341621.png', '2023-05-17 10:56:08', '2023-05-17 10:56:08'),
(6, '-1684341636.png', '2023-05-17 10:56:28', '2023-05-17 10:56:28'),
(7, '-1684341621.png', '2023-05-17 11:02:54', '2023-05-17 11:02:54'),
(8, '-1684341636.png', '2023-05-17 11:03:10', '2023-05-17 11:03:10');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `img`, `title`, `price`, `time`, `description`, `description2`, `created_at`, `updated_at`) VALUES
(1, '-1684327663.jpg', 'tijafamefa@mailinator.com', '90', '04:39', 'Qui quos similique c', 'Aute ipsa deleniti', '2023-05-17 07:05:32', '2023-05-17 07:05:32'),
(2, '-1684384237.jpg', 'zibus@mailinator.com', '173', '22:26', 'Sint molestias laud', 'Dolorem occaecat mai', '2023-05-17 23:50:58', '2023-05-17 23:50:58'),
(3, '-1684384252.jpg', 'verekebob@mailinator.com', '239', '19:48', 'Dolore vitae autem i', 'Nam qui esse quia to', '2023-05-17 23:51:11', '2023-05-17 23:51:11'),
(4, '-1684384237.jpg', 'myguxel@mailinator.com', '37', '13:19', 'Dolores repudiandae', 'Magna est esse mai', '2023-05-17 23:51:26', '2023-05-17 23:51:26'),
(5, '-1684327684.jpg', 'fusoqeses@mailinator.com', '212', '16:06', 'Impedit dolorem eaq', 'Ad occaecat porro re', '2023-05-17 23:51:34', '2023-05-17 23:51:34'),
(6, '-1684327678.jpg', 'sotizyla@mailinator.com', '125', '01:22', 'Consequatur sit eos', 'Minus minima cupidat', '2023-05-17 23:51:45', '2023-05-17 23:51:45'),
(7, '-1684341621.png', 'jizy@mailinator.com', '539', '15:01', 'Nobis amet occaecat', 'Dolor ea corrupti a', '2023-05-17 23:51:52', '2023-05-17 23:51:52');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Ipsa ea dolor volup', '871', '2023-05-17 07:04:06', '2023-05-17 07:04:06');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `img`, `title`, `created_at`, `updated_at`) VALUES
(1, '-1684341630.png', 'wejiti@mailinator.com', '2023-05-17 07:01:04', '2023-05-17 10:55:30'),
(2, '-1684327663.jpg', 'gegow@mailinator.com', '2023-05-17 07:02:43', '2023-05-17 07:02:43'),
(3, '-1684327678.jpg', 'ryxow@mailinator.com', '2023-05-17 07:02:58', '2023-05-17 07:02:58'),
(4, '-1684327684.jpg', 'jutyli@mailinator.com', '2023-05-17 07:03:04', '2023-05-17 07:03:04'),
(5, '-1684341597.png', 'pocijibyz@mailinator.com', '2023-05-17 10:54:57', '2023-05-17 10:54:57'),
(6, '-1684341607.png', 'kehudor@mailinator.com', '2023-05-17 10:55:07', '2023-05-17 10:55:07'),
(7, '-1684341614.png', 'semypymar@mailinator.com', '2023-05-17 10:55:14', '2023-05-17 10:55:14'),
(8, '-1684341621.png', 'xypalacaqa@mailinator.com', '2023-05-17 10:55:21', '2023-05-17 10:55:21'),
(9, '-1684341636.png', 'gewadowy@mailinator.com', '2023-05-17 10:55:36', '2023-05-17 10:55:36'),
(10, '-1684384237.jpg', 'zywu@mailinator.com', '2023-05-17 22:45:37', '2023-05-17 22:45:37'),
(11, '-1684384252.jpg', 'betib@mailinator.com', '2023-05-17 22:45:52', '2023-05-17 22:45:52'),
(12, '-1684384261.jpg', 'suhok@mailinator.com', '2023-05-17 22:46:01', '2023-05-17 22:46:01'),
(13, '-1684384270.jpg', 'wateqovak@mailinator.com', '2023-05-17 22:46:10', '2023-05-17 22:46:10'),
(14, '-1684384280.jpg', 'vagajab@mailinator.com', '2023-05-17 22:46:20', '2023-05-17 22:46:20');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userID`, `name`, `email`, `product_id`, `courseID`, `amount`, `esewa_status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Simone Erickson', 'admin1@gmail.com', '6464cea9c83bb', 1, '90', 'verified', '2023-05-17 07:10:05', '2023-05-17 07:11:05');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, '-1684327663.jpg', 'hefepoba@mailinator.com', 'Cillum libero numqua', '2023-05-17 22:32:30', '2023-05-17 22:39:40');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `img`, `name`, `post`, `field`, `experience`, `description`, `facebook`, `twitter`, `linkedIn`, `created_at`, `updated_at`) VALUES
(1, '-1684327564.png', 'wyvi@mailinator.com', 'neguj@mailinator.com', 'tuge@mailinator.com', 'cixoz@mailinator.com', 'dodevuxi@mailinator.com', 'cisehe@mailinator.com', 'xuhyfazen@mailinator.com', 'mawyqo@mailinator.com', '2023-05-17 07:01:14', '2023-05-17 07:01:14'),
(2, '-1684327684.jpg', 'tugitox@mailinator.com', 'haken@mailinator.com', 'dune@mailinator.com', 'nykig@mailinator.com', 'pivyfofok@mailinator.com', 'xoreho@mailinator.com', 'vajaluw@mailinator.com', 'kelytiji@mailinator.com', '2023-05-17 07:35:49', '2023-05-17 07:35:49');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `name`, `star`, `post`, `message`, `created_at`, `updated_at`) VALUES
(1, '-1684327678.jpg', 'midipeh@mailinator.com', '5', 'bomykypir@mailinator.com', 'Qui ipsam est provi', '2023-05-17 07:03:15', '2023-05-17 07:03:15'),
(2, '-1684327684.jpg', 'nocu@mailinator.com', '2', 'wyjydo@mailinator.com', 'Error qui aut eius e', '2023-05-17 07:03:24', '2023-05-17 07:03:24'),
(3, '-1684327678.jpg', 'hycon@mailinator.com', '1', 'zykyxovo@mailinator.com', 'Molestias mollit sit', '2023-05-17 08:04:31', '2023-05-17 08:04:31');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Simone Erickson', 'Dolor proident et a', '+1 (884) 438-3113', 'admin1@gmail.com', 1, NULL, '$2y$10$EuxV1GLu1fSEKwxveA4xk.2G7vIPwA3jubYHt.5/LhbY71aXEjmeu', NULL, '2023-05-17 06:57:12', '2023-05-17 06:57:12'),
(2, 'Wayne Snider', 'Sunt explicabo Iste', '+1 (831) 294-3728', 'user1@gmail.com', 0, NULL, '$2y$10$kEnxnP5KWQniIBCh9ZvrQuQrR0MEJz/eYbvC8Vgy.ApoKv3yefBty', NULL, '2023-05-17 07:21:45', '2023-05-17 07:21:45');

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
  `description2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `logo`, `title`, `description`, `description2`, `created_at`, `updated_at`) VALUES
(1, 'pafe@mailinator.com', 'totura@mailinator.com', 'Iste cupiditate nihi', 'Ipsum perspiciatis', '2023-05-17 07:03:56', '2023-05-17 07:03:56'),
(2, 'pywe@mailinator.com', 'fagifyvoh@mailinator.com', 'Eos dolore doloremq', 'Aut non aut sunt cu', '2023-05-17 07:04:01', '2023-05-17 07:04:01');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `userID`, `courseID`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-05-17 07:05:39', '2023-05-17 07:05:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
