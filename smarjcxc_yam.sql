-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2022 at 05:45 AM
-- Server version: 10.3.32-MariaDB-cll-lve
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
-- Database: `smarjcxc_yam`
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
(61, 49, '105.112.208.165', '2021-10-26 14:23:47', '2021-10-26 14:23:47', 'WebKit', 'Chrome', 'AndroidOS'),
(62, 49, '105.112.208.165', '2021-10-26 14:23:47', '2021-10-26 14:23:47', 'WebKit', 'Chrome', 'AndroidOS'),
(63, 49, '105.112.33.130', '2021-10-27 12:31:32', '2021-10-27 12:31:32', 'WebKit', 'Chrome', 'Windows'),
(64, 49, '105.112.33.130', '2021-10-27 12:31:32', '2021-10-27 12:31:32', 'WebKit', 'Chrome', 'Windows'),
(67, 17, '197.210.79.245', '2021-10-27 14:32:49', '2021-10-27 14:32:49', 'iPhone', 'Chrome', 'iOS'),
(68, 17, '197.210.79.245', '2021-10-27 14:32:49', '2021-10-27 14:32:49', 'iPhone', 'Chrome', 'iOS'),
(69, 17, '197.210.227.5', '2021-10-27 16:38:42', '2021-10-27 16:38:42', 'iPhone', 'Chrome', 'iOS'),
(70, 17, '197.210.227.5', '2021-10-27 16:38:42', '2021-10-27 16:38:42', 'iPhone', 'Chrome', 'iOS'),
(71, 17, '105.112.101.14', '2021-10-27 19:26:18', '2021-10-27 19:26:18', 'iPhone', 'Chrome', 'iOS'),
(72, 17, '105.112.101.14', '2021-10-27 19:26:18', '2021-10-27 19:26:18', 'iPhone', 'Chrome', 'iOS'),
(73, 17, '105.112.101.14', '2021-10-27 21:17:51', '2021-10-27 21:17:51', 'WebKit', 'Chrome', 'Windows'),
(74, 17, '105.112.101.14', '2021-10-27 21:17:51', '2021-10-27 21:17:51', 'WebKit', 'Chrome', 'Windows'),
(75, 17, '105.112.101.14', '2021-10-27 22:11:33', '2021-10-27 22:11:33', 'WebKit', 'Chrome', 'AndroidOS'),
(76, 17, '105.112.101.14', '2021-10-27 22:11:33', '2021-10-27 22:11:33', 'WebKit', 'Chrome', 'AndroidOS'),
(77, 17, '105.112.109.130', '2021-10-28 06:18:10', '2021-10-28 06:18:10', 'iPhone', 'Chrome', 'iOS'),
(78, 17, '105.112.109.130', '2021-10-28 06:18:10', '2021-10-28 06:18:10', 'iPhone', 'Chrome', 'iOS'),
(79, 17, '105.112.109.130', '2021-10-28 06:30:41', '2021-10-28 06:30:41', 'WebKit', 'Chrome', 'AndroidOS'),
(80, 17, '105.112.109.130', '2021-10-28 06:30:41', '2021-10-28 06:30:41', 'WebKit', 'Chrome', 'AndroidOS'),
(81, 17, '77.111.247.214', '2021-10-28 13:26:51', '2021-10-28 13:26:51', 'WebKit', 'Opera', 'Windows'),
(82, 17, '77.111.247.214', '2021-10-28 13:26:51', '2021-10-28 13:26:51', 'WebKit', 'Opera', 'Windows'),
(83, 17, '105.112.101.242', '2021-10-28 14:34:18', '2021-10-28 14:34:18', 'iPhone', 'Safari', 'iOS'),
(84, 17, '105.112.101.242', '2021-10-28 14:34:19', '2021-10-28 14:34:19', 'iPhone', 'Safari', 'iOS'),
(85, 17, '77.111.247.100', '2021-10-28 15:40:32', '2021-10-28 15:40:32', 'WebKit', 'Opera', 'Windows'),
(86, 17, '77.111.247.100', '2021-10-28 15:40:32', '2021-10-28 15:40:32', 'WebKit', 'Opera', 'Windows'),
(87, 17, '105.112.109.130', '2021-10-28 18:32:39', '2021-10-28 18:32:39', 'WebKit', 'Chrome', 'AndroidOS'),
(88, 17, '105.112.109.130', '2021-10-28 18:32:39', '2021-10-28 18:32:39', 'WebKit', 'Chrome', 'AndroidOS'),
(89, 17, '105.112.109.130', '2021-10-28 22:52:23', '2021-10-28 22:52:23', 'iPhone', 'Chrome', 'iOS'),
(90, 17, '105.112.109.130', '2021-10-28 22:52:24', '2021-10-28 22:52:24', 'iPhone', 'Chrome', 'iOS'),
(91, 17, '197.210.79.74', '2021-10-31 12:42:40', '2021-10-31 12:42:40', '0', 'Firefox', 'Windows'),
(92, 17, '197.210.79.74', '2021-10-31 12:42:40', '2021-10-31 12:42:40', '0', 'Firefox', 'Windows'),
(93, 17, '197.210.84.39', '2021-10-31 12:49:10', '2021-10-31 12:49:10', '0', 'Firefox', 'Windows'),
(94, 17, '197.210.84.39', '2021-10-31 12:49:10', '2021-10-31 12:49:10', '0', 'Firefox', 'Windows'),
(95, 17, '105.112.33.15', '2021-10-31 13:01:14', '2021-10-31 13:01:14', 'WebKit', 'Chrome', 'Windows'),
(96, 17, '105.112.33.15', '2021-10-31 13:01:14', '2021-10-31 13:01:14', 'WebKit', 'Chrome', 'Windows'),
(97, 17, '129.205.113.13', '2021-10-31 13:20:51', '2021-10-31 13:20:51', '0', 'Firefox', 'Windows'),
(98, 17, '129.205.113.13', '2021-10-31 13:20:51', '2021-10-31 13:20:51', '0', 'Firefox', 'Windows'),
(99, 17, '129.205.113.13', '2021-10-31 13:35:51', '2021-10-31 13:35:51', '0', 'Firefox', 'Windows'),
(100, 17, '129.205.113.13', '2021-10-31 13:35:51', '2021-10-31 13:35:51', '0', 'Firefox', 'Windows'),
(101, 17, '129.205.124.53', '2021-11-01 14:45:39', '2021-11-01 14:45:39', '0', 'Firefox', 'Windows'),
(102, 17, '129.205.124.53', '2021-11-01 14:45:39', '2021-11-01 14:45:39', '0', 'Firefox', 'Windows'),
(103, 17, '105.112.33.211', '2021-11-01 14:58:20', '2021-11-01 14:58:20', 'WebKit', 'Chrome', 'Windows'),
(104, 17, '105.112.33.211', '2021-11-01 14:58:20', '2021-11-01 14:58:20', 'WebKit', 'Chrome', 'Windows'),
(105, 17, '105.112.33.211', '2021-11-01 15:24:44', '2021-11-01 15:24:44', 'iPhone', 'Chrome', 'iOS'),
(106, 17, '105.112.33.211', '2021-11-01 15:24:44', '2021-11-01 15:24:44', 'iPhone', 'Chrome', 'iOS'),
(107, 52, '197.210.78.121', '2022-01-25 20:47:35', '2022-01-25 20:47:35', 'iPhone', 'Safari', 'iOS'),
(108, 52, '197.210.78.121', '2022-01-25 20:47:35', '2022-01-25 20:47:35', 'iPhone', 'Safari', 'iOS'),
(109, 56, '197.210.85.195', '2022-02-01 17:09:52', '2022-02-01 17:09:52', 'WebKit', 'Chrome', 'Windows'),
(110, 56, '197.210.85.195', '2022-02-01 17:09:52', '2022-02-01 17:09:52', 'WebKit', 'Chrome', 'Windows'),
(111, 56, '197.210.85.171', '2022-02-02 00:01:01', '2022-02-02 00:01:01', 'WebKit', 'Chrome', 'Windows'),
(112, 56, '197.210.85.171', '2022-02-02 00:01:01', '2022-02-02 00:01:01', 'WebKit', 'Chrome', 'Windows'),
(113, 56, '197.210.47.239', '2022-02-03 07:32:39', '2022-02-03 07:32:39', 'WebKit', 'Chrome', 'Windows'),
(114, 56, '197.210.47.239', '2022-02-03 07:32:40', '2022-02-03 07:32:40', 'WebKit', 'Chrome', 'Windows');

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
(1, 'Admin', 'Manager', 'admin@admin.com', NULL, '$2y$10$.dSxDlrXVD3kMaWryVh6N.9jdSxLX3L0pCUdIDuGMvOkvYv6GbfJu', '2021-10-19 17:37:35', 'disabled', '70986', 'true', '34444443', 'dark', NULL, 'active', 'active', 'Super Admin', '2021-03-10 12:55:53', '2022-02-15 10:44:09'),
(4, 'Developer', 'Manager', 'admin@remedy.com', NULL, '$2y$10$At.dpFN.klqf36lelo9ooOei2Ylf.fqzxYqgXs6ZfgNUWP7OZl6ze', '2021-10-26 09:39:09', 'disbaled', NULL, NULL, '88383883', 'dark', NULL, 'blocked', 'active', 'Super Admin', '2021-10-26 17:39:09', '2022-01-21 16:16:39');

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

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent`, `total_refered`, `total_activated`, `earnings`, `created_at`, `updated_at`) VALUES
(4, '17', '3', '0', '0', '2021-04-14 09:45:06', '2021-04-19 12:07:37');

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
(11, 'anvs8c', 'yu', 'About us header', '2020-08-22 11:32:29', '2022-02-01 15:51:24'),
(12, 'epJ4LI', 'Who we are', 'online trade \r\n                            is a solution for creating an investment management platform. It is suited for\r\n                            hedge or mutual fund managers and also Forex, stocks, bonds and cryptocurrency traders who\r\n                            are looking at runing pool trading system. Onlinetrader simplifies the investment,\r\n                            monitoring and management process. With a secure and compelling mobile-first design,\r\n                            together with a default front-end design, it takes few minutes to setup your own investment\r\n                            management or pool trading platform.', '2020-08-22 11:33:32', '2021-10-27 10:24:01'),
(13, '5hbB6X', 'Get Started', 'How to get started ?', '2020-08-22 11:33:55', '2021-10-27 10:25:09'),
(14, 'Zrhm3I', 'Create an Account', 'Create an account with us using your preffered email/username', '2020-08-22 11:34:11', '2021-10-27 10:25:29'),
(15, 'yTKhlt', 'Make a Deposit', 'Make A deposit with any of your preffered currency', '2020-08-22 11:34:26', '2021-10-27 10:25:52'),
(16, 'u0Ervr', 'Start Trading/Investing', 'Start trading with Indices commodities e.tc', '2020-08-22 11:34:56', '2021-10-27 10:26:12'),
(23, 'vr6Xw0', 'Our Investment Packages', 'Choose how you want to invest with us', '2020-08-22 11:37:43', '2021-10-27 09:58:51'),
(30, '52GPRA', 'office', '71 Cherry Court SOUTHAMPTON SO53 5PD UK', '2020-08-22 11:40:19', '2022-02-01 15:46:36'),
(31, '0EXbji', 'number', '+234 9xxxxxxxx', '2020-08-22 11:40:36', '2022-02-01 15:46:53'),
(32, 'HLgyaQ', 'contct', 'support@sitename.come', '2020-08-22 11:41:14', '2022-02-01 15:47:12'),
(35, 'Mnag31', 'The Better Way to Trade & Invest', 'Online Trade helps over 2 million customers achieve their financial goals by helping them trade and invest with ease', '2021-10-27 09:42:23', '2021-10-27 09:42:23'),
(36, 'rXJ7JQ', 'Trade Invest stock, and Bond', 'Home page text', '2021-10-27 09:45:17', '2021-10-27 09:45:17'),
(37, 'J23T0Y', 'Security Comes First', 'Security Comes first', '2021-10-27 09:53:15', '2021-10-27 09:54:52'),
(38, '9HOR1z', 'Security', 'Online Trade uses the highest levels of Internet Security, and it is secured by 256 bits SSL security encryption to ensure that your information is completely protected from fraud.', '2021-10-27 09:56:13', '2021-10-27 09:56:13'),
(39, '7DH2G9', 'Two Factor Auth', 'Two-factor authentication (2FA) by default on all Online Trade accounts, to securely protect you from unauthorised access and impersonation.', '2021-10-27 09:56:26', '2021-10-27 09:56:26'),
(40, '5Vg32I', 'Explore Our Services', 'It’s our mission to provide you with a dedarkful and a successful trading experience!', '2021-10-27 09:56:38', '2021-10-27 09:56:38'),
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
(52, 'rCTDQh', 'About us', '.', '2021-10-27 10:33:14', '2022-02-01 16:29:11'),
(53, 'kMsswR', 'Email', 'support@remedy@gmail.com', '2021-10-27 10:33:28', '2022-02-01 15:48:18'),
(54, 'EOUU7R', 'Phone nuumber', '2344556', '2021-10-27 10:33:56', '2022-02-01 15:47:41'),
(56, 'ROu4q6', 'Official Address', '48 Warwick Street, London, England, W1B 5AW', '2021-10-27 10:47:41', '2022-02-01 15:46:08');

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
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TYooMQauvdEDq54NiTphI7jx', '4eC39HqLyjWDarjtT1zdp7dc', 'Merchid ID', 'jnndjnhdjdj', 'support@remedy.com', '2021-03-11 12:46:45', '2022-02-01 22:15:43');

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
(1, 17, 0.99988, 0.00175792, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-10-31 12:25:53', '2021-10-31 12:25:53'),
(2, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-25 08:46:09', '2022-01-25 08:46:09'),
(3, 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-25 13:24:07', '2022-01-25 13:24:07'),
(4, 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-25 22:55:51', '2022-01-25 22:55:51'),
(5, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-29 16:25:26', '2022-01-29 16:25:26'),
(6, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-31 22:26:27', '2022-01-31 22:26:27'),
(7, 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 21:34:19', '2022-02-01 21:34:19'),
(8, 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 13:08:45', '2022-02-03 13:08:45'),
(9, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-15 10:42:16', '2022-02-15 10:42:16');

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
(54, NULL, 56, '1000', 'Tron', NULL, 'Processed', 'KqGokUlogo.png1643760224', '2022-02-02 05:03:44', '2022-02-02 05:06:24');

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

--
-- Dumping data for table `ipaddresses`
--

INSERT INTO `ipaddresses` (`id`, `ipaddress`, `created_at`, `updated_at`) VALUES
(30, '141.101.99.32', '2021-10-29 13:08:40', '2021-10-29 13:08:40'),
(32, '197.210.84.39', '2021-10-31 16:50:20', '2021-10-31 16:50:20'),
(33, '197.210.79.74', '2021-10-31 16:50:31', '2021-10-31 16:50:31');

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
(31, '2021_10_07_112653_create_ipaddresses_table', 8);

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

--
-- Dumping data for table `mt4_details`
--

INSERT INTO `mt4_details` (`id`, `client_id`, `mt4_id`, `mt4_password`, `type`, `account_type`, `currency`, `leverage`, `server`, `options`, `duration`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(5, 17, 'isjsj', 'jdvkbhkvhka', NULL, 'standard', 'AED', '1:400', 'hotforex', NULL, 'Monthly', 'Active', '2021-10-26 13:57:57', '2021-11-26 13:57:57', '2021-10-26 17:55:25', '2021-10-26 17:57:57');

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
(1, '2021-10-07 10:26:10', '2021-10-27 20:58:21', 'Your public key', 'Your secret key', 'https://api.paystack.co', 'Your merchant email');

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
(2, 'promo', '1000', '1000', '5000', '1540', '7700', '0', NULL, 'Main', 'Daily', 'Percentage', '5', '1 Days', '2021-04-16 07:46:09', '2022-02-03 12:31:51'),
(3, 'Standart', '5000', '5000', '25000', '125', '625', '0', NULL, 'Main', 'Daily', 'Percentage', '2.5', '1 Days', '2021-04-22 12:18:09', '2022-02-01 16:03:45'),
(5, 'PREMIUM', '10000', '10000', '100000', '330', '3300', '0', NULL, 'Main', 'Daily', 'Percentage', '3.3', '1 Days', '2021-10-05 10:48:31', '2022-01-25 12:55:58');

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
('1gnKbd2FlgXMMbug0g8iizZJkmNbyDKviOAnrF3o', NULL, '18.206.55.48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3hQdGRZMnM4VUFZcE5ZS3RaNXNSZ2FJM3FBOU5naFFwQ1ZGbEdsRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645474604),
('6lbGeBKz1XFZ55Czdq7jWhmNopZNfvvgB3Qbgxqd', NULL, '18.206.55.48', 'Apache-HttpClient/5.1.2 (Java/11.0.14)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieE9NekxLUERvRXlBaVhJWWRxdFBjajFRZ1h3dVRybHdHN2VQV08zayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645565425),
('9EmdHqSIdnf1tgOcxUbSdpztWRTe5XncXAnx3djd', NULL, '18.206.55.48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEUzbVdzajZPMFpRWXd0VHpOVURUeTJLVUFCMGhtbFc4QUd1dXQzdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1644916466),
('B5nq1e5jVGSArmCSlMFEIDycED8lzNKo7eNKLvcj', NULL, '54.227.32.154', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 OPR/80.0.4170.63', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3gwM0tRTEo1Nk5CMUpEbFM0SWl3MlhWSnNZQjd2QzdycmFNcEpGRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645567865),
('BM59NcYdpibUVO1p5rQclZNJOaOQhe9emqBG6PGZ', NULL, '54.227.32.154', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 OPR/80.0.4170.63', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWpVdEFmTzNmemhpVHlqNGxKRTRUOGhmY2psVFZjSGVSbjRXeFM2ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1644925961),
('GzE1yJmMu8tsOYYzpmzRMpJ0B2EzNeUEorLFLl5m', NULL, '18.206.55.48', 'Apache-HttpClient/5.1.2 (Java/11.0.14)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzREc09BMk0xZjRMbGxtTGZXRXdtcFQ0R1A3R3I3SVRScURaOHRBOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645474603),
('iEZbniXnNwHCLDv6GGvMFlCGZDSVQRKdlocQBfgO', NULL, '18.206.55.48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFFPaFhObDhZV1ZRTktQd0M5a21GYWd1bVBCb01KWUZudUVyTlJXcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645565425),
('IZQV0ihdtBoohyvhKHCEr6TAByBCcy9byVmMpbXd', NULL, '54.227.32.154', 'Mozilla/5.0 (Windows NT 10.0; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWNGb1hwcXpObnlsN3FLY1FnWHREUFVBNE5FTHE0RjVDNjBqQktQUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645478405),
('kIWPaBJPoK3uoFEnDLkHpMwShjGp9s4dUZAgN2Da', NULL, '51.158.66.83', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGxHckRySG04eU4xUXBCc3Nlc3pqU0tSQmRKckpxS1R0b0oyajZKbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3Lmh5aXAuc21hcnRleHBlcnRmeC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1645257708),
('KQnBDd7oXWaZA7jbqoH1O6RX3breVMtizlCgMUaY', NULL, '35.213.234.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BW/1.1; bit.ly/2W6Px8S; 8b52e8babb) Chrome/84.0.4147.105 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejc4RWJzdFZwZHVWTlA3eEh4bjJrdmxoSlJ6enlTSlpqY1N1a2FCayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645055635),
('u3KF0HU33pGSzqroF9PXRveU7x4EBatWcDp5MGtt', NULL, '18.206.55.48', 'Apache-HttpClient/5.1.2 (Java/11.0.14)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGt2QmxpU21ZZHQ5MGJQMmZJUFdPRmYyWTU0UHI3TTgwU0YzNXlUcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1644916465),
('WAKRoY1eBhft85E9HxBaqjde5vCgOl0v9yj9aO6w', NULL, '51.15.195.246', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXB0RjdVNFQ4aGpsQ1ZSYzhZTVo2Szh4OGdWdFhIWHJBdGZGMVNRdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1645099620),
('XVF06Fgg3i8dYieiBBJeVLqtQp44kkLCjvXfzicu', NULL, '197.210.84.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3kzZ2k0ZVM5RVhlNTR1T3E4NXk1RUswUEprSWg0VFVoejlXWVJTSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vaHlpcC5zbWFydGV4cGVydGZ4LmNvbSI7fX0=', 1644905905);

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
  `tawk_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Bitcon Investment', 'Cryptocurrency', '$', 'USD', 'Your captcha secret', 'Your site key', '123567', 'Local', 'sk_test_51JP8qpSBWKZBQRLPWqHkFM8oqFEAqXLAaH3S8byZF73X0UycxijVyfebcyu6OVoZ8eeAelr3js3ADYIGU22Dk2Vo00kGkdE9xP', 'pk_test_51JP8qpSBWKZBQRLPUIfQVYfUGly65fb1LiPUwAUajKy1nVM9Rvly3v3hQLvXnRqrWCrnUNz1qPQHNSxE689tSAoL00B1iOTNfd', 'jijdjkdkdk', 'iidjdjdj', 'Cryptocurency, forex, cfd,hyip', 'Bitcoin cryptocurrency', 'https://hyip.smartexpertfx.com/', 'aD9wWXlogo.png1644904055', 'aD9wWXlogo.png1644904055', 'on', 'on', 'off', 'info@hyip.smartexpertfx.com', 'UTC', 'sendmail', 'support@yourwebsite', 'Hyip.smartexpertfx', 'Your host here', '25251', 'tls', 'Your username', 'Your password', 'Your client secret', 'your client ID', 'http://yoursiteurl/auth/google/callback', '5', '3', '2', '1', '0', '0', '0', 'tawk to codess', 'no', 'no', 'true', 'false', 'no', 'manual', 'manual', 'dark', 'off', 'off', 'false', NULL, NULL, '30', '40', '80', NULL, NULL, '2022-02-15 10:51:31');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_conts`
