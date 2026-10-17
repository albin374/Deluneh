-- Database: `delunh_db`
-- Export generated at: 2026-10-12 04:06:37
SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Table structure for table `banners`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `banners`

INSERT INTO `banners` (`id`, `image`, `link`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
('2', '01M0M6JBM8SYJFNNPQFD1Y7TAN.jpg', NULL, '1', '1', '2026-08-22 07:31:30', '2026-08-22 12:33:54'),
('3', 'banners/01M0M6VRS0K53W93MX3A87SRT5.webp', NULL, '1', '2', '2026-08-22 07:44:45', '2026-08-22 07:45:26'),
('4', 'banners/01M0M6XR5EW6B4DE66JNKSN4EE.jpg', NULL, '1', '3', '2026-08-22 07:45:50', '2026-08-22 07:45:50'),
('5', 'banners/01M0MQCCAG6H54745XWCC8HGF5.webp', NULL, '1', '4', '2026-08-22 12:33:26', '2026-08-22 12:33:26');

-- --------------------------------------------------------
-- Table structure for table `best_sellers`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `best_sellers`;
CREATE TABLE `best_sellers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `best_sellers_product_id_foreign` (`product_id`),
  CONSTRAINT `best_sellers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `best_sellers`

INSERT INTO `best_sellers` (`id`, `product_id`, `sort_order`, `created_at`, `updated_at`) VALUES
('1', '7', '1', '2026-09-17 16:27:22', '2026-09-17 16:27:22');

-- --------------------------------------------------------
-- Table structure for table `blogs`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `points` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`points`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `blogs`

INSERT INTO `blogs` (`id`, `heading`, `date`, `description`, `image`, `points`, `created_at`, `updated_at`) VALUES
('1', 'Walking Towards Relief: Essential Footwear Features for Reducing Foot Pain.', '2026-09-09', 'Foot pain is a common ailment that affects people of all ages and lifestyles. It can be an unwelcome companion that affects our daily lives, hindering mobility and diminishing overall well-being. The good news is that finding the right footwear can make a world of difference in reducing foot pain and providing the comfort your feet crave. Whether caused by an underlying foot condition, improper footwear, or extended periods of standing, finding the right shoes for reducing foot pain is crucial for your overall well-being. In this blog, we explore the best features of footwear designed to soothe and support your feet, allowing you to bid farewell to foot pain.', 'blog-images/01M22MPBASM3KVYHGC2WKWXRQJ.jpg', '[{\"heading\":\"Excellent Arch Support\",\"description\":\"One of the key features to look for in footwear for reducing foot pain is proper arch support. Adequate arch support helps maintain the natural alignment of your foot, reducing strain on muscles and tendons. Look for shoes that offer adequate arch support, as it helps maintain the natural shape of your arches, reducing strain on foot muscles and ligaments. This feature isparticularly beneficial for individuals with flat feet or high arches. Whichever be the case, supportive shoes with well-cushioned arches can offer the comfort your feet need.\",\"image\":\"blog-points\\/01M22K926RAGD40CJS6YBES1TH.jpg\"}]', '2026-09-09 08:06:47', '2026-09-09 08:31:31'),
('2', 'Walking on Clouds: The Importance of Cushioning in Footwear', NULL, 'The right footwear is not just a matter of fashion; it is a crucial element that can significantly impact your foot health, overall comfort, and even your overall health. Among the essential features, proper cushioning takes centrestage. Often overlooked, cushioned footwear plays a vital role in foot health, overall well-being, and comfort. That\'s the magic of proper cushioning in footwear. In this blog, we will explore the significance of softness and proper cushioning in footwear, how it affects foot health, overall comfort, and why investing in soft, supportive shoes is a step towards reducing foot pain and towards a happier you.', 'blog-images/01M22SC6YJ7P4DC312BW0XC90B.webp', '[{\"heading\":\" Protecting Your Feet from Impact:\",\"description\":\"Every step you take sends shock waves through your feet and legs, impacting your joints and muscles. Adequate cushioning in footwear acts as a shock absorber, reducing the impact of each step and protecting your joints, thereby reducing foot and joint pain. This is especially beneficial durin high-impact activities like running or jumping, as it helps minimize the stress on your knees, ankles, lower back, and hips, ultimately alleviating foot pain and improving overall musculoskeletal health.\",\"image\":\"blog-points\\/01M22SC6Z9KHCQDATEZNJ1JA1P.webp\"}]', '2026-09-09 09:53:22', '2026-09-09 09:53:22');

-- --------------------------------------------------------
-- Table structure for table `cache`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `cache`

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', '1789723798'),
('laravel_cache_livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1789723798;', '1789723798');

-- --------------------------------------------------------
-- Table structure for table `cache_locks`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `cart_items`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_items_cart_id_foreign` (`cart_id`),
  KEY `cart_items_product_id_foreign` (`product_id`),
  CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `carts`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `categories`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `categories`

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
('19', 'Men', 'men', NULL, '1', '1', '2026-08-20 04:53:39', '2026-08-20 04:53:39'),
('20', 'woman ', 'woman ', NULL, '1', '2', '2026-08-20 04:54:22', '2026-08-20 04:54:22'),
('21', 'kids', 'kids', NULL, '1', '3', '2026-08-20 04:54:44', '2026-08-20 04:54:44'),
('22', 'Clothing', 'clothing', '19', '1', '1', '2026-08-20 04:55:13', '2026-08-20 04:55:13'),
('25', 'Clothing', 'clothing woman', '20', '1', '1', '2026-08-20 04:58:01', '2026-08-20 04:58:01'),
('26', 'Footwear', 'Footwear woman', '20', '1', '2', '2026-08-21 03:51:29', '2026-08-21 03:51:29'),
('27', 'Footwear', 'Footwear Men', '19', '1', '2', '2026-08-21 03:52:21', '2026-08-21 03:52:21'),
('28', 'Bags', 'men Bags', '19', '1', '3', '2026-08-21 04:07:38', '2026-08-21 04:07:38'),
('29', 'Bags', 'bags woman', '20', '1', '3', '2026-08-21 04:08:18', '2026-08-21 04:08:18'),
('30', 'Clothing', 'kids clothing', '21', '1', '1', '2026-08-21 04:08:51', '2026-08-21 04:08:51'),
('31', 'Footwear', 'kids Footwear', '21', '1', '2', '2026-08-21 04:09:25', '2026-08-21 04:09:25'),
('33', 'Bags', 'kids bags', '21', '1', '3', '2026-08-21 04:10:26', '2026-08-21 04:10:26'),
('34', 'T-shirts', 'T-shirts Men', '22', '1', '1', '2026-08-21 06:45:00', '2026-08-21 06:45:22'),
('35', 'Casual Shirts ', 'Casual Shirts  Men', '22', '1', '2', '2026-08-21 06:46:08', '2026-08-21 06:46:08'),
('36', 'Formal shirts ', 'Formal shirts ', '22', '1', '3', '2026-08-21 07:15:22', '2026-08-21 07:15:22'),
('37', 'jackets ', 'jackets ', '22', '1', '4', '2026-08-23 04:59:58', '2026-08-23 04:59:58'),
('39', 'Casual Shoes', 'Casual Shoes', '22', '1', '2', '2026-08-23 05:41:10', '2026-08-23 05:41:10'),
('41', 'Classic Walk Shoes', 'Classic Walk Shoes', '27', '1', '3', '2026-08-23 05:47:16', '2026-08-23 05:47:16'),
('42', 'Tops', 'Tops', '25', '1', '1', '2026-08-23 17:26:54', '2026-08-23 17:26:54'),
('43', 'Party Wear', 'Party Wear', '25', '1', '2', '2026-08-23 17:27:44', '2026-08-23 17:27:44'),
('44', 'Office Wear', 'Office Wear', '25', '1', '3', '2026-08-23 17:28:19', '2026-08-23 17:28:19'),
('45', 'Skirts', 'Skirts', '25', '1', '4', '2026-08-23 17:28:59', '2026-08-23 17:28:59'),
('46', 'Casual Wear', 'Casual Wear', '25', '1', '4', '2026-08-23 17:29:35', '2026-08-23 17:29:35'),
('47', 'Mom Jeans', 'Mom Jeans', '25', '1', '5', '2026-08-23 17:30:12', '2026-08-23 17:30:12'),
('48', 'Nightwear', 'Nightwear', '25', '0', '5', '2026-08-23 17:31:19', '2026-08-23 17:31:19'),
('49', 'Backpacks', 'men-backpacks', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('50', 'Laptop Bags', 'men-laptop-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('51', 'Office Bags', 'men-office-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('52', 'Messenger Bags', 'men-messenger-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('53', 'Sling Bags', 'men-sling-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('54', 'Crossbody Bags', 'men-crossbody-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('55', 'Shoulder Bags', 'men-shoulder-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('56', 'Travel Bags', 'men-travel-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('57', 'Duffel Bags', 'men-duffel-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('58', 'Gym Bags', 'men-gym-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('59', 'Waist Bags', 'men-waist-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('60', 'Chest Bags', 'men-chest-bags', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('61', 'Briefcases', 'men-briefcases', '28', '1', '0', '2026-08-27 12:06:00', '2026-08-27 12:06:00'),
('76', 'Casual Shoes', 'men-casual-shoes', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('77', 'Formal Shoes', 'men-formal-shoes', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('78', 'Sneakers', 'men-sneakers', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('79', 'Sports Shoes', 'men-sports-shoes', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('80', 'Running Shoes', 'men-running-shoes', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('81', 'Walking Shoes', 'men-walking-shoes', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('82', 'Loafers', 'men-loafers', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('83', 'Moccasins', 'men-moccasins', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('84', 'Boots', 'men-boots', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('85', 'Chelsea Boots', 'men-chelsea-boots', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('86', 'Ankle Boots', 'men-ankle-boots', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('87', 'Chukka Boots', 'men-chukka-boots', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('88', 'Sandals', 'men-sandals', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('89', 'Slippers', 'men-slippers', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('90', 'Flip-Flops', 'men-flip-flops', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('91', 'Slides', 'men-slides', '27', '1', '0', '2026-08-27 12:13:27', '2026-08-27 12:13:27'),
('92', 'Heels', 'women-heels', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('93', 'High Heels', 'women-high-heels', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('94', 'Block Heels', 'women-block-heels', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('95', 'Stiletto Heels', 'women-stiletto-heels', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('96', 'Wedges', 'women-wedges', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('97', 'Kitten Heels', 'women-kitten-heels', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('98', 'Pumps', 'women-pumps', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('99', 'Flats', 'women-flats', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('100', 'Ballet Flats', 'women-ballet-flats', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('101', 'Loafers', 'women-loafers', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('102', 'Sneakers', 'women-sneakers', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('103', 'Casual Shoes', 'women-casual-shoes', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('104', 'Sports Shoes', 'women-sports-shoes', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('105', 'Running Shoes', 'women-running-shoes', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('106', 'Walking Shoes', 'women-walking-shoes', '26', '1', '0', '2026-08-27 12:16:51', '2026-08-27 12:16:51'),
('107', 'Handbags', 'women-handbags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('108', 'Shoulder Bags', 'women-shoulder-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('109', 'Tote Bags', 'women-tote-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('110', 'Crossbody Bags', 'women-crossbody-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('111', 'Sling Bags', 'women-sling-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('112', 'Clutch Bags', 'women-clutch-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('113', 'Mini Bags', 'women-mini-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('114', 'Satchel Bags', 'women-satchel-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('115', 'Hobo Bags', 'women-hobo-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('116', 'Bucket Bags', 'women-bucket-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('117', 'Laptop Bags', 'women-laptop-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('118', 'Backpacks', 'women-backpacks', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('119', 'Travel Bags', 'women-travel-bags', '29', '1', '0', '2026-08-27 12:19:06', '2026-08-27 12:19:06'),
('120', 'Men Baggy Fit Jeans', 'Men Baggy Fit Jeans', '22', '1', '6', '2026-08-28 11:50:24', '2026-08-28 11:50:24'),
('121', 'Women Relaxed Shirts', 'Women Relaxed Shirts', '25', '1', '7', '2026-08-28 12:04:22', '2026-08-28 12:04:22'),
('122', 'accessories', 'accessories', NULL, '1', '4', '2026-08-28 12:29:59', '2026-08-28 12:29:59'),
('123', 'men Accessories', 'men Accessories', '122', '1', '1', '2026-08-28 12:46:32', '2026-08-28 12:46:32'),
('124', 'woman Accessories', 'woman Accessories', '122', '1', '2', '2026-08-28 12:47:19', '2026-08-28 12:47:19'),
('125', 'kids Accessories', 'kids Accessories', '122', '1', '3', '2026-08-28 12:47:51', '2026-08-28 12:47:51'),
('126', 'Plus Size', 'plus-size', NULL, '1', '0', '2026-09-09 12:01:00', '2026-09-09 12:01:00'),
('127', 'Women Clothing', 'plus-size-women-clothing', '126', '1', '0', '2026-09-09 12:18:25', '2026-09-09 12:18:25'),
('128', 'T-Shirts', 'plus-size-women-tshirts', '127', '1', '0', '2026-09-09 12:18:25', '2026-09-09 12:18:25'),
('129', 'Pants', 'plus-size-women-pants', '127', '1', '0', '2026-09-09 12:18:25', '2026-09-09 12:18:25'),
('130', 'Women Footwear', 'plus-size-women-footwear', '126', '1', '0', '2026-09-09 12:18:25', '2026-09-09 12:18:25'),
('131', 'Men Clothing', 'plus-size-men-clothing', '126', '1', '0', '2026-09-09 12:18:25', '2026-09-09 12:18:25'),
('132', 'Men Footwear', 'plus-size-men-footwear', '126', '1', '0', '2026-09-09 12:18:25', '2026-09-09 12:18:25'),
('133', 'Mobile Covers', 'mobile-covers', NULL, '1', '0', '2026-09-17 16:40:35', '2026-09-17 16:40:35'),
('134', 'iphone', 'iphone', '133', '1', '1', '2026-09-18 04:03:18', '2026-09-18 04:03:18'),
('135', 'Wallets', 'wallets', NULL, '1', '0', '2026-09-18 04:51:32', '2026-09-18 04:51:32');

-- --------------------------------------------------------
-- Table structure for table `contact_messages`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE `contact_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `enquiry_type` varchar(255) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_messages_user_id_foreign` (`user_id`),
  CONSTRAINT `contact_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `contact_messages`

INSERT INTO `contact_messages` (`id`, `name`, `email`, `enquiry_type`, `order_id`, `message`, `image_path`, `created_at`, `updated_at`, `user_id`) VALUES
('1', 'albin', 'alosiousalbin91@gmail.com', 'delivery_person', '2', NULL, NULL, '2026-09-17 16:07:59', '2026-09-17 16:07:59', '1');

-- --------------------------------------------------------
-- Table structure for table `failed_jobs`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `home_sections`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `home_sections`;
CREATE TABLE `home_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `show_title` tinyint(1) DEFAULT 1,
  `identifier` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`content`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `product_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`product_ids`)),
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `advanced_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`advanced_images`)),
  `videos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`videos`)),
  `layout_style` varchar(255) NOT NULL DEFAULT 'grid_4',
  `enable_carousel` tinyint(1) NOT NULL DEFAULT 0,
  `enable_auto_carousel` tinyint(1) NOT NULL DEFAULT 0,
  `zoom_out_image` tinyint(1) NOT NULL DEFAULT 0,
  `is_banner` tinyint(1) NOT NULL DEFAULT 0,
  `banner_sentences` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`banner_sentences`)),
  `has_explore_all` tinyint(1) DEFAULT 0,
  `explore_all_link` varchar(255) DEFAULT NULL,
  `is_timer` tinyint(1) DEFAULT 0,
  `timer_end_date` datetime DEFAULT NULL,
  `category_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`category_ids`)),
  PRIMARY KEY (`id`),
  UNIQUE KEY `home_sections_identifier_unique` (`identifier`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `home_sections`

INSERT INTO `home_sections` (`id`, `name`, `show_title`, `identifier`, `type`, `content`, `is_active`, `product_ids`, `sort_order`, `created_at`, `updated_at`, `images`, `advanced_images`, `videos`, `layout_style`, `enable_carousel`, `enable_auto_carousel`, `zoom_out_image`, `is_banner`, `banner_sentences`, `has_explore_all`, `explore_all_link`, `is_timer`, `timer_end_date`, `category_ids`) VALUES
('1', 'New Arrivals', '1', 'New Arrivals', NULL, NULL, '1', '[30,33,31,32,34]', '1', '2026-08-22 13:22:45', '2026-08-28 11:53:49', NULL, NULL, NULL, 'grid_4', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('2', 'DL CATEGORIES', '1', 'DL CATEGORIES', NULL, NULL, '1', '[]', '2', '2026-08-24 08:44:14', '2026-08-27 06:32:45', '[\"01M0SF24MMP2FP4X4PB9W9N1JA.webp\",\"01M0SF24MNWYZPJFZ70TTCMCDA.webp\",\"01M0SF24MPPJCMG8A9HXY6BMRQ.webp\",\"01M0SF24MQG66948PRJE1RP39N.webp\",\"01M0SF24MQG66948PRJE1RP39P.webp\",\"01M0SF24MRZ64W4CYERVMJQ8J5.webp\",\"01M0SF24MS9BKP0204HZE33FC2.webp\",\"01M0SG0HBEF9F9DFH1QC3DP0VR.webp\"]', NULL, NULL, 'grid_4', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('3', 'SHOP BY FANDOM', '1', 'SHOP BY FANDOM', NULL, NULL, '1', '[]', '4', '2026-08-24 10:57:36', '2026-08-27 06:32:45', '[\"01M0SPPAK96WJ5PJANFE6CP2HK.webp\",\"01M0SPPAKDCY6KDXAQHP1QWM4H.webp\",\"01M0SPPAKF10KRB5JW93RC9G0C.webp\",\"01M0SPPAKHRGDVT5PCWS7P0VWJ.webp\",\"01M0SPPAKMXQ3ZF147EZE6KBFN.webp\",\"01M0SPPAKNGBY1CWDQS85A86C5.webp\"]', NULL, NULL, 'slider_3_zoomed', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('4', 'HOMEGROWN INDIAN BRAND', '1', 'HOMEGROWN INDIAN BRAND', NULL, NULL, '1', NULL, '3', '2026-08-24 13:12:35', '2026-08-27 06:32:45', NULL, NULL, NULL, 'grid_4', '0', '0', '0', '1', NULL, '0', NULL, '0', NULL, NULL),
('5', 'SHOP BY FANDOM', '1', 'SHOP BY FANDOM2', NULL, NULL, '1', '[]', '6', '2026-08-24 13:46:18', '2026-08-27 06:32:45', '[\"01M0T0B7AN3KDWVZBWYY36WEVG.webp\",\"01M0T0B7AQNAGJ5BKRM5AQPZ7R.webp\",\"01M0T0B7ASKE91NMPE5T9WW2VD.webp\",\"01M0T0B7ATRKTCMTF28BNEXCHP.webp\",\"01M0T0B7AWERT3RTZZSNWZNZ34.webp\",\"01M0T0B7AZCV79S2T3F04M520P.webp\"]', NULL, NULL, 'slider_6', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('6', 'FEATURED PRODUCTS', '1', 'FEATURED PRODUCTS', NULL, NULL, '1', '[]', '5', '2026-08-25 12:45:35', '2026-08-27 06:32:45', '[\"01M0WF8RMCXTEPP7PTA0QJG8AZ.webp\",\"01M0WF8RN6ZGWRJVC305RNX2KA.webp\",\"01M0WF8RN9KFKHRTMVEMARJJB1.webp\",\"01M0WF8RNFCEZ0VYSHW2PJNRN7.webp\"]', NULL, NULL, 'grid_4', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('7', 'NEWLY LAUNCHED', '1', 'NEWLY LAUNCHED', NULL, NULL, '1', '[]', '7', '2026-08-25 13:26:34', '2026-08-27 06:32:45', '[]', NULL, '[{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4\"}]', 'grid_5', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('8', 'SHOP BY FANDOM', '1', 'SHOP BY FANDOM3', NULL, NULL, '1', NULL, '8', '2026-08-25 14:47:09', '2026-08-27 06:32:45', '[\"01M0WPDZ9D0F67W0WS0S04GWFP.webp\",\"01M0WPDZABGMZM5C3VQ6K1KKVQ.webp\",\"01M0WPDZADK021CS8D0WHSX394.webp\",\"01M0WPDZAGDNG8J77PS2RW2DBJ.webp\"]', NULL, NULL, 'grid_4', '1', '0', '1', '0', NULL, '1', NULL, '0', NULL, NULL),
('9', 'CATEGORIES', '1', 'CATEGORIES', NULL, NULL, '1', NULL, '9', '2026-08-26 11:29:12', '2026-08-27 06:32:45', '[\"01M0YX9KWD7QF13GWR602GM8AF.webp\",\"01M0YX9KX7RFD18J3GV9CZFH7M.webp\",\"01M0YX9KX9SSRM7QDF17MM0N07.webp\",\"01M0YX9KXEHPY10MB92K80HT60.webp\",\"01M0YX9KXQ189PKEKD1Y5Q3658.webp\",\"01M0YX9KXS7Z2N2QH7GJ1XXKT5.webp\",\"01M0YX9KXWTTDQ7ZWS8DJKS8SP.webp\",\"01M0YX9KY18JM1E3EPPCSQGXBJ.webp\",\"01M0YX9KYMY8K908SGD7QG4V0Q.avif\",\"01M0YY9DS5ER642KSHQGQQ66R8.webp\"]', '[{\"image\":\"01M0YZETJMH119TB6VCPR4Y7HB.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"FORMAL SHIRT\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETJRQEPBVE54NJ8TV1NX.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"SHORTS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETJTRD6KFBT7W0QQKK2Y.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"OVERSIZED T-SHIRTS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETJW75R12YBKZHY3A7VD.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"SNEAKERS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETJX4HC0D6PQ8GJHM0KB.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"T-SHIRTS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETK29FSG84HSTF8VP379.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"SKIRTS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETK7RX70KXDTGDBX1GGB.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"SNEAKERS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETKB3DCFQHG0B0Z1Z147.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"JACKETS\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETKDSJXR4E3EZWBV1C6N.webp\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"SHOES\",\"title_color\":\"#ffffff\"},{\"image\":\"01M0YZETKKDQ47NKYTMAKGH8G8.avif\",\"subtitle\":\"NEW COLLECTION\",\"subtitle_color\":\"#ffff00\",\"title\":\"SKIRTS\",\"title_color\":\"#ffffff\"}]', NULL, 'grid_10', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('10', 'SHOP YOUR SIZE', '1', 'SHOP YOUR SIZE', NULL, NULL, '1', NULL, '10', '2026-08-26 12:52:16', '2026-08-27 06:32:45', '[\"01M0Z21Q3ZSQ953YXZF6Q3VG7X.webp\"]', NULL, NULL, 'single_image', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('11', 'ICONIC SUPIMA TEES ARE BACK', '1', 'ICONIC SUPIMA TEES ARE BACK', NULL, NULL, '1', NULL, '11', '2026-08-26 13:11:18', '2026-08-27 06:32:45', '[\"01M0Z34JPZR63RG026R9KMCN36.webp\",\"01M0Z34JQ1CKJKWTEG9V6S5WRH.webp\",\"01M0Z34JQ2R4BMZ4T9464KWHK3.webp\",\"01M0Z34JQ7WP6CVSEHW6EKD0Q4.webp\",\"01M0Z34JQA56V6DBDZD3DKT58V.webp\",\"01M0Z34JQBTKYHZYY3YK7X5CS9.webp\"]', NULL, NULL, 'grid_6_no_gap', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('12', 'HOT PICKS:OVERSIZED T-SHIRTS AT RS.499', '1', 'HOT PICKS:OVERSIZED T-SHIRTS AT RS.499', NULL, NULL, '1', '[28,29,24,7,22]', '12', '2026-08-26 13:47:01', '2026-08-27 06:32:45', NULL, NULL, NULL, 'grid_5', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('13', 'MEMBERSHIP PERKS', '1', 'MEMBERSHIP PERKS', NULL, NULL, '1', NULL, '13', '2026-08-26 14:22:23', '2026-08-27 06:32:45', '[\"01M0Z76R0RDJDQBF9N3YEVM8Y6.webp\",\"01M0Z76R0TSYP0VEMAK3G6KR1Q.webp\",\"01M0Z76R0WHMPBWD5MVA7FNGS5.webp\",\"01M0Z76R118D9WZS06NHMGX2EP.webp\",\"01M0Z76R13CC1051CSF8M46KVV.webp\",\"01M0Z76R170RXJZNYA8SS3A96H.webp\"]', NULL, NULL, 'slider_6', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('14', '🎉 BIG SALE ENDS IN', '1', 'BIG SALE ENDS IN', NULL, NULL, '1', NULL, '14', '2026-08-26 14:38:47', '2026-08-27 06:32:45', NULL, NULL, NULL, 'grid_4', '0', '0', '0', '0', NULL, '0', NULL, '1', '2026-08-29 22:10:09', NULL),
('15', 'Offer imge', '0', 'offer imge', NULL, NULL, '1', NULL, '15', '2026-08-26 18:28:44', '2026-08-27 06:32:45', '[\"01M0ZN9TP1HBXT77EC5A8SC2XS.webp\"]', NULL, NULL, 'single_image', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('16', 'LATEST COLLECTION', '1', 'LATEST COLLECTION', NULL, NULL, '1', NULL, '16', '2026-08-26 18:41:45', '2026-08-27 06:32:45', '[\"01M0ZP1N61FHS235T7V57GMHZE.jpg\",\"01M0ZP8AYZQPWXGJ7XFYDF9XR6.jpg\",\"01M0ZP8AZ5MQ5K8VYS3DX6Q7SX.jpg\",\"01M0ZP8AZ836MQF2S2WK31HVRE.jpg\"]', NULL, NULL, 'grid_4', '1', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('17', 'MARKDOWNS', '1', 'MARKDOWNS', NULL, NULL, '1', NULL, '17', '2026-08-27 04:00:35', '2026-08-27 06:32:45', '[\"01M10P0WWAYA6HQ2TWAADDBJ9V.webp\",\"01M10P0WWH8SW7BREHEYTYYA3T.webp\",\"01M10P0WWK6F7Y1WHZXE9HYR2Q.webp\",\"01M10P0WWPB7Y7EJCWKVRFT9P3.webp\"]', NULL, NULL, 'grid_4', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('18', 'HOMEGROWN INDIAN BRAND', '1', 'HOMEGROWN INDIAN BRAND2', NULL, NULL, '1', NULL, '18', '2026-08-27 04:13:22', '2026-08-27 06:32:45', NULL, NULL, NULL, 'grid_4', '0', '0', '0', '1', NULL, '0', NULL, '0', NULL, NULL),
('19', 'SEASONAL MUST HAVES', '1', 'SEASONAL MUST HAVES', NULL, NULL, '1', NULL, '19', '2026-08-27 04:18:11', '2026-08-27 06:32:45', '[\"01M10Q1415V747K0SNT1Q5KB7W.webp\",\"01M10Q141D20ZN8RXEAAJZFN1D.webp\",\"01M10Q141MZA1VE5PK53Z55T4Z.webp\",\"01M10Q141S0KVGF06WNGQ8VZW7.webp\",\"01M10Q1421FNFNA3CHY02H27VQ.avif\",\"01M10Q142AEEQHQ0DNY8P2R45B.avif\",\"01M10Q142BXC2BYTYY3WH4NBT6.webp\",\"01M10Q142DXM7QKAG3YKERMS1R.jpg\"]', NULL, NULL, 'grid_4', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('20', 'HOMEGROWN INDIAN BRAND', '1', 'HOMEGROWN INDIAN BRAND3', NULL, NULL, '1', NULL, '20', '2026-08-27 04:57:26', '2026-08-27 06:32:45', NULL, NULL, NULL, 'grid_4', '0', '0', '0', '1', NULL, '0', NULL, '0', NULL, NULL),
('21', 'SHARP DRESSING', '1', 'SHARP DRESSING', NULL, NULL, '1', NULL, '21', '2026-08-27 05:07:05', '2026-08-27 06:32:45', '[\"01M10STNBNQ6TEKGSHMRCB62S7.webp\",\"01M10STNBRT94P8NGJRYDVK8A8.webp\",\"01M10STNBTGNH4EYNBB463FRR9.webp\",\"01M10STNBXQJ5XACRBXHHCS7FD.webp\",\"01M10STNC05K0P6F2VGQP0VN93.webp\"]', NULL, NULL, 'grid_4', '1', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('22', 'DENIM TAKEOVER', '1', 'DENIM TAKEOVER', NULL, NULL, '1', NULL, '23', '2026-08-27 05:25:26', '2026-08-27 06:32:45', '[\"01M10TW8K831CXHR69A1G1QVAY.webp\",\"01M10TW8KEMZTJM9JA9SQ4MP8T.webp\"]', NULL, NULL, 'grid_2', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('23', 'CATEGORIES', '1', 'CATEGORIES2', NULL, NULL, '1', NULL, '22', '2026-08-27 06:21:37', '2026-08-27 06:32:45', '[\"01M10Y356JHHKKTFQ5VN2PVD1H.webp\",\"01M10Y356PAF4MWQ4G2BSHG33T.webp\",\"01M10Y356QE31KTH5GZRTPZM9Y.webp\",\"01M10Y356S3D6ZZJ765Z5TKW4Q.webp\",\"01M10Y35701EBQ315V3YRKFYMH.webp\",\"01M10Y35752J8B31VPCHHDKGEV.webp\",\"01M10Y3578NWFH08XJXBG8T5YP.webp\",\"01M10Y357ABNZVKJSAJ4Y3EDS4.webp\",\"01M10Y357GE9Y2HEQPB3S20MZ9.webp\",\"01M10Y357REMK11QM7RRSCJVWY.webp\",\"01M10YAB7S1YB8EZTVBNT1HZRK.webp\",\"01M10YPGVNS51SJ3Z6PM7Y27JJ.png\"]', NULL, NULL, 'grid_4', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('24', 'TRENDING NOW', '1', 'TRENDING NOW', NULL, NULL, '1', NULL, '24', '2026-08-27 06:34:58', '2026-08-27 06:35:46', NULL, NULL, '[{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/XxxdiHknNMSPjUj0h7CVbn9uRmT6grs2IhwO31Nr.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/udG7fuDRh0MgfYly7J8GMsyebucR3GalSce7cGG2.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/BOpbn3INagK7qg4qXISUEryL901ER0E0HmbqfKu5.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4\"},{\"upload\":null,\"link\":\"https:\\/\\/happenstance.com\\/storage\\/media\\/qxqz7h6ur9LJjapNvuNAiKPouRwCb0QgJyJIHUNi.mp4\"}]', 'grid_5', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('25', 'DENIM MAKEOVER', '1', 'DENIM MAKEOVER', NULL, NULL, '1', NULL, '25', '2026-08-27 06:45:58', '2026-08-27 06:50:03', '[\"01M10ZFQER4F2JCF1D7MQVJEV5.webp\",\"01M10ZFQETB8698XTG52RMA34E.webp\",\"01M10ZFQEXAQ27KPK2SQQ92ETT.webp\",\"01M10ZFQEY1KBE2V0DYXHSHP1X.webp\"]', NULL, NULL, 'grid_4', '1', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('26', 'WHY CHOOSE US?', '1', 'WHY CHOOSE US?', NULL, NULL, '1', NULL, '26', '2026-08-27 07:00:41', '2026-08-27 07:01:43', '[\"01M110ANKYRT7YS1Y7J6PM94F6.webp\"]', NULL, NULL, 'single_image', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('27', 'TOP 6 PICKS OF THE WEEK', '1', 'TOP 6 PICKS OF THE WEEK', NULL, NULL, '1', NULL, '27', '2026-08-27 07:08:24', '2026-08-27 07:09:51', '[\"01M110RSWY37PN1J7GM9KTZGJ2.webp\",\"01M110RSX0JA2X987DX0Q08F06.webp\",\"01M110RSX2CS8BPBEA9DE9S37P.webp\",\"01M110RSX3FJK6Z07RD17BC2DC.webp\",\"01M110RSX72RMQ0DSRAY2CM0DT.webp\",\"01M110RSXFWZ3JVMB693BHEQJ7.webp\"]', NULL, NULL, 'grid_4', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('28', 'TRICK AND TREAT!', '1', 'TRICK AND TREAT!', NULL, NULL, '1', NULL, '28', '2026-08-27 07:13:03', '2026-08-27 07:37:01', '[\"01M1111AAJF4ZMY23P4C0R02KP.webp\",\"01M112D6X2SEAD3QB8548HEGAN.png\",\"01M112D6X51MGWY5832K86A13C.png\",\"01M112D6X9WQEHZK7XFRCC89WN.png\"]', NULL, NULL, 'grid_4', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('30', 'product section', '0', 'product section', NULL, NULL, '1', NULL, '29', '2026-08-27 09:01:34', '2026-08-27 09:04:22', NULL, NULL, NULL, 'product_filter', '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, '[22,26,29,34,36]'),
('31', 'Section 6a8ffdff7b785', '0', 'section-6a8ffdff7b798', NULL, NULL, '1', NULL, '30', '2026-08-27 09:06:07', '2026-08-27 09:15:45', '[\"01M117GBG7BJGCB9G31KYJMP5F.jpg\",\"01M117GBGA2N71GT0R8RR8HGZV.jpg\"]', NULL, NULL, 'grid_2', '0', '1', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('32', 'TRENDING NOW', '1', 'TRENDING NOW2', NULL, NULL, '1', NULL, '31', '2026-08-27 09:23:57', '2026-08-27 09:25:29', '[\"01M118H0H9T9QHK0FB5HZXEK63.webp\",\"01M118H0HCKDZ5J2SDJ2784CZ1.webp\",\"01M118H0HDH8V3YVN9HNJ5HKX3.webp\",\"01M118H0HFVEZVMK7F4203YSTA.webp\",\"01M118H0JC3R4801KNXKQ23BVM.webp\",\"01M118H0JDAT84C8HZDQR5SKSW.webp\"]', NULL, NULL, 'grid_4', '1', '0', '0', '0', NULL, '0', NULL, '0', NULL, NULL),
('33', 'COMMUNITY VOICE', '1', 'COMMUNITY VOICE', NULL, NULL, '1', NULL, '32', '2026-08-27 09:28:01', '2026-08-27 09:28:01', '[\"01M118RENEP5KXP13RYADWMSGV.webp\",\"01M118RENGEHH0E23J13QCP484.webp\",\"01M118RENJJC370T0W20M00QVJ.webp\",\"01M118RENN0Q5N1HY0CCTGY6CA.webp\",\"01M118RENSA1M78RZQ0BRFXHG5.webp\"]', NULL, NULL, 'grid_4', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('34', 'FEATURED GRID IMGS', '1', 'FEATURED GRID IMGS', NULL, NULL, '1', NULL, '33', '2026-08-27 09:36:17', '2026-08-27 09:37:18', '[\"01M1197JN3WR5XZBEZQQJZS060.webp\",\"01M1197JN5GWPQPRQSCB7XB6BA.webp\",\"01M1197JN74P30G7JZ6048VTW6.webp\",\"01M1197JNBWH57R16WQE2H07MX.webp\",\"01M1197JNDYX0A55ZCY53SBPCV.webp\",\"01M1197JNEGMBT6NJET7XVH5XB.webp\",\"01M1197JNGEJ85CJEZMG3543G8.webp\",\"01M1197JNJX2Q8BS90A0TZTDJS.webp\",\"01M1197JNM5MG9XXF162TQGN7N.webp\",\"01M1197JNW8TTH261T0K7FW085.webp\",\"01M1197JP0JXS6BR3Y3VPTRVDM.webp\",\"01M1199EX7261BD6HC760Z6DB6.webp\"]', NULL, NULL, 'grid_6_no_gap', '0', '0', '1', '0', NULL, '0', NULL, '0', NULL, NULL),
('35', 'UP TO 30 % OFF', '1', 'UP TO 30 % OFF', NULL, NULL, '1', NULL, '34', '2026-08-27 11:16:14', '2026-08-27 11:46:27', NULL, NULL, NULL, 'grid_4', '0', '0', '0', '1', '[{\"sentence\":\"sale UP TO 30 % OFF\"},{\"sentence\":\"sale  UP TO 60 % OFF\"},{\"sentence\":\" Sale UP TO 50 % OFF\"}]', '0', NULL, '0', NULL, NULL);

-- --------------------------------------------------------
-- Table structure for table `job_batches`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `jobs`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `mark_down_banners`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `mark_down_banners`;
CREATE TABLE `mark_down_banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `orientation` varchar(255) NOT NULL DEFAULT 'horizontal',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `mark_down_banners`

