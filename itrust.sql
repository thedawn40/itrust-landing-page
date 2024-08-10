/*
Navicat MySQL Data Transfer

Source Server         : LocalMySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : itrust

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-08-09 00:37:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('3', 'Technology', 'technology', '2024-07-21 04:41:38', '2024-07-21 04:41:38');

-- ----------------------------
-- Table structure for `clients`
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('2', 'Indonesian Cloud', 'client-images/o7mUu0RK52pNzG5IGjNpVaEC8DDXT2mJoIpQ439e.png', '2024-07-21 04:40:50', '2024-07-21 04:40:50');
INSERT INTO `clients` VALUES ('3', 'Datacomm', 'client-images/9lGVKGgyfbQ8BqgKKs70xMfA7tiNmLgawi7ZjRVh.png', '2024-07-21 04:40:59', '2024-07-21 04:40:59');
INSERT INTO `clients` VALUES ('4', 'HYTRUST', 'client-images/Nfjnsilzb5TTPQorHxhOIGmDsSCs8equNfh1vsqw.png', '2024-07-21 04:41:09', '2024-07-21 04:41:09');
INSERT INTO `clients` VALUES ('5', 'Entrust', 'client-images/Q4FH7F2kYRRIV48M5vaaALzrqxvEgEC2dHa5M0MF.png', '2024-07-21 04:41:19', '2024-07-21 04:41:19');

-- ----------------------------
-- Table structure for `companies`
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sub_address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `customer_support` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES ('1', 'PT i-Trust Data Teknologi', 'support@itrust.co.id', 'Perkantoran Prominence 38D no. 47\r\nJl Jalur Sutera Boulevard Alam Sutera, Tangerang, Banten 15143', null, null, '02122222222', 'https://x.com', 'https://facebook.com', 'https://instagram.com', 'https://api.whatsapp.com/send?phone=&text=Halo', 'https://web.telegram.org/', null, '2024-07-20 15:10:08');

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
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

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('6', 'luthfi alfarisi', '087711126373', 'alfarisi.luthfi@yahoo.com', 'product', 'product apa saja yang ada ?', '2024-07-21 04:54:14', '2024-07-21 04:54:14');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('12', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('13', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('14', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('15', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('16', '2024_05_29_111412_create_news_table', '1');
INSERT INTO `migrations` VALUES ('17', '2024_05_29_120612_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('18', '2024_06_01_032950_create_partners_table', '1');
INSERT INTO `migrations` VALUES ('19', '2024_06_01_101127_create_clients_table', '1');
INSERT INTO `migrations` VALUES ('20', '2024_06_01_143254_create_solutions_table', '1');
INSERT INTO `migrations` VALUES ('21', '2024_06_01_143857_create_solution_details_table', '1');
INSERT INTO `migrations` VALUES ('22', '2024_06_02_103013_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('24', '2024_07_07_122345_create_companies_table', '2');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `body` longtext NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('3', '3', 'In a Year of Transformation, the 2024 Global Partner Award Winners Lead the Charge', 'in-a-year-of-transformation-the-2024-global-partner-award-winners-lead-the-charge', 'news-images/cAYwA2RehtVzZvM5o7nhb7WdNO8Kj5vluMuY0fBS.png', 'For over 50 years, Entrust has helped keep the wor...', '<p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">For over 50 years, Entrust has helped keep the world moving safely by enabling strong identities, secure payments, and protected data. We wouldn&acirc;&#128;&#153;t be where we are today if it wasn&acirc;&#128;&#153;t for our incredible network of partners, and every year we gather to celebrate our successes by recognizing partners through our Global Partner Awards program. This program celebrates the outstanding contributions of organizations that have excelled in their own unique ways, showcasing innovation, dedication, and excellence in their partnership with Entrust.<p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">The 2024 Global Partner Awards have once again highlighted remarkable achievements and have set new benchmarks for success. This is particularly the case in a year in which more than half the world&acirc;&#128;&#153;s population is voting in an election, there is economic and geopolitical uncertainty, and trends like digital identity, AI, ransomware, and quantum computing have placed a significant spotlight on cybersecurity by regulatory bodies and the public. Congratulations to all our award winners and thanks to all Entrust partners for your continued trust and investment in our solutions.</p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">&nbsp;</p><h2 style=\"box-sizing: inherit; font-size: 24px; line-height: 29px; font-weight: 700; scroll-margin-top: 90px; margin-bottom: 0.5em; font-family: gotham, arial, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: inherit; font-weight: 500;\">Payments and Identity Partners of the Year</span></h2><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">APAC:&nbsp;<a class=\"track-event\" href=\"http://www.eluonins.co.kr/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">ELUONINS Corporation</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">EMEA:&nbsp;<a class=\"track-event\" href=\"http://www.gonpa.com/tr\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">G&Atilde;&para;npa Elektronik Sanayi ve Ticaret A.S.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">Latin America:&nbsp;<a class=\"track-event\" href=\"http://www.appliedsystems.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Stone Jedge Investments SRL</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">North America:&nbsp;<a class=\"track-event\" href=\"http://www.richardsonbus.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Richardson Business Solutions</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\"><span style=\"box-sizing: inherit; font-weight: 600;\">&nbsp;</span></p><h2 style=\"box-sizing: inherit; font-size: 24px; line-height: 29px; font-weight: 700; scroll-margin-top: 90px; margin-bottom: 0.5em; font-family: gotham, arial, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: inherit; font-weight: 500;\">Digital Security Solutions Partners of the Year</span></h2><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">APAC:&nbsp;<a class=\"track-event\" href=\"http://www.ivalue.co.in/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">iValue InfoSolutions Pvt. Ltd.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">EMEA:&nbsp;<a class=\"track-event\" href=\"http://www.dns.cz/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">DNS A.S.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">Latin America:&nbsp;<a class=\"track-event\" href=\"http://www.sefisa.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">SISTEMAS EFICIENTES SA</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">North America:&nbsp;<a class=\"track-event\" href=\"http://www.emagined.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Emagined Security</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\"><span style=\"box-sizing: inherit; font-weight: 600;\">&nbsp;</span></p><h2 style=\"box-sizing: inherit; font-size: 24px; line-height: 29px; font-weight: 700; scroll-margin-top: 90px; margin-bottom: 0.5em; font-family: gotham, arial, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: inherit; font-weight: 500;\">Payments and Identity Excellence Award: Solution Provider</span></h2><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">APAC:&nbsp;<a class=\"track-event\" href=\"https://mk.com.vn/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">MK Group Joint Stock Company</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">EMEA:&nbsp;<a class=\"track-event\" href=\"https://alabbas.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Abba Electronics L.L.C.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">Latin America:&nbsp;<a class=\"track-event\" href=\"http://www.vigatec.cl/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Vigatec</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">North America:&nbsp;<a class=\"track-event\" href=\"http://www.idesco.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Idesco Corporation</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">&nbsp;</p><h2 style=\"box-sizing: inherit; font-size: 24px; line-height: 29px; font-weight: 700; scroll-margin-top: 90px; margin-bottom: 0.5em; font-family: gotham, arial, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: inherit; font-weight: 500;\">Digital Security Solutions Excellence Award: Solution Provider</span></h2><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">APAC:&nbsp;<a class=\"track-event\" href=\"http://www.sunnic-sec.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Sunnic Pte. Ltd.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">EMEA:&nbsp;<a class=\"track-event\" href=\"http://www.cybertronixx.de/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Cybertronixx GmbH</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">Latin America:&nbsp;<a class=\"track-event\" href=\"http://www.itservicios.com.co/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">IT Servicios SAS</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">North America:&nbsp;<a class=\"track-event\" href=\"http://www.optiv.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Optiv Security</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">&nbsp;</p><h2 style=\"box-sizing: inherit; font-size: 24px; line-height: 29px; font-weight: 700; scroll-margin-top: 90px; margin-bottom: 0.5em; font-family: gotham, arial, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: inherit; font-weight: 500;\">Payments and Identity Excellence Award: Distributor</span></h2><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">APAC:&nbsp;<a class=\"track-event\" href=\"http://www.forceid.in/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Force Identification (ForceID)</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">EMEA:&nbsp;<a class=\"track-event\" href=\"https://www.bluestarinc.com/emea-en/home.html\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Bluestar Europe Distribution BV</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">Latin America:&nbsp;<a class=\"track-event\" href=\"http://www.neoyama.com.br/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Neoyama Industria e Comercio de Eletroeletronicos Ltda.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">North America:&nbsp;<a class=\"track-event\" href=\"https://www.bluestarinc.com/us-en/home.html\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">BlueStar Inc.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">&nbsp;</p><h2 style=\"box-sizing: inherit; font-size: 24px; line-height: 29px; font-weight: 700; scroll-margin-top: 90px; margin-bottom: 0.5em; font-family: gotham, arial, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: inherit; font-weight: 500;\">Digital Security Solutions Excellence Award: Distributor</span></h2><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">APAC:&nbsp;<a class=\"track-event\" href=\"http://www.indusfaceconsulting.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">Indusface Ltd.</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">EMEA:&nbsp;<a class=\"track-event\" href=\"https://cyberknight.tech/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">CyberKnight Technologies FZ-LLC</a></p><p style=\"box-sizing: inherit; line-height: 32px; color: rgb(0, 0, 0); font-family: gotham, arial, sans-serif;\">North America:&nbsp;<a class=\"track-event\" href=\"http://www.tdsynnex.com/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: inherit; color: var(--body-link-color); position: relative; transition: all 0.35s ease 0s;\">TD Synnex</a></p></p>\n', null, null, '2024-07-21 04:51:42', '2024-07-21 04:51:42');

-- ----------------------------
-- Table structure for `partners`
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partners_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES ('3', 'Entrust', 'partner-images/E4ucrLOeOLohQ8K2J58d8cYQcGeeAsuymvQAnd6z.png', '2024-07-21 04:39:47', '2024-07-21 04:39:47');
INSERT INTO `partners` VALUES ('4', 'Datacomm', 'partner-images/MglzYTw2pAvL8fWSR9qyc2c9MYaUaHlU1bUXpqZR.png', '2024-07-21 04:40:04', '2024-07-21 04:40:04');
INSERT INTO `partners` VALUES ('5', 'HYTRUST', 'partner-images/cU6Epmi48Lc2YEyAAlH4QkKas3lJTsiUWuYwZv9n.png', '2024-07-21 04:40:17', '2024-07-21 04:40:17');
INSERT INTO `partners` VALUES ('6', 'Indonesian Cloud', 'partner-images/TYD8aUaa106luS36PUrO1EcvBBB1h3ZANx36m5i2.png', '2024-07-21 04:40:31', '2024-07-21 04:40:31');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
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

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `solutions`
-- ----------------------------
DROP TABLE IF EXISTS `solutions`;
CREATE TABLE `solutions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `solutions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of solutions
-- ----------------------------
INSERT INTO `solutions` VALUES ('2', 'Hardware Security Module (HSM)', '<p>GENERAL PURPOSE HSM The foundation of TRUST, cryptographic solutions not only protect your data and compliance, but secure emerging technologies such as cloud, IoT, blockchain, and digital payments<br></p>', 'solution-images/q9l48Qp5rQiNk1DckjpftnyHsKwCSicYgYZUUOwN.png', '2024-07-21 04:47:09', '2024-07-21 04:47:09');

-- ----------------------------
-- Table structure for `solution_details`
-- ----------------------------
DROP TABLE IF EXISTS `solution_details`;
CREATE TABLE `solution_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `solution_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of solution_details
-- ----------------------------
INSERT INTO `solution_details` VALUES ('1', '1', 'asdfasdf', '<p>lorem ipsum</p>', 'solution-detail-images/KYm1M7lZ7GbaJCGzWszcw91DPH0qDkX39S746kKt.png', null, '2024-07-20 12:54:02', '2024-07-20 12:54:02');
INSERT INTO `solution_details` VALUES ('2', '1', 'alsdfjaskdf', '<p>asdfasdfxcnmvnzcxmvnmx,valskdjflasjdflkjlwer</p>', 'solution-detail-images/fpm1vSstMwbnCv6GM3U4Ub02M6pMdGGnRXzUBZOb.png', null, '2024-07-20 17:26:52', '2024-07-20 17:26:52');
INSERT INTO `solution_details` VALUES ('3', '2', 'nShield Connect', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(246, 249, 255);\">nShield Connect hardware security modules (HSMs) are certified, networked appliances that deliver cryptographic key services to applications distributed across servers and virtual machines.</span><br></p>', 'solution-detail-images/3cuHaOVfHPfQlge3AxvH8XL1CPNalj9EmDOoyROR.png', null, '2024-07-21 04:47:49', '2024-07-21 04:47:49');
INSERT INTO `solution_details` VALUES ('4', '2', 'nShield Solo', '<p>nShield Solo hardware security modules (HSMs) are FIPS-certified, PCI-Express card-based solutions that deliver cryptographic key services to applications hosted on individual servers and appliances.<br></p>', 'solution-detail-images/WTB0hr3LKrvMcWyVrAjGTRqUxFumEkABVj5VX9ev.png', null, '2024-07-21 04:48:23', '2024-07-21 04:48:23');
INSERT INTO `solution_details` VALUES ('5', '2', 'nShield Edge', '<p>nShield Edge hardware security modules (HSMs) are portable USB-connected HSMs that provide cryptographic key services for low-volume transaction environments.<br></p>', 'solution-detail-images/vD3IACpkp2MY36bXRtBcGsX9xwGBFqBcHHT6eGci.png', null, '2024-07-21 04:49:58', '2024-07-21 04:49:58');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin', '', null, '$2y$10$gRbZJ06wBG.qw2k5Yn.PXufuXk.OZnrhykYhxEBnY8VCHU.QCAGAm', null, null, null);
