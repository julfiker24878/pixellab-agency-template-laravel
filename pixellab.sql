-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 06:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixellab`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `team_id`, `name`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 1, 'Facebook', '#', 'fa-brands fa-facebook-square', '2022-05-14 04:58:06', NULL),
(2, 1, 'Twitter', '#', 'fa-brands fa-twitter-square', '2022-05-14 04:58:17', NULL),
(3, 1, 'Pinterest', '#', 'fa-brands fa-pinterest-square', '2022-05-14 04:58:26', '2022-05-14 05:03:28'),
(7, 2, 'Facebook', '#', 'fa-brands fa-facebook-square', '2022-05-14 05:01:40', NULL),
(8, 2, 'Twitter', '#', 'fa-brands fa-twitter-square', '2022-05-14 05:01:50', NULL),
(9, 2, 'Pinterest', '#', 'fa-brands fa-pinterest-square', '2022-05-14 05:01:58', '2022-05-14 05:03:45'),
(10, 3, 'Facebook', '#', 'fa-brands fa-facebook-square', '2022-05-14 05:02:06', NULL),
(11, 3, 'Twitter', '#', 'fa-brands fa-twitter-square', '2022-05-14 05:02:17', NULL),
(12, 3, 'Pinterest', '#', 'fa-brands fa-pinterest-square', '2022-05-14 05:02:26', '2022-05-14 05:03:59'),
(13, 4, 'Facebook', '#', 'fa-brands fa-facebook-square', '2022-05-14 05:02:44', NULL),
(14, 4, 'Twitter', '#', 'fa-brands fa-twitter-square', '2022-05-14 05:02:57', NULL),
(15, 4, 'Pinterest', '#', 'fa-brands fa-pinterest-square', '2022-05-14 05:03:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Joy Chowdhury', 'joy@chowdhury.com', 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem', '2022-05-12 06:33:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `heading`, `desc`, `btn_text`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'Brand, Design & Development Agency', 'Sit amet consectetur adipiscing elit sed do eiusmod tem porincididunt ut labore et dolore magna aliqua. Quis psum suspendisse ultrices gravida commodo viverra', 'Let\'s Talk Us', '#', '2022-05-12 01:39:20', '2022-05-12 02:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `hero_images`
--

CREATE TABLE `hero_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `left_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_images`
--