INSERT INTO `mark_down_banners` (`id`, `image`, `link`, `is_active`, `sort_order`, `created_at`, `updated_at`, `orientation`) VALUES
('1', '01M14S0RSD33HS7M07N3BZJWSH.png', NULL, '1', '1', '2026-08-28 18:09:54', '2026-08-28 18:09:54', 'horizontal'),
('2', '01M14SP2W7DTRHJFPPD5WBYZTW.png', NULL, '1', '2', '2026-08-28 18:21:32', '2026-08-28 18:21:32', 'horizontal'),
('4', '01M14T1ZCAG135S2S6Z3EQ7WPT.png', NULL, '1', '3', '2026-08-28 18:28:02', '2026-08-28 18:28:09', 'horizontal');

-- --------------------------------------------------------
-- Table structure for table `migrations`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `migrations`

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
('1', '0001_01_01_000000_create_users_table', '1'),
('2', '0001_01_01_000001_create_cache_table', '1'),
('3', '0001_01_01_000002_create_jobs_table', '1'),
('4', '2025_05_28_090706_create_personal_access_tokens_table', '1'),
('5', '2026_07_11_125818_create_categories_table', '1'),
('6', '2026_07_11_125819_create_products_table', '1'),
('7', '2026_07_11_125824_create_home_sections_table', '1'),
('8', '2026_07_11_125838_create_orders_table', '1'),
('9', '2026_07_11_125841_create_order_items_table', '1'),
('10', '2026_07_11_125846_create_carts_table', '1'),
('11', '2026_07_11_125849_create_cart_items_table', '1'),
('12', '2026_08_17_150436_add_user_details_to_users_table', '2'),
('13', '2026_08_18_103441_remove_image_from_categories_table', '3'),
('14', '2026_08_19_123659_add_sizes_to_products_table', '4'),
('15', '2026_08_20_000000_add_sort_order_to_categories_table', '5'),
('16', '2026_08_22_125500_add_type_and_content_to_home_sections_table', '6'),
('17', '2026_08_22_072127_create_banners_table', '7'),
('18', '2026_08_22_124402_add_product_ids_to_home_sections_table', '8'),
('19', '2026_08_22_133919_add_details_to_products_table', '9'),
('20', '2026_08_24_083107_add_images_to_home_sections_table', '10'),
('21', '2026_08_24_110644_add_layout_style_to_home_sections_table', '11'),
('22', '2026_08_24_122940_add_is_banner_to_home_sections_table', '12'),
('23', '2026_08_25_131100_add_videos_to_home_sections_table', '13'),
('24', '2026_08_26_160550_add_enable_carousel_to_home_sections_table', '14'),
('25', '2026_08_27_040339_add_enable_auto_carousel_to_home_sections_table', '15'),
('26', '2026_08_27_051147_add_zoom_out_image_to_home_sections_table', '16'),
('27', '2026_08_27_085528_add_category_ids_to_home_sections_table', '17'),
('28', '2026_08_28_175658_create_mark_down_banners_table', '18'),
('29', '2026_08_28_182343_add_orientation_to_mark_down_banners_table', '19'),
('30', '2026_08_28_183549_create_site_notifications_table', '20'),
('31', '2026_08_28_192312_add_shipping_details_to_orders_table', '21'),
('32', '2026_09_09_075143_create_blogs_table', '22'),
('33', '2026_09_09_082809_add_image_to_blogs_table', '23'),
('34', '2026_09_17_120841_create_official_merch_images_table', '24'),
('35', '2026_09_17_124833_alter_official_merch_images_table', '25'),
('36', '2026_09_17_154902_create_contact_messages_table', '26'),
('37', '2026_09_17_160709_add_user_id_to_contact_messages_table', '27'),
('38', '2026_09_17_161946_create_best_sellers_table', '28');

