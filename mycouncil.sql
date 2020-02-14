/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.7.24 : Database - council
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `dmas` */

DROP TABLE IF EXISTS `dmas`;

CREATE TABLE `dmas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dmas` */

insert  into `dmas`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Corbally','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(2,'Ballincurrig - Lisgould','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(3,'Walshtown Beg','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(4,'Clash Leamlara','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(5,'Dungourney','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(6,'Bilberry','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(7,'Church Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(8,'Barryscourt Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(9,'Castle Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(10,'Ballintubrid Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(11,'Weighbridge Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(12,'Broomfield Res Outflow','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(13,'Broomfield Group Scheme','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(14,'Broomfield Village','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(15,'Midleton Main St Flow','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(16,'Cork Road Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(17,'Market Green Flow','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(18,'Church Lane','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(19,'Irish Distillers','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(20,'Ballinacurra Bulk','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(21,'Rosehill Estate','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(22,'Ballinacurra Main Road','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(23,'Ballinacurra Village Meter','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(24,'East Ferry','2020-02-10 19:35:45','2020-02-10 19:35:45');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `leakages` */

DROP TABLE IF EXISTS `leakages`;

CREATE TABLE `leakages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `zone_id` int(11) DEFAULT NULL,
  `woa_id` int(11) DEFAULT NULL,
  `dma_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `stype_id` int(11) DEFAULT NULL,
  `is_t4_completed` int(11) DEFAULT NULL,
  `x` decimal(10,2) DEFAULT NULL,
  `y` decimal(10,2) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `area` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `leakages` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2020_02_10_184945_create_zones_table',1),
(5,'2020_02_10_185209_create_leakages_table',1),
(6,'2020_02_10_185650_create_woas_table',1),
(7,'2020_02_10_185708_create_dmas_table',1),
(8,'2020_02_10_185724_create_types_table',1),
(9,'2020_02_10_185737_create_stypes_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `stypes` */

DROP TABLE IF EXISTS `stypes`;

CREATE TABLE `stypes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `stypes` */

insert  into `stypes`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Concrete footpath','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(2,'Grass Verge','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(3,'Tarmac','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(4,'Other','2020-02-10 19:35:46','2020-02-10 19:35:46');

/*Table structure for table `types` */

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `types` */

insert  into `types`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Service Repair','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(2,'3\" CI','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(3,'5\" CI','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(4,'3\" HDPE','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(5,'4\" PVC','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(6,'6\" PVC','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(7,'8\" PVC','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(8,'5\" AC','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(9,'7\" AC','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(10,'9\" AC','2020-02-10 19:35:45','2020-02-10 19:35:45'),
(11,'Other','2020-02-10 19:35:45','2020-02-10 19:35:45');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin@admin.com',NULL,'$2y$10$keCFMDUY70.oCooWKklzE.I6JZtvp7raCXYWLbWu9nk12um73sXiS','KJYLDfuWks2u9f8XuE4uYDAATscYnRLbvyFkSkndvqww6dGRHtTiYhSJ1bmp','2020-02-10 19:35:43','2020-02-10 19:35:43');

/*Table structure for table `woas` */

DROP TABLE IF EXISTS `woas`;

CREATE TABLE `woas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `woas` */

insert  into `woas`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Corbally','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(2,'Ballincurrig - Lisgould','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(3,'Walshtown Beg','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(4,'Clash Leamlara','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(5,'Dungourney','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(6,'Bilberry','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(7,'Tibbotstown','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(8,'Midleton','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(9,'Whitegate Regional','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(10,'Cloyne','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(11,'Mogeely','2020-02-10 19:35:43','2020-02-10 19:35:43'),
(12,'Inch','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(13,'Ballykilty','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(14,'Killeagh','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(15,'Kilcraheen','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(16,'Ballymacoda','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(17,'Knockadoon','2020-02-10 19:35:44','2020-02-10 19:35:44'),
(18,'Youghal','2020-02-10 19:35:44','2020-02-10 19:35:44');

/*Table structure for table `zones` */

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `zones` */

insert  into `zones`(`id`,`name`,`rate`,`created_at`,`updated_at`) values 
(1,'Zone1',45,'2020-02-10 19:35:43','2020-02-10 19:35:43'),
(2,'Zone2',58,'2020-02-10 19:35:43','2020-02-10 19:35:43'),
(3,'Zone3',25,'2020-02-10 19:35:43','2020-02-10 19:35:43'),
(4,'Zone4',45,'2020-02-10 19:35:43','2020-02-10 19:35:43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