--

INSERT INTO `settings_conts` (`id`, `use_crypto_feature`, `fee`, `btc`, `eth`, `ltc`, `link`, `bnb`, `aave`, `usdt`, `bch`, `xlm`, `xrp`, `ada`, `created_at`, `updated_at`) VALUES
(1, 'true', 2, 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', '2021-10-31 13:32:30', '2021-11-01 18:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '<p><strong>Our Commitment to You:</strong></p>\r\n\r\n<p>Thank you for showing interest in our service. In order for us to provide you with our service, we are required to collect and process certain personal data about you and your activity.</p>\r\n\r\n<p>By entrusting us with your personal data, we would like to assure you of our commitment to keep such information private and to operate in accordance with all regulatory laws and all EU data protection laws, including General Data Protection Regulation (GDPR) 679/2016 (EU).</p>\r\n\r\n<p>We have taken measurable steps to protect the confidentiality, security and integrity of this data. We encourage you to review the following information carefully.</p>\r\n\r\n<p><strong>Grounds for data collection:</strong></p>\r\n\r\n<p>Processing of your personal information (meaning, any data which may potentially allow your identification with reasonable means; hereinafter &ldquo;Personal Data&rdquo;) is necessary for the performance of our contractual obligations towards you and providing you with our services, to protect our legitimate interests and for compliance with legal and financial regulatory obligations to which we are subject.</p>\r\n\r\n<p>When you use our services, you consent to the collection, storage, use, disclosure and other uses of your Personal Data as described in this Privacy Policy.</p>\r\n\r\n<p><strong>How do we receive data about you?</strong></p>\r\n\r\n<p>We receive your Personal Data from various sources:</p>\r\n\r\n<ol>\r\n	<li>When you voluntarily provide us with your personal details in order to create an account (for example, your name and email address)</li>\r\n	<li>When you use or access our site and services, in connection with your use of our services (for example, your financial transactions)</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><strong>What type of data we collect?</strong></p>\r\n\r\n<p>In order to open an account, and in order to provide you with our services we will need you to collect the following data:</p>\r\n\r\n<p><strong>Personal Data<br />\r\nWe collect the following Personal Data about you:</strong></p>\r\n\r\n<ul>\r\n	<li><em>Registration data</em>&nbsp;&ndash; your name, email address, phone number, occupation, country of residence, and your age (in order to verify you are over 18 years of age and eligible to participate in our service).</li>\r\n	<li><em>Voluntary data</em>&nbsp;&ndash; when you communicate with us (for example when you send us an email or use a &ldquo;contact us&rdquo; form on our site) we collect the personal data you provided us with.</li>\r\n	<li><em>Financial data</em>&nbsp;&ndash; by its nature, your use of our services includes financial transactions, thus requiring us to obtain your financial details, which includes, but not limited to your payment details (such as bank account details and financial transactions performed through our services).</li>\r\n	<li><em>Technical data</em>&nbsp;&ndash; we collect certain technical data that is automatically recorded when you use our services, such as your IP address, MAC address, device approximate location</li>\r\n	<li>Non Personal Data</li>\r\n</ul>\r\n\r\n<p>We record and collect data from or about your device (for example your computer or your mobile device) when you access our services and visit our site. This includes, but not limited to: your login credentials, UDID, Google advertising ID, IDFA, cookie identifiers, and may include other identifiers such your operating system version, browser type, language preferences, time zone, referring domains and the duration of your visits. This will facilitate our ability to improve our service and personalize your experience with us.<br />\r\nIf we combine Personal Data with non-Personal Data about you, the combined data will be treated as Personal Data for as long as it remains combined.</p>\r\n\r\n<p><strong>Tracking Technologies</strong></p>\r\n\r\n<p>When you visit or access our services we use (and authorize 3rd parties to use) pixels, cookies, events and other technologies (&ldquo;Tracking Technologies&ldquo;). Those allow us to automatically collect data about you, your device and your online behavior, in order to enhance your navigation in our services, improve our site&rsquo;s performance, perform analytics and customize your experience on it. In addition, we may merge data we have with data collected through said tracking technologies with data we may obtain from other sources and, as a result, such data may become Personal Data.<br />\r\nCookie Policy page.</p>\r\n\r\n<p><strong>How do we use the data We collect?</strong></p>\r\n\r\n<ul>\r\n	<li>Provision of service &ndash; we will use your Personal Data you provide us for the provision and improvement of our services to you.</li>\r\n	<li>Marketing purposes &ndash; we will use your Personal Data (such as your email address or phone number). For example, by subscribing to our newsletter you will receive tips and announcements straight to your email account. We may also send you promotional material concerning our services or our partners&rsquo; services (which we believe may interest you), including but not limited to, by building an automated profile based on your Personal Data, for marketing purposes. You may choose not to receive our promotional or marketing emails (all or any part thereof) by clicking on the &ldquo;unsubscribe&rdquo; link in the emails that you receive from us. Please note that even if you unsubscribe from our newsletter, we may continue to send you service-related updates and notifications or reply to your queries and feedback you provide us.</li>\r\n	<li>Opt-out of receiving marketing materials &ndash; If you do not want us to use or share your personal data for marketing purposes, you may opt-out in accordance with this &ldquo;Opt-out&rdquo; section. Please note that even if you opt-out, we may still use and share your personal information with third parties for non-marketing purposes (for example to fulfill your requests, communicate with you and respond to your inquiries, etc.). In such cases, the companies with whom we share your personal data are authorized to use your Personal Data only as necessary to provide these non-marketing services.</li>\r\n	<li>Analytics, surveys and research &ndash; we are always trying to improve our services and think of new and exciting features for our users. From time to time, we may conduct surveys or test features, and analyze the information we have to develop, evaluate and improve these features.</li>\r\n	<li>Protecting our interests &ndash; we use your Personal Data when we believe it&rsquo;s necessary in order to take precautions against liabilities, investigate and defend ourselves against any third-party claims or allegations, investigate and protect ourselves from fraud, protect the security or integrity of our services and protect the rights and property of the company, its users and/or partners.</li>\r\n	<li>Enforcing of policies &ndash; we use your Personal Data in order to enforce our policies, including but limited to our Terms &amp; Conditions.</li>\r\n	<li>Compliance with legal and regulatory requirements &ndash; we also use your Personal Data to investigate violations and prevent money laundering and perform due-diligence checks, and as required by law, regulation or other governmental authority, or to comply with a subpoena or similar legal process.</li>\r\n</ul>\r\n\r\n<p><strong>With whom do we share your Personal Data</strong></p>\r\n\r\n<ul>\r\n	<li>Internal concerned parties &ndash; we share your data with companies in our group, as well as our employees limited to those employees or partners who need to know the information in order to provide you with our services.</li>\r\n	<li>Financial providers and payment processors &ndash; we share your financial data about you for purposes of accepting deposits or performing risk analysis.</li>\r\n	<li>Business partners &ndash; we share your data with business partners, such as storage providers and analytics providers who help us provide you with our service.</li>\r\n	<li>Legal and regulatory entities &ndash; we may disclose any data in case we believe, in good faith, that such disclosure is necessary in order to enforce our Terms &amp; Conditions take precautions against liabilities, investigate and defend ourselves against any third party claims or allegations, protect the security or integrity of the site and our servers and protect the rights and property, our users and/or partners. We may also disclose your personal data where requested any other regulatory authority having control or jurisdiction over us, you or our associates or in the territories we have clients or providers, as a broker.</li>\r\n	<li>Merger and acquisitions &ndash; we may share your data if we enter into a business transaction such as a merger, acquisition, reorganization, bankruptcy, or sale of some or all of our assets. Any party that acquires our assets as part of such a transaction may continue to use your data in accordance with the terms of this Privacy Policy.</li>\r\n</ul>\r\n\r\n<p><strong>Transfer of data outside the EEA</strong></p>\r\n\r\n<p>Please note that some data recipients may be located outside the EEA. In such cases, we will transfer your data only to such countries as approved by the European Commission as providing an adequate level of data protection or enter into legal agreements ensuring an adequate level of data protection.</p>\r\n\r\n<p><strong>How we protect your data</strong></p>\r\n\r\n<p>We have implemented administrative, technical, and physical safeguards to help prevent unauthorized access, use, or disclosure of your personal data. Your data is stored on secure servers and isn&rsquo;t publicly available. We limit access of your data only to those employees or partners that need to know the information in order to enable the carrying out of the agreement between us.</p>\r\n\r\n<p>You need to help us prevent unauthorized access to your account by protecting your password appropriately and limiting access to your account (for example, by signing off after you have finished accessing your account). You will be solely responsible for keeping your password confidential and for all use of your password and your account, including any unauthorized use.</p>\r\n\r\n<p>While we seek to protect your data to ensure that it is kept confidential, we cannot absolutely guarantee its security. You should be aware that there is always some risk involved in transmitting data over the internet. While we strive to protect your Personal Data, we cannot ensure or warrant the security and privacy of your personal Data or other content you transmit using the service, and you do so at your own risk.</p>\r\n\r\n<p><strong>Retention</strong></p>\r\n\r\n<p>We will retain your personal data for as long as necessary to provide our services, and as necessary to comply with our legal obligations, resolve disputes, and enforce our policies. Retention periods will be determined taking into account the type of data that is collected and the purpose for which it is collected, bearing in mind the requirements applicable to the situation and the need to destroy outdated, unused data at the earliest reasonable time. Under applicable regulations, we will keep records containing client personal data, trading information, account opening documents, communications and anything else as required by applicable laws and regulations.</p>\r\n\r\n<p><strong>User Rights</strong></p>\r\n\r\n<ol>\r\n	<li>Receive confirmation as to whether or not personal data concerning you is being processed, and access your stored personal data, together with supplementary data.</li>\r\n	<li>Receive a copy of personal data you directly volunteer to us in a structured, commonly used and machine-readable format.</li>\r\n	<li>Request rectification of your personal data that is in our control.</li>\r\n	<li>Request erasure of your personal data.</li>\r\n	<li>Object to the processing of personal data by us.</li>\r\n	<li>Request to restrict processing of your personal data by us.</li>\r\n</ol>\r\n\r\n<p>However, please note that these rights are not absolute, and may be subject to our own legitimate interests and regulatory requirements.</p>\r\n\r\n<p><strong>How to Contact us?</strong></p>\r\n\r\n<p>If you wish to exercise any of the aforementioned rights, or receive more information, please contact our General Data Protection Officer (&ldquo;GDPO&rdquo;) using the details provided below:</p>\r\n\r\n<p>Email: support@onlintrade.com</p>\r\n\r\n<p>Attn. GDPO Compliance Officer</p>\r\n\r\n<p>If you decide to terminate your account, you may do so by emailing us at support@onlintrade.com. If you terminate your account, please be aware that personal information that you have provided us may still be maintained for legal and regulatory reasons (as described above), but it will no longer be accessible via your account.</p>\r\n\r\n<p><strong>Updates to this Policy</strong></p>\r\n\r\n<p>This Privacy Policy is subject to changes from time to time, at our sole discretion. The most current version will always be posted on our website (as reflected in the &ldquo;Last Updated&rdquo; heading). You are advised to check for updates regularly. In the event of material changes, we will provide you with a notice. By continuing to access or use our services after any revisions become effective, you agree to be bound by the updated Privacy Policy.</p>', 'no', '2020-12-14 09:39:57', '2021-10-31 16:41:30');

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
(32, 'Credit reversal', 48, '50', 'balance', '2021-10-20 16:30:10', '2021-10-20 16:30:10'),
(33, 'Starter', 17, '20', 'Plan purchase', '2021-10-20 17:58:15', '2021-10-20 17:58:15'),
(34, 'Starter', 17, '1', 'ROI', '2021-10-20 18:30:23', '2021-10-20 18:30:23'),
(35, 'Starter', 17, '1', 'ROI', '2021-10-20 19:00:37', '2021-10-20 19:00:37'),
(36, 'Starter', 17, '1', 'ROI', '2021-10-20 19:35:03', '2021-10-20 19:35:03'),
(37, 'Starter', 17, '1', 'ROI', '2021-10-20 20:05:23', '2021-10-20 20:05:23'),
(38, 'Starter', 17, '1', 'ROI', '2021-10-20 20:40:19', '2021-10-20 20:40:19'),
(39, 'Starter', 17, '1', 'ROI', '2021-10-20 21:10:46', '2021-10-20 21:10:46'),
(40, 'Starter', 17, '1', 'ROI', '2021-10-20 21:45:12', '2021-10-20 21:45:12'),
(41, 'Starter', 17, '1', 'ROI', '2021-10-20 22:15:27', '2021-10-20 22:15:27'),
(42, 'Starter', 17, '1', 'ROI', '2021-10-20 22:50:07', '2021-10-20 22:50:07'),
(43, 'Starter', 17, '1', 'ROI', '2021-10-20 23:20:47', '2021-10-20 23:20:47'),
(44, 'Starter', 17, '1', 'ROI', '2021-10-20 23:55:13', '2021-10-20 23:55:13'),
(45, 'Starter', 17, '1', 'ROI', '2021-10-21 00:25:39', '2021-10-21 00:25:39'),
(46, 'Starter', 17, '1', 'ROI', '2021-10-21 01:00:25', '2021-10-21 01:00:25'),
(47, 'Starter', 17, '1', 'ROI', '2021-10-21 01:30:39', '2021-10-21 01:30:39'),
(48, 'Starter', 17, '1', 'ROI', '2021-10-21 02:05:12', '2021-10-21 02:05:12'),
(49, 'Starter', 17, '1', 'ROI', '2021-10-21 02:35:30', '2021-10-21 02:35:30'),
(50, 'Starter', 17, '1', 'ROI', '2021-10-21 03:10:01', '2021-10-21 03:10:01'),
(51, 'Starter', 17, '1', 'ROI', '2021-10-21 03:40:45', '2021-10-21 03:40:45'),
(52, 'Starter', 17, '1', 'ROI', '2021-10-21 04:15:21', '2021-10-21 04:15:21'),
(53, 'Starter', 17, '1', 'ROI', '2021-10-21 04:45:42', '2021-10-21 04:45:42'),
(54, 'Starter', 17, '1', 'ROI', '2021-10-21 05:20:01', '2021-10-21 05:20:01'),
(55, 'Starter', 17, '1', 'ROI', '2021-10-21 05:50:25', '2021-10-21 05:50:25'),
(56, 'Starter', 17, '1', 'ROI', '2021-10-21 06:25:15', '2021-10-21 06:25:15'),
(57, 'Starter', 17, '1', 'ROI', '2021-10-21 07:00:30', '2021-10-21 07:00:30'),
(58, 'Starter', 17, '1', 'ROI', '2021-10-21 07:30:31', '2021-10-21 07:30:31'),
(59, 'Starter', 17, '1', 'ROI', '2021-10-21 08:00:33', '2021-10-21 08:00:33'),
(60, 'Starter', 17, '1', 'ROI', '2021-10-21 08:35:36', '2021-10-21 08:35:36'),
(61, 'Starter', 17, '1', 'ROI', '2021-10-21 09:10:04', '2021-10-21 09:10:04'),
(62, 'Starter', 17, '1', 'ROI', '2021-10-21 09:40:41', '2021-10-21 09:40:41'),
(63, 'Starter', 17, '1', 'ROI', '2021-10-21 10:15:40', '2021-10-21 10:15:40'),
(64, 'Starter', 17, '1', 'ROI', '2021-10-21 10:50:42', '2021-10-21 10:50:42'),
(65, 'Starter', 17, '1', 'ROI', '2021-10-21 11:20:49', '2021-10-21 11:20:49'),
(66, 'Starter', 17, '1', 'ROI', '2021-10-21 11:55:43', '2021-10-21 11:55:43'),
(67, 'Starter', 17, '1', 'ROI', '2021-10-21 12:30:09', '2021-10-21 12:30:09'),
(68, 'Starter', 17, '1', 'ROI', '2021-10-21 13:00:31', '2021-10-21 13:00:31'),
(69, 'Starter', 17, '1', 'ROI', '2021-10-21 13:35:45', '2021-10-21 13:35:45'),
(70, 'Starter', 17, '1', 'ROI', '2021-10-21 14:10:36', '2021-10-21 14:10:36'),
(71, 'Starter', 17, '1', 'ROI', '2021-10-21 14:45:39', '2021-10-21 14:45:39'),
(72, 'Starter', 17, '1', 'ROI', '2021-10-21 15:15:49', '2021-10-21 15:15:49'),
(73, 'Starter', 17, '1', 'ROI', '2021-10-21 15:50:47', '2021-10-21 15:50:47'),
(74, 'Starter', 17, '1', 'ROI', '2021-10-21 16:25:33', '2021-10-21 16:25:33'),
(75, 'Starter', 17, '1', 'ROI', '2021-10-21 17:00:47', '2021-10-21 17:00:47'),
(76, 'Starter', 17, '1', 'ROI', '2021-10-21 17:35:12', '2021-10-21 17:35:12'),
(77, 'Starter', 17, '1', 'ROI', '2021-10-21 18:05:21', '2021-10-21 18:05:21'),
(78, 'Starter', 17, '1', 'ROI', '2021-10-21 18:40:46', '2021-10-21 18:40:46'),
(79, 'Starter', 17, '1', 'ROI', '2021-10-21 19:10:49', '2021-10-21 19:10:49'),
(80, 'Starter', 17, '1', 'ROI', '2021-10-21 19:45:45', '2021-10-21 19:45:45'),
(81, 'Starter', 17, '1', 'ROI', '2021-10-21 20:20:16', '2021-10-21 20:20:16'),
(82, 'Starter', 17, '1', 'ROI', '2021-10-21 20:50:34', '2021-10-21 20:50:34'),
(83, 'Starter', 17, '1', 'ROI', '2021-10-21 21:20:46', '2021-10-21 21:20:46'),
(84, 'Starter', 17, '1', 'ROI', '2021-10-21 21:55:38', '2021-10-21 21:55:38'),
(85, 'Starter', 17, '1', 'ROI', '2021-10-21 22:30:37', '2021-10-21 22:30:37'),
(86, 'Starter', 17, '1', 'ROI', '2021-10-21 23:00:38', '2021-10-21 23:00:38'),
(87, 'Starter', 17, '1', 'ROI', '2021-10-21 23:30:47', '2021-10-21 23:30:47'),
(88, 'Starter', 17, '1', 'ROI', '2021-10-22 00:05:23', '2021-10-22 00:05:23'),
(89, 'Starter', 17, '1', 'ROI', '2021-10-22 00:40:12', '2021-10-22 00:40:12'),
(90, 'Starter', 17, '1', 'ROI', '2021-10-22 01:15:18', '2021-10-22 01:15:18'),
(91, 'Starter', 17, '1', 'ROI', '2021-10-22 01:45:32', '2021-10-22 01:45:32'),
(92, 'Starter', 17, '1', 'ROI', '2021-10-22 02:15:43', '2021-10-22 02:15:43'),
(93, 'Starter', 17, '1', 'ROI', '2021-10-22 02:50:17', '2021-10-22 02:50:17'),
(94, 'Starter', 17, '1', 'ROI', '2021-10-22 03:25:31', '2021-10-22 03:25:31'),
(95, 'Starter', 17, '1', 'ROI', '2021-10-22 04:00:29', '2021-10-22 04:00:29'),
(96, 'Starter', 17, '1', 'ROI', '2021-10-22 04:35:25', '2021-10-22 04:35:25'),
(97, 'Starter', 17, '1', 'ROI', '2021-10-22 05:05:37', '2021-10-22 05:05:37'),
(98, 'Starter', 17, '1', 'ROI', '2021-10-22 05:35:47', '2021-10-22 05:35:47'),
(99, 'Starter', 17, '1', 'ROI', '2021-10-22 06:10:08', '2021-10-22 06:10:08'),
(100, 'Starter', 17, '1', 'ROI', '2021-10-22 06:40:25', '2021-10-22 06:40:25'),
(101, 'Starter', 17, '1', 'ROI', '2021-10-22 07:15:07', '2021-10-22 07:15:07'),
(102, 'Starter', 17, '1', 'ROI', '2021-10-22 07:45:49', '2021-10-22 07:45:49'),
(103, 'Starter', 17, '1', 'ROI', '2021-10-22 08:20:13', '2021-10-22 08:20:13'),
(104, 'Starter', 17, '1', 'ROI', '2021-10-22 08:50:21', '2021-10-22 08:50:21'),
(105, 'Starter', 17, '1', 'ROI', '2021-10-22 09:20:33', '2021-10-22 09:20:33'),
(106, 'Starter', 17, '1', 'ROI', '2021-10-22 09:55:17', '2021-10-22 09:55:17'),
(107, 'Starter', 17, '1', 'ROI', '2021-10-22 10:30:43', '2021-10-22 10:30:43'),
(108, 'Starter', 17, '1', 'ROI', '2021-10-22 11:05:29', '2021-10-22 11:05:29'),
(109, 'Starter', 17, '1', 'ROI', '2021-10-22 11:35:45', '2021-10-22 11:35:45'),
(110, 'Starter', 17, '1', 'ROI', '2021-10-22 12:10:10', '2021-10-22 12:10:10'),
(111, 'Starter', 17, '1', 'ROI', '2021-10-22 12:40:49', '2021-10-22 12:40:49'),
(112, 'Starter', 17, '1', 'ROI', '2021-10-22 13:10:50', '2021-10-22 13:10:50'),
(113, 'Starter', 17, '1', 'ROI', '2021-10-22 13:45:24', '2021-10-22 13:45:24'),
(114, 'Starter', 17, '1', 'ROI', '2021-10-22 14:15:43', '2021-10-22 14:15:43'),
(115, 'Starter', 17, '1', 'ROI', '2021-10-22 14:45:43', '2021-10-22 14:45:43'),
(116, 'Starter', 17, '1', 'ROI', '2021-10-22 15:15:44', '2021-10-22 15:15:44'),
(117, 'Starter', 17, '1', 'ROI', '2021-10-22 15:50:44', '2021-10-22 15:50:44'),
(118, 'Starter', 17, '1', 'ROI', '2021-10-22 16:25:38', '2021-10-22 16:25:38'),
(119, 'Starter', 17, '1', 'ROI', '2021-10-22 17:00:17', '2021-10-22 17:00:17'),
(120, 'Starter', 17, '1', 'ROI', '2021-10-22 17:30:17', '2021-10-22 17:30:17'),
(121, 'Starter', 17, '1', 'ROI', '2021-10-22 18:05:34', '2021-10-22 18:05:34'),
(122, 'Starter', 17, '1', 'ROI', '2021-10-22 18:40:37', '2021-10-22 18:40:37'),
(123, 'Starter', 17, '1', 'ROI', '2021-10-22 19:15:39', '2021-10-22 19:15:39'),
(124, 'Starter', 17, '1', 'ROI', '2021-10-22 19:50:33', '2021-10-22 19:50:33'),
(125, 'Starter', 17, '1', 'ROI', '2021-10-22 20:25:04', '2021-10-22 20:25:04'),
(126, 'Starter', 17, '1', 'ROI', '2021-10-22 20:55:24', '2021-10-22 20:55:24'),
(127, 'Starter', 17, '1', 'ROI', '2021-10-22 21:30:41', '2021-10-22 21:30:41'),
(128, 'Starter', 17, '1', 'ROI', '2021-10-22 22:05:13', '2021-10-22 22:05:13'),
(129, 'Starter', 17, '1', 'ROI', '2021-10-22 22:35:38', '2021-10-22 22:35:38'),
(130, 'Starter', 17, '1', 'ROI', '2021-10-22 23:05:44', '2021-10-22 23:05:44'),
(131, 'Starter', 17, '1', 'ROI', '2021-10-22 23:40:10', '2021-10-22 23:40:10'),
(132, 'Starter', 17, '1', 'ROI', '2021-10-23 00:15:15', '2021-10-23 00:15:15'),
(133, 'Starter', 17, '1', 'ROI', '2021-10-23 00:50:18', '2021-10-23 00:50:18'),
(134, 'Starter', 17, '1', 'ROI', '2021-10-23 01:20:24', '2021-10-23 01:20:24'),
(135, 'Starter', 17, '1', 'ROI', '2021-10-23 01:50:36', '2021-10-23 01:50:36'),
(136, 'Starter', 17, '1', 'ROI', '2021-10-23 02:20:42', '2021-10-23 02:20:42'),
(137, 'Starter', 17, '1', 'ROI', '2021-10-23 02:55:16', '2021-10-23 02:55:16'),
(138, 'Starter', 17, '1', 'ROI', '2021-10-23 03:25:34', '2021-10-23 03:25:34'),
(139, 'Starter', 17, '1', 'ROI', '2021-10-23 03:55:39', '2021-10-23 03:55:39'),
(140, 'Starter', 17, '1', 'ROI', '2021-10-25 04:00:03', '2021-10-25 04:00:03'),
(141, 'Starter', 17, '1', 'ROI', '2021-10-25 04:30:03', '2021-10-25 04:30:03'),
(142, 'Starter', 17, '1', 'ROI', '2021-10-25 05:00:45', '2021-10-25 05:00:45'),
(143, 'Starter', 17, '1', 'ROI', '2021-10-25 05:35:07', '2021-10-25 05:35:07'),
(144, 'Starter', 17, '1', 'ROI', '2021-10-25 06:05:38', '2021-10-25 06:05:38'),
(145, 'Starter', 17, '1', 'ROI', '2021-10-25 06:35:47', '2021-10-25 06:35:47'),
(146, 'Starter', 17, '1', 'ROI', '2021-10-25 07:10:27', '2021-10-25 07:10:27'),
(147, 'Starter', 17, '1', 'ROI', '2021-10-25 07:45:02', '2021-10-25 07:45:02'),
(148, 'Starter', 17, '1', 'ROI', '2021-10-25 08:15:14', '2021-10-25 08:15:14'),
(149, 'Starter', 17, '1', 'ROI', '2021-10-25 08:45:45', '2021-10-25 08:45:45'),
(150, 'Starter', 17, '1', 'ROI', '2021-10-25 09:20:17', '2021-10-25 09:20:17'),
(151, 'Starter', 17, '1', 'ROI', '2021-10-25 09:50:35', '2021-10-25 09:50:35'),
(152, 'Starter', 17, '1', 'ROI', '2021-10-25 10:25:20', '2021-10-25 10:25:20'),
(153, 'Starter', 17, '1', 'ROI', '2021-10-25 11:00:09', '2021-10-25 11:00:09'),
(154, 'Starter', 17, '1', 'ROI', '2021-10-25 11:30:41', '2021-10-25 11:30:41'),
(155, 'Starter', 17, '1', 'ROI', '2021-10-25 12:05:07', '2021-10-25 12:05:07'),
(156, 'Starter', 17, '1', 'ROI', '2021-10-25 12:35:38', '2021-10-25 12:35:38'),
(157, 'Starter', 17, '1', 'ROI', '2021-10-25 13:10:13', '2021-10-25 13:10:13'),
(158, 'SignUp Bonus', 49, '5', 'Bonus', '2021-10-25 13:35:39', '2021-10-25 13:35:39'),
(159, 'Credit', 49, '1000', 'Deposit', '2021-10-25 13:39:23', '2021-10-25 13:39:23'),
(160, 'Credit reversal', 49, '100', 'balance', '2021-10-25 13:41:06', '2021-10-25 13:41:06'),
(161, 'Starter', 49, '20', 'Plan purchase', '2021-10-25 13:44:42', '2021-10-25 13:44:42'),
(162, 'Starter', 17, '1', 'ROI', '2021-10-25 13:45:41', '2021-10-25 13:45:41'),
(163, 'Starter', 49, '1', 'ROI', '2021-10-25 14:15:33', '2021-10-25 14:15:33'),
(164, 'Starter', 17, '1', 'ROI', '2021-10-25 14:20:16', '2021-10-25 14:20:16'),
(165, 'Starter', 49, '1', 'ROI', '2021-10-25 14:45:50', '2021-10-25 14:45:50'),
(166, 'Starter', 17, '1', 'ROI', '2021-10-25 14:55:15', '2021-10-25 14:55:15'),
(167, 'Starter', 49, '1', 'ROI', '2021-10-25 15:20:38', '2021-10-25 15:20:38'),
(168, 'Starter', 17, '1', 'ROI', '2021-10-25 15:30:45', '2021-10-25 15:30:45'),
(169, 'Starter', 49, '1', 'ROI', '2021-10-25 15:50:46', '2021-10-25 15:50:46'),
(170, 'Starter', 17, '1', 'ROI', '2021-10-25 16:05:16', '2021-10-25 16:05:16'),
(171, 'Starter', 49, '1', 'ROI', '2021-10-25 16:25:19', '2021-10-25 16:25:19'),
(172, 'Starter', 17, '1', 'ROI', '2021-10-25 16:35:36', '2021-10-25 16:35:36'),
(173, 'Starter', 49, '1', 'ROI', '2021-10-25 16:55:40', '2021-10-25 16:55:40'),
(174, 'Starter', 17, '1', 'ROI', '2021-10-25 17:05:44', '2021-10-25 17:05:44'),
(175, 'Starter', 49, '1', 'ROI', '2021-10-25 17:30:24', '2021-10-25 17:30:24'),
(176, 'Starter', 17, '1', 'ROI', '2021-10-25 17:35:44', '2021-10-25 17:35:44'),
(177, 'Starter', 49, '20', 'Investment capital', '2021-10-25 17:45:45', '2021-10-25 17:45:45'),
(178, 'Starter', 17, '1', 'ROI', '2021-10-25 18:10:29', '2021-10-25 18:10:29'),
(179, 'Starter', 17, '1', 'ROI', '2021-10-25 18:40:50', '2021-10-25 18:40:50'),
(180, 'Starter', 17, '1', 'ROI', '2021-10-25 19:15:43', '2021-10-25 19:15:43'),
(181, 'Starter', 17, '1', 'ROI', '2021-10-25 19:50:11', '2021-10-25 19:50:11'),
(182, 'Starter', 17, '1', 'ROI', '2021-10-25 20:25:04', '2021-10-25 20:25:04'),
(183, 'Starter', 17, '1', 'ROI', '2021-10-25 20:55:34', '2021-10-25 20:55:34'),
(184, 'Starter', 17, '1', 'ROI', '2021-10-25 21:25:43', '2021-10-25 21:25:43'),
(185, 'Starter', 17, '1', 'ROI', '2021-10-25 22:00:17', '2021-10-25 22:00:17'),
(186, 'Starter', 17, '1', 'ROI', '2021-10-25 22:30:32', '2021-10-25 22:30:32'),
(187, 'Starter', 17, '1', 'ROI', '2021-10-25 23:05:24', '2021-10-25 23:05:24'),
(188, 'Starter', 17, '1', 'ROI', '2021-10-25 23:35:35', '2021-10-25 23:35:35'),
(189, 'Starter', 17, '1', 'ROI', '2021-10-26 00:10:16', '2021-10-26 00:10:16'),
(190, 'Starter', 17, '1', 'ROI', '2021-10-26 00:45:37', '2021-10-26 00:45:37'),
(191, 'Starter', 17, '1', 'ROI', '2021-10-26 01:20:34', '2021-10-26 01:20:34'),
(192, 'Starter', 17, '1', 'ROI', '2021-10-26 01:55:25', '2021-10-26 01:55:25'),
(193, 'Starter', 17, '1', 'ROI', '2021-10-26 02:30:46', '2021-10-26 02:30:46'),
(194, 'Starter', 17, '1', 'ROI', '2021-10-26 03:05:50', '2021-10-26 03:05:50'),
(195, 'Starter', 17, '1', 'ROI', '2021-10-26 03:40:12', '2021-10-26 03:40:12'),
(196, 'Starter', 17, '1', 'ROI', '2021-10-26 04:15:24', '2021-10-26 04:15:24'),
(197, 'Starter', 17, '1', 'ROI', '2021-10-26 04:45:48', '2021-10-26 04:45:48'),
(198, 'Starter', 17, '1', 'ROI', '2021-10-26 05:15:50', '2021-10-26 05:15:50'),
(199, 'Starter', 17, '1', 'ROI', '2021-10-26 05:50:48', '2021-10-26 05:50:48'),
(200, 'Starter', 17, '1', 'ROI', '2021-10-26 06:25:23', '2021-10-26 06:25:23'),
(201, 'Starter', 17, '1', 'ROI', '2021-10-26 07:00:22', '2021-10-26 07:00:22'),
(202, 'Starter', 17, '1', 'ROI', '2021-10-26 07:30:28', '2021-10-26 07:30:28'),
(203, 'Starter', 17, '1', 'ROI', '2021-10-26 08:05:38', '2021-10-26 08:05:38'),
(204, 'Starter', 17, '1', 'ROI', '2021-10-26 08:35:49', '2021-10-26 08:35:49'),
(205, 'Starter', 17, '1', 'ROI', '2021-10-26 09:10:47', '2021-10-26 09:10:47'),
(206, 'Starter', 17, '1', 'ROI', '2021-10-26 09:45:41', '2021-10-26 09:45:41'),
(207, 'Starter', 17, '1', 'ROI', '2021-10-26 10:20:39', '2021-10-26 10:20:39'),
(208, 'Starter', 17, '1', 'ROI', '2021-10-26 10:55:17', '2021-10-26 10:55:17'),
(209, 'Starter', 17, '1', 'ROI', '2021-10-26 11:25:38', '2021-10-26 11:25:38'),
(210, 'Starter', 17, '1', 'ROI', '2021-10-26 12:00:43', '2021-10-26 12:00:43'),
(211, 'Starter', 17, '1', 'ROI', '2021-10-26 12:35:09', '2021-10-26 12:35:09'),
(212, 'Starter', 17, '1', 'ROI', '2021-10-26 13:10:17', '2021-10-26 13:10:17'),
(213, 'Starter', 17, '1', 'ROI', '2021-10-26 13:45:40', '2021-10-26 13:45:40'),
(214, 'Starter', 17, '1', 'ROI', '2021-10-26 14:15:44', '2021-10-26 14:15:44'),
(215, 'Starter', 17, '1', 'ROI', '2021-10-26 14:50:13', '2021-10-26 14:50:13'),
(216, 'Starter', 17, '1', 'ROI', '2021-10-26 15:20:36', '2021-10-26 15:20:36'),
(217, 'Starter', 17, '1', 'ROI', '2021-10-26 15:55:39', '2021-10-26 15:55:39'),
(218, 'Starter', 17, '1', 'ROI', '2021-10-26 16:25:41', '2021-10-26 16:25:41'),
(219, 'Starter', 17, '1', 'ROI', '2021-10-26 17:00:44', '2021-10-26 17:00:44'),
(220, 'Subscribed MT4 Trading', 17, '30', 'MT4 Trading', '2021-10-26 17:55:25', '2021-10-26 17:55:25'),
(221, 'Starter', 17, '20', 'Plan purchase', '2021-10-28 17:27:42', '2021-10-28 17:27:42'),
(222, 'Starter', 17, '1', 'ROI', '2021-10-28 18:00:20', '2021-10-28 18:00:20'),
(223, 'Starter', 17, '1', 'ROI', '2021-10-28 18:35:41', '2021-10-28 18:35:41'),
(224, 'Starter', 17, '1', 'ROI', '2021-10-28 19:10:44', '2021-10-28 19:10:44'),
(225, 'Starter', 17, '1', 'ROI', '2021-10-28 19:45:04', '2021-10-28 19:45:04'),
(226, 'Starter', 17, '1', 'ROI', '2021-10-28 20:15:11', '2021-10-28 20:15:11'),
(227, 'Starter', 17, '1', 'ROI', '2021-10-28 20:45:33', '2021-10-28 20:45:33'),
(228, 'Starter', 17, '1', 'ROI', '2021-10-28 21:20:21', '2021-10-28 21:20:21'),
(229, 'Starter', 17, '20', 'Investment capital', '2021-10-28 21:30:25', '2021-10-28 21:30:25'),
(230, 'SignUp Bonus', 50, '5', 'Bonus', '2022-01-25 08:46:09', '2022-01-25 08:46:09'),
(231, 'SignUp Bonus', 51, '5', 'Bonus', '2022-01-25 13:24:08', '2022-01-25 13:24:08'),
(232, 'SignUp Bonus', 52, '5', 'Bonus', '2022-01-25 22:55:52', '2022-01-25 22:55:52'),
(233, 'SignUp Bonus', 54, '5', 'Bonus', '2022-01-29 16:25:27', '2022-01-29 16:25:27'),
(234, 'SignUp Bonus', 55, '5', 'Bonus', '2022-01-31 22:26:28', '2022-01-31 22:26:28'),
(235, 'SignUp Bonus', 56, '5', 'Bonus', '2022-02-01 21:34:20', '2022-02-01 21:34:20'),
(236, 'Credit', 56, '60000', 'Profit', '2022-02-02 05:07:34', '2022-02-02 05:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `upgrades`
--

CREATE TABLE `upgrades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `times` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
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
  `sendotpemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO',
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
(17, 'Remedy', 'remedyhyip@gmail.com.com', 'testmi1', '2021-06-08 07:33:49', '$2y$10$.DCjuZwHIwW6tZ2niTflKO6oXwGJtCZeGeD30NTWFd7Nr5157Cuju', NULL, NULL, '2021-09-23', NULL, 'This User is still on the group stage', '2', 'United State of Americas', 'USA', '04566444', 'dark', 'Firstbank', 'Rolly Baker', '5021137787', '4664', NULL, 'hhsj878hjwjjhjkjksk', '333333333333', 'gttdddddds', '2', '12', 419, 231, 70, 0, '0', NULL, 0, NULL, 'http://127.0.0.1:8000/ref/testmi1', 'G1ttUX3.jpg1634646590', 'G1ttUXchikamso.jpg1634646590', 'Verified', '2021-10-28 13:27:42', NULL, NULL, 'active', 'on', NULL, 'RzKt3PNCYfA0xuw3WygIUjS9hNyGyw5oFV4vrEKDf8xnv9BWxe9kXKCu2xwA', NULL, NULL, NULL, 'No', 'Yes', 'No', 'Yes', '2021-03-12 11:59:19', '2022-01-25 12:48:24'),
(56, 'eva kovac', 'nweleugochukwu@gmail.com', 'eva123', '2022-02-01 21:34:19', '$2y$10$D2a4XVm5uiYFDlvbILXZz.TsULCVPv/hCsOmxiKDgHm3SwherOE9C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', '08109514371', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 61005, 60000, 5, 0, 'received', NULL, 0, NULL, 'https://hyip.tradebestfx.net//ref/eva123', NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'on', NULL, NULL, NULL, NULL, NULL, 'NO', 'Yes', 'Yes', 'Yes', '2022-02-01 21:34:19', '2022-02-03 12:35:05'),
(57, 'eva kovac', 'remedyhyip@gmail.com', 'Evahyip', '2022-02-03 13:08:45', '$2y$10$Km7TjXaAED4G5OPOYVv4ueaMfQxeHVXDNWjWDryRa.I.iiG3k7vDG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Andorra', '08109514371', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 'received', NULL, 0, NULL, 'https://hyip.tradebestfx.net//ref/Evahyip', NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'on', NULL, NULL, NULL, NULL, NULL, 'NO', 'Yes', 'Yes', 'Yes', '2022-02-03 13:08:45', '2022-02-03 13:08:53'),
(58, 'eva kovac', 'evakovac929@gmail.com', 'eva124', '2022-02-15 10:42:16', '$2y$10$pXbDDcJA3SyO8VT8LjTjM.SVhDBG8dtwxQCXXyWmEXkKHoKatDwUq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bahamas', '75435672', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 'received', NULL, 0, NULL, 'https://hyip.tradebestfx.net//ref/eva124', NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'on', NULL, NULL, NULL, NULL, NULL, 'NO', 'Yes', 'Yes', 'Yes', '2022-02-15 10:42:16', '2022-02-15 10:42:56');

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
(10, 2, 17, '20', 'expired', '1 Months', '2021-11-20 13:58:15', '2021-10-20 13:58:15', '2021-10-26 13:00:44', '2021-10-20 17:58:15', '2021-10-26 17:13:04'),
(11, 2, 49, '20', 'expired', '4 Hours', '2021-10-25 13:44:42', '2021-10-25 09:44:42', '2021-10-25 13:30:24', '2021-10-25 13:44:42', '2021-10-25 17:45:45'),
(12, 2, 17, '20', 'expired', '4 Hours', '2021-10-28 17:27:42', '2021-10-28 13:27:42', '2021-10-28 17:20:21', '2021-10-28 17:27:42', '2021-10-28 21:30:25');

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
(1, 'Bitcoin', '100', '1000000000', '0', 'percentage', 'Instant', 'data:image/png;base64,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', NULL, NULL, NULL, NULL, 'bc1qzx69mn283lqswjez2e7htfcxff28lzt7c3yv36', '938893993', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-11 11:53:32', '2022-01-24 18:40:27'),
(2, 'Ethereum', '1000', '21000000', '0', 'percentage', 'Instant', 'data:image/jpeg;base64,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', NULL, NULL, NULL, NULL, '0x97671fd3c705E681C6dE8EB00F9Fa509a25608f5', '938893993', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:03', '2022-01-24 18:33:32'),
(3, 'Litecoin', '100', '100000000', '0', '0', 'Instant', 'data:image/png;base64,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', NULL, NULL, NULL, NULL, 'ltc1q8m6cmtmuqfstl985srk75507vv0m2mj09uxn7p', 'hhhhhhhhhhh', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:33', '2022-02-01 22:14:59'),
(7, 'Stripe', '10', '10000', '0', 'percentage', 'Automatic Payment', 'https://lulo.com', 'Automatic', 'Automatic', '4242424242424242', '344', NULL, NULL, NULL, 'currency', 'withdrawal', 'disabled', 'yes', '2021-10-06 13:51:37', '2022-02-01 22:14:07'),
(9, 'Paystack', '10', '10000', '0', 'percentage', 'Automatic Payment', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhcAAABeCAMAAACnz8b3AAAA1VBMVEX///8BGzMAw/cAGzMAGDEAvvZX0fkAACUAECwAGTIAABsAACHy/P8Awffg9/4wy/hXYGzy9PXR09WNl6Hk5ugAITunr7cAACQABykADit61/kAFC4AABdLWWl6f4cAABALLEWxucBx2/oAABHs7vDL8v0AACkAAAjl6OqutbzMz9PZ3N81RFWEjJVkcX5yfYm+xMlAUGEdLkKdo6oAAABhaHMsPE+HkJrq+f5NXW0SJTseNUpnc4AmM0V7hZGv6fyT4vun5vw3QVA+SViXm6GA2/rA7v2cnc5AAAAVtUlEQVR4nO1dCXvautKG2K28NLesXo5MAifchDUYKNAEwkmb9Pz/n/R5xZqRvNCPhPTC6/M8PQFrsZh5NTMayaXSGacAd0rLMZqV3rG7c8bHQIMoZWl3mZtj9+eMj4G5XmYgtxvH7tAZHwJ1IjF8ITfPcnGGjzoBfHGWizMCnPniY8CYtncYGcfuzZkvPggM06Y7KKR/7P78Hl98/8+h8NaP96dgTVn1tKfH7s9v8cWvrwfD53/f/An/CFCZVU+ldez+/AZffP96eXEwXH56fvtn/AOgyqx6fgi52Jcvng8oFj6+v8NTfniofz5ffD2sWFz+eIen/PD4H+CLw4rFxeXf7/CUHx7/A3xxlos3wJkvznIhwpkvznIhwpkvznIhwpkvznIhwpkvDi4XvaGHdyn0u/CaysuD+12+6Hp1d3+zW9Wson8OX1QTxB/1Btv1jePjzhqtBoXWdqo146H9LSwk3/d3wiGovloVfJjRLe6e3mB+39Su/bau726XD3NBF8OCkgr5opvbdMOdrK07/+lvyOh1IOp0apeH7naq+GVv7m7k+1fRwOXyBdfOceSiMakkmIc9W410QiORVikho3Etr5pqvaLqCo3VwNbXm7DMlql+EghL/77CQrz23bti71mAm9zxyNJtb4IIG1Oprd8uNx3hY6kqq57qDDS9cLl2+5ulblE1fnbTisZksGDKdbhiwRAYi7VOlJigZNskywm3gJvDF/UN072rYLwOHe8stHLWHZnKDvbNq/fJXDfBImS5TMn1dJBVS2NLTNv7BRJI1HKmHslPHDup35x597qOpTCw7+aiCpsE3KTtBKPaXzqEqmUETzacFTOBtaPHQjeqbK2KZULBqLptzaYSKGHrstf2QLHY3giW62tbzZNVWLZMLY3W4VSXyRfDtc4Ml02a/hP9+HRQsfhaaH2kpquM+NJlqdsi7CfxZUvbVPoszZemoIxkLQfdEWU/cjzpWhEJ3Ka8CCqu67Ay8zUeuYWl8E0FV5k8ruJ5fWCm3AQvMmYbHVQsKrhLJqvSq85+Yj/g/lbrTbMsbEI2YTZQJl9ULDA2qh5o4/Pl4VbOLr/+t4BUeHKhAfFdu00bq2L0lUlTKGM41ai4DL2rj8BXuhHIBVRhyrN56SesUSKRXMydlO4Fd8nk7jUUsg7hGEUEa8K0+Wqm1a3djy32b7mNuuuappxS1mNOZ8oQWRZf1DU4NPIsLPjP3wfLv3gumJlT04DKPc5EGhNeVBVmOw1mtpRWptx8BFrky0XHQrRC+Ilk8AjcCCmWnTFMp0BXwADTXiQXRfjCukraHIs4L6rYnoHvsFxsVZrZjP2UqFQGX+CnlvRJ6ViAfOGJaIZ2yU6dr2BO0IScBV8uShJqQ+GTqIxbWCd9Cj4eO/ksYFu+CBXli51c9F7MjPugV4P4olfRs0bNB9XjeTCDL6pNBT3K6P/76/4+IF/kXKrFOQ8dS84uA/4I5GJhw1vKGmdgbBGn2BX/076STQLhP8q6tD9fdCukyP2SiC9aBYrKu5FL54uxCcvQWaat/7bAfJEN9Rq5aO5jimkhRiAXAx3pso4nkmobKqCk+SPUyFXLENfDvfmiO81iCw6sXHSnpAhfymb0kKl8ATeiedAFdte7YS++8GyMGbCfq7M05wApcXQFctFYotnYvkedGqJOyU3faJhYhZoqX1f35gusqjkXKxeLgkQj0zCek8YXDRURr7ZlRuTLQVFILvZRFE/DWizpP5D8EkAFAjYdW8h6+Imi2WNUbfDzeVZZkSYk4m8F3o8vjNtCd+/AyIXvUBeDMuuGcgFqiuWiOoXOkGQxyvL8+bB4LiIXe2lKpPIRXDtfKwWFsUeiyogxWwpSa7/YK4p7yLbuXN84mmnLbFP2qFcqzhehwY8JLO9K5GIo5ZhXzEBY41Au2E93cjFGY0Jvd7ry5fNBA1sePn3OpYx9+aJMH3cd7trFJvwEkVA1UTmyAn0azuD3ctAk3Ani9WPTGforEvVNkzEO7FnAZ73bQl0LXeTJXsZFmeWLtZJ/d1KqW0rji46D7m0mqvLjwFJxUST3V8wXZWrpHojNhwska2cl4qCk/61sE13TTYvG+irgi9I98kgodMg6SH2VF/9TDURC1Ntk4IavjimHTe1s+PGdHgDFJKjO4q7iC1HjiY/ZqAoJBkAR0sFOLvo6F7opU28AHM0riuOfdF0tpfBFbwS7IOlMRODA6yMBvubLhUiyb1+2RqfTry9mvAERGoEeuj95X4TMNvWO25lfjYjIUYnkAnskkgMMjBVqNPBXBrCj5JUtUZ0/BjaLbO1cu2HHhwsboqMOizCaOOYdCkWpjPudjjGuNG2B/RDLRfeFowvZehkbg8bAGLfQCKhhl4V80YJPLJEK83BvIBYXF/lyweuDaffj32m4crhophb5qq6FSyo34zji25s3STmNL3p4QgeeanUKnZwyGQZyAUqYyLcdbu6ITW65iGx+/kV1hjlB1kZuZF1Xa1ONZ5NYLjoEcwK5NeIlmm5/ZoJKH6qhXPB8YaAfQRmxXt+R5AJLvErGrMvRq2B1igd3gZYTJKsFMnI2VhkjNlqxR2Kz+tFAjrwSuECIL+QmTn2pjRcTPh0gP1+rj0eAUhC968x4UmiHX43QNypchytNEj+HNqOZQcAXLkX2lAXG8UhygbVBh88WhAKhtsx68ZCDz8kUxS3nTgpfcB4JXTIKYkCzJVozc2FHPaOj0KEF+XyBw6+0jLyjAWd/xHKBnR5zhepe6dEdRI0rxXzhiffIBrWoDuTCI8kFFHlg8YSothAxKAFbu7CkpLS4cPYG0cKOL0o4FmEzv0UFNqeWA5uhd4M66pmQ05Wbl8iXyxfdJTIDFC7MOMTOTSQXfRM+Hj90pXnADirZ7NgN8oUktdtoWURC3tnH4At7xGdD1Cxg1UcLoCj8qBI+rbPhmdlCvuA8EmYsqj+hekZrZlVBWggl2uPLZmxkJJTm8oVbhkpPBGuYcxMxZjv4+AqyHm0KEkkmGpVtfZV8A/nCc+Aool2ljao5klxAbZFEazUrqPf2wu95C4o52QoKIk5J+AJ7JKEPF5Ypw6/iHIkHUXaEN6yeY+zoU6MmThvK5QsDmk9hkAGhip41lIsGzC0pW8L1DGPZbLFjWs8JEdM1lvIjyQUU1oroJpQYQEfdwEsFk6IsVNomDIDs5ILzSLTdfDBH5owTDfecjxUwRKArlZVIMnL54pVALhwLKinV4fpJKBfDJtB0OhKnRzeGoF/1nPUUPkfwSHIBpJUIMiw8vADNCIyl4RP4TKkI9RWtdCRBdOyRmHHDVWReBEIYjO8yc+lWVYj2wMtmHl9UoVelqkKl72qIVIKhuwUdsIol0WTzhUp52j2SXEC1FS/5b4AtodqectdmQBPFelZyoVWQyIUhzLDw0IVayKTOjPnwKrqsR06s8/gCBUvkmXjnxxp0KpKL7IhKCrL5omzxov0R4p3XaQ8D7rrxnW6gZ0x0HFavAmOBWXRDHon8FA0INkmUXcZHdaTkrV3KWguReS5fTIHpEBm5HCCrhHIxh8sqWrF0iRz7gq65Es+HXja7uPi05/pI2RTf1Yeq6gTBGPYTQSZXgCEMJjJywa2ZRsOK3ByZSfgYSKgMuvz/LORP7ckX9EU8AGNghYRysYKar+XusQmQY19IMMDv48tfBz5I6eLy733XU4n4rj4MQQZyAfRMypALBoxcuChxIZ6e0aILSMmvPYlWKwAkAsMo+/JFilxsBfngaBmnsFxkPwC7IBjhy4+vl58Oh4uvP/Izc9AkmTKPINW44fgiax4R80WjDe0IGrrtw1mKBxNguNQzUiXCf2BYaF++SJlHKiAkGc8jsKfiXWgYef5IahfeF4gvUuzOe2S0e3anKwPLIc3uhKzA/srYI3ECA8OwQLWqhezA+jI3y/OaNd1y+QKGJjLsTvautmDoUlw5jDy+EEfW3h2IL1IeDsYqgtgPimmk+KlbaC2wcoE9krBpFEO0H3C1jZWl+ZtAU/lCYjeF5McvNoAJuNSxEF0HNJT4qcyHdrFXiWC+sC28LC2IxL8/kNCL41quinaFez9WDxoCqsDB8mBB5QazAvJIgt+sC7OyJCIyWzqrylo3UzOlQMQwN975CryKlLgWMiWSuBb74Uwcjh/CXe2IL6TN1RV+Ekp+94SFwwHxhTiucwW3Tdr3YRwcqrs4Dp6yPuLjAa6RBJ4qygSXy+J5rToc1Keao1u2zNgv8f8Q5hly+aIP1TUtDi7giwbce5vCtavZLdigKlhP3aLlF8h4Ad4xEzwEXk9Vlvx8MIDeSLRuBk30smjdDBn7iC+Q7SHdGpxiprkHIYbGdrE2bS6XmxXRXL7Aaeai2R0nfUfrZmOUYKLxI9CteIYy1RbJqq8g/6KLhwnvqPn316Eywf96LigaXP6Fya+zT6G2RHNwBydE8OvsE49n0vkCeyS+p1qEhEDfhrV7U5chX7BZPpAvKL/lES/fitbZ8ZJnvM6OVmws3sK4D9mBJBlLonwt10F5X7LCstavTwcLYFxeXv7OfnZf7y20/N/FCVt0GX5hoSRNcyHIy0F6AMwF5JGozfrqEdapIw2srvRvD9zUMn9ClgoT81CRgcPPEhOk9RRPpYMnrM5JXg56vCmsvleJMjQke8cAwvxO7Jt5op2M5T+HEooQBc+/4PK1VJh11ON2bsbbwxYwzcibYBdgWDYWq8Q8X3AeiUpQjoW8huPcmBJVslUuVBLpYFyMlQsZhkN2bDgcL6IDPQY36PnoDEQiXH5PXZLHh74wF2ya0HCaeGOyMgF9BXxR6uKa2LzmA6+PfPqHlwIeonxwvdmPf4/G6pYLMepRYM/FCRGSrc1j27trNAWOOpQLLmsL14cylwwr6IvstFCS1hA+BDuPzFA2ljX3cwQGFYfYemhKcUaQ18DD7lit4YMgXsLm/ULYN5N4Wb0xvgXrOfoyY7/ZAG9OVRNj5bBiUfB8LeH+EZlMx4Y77BibJb9va3e+TfWFW65QyXIz7wyH/XHLjIz1DL7AHgl3UaC4YxLbETZ6IZVhgqZYqwRtzPAEYzrZTFXbJyY71Mk5l9detuVKvT8YuvPFo2hTLLtPAH2lWo+Lq3rfqG/WaOgiKU/Zb7ZBB/xIyUxyJLkQqqpi6bqj8wdGldkFToPfm+mfNqYHu2qEOz6RXAyyN3fSJ2Ya6b4kKiVRbekmE3Af8o7EnprFZ3lR246O51LNQCdxhmfwleLvDtJN8Y663b6ijnAELOJvyeKOBQlT2FP2p3ZfUCckPZbuI8lFtspyl7Lcla2uc3ezZ/MF9kjQxc4H1Xu4GkFJa+z649ztTBRITfIjs4K1ylqOiBqYOxn3iK5kH+Iyh/HYi0ZywX6W7Gd37/D9pHZUuRApRAYI4w4MMo/XEQDJBW+HA2jMNOKquCmFaDd3d3c3OvKLyuDYhBo+bAM+TGjCVjIO7RKB2bdc/PyP3b5lUFNy/sUWj4Uy6h1TLvbSFMkEYZ9JbgpVJl9wHgm4ZJkxL107uxmmKQcESdZZlETDZTJPvvcaBeacg7lWtJC9juxO8IyJXPSWeJtKZCcdSS720hQbHao4yk2IAMByUZplEA5YiBpk3Ym6CFrIpiQScksfuwPZYM9F2RQ6Lsfffx86GOnna3E+iXTTOaJc7KMpVEXJJ7XH7BSqHL7I8kjQOX0FDsAKdRkd+zg0s07CoKHzWLrKSjbnLlYuqotCR4XK8Qpgxnl82CeJcp6PJBf76EmTizV6grFHBZxcZHgkaH2yuixETZKD8+wF29UTxHIRzIiFAc9dqxQ4NIg9dw18zspFb4SNFfJwPLkorieKJkhJcqVMkxz+yclFr52af4UOxSgN1+kHbCZ8oXHLXt2XDNOExAsm1YWexSvwOygX1a2TfuhpeCkJ92Wd99vHodfg7IBDnw/+W/HO9NlYIiNhgkFtlF5Glh7B35xcZEz//ALeJvd8Hsod7eehN0tzN6JDl0KsrPTa/XNd2cdqwxb6/JZ30Iy1ZM91BTXBc6C5Db30qVH6deC030In/iK+sMZaiv1OnVbKNtDGg5Oi9LY+hzkKvFz0Uz0Sh2/OtfQszZQJv3TiY7AkwgKyDraIGZbwZHTvPmf8AHeZtPEoyjpNM1Ak5abCNLPK4At/sxYqrQ1KXz4fVDAK0QXmi5tSXxWeEENGGa+8778Iky71VgOF8Rw+zWaWdrY4PjUhwHxkCkKwoVbazU3K0fbdhej0HquJVo57G0Xw7JJCjdIWaDl/brzXsZQTAKk+BYawC07S2tk38bfYJ/F3pXz/++JgyeBfi4mFIB980HIITESSbZ3UM88T6K0sHZ7FVVZM3V+w3F5bCfQ2X3R+Z4WvVkB6ZnL7KMKWOk0neccH00XTeUhP1K/2qWbTxNgpU+/+BX//YOq/wwJUbDkj1082IcljEJGd1Xh1dItCe0qlltM24C/fberMiDg4bXDiWOBNE+Jtv28P0X6z2vjFMu0g31uiCtFniwyuiGEsHr1xCWhDkhXzthVtI55fJaiL9NmN3kADLRFVSk1+HY4rj+H7X0J9linRm5VswfV+2c2S6LYty4pt6dZ6IeyL/+xTW4/tGGrrs4kb9ZJBSnKhMRkRokSH38jUa+Zlyz9Ftc7UxKevDq4W7Jtpim1KOTzE+0d6tfl9+9aPMrdbW7egyA7dyUi582G16oM9UleDdzY1KJjcqSCfMCngvy+qeXMXvMfqujkauymnHMD+DYz7yrrdqkyMwTD9/l7NeFhr/mM4y/uizx6hMRg/LJuOV/Zbe7Tp1PLeviZEgRdmvT2K7U99B9Thbk/ubGgReu/4jr0TQ7H9Zu8AlERacBfwGW+Ej8IXaGlWFp1JdLL47/NfRfGr0Fvt8vFR+MKwQEhRkFp9unj+dFkcBc7+LoIPwhc4ydIq4AGdCv7dL251+XyIRo/FF1Xjqs7YjC7c6wlSrk4de6+PFHy1XSaOxBfVe8cyv01iP64mw3ipIKB4uthXLC6K7RzKxpH4wt9vKEnWz3lgXs650/nO00iCI8nFMfgiOr5ToqazflhaOlq9kPHRpieN0+EL/zCS3QKEQrnEB8Lt5z5lnA5fTLLTKdHL9U4dJ8MXA3E6xO4yP8JBQh8Hp8IXvWV2SihzVvgZpdPhCzd704l6jmlBnApfcC8WBhC8AOXEcSp8MTAztoBJuvDkt1PGycQ7++mZ15J+tjkx9swHv/x8iEZrcC/33SHqzIVhWeLNGlTDZzGdUfr+dR/BuDwIXZSGYJ+40j5Enfno3quCdwNI1mOhd9mdGr5/3uN48M+HsC481L9pu/cPO7TYGdcHwGDp+IeOJFwhK+Tm/pyVl4L/FMXhmuy6u/cPi/Oc3wi9+mJNdGL56fCWqTVb9XOU84wAw5pR394vFpvx3M3I0D5t/B9ASlqWmEpGkQAAAABJRU5ErkJggg==', 'Automatic', 'Automatic', '99388383', NULL, NULL, NULL, NULL, 'currency', 'withdrawal', 'disabled', 'yes', '2021-10-07 08:53:27', '2022-02-01 22:12:56'),
(10, 'Paypal', '10', '10000', '0', 'percentage', 'Instant Payment', 'https://lulo.com', 'Automatic', 'Automatic', '99388383', NULL, NULL, NULL, NULL, 'currency', 'withdrawal', 'disabled', 'yes', '2021-10-07 08:56:14', '2022-02-01 22:14:33'),
(12, 'Bank Transfer', '100', '100000000', '0', 'percentage', 'Instant Payment', NULL, 'Mining Bank', 'Miller lauren', '99388383', '3222', NULL, NULL, NULL, 'currency', 'deposit', 'enabled', 'yes', '2021-10-11 11:35:35', '2022-01-24 18:41:20'),
(13, 'Doge', '10', '10000', '2', 'percentage', 'Instant Payment', 'https://lulo.com', NULL, NULL, NULL, NULL, 'jjjjjjjjjjjjjjjjjjjjjjjyyuy', 'QRCODE’,’PDF417′,’DATAMATRIX', 'Erc', 'crypto', 'withdrawal', 'enabled', NULL, '2021-10-14 10:54:10', '2021-10-26 17:43:22'),
(14, 'Skrill', '100', '10000', '0', 'percentage', 'Automatic Payment', NULL, 'My bank name', 'Miller lauren', '99388383', '555', 'skkjsjkjkslsklssk', NULL, 'Erc', 'crypto', 'withdrawal', 'disabled', NULL, '2021-10-19 14:54:08', '2022-02-01 22:13:21'),
(15, 'Tron', '100', '2000000000', '0', 'percentage', NULL, 'data:image/png;base64,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', NULL, NULL, NULL, NULL, 'TBc9ApigG5ReHXoUTP73Nk6iHykoSxH6f3', NULL, 'ERC', 'crypto', 'both', 'enabled', NULL, '2022-01-24 18:37:06', '2022-01-24 18:37:06'),
(16, 'BTC CASH', '100', '10000000000000', '0', 'percentage', 'Instant', 'data:image/jpeg;base64,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', NULL, NULL, NULL, 'qpdazqqmzd79nyg4e3kvrw7yv8ux3n0sm5njqw5ekx', NULL, 'Erc', 'crypto', 'both', 'enabled', NULL, '2022-01-24 18:40:08', '2022-01-31 22:48:18'),
(17, 'BNB', '100', '100000000000', '0', 'percentage', 'Instant', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZOh-QbOxpmnQvgHohbfHI0plsgyIVlatUUQ&usqp=CAU', NULL, NULL, NULL, NULL, 'bnb1aax9p5jk8arnh45cl5yg7h0mn5fe3l59cc5qdj', NULL, 'ERC', 'crypto', 'withdrawal', 'enabled', NULL, '2022-01-24 18:43:46', '2022-01-31 22:36:01');

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
(19, NULL, 17, '100', NULL, '100', 'Processed', 'Bitcoin', NULL, '2021-10-18 09:28:09', '2021-10-18 09:28:54'),
(22, NULL, 17, '100', NULL, '100', 'Processed', 'Bank Transfer', NULL, '2021-10-19 15:11:53', '2021-10-19 15:12:56');

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- Indexes for table `upgrades`
--
ALTER TABLE `upgrades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
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
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mt4_details`
--
ALTER TABLE `mt4_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `upgrades`
--
ALTER TABLE `upgrades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wdmethods`
--
ALTER TABLE `wdmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