-- --------------------------------------------------------
-- Table structure for table `official_merch_images`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `official_merch_images`;
CREATE TABLE `official_merch_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `link` varchar(255) DEFAULT NULL,
  `style` varchar(255) NOT NULL DEFAULT 'banner',
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `official_merch_images`

INSERT INTO `official_merch_images` (`id`, `images`, `link`, `style`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
('3', '[\"official-merch-images\\/01M2QPVPKKMXF47Y7NKMQZK9Q4.jpg\",\"official-merch-images\\/01M2QPVPKNT9KHFQHCQWX5NJB6.jpg\",\"official-merch-images\\/01M2QPVPKQWY7SZ3WQ2V42A0ZR.webp\"]', NULL, 'carousel', '3', '1', '2026-09-17 12:53:27', '2026-09-17 12:53:27'),
('4', '[\"official-merch-images\\/01M2QWVG0KGF9FD8C2R29WKVNZ.webp\"]', NULL, 'banner', '1', '1', '2026-09-17 14:38:12', '2026-09-17 14:38:12');

-- --------------------------------------------------------
-- Table structure for table `order_items`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `order_items`

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
('1', '1', '27', '1', '799.00', '2026-08-28 19:28:37', '2026-08-28 19:28:37'),
('2', '2', '33', '1', '700.00', '2026-08-28 19:42:10', '2026-08-28 19:42:10'),
('3', '3', '32', '2', '500.00', '2026-09-18 10:19:19', '2026-09-18 10:19:19');

-- --------------------------------------------------------
-- Table structure for table `orders`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `shipping_name` varchar(255) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `shipping_pincode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `orders`

