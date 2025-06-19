-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2022 at 05:50 AM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metaanca_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(25) NOT NULL,
  `user` int(35) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `device` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user`, `ip_address`, `created_at`, `updated_at`, `device`, `browser`, `os`) VALUES
(27, 49, '127.0.0.1', '2021-10-25 12:49:31', '2021-10-25 12:49:31', 'WebKit', 'Chrome', 'Windows'),
(32, 17, '127.0.0.1', '2021-10-27 13:06:14', '2021-10-27 13:06:14', 'WebKit', 'Chrome', 'Windows'),
(33, 17, '127.0.0.1', '2021-10-27 13:06:14', '2021-10-27 13:06:14', 'WebKit', 'Chrome', 'Windows'),
(34, 17, '127.0.0.1', '2021-10-27 13:35:51', '2021-10-27 13:35:51', 'WebKit', 'Chrome', 'Windows'),
(35, 17, '127.0.0.1', '2021-10-27 13:35:51', '2021-10-27 13:35:51', 'WebKit', 'Chrome', 'Windows'),
(36, 17, '127.0.0.1', '2021-10-27 13:37:10', '2021-10-27 13:37:10', 'WebKit', 'Chrome', 'Windows'),
(37, 52, '127.0.0.1', '2021-10-27 13:49:43', '2021-10-27 13:49:43', 'WebKit', 'Chrome', 'Windows'),
(38, 52, '127.0.0.1', '2021-10-27 13:49:43', '2021-10-27 13:49:43', 'WebKit', 'Chrome', 'Windows'),
(39, 17, '127.0.0.1', '2021-11-01 08:12:25', '2021-11-01 08:12:25', 'WebKit', 'Chrome', 'Windows'),
(40, 17, '127.0.0.1', '2021-11-01 08:12:25', '2021-11-01 08:12:25', 'WebKit', 'Chrome', 'Windows'),
(41, 54, '127.0.0.1', '2021-11-01 10:31:35', '2021-11-01 10:31:35', 'WebKit', 'Chrome', 'Windows'),
(42, 54, '127.0.0.1', '2021-11-01 10:31:35', '2021-11-01 10:31:35', 'WebKit', 'Chrome', 'Windows'),
(43, 17, '127.0.0.1', '2021-11-15 09:11:48', '2021-11-15 09:11:48', 'WebKit', 'Chrome', 'Windows'),
(44, 17, '127.0.0.1', '2021-11-15 09:11:49', '2021-11-15 09:11:49', 'WebKit', 'Chrome', 'Windows'),
(45, 17, '127.0.0.1', '2021-11-16 09:03:02', '2021-11-16 09:03:02', 'WebKit', 'Chrome', 'Windows'),
(46, 17, '127.0.0.1', '2021-11-16 09:03:03', '2021-11-16 09:03:03', 'WebKit', 'Chrome', 'Windows'),
(47, 17, '127.0.0.1', '2021-11-16 12:55:54', '2021-11-16 12:55:54', 'WebKit', 'Chrome', 'Windows'),
(48, 17, '127.0.0.1', '2021-11-16 12:55:55', '2021-11-16 12:55:55', 'WebKit', 'Chrome', 'Windows'),
(49, 17, '127.0.0.1', '2021-11-17 08:36:49', '2021-11-17 08:36:49', 'WebKit', 'Chrome', 'Windows'),
(50, 17, '127.0.0.1', '2021-11-17 08:36:50', '2021-11-17 08:36:50', 'WebKit', 'Chrome', 'Windows'),
(51, 17, '127.0.0.1', '2021-11-17 11:07:18', '2021-11-17 11:07:18', 'WebKit', 'Chrome', 'Windows'),
(52, 17, '127.0.0.1', '2021-11-17 11:07:18', '2021-11-17 11:07:18', 'WebKit', 'Chrome', 'Windows'),
(53, 17, '127.0.0.1', '2021-11-22 08:28:17', '2021-11-22 08:28:17', 'WebKit', 'Chrome', 'Windows'),
(54, 17, '127.0.0.1', '2021-11-22 08:28:17', '2021-11-22 08:28:17', 'WebKit', 'Chrome', 'Windows'),
(55, 17, '127.0.0.1', '2021-11-29 08:26:00', '2021-11-29 08:26:00', 'WebKit', 'Chrome', 'Windows'),
(56, 17, '127.0.0.1', '2021-11-29 08:26:03', '2021-11-29 08:26:03', 'WebKit', 'Chrome', 'Windows'),
(57, 17, '127.0.0.1', '2021-12-02 09:46:19', '2021-12-02 09:46:19', 'WebKit', 'Chrome', 'Windows'),
(58, 17, '127.0.0.1', '2021-12-02 09:46:20', '2021-12-02 09:46:20', 'WebKit', 'Chrome', 'Windows'),
(59, 17, '127.0.0.1', '2021-12-06 10:56:23', '2021-12-06 10:56:23', 'WebKit', 'Chrome', 'Windows'),
(60, 17, '127.0.0.1', '2021-12-06 10:56:23', '2021-12-06 10:56:23', 'WebKit', 'Chrome', 'Windows'),
(61, 17, '127.0.0.1', '2021-12-06 14:51:26', '2021-12-06 14:51:26', 'WebKit', 'Chrome', 'Windows'),
(62, 17, '127.0.0.1', '2021-12-06 14:51:26', '2021-12-06 14:51:26', 'WebKit', 'Chrome', 'Windows'),
(63, 17, '127.0.0.1', '2021-12-07 09:07:26', '2021-12-07 09:07:26', 'WebKit', 'Chrome', 'Windows'),
(64, 17, '127.0.0.1', '2021-12-07 09:07:27', '2021-12-07 09:07:27', 'WebKit', 'Chrome', 'Windows'),
(65, 17, '127.0.0.1', '2021-12-08 09:52:14', '2021-12-08 09:52:14', 'WebKit', 'Chrome', 'Windows'),
(66, 17, '127.0.0.1', '2021-12-08 09:52:15', '2021-12-08 09:52:15', 'WebKit', 'Chrome', 'Windows'),
(67, 17, '127.0.0.1', '2021-12-13 08:46:06', '2021-12-13 08:46:06', 'WebKit', 'Chrome', 'Windows'),
(68, 17, '127.0.0.1', '2021-12-13 08:46:06', '2021-12-13 08:46:06', 'WebKit', 'Chrome', 'Windows'),
(69, 17, '127.0.0.1', '2021-12-16 08:33:45', '2021-12-16 08:33:45', 'WebKit', 'Chrome', 'Windows'),
(70, 17, '127.0.0.1', '2021-12-16 08:33:45', '2021-12-16 08:33:45', 'WebKit', 'Chrome', 'Windows'),
(71, 17, '127.0.0.1', '2022-01-07 09:01:23', '2022-01-07 09:01:23', 'WebKit', 'Chrome', 'Windows'),
(72, 17, '127.0.0.1', '2022-01-07 09:01:23', '2022-01-07 09:01:23', 'WebKit', 'Chrome', 'Windows'),
(73, 17, '127.0.0.1', '2022-01-07 13:58:32', '2022-01-07 13:58:32', 'WebKit', 'Chrome', 'Windows'),
(74, 17, '127.0.0.1', '2022-01-07 13:58:33', '2022-01-07 13:58:33', 'WebKit', 'Chrome', 'Windows'),
(75, 17, '127.0.0.1', '2022-01-14 12:50:47', '2022-01-14 12:50:47', 'WebKit', 'Chrome', 'Windows'),
(76, 17, '127.0.0.1', '2022-01-14 12:50:48', '2022-01-14 12:50:48', 'WebKit', 'Chrome', 'Windows'),
(77, 17, '105.112.33.62', '2022-01-14 13:39:28', '2022-01-14 13:39:28', 'WebKit', 'Chrome', 'Windows'),
(78, 17, '105.112.33.62', '2022-01-14 13:39:28', '2022-01-14 13:39:28', 'WebKit', 'Chrome', 'Windows'),
(79, 55, '197.210.85.67', '2022-02-05 18:15:09', '2022-02-05 18:15:09', 'WebKit', 'Chrome', 'Windows'),
(80, 55, '197.210.85.67', '2022-02-05 18:15:09', '2022-02-05 18:15:09', 'WebKit', 'Chrome', 'Windows'),
(81, 56, '197.210.226.65', '2022-02-06 18:23:31', '2022-02-06 18:23:31', 'WebKit', 'Chrome', 'AndroidOS'),
(82, 56, '197.210.226.65', '2022-02-06 18:23:31', '2022-02-06 18:23:31', 'WebKit', 'Chrome', 'AndroidOS'),
(83, 56, '197.210.55.73', '2022-02-10 15:49:22', '2022-02-10 15:49:22', 'WebKit', 'Chrome', 'Windows'),
(84, 56, '197.210.55.73', '2022-02-10 15:49:22', '2022-02-10 15:49:22', 'WebKit', 'Chrome', 'Windows'),
(85, 56, '197.210.85.33', '2022-02-11 23:23:50', '2022-02-11 23:23:50', 'WebKit', 'Chrome', 'Windows'),
(86, 56, '197.210.85.33', '2022-02-11 23:23:50', '2022-02-11 23:23:50', 'WebKit', 'Chrome', 'Windows'),
(87, 56, '197.210.85.33', '2022-02-11 23:44:02', '2022-02-11 23:44:02', 'WebKit', 'Chrome', 'Windows'),
(88, 56, '197.210.85.33', '2022-02-11 23:44:02', '2022-02-11 23:44:02', 'WebKit', 'Chrome', 'Windows'),
(89, 56, '197.210.85.33', '2022-02-12 00:20:26', '2022-02-12 00:20:26', 'WebKit', 'Chrome', 'Windows'),
(90, 56, '197.210.85.33', '2022-02-12 00:20:26', '2022-02-12 00:20:26', 'WebKit', 'Chrome', 'Windows'),
(91, 56, '197.210.85.33', '2022-02-12 00:27:55', '2022-02-12 00:27:55', 'WebKit', 'Chrome', 'Windows'),
(92, 56, '197.210.85.33', '2022-02-12 00:27:55', '2022-02-12 00:27:55', 'WebKit', 'Chrome', 'Windows'),
(93, 56, '197.210.85.33', '2022-02-12 00:31:00', '2022-02-12 00:31:00', 'WebKit', 'Chrome', 'Windows'),
(94, 56, '197.210.85.33', '2022-02-12 00:31:00', '2022-02-12 00:31:00', 'WebKit', 'Chrome', 'Windows'),
(95, 56, '197.210.78.187', '2022-02-12 00:46:25', '2022-02-12 00:46:25', 'WebKit', 'Chrome', 'Windows'),
(96, 56, '197.210.78.187', '2022-02-12 00:46:25', '2022-02-12 00:46:25', 'WebKit', 'Chrome', 'Windows'),
(97, 56, '102.89.3.234', '2022-02-12 08:02:11', '2022-02-12 08:02:11', 'WebKit', 'Chrome', 'AndroidOS'),
(98, 56, '102.89.3.234', '2022-02-12 08:02:11', '2022-02-12 08:02:11', 'WebKit', 'Chrome', 'AndroidOS'),
(99, 57, '197.210.226.65', '2022-02-18 20:46:09', '2022-02-18 20:46:09', '0', 'Firefox', 'AndroidOS'),
(100, 57, '197.210.226.65', '2022-02-18 20:46:09', '2022-02-18 20:46:09', '0', 'Firefox', 'AndroidOS'),
(101, 57, '197.210.55.35', '2022-02-20 09:37:17', '2022-02-20 09:37:17', '0', 'Firefox', 'AndroidOS'),
(102, 57, '197.210.55.35', '2022-02-20 09:37:17', '2022-02-20 09:37:17', '0', 'Firefox', 'AndroidOS'),
(103, 57, '197.210.84.29', '2022-02-20 09:38:47', '2022-02-20 09:38:47', 'WebKit', 'Chrome', 'AndroidOS'),
(104, 57, '197.210.84.29', '2022-02-20 09:38:48', '2022-02-20 09:38:48', 'WebKit', 'Chrome', 'AndroidOS');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_2fa_expiry` datetime DEFAULT current_timestamp(),
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disbaled',
  `token_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `token_2fa_expiry`, `enable_2fa`, `token_2fa`, `pass_2fa`, `phone`, `dashboard_style`, `remember_token`, `acnt_type_active`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'manager', 'admin@admin.com', NULL, '$2y$10$b18UKPelMLZEyQI1Y6HCGuvp4kmxRm9rbfHseEHnAmAcnufnWCr.6', '2021-12-07 11:40:56', 'disabled', '16632', 'true', '34444443', 'dark', NULL, 'active', 'active', 'Super Admin', '2021-03-10 12:55:53', '2022-02-12 04:47:35'),
(3, 'New', 'Admin', 'admin@remedy.com', NULL, '$2y$10$zTovkvwyntf6ShVaFXtQm.nunRB.D0f1BzLmNv/kp1phijECbCR2m', '2021-05-05 12:39:11', 'disbaled', NULL, NULL, '2344', 'light', NULL, 'active', 'active', 'Admin', '2021-04-06 08:23:58', '2022-02-12 04:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_refered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_activated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `earnings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(255) NOT NULL,
  `ref_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `ref_key`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'SMsJr1', 'What our Customer says!', 'Don\'t take our word for it, here\'s what some of our clients have to say about us', '2020-08-22 11:13:00', '2021-10-27 09:59:35'),
(11, 'anvs8c', 'About Us', 'About us header', '2020-08-22 11:32:29', '2021-10-27 10:21:22'),
(12, 'epJ4LI', 'Who we are', 'online trade \r\n                            is a solution for creating an investment management platform. It is suited for\r\n                            hedge or mutual fund managers and also Forex, stocks, bonds and cryptocurrency traders who\r\n                            are looking at runing pool trading system. Onlinetrader simplifies the investment,\r\n                            monitoring and management process. With a secure and compelling mobile-first design,\r\n                            together with a default front-end design, it takes few minutes to setup your own investment\r\n                            management or pool trading platform.', '2020-08-22 11:33:32', '2021-10-27 10:24:01'),
(13, '5hbB6X', 'Get Started', 'How to get started ?', '2020-08-22 11:33:55', '2021-10-27 10:25:09'),
(14, 'Zrhm3I', 'Create an Account', 'Create an account with us using your preffered email/username', '2020-08-22 11:34:11', '2021-10-27 10:25:29'),
(15, 'yTKhlt', 'Make a Deposit', 'Make A deposit with any of your preffered currency', '2020-08-22 11:34:26', '2021-10-27 10:25:52'),
(16, 'u0Ervr', 'Start Trading/Investing', 'Start trading with Indices commodities e.tc', '2020-08-22 11:34:56', '2021-10-27 10:26:12'),
(23, 'vr6Xw0', 'Our Investment Packages', 'Choose how you want to invest with us', '2020-08-22 11:37:43', '2021-10-27 09:58:51'),
(30, '52GPRA', 'Address', 'No 10 Mission Road, Nigeria', '2020-08-22 11:40:19', '2020-08-22 11:40:19'),
(31, '0EXbji', 'Phone Number', '+234 9xxxxxxxx', '2020-08-22 11:40:36', '2020-09-14 10:13:57'),
(32, 'HLgyaQ', 'Email', 'support@brynamics.xyz', '2020-08-22 11:41:14', '2020-08-22 12:23:55'),
(35, 'Mnag31', 'The Better Way to Trade & Invest', 'Online Trade helps over 2 million customers achieve their financial goals by helping them trade and invest with ease', '2021-10-27 09:42:23', '2021-10-27 09:42:23'),
(36, 'rXJ7JQ', 'Trade Invest stock, and Bond', 'Home page text', '2021-10-27 09:45:17', '2021-10-27 09:45:17'),
(37, 'J23T0Y', 'Security Comes First', 'Security Comes first', '2021-10-27 09:53:15', '2021-10-27 09:54:52'),
(38, '9HOR1z', 'Security', 'Online Trade uses the highest levels of Internet Security, and it is secured by 256 bits SSL security encryption to ensure that your information is completely protected from fraud.', '2021-10-27 09:56:13', '2021-10-27 09:56:13'),
(39, '7DH2G9', 'Two Factor Auth', 'Two-factor authentication (2FA) by default on all Online Trade accounts, to securely protect you from unauthorised access and impersonation.', '2021-10-27 09:56:26', '2021-10-27 09:56:26'),
(40, '5Vg32I', 'Explore Our Services', 'It’s our mission to provide you with a delightful and a successful trading experience!', '2021-10-27 09:56:38', '2021-10-27 09:56:38'),
(41, 'Vg6Gy7', 'Powerful Trading Platforms', 'Online Trade offers multiple platform options to cover the needs of each type of trader and investors .', '2021-10-27 09:56:53', '2021-10-27 09:56:53'),
(42, '1Sx1dl', 'High leverage', 'Chance to magnify your investment and really win big with super-low spreads to further up your profits', '2021-10-27 09:57:06', '2021-10-27 09:57:06'),
(43, 'YYqKx3', 'Fast execution', 'Super-fast trading software, so you never suffer slippage.', '2021-10-27 09:57:20', '2021-10-27 09:57:20'),
(44, 'yGg8xI', 'Ultimate Security', 'With advanced security systems, we keep your account always protected.', '2021-10-27 09:57:35', '2021-10-27 09:57:35'),
(45, 'xEWMho', '24/7 live chat Support', 'Connect with our 24/7 support and Market Analyst on-demand.', '2021-10-27 09:57:48', '2021-10-27 09:57:48'),
(46, '9SOtK1', 'Always on the go? Mobile trading is easier than ever with Online Trade!', 'Get your hands on our customized Trading Platform with the comfort of freely trading on the move, to experience truly liberating trading sessions.', '2021-10-27 09:58:05', '2021-10-27 09:58:05'),
(47, 'wOS1ve', 'Cryptocurrency', 'Trade and invest Top Cryptocurrency', '2021-10-27 09:59:07', '2021-10-27 09:59:07'),
(48, 'wuZlis', 'Hello!, How can we help you?', 'Hello!, How can we help you?', '2021-10-27 10:32:12', '2021-10-27 10:32:12'),
(49, '1TYkw0', 'Find the help you need', 'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.', '2021-10-27 10:32:33', '2021-10-27 10:32:33'),
(50, 'rK6Yhn', 'FAQs', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:32:49', '2021-10-27 10:32:49'),
(51, 'HBHBLo', 'Guides / Support', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:33:03', '2021-10-27 10:33:03'),
(52, 'rCTDQh', 'Support Request', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:33:14', '2021-10-27 10:33:14'),
(53, 'kMsswR', 'Get Started', 'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.', '2021-10-27 10:33:28', '2021-10-27 10:33:28'),
(54, 'EOUU7R', 'Get in Touch !', 'This is required when, for text is not yet available.', '2021-10-27 10:33:56', '2021-10-27 10:33:56'),
(56, 'ROu4q6', 'Contact Us', 'Contact Us', '2021-10-27 10:47:41', '2021-10-27 10:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `cp_transactions`
--

CREATE TABLE `cp_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Item_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_tele_id` int(11) DEFAULT NULL,
  `amount1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_p_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_pv_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_m_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_ipn_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_debug_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cp_transactions`
--

INSERT INTO `cp_transactions` (`id`, `txn_id`, `item_name`, `Item_number`, `amount_paid`, `user_plan`, `user_id`, `user_tele_id`, `amount1`, `amount2`, `currency1`, `currency2`, `status`, `status_text`, `type`, `cp_p_key`, `cp_pv_key`, `cp_m_id`, `cp_ipn_secret`, `cp_debug_email`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TYooMQauvdEDq54NiTphI7jx', '4eC39HqLyjWDarjtT1zdp7dc', 'Merchid ID', 'jnndjnhdjdj', 'super@happ.com', '2021-03-11 12:46:45', '2021-10-07 09:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_accounts`
--

