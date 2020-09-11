-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 06:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zodf`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Article', 'article', NULL, NULL),
(3, 'News', 'news', '2020-06-18 09:56:49', '2020-06-18 09:56:49'),
(4, 'Projects', 'projects', '2020-06-18 09:58:13', '2020-06-18 09:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-06-16 13:21:14', '2020-06-16 13:21:14'),
(2, 2, '2020-06-16 13:21:35', '2020-06-16 13:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `read`, `created_at`, `updated_at`) VALUES
(1, 'Ayertey Michael', 'mayertey53@gmail.com', 'Training', 'Please when is the training list coming out?', 'old', '2020-05-28 10:51:51', '2020-05-28 11:12:49'),
(2, 'Ayertey Michael', 'mayertey53@gmail.com', 'Project', 'Project', 'old', '2020-05-28 11:20:14', '2020-06-15 09:22:09');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '20200617165157.events-01.jpg', NULL, NULL),
(3, '20200617165157.events-02.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `file`, `duration`, `project_id`, `created_at`, `updated_at`) VALUES
(2, 'English', '1590594174.docx', 183, 2, '2020-05-27 15:42:54', '2020-06-15 08:36:14'),
(3, 'Financial Training', '1590741474.docx', 5, 2, '2020-05-29 08:37:54', '2020-05-29 08:37:54');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_05_26_104126_create_materials_table', 3),
(7, '2020_05_26_104106_create_projects_table', 4),
(9, '2020_05_28_104701_create_contacts_table', 6),
(10, '2020_05_28_154350_create_subscriptions_table', 7),
(14, '2020_06_11_112833_create_roles_table', 9),
(15, '2014_10_12_000000_create_users_table', 10),
(17, '2020_06_16_095256_create_tags_table', 12),
(18, '2020_06_16_095338_create_categories_table', 12),
(20, '2020_06_16_100109_create_category_posts_table', 12),
(21, '2020_06_16_111153_create_post_tags_table', 12),
(22, '2020_06_16_095401_create_posts_table', 13),
(24, '2020_06_17_164503_create_galleries_table', 15),
(25, '2020_05_29_133017_create_steerings_table', 16),
(26, '2020_07_01_093119_create_numbers_table', 17),
(29, '2020_05_28_093310_create_students_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `youth` int(11) NOT NULL DEFAULT '0',
  `zongos` int(11) NOT NULL DEFAULT '0',
  `projects` int(11) NOT NULL DEFAULT '0',
  `success` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `youth`, `zongos`, `projects`, `success`, `created_at`, `updated_at`) VALUES
(1, 2342, 1080, 9846, 99, NULL, '2020-07-01 09:46:10');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `viewer`, `status`, `admin_id`, `image`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 'Material 1', 'Material', 'material-1', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Eudica – This Template Designed for All types Online Education , elearning classes, and also useful for multipurpose online educational training courses marketplace directory business.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">This Eudica courses HTML template with awesome responsive webdesign. It is suitable for all kinds of online education websites listing business. It is especially designed for list of categories specific pages, multiple variations listing pages useful for all kinds of learning management system.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">This Template Includes 65+ HTML Pages &amp; 55+ Plugins Includes. Eudica bootstrap online classes template using Bootstrap4 framework. This template is fully 100% Premium template design quality.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Eudica is easy to customize CSS &amp; HTML5 , easy to create any type of course management listing Template framework. Eudica html template has beautiful Home Pages and useful inner pages more advanced search sections, and all the important sections available for required by all types of learning management system websites.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">It has super clean user interface, customizable components and widgets used. Eudica html &amp; CSS Template comes with a awesome unique design also we ensure you can easily design your online course directory template or any type of learning management system html website template just how you like it.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Once you purchase Eudica HTML Template you will be enabled to get free download of all future updates.</p>', 46, 1, 3, '1592313673.jpg', NULL, NULL, '2020-06-16 13:21:14', '2020-06-18 12:54:45'),
(2, 'CV', 'Material', 'cv', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Eudica – This Template Designed for All types Online Education , elearning classes, and also useful for multipurpose online educational training courses marketplace directory business.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">This Eudica courses HTML template with awesome responsive webdesign. It is suitable for all kinds of online education websites listing business. It is especially designed for list of categories specific pages, multiple variations listing pages useful for all kinds of learning management system.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">This Template Includes 65+ HTML Pages &amp; 55+ Plugins Includes. Eudica bootstrap online classes template using Bootstrap4 framework. This template is fully 100% Premium template design quality.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Eudica is easy to customize CSS &amp; HTML5 , easy to create any type of course management listing Template framework. Eudica html template has beautiful Home Pages and useful inner pages more advanced search sections, and all the important sections available for required by all types of learning management system websites.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">It has super clean user interface, customizable components and widgets used. Eudica html &amp; CSS Template comes with a awesome unique design also we ensure you can easily design your online course directory template or any type of learning management system html website template just how you like it.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Once you purchase Eudica HTML Template you will be enabled to get free download of all future updates.</p>', 28, 1, 3, '1592313694.jpg', NULL, NULL, '2020-06-16 13:21:35', '2020-06-30 14:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-06-16 13:21:14', '2020-06-16 13:21:14'),
(2, 2, '2020-06-16 13:21:35', '2020-06-16 13:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson` int(11) NOT NULL,
  `prequisite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `closingdate` date NOT NULL,
  `assessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student` int(11) NOT NULL DEFAULT '0',
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewers` int(11) DEFAULT NULL,
  `materials` int(11) DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `price`, `description`, `image`, `lesson`, `prequisite`, `certificate`, `language`, `skill`, `location`, `startdate`, `closingdate`, `assessment`, `student`, `duration`, `viewers`, `materials`, `hours`, `days`, `student_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Financial Training 11', '1300', 'Lorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\"', '1590741442.jpg', 4, 'Non', 'yes', 'English', 'Any', 'Accra', '2020-10-29', '2026-05-29', 'Self', 0, '5', 1, 3, NULL, 6, NULL, NULL, '2020-05-29 08:37:22', '2020-06-15 08:20:03'),
(3, 'Enterprenuership', 'Free', 'Lorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.\r\nLorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.', '1590742062.jpg', 8, 'Non', 'yes', 'English,Twi Hawuza', 'Any', 'Ghana', '2020-06-15', '2020-06-20', 'Practicals', 0, '9', 56, 8, NULL, 5, NULL, NULL, '2020-05-29 08:47:43', '2020-06-30 16:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `steerings`
--

CREATE TABLE `steerings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steerings`
--

INSERT INTO `steerings` (`id`, `name`, `position`, `organization`, `description`, `team`, `department`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Arafat Sulemana Abdulai', 'CEO', 'ZoDF', 'Arafat Sulemana is a specialist in social work and conflict management, was the Technical Advisor to the late CEO Alhaji Mohammed Baba Alhassan on the 16th of August 2019.\r\n\r\nHe was Headmaster of Presbyterian Junior High School in Tamale, from 1994-1996. He worked as an advanced social work practitioner in London for 10 years and is a member of the British Association of Social Workers and Health and Care Professions Council of the United Kingdom.\r\n\r\nWith a First-Class Bachelor’s Degree in Social Work with Sociology from the University of Ghana and a Master of Arts in Conflict Management and Intercultural Work from the Alice Salomon University of Applied Science, Berlin, Germany, he also Hausa, Dagbani, Bisa, Twi and English fluently BS a basic grasp of Deutsch and French. He is married with five children.', 'The Board', NULL, '1592560944.jpg', '2020-06-19 10:02:24', '2020-06-19 10:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zongo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `word` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mayertey53@gmail.com', '2020-05-28 15:50:50', '2020-05-28 15:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Zongo', 'zongo', NULL, '2020-06-18 10:04:03'),
(2, 'Training', 'training', NULL, '2020-06-18 10:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@admin.com', NULL, '$2y$10$XCx4Q1BaxM6o5xjz8Drf1OCFtEIse./D.D4jn0aqDgEm/e6YmVZ3q', '0552011282', 1, NULL, '2020-06-15 10:02:21', '2020-06-15 10:02:21'),
(9, 'Ayertey Michael', 'mayertey53@gmail.com', NULL, '$2y$10$8lLO59ct/JGha.m9SXJHmujCIcyK87wNA1/RwMsJPPbm5Yv3tmYbK', '0131341424', 2, NULL, '2020-06-30 17:47:18', '2020-06-30 17:47:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_post_id_index` (`post_id`),
  ADD KEY `category_posts_category_id_index` (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_post_id_index` (`post_id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steerings`
--
ALTER TABLE `steerings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `steerings`
--
ALTER TABLE `steerings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
