-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2019 at 07:52 PM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laranew`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Genaral\",\"ar\":\"العام\"}', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(2, '{\"en\":\"cars\",\"ar\":\"السيارات\"}', '2018-06-10 10:16:48', '2018-06-10 10:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `command` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `command`
--

INSERT INTO `command` (`id`, `name`, `options`, `command`, `created_at`, `updated_at`) VALUES
(1, 'Page', 'title:string:min-1_max-70_required:true,body:text:min-1_required:true,active:boolean:required_integer:false', 'laraflat:admin_model', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(2, 'PageComment', 'page', 'laraflat:comment', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(3, 'Categorie', 'title:string:min-1_max-80_required:false', 'laraflat:admin_model', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(4, 'PageRate', 'page', 'laraflat:rate', '2018-07-19 19:45:07', '2018-07-19 19:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'Access to User , permission , role , groups roles', '2018-06-10 10:16:46', '2018-06-10 10:16:46'),
(2, 'User', 'user', 'User group ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_role`
--

DROP TABLE IF EXISTS `group_role`;
CREATE TABLE IF NOT EXISTS `group_role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `group_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_role_group_id_foreign` (`group_id`),
  KEY `group_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `controller_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_menu_id_foreign` (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `link`, `type`, `icon`, `parent_id`, `order`, `controller_path`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\" الرئيسية \",\"en\":\"Home\"}', '/admin/home', '', '<i class=\"material-icons\">home</i>', 0, 1, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController\"]', 1, NULL, NULL),
(2, '{\"ar\":\"الاقسام\",\"en\":\"Categories\"}', '/admin/categorie', '', '<i class=\"material-icons\">control_point_duplicate</i>', 0, 2, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\CategorieController\"]', 1, NULL, NULL),
(3, '{\"ar\":\"  المستخدمين \",\"en\":\"User\"}', '#', '', '<i class=\"material-icons\">account_circle</i>', 0, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\UserController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\GroupController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\RoleController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\PermissionController\"]', 1, NULL, NULL),
(4, '{\"ar\":\" اعدادت الموقع \",\"en\":\"Setting\"}', '#', '', '<i class=\"material-icons\">insert_emoticon</i>', 0, 4, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\SettingController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\MenuController\"]', 1, NULL, NULL),
(5, '{\"ar\":\" الصفحات \",\"en\":\"Page\"}', '/admin/page', '', '<i class=\"material-icons\">find_in_page</i>', 0, 5, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\PageController\"]', 1, NULL, NULL),
(6, '{\"ar\":\" ادارة الملفات \",\"en\":\"File Manager\"}', '/admin/file-manager', '', '<i class=\"material-icons\">folder</i>', 0, 6, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController\"]', 1, NULL, NULL),
(7, '{\"ar\":\" سجل البينات \",\"en\":\"Logs\"}', '/admin/log', '', '<i class=\"material-icons\">info</i>', 0, 7, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\LogController\"]', 1, NULL, NULL),
(8, '{\"ar\":\" الاحصائيات \",\"en\":\"Statistics\"}', '/admin/links', '', '<i class=\"material-icons\">insert_chart</i>', 0, 8, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\UserController\"]', 1, NULL, NULL),
(9, '{\"ar\":\" اتصل بنا \",\"en\":\"Contact Us\"}', '/admin/contact', '', '<i class=\"material-icons\">perm_contact_calendar</i>', 0, 9, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\ContactController\"]', 1, NULL, NULL),
(10, '{\"ar\":\" المستخدمين \",\"en\":\"Users\"}', '/admin/user', '', NULL, 3, 1, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\UserController\"]', 1, NULL, NULL),
(11, '{\"ar\":\" جروبات الاعضاء \",\"en\":\"Groups\"}', '/admin/group', '', NULL, 3, 2, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\GroupController\"]', 1, NULL, NULL),
(12, '{\"ar\":\" قوانين الاستخدام \",\"en\":\"Roles\"}', '/admin/role', '', NULL, 3, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\RoleController\"]', 1, NULL, NULL),
(13, '{\"ar\":\" التصاريح \",\"en\":\"Permissions\"}', '/admin/permission', '', NULL, 3, 4, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\PermissionController\"]', 1, NULL, NULL),
(14, '{\"ar\":\" ايقونات الموقع \",\"en\":\"Icons\"}', '/admin/icons', '', NULL, 4, 1, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController\"]', 1, NULL, NULL),
(15, '{\"ar\":\"  التوثيق \",\"en\":\"Docs\"}', '/admin/docs', '', NULL, 4, 2, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController\"]', 1, NULL, NULL),
(16, '{\"ar\":\" اعدادت الموقع \",\"en\":\"Settings\"}', '/admin/setting', '', NULL, 4, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\SettingController\"]', 1, NULL, NULL),
(17, '{\"ar\":\" القوائم \",\"en\":\"Menu\"}', '/admin/menu', '', NULL, 4, 4, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\MenuController\"]', 1, NULL, NULL),
(18, '{\"ar\":\" لارافلات \",\"en\":\"laraFalt\"}', 'https://laraflat.com/', 'blank', NULL, 0, 1, '', 2, NULL, NULL),
(19, '{\"ar\":\" خدمات ويب \",\"en\":\"5dmat-web\"}', 'https://5dmat-web.com/', 'blank', NULL, 0, 2, '', 2, NULL, NULL),
(20, '{\"ar\":\" ستريم لاب \",\"en\":\"StreamLab\"}', 'https://streamlab.io/', 'blank', NULL, 0, 3, '', 2, NULL, NULL),
(21, '{\"ar\":\" تطوير  \",\"en\":\"Develop\"}', '#', '', '<i class=\"material-icons\">settings</i>', 0, 9, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\RelationController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\TranslationController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController\",\"App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\CustomPermissionsController\"]', 1, NULL, NULL),
(22, '{\"ar\":\" الاوامر \",\"en\":\"Commands\"}', '/admin/commands', '', NULL, 21, 2, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController\"]', 1, NULL, NULL),
(23, '{\"ar\":\"  العلاقات \",\"en\":\"Relation\"}', '/admin/relation', '', NULL, 21, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\RelationController\"]', 1, NULL, NULL),
(24, '{\"ar\":\" الترجمة  \",\"en\":\" Translation \"}', '/admin/translation', '', NULL, 21, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\TranslationController\"]', 1, NULL, NULL),
(25, '{\"ar\":\"  تخصيص التصريحات  \",\"en\":\" Custom Permissions \"}', '/admin/custom-permissions', '', NULL, 21, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\CustomPermissionsController\"]', 1, NULL, NULL),
(26, '{\"ar\":\" اوامر لارافيل  \",\"en\":\" Laravel Commands  \"}', 'admin/laravel/commands', '', NULL, 21, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController\"]', 1, NULL, NULL),
(27, '{\"ar\":\"  التحكم في قواعد البينات  \",\"en\":\" DataBase Manager  \"}', '/adminer.php', 'blank', NULL, 21, 3, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController\"]', 1, NULL, NULL),
(28, '{\"ar\":\" المظهر  \",\"en\":\"Theme\"}', '#', '', '<i class=\"material-icons\">color_lens</i>', 0, 10, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController\"]', 1, NULL, NULL),
(29, '{\"ar\":\" لوحة تحكم المدير  \",\"en\":\"Admin\"}', 'admin/theme/admin', '', '', 28, 10, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController\"]', 1, NULL, NULL),
(30, '{\"ar\":\" الموقع \",\"en\":\"Website\"}', 'admin/theme/website', '', '', 28, 10, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController\"]', 1, NULL, NULL),
(31, '{\"ar\":\" رئيسية الموقع \",\"en\":\"Home Widget\"}', 'admin/theme/homepage', '', '', 28, 10, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController\"]', 1, NULL, NULL),
(32, '{\"ar\":\" السيد بار \",\"en\":\"Sidebar Widget\"}', 'admin/theme/sidebar', '', '', 28, 10, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController\"]', 1, NULL, NULL),
(33, '{\"ar\":\"  رفع \\/ استخراج المديولات \",\"en\":\" Export \\\\ Import Models  \"}', 'admin/exportImport', 'blank', NULL, 21, 5, '[\"App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController\"]', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `links_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `url`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/en', '4yOx9Z', '2018-06-10 10:18:28', '2018-06-10 10:18:28'),
(2, 'http://127.0.0.1:8000/en/login', 'TbPUAI', '2018-06-10 10:19:10', '2018-06-10 10:19:10'),
(3, 'http://localhost/laranew/public/en', 'bUi02t', '2018-06-10 10:22:57', '2018-06-10 10:22:57'),
(4, 'http://localhost/laranew/public/en/login', 'ogN6Hp', '2018-06-10 10:23:06', '2018-06-10 10:23:06'),
(5, 'http://localhost/laranew/en', 'jEjwGM', '2018-06-17 10:14:59', '2018-06-17 10:14:59'),
(6, 'http://localhost/laranew/en/login', 'P0t67R', '2018-06-17 10:15:20', '2018-06-17 10:15:20'),
(7, 'http://localhost/hand-made/en/login', 'JMhuE6', '2018-06-19 09:07:52', '2018-06-19 09:07:52'),
(8, 'http://localhost/tasmem-new/en', 'R9A0tM', '2018-07-05 22:08:21', '2018-07-05 22:08:21'),
(9, 'http://localhost/laranew/en/page/1/view', 'JFPVCC', '2018-07-19 19:45:26', '2018-07-19 19:45:26'),
(10, 'http://localhost/arabiacrane/en', 'bvDHUX', '2018-08-28 21:07:21', '2018-08-28 21:07:21'),
(11, 'http://localhost/zwagna/en', 'pDWJ5S', '2019-02-02 13:34:28', '2019-02-02 13:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `link_views`
--

DROP TABLE IF EXISTS `link_views`;
CREATE TABLE IF NOT EXISTS `link_views` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link_views`
--

INSERT INTO `link_views` (`id`, `link_id`, `language`, `browser`, `browser_version`, `os`, `os_version`, `ip`, `created_at`, `updated_at`) VALUES
(1, '1', 'en', 'Firefox', '60.0', 'Windows', '10.0', '127.0.0.1', '2018-06-10 10:18:33', '2018-06-10 10:18:33'),
(2, '2', 'en', 'Firefox', '60.0', 'Windows', '10.0', '127.0.0.1', '2018-06-10 10:19:11', '2018-06-10 10:19:11'),
(3, '3', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-10 10:22:58', '2018-06-10 10:22:58'),
(4, '4', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-10 10:23:08', '2018-06-10 10:23:08'),
(5, '6', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:15:24', '2018-06-17 10:15:24'),
(6, '6', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:16:15', '2018-06-17 10:16:15'),
(7, '5', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:22:22', '2018-06-17 10:22:22'),
(8, '5', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:25:04', '2018-06-17 10:25:04'),
(9, '5', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:26:01', '2018-06-17 10:26:01'),
(10, '6', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:26:12', '2018-06-17 10:26:12'),
(11, '6', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:26:22', '2018-06-17 10:26:22'),
(12, '6', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:29:08', '2018-06-17 10:29:08'),
(13, '6', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-17 10:29:26', '2018-06-17 10:29:26'),
(14, '7', 'en', 'Firefox', '60.0', 'Windows', '10.0', '::1', '2018-06-19 09:07:59', '2018-06-19 09:07:59'),
(15, '8', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-05 22:08:26', '2018-07-05 22:08:26'),
(16, '5', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:44:00', '2018-07-19 19:44:00'),
(17, '6', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:44:11', '2018-07-19 19:44:11'),
(18, '5', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:45:21', '2018-07-19 19:45:21'),
(19, '9', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:45:27', '2018-07-19 19:45:27'),
(20, '9', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:45:54', '2018-07-19 19:45:54'),
(21, '9', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:46:14', '2018-07-19 19:46:14'),
(22, '9', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-19 19:52:37', '2018-07-19 19:52:37'),
(23, '5', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-20 06:07:06', '2018-07-20 06:07:06'),
(24, '6', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-20 06:28:23', '2018-07-20 06:28:23'),
(25, '6', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-07-20 07:42:19', '2018-07-20 07:42:19'),
(26, '10', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-08-28 21:07:24', '2018-08-28 21:07:24'),
(27, '10', 'en', 'Firefox', '61.0', 'Windows', '10.0', '::1', '2018-09-08 17:03:53', '2018-09-08 17:03:53'),
(28, '11', 'en', 'Firefox', '64.0', 'Windows', '10.0', '::1', '2019-02-02 13:34:31', '2019-02-02 13:34:31'),
(29, '5', 'en', 'Firefox', '67.0', 'Windows', '10.0', '::1', '2019-05-25 11:39:17', '2019-05-25 11:39:17'),
(30, '6', 'en', 'Firefox', '67.0', 'Windows', '10.0', '::1', '2019-05-25 11:39:26', '2019-05-25 11:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `action` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `action`, `model`, `status`, `messages`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Visit Edit Page', 'categorie', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-06-10 10:20:31', '2018-06-10 10:20:31'),
(2, 'Visit Edit Page', 'setting', 'Success', '{\"Edit Id\":[\"2\"]}', 1, '2018-06-10 11:02:41', '2018-06-10 11:02:41'),
(3, 'Visit Edit Page', 'setting', 'Success', '{\"Edit Id\":[\"favicon.ico\"]}', 1, '2018-06-10 11:02:43', '2018-06-10 11:02:43'),
(4, 'Visit Edit Page', 'setting', 'Success', '{\"Edit Id\":[\"favicon.ico\"]}', 1, '2018-06-10 11:02:43', '2018-06-10 11:02:43'),
(5, 'Update', 'setting', 'Success', '{\"Updated id\":[\"2\"]}', 1, '2018-06-10 11:08:36', '2018-06-10 11:08:36'),
(6, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:45:26', '2018-07-19 19:45:26'),
(7, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:45:28', '2018-07-19 19:45:28'),
(8, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:45:53', '2018-07-19 19:45:53'),
(9, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:45:55', '2018-07-19 19:45:55'),
(10, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:46:13', '2018-07-19 19:46:13'),
(11, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:46:15', '2018-07-19 19:46:15'),
(12, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:52:36', '2018-07-19 19:52:36'),
(13, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 1, '2018-07-19 19:52:38', '2018-07-19 19:52:38'),
(14, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 0, '2018-07-20 06:06:43', '2018-07-20 06:06:43'),
(15, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 0, '2018-07-20 06:06:49', '2018-07-20 06:06:49'),
(16, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 0, '2018-07-20 06:07:20', '2018-07-20 06:07:20'),
(17, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 0, '2018-07-20 06:07:32', '2018-07-20 06:07:32'),
(18, 'Visit Edit Page', 'page', 'Success', '{\"Edit Id\":[\"1\"]}', 0, '2018-07-20 06:13:03', '2018-07-20 06:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Main', NULL, NULL),
(3, 'Website', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_04_11_141239_create_groups_table', 1),
(2, '2014_04_11_141239_create_permissions_table', 1),
(3, '2014_04_11_141239_create_roles_table', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2016_10_30_174357_links', 1),
(7, '2016_10_30_174359_link_views', 1),
(8, '2017_02_07_172633_create_role_user_table', 1),
(9, '2017_02_07_172657_create_group_role_table', 1),
(10, '2017_02_07_172657_create_permission_group_table', 1),
(11, '2017_02_07_172657_create_permission_role_table', 1),
(12, '2017_02_17_152439_create_permission_user_table', 1),
(13, '2017_04_23_182351_create_settings_table', 1),
(14, '2017_04_25_200458_create_menus_table', 1),
(15, '2017_04_25_211701_create_item_table', 1),
(16, '2017_05_02_232740_create_logs_table', 1),
(17, '2017_09_06_005757_create_contacts_table', 1),
(18, '2017_11_17_120927_create_commands_table', 1),
(19, '2017_11_19_021526_create_relations_table', 1),
(20, '2018_01_25_1516842578_create_page_table', 1),
(21, '2018_01_25_1516842887_create_pagecomment_table', 1),
(22, '2018_01_25_1516845532_create_categorie_table', 1),
(23, '2018_07_19_1532036714_create_pagerate_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `body`, `active`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\" من نحن \",\"en\":\"About us\"}', '{\"ar\":\"\\n                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.\\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.\\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.\\n            \",\"en\":\"\\n                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\\n                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\\n             \"}', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagecomment`
--

DROP TABLE IF EXISTS `pagecomment`;
CREATE TABLE IF NOT EXISTS `pagecomment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagerate`
--

DROP TABLE IF EXISTS `pagerate`;
CREATE TABLE IF NOT EXISTS `pagerate` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` tinyint(1) NOT NULL,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `controller_name`, `method_name`, `controller_type`, `permission`, `namespace`, `created_at`, `updated_at`) VALUES
(1, 'admin-admin-index-CustomPermissionsController', 'App-Application-Controllers-Admin-Development-CustomPermissionsController-index', 'Allow Admin admin on index in controller CustomPermissionsController', 'CustomPermissionsController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\CustomPermissionsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(2, 'admin-admin-readFile-CustomPermissionsController', 'App-Application-Controllers-Admin-Development-CustomPermissionsController-readFile', 'Allow Admin admin on readFile in controller CustomPermissionsController', 'CustomPermissionsController', 'readFile', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\CustomPermissionsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(3, 'admin-admin-save-CustomPermissionsController', 'App-Application-Controllers-Admin-Development-CustomPermissionsController-save', 'Allow Admin admin on save in controller CustomPermissionsController', 'CustomPermissionsController', 'save', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\CustomPermissionsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(4, 'admin-admin-index-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-index', 'Allow Admin admin on index in controller PermissionController', 'PermissionController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(5, 'admin-admin-show-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-show', 'Allow Admin admin on show in controller PermissionController', 'PermissionController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(6, 'admin-admin-store-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-store', 'Allow Admin admin on store in controller PermissionController', 'PermissionController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(7, 'admin-admin-update-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-update', 'Allow Admin admin on update in controller PermissionController', 'PermissionController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(8, 'admin-admin-getById-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-getById', 'Allow Admin admin on getById in controller PermissionController', 'PermissionController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(9, 'admin-admin-destroy-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-destroy', 'Allow Admin admin on destroy in controller PermissionController', 'PermissionController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(10, 'admin-admin-getControllerByType-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-getControllerByType', 'Allow Admin admin on getControllerByType in controller PermissionController', 'PermissionController', 'getControllerByType', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(11, 'admin-admin-getMethodByController-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-getMethodByController', 'Allow Admin admin on getMethodByController in controller PermissionController', 'PermissionController', 'getMethodByController', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(12, 'admin-admin-adminPanel-ThemeController', 'App-Application-Controllers-Admin-Themes-ThemeController-adminPanel', 'Allow Admin admin on adminPanel in controller ThemeController', 'ThemeController', 'adminPanel', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Themes\\ThemeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(13, 'admin-admin-openFile-ThemeController', 'App-Application-Controllers-Admin-Themes-ThemeController-openFile', 'Allow Admin admin on openFile in controller ThemeController', 'ThemeController', 'openFile', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Themes\\ThemeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(14, 'admin-admin-save-ThemeController', 'App-Application-Controllers-Admin-Themes-ThemeController-save', 'Allow Admin admin on save in controller ThemeController', 'ThemeController', 'save', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Themes\\ThemeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(15, 'admin-admin-index-CategorieController', 'App-Application-Controllers-Admin-CategorieController-index', 'Allow Admin admin on index in controller CategorieController', 'CategorieController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(16, 'admin-admin-show-CategorieController', 'App-Application-Controllers-Admin-CategorieController-show', 'Allow Admin admin on show in controller CategorieController', 'CategorieController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(17, 'admin-admin-store-CategorieController', 'App-Application-Controllers-Admin-CategorieController-store', 'Allow Admin admin on store in controller CategorieController', 'CategorieController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(18, 'admin-admin-update-CategorieController', 'App-Application-Controllers-Admin-CategorieController-update', 'Allow Admin admin on update in controller CategorieController', 'CategorieController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(19, 'admin-admin-getById-CategorieController', 'App-Application-Controllers-Admin-CategorieController-getById', 'Allow Admin admin on getById in controller CategorieController', 'CategorieController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(20, 'admin-admin-destroy-CategorieController', 'App-Application-Controllers-Admin-CategorieController-destroy', 'Allow Admin admin on destroy in controller CategorieController', 'CategorieController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(21, 'admin-admin-pluck-CategorieController', 'App-Application-Controllers-Admin-CategorieController-pluck', 'Allow Admin admin on pluck in controller CategorieController', 'CategorieController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(22, 'admin-admin-index-CommandsController', 'App-Application-Controllers-Admin-CommandsController-index', 'Allow Admin admin on index in controller CommandsController', 'CommandsController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(23, 'admin-admin-command-CommandsController', 'App-Application-Controllers-Admin-CommandsController-command', 'Allow Admin admin on command in controller CommandsController', 'CommandsController', 'command', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(24, 'admin-admin-otherExe-CommandsController', 'App-Application-Controllers-Admin-CommandsController-otherExe', 'Allow Admin admin on otherExe in controller CommandsController', 'CommandsController', 'otherExe', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(25, 'admin-admin-exe-CommandsController', 'App-Application-Controllers-Admin-CommandsController-exe', 'Allow Admin admin on exe in controller CommandsController', 'CommandsController', 'exe', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(26, 'admin-admin-haveCommand-CommandsController', 'App-Application-Controllers-Admin-CommandsController-haveCommand', 'Allow Admin admin on haveCommand in controller CommandsController', 'CommandsController', 'haveCommand', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(27, 'admin-admin-exportEmportModels-CommandsController', 'App-Application-Controllers-Admin-CommandsController-exportEmportModels', 'Allow Admin admin on exportEmportModels in controller CommandsController', 'CommandsController', 'exportEmportModels', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(28, 'admin-admin-export-CommandsController', 'App-Application-Controllers-Admin-CommandsController-export', 'Allow Admin admin on export in controller CommandsController', 'CommandsController', 'export', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(29, 'admin-admin-import-CommandsController', 'App-Application-Controllers-Admin-CommandsController-import', 'Allow Admin admin on import in controller CommandsController', 'CommandsController', 'import', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(30, 'admin-admin-replayEmail-ContactController', 'App-Application-Controllers-Admin-ContactController-replayEmail', 'Allow Admin admin on replayEmail in controller ContactController', 'ContactController', 'replayEmail', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(31, 'admin-admin-index-ContactController', 'App-Application-Controllers-Admin-ContactController-index', 'Allow Admin admin on index in controller ContactController', 'ContactController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(32, 'admin-admin-show-ContactController', 'App-Application-Controllers-Admin-ContactController-show', 'Allow Admin admin on show in controller ContactController', 'ContactController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(33, 'admin-admin-store-ContactController', 'App-Application-Controllers-Admin-ContactController-store', 'Allow Admin admin on store in controller ContactController', 'ContactController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(34, 'admin-admin-update-ContactController', 'App-Application-Controllers-Admin-ContactController-update', 'Allow Admin admin on update in controller ContactController', 'ContactController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(35, 'admin-admin-getById-ContactController', 'App-Application-Controllers-Admin-ContactController-getById', 'Allow Admin admin on getById in controller ContactController', 'ContactController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(36, 'admin-admin-destroy-ContactController', 'App-Application-Controllers-Admin-ContactController-destroy', 'Allow Admin admin on destroy in controller ContactController', 'ContactController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(37, 'admin-admin-pluck-ContactController', 'App-Application-Controllers-Admin-ContactController-pluck', 'Allow Admin admin on pluck in controller ContactController', 'ContactController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(38, 'admin-admin-index-GroupController', 'App-Application-Controllers-Admin-GroupController-index', 'Allow Admin admin on index in controller GroupController', 'GroupController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(39, 'admin-admin-show-GroupController', 'App-Application-Controllers-Admin-GroupController-show', 'Allow Admin admin on show in controller GroupController', 'GroupController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(40, 'admin-admin-store-GroupController', 'App-Application-Controllers-Admin-GroupController-store', 'Allow Admin admin on store in controller GroupController', 'GroupController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(41, 'admin-admin-update-GroupController', 'App-Application-Controllers-Admin-GroupController-update', 'Allow Admin admin on update in controller GroupController', 'GroupController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(42, 'admin-admin-getById-GroupController', 'App-Application-Controllers-Admin-GroupController-getById', 'Allow Admin admin on getById in controller GroupController', 'GroupController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(43, 'admin-admin-destroy-GroupController', 'App-Application-Controllers-Admin-GroupController-destroy', 'Allow Admin admin on destroy in controller GroupController', 'GroupController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(44, 'admin-admin-pluck-GroupController', 'App-Application-Controllers-Admin-GroupController-pluck', 'Allow Admin admin on pluck in controller GroupController', 'GroupController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(45, 'admin-admin-index-HomeController', 'App-Application-Controllers-Admin-HomeController-index', 'Allow Admin admin on index in controller HomeController', 'HomeController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(46, 'admin-admin-icons-HomeController', 'App-Application-Controllers-Admin-HomeController-icons', 'Allow Admin admin on icons in controller HomeController', 'HomeController', 'icons', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(47, 'admin-admin-apiDocs-HomeController', 'App-Application-Controllers-Admin-HomeController-apiDocs', 'Allow Admin admin on apiDocs in controller HomeController', 'HomeController', 'apiDocs', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(48, 'admin-admin-fileManager-HomeController', 'App-Application-Controllers-Admin-HomeController-fileManager', 'Allow Admin admin on fileManager in controller HomeController', 'HomeController', 'fileManager', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(49, 'admin-admin-index-LogController', 'App-Application-Controllers-Admin-LogController-index', 'Allow Admin admin on index in controller LogController', 'LogController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(50, 'admin-admin-show-LogController', 'App-Application-Controllers-Admin-LogController-show', 'Allow Admin admin on show in controller LogController', 'LogController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(51, 'admin-admin-store-LogController', 'App-Application-Controllers-Admin-LogController-store', 'Allow Admin admin on store in controller LogController', 'LogController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(52, 'admin-admin-getById-LogController', 'App-Application-Controllers-Admin-LogController-getById', 'Allow Admin admin on getById in controller LogController', 'LogController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(53, 'admin-admin-destroy-LogController', 'App-Application-Controllers-Admin-LogController-destroy', 'Allow Admin admin on destroy in controller LogController', 'LogController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(54, 'admin-admin-pluck-LogController', 'App-Application-Controllers-Admin-LogController-pluck', 'Allow Admin admin on pluck in controller LogController', 'LogController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(55, 'admin-admin-index-MenuController', 'App-Application-Controllers-Admin-MenuController-index', 'Allow Admin admin on index in controller MenuController', 'MenuController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(56, 'admin-admin-show-MenuController', 'App-Application-Controllers-Admin-MenuController-show', 'Allow Admin admin on show in controller MenuController', 'MenuController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(57, 'admin-admin-store-MenuController', 'App-Application-Controllers-Admin-MenuController-store', 'Allow Admin admin on store in controller MenuController', 'MenuController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(58, 'admin-admin-update-MenuController', 'App-Application-Controllers-Admin-MenuController-update', 'Allow Admin admin on update in controller MenuController', 'MenuController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(59, 'admin-admin-getById-MenuController', 'App-Application-Controllers-Admin-MenuController-getById', 'Allow Admin admin on getById in controller MenuController', 'MenuController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(60, 'admin-admin-destroy-MenuController', 'App-Application-Controllers-Admin-MenuController-destroy', 'Allow Admin admin on destroy in controller MenuController', 'MenuController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(61, 'admin-admin-menuItem-MenuController', 'App-Application-Controllers-Admin-MenuController-menuItem', 'Allow Admin admin on menuItem in controller MenuController', 'MenuController', 'menuItem', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(62, 'admin-admin-addNewItemToMenu-MenuController', 'App-Application-Controllers-Admin-MenuController-addNewItemToMenu', 'Allow Admin admin on addNewItemToMenu in controller MenuController', 'MenuController', 'addNewItemToMenu', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(63, 'admin-admin-getItemInfo-MenuController', 'App-Application-Controllers-Admin-MenuController-getItemInfo', 'Allow Admin admin on getItemInfo in controller MenuController', 'MenuController', 'getItemInfo', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(64, 'admin-admin-updateOneMenuItem-MenuController', 'App-Application-Controllers-Admin-MenuController-updateOneMenuItem', 'Allow Admin admin on updateOneMenuItem in controller MenuController', 'MenuController', 'updateOneMenuItem', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(65, 'admin-admin-pluck-MenuController', 'App-Application-Controllers-Admin-MenuController-pluck', 'Allow Admin admin on pluck in controller MenuController', 'MenuController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(66, 'admin-admin-deleteMenuItem-MenuController', 'App-Application-Controllers-Admin-MenuController-deleteMenuItem', 'Allow Admin admin on deleteMenuItem in controller MenuController', 'MenuController', 'deleteMenuItem', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(67, 'admin-admin-addComment-PageCommentController', 'App-Application-Controllers-Admin-PageCommentController-addComment', 'Allow Admin admin on addComment in controller PageCommentController', 'PageCommentController', 'addComment', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageCommentController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(68, 'admin-admin-updateComment-PageCommentController', 'App-Application-Controllers-Admin-PageCommentController-updateComment', 'Allow Admin admin on updateComment in controller PageCommentController', 'PageCommentController', 'updateComment', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageCommentController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(69, 'admin-admin-deleteComment-PageCommentController', 'App-Application-Controllers-Admin-PageCommentController-deleteComment', 'Allow Admin admin on deleteComment in controller PageCommentController', 'PageCommentController', 'deleteComment', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageCommentController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(70, 'admin-admin-index-PageController', 'App-Application-Controllers-Admin-PageController-index', 'Allow Admin admin on index in controller PageController', 'PageController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(71, 'admin-admin-show-PageController', 'App-Application-Controllers-Admin-PageController-show', 'Allow Admin admin on show in controller PageController', 'PageController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(72, 'admin-admin-store-PageController', 'App-Application-Controllers-Admin-PageController-store', 'Allow Admin admin on store in controller PageController', 'PageController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(73, 'admin-admin-update-PageController', 'App-Application-Controllers-Admin-PageController-update', 'Allow Admin admin on update in controller PageController', 'PageController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(74, 'admin-admin-getById-PageController', 'App-Application-Controllers-Admin-PageController-getById', 'Allow Admin admin on getById in controller PageController', 'PageController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(75, 'admin-admin-destroy-PageController', 'App-Application-Controllers-Admin-PageController-destroy', 'Allow Admin admin on destroy in controller PageController', 'PageController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(76, 'admin-admin-pluck-PageController', 'App-Application-Controllers-Admin-PageController-pluck', 'Allow Admin admin on pluck in controller PageController', 'PageController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(77, 'admin-admin-index-RelationController', 'App-Application-Controllers-Admin-RelationController-index', 'Allow Admin admin on index in controller RelationController', 'RelationController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(78, 'admin-admin-exe-RelationController', 'App-Application-Controllers-Admin-RelationController-exe', 'Allow Admin admin on exe in controller RelationController', 'RelationController', 'exe', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(79, 'admin-admin-rollback-RelationController', 'App-Application-Controllers-Admin-RelationController-rollback', 'Allow Admin admin on rollback in controller RelationController', 'RelationController', 'rollback', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(80, 'admin-admin-getCols-RelationController', 'App-Application-Controllers-Admin-RelationController-getCols', 'Allow Admin admin on getCols in controller RelationController', 'RelationController', 'getCols', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(81, 'admin-admin-index-RoleController', 'App-Application-Controllers-Admin-RoleController-index', 'Allow Admin admin on index in controller RoleController', 'RoleController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(82, 'admin-admin-show-RoleController', 'App-Application-Controllers-Admin-RoleController-show', 'Allow Admin admin on show in controller RoleController', 'RoleController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(83, 'admin-admin-store-RoleController', 'App-Application-Controllers-Admin-RoleController-store', 'Allow Admin admin on store in controller RoleController', 'RoleController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(84, 'admin-admin-update-RoleController', 'App-Application-Controllers-Admin-RoleController-update', 'Allow Admin admin on update in controller RoleController', 'RoleController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(85, 'admin-admin-getById-RoleController', 'App-Application-Controllers-Admin-RoleController-getById', 'Allow Admin admin on getById in controller RoleController', 'RoleController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(86, 'admin-admin-destroy-RoleController', 'App-Application-Controllers-Admin-RoleController-destroy', 'Allow Admin admin on destroy in controller RoleController', 'RoleController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(87, 'admin-admin-pluck-RoleController', 'App-Application-Controllers-Admin-RoleController-pluck', 'Allow Admin admin on pluck in controller RoleController', 'RoleController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(88, 'admin-admin-index-SettingController', 'App-Application-Controllers-Admin-SettingController-index', 'Allow Admin admin on index in controller SettingController', 'SettingController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(89, 'admin-admin-show-SettingController', 'App-Application-Controllers-Admin-SettingController-show', 'Allow Admin admin on show in controller SettingController', 'SettingController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(90, 'admin-admin-store-SettingController', 'App-Application-Controllers-Admin-SettingController-store', 'Allow Admin admin on store in controller SettingController', 'SettingController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(91, 'admin-admin-update-SettingController', 'App-Application-Controllers-Admin-SettingController-update', 'Allow Admin admin on update in controller SettingController', 'SettingController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(92, 'admin-admin-getById-SettingController', 'App-Application-Controllers-Admin-SettingController-getById', 'Allow Admin admin on getById in controller SettingController', 'SettingController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(93, 'admin-admin-destroy-SettingController', 'App-Application-Controllers-Admin-SettingController-destroy', 'Allow Admin admin on destroy in controller SettingController', 'SettingController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(94, 'admin-admin-pluck-SettingController', 'App-Application-Controllers-Admin-SettingController-pluck', 'Allow Admin admin on pluck in controller SettingController', 'SettingController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(95, 'admin-admin-index-TranslationController', 'App-Application-Controllers-Admin-TranslationController-index', 'Allow Admin admin on index in controller TranslationController', 'TranslationController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(96, 'admin-admin-getFiles-TranslationController', 'App-Application-Controllers-Admin-TranslationController-getFiles', 'Allow Admin admin on getFiles in controller TranslationController', 'TranslationController', 'getFiles', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(97, 'admin-admin-readFile-TranslationController', 'App-Application-Controllers-Admin-TranslationController-readFile', 'Allow Admin admin on readFile in controller TranslationController', 'TranslationController', 'readFile', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(98, 'admin-admin-save-TranslationController', 'App-Application-Controllers-Admin-TranslationController-save', 'Allow Admin admin on save in controller TranslationController', 'TranslationController', 'save', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(99, 'admin-admin-getAllContent-TranslationController', 'App-Application-Controllers-Admin-TranslationController-getAllContent', 'Allow Admin admin on getAllContent in controller TranslationController', 'TranslationController', 'getAllContent', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(100, 'admin-admin-bothSave-TranslationController', 'App-Application-Controllers-Admin-TranslationController-bothSave', 'Allow Admin admin on bothSave in controller TranslationController', 'TranslationController', 'bothSave', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(101, 'admin-admin-index-UserController', 'App-Application-Controllers-Admin-UserController-index', 'Allow Admin admin on index in controller UserController', 'UserController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(102, 'admin-admin-show-UserController', 'App-Application-Controllers-Admin-UserController-show', 'Allow Admin admin on show in controller UserController', 'UserController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(103, 'admin-admin-store-UserController', 'App-Application-Controllers-Admin-UserController-store', 'Allow Admin admin on store in controller UserController', 'UserController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(104, 'admin-admin-update-UserController', 'App-Application-Controllers-Admin-UserController-update', 'Allow Admin admin on update in controller UserController', 'UserController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(105, 'admin-admin-getById-UserController', 'App-Application-Controllers-Admin-UserController-getById', 'Allow Admin admin on getById in controller UserController', 'UserController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(106, 'admin-admin-destroy-UserController', 'App-Application-Controllers-Admin-UserController-destroy', 'Allow Admin admin on destroy in controller UserController', 'UserController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(107, 'admin-admin-pluck-UserController', 'App-Application-Controllers-Admin-UserController-pluck', 'Allow Admin admin on pluck in controller UserController', 'UserController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(108, 'admin-website-index-CategorieController', 'App-Application-Controllers-Website-CategorieController-index', 'Allow Admin admin on index in controller CategorieController', 'CategorieController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(109, 'admin-website-show-CategorieController', 'App-Application-Controllers-Website-CategorieController-show', 'Allow Admin admin on show in controller CategorieController', 'CategorieController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(110, 'admin-website-store-CategorieController', 'App-Application-Controllers-Website-CategorieController-store', 'Allow Admin admin on store in controller CategorieController', 'CategorieController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(111, 'admin-website-update-CategorieController', 'App-Application-Controllers-Website-CategorieController-update', 'Allow Admin admin on update in controller CategorieController', 'CategorieController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(112, 'admin-website-getById-CategorieController', 'App-Application-Controllers-Website-CategorieController-getById', 'Allow Admin admin on getById in controller CategorieController', 'CategorieController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(113, 'admin-website-destroy-CategorieController', 'App-Application-Controllers-Website-CategorieController-destroy', 'Allow Admin admin on destroy in controller CategorieController', 'CategorieController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(114, 'admin-website-addComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-addComment', 'Allow Admin admin on addComment in controller PageCommentController', 'PageCommentController', 'addComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(115, 'admin-website-updateComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-updateComment', 'Allow Admin admin on updateComment in controller PageCommentController', 'PageCommentController', 'updateComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(116, 'admin-website-deleteComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-deleteComment', 'Allow Admin admin on deleteComment in controller PageCommentController', 'PageCommentController', 'deleteComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(117, 'admin-website-index-PageController', 'App-Application-Controllers-Website-PageController-index', 'Allow Admin admin on index in controller PageController', 'PageController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(118, 'admin-website-show-PageController', 'App-Application-Controllers-Website-PageController-show', 'Allow Admin admin on show in controller PageController', 'PageController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(119, 'admin-website-store-PageController', 'App-Application-Controllers-Website-PageController-store', 'Allow Admin admin on store in controller PageController', 'PageController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(120, 'admin-website-update-PageController', 'App-Application-Controllers-Website-PageController-update', 'Allow Admin admin on update in controller PageController', 'PageController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(121, 'admin-website-getById-PageController', 'App-Application-Controllers-Website-PageController-getById', 'Allow Admin admin on getById in controller PageController', 'PageController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(122, 'admin-website-destroy-PageController', 'App-Application-Controllers-Website-PageController-destroy', 'Allow Admin admin on destroy in controller PageController', 'PageController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(123, 'user-website-index-CategorieController', 'App-Application-Controllers-Website-CategorieController-index', 'Allow User admin on index in controller CategorieController', 'CategorieController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(124, 'user-website-show-CategorieController', 'App-Application-Controllers-Website-CategorieController-show', 'Allow User admin on show in controller CategorieController', 'CategorieController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(125, 'user-website-store-CategorieController', 'App-Application-Controllers-Website-CategorieController-store', 'Allow User admin on store in controller CategorieController', 'CategorieController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(126, 'user-website-update-CategorieController', 'App-Application-Controllers-Website-CategorieController-update', 'Allow User admin on update in controller CategorieController', 'CategorieController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:47', '2018-06-10 10:16:47'),
(127, 'user-website-getById-CategorieController', 'App-Application-Controllers-Website-CategorieController-getById', 'Allow User admin on getById in controller CategorieController', 'CategorieController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(128, 'user-website-destroy-CategorieController', 'App-Application-Controllers-Website-CategorieController-destroy', 'Allow User admin on destroy in controller CategorieController', 'CategorieController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(129, 'user-website-addComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-addComment', 'Allow User admin on addComment in controller PageCommentController', 'PageCommentController', 'addComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(130, 'user-website-updateComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-updateComment', 'Allow User admin on updateComment in controller PageCommentController', 'PageCommentController', 'updateComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(131, 'user-website-deleteComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-deleteComment', 'Allow User admin on deleteComment in controller PageCommentController', 'PageCommentController', 'deleteComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(132, 'user-website-index-PageController', 'App-Application-Controllers-Website-PageController-index', 'Allow User admin on index in controller PageController', 'PageController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(133, 'user-website-show-PageController', 'App-Application-Controllers-Website-PageController-show', 'Allow User admin on show in controller PageController', 'PageController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(134, 'user-website-store-PageController', 'App-Application-Controllers-Website-PageController-store', 'Allow User admin on store in controller PageController', 'PageController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(135, 'user-website-update-PageController', 'App-Application-Controllers-Website-PageController-update', 'Allow User admin on update in controller PageController', 'PageController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(136, 'user-website-getById-PageController', 'App-Application-Controllers-Website-PageController-getById', 'Allow User admin on getById in controller PageController', 'PageController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(137, 'user-website-destroy-PageController', 'App-Application-Controllers-Website-PageController-destroy', 'Allow User admin on destroy in controller PageController', 'PageController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2018-06-10 10:16:48', '2018-06-10 10:16:48'),
(138, 'add-rate-PageRate', 'App-Application-Controllers-Admin-PageRate', 'Allow admin on index in PageRate Controller ', 'PageRateController', 'addRate', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageRateController', '2018-07-19 19:45:18', '2018-07-19 19:45:18'),
(139, 'add-rate-PageRate', 'App-Application-Controllers-Website-PageRate', 'Allow website on index in PageRate Controller ', 'PageRateController', 'addRate', 'website', 1, 'App\\Application\\Controllers\\Website\\PageRateController', '2018-07-19 19:45:18', '2018-07-19 19:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `permission_group`
--

DROP TABLE IF EXISTS `permission_group`;
CREATE TABLE IF NOT EXISTS `permission_group` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_group_permission_id_foreign` (`permission_id`),
  KEY `permission_group_group_id_foreign` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_group`
--

INSERT INTO `permission_group` (`id`, `permission_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1),
(50, 50, 1),
(51, 51, 1),
(52, 52, 1),
(53, 53, 1),
(54, 54, 1),
(55, 55, 1),
(56, 56, 1),
(57, 57, 1),
(58, 58, 1),
(59, 59, 1),
(60, 60, 1),
(61, 61, 1),
(62, 62, 1),
(63, 63, 1),
(64, 64, 1),
(65, 65, 1),
(66, 66, 1),
(67, 67, 1),
(68, 68, 1),
(69, 69, 1),
(70, 70, 1),
(71, 71, 1),
(72, 72, 1),
(73, 73, 1),
(74, 74, 1),
(75, 75, 1),
(76, 76, 1),
(77, 77, 1),
(78, 78, 1),
(79, 79, 1),
(80, 80, 1),
(81, 81, 1),
(82, 82, 1),
(83, 83, 1),
(84, 84, 1),
(85, 85, 1),
(86, 86, 1),
(87, 87, 1),
(88, 88, 1),
(89, 89, 1),
(90, 90, 1),
(91, 91, 1),
(92, 92, 1),
(93, 93, 1),
(94, 94, 1),
(95, 95, 1),
(96, 96, 1),
(97, 97, 1),
(98, 98, 1),
(99, 99, 1),
(100, 100, 1),
(101, 101, 1),
(102, 102, 1),
(103, 103, 1),
(104, 104, 1),
(105, 105, 1),
(106, 106, 1),
(107, 107, 1),
(108, 108, 1),
(109, 109, 1),
(110, 110, 1),
(111, 111, 1),
(112, 112, 1),
(113, 113, 1),
(114, 114, 1),
(115, 115, 1),
(116, 116, 1),
(117, 117, 1),
(118, 118, 1),
(119, 119, 1),
(120, 120, 1),
(121, 121, 1),
(122, 122, 1),
(123, 123, 2),
(124, 124, 2),
(125, 125, 2),
(126, 126, 2),
(127, 127, 2),
(128, 128, 2),
(129, 129, 2),
(130, 130, 2),
(131, 131, 2),
(132, 132, 2),
(133, 133, 2),
(134, 134, 2),
(135, 135, 2),
(136, 136, 2),
(137, 137, 2),
(138, 138, 1),
(139, 139, 2),
(140, 139, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  KEY `permission_user_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

DROP TABLE IF EXISTS `relations`;
CREATE TABLE IF NOT EXISTS `relations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `command` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_setting` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `type`, `body_setting`, `created_at`, `updated_at`) VALUES
(1, 'siteTitle', 'text', 'LaraFlat', NULL, NULL),
(2, 'GOOGLE_API_MAP', 'text', 'AIzaSyB4KZtg_PXsASfswnSn6JP4WyiGMMVhzyc', NULL, '2018-06-10 11:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$gp2cRce5eSewlQo4UI0vau4oGTXGbpUC8tIwOCePGJNHXGVhtQvAS', 1, '3vCmKCrwg3O5jtzpdzDDBOvUYWoOjBQ08gclHRQw7SFv8lSKEhyzJlJndGS2', 'NFOHL8HueIKQAeQJrOdrEu7H8w2HsY95YsCVcZIqrA5PZDJYB0gaPhlWBGzC', '2018-06-10 10:16:47', '2018-06-10 10:16:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