CREATE TABLE `crypto_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `btc` float DEFAULT NULL,
  `eth` float DEFAULT NULL,
  `ltc` float DEFAULT NULL,
  `xrp` float DEFAULT NULL,
  `link` float DEFAULT NULL,
  `bnb` float DEFAULT NULL,
  `aave` float DEFAULT NULL,
  `usdt` float DEFAULT NULL,
  `xlm` float DEFAULT NULL,
  `bch` float DEFAULT NULL,
  `ada` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_accounts`
--

INSERT INTO `crypto_accounts` (`id`, `user_id`, `btc`, `eth`, `ltc`, `xrp`, `link`, `bnb`, `aave`, `usdt`, `xlm`, `bch`, `ada`, `created_at`, `updated_at`) VALUES
(1, 17, 0.99928, 0.00175792, NULL, NULL, NULL, NULL, NULL, 182.225, NULL, NULL, 0, '2021-10-31 12:25:53', '2021-10-31 12:25:53'),
(2, 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-06 20:47:23', '2022-02-06 20:47:23'),
(3, 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-19 01:43:24', '2022-02-19 01:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `txn_id`, `user`, `amount`, `payment_mode`, `plan`, `status`, `proof`, `created_at`, `updated_at`) VALUES
(49, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', '9PmdNpauth.png1644081803', '2022-02-05 22:23:23', '2022-02-05 23:10:02'),
(50, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', 'i2W2k1Solflex_Logo1.png1644081849', '2022-02-05 22:24:09', '2022-02-05 23:10:13'),
(51, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', '0IMnkTSolflex_Logo1.png1644081983', '2022-02-05 22:26:23', '2022-02-05 23:09:51'),
(52, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', 'zaOYQFpp.jpg1644082480', '2022-02-05 22:34:40', '2022-02-05 23:09:23'),
(53, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', 'fIRs9Npp.jpg1644082608', '2022-02-05 22:36:48', '2022-02-05 23:09:13'),
(54, NULL, 55, '1000', 'Bitcoin', NULL, 'Pending', 'xxyCWtpp.jpg1644082827', '2022-02-05 22:40:27', '2022-02-05 22:40:27'),
(55, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', 'TX969ypp.jpg1644082842', '2022-02-05 22:40:42', '2022-02-05 23:09:04'),
(56, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', '0x1um1pp.jpg1644083043', '2022-02-05 22:44:03', '2022-02-05 23:08:44'),
(57, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', 'aEALMO2587474703a2f2f692e60966.png1644083310', '2022-02-05 22:48:30', '2022-02-05 23:08:34'),
(58, NULL, 55, '1000', 'Bitcoin', NULL, 'Processed', 'ok3BUK2587474703a2f2f692e60966.png1644083723', '2022-02-05 22:55:23', '2022-02-05 23:08:25'),
(59, NULL, 56, '10000', 'Bitcoin', NULL, 'Processed', 'MVHogRlogo.png1644623423', '2022-02-12 04:50:23', '2022-02-12 05:41:31'),
(60, NULL, 56, '10000', 'Ethereum', NULL, 'Processed', 'UcqSM2jp.png1644626100', '2022-02-12 05:35:00', '2022-02-12 05:40:41');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `ref_key`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '8yZ6FC', 'How can i withdraw', 'This is how to withdraw', '2021-03-11 14:31:42', '2021-03-11 14:31:59'),
(2, 'ApbuIF', 'How can i deposit money', 'The deposit of course do not hinder', '2021-10-27 09:41:31', '2021-10-27 09:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `ref_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `ref_key`, `title`, `description`, `img_path`, `created_at`, `updated_at`) VALUES
(8, 'DPd1Kn', 'Testimonial 1', 'Testimonial 1', 'SIu0JZ01.jpg1635329714', '2020-08-23 12:24:52', '2021-10-27 10:15:14'),
(9, 'ZqCgDz', 'Testimonial 2', 'Testimonial 2', '5EJXRd02.jpg1635329727', '2020-08-23 12:25:07', '2021-10-27 10:15:27'),
(14, 'b9158B', 'Home Image', 'The image at the home page', 'b9158Babout.jpg', '2021-10-27 09:48:42', '2021-10-27 09:48:42'),
(15, 'iAwfKe', 'About image', 'The image in the about page', 'iAwfKeabout.png', '2021-10-27 10:22:20', '2021-10-27 10:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddresses`
--

CREATE TABLE `ipaddresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_09_142220_create_sessions_table', 1),
(7, '2021_03_10_082445_create_admins_table', 2),
(8, '2021_03_10_082519_create_agents_table', 2),
(9, '2021_03_10_082715_create_assets_table', 2),
(10, '2021_03_10_082817_create_contents_table', 2),
(11, '2021_03_10_083110_create_cp_transactions_table', 2),
(12, '2021_03_10_083324_create_deposits_table', 2),
(13, '2021_03_10_083400_create_faqs_table', 2),
(14, '2021_03_10_083510_create_images_table', 2),
(15, '2021_03_10_083557_create_mt4_details_table', 2),
(16, '2021_03_10_083627_create_notifications_table', 2),
(17, '2021_03_10_083824_create_plans_table', 2),
(18, '2021_03_10_083850_create_settings_table', 2),
(19, '2021_03_10_083936_create_testimonies_table', 2),
(20, '2021_03_10_084009_create_tp__transactions_table', 2),
(21, '2021_03_10_084031_create_upgrades_table', 2),
(22, '2021_03_10_084120_create_userlogs_table', 2),
(23, '2021_03_10_084140_create_user_plans_table', 2),
(24, '2021_03_10_084235_create_wdmethods_table', 2),
(25, '2021_03_10_084300_create_withdrawals_table', 2),
(26, '2021_04_06_083043_create_tasks_table', 3),
(27, '2021_04_23_110006_create_exchanges_table', 4),
(28, '2021_04_23_114622_create_coin_transactions_table', 5),
(29, '2021_04_27_080945_create_currencies_table', 6),
(30, '2021_04_29_110349_create_c_withdrawals_table', 7),
(31, '2021_10_07_112653_create_ipaddresses_table', 8),
(32, '2021_10_27_114829_create_terms_privacies_table', 9),
(33, '2021_10_31_131124_create_crypto_accounts_table', 10),
(34, '2021_10_31_132849_create_settings_conts_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `mt4_details`
--

CREATE TABLE `mt4_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `mt4_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mt4_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leverage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(2, 9, 'This is a new mail Victory, kindly apprehiend', '2021-03-12 12:38:30', '2021-03-12 12:38:30');

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
-- Table structure for table `paystacks`
--

CREATE TABLE `paystacks` (
  `id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `paystack_public_key` text DEFAULT NULL,
  `paystack_secret_key` text DEFAULT NULL,
  `paystack_url` varchar(255) DEFAULT NULL,
  `paystack_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paystacks`
--

INSERT INTO `paystacks` (`id`, `created_at`, `updated_at`, `paystack_public_key`, `paystack_secret_key`, `paystack_url`, `paystack_email`) VALUES
(1, '2021-10-07 10:26:10', '2021-12-07 08:24:59', NULL, NULL, 'https://api.paystack.co', 'victrinhoj@gmail.com');

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_interval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `min_price`, `max_price`, `minr`, `maxr`, `gift`, `expected_return`, `type`, `increment_interval`, `increment_type`, `increment_amount`, `expiration`, `created_at`, `updated_at`) VALUES
(6, 'Standard', '200', '200', '200000', '400', '4000000000000', '0', NULL, 'Main', 'Hourly', 'Percentage', '5', '12 Hours', '2021-10-25 13:25:08', '2022-02-06 20:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GkkuVAewLzoyYZovkwHkvsxGtNVlXD8BsL5jDpQi', NULL, '197.210.55.115', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmFxQ1RkekFnUHNlWHFOVk82eGxVdGtYMDIyQlBNZjF5d3A3S05QTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vaHlpcC5tZXRhZnhjcnlwdG8uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1645612700),
('ljG4yUY93JGWgPmQCwqDgJmKL1kT0mN8efaapjsS', NULL, '168.151.138.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2lOY0h4WEk1emMwVkdmVE93ZnN0aHBjRDhNQWF1c2V0dWZQakNQYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaW52ZXN0LnRyYWRlYmVzdGZ4Lm5ldCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645613135),
('noH7fc1ZowUwsnm3SYI7Q4W1qkpvsldHAwBMrrV5', NULL, '119.13.203.165', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVWFvNVI0RVVVcEJEMFJNTzVnVGFDZ2U3YUFuRzJ0TlFodFpnYktaYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmludmVzdC50cmFkZWJlc3RmeC5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1645613149);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_sitekey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_p_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_cs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_ci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_translate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_trade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_server` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfromname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_encrypt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_redirect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_to` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_with` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_verification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `enable_social_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'auto',
  `deposit_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_annoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_service` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quarterlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newupdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `description`, `currency`, `s_currency`, `capt_secret`, `capt_sitekey`, `payment_mode`, `location`, `s_s_k`, `s_p_k`, `pp_cs`, `pp_ci`, `keywords`, `site_title`, `site_address`, `logo`, `favicon`, `trade_mode`, `google_translate`, `weekend_trade`, `contact_email`, `timezone`, `mail_server`, `emailfrom`, `emailfromname`, `smtp_host`, `smtp_port`, `smtp_encrypt`, `smtp_user`, `smtp_password`, `google_secret`, `google_id`, `google_redirect`, `referral_commission`, `referral_commission1`, `referral_commission2`, `referral_commission3`, `referral_commission4`, `referral_commission5`, `signup_bonus`, `tawk_to`, `enable_2fa`, `enable_kyc`, `enable_with`, `enable_verification`, `enable_social_login`, `withdrawal_option`, `deposit_option`, `dashboard_option`, `enable_annoc`, `subscription_service`, `captcha`, `commission_type`, `commission_fee`, `monthlyfee`, `quarterlyfee`, `yearlyfee`, `newupdate`, `created_at`, `updated_at`) VALUES
(1, 'Trustcrypto', 'We are remedy', '$', 'USD', '6LeFiYEaAAAAAPWZh1eQgdd5W99qz8KXZEEmCFaK', '6LeFiYEaAAAAAHmnxl4z7s9IH1-TmmCu1mD9Mn_8', '123567', 'Local', 'sk_test_51JP8qpSBWKZBQRLPWqHkFM8oqFEAqXLAaH3S8byZF73X0UycxijVyfebcyu6OVoZ8eeAelr3js3ADYIGU22Dk2Vo00kGkdE9xP', 'pk_test_51JP8qpSBWKZBQRLPUIfQVYfUGly65fb1LiPUwAUajKy1nVM9Rvly3v3hQLvXnRqrWCrnUNz1qPQHNSxE689tSAoL00B1iOTNfd', 'jijdjkdkdk', 'iidjdjdj', 'online trade, forex, cfd,', 'Welcome to Remedy', 'https://hyip.metafxcrypto.com/', 'giuNrOlogo 2.png1644161897', 'giuNrOfavicon.png1644161897', 'on', 'on', 'off', 'remedytechservces@gmail.com', 'UTC', 'sendmail', 'remedytechservices@gmail.com', 'Remedy Hyip', 'metafxcrypto.com', '2525', 'tls', 'c1fc6aa480f0ca', '37cade45cfc7d3', 'OTUW0i4B7ZI-GaoNPwe1krPF', '807575122053-0056a75lgfai5f205sc0fvku6tqgd6ac.apps.googleusercontent.com', 'http://yoursite.com/auth/google/callback', '40', '30', '20', '10', '5', '1', '0', 'tawk to codess', 'no', 'yes', 'true', 'false', 'no', 'manual', 'manual', 'dark', 'on', 'off', 'false', NULL, NULL, '30', '40', '80', 'Welcome to Remedy hyip', NULL, '2022-02-12 05:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `settings_conts`
--

CREATE TABLE `settings_conts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `use_crypto_feature` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `fee` float DEFAULT 0,
  `btc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `eth` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `ltc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `link` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `bnb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `aave` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'enabled',
  `usdt` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `bch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `xlm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `xrp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `ada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `currency_rate` int(255) DEFAULT NULL,
  `minamt` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_conts`
--

INSERT INTO `settings_conts` (`id`, `use_crypto_feature`, `fee`, `btc`, `eth`, `ltc`, `link`, `bnb`, `aave`, `usdt`, `bch`, `xlm`, `xrp`, `ada`, `currency_rate`, `minamt`, `created_at`, `updated_at`) VALUES
(1, 'true', 2, 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 500, 50, '2021-10-31 13:32:30', '2022-01-07 14:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `terms_privacies`
--

CREATE TABLE `terms_privacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `useterms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_privacies`
--

INSERT INTO `terms_privacies` (`id`, `description`, `useterms`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Our Commitment to You:</strong></p>\r\n\r\n<p>Thank you for showing interest in our service. In order for us to provide you with our service, we are required to collect and process certain personal data about you and your activity.</p>\r\n\r\n<p>By entrusting us with your personal data, we would like to assure you of our commitment to keep such information private and to operate in accordance with all regulatory laws and all EU data protection laws, including General Data Protection Regulation (GDPR) 679/2016 (EU).</p>\r\n\r\n<p>We have taken measurable steps to protect the confidentiality, security and integrity of this data. We encourage you to review the following information carefully.</p>\r\n\r\n<p><strong>Grounds for data collection:</strong></p>\r\n\r\n<p>Processing of your personal information (meaning, any data which may potentially allow your identification with reasonable means; hereinafter &ldquo;Personal Data&rdquo;) is necessary for the performance of our contractual obligations towards you and providing you with our services, to protect our legitimate interests and for compliance with legal and financial regulatory obligations to which we are subject.</p>\r\n\r\n<p>When you use our services, you consent to the collection, storage, use, disclosure and other uses of your Personal Data as described in this Privacy Policy.</p>\r\n\r\n<p><strong>How do we receive data about you?</strong></p>\r\n\r\n<p>We receive your Personal Data from various sources:</p>\r\n\r\n<ol>\r\n	<li>When you voluntarily provide us with your personal details in order to create an account (for example, your name and email address)</li>\r\n	<li>When you use or access our site and services, in connection with your use of our services (for example, your financial transactions)</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><strong>What type of data we collect?</strong></p>\r\n\r\n<p>In order to open an account, and in order to provide you with our services we will need you to collect the following data:</p>\r\n\r\n<p><strong>Personal Data<br />\r\nWe collect the following Personal Data about you:</strong></p>\r\n\r\n<ul>\r\n	<li><em>Registration data</em>&nbsp;&ndash; your name, email address, phone number, occupation, country of residence, and your age (in order to verify you are over 18 years of age and eligible to participate in our service).</li>\r\n	<li><em>Voluntary data</em>&nbsp;&ndash; when you communicate with us (for example when you send us an email or use a &ldquo;contact us&rdquo; form on our site) we collect the personal data you provided us with.</li>\r\n	<li><em>Financial data</em>&nbsp;&ndash; by its nature, your use of our services includes financial transactions, thus requiring us to obtain your financial details, which includes, but not limited to your payment details (such as bank account details and financial transactions performed through our services).</li>\r\n	<li><em>Technical data</em>&nbsp;&ndash; we collect certain technical data that is automatically recorded when you use our services, such as your IP address, MAC address, device approximate location</li>\r\n	<li>Non Personal Data</li>\r\n</ul>\r\n\r\n<p>We record and collect data from or about your device (for example your computer or your mobile device) when you access our services and visit our site. This includes, but not limited to: your login credentials, UDID, Google advertising ID, IDFA, cookie identifiers, and may include other identifiers such your operating system version, browser type, language preferences, time zone, referring domains and the duration of your visits. This will facilitate our ability to improve our service and personalize your experience with us.<br />\r\nIf we combine Personal Data with non-Personal Data about you, the combined data will be treated as Personal Data for as long as it remains combined.</p>\r\n\r\n<p><strong>Tracking Technologies</strong></p>\r\n\r\n<p>When you visit or access our services we use (and authorize 3rd parties to use) pixels, cookies, events and other technologies (&ldquo;Tracking Technologies&ldquo;). Those allow us to automatically collect data about you, your device and your online behavior, in order to enhance your navigation in our services, improve our site&rsquo;s performance, perform analytics and customize your experience on it. In addition, we may merge data we have with data collected through said tracking technologies with data we may obtain from other sources and, as a result, such data may become Personal Data.<br />\r\nCookie Policy page.</p>\r\n\r\n<p><strong>How do we use the data We collect?</strong></p>\r\n\r\n<ul>\r\n	<li>Provision of service &ndash; we will use your Personal Data you provide us for the provision and improvement of our services to you.</li>\r\n	<li>Marketing purposes &ndash; we will use your Personal Data (such as your email address or phone number). For example, by subscribing to our newsletter you will receive tips and announcements straight to your email account. We may also send you promotional material concerning our services or our partners&rsquo; services (which we believe may interest you), including but not limited to, by building an automated profile based on your Personal Data, for marketing purposes. You may choose not to receive our promotional or marketing emails (all or any part thereof) by clicking on the &ldquo;unsubscribe&rdquo; link in the emails that you receive from us. Please note that even if you unsubscribe from our newsletter, we may continue to send you service-related updates and notifications or reply to your queries and feedback you provide us.</li>\r\n	<li>Opt-out of receiving marketing materials &ndash; If you do not want us to use or share your personal data for marketing purposes, you may opt-out in accordance with this &ldquo;Opt-out&rdquo; section. Please note that even if you opt-out, we may still use and share your personal information with third parties for non-marketing purposes (for example to fulfill your requests, communicate with you and respond to your inquiries, etc.). In such cases, the companies with whom we share your personal data are authorized to use your Personal Data only as necessary to provide these non-marketing services.</li>\r\n	<li>Analytics, surveys and research &ndash; we are always trying to improve our services and think of new and exciting features for our users. From time to time, we may conduct surveys or test features, and analyze the information we have to develop, evaluate and improve these features.</li>\r\n	<li>Protecting our interests &ndash; we use your Personal Data when we believe it&rsquo;s necessary in order to take precautions against liabilities, investigate and defend ourselves against any third-party claims or allegations, investigate and protect ourselves from fraud, protect the security or integrity of our services and protect the rights and property of the company, its users and/or partners.</li>\r\n	<li>Enforcing of policies &ndash; we use your Personal Data in order to enforce our policies, including but limited to our Terms &amp; Conditions.</li>\r\n	<li>Compliance with legal and regulatory requirements &ndash; we also use your Personal Data to investigate violations and prevent money laundering and perform due-diligence checks, and as required by law, regulation or other governmental authority, or to comply with a subpoena or similar legal process.</li>\r\n</ul>\r\n\r\n<p><strong>With whom do we share your Personal Data</strong></p>\r\n\r\n<ul>\r\n	<li>Internal concerned parties &ndash; we share your data with companies in our group, as well as our employees limited to those employees or partners who need to know the information in order to provide you with our services.</li>\r\n	<li>Financial providers and payment processors &ndash; we share your financial data about you for purposes of accepting deposits or performing risk analysis.</li>\r\n	<li>Business partners &ndash; we share your data with business partners, such as storage providers and analytics providers who help us provide you with our service.</li>\r\n	<li>Legal and regulatory entities &ndash; we may disclose any data in case we believe, in good faith, that such disclosure is necessary in order to enforce our Terms &amp; Conditions take precautions against liabilities, investigate and defend ourselves against any third party claims or allegations, protect the security or integrity of the site and our servers and protect the rights and property, our users and/or partners. We may also disclose your personal data where requested any other regulatory authority having control or jurisdiction over us, you or our associates or in the territories we have clients or providers, as a broker.</li>\r\n	<li>Merger and acquisitions &ndash; we may share your data if we enter into a business transaction such as a merger, acquisition, reorganization, bankruptcy, or sale of some or all of our assets. Any party that acquires our assets as part of such a transaction may continue to use your data in accordance with the terms of this Privacy Policy.</li>\r\n</ul>\r\n\r\n<p><strong>Transfer of data outside the EEA</strong></p>\r\n\r\n<p>Please note that some data recipients may be located outside the EEA. In such cases, we will transfer your data only to such countries as approved by the European Commission as providing an adequate level of data protection or enter into legal agreements ensuring an adequate level of data protection.</p>\r\n\r\n<p><strong>How we protect your data</strong></p>\r\n\r\n<p>We have implemented administrative, technical, and physical safeguards to help prevent unauthorized access, use, or disclosure of your personal data. Your data is stored on secure servers and isn&rsquo;t publicly available. We limit access of your data only to those employees or partners that need to know the information in order to enable the carrying out of the agreement between us.</p>\r\n\r\n<p>You need to help us prevent unauthorized access to your account by protecting your password appropriately and limiting access to your account (for example, by signing off after you have finished accessing your account). You will be solely responsible for keeping your password confidential and for all use of your password and your account, including any unauthorized use.</p>\r\n\r\n<p>While we seek to protect your data to ensure that it is kept confidential, we cannot absolutely guarantee its security. You should be aware that there is always some risk involved in transmitting data over the internet. While we strive to protect your Personal Data, we cannot ensure or warrant the security and privacy of your personal Data or other content you transmit using the service, and you do so at your own risk.</p>\r\n\r\n<p><strong>Retention</strong></p>\r\n\r\n<p>We will retain your personal data for as long as necessary to provide our services, and as necessary to comply with our legal obligations, resolve disputes, and enforce our policies. Retention periods will be determined taking into account the type of data that is collected and the purpose for which it is collected, bearing in mind the requirements applicable to the situation and the need to destroy outdated, unused data at the earliest reasonable time. Under applicable regulations, we will keep records containing client personal data, trading information, account opening documents, communications and anything else as required by applicable laws and regulations.</p>\r\n\r\n<p><strong>User Rights</strong></p>\r\n\r\n<ol>\r\n	<li>Receive confirmation as to whether or not personal data concerning you is being processed, and access your stored personal data, together with supplementary data.</li>\r\n	<li>Receive a copy of personal data you directly volunteer to us in a structured, commonly used and machine-readable format.</li>\r\n	<li>Request rectification of your personal data that is in our control.</li>\r\n	<li>Request erasure of your personal data.</li>\r\n	<li>Object to the processing of personal data by us.</li>\r\n	<li>Request to restrict processing of your personal data by us.</li>\r\n</ol>\r\n\r\n<p>However, please note that these rights are not absolute, and may be subject to our own legitimate interests and regulatory requirements.</p>\r\n\r\n<p><strong>How to Contact us?</strong></p>\r\n\r\n<p>If you wish to exercise any of the aforementioned rights, or receive more information, please contact our General Data Protection Officer (&ldquo;GDPO&rdquo;) using the details provided below:</p>\r\n\r\n<p>Email: support@onlintrade.com</p>\r\n\r\n<p>Attn. GDPO Compliance Officer</p>\r\n\r\n<p>If you decide to terminate your account, you may do so by emailing us at support@onlintrade.com. If you terminate your account, please be aware that personal information that you have provided us may still be maintained for legal and regulatory reasons (as described above), but it will no longer be accessible via your account.</p>\r\n\r\n<p><strong>Updates to this Policy</strong></p>\r\n\r\n<p>This Privacy Policy is subject to changes from time to time, at our sole discretion. The most current version will always be posted on our website (as reflected in the &ldquo;Last Updated&rdquo; heading). You are advised to check for updates regularly. In the event of material changes, we will provide you with a notice. By continuing to access or use our services after any revisions become effective, you agree to be bound by the updated Privacy Policy.</p>', 'yes', '2020-12-14 09:39:57', '2021-10-27 12:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_is_said` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `ref_key`, `position`, `name`, `what_is_said`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'mZVhqO', 'Principal', 'Sarah Ona', 'I love this platform', '5EJXRd02.jpg1635329727', '2021-04-01 15:00:56', '2021-10-27 09:16:30'),
(3, 'EPVy3D', 'Investor', 'Mike Dinne', 'I have invested and its all good, please try it out guys', 'SIu0JZ01.jpg1635329714', '2021-10-27 09:16:14', '2021-10-27 09:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `tp__transactions`
--

CREATE TABLE `tp__transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp__transactions`
--

INSERT INTO `tp__transactions` (`id`, `plan`, `user`, `amount`, `type`, `created_at`, `updated_at`) VALUES
(12, 'From Account unused deposit to capital', 17, '10', 'Transfer', '2021-04-22 10:15:19', '2021-04-22 10:15:19'),
(13, 'From Profit to Unused Deposit', 17, '10', 'Transfer', '2021-04-22 10:18:35', '2021-04-22 10:18:35'),
(14, 'Bnous', 17, '20', 'Plan purchase', '2021-04-22 12:20:27', '2021-04-22 12:20:27'),
(15, 'Bnous', 17, '20', 'Plan purchase', '2021-04-22 12:27:12', '2021-04-22 12:27:12'),
(22, 'Premium', 17, '30', 'Plan purchase', '2021-06-07 11:38:47', '2021-06-07 11:38:47'),
(23, 'Credit', 45, '100', 'Deposit', '2021-06-08 08:06:21', '2021-06-08 08:06:21'),
(24, 'Premium', 45, '30', 'Plan purchase', '2021-06-08 08:07:25', '2021-06-08 08:07:25'),
(25, 'Credit', 17, '100', 'balance', '2021-10-05 12:14:43', '2021-10-05 12:14:43'),
(26, 'Credit', 46, '100', 'balance', '2021-10-05 12:32:06', '2021-10-05 12:32:06'),
(27, 'Professional', 46, '100', 'ROI', '2021-10-05 12:33:05', '2021-10-05 12:33:05'),
(28, 'Credit', 48, '100', 'balance', '2021-10-18 10:44:55', '2021-10-18 10:44:55'),
(29, 'Subscribed MT4 Trading', 17, '30', 'MT4 Trading', '2021-10-19 08:21:23', '2021-10-19 08:21:23'),
(30, 'Subscribed MT4 Trading', 17, '30', 'MT4 Trading', '2021-10-19 08:33:42', '2021-10-19 08:33:42'),
(31, 'Starter', 17, '20', 'Plan purchase', '2021-10-19 09:23:00', '2021-10-19 09:23:00'),
(32, 'SignUp Bonus', 49, '5', 'Bonus', '2021-10-25 07:01:59', '2021-10-25 07:01:59'),
(33, 'SignUp Bonus', 50, '5', 'Bonus', '2021-10-25 07:10:01', '2021-10-25 07:10:01'),
(34, 'Credit', 49, '100', 'balance', '2021-10-25 11:03:55', '2021-10-25 11:03:55'),
(35, 'Starter', 49, '20', 'Plan purchase', '2021-10-25 11:04:08', '2021-10-25 11:04:08'),
(36, 'SignUp Bonus', 51, '5', 'Bonus', '2021-10-25 12:12:13', '2021-10-25 12:12:13'),
(37, 'SignUp Bonus', 52, '5', 'Bonus', '2021-10-27 12:50:13', '2021-10-27 12:50:13'),
(38, 'SignUp Bonus', 53, '5', 'Bonus', '2021-10-31 12:24:40', '2021-10-31 12:24:40'),
(39, 'SignUp Bonus', 54, '5', 'Bonus', '2021-10-31 12:25:53', '2021-10-31 12:25:53'),
(40, 'Transfered to Sarah Ona', 17, '100', 'Fund Transfer', '2021-11-22 09:16:51', '2021-11-22 09:16:51'),
(41, 'Received from Tester Tests', 55, '100', 'Fund Transfer', '2021-11-22 09:16:51', '2021-11-22 09:16:51'),
(42, 'SignUp Bonus', 55, '5', 'Bonus', '2021-11-22 09:17:48', '2021-11-22 09:17:48'),
(43, 'Credit', 17, '100', 'balance', '2021-12-07 10:08:18', '2021-12-07 10:08:18'),
(44, 'Transfered to Test Accout', 17, '100', 'Fund Transfer', '2021-12-07 10:09:16', '2021-12-07 10:09:16'),
(45, 'Received from Tester Tests', 55, '100', 'Fund Transfer', '2021-12-07 10:09:16', '2021-12-07 10:09:16'),
(46, 'Transfered to Test Accout', 17, '50', 'Fund Transfer', '2022-01-07 09:47:54', '2022-01-07 09:47:54'),
(47, 'Received from Tester Tests', 55, '50', 'Fund Transfer', '2022-01-07 09:47:54', '2022-01-07 09:47:54'),
(48, 'Transfered to Test Accout', 17, '50', 'Fund Transfer', '2022-01-07 13:18:08', '2022-01-07 13:18:08'),
(49, 'Received from Tester Tests', 55, '50', 'Fund Transfer', '2022-01-07 13:18:08', '2022-01-07 13:18:08'),
(50, 'Transfered to Test Accout', 17, '200', 'Fund Transfer', '2022-01-14 11:52:04', '2022-01-14 11:52:04'),
(51, 'Received from Tester Tests', 55, '200', 'Fund Transfer', '2022-01-14 11:52:04', '2022-01-14 11:52:04'),
(52, 'Transfered to Test Accout', 17, '50', 'Fund Transfer', '2022-01-14 18:48:41', '2022-01-14 18:48:41'),
(53, 'Received from Tester Tests', 55, '50', 'Fund Transfer', '2022-01-14 18:48:41', '2022-01-14 18:48:41'),
(54, 'Transfered to Test Accout', 17, '10', 'Fund Transfer', '2022-01-14 18:52:00', '2022-01-14 18:52:00'),
(55, 'Received from Tester Tests', 55, '10', 'Fund Transfer', '2022-01-14 18:52:00', '2022-01-14 18:52:00'),
(56, 'Standard', 55, '20', 'Plan purchase', '2022-02-05 22:08:27', '2022-02-05 22:08:27'),
(57, 'Standard', 55, '20', 'Plan purchase', '2022-02-05 22:08:29', '2022-02-05 22:08:29'),
(58, 'Standard', 55, '200', 'Plan purchase', '2022-02-05 22:10:07', '2022-02-05 22:10:07'),
(59, 'Standard', 55, '250', 'Plan purchase', '2022-02-05 22:15:08', '2022-02-05 22:15:08'),
(60, 'Standard', 55, '3000', 'Plan purchase', '2022-02-05 23:10:51', '2022-02-05 23:10:51'),
(61, 'Standard', 55, '6000', 'Plan purchase', '2022-02-06 20:32:43', '2022-02-06 20:32:43'),
(62, 'Standard', 55, '1000', 'Plan purchase', '2022-02-06 20:33:26', '2022-02-06 20:33:26'),
(63, 'Credit', 55, '10000', 'balance', '2022-02-12 03:07:40', '2022-02-12 03:07:40'),
(64, 'Standard', 55, '6779', 'Plan purchase', '2022-02-12 03:08:42', '2022-02-12 03:08:42'),
(65, 'Standard', 55, '231', 'Plan purchase', '2022-02-12 03:12:58', '2022-02-12 03:12:58'),
(66, 'Credit', 56, '600', 'balance', '2022-02-12 03:25:10', '2022-02-12 03:25:10'),
(67, 'Standard', 56, '455', 'Plan purchase', '2022-02-12 03:25:52', '2022-02-12 03:25:52'),
(68, 'Credit', 56, '20000', 'balance', '2022-02-12 03:30:28', '2022-02-12 03:30:28'),
(69, 'Standard', 56, '4555', 'Plan purchase', '2022-02-12 03:31:16', '2022-02-12 03:31:16'),
(70, 'Transfered to Remedy Tech', 56, '1000', 'Fund Transfer', '2022-02-12 04:46:04', '2022-02-12 04:46:04'),
(71, 'Received from Eva Kovac', 55, '1000', 'Fund Transfer', '2022-02-12 04:46:04', '2022-02-12 04:46:04'),
(72, 'Transfered to Remedy Tech', 56, '5000', 'Fund Transfer', '2022-02-12 04:46:28', '2022-02-12 04:46:28'),
(73, 'Received from Eva Kovac', 55, '5000', 'Fund Transfer', '2022-02-12 04:46:28', '2022-02-12 04:46:28'),
(74, 'Credit', 56, '10000', 'Profit', '2022-02-12 04:48:41', '2022-02-12 04:48:41'),
(75, 'Credit reversal', 56, '10000', 'Profit', '2022-02-12 04:57:01', '2022-02-12 04:57:01'),
(76, 'Transfered to Remedy Tech', 56, '100', 'Fund Transfer', '2022-02-12 05:23:23', '2022-02-12 05:23:23'),
(77, 'Received from Eva Kovac', 55, '100', 'Fund Transfer', '2022-02-12 05:23:23', '2022-02-12 05:23:23'),
(78, 'Transfered to Remedy Tech', 56, '100', 'Fund Transfer', '2022-02-12 05:23:23', '2022-02-12 05:23:23'),
(79, 'Received from Eva Kovac', 55, '100', 'Fund Transfer', '2022-02-12 05:23:23', '2022-02-12 05:23:23'),
(80, 'Transfered to Remedy Tech', 56, '500', 'Fund Transfer', '2022-02-12 05:33:31', '2022-02-12 05:33:31'),
(81, 'Received from Eva Kovac', 55, '500', 'Fund Transfer', '2022-02-12 05:33:31', '2022-02-12 05:33:31'),
(82, 'Credit', 56, '10000', 'Profit', '2022-02-12 05:38:09', '2022-02-12 05:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userupdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'light',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_bal` float DEFAULT NULL,
  `roi` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `ref_bonus` float DEFAULT NULL,
  `signup_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_trade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_released` int(11) NOT NULL DEFAULT 0,
  `ref_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `trade_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `act_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawotp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sendotpemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendroiemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendpromoemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendinvplanemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `dob`, `cstatus`, `userupdate`, `assign_to`, `address`, `country`, `phone`, `dashboard_style`, `bank_name`, `account_name`, `account_number`, `swift_code`, `acnt_type_active`, `btc_address`, `eth_address`, `ltc_address`, `plan`, `user_plan`, `account_bal`, `roi`, `bonus`, `ref_bonus`, `signup_bonus`, `auto_trade`, `bonus_released`, `ref_by`, `ref_link`, `id_card`, `passport`, `account_verify`, `entered_at`, `activated_at`, `last_growth`, `status`, `trade_mode`, `act_session`, `remember_token`, `current_team_id`, `profile_photo_path`, `withdrawotp`, `sendotpemail`, `sendroiemail`, `sendpromoemail`, `sendinvplanemail`, `created_at`, `updated_at`) VALUES
(55, 'Remedy Tech', 'nweleugochukwu@gmail.com', 'Remedy', '2021-11-22 09:16:17', '$2a$12$897xkyrPTz41RbEJaxohqea8WDVD2ZXN0x8.YZik5tTcnIxkHoToK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Australia', '+614566444', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', '9', 9665, NULL, 5, NULL, 'received', NULL, 0, NULL, 'https://hyip.metafxcrypto.com/ref/remedy', NULL, NULL, NULL, '2022-02-11 22:12:58', NULL, NULL, 'active', 'on', NULL, 'qB3MNPbMPGWHitg0cUngDIXEVCnRSIxVNzx2INvPqzExsZVYsrK5HxelcEJc', NULL, NULL, NULL, 'No', 'Yes', 'Yes', 'Yes', '2021-11-22 09:16:05', '2022-02-12 05:33:31'),
(56, 'Eva Kovac', 'remedyhyip@gmail.com', 'ugoandy', '2022-02-06 20:47:23', '$2y$10$bDVY0VdE2cJWrhRROLLcte6t5B9eXRqgvIsVFtuT/btdTQGTIww8.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', '8109514371', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'er', '6', '11', 37990, 10000, 0, 0, 'received', NULL, 0, NULL, 'http://127.0.0.1:8000/ref/ugoandy', 'eCHNvojm_denis.jpg1644621048', 'eCHNvojm_denis.jpg1644621048', 'Verified', '2022-02-11 22:31:16', NULL, NULL, 'active', 'on', NULL, 'KqPmBYb0eu05j8kJzW52askg6U1DRrbKJ9PaawOuaPLYjshvQ9gQkK25xQc7', NULL, NULL, NULL, 'No', 'Yes', 'Yes', 'Yes', '2022-02-06 20:47:23', '2022-02-12 05:41:27'),
(57, 'Nwele Ugochukwu Emmanuel', 'evakovac929@gmail.com', 'eva123', '2022-02-19 01:43:24', '$2y$10$7Dzuuon9i9E16fgGknNQyOzj2Ugu2GP4YEPWUb4WRuCAJjB3DDBYu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Andorra', '+175435672082', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 'received', NULL, 0, NULL, 'https://hyip.metafxcrypto.com//ref/eva123', NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'on', NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', '2022-02-19 01:43:24', '2022-02-19 01:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `plan`, `user`, `amount`, `active`, `inv_duration`, `expire_date`, `activated_at`, `last_growth`, `created_at`, `updated_at`) VALUES
(1, 6, 55, '20', 'expired', '1 Weeks', '2022-02-12 17:08:27', '2022-02-05 17:08:27', '2022-02-05 17:08:27', '2022-02-05 22:08:27', '2022-02-06 00:50:48'),
(2, 6, 55, '20', 'expired', '1 Weeks', '2022-02-12 17:08:29', '2022-02-05 17:08:29', '2022-02-05 17:08:29', '2022-02-05 22:08:29', '2022-02-06 00:50:58'),
(3, 6, 55, '200', 'expired', '12 hours', '2022-02-06 05:10:07', '2022-02-05 17:10:07', '2022-02-05 17:10:07', '2022-02-05 22:10:07', '2022-02-06 00:50:52'),
(4, 6, 55, '250', 'expired', '12 hours', '2022-02-06 05:15:08', '2022-02-05 17:15:08', '2022-02-05 17:15:08', '2022-02-05 22:15:08', '2022-02-06 00:50:40'),
(5, 6, 55, '3000', 'expired', '12 hours', '2022-02-06 06:10:51', '2022-02-05 18:10:51', '2022-02-05 18:10:51', '2022-02-05 23:10:51', '2022-02-06 00:50:34'),
(6, 6, 55, '6000', 'yes', '12 Hours', '2022-02-07 03:32:43', '2022-02-06 15:32:43', '2022-02-06 15:32:43', '2022-02-06 20:32:43', '2022-02-06 20:32:43'),
(7, 6, 55, '1000', 'yes', '12 Hours', '2022-02-07 03:33:26', '2022-02-06 15:33:26', '2022-02-06 15:33:26', '2022-02-06 20:33:26', '2022-02-06 20:33:26'),
(8, 6, 55, '6779', 'yes', '12 Hours', '2022-02-12 10:08:42', '2022-02-11 22:08:42', '2022-02-11 22:08:42', '2022-02-12 03:08:42', '2022-02-12 03:08:42'),
(9, 6, 55, '231', 'yes', '12 Hours', '2022-02-12 10:12:58', '2022-02-11 22:12:58', '2022-02-11 22:12:58', '2022-02-12 03:12:58', '2022-02-12 03:12:58'),
(10, 6, 56, '455', 'yes', '12 Hours', '2022-02-12 10:25:52', '2022-02-11 22:25:52', '2022-02-11 22:25:52', '2022-02-12 03:25:52', '2022-02-12 03:25:52'),
(11, 6, 56, '4555', 'yes', '12 Hours', '2022-02-12 10:31:16', '2022-02-11 22:31:16', '2022-02-11 22:31:16', '2022-02-12 03:31:16', '2022-02-12 03:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `wdmethods`
--

CREATE TABLE `wdmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methodtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `defaultpay` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wdmethods`
--

INSERT INTO `wdmethods` (`id`, `name`, `minimum`, `maximum`, `charges_amount`, `charges_type`, `duration`, `img_url`, `bankname`, `account_name`, `account_number`, `swift_code`, `wallet_address`, `barcode`, `network`, `methodtype`, `type`, `status`, `defaultpay`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', '10', '10000', '0', 'percentage', 'Instant', 'data:image/png;base64,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', NULL, NULL, NULL, NULL, 'ksjhhjhdjd', '938893993', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-11 11:53:32', '2021-10-11 09:16:24'),
(2, 'Ethereum', '10', '2100', '0', 'percentage', 'Instant', 'https://lulo.com', NULL, NULL, NULL, NULL, 'dddddddddddddddddddddddd', '938893993', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:03', '2021-10-14 09:27:15'),
(3, 'Litecoin', '100', '10000', '0', '0', 'Instant', 'https://lulo.com', NULL, NULL, NULL, NULL, 'hhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhh', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:33', '2021-10-11 09:15:46'),
(12, 'Bank Transfer', '10', '10000', '0', 'percentage', 'Instant Payment', NULL, 'Mining Bank', 'Miller lauren', '99388383', '3222ASD', NULL, NULL, NULL, 'currency', 'both', 'enabled', 'yes', '2021-10-11 11:35:35', '2022-01-07 13:44:10'),
(13, 'Doge', '10', '10000', '2', 'percentage', 'Instant Payment', 'https://lulo.com', NULL, NULL, NULL, NULL, 'jjjjjjjjjjjjjjjjjjjjjjjyyuy', 'QRCODE’,’PDF417′,’DATAMATRIX', 'Erc', 'crypto', 'deposit', 'enabled', NULL, '2021-10-14 10:54:10', '2022-01-07 13:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `columns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_deduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paydetails` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `txn_id`, `user`, `amount`, `columns`, `to_deduct`, `status`, `payment_mode`, `paydetails`, `created_at`, `updated_at`) VALUES
(24, NULL, 56, '1000', NULL, '1000', 'Processed', 'Litecoin', NULL, '2022-02-12 04:15:45', '2022-02-12 04:17:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_accounts`
--
ALTER TABLE `crypto_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipaddresses`
--
ALTER TABLE `ipaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt4_details`
--
ALTER TABLE `mt4_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paystacks`
--
ALTER TABLE `paystacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_conts`
--
ALTER TABLE `settings_conts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wdmethods`
--
ALTER TABLE `wdmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crypto_accounts`
--
ALTER TABLE `crypto_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ipaddresses`
--
ALTER TABLE `ipaddresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mt4_details`
--
ALTER TABLE `mt4_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paystacks`
--
ALTER TABLE `paystacks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_conts`
--
ALTER TABLE `settings_conts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wdmethods`
--
ALTER TABLE `wdmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