INSERT INTO `hero_images` (`id`, `left_image`, `right_image`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '11621839206.jpg', '2022-05-12 03:59:48', '2022-05-12 03:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_text`, `logo_link`, `logo_image`, `created_at`, `updated_at`) VALUES
(2, 'Pixlab', 'http://127.0.0.1:8000/', '1.png', '2022-05-11 23:17:00', '2022-05-11 23:20:52');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_10_082033_create_logos_table', 2),
(6, '2022_05_12_073112_create_heroes_table', 3),
(11, '2022_05_12_084659_create_hero_images_table', 4),
(12, '2022_05_12_121626_create_contacts_table', 5),
(13, '2022_05_12_151834_create_service_titles_table', 6),
(14, '2022_05_12_163715_create_services_table', 7),
(15, '2022_05_14_040032_create_tabs_table', 8),
(20, '2022_05_14_042426_create_portfolios_table', 9),
(23, '2022_05_14_063034_create_teams_table', 10),
(25, '2022_05_14_073210_create_accounts_table', 11);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tab_id` int(11) NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `tab_id`, `class`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'design', 'Dashboard Design', 'Creative Design', '1.jpg', '2022-05-13 23:48:38', '2022-05-13 23:48:38'),
(2, 2, 'branding', 'Landing Page', 'Landing', '2.jpg', '2022-05-13 23:50:22', '2022-05-13 23:50:23'),
(3, 1, 'design', 'Illustration Design', 'Illustrator', '3.jpg', '2022-05-13 23:51:02', '2022-05-13 23:51:02'),
(4, 3, 'development', 'WordPress Customization', 'WordPress', '4.jpg', '2022-05-13 23:53:10', '2022-05-13 23:53:10'),
(5, 5, 'ui-ux', 'UI Design', 'UI', '5.jpg', '2022-05-13 23:53:41', '2022-05-13 23:53:41'),
(6, 3, 'development', 'App Development', 'App', '6.jpg', '2022-05-13 23:54:16', '2022-05-13 23:54:16'),
(7, 5, 'ui-ux', 'UX Design', 'UX', '7.jpg', '2022-05-13 23:54:46', '2022-05-13 23:54:46'),
(8, 2, 'branding', 'Web Design', 'Landing', '8.jpg', '2022-05-13 23:55:17', '2022-05-13 23:55:18'),
(9, 4, 'seo', 'Search Engine Optimization', 'SEO', '9.jpg', '2022-05-13 23:55:57', '2022-05-13 23:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` int(11) NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service`, `created_at`, `updated_at`) VALUES
(1, 2, 'Product Management', '2022-05-12 10:42:21', NULL),
(2, 2, 'MVP Definition', '2022-05-12 10:42:37', NULL),
(3, 2, 'Product Strategy', '2022-05-12 10:42:48', NULL),
(4, 1, 'Service 1', '2022-05-12 10:43:03', NULL),
(5, 1, 'Service 2', '2022-05-12 10:43:08', NULL),
(6, 1, 'Service 3', '2022-05-12 10:43:15', NULL),
(7, 4, 'Service 1', '2022-05-12 10:43:28', NULL),
(8, 4, 'Service 2', '2022-05-12 10:43:33', NULL),
(9, 4, 'Service 3', '2022-05-12 10:43:39', NULL),
(10, 3, 'Product Management 1', '2022-05-12 10:44:03', NULL),
(11, 3, 'Product Management 2', '2022-05-12 10:44:11', NULL),
(12, 3, 'Product Management 3', '2022-05-12 10:44:19', NULL),
(13, 5, 'MVP Definition 1', '2022-05-12 10:44:30', NULL),
(14, 5, 'MVP Definition 2', '2022-05-12 10:44:36', NULL),
(15, 5, 'MVP Definition 3', '2022-05-12 10:44:42', NULL),
(16, 6, 'Product Strategy 1', '2022-05-12 10:44:49', NULL),
(17, 6, 'Product Strategy 2', '2022-05-12 10:44:55', NULL),
(18, 6, 'Product Strategy 3', '2022-05-12 10:45:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_titles`
--

CREATE TABLE `service_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_titles`
--

INSERT INTO `service_titles` (`id`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(1, 'fa-solid fa-arrow-trend-up', 'Strategy', '2022-05-12 09:24:22', NULL),
(2, 'fa-solid fa-paint-roller', 'Product Design', '2022-05-12 09:42:02', '2022-05-12 10:02:56'),
(3, 'fa-solid fa-code', 'Development', '2022-05-12 09:46:57', NULL),
(4, 'fa-brands fa-html5', 'HTML5', '2022-05-12 09:47:32', NULL),
(5, 'fa-brands fa-css3-alt', 'CSS3', '2022-05-12 09:47:58', NULL),
(6, 'fa-brands fa-bootstrap', 'Bootstrap', '2022-05-12 09:48:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `name`, `class`, `created_at`, `updated_at`) VALUES
(1, 'Design', 'design', '2022-05-13 22:03:23', NULL),
(2, 'Branding', 'branding', '2022-05-13 22:03:41', NULL),
(3, 'Development', 'development', '2022-05-13 22:03:50', NULL),
(4, 'SEO', 'seo', '2022-05-13 22:03:58', NULL),
(5, 'UI/UX', 'ui-ux', '2022-05-13 22:04:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Douglas J. Bleau', 'UX/UI Designer', '1.jpg', '2022-05-14 01:13:02', '2022-05-14 01:13:04'),
(2, 'Kristen Stewart', 'Digital Marketing Expert', '2.jpg', '2022-05-14 01:13:30', '2022-05-14 01:13:30'),
(3, 'Thomas M. Wilso', 'Full Stack Web Developer', '3.jpg', '2022-05-14 01:13:51', '2022-05-14 01:13:51'),
(4, 'Jennifer Jenny', 'SEO Specialist', '4.jpg', '2022-05-14 01:14:12', '2022-05-14 01:14:12');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bethany Buck', 'cekez@mailinator.com', NULL, '$2y$10$AS6EV5Z4LyLGYcz9MUIr/ek/GCovcEAB5dCAAAHqyjRUlmREtv8a2', NULL, '2022-05-07 05:11:30', '2022-05-07 05:11:30'),
(2, 'Georgia Gonzales', 'xyreryki@mailinator.com', NULL, '$2y$10$kPPOZp444qblzEqdsrm1TuJbkLNIZU67L428/S3aJeH4hZ1i.2gUS', NULL, '2022-05-07 05:11:59', '2022-05-07 05:11:59'),
(3, 'Taylor Manning', 'xyry@mailinator.com', NULL, '$2y$10$LhWHgi9C19ShniYtHa4aLO.0frW2nDgtQDlHqp7iPaE8LCnYmdaGu', NULL, '2022-05-07 05:12:09', '2022-05-07 05:12:09'),
(4, 'Kieran Hood', 'kokyruwas@mailinator.com', NULL, '$2y$10$GtbRMUkA8Am0LoogMpXj5Ogiqcb3bpBAZSJB2j1knd2TnlecFokH.', NULL, '2022-05-07 05:12:17', '2022-05-07 05:12:17'),
(5, 'Cathleen Mcbride', 'vupy@mailinator.com', NULL, '$2y$10$uIjvTax5UZCsKJZmqc7W0OAIFVWL7utytf.vSGl6D8tTcmnCpQwrW', NULL, '2022-05-07 05:12:23', '2022-05-07 05:12:23'),
(6, 'Ishmael Walls', 'gixu@mailinator.com', NULL, '$2y$10$bJDPDeq4SlbyZkTS68xyX.ZbBU1sdQEtYSi5dLEzZL5ZQmCf.TVO2', NULL, '2022-05-07 05:12:32', '2022-05-07 05:12:32'),
(7, 'Fredericka Jefferson', 'gemewu@mailinator.com', NULL, '$2y$10$iO6QzbHe7FSsFo6HSg5h/OPeEFCuQ2EQDq2P6c/nyC4tS7bHSpvdi', NULL, '2022-05-07 05:12:40', '2022-05-07 05:12:40'),
(8, 'Irma Mccormick', 'puqyriroqu@mailinator.com', NULL, '$2y$10$uSVHfOCUjqYlaXSMS/frTetMf8jedZoOhCpqRMdRiBbSio4xHOS9G', NULL, '2022-05-07 05:12:48', '2022-05-07 05:12:48'),
(9, 'Pearl Moran', 'pivoluvid@mailinator.com', NULL, '$2y$10$rhhjg809aVhCqTG0CVsQ0u8R7yV/b0SwWIBv/CgYZ0aQLvB24DyNm', NULL, '2022-05-07 05:12:56', '2022-05-07 05:12:56'),
(10, 'Davis Torres', 'qunobak@mailinator.com', NULL, '$2y$10$uqrBiitwHhzAMGoJHrkxA.WqLFytEN3TMRnGlkWglTRh7J7SZ3jdK', NULL, '2022-05-07 05:13:06', '2022-05-07 05:13:06'),
(11, 'Rajah Benton', 'nuhak@mailinator.com', NULL, '$2y$10$fvJgUUvHMorsiSAQ/g8YfuMQBKCs7rryfBdRibEZNSyfQ.nxXiGOi', NULL, '2022-05-07 05:13:18', '2022-05-07 05:13:18'),
(12, 'James Malone', 'lifopo@mailinator.com', NULL, '$2y$10$j8kS2idMFz.bv0Qj./qW2.HYdjIrRLBHu7WbkDJSsIjqWmil1O8RS', NULL, '2022-05-07 05:13:32', '2022-05-07 05:13:32'),
(13, 'Anastasia Mcgowan', 'bipa@mailinator.com', NULL, '$2y$10$PZxpeAKkLEsvBFZ2.k5J0OnqZgG/PkRP10TSoDbzuLRcFZ.LVbvTu', NULL, '2022-05-07 05:13:41', '2022-05-07 05:13:41'),
(14, 'Scarlet Workman', 'bawuzu@mailinator.com', NULL, '$2y$10$0hYlg2kpDIftNRBGauFBjOhfgkzFrJidctNJncaEKxJa9zc3gWmsG', NULL, '2022-05-07 05:14:05', '2022-05-07 05:14:05'),
(15, 'Chadwick Bray', 'pisajuvak@mailinator.com', NULL, '$2y$10$fau0aeHTIeRW4GicwgJ/j.M..vfEUdRFT3GjKCKzKXkpS5KCaIsFu', NULL, '2022-05-07 05:14:23', '2022-05-07 05:14:23'),
(16, 'Julfiker Ali', 'julfiker@ali.com', NULL, '$2y$10$E4utoGTgi.b27nVaNNlns.vQ/.QbNogOTyPaQI8cbtNdX7N/crK1y', 'BcLSOCj5jbpgAeUcvgSWorItBmQMshfGYxJ17SodCrNoXEU0saN8hb2rb5eb', '2022-05-07 05:15:14', '2022-05-07 05:15:14'),
(17, 'Kevin Mullins', 'pigymuf@mailinator.com', NULL, '$2y$10$W/GmYV731DcVH5dycM6JteXfsfnNozKOHoWQs1r7JLqrOrO1Cx/Mi', NULL, '2022-05-08 07:06:15', '2022-05-08 07:06:15'),
(18, 'Dorothy Vang', 'xihiqecez@mailinator.com', NULL, '$2y$10$MmGBES/zc1Q5Ak24nStS0Oie4eQcowDRWhCvKKVDt53ZjElRp1Icm', NULL, '2022-05-08 07:06:22', '2022-05-08 07:06:22'),
(19, 'Jonas Huff', 'rima@mailinator.com', NULL, '$2y$10$ZazJlz2MwfCysFkkAc18Ju3uj7KGo/s8tXRXvledmZhLtKd7eyhsS', NULL, '2022-05-08 07:06:30', '2022-05-08 07:06:30'),
(20, 'Daphne Dillon', 'wabuxynalo@mailinator.com', NULL, '$2y$10$Ro5rS.UNhAnOc.crLDmp4.rOr8ZY.EPVgJOR9qZmZuGR7xVni3trG', NULL, '2022-05-08 07:06:37', '2022-05-08 07:06:37'),
(21, 'Demetria Jordan', 'ziwonu@mailinator.com', NULL, '$2y$10$DZBnxBxOLArUq08XrAedtuDtB71AKRnylhXo7oDGjYEysxDayhknO', NULL, '2022-05-08 07:06:45', '2022-05-08 07:06:45'),
(22, 'Hedwig Maddox', 'dojuqa@mailinator.com', NULL, '$2y$10$.pdNykGMnzXs00fqNPaNJO92aZzxmK76vGFdzN0ctIPjx2AAZ9aqu', NULL, '2022-05-08 10:31:17', '2022-05-08 10:31:17'),
(23, 'Lance Lindsey', 'tizi@mailinator.com', NULL, '$2y$10$6yO0rrqnv0fnuNyAne5HRuDEweZRzmQfwSPxTm9cwJiF3DfFt9V6u', NULL, '2022-05-08 10:31:25', '2022-05-08 10:31:25'),
(24, 'May Trujillo', 'guqacihoz@mailinator.com', NULL, '$2y$10$r3oIsZMNydSg7FkdO8/AzuPXM4DAOYavyHbr15Jt.BA8B.Iogm.k6', NULL, '2022-05-09 23:21:00', '2022-05-09 23:21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_images`
--
ALTER TABLE `hero_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_titles`
--
ALTER TABLE `service_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hero_images`
--
ALTER TABLE `hero_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `service_titles`
--
ALTER TABLE `service_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
