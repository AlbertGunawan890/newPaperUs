/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_paperus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_paperus` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_paperus`;

/*Table structure for table `failed_jobs` */

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

/*Data for the table `failed_jobs` */

/*Table structure for table `master_box` */

DROP TABLE IF EXISTS `master_box`;

CREATE TABLE `master_box` (
  `id_box` varchar(255) NOT NULL,
  `tipe_box` varchar(255) NOT NULL,
  `nama_box` varchar(255) NOT NULL,
  `panjang_box` varchar(255) NOT NULL,
  `lebar_box` varchar(255) NOT NULL,
  `tinggi_box` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_box`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_box` */

insert  into `master_box`(`id_box`,`tipe_box`,`nama_box`,`panjang_box`,`lebar_box`,`tinggi_box`,`keterangan`,`created_at`,`updated_at`,`deleted_at`) values 
('B001','a','a','12','12','12','asasa','2023-03-03 15:21:30','2023-03-03 15:21:30',NULL);

/*Table structure for table `master_customer` */

DROP TABLE IF EXISTS `master_customer`;

CREATE TABLE `master_customer` (
  `id_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `npwp_customer` varchar(255) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `provinsi_customer` varchar(255) NOT NULL,
  `kota_customer` varchar(255) NOT NULL,
  `kecamatan_customer` varchar(255) NOT NULL,
  `kelurahan_customer` varchar(255) NOT NULL,
  `kodepos_customer` varchar(255) NOT NULL,
  `notelp_customer` varchar(255) NOT NULL,
  `nofax_customer` varchar(255) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `batasan_hutang` varchar(255) NOT NULL,
  `hutang_sekarang` varchar(255) NOT NULL,
  `hutang_tersedia` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_customer` */

insert  into `master_customer`(`id_customer`,`nama_customer`,`npwp_customer`,`alamat_customer`,`provinsi_customer`,`kota_customer`,`kecamatan_customer`,`kelurahan_customer`,`kodepos_customer`,`notelp_customer`,`nofax_customer`,`email_customer`,`batasan_hutang`,`hutang_sekarang`,`hutang_tersedia`,`no_rekening`,`metode_pembayaran`,`created_at`,`updated_at`,`deleted_at`) values 
('CU001','a','a','a','a','a','a','a','a','23423423','32423432','admi5n@gmail.com','2323','23213','232132','23123213','as','2023-03-03 15:32:50','2023-03-03 15:32:50',NULL);

/*Table structure for table `master_pegawai` */

DROP TABLE IF EXISTS `master_pegawai`;

CREATE TABLE `master_pegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `npwp_pegawai` varchar(255) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `provinsi_pegawai` varchar(255) NOT NULL,
  `kota_pegawai` varchar(255) NOT NULL,
  `kecamatan_pegawai` varchar(255) NOT NULL,
  `kelurahan_pegawai` varchar(255) NOT NULL,
  `kodepos_pegawai` varchar(255) NOT NULL,
  `notelp_pegawai` varchar(255) NOT NULL,
  `fax_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `kontak_personal` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_pegawai` */

insert  into `master_pegawai`(`id_pegawai`,`nama_pegawai`,`npwp_pegawai`,`alamat_pegawai`,`provinsi_pegawai`,`kota_pegawai`,`kecamatan_pegawai`,`kelurahan_pegawai`,`kodepos_pegawai`,`notelp_pegawai`,`fax_pegawai`,`email_pegawai`,`kontak_personal`,`password`,`created_at`,`updated_at`,`deleted_at`) values 
('P001','a','23423','weas','b','KABUPATEN BANYUWANGI','d','e','321314','123123','12312312','admin@gmail.com','aa','$2y$10$/otjcMrD6Uxo4H/3X2yydOj.AlFnJ6klfvghmpIPopoCfw1pLf0xe','2023-03-03 15:04:31','2023-03-03 15:04:31',NULL);

/*Table structure for table `master_supplier` */

DROP TABLE IF EXISTS `master_supplier`;

CREATE TABLE `master_supplier` (
  `id_supplier` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `npwp_supplier` varchar(255) NOT NULL,
  `alamat_supplier` varchar(255) NOT NULL,
  `provinsi_supplier` varchar(255) NOT NULL,
  `kota_supplier` varchar(255) NOT NULL,
  `kecamatan_supplier` varchar(255) NOT NULL,
  `kelurahan_supplier` varchar(255) NOT NULL,
  `kodepos_supplier` varchar(255) NOT NULL,
  `notelp_supplier` varchar(255) NOT NULL,
  `email_supplier` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_supplier` */

insert  into `master_supplier`(`id_supplier`,`nama_supplier`,`npwp_supplier`,`alamat_supplier`,`provinsi_supplier`,`kota_supplier`,`kecamatan_supplier`,`kelurahan_supplier`,`kodepos_supplier`,`notelp_supplier`,`email_supplier`,`item`,`nama_bank`,`no_rekening`,`created_at`,`updated_at`,`deleted_at`) values 
('S001','a','a','a','a','a','a','a','a','324324','admi5n@gmail.com','aaa','aa','232344','2023-03-03 15:40:38','2023-03-03 15:40:38',NULL);

/*Table structure for table `master_vendor` */

DROP TABLE IF EXISTS `master_vendor`;

CREATE TABLE `master_vendor` (
  `id_vendor` varchar(255) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `jenis_item` varchar(255) NOT NULL,
  `kategori_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `kota_vendor` varchar(255) NOT NULL,
  `kecamatan_vendor` varchar(255) NOT NULL,
  `kelurahan_vendor` varchar(255) NOT NULL,
  `email_vendor` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `no_akun` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `batasan_hutang` varchar(255) NOT NULL,
  `hutang_sekarang` varchar(255) NOT NULL,
  `hutang_tersedia` varchar(255) NOT NULL,
  `sisa_hutang` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_vendor` */

insert  into `master_vendor`(`id_vendor`,`nama_vendor`,`jenis_item`,`kategori_vendor`,`alamat_vendor`,`kota_vendor`,`kecamatan_vendor`,`kelurahan_vendor`,`email_vendor`,`nama_bank`,`no_akun`,`no_rekening`,`batasan_hutang`,`hutang_sekarang`,`hutang_tersedia`,`sisa_hutang`,`metode_pembayaran`,`created_at`,`updated_at`,`deleted_at`) values 
('V001','a','a','a','a','a','a','a','admi5n@gmail.com','a','a','342342','343','3424','342','34234','ASDSD','2023-03-03 15:55:00','2023-03-03 15:55:00',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(6,'2014_10_12_000000_create_users_table',1),
(7,'2014_10_12_100000_create_password_reset_tokens_table',1),
(8,'2019_08_19_000000_create_failed_jobs_table',1),
(9,'2019_12_14_000001_create_personal_access_tokens_table',1),
(10,'2023_02_21_022437_create_migrate',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

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

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