INSERT INTO `orders` (`id`, `user_id`, `session_id`, `total_amount`, `status`, `payment_method`, `shipping_name`, `shipping_phone`, `shipping_address`, `shipping_pincode`, `created_at`, `updated_at`) VALUES
('1', '1', 'VvjJXPFTqykpqI8x7li8BoUoMnmmQh1el3sxKUkS', '799.00', 'Processing', 'COD', 'Albin Alosious', '8590301089', 'peruvanthanam kerala,india', '685532', '2026-08-28 19:28:37', '2026-08-28 19:52:41'),
('2', '1', 'VvjJXPFTqykpqI8x7li8BoUoMnmmQh1el3sxKUkS', '700.00', 'pending', 'COD', 'Albin Alosious', '08590301089', 'peruvanthanam kerala,india', '685532', '2026-08-28 19:42:10', '2026-08-28 19:42:10'),
('3', '1', 'sgGvfhvEikDK5xHcDnzQXOuqNXtoWnhwBdST8sjm', '1000.00', 'pending', 'COD', 'Albin Alosious', '08590301089', 'peruvanthanam kerala,india', '685532', '2026-09-18 10:19:19', '2026-09-18 10:19:19');

-- --------------------------------------------------------
-- Table structure for table `password_reset_tokens`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `personal_access_tokens`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `products`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sizes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sizes`)),
  `material_care` varchar(255) DEFAULT NULL,
  `country_of_origin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `products`

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `price`, `color`, `discount_price`, `category_id`, `is_active`, `images`, `created_at`, `updated_at`, `sizes`, `material_care`, `country_of_origin`) VALUES
('7', 'Classic Cotton T-Shirt', 'Classic Cotton T-Shirt', 'Classic Cotton T-Shirt', '600.00', NULL, '579.00', '22', '1', '[\"products\\/01M0H8CVK611YVWNQ69YTXDYHK.webp\"]', '2026-08-21 04:13:50', '2026-08-21 04:13:50', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, NULL),
('8', 'Classic Casual Sneakers', 'Classic Casual Sneakers', NULL, '1000.00', NULL, '999.00', '27', '1', '[\"products\\/01M0H9BQJV0D8AG8HEHPA4YB2R.jpg\"]', '2026-08-21 04:30:42', '2026-08-21 04:30:42', '[6,8,10,12,11,9,7]', NULL, NULL),
('9', 'Urban Travel Backpack', 'Urban Travel Backpack', NULL, '2000.00', NULL, '1499.00', '28', '1', '[\"products\\/01M0H9GJ99XWQKCRV8MT9QWRCS.jpg\"]', '2026-08-21 04:33:20', '2026-08-21 04:33:20', '[]', NULL, NULL),
('10', 'Floral Printed Churidar', 'Floral Printed Churidar', NULL, '1500.00', NULL, '999.00', '25', '1', '[\"products\\/01M0HAPYAHV8XPV1R5QZ55R0FY.jpg\"]', '2026-08-21 04:54:18', '2026-08-21 04:54:18', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, NULL),
('11', 'Elegant Cotton Kurti', 'Elegant Cotton Kurti', NULL, '999.00', NULL, '799.00', '25', '1', '[\"products\\/01M0HARJHJCMMR2A7140PN84FW.jpg\"]', '2026-08-21 04:55:11', '2026-08-21 04:55:11', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, NULL),
('12', 'Elegant Block Heels', 'Elegant Block Heels', NULL, '999.00', NULL, '799.00', '26', '1', '[\"products\\/01M0HAYXH4FVZ1XX509646073F.jpg\"]', '2026-08-21 04:58:39', '2026-08-21 04:58:39', '[6,7,9,8,10,11,12]', NULL, NULL),
('13', 'Women’s Casual Sneakers', 'Women’s Casual Sneakers', NULL, '1000.00', NULL, '221.00', '26', '1', '[\"products\\/01M0HB1NSEG60TER4CDDZGHPRD.jpg\"]', '2026-08-21 05:00:09', '2026-08-21 05:00:09', '[6,8,10,12,11,9,7]', NULL, NULL),
('14', 'Elegant Leather Handbag', 'Elegant Leather Handbag', NULL, '799.00', NULL, '500.00', '29', '1', '[\"products\\/01M0HC64G5264Y1HNQW9RYNBZY.jpg\"]', '2026-08-21 05:20:04', '2026-08-21 05:20:04', '[]', NULL, NULL),
('15', 'Classic Shoulder Bag', 'Classic Shoulder Bag', NULL, '1000.00', NULL, '899.00', '29', '1', '[\"products\\/01M0HC8TXXS9KK093T16BK54S8.jpg\"]', '2026-08-21 05:21:33', '2026-08-21 05:21:33', '[]', NULL, NULL),
('16', 'Chic Crossbody Bag', 'Chic Crossbody Bag', NULL, '1200.00', NULL, '999.00', '29', '1', '[\"products\\/01M0HCCG2PEDEXGJPPDK6T6VJ2.jpg\"]', '2026-08-21 05:23:33', '2026-08-21 05:23:33', '[]', NULL, NULL),
('17', 'Little Explorer T-Shirt', 'Little Explorer T-Shirt', NULL, '400.00', NULL, '399.00', '30', '1', '[\"products\\/01M0HFENGKQRAXR6H0JVYZEVVF.jpg\"]', '2026-08-21 06:17:09', '2026-08-21 06:17:09', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, NULL),
('18', 'Junior Denim Shirt', 'Junior Denim Shirt', NULL, '700.00', NULL, '500.00', '30', '1', '[\"products\\/01M0HFGNPJCY2SQGJ7AJ41JVBR.jpg\"]', '2026-08-21 06:18:15', '2026-08-21 06:18:15', '[\"S\"]', NULL, NULL),
('19', 'Mini Explorer Shoes', 'Mini Explorer Shoes', NULL, '700.00', NULL, '481.00', '31', '1', '[\"products\\/01M0HFK0TNA50M85R1NS8RWWNR.jpg\"]', '2026-08-21 06:19:32', '2026-08-21 06:19:32', '[6]', NULL, NULL),
('20', 'Mini Champ School Bag', 'Mini Champ School Bag', NULL, '1000.00', NULL, '999.00', '33', '1', '[\"products\\/01M0HFR20MT1BHMT9CJNKYR9BF.jpg\"]', '2026-08-21 06:22:17', '2026-08-21 06:22:17', '[]', NULL, NULL),
('21', 'Little Explorer Backpack', 'Little Explorer Backpack', NULL, '600.00', NULL, '499.00', '33', '1', '[\"products\\/01M0HFTG6M45XWZF5XAXJERJFA.jpg\"]', '2026-08-21 06:22:55', '2026-08-21 06:23:41', '[]', NULL, NULL),
('22', 'Signature Comfort Shirt', 'Signature Comfort Shirt', NULL, '700.00', NULL, '580.00', '35', '1', '[\"products\\/01M0MZK7HT632N6C0F1A8RY1SF.webp\"]', '2026-08-22 14:56:59', '2026-08-23 04:12:47', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('24', 'Weekend Vibe T-Shirt', 'Weekend Vibe T-Shirt', NULL, '500.00', NULL, NULL, '34', '1', '[\"products\\/01M0PBA6WFC3CVYDGH5X79KJRJ.webp\"]', '2026-08-23 03:41:01', '2026-08-23 03:41:01', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('25', 'Classic Polo Tee', 'Classic Polo Tee', 'Classic Polo Tee', '899.00', NULL, '799.00', '36', '1', '[\"products\\/01M0PDAKFK8DQBP7ZCP68GXS11.jpg\"]', '2026-08-23 04:16:11', '2026-08-23 04:16:11', '[\"S\",\"M\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('27', 'Royal Derby Shoes', 'Royal Derby Shoes', NULL, '799.00', NULL, '699.00', '41', '1', '[\"products\\/01M0PJM2VZNFGD6RQK3N9S1D5F.webp\"]', '2026-08-23 05:48:45', '2026-08-23 05:48:45', '[6,7,9,8,10,11,12]', NULL, 'India (and proud)'),
('28', 'Heritage Cotton Shirt', 'Heritage Cotton Shirt', NULL, '799.00', NULL, '566.00', '35', '1', '[\"products\\/01M0QY32F2S8NQHNRCQKDD2RWW.webp\"]', '2026-08-23 18:28:25', '2026-08-23 18:28:25', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('29', 'Essential Crew T-Shirt', 'Essential Crew T-Shirt', NULL, '1000.00', NULL, '880.00', '34', '1', '[\"products\\/01M0S7DVPNNB4NHKZ1CPT9Z82X.webp\"]', '2026-08-24 06:30:50', '2026-08-24 06:30:50', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('30', 'Spider-Man: Spider Surge', 'Spider-Man: Spider Surge', NULL, '1500.00', NULL, '1400.00', '34', '1', '[\"products\\/01M11M4029ZZNWN76D99T2383Y.webp\",\"products\\/01M11M403DAKJ7F2TTM4J50CXH.webp\",\"products\\/01M11M403GEVKWDRRK4C30XKMS.webp\",\"products\\/01M11M403HSXNQ7M59HNJTA165.webp\",\"products\\/01M11M403KXX8CN269J9ST68VR.webp\",\"products\\/01M11M403N1GY1DMJFJZDCNTC9.webp\"]', '2026-08-27 12:46:34', '2026-08-27 12:46:34', '[\"S\",\"M\",\"L\",\"XXL\",\"XL\"]', NULL, 'India (and proud)'),
('31', 'The Big Bang Theory: Sheldon Cooper', 'The Big Bang Theory: Sheldon Cooper', NULL, '2500.00', NULL, '2000.00', '34', '1', '[\"products\\/01M11MC8S1HDAMMH6MZ4XEYR0Z.avif\",\"products\\/01M11MC8S30QSBD6ENNEG51679.avif\",\"products\\/01M11MC8S8C3F1BY05A9N708NR.avif\",\"products\\/01M11MC8SAG2M928EZCEQS14P2.avif\",\"products\\/01M11MC8SEH49TC6GHDN091VRR.avif\",\"products\\/01M11MC8SHXE29JKSN87QZJDM5.avif\"]', '2026-08-27 12:51:05', '2026-08-27 12:51:43', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('32', 'Relaxed Shirt: Edge', 'Relaxed Shirt: Edge', NULL, '900.00', NULL, '500.00', '35', '1', '[\"products\\/01M11NNPCAHK36RSVK5CQW7WCT.avif\",\"products\\/01M11NNPCEFABH06FSNVRJFXEF.avif\",\"products\\/01M11NNPCG4XKV6TFSNNF8H3EA.avif\",\"products\\/01M11NNPCH61XZ1K6BQ335HWZW.avif\",\"products\\/01M11NNPCMYX4CSCSTGD5K4CWX.avif\"]', '2026-08-27 13:13:42', '2026-08-27 13:13:42', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('33', 'Striped Shirt: Chrome', 'Striped Shirt: Chrome', NULL, '700.00', NULL, '950.00', '35', '1', '[\"products\\/01M11NSY5T2Z1451JCAEH22CPJ.avif\",\"products\\/01M11NSY5W461XVJSXJK7NKNDY.avif\",\"products\\/01M11NSY5YKM16D97NSJK4YRAM.avif\",\"products\\/01M11NSY60JZDX5V0T7B08CCF5.avif\",\"products\\/01M11NSY62T12AZVNGKET9122D.avif\"]', '2026-08-27 13:16:01', '2026-08-27 13:16:01', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('34', 'TSS Originals: Shadow Dragon', 'TSS Originals: Shadow Dragon', 'Material & Care:\n98% Cotton 2% Spandex\nMachine Wash\nCountry of Origin: India (and proud)', '1500.00', NULL, '1499.00', '120', '1', '[\"products\\/01M143EENARRBB854E0DT48ZHN.avif\",\"products\\/01M143EEP39AS6KK8MES8EWEET.avif\",\"products\\/01M143EEP50T3DWRYS3H9Y28XQ.avif\",\"products\\/01M143EEP7QB0TDS0RVFN2WP3Y.avif\",\"products\\/01M143EEPB1D3VMPNMW6T32SBP.avif\",\"products\\/01M143EEPKTWW157BGKBQGNFXR.avif\"]', '2026-08-28 11:52:54', '2026-08-28 11:52:54', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('35', 'Herrington Textured Plaid Shirts', 'Herrington Textured Plaid Shirts', 'Material & Care:\n100% Cotton\nMachine Wash', '960.00', NULL, '780.00', '121', '1', '[\"products\\/01M1447KXCQT4VFDMN90Z5Y0A5.avif\",\"products\\/01M1447KXE69KP1GRJJ14EJXRY.avif\",\"products\\/01M1447KXG5JEK28MNCF8XNV51.avif\",\"products\\/01M1447KXJVEPT17ZG2Z2YCMBC.avif\",\"products\\/01M1447KXM93C2Q7BY3B1Q26RD.avif\",\"products\\/01M1447KXSSQS9G79N6W1V8CSW.avif\"]', '2026-08-28 12:06:38', '2026-08-28 12:06:38', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', NULL, 'India (and proud)'),
('36', 'Souled Socks: Purple Bliss', 'Souled Socks: Purple Bliss', 'Material & Care:\n72% Cotton 20% Nylon 6% Elastic 2% Spandex\nMachine Wash', '390.00', NULL, '200.00', '123', '1', '[\"products\\/01M145RA0332XT9QRTEH05F42B.avif\",\"products\\/01M145RA060BGW5D6GES6MEHTX.jpg\",\"products\\/01M145RA08AVM0GQ3NY54SGMG2.jpg\",\"products\\/01M145RA0B7G53V15MQ7ZA48ET.jpg\",\"products\\/01M145RA0EG1NFAGQA1J25D3SJ.jpg\",\"products\\/01M145RA0H8PK58YE3K49AM9N9.jpg\"]', '2026-08-28 12:33:14', '2026-08-28 13:11:21', '[\"S\",\"L\",\"XXL\",\"M\",\"XL\"]', NULL, 'India (and proud)'),
('37', 'Inside Out: Sadness', 'Inside Out: Sadness', 'Material & Care:\n76% Cotton, 14% Polyester, 8% Nylon, 2% Elastane\nMachine Wash', '400.00', NULL, '485.00', '123', '1', '[\"products\\/01M148BTY2PQQFCNXXHHBPPCHX.avif\",\"products\\/01M148BTY6AWJ6XB3BK2NNWBW6.avif\",\"products\\/01M148BTY8C68HKV6DQVE7Z8PZ.avif\",\"products\\/01M148BTYC9QTJ0HBPXHT6ECHD.avif\",\"products\\/01M148BTYF8W1NN1QQF7WTKV9F.avif\"]', '2026-08-28 13:18:51', '2026-08-28 13:18:51', '[\"S\",\"L\",\"XXL\",\"M\",\"XL\"]', NULL, 'India (and proud)'),
('38', 'Men\'s Off White Textured Plus Size Polo T-shirt', 'Men\'s Off White Textured Plus Size Polo T-shirt', NULL, '800.00', NULL, '500.00', '126', '1', '[\"products\\/01M231CTVJV0ZCRWF0253T0FZ9.jpg\",\"products\\/01M231CTVQMBWQ736FMZ55JXMR.jpg\",\"products\\/01M231CTVSGQ14DYN08FK3AC8G.jpg\",\"products\\/01M231CTW0Y5JCW5A77K20CMJR.jpg\"]', '2026-09-09 12:13:31', '2026-09-09 12:13:31', '[\"3XL\",\"4XL\",\"XXL\",\"XL\",\"5XL\",\"6XL\"]', NULL, 'India (and proud)'),
('39', 'Men\'s Blue Oversized Plus Size T-shirt', 'Men\'s Blue Oversized Plus Size T-shirt', NULL, '789.00', NULL, '552.00', '131', '1', '[\"products\\/01M231ZE0E0QW2HCMM76HS0KQV.jpg\",\"products\\/01M231ZE0KC26D3YKYDD8HGT1V.jpg\",\"products\\/01M231ZE0Q2VNES9TB2YKKBZT1.jpg\",\"products\\/01M231ZE0RJ8GRMAXQFXX3HYVH.jpg\"]', '2026-09-09 12:23:40', '2026-09-09 12:23:40', '[\"XXL\",\"4XL\",\"6XL\"]', NULL, 'India (and proud)'),
('40', 'iphone 17', 'iphone 17', NULL, '600.00', NULL, '500.00', '134', '1', '[\"products\\/01M2SCA2A655TGBHJE4NF8ZJXE.webp\"]', '2026-09-18 04:27:32', '2026-09-18 04:27:32', '[]', NULL, 'India (and proud)'),
('41', 'Collectibles: Minions', 'Collectibles: Minions', NULL, '800.00', NULL, '5600.00', '135', '1', '[\"products\\/01M2SDV3JAM6Y3JJNGTYFNE2B5.avif\",\"products\\/01M2SDV3JEKX13M042H1N3JPP2.avif\",\"products\\/01M2SDV3JG0WSQ5TQKMS6MYWDX.avif\",\"products\\/01M2SDV3JKZT9XJMGC5NE0YKZK.avif\",\"products\\/01M2SDV3JN874YWDCDH62YK63M.avif\",\"products\\/01M2SDV3JPYSDJH17CZTJR0ATB.avif\"]', '2026-09-18 04:54:19', '2026-09-18 04:55:45', '[\"One Size\"]', NULL, 'India (and proud)');

-- --------------------------------------------------------
-- Table structure for table `sessions`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `site_notifications`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `site_notifications`;
CREATE TABLE `site_notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `site_notifications`

INSERT INTO `site_notifications` (`id`, `image`, `text`, `is_active`, `created_at`, `updated_at`) VALUES
('1', '01M14V5PVKN5WM0MCGAG4WYM80.avif', 'Discount sale is closing soon', '1', '2026-08-28 18:47:33', '2026-08-28 18:47:33');

-- --------------------------------------------------------
-- Table structure for table `users`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `otp_expires_at` timestamp NULL DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `address_full_name` varchar(255) DEFAULT NULL,
  `address_mobile_number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `users`

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `first_name`, `middle_name`, `last_name`, `phone_number`, `otp`, `otp_expires_at`, `is_verified`, `address_full_name`, `address_mobile_number`, `address`, `pincode`) VALUES
('1', 'albin', 'alosiousalbin91@gmail.com', NULL, '$2y$12$dUj7f.NS0lL51yXRV3Z/6O7MTmSYVvQBEDugAUuwwGce5U8nhgotq', 'qIoXKTJT4PrJVhLDGvwKnPPbKevBHT3kLwTqNBihFSpt3e0V4z4TZaoeyP4K', '2026-08-17 14:53:35', '2026-09-26 06:16:54', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Albin Alosious', '08590301089', 'peruvanthanam kerala,india', '685532'),
('2', 'Albin Alosious', 'alosiousalbin90@gmail.com', NULL, '$2y$12$.KdjDa3Jspy9YPDBo67J9OJZ2UG.pzLMNCThxcE2jO881JUDFkjxW', NULL, '2026-08-17 15:51:49', '2026-08-17 15:51:49', 'Albin', NULL, 'Alosious', '8590301089', '885286', '2026-08-17 16:01:49', '0', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
