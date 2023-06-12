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
('B001','a','a','a','a','a','a','2023-05-16 03:38:28','2023-05-16 03:38:28',NULL);

/*Table structure for table `master_customer` */

DROP TABLE IF EXISTS `master_customer`;

CREATE TABLE `master_customer` (
  `id_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `npwp_customer` varchar(255) DEFAULT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `provinsi_customer` varchar(255) NOT NULL,
  `kota_customer` varchar(255) NOT NULL,
  `kecamatan_customer` varchar(255) DEFAULT NULL,
  `kelurahan_customer` varchar(255) DEFAULT NULL,
  `kodepos_customer` varchar(255) NOT NULL,
  `notelp_customer` varchar(255) NOT NULL,
  `nofax_customer` varchar(255) DEFAULT NULL,
  `email_customer` varchar(255) NOT NULL,
  `batasan_hutang` varchar(255) DEFAULT NULL,
  `hutang_sekarang` varchar(255) DEFAULT NULL,
  `hutang_tersedia` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_customer` */

insert  into `master_customer`(`id_customer`,`nama_customer`,`npwp_customer`,`alamat_customer`,`provinsi_customer`,`kota_customer`,`kecamatan_customer`,`kelurahan_customer`,`kodepos_customer`,`notelp_customer`,`nofax_customer`,`email_customer`,`batasan_hutang`,`hutang_sekarang`,`hutang_tersedia`,`no_rekening`,`metode_pembayaran`,`created_at`,`updated_at`,`deleted_at`) values 
('CU001','a','a','a','a','a','a','a','a','1','1','1@gmail.com',NULL,'1','1','1','1','2023-05-16 03:22:35','2023-05-16 03:25:13','2023-05-16 03:25:13'),
('CU002','a','a','a','a','a','a','aa','a','1','1','1@gmail.com',NULL,'1','1','123','1','2023-05-16 03:31:26','2023-05-16 03:31:26',NULL);

/*Table structure for table `master_desain` */

DROP TABLE IF EXISTS `master_desain`;

CREATE TABLE `master_desain` (
  `id_desain` varchar(255) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `jenis_box` varchar(255) DEFAULT NULL,
  `link_desain` varchar(255) DEFAULT NULL,
  `pisau` varchar(255) DEFAULT NULL,
  `plat` varchar(255) DEFAULT NULL,
  `status_desain` bigint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_desain`),
  KEY `id_penawaran` (`id_penawaran`),
  CONSTRAINT `master_desain_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_pembayaran` (`id_penawaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_desain` */

insert  into `master_desain`(`id_desain`,`id_penawaran`,`pic`,`jenis_box`,`link_desain`,`pisau`,`plat`,`status_desain`,`created_at`,`updated_at`,`deleted_at`) values 
('DE001','P001','Angga','10x10 cm','asdadasdasdasd','a','qwerty',1,NULL,NULL,NULL),
('DE002','P002','Budi','10x10 cm',NULL,'a','qwer',1,'2023-05-25 04:27:20','2023-05-25 04:27:20',NULL);

/*Table structure for table `master_desaingunting` */

DROP TABLE IF EXISTS `master_desaingunting`;

CREATE TABLE `master_desaingunting` (
  `id_penawaran` varchar(255) DEFAULT NULL,
  `link_desain` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  KEY `id_penawaran` (`id_penawaran`),
  CONSTRAINT `master_desaingunting_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_penawaran` (`id_penawaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_desaingunting` */

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
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_pegawai` */

insert  into `master_pegawai`(`id_pegawai`,`nama_pegawai`,`npwp_pegawai`,`alamat_pegawai`,`provinsi_pegawai`,`kota_pegawai`,`kecamatan_pegawai`,`kelurahan_pegawai`,`kodepos_pegawai`,`notelp_pegawai`,`fax_pegawai`,`email_pegawai`,`kontak_personal`,`password`,`created_at`,`updated_at`,`deleted_at`,`role`) values 
('PG001','Hwe','123','Kabupaten Cikalang no 5','Sulawesi Selatan','Pilih Kota','Sidoarjo','Sidoarjo','3334534','123456','123','superadmin@gmail.com','+123456789','$2y$10$K6gOrc2q7EvzPLsvQuLuLOq6xM75G6LbVv.C2rXGAOEgHJxhonDqG','2023-06-12 14:45:05','2023-06-12 14:45:05',NULL,'Super Admin'),
('PG002','Jef','123','Kabupaten Cikalang no 5','Sulawesi Selatan','Pilih Kota','Surabaya','Sidoarjo','3334534','123456','2','admin@gmail.com','+123456789','$2y$10$qzO/MymEraRcIPqGmqsoxOY09xgqapREMIy5KHF04uUJWODYT0ivW','2023-06-12 14:45:25','2023-06-12 14:45:25',NULL,'Admin'),
('PG003','Al','123','Kabupaten Cikalang no 5','Sulawesi Selatan','Pilih Kota','Surabaya','Sidoarjo','3334534','123456','12','accounting@gmail.com','+123456789','$2y$10$lfKW3rldRRawOWdSusP1AuWXHxSptreCzl.KK2eYFDs0QWa32fq4e','2023-06-12 14:45:44','2023-06-12 14:45:44',NULL,'Accounting');

/*Table structure for table `master_pembayaran` */

DROP TABLE IF EXISTS `master_pembayaran`;

CREATE TABLE `master_pembayaran` (
  `id_pembayaran` varchar(255) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `jenis_box` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `jum_produksi` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `sisa` varchar(255) DEFAULT NULL,
  `termin` date DEFAULT NULL,
  `status_pembayaran` bigint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_penawaran` (`id_penawaran`),
  CONSTRAINT `master_pembayaran_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_penawaran` (`id_penawaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_pembayaran` */

insert  into `master_pembayaran`(`id_pembayaran`,`id_penawaran`,`nama_brand`,`pic`,`jenis_box`,`qty`,`jum_produksi`,`harga`,`pembayaran`,`sisa`,`termin`,`status_pembayaran`,`created_at`,`updated_at`,`deleted_at`) values 
('PB001','P001','Sidu','Angga','10x10 cm','5','10','45000','45000','0','2023-04-10',1,NULL,NULL,NULL),
('PB002','P002','Sidu','Budi','10x10 cm','5','100','45000','45000','0','2023-05-25',1,'2023-05-25 04:26:55','2023-05-25 04:26:55',NULL);

/*Table structure for table `master_pembelianbarang` */

DROP TABLE IF EXISTS `master_pembelianbarang`;

CREATE TABLE `master_pembelianbarang` (
  `tipebox` varchar(255) DEFAULT NULL,
  `namabarang` varchar(255) NOT NULL,
  `jenisbarang` varchar(100) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `diskon` varchar(255) DEFAULT NULL,
  `nett` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`namabarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_pembelianbarang` */

insert  into `master_pembelianbarang`(`tipebox`,`namabarang`,`jenisbarang`,`supplier`,`jumlah`,`harga`,`diskon`,`nett`,`created_at`,`updated_at`,`deleted_at`) values 
('qweqwe','qwe','qwe','qe','123','123',NULL,'123',NULL,'2023-05-16 04:01:31','2023-05-16 04:01:31');

/*Table structure for table `master_penagihan` */

DROP TABLE IF EXISTS `master_penagihan`;

CREATE TABLE `master_penagihan` (
  `id_penagihan` varchar(255) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `jenis_box` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `nominal` varchar(255) DEFAULT NULL,
  `sudah_terbayar` varchar(255) DEFAULT NULL,
  `sisa_hutang` varchar(255) DEFAULT NULL,
  `jumlah_bayar` varchar(255) DEFAULT NULL,
  `status_penagihan` bigint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_penagihan`),
  KEY `id_penawaran` (`id_penawaran`),
  CONSTRAINT `master_penagihan_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_penawaran` (`id_penawaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_penagihan` */

insert  into `master_penagihan`(`id_penagihan`,`id_penawaran`,`pic`,`jenis_box`,`jumlah`,`nominal`,`sudah_terbayar`,`sisa_hutang`,`jumlah_bayar`,`status_penagihan`,`created_at`,`updated_at`,`deleted_at`) values 
('PH001','P001','Angga','10x10 cm','5','45000','20000','25000','25000',-1,'2023-05-30 04:51:01','2023-05-30 04:51:01',NULL);

/*Table structure for table `master_penawaran` */

DROP TABLE IF EXISTS `master_penawaran`;

CREATE TABLE `master_penawaran` (
  `id_penawaran` varchar(255) NOT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `jenis_box` varchar(255) DEFAULT NULL,
  `panjang` varchar(255) DEFAULT NULL,
  `lebar` varchar(255) DEFAULT NULL,
  `tinggi` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `jum_produksi` varchar(255) DEFAULT NULL,
  `harga_satuan` varchar(255) DEFAULT NULL,
  `harga_satuan_terakhir` varchar(255) DEFAULT NULL,
  `diskon` varchar(255) DEFAULT NULL,
  `net` varchar(255) DEFAULT NULL,
  `harga_net_terakhir` varchar(255) DEFAULT NULL,
  `status_penawaran` bigint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_penawaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_penawaran` */

insert  into `master_penawaran`(`id_penawaran`,`nama_brand`,`pic`,`jenis_box`,`panjang`,`lebar`,`tinggi`,`qty`,`jum_produksi`,`harga_satuan`,`harga_satuan_terakhir`,`diskon`,`net`,`harga_net_terakhir`,`status_penawaran`,`created_at`,`updated_at`,`deleted_at`) values 
('P001','Sidu','Angga','10x10 cm','12','12','12','5','10','10000','0','10','45000',NULL,1,NULL,NULL,NULL),
('P002','Sidu','Budi','10x10 cm','12','12','12','10','100','2000','10000','10','18000',NULL,1,'2023-05-30 02:22:38','2023-05-30 02:22:38',NULL);

/*Table structure for table `master_pengiriman` */

DROP TABLE IF EXISTS `master_pengiriman`;

CREATE TABLE `master_pengiriman` (
  `no_spk` varchar(255) NOT NULL,
  `no_surat_jalan` varchar(255) DEFAULT NULL,
  `no_kendaraan` varchar(255) DEFAULT NULL,
  `nama_pengiriman` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `alamat_penerima` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`no_spk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_pengiriman` */

insert  into `master_pengiriman`(`no_spk`,`no_surat_jalan`,`no_kendaraan`,`nama_pengiriman`,`nama_penerima`,`alamat_penerima`,`qty`,`tanggal`) values 
('SP001','Los angeles','1','asd','12 8 Let It Be','Los angeles','12','2023-05-16');

/*Table structure for table `master_spk` */

DROP TABLE IF EXISTS `master_spk`;

CREATE TABLE `master_spk` (
  `no_spk` varchar(255) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `jenis_box` varchar(255) DEFAULT NULL,
  `jum_produksi` varchar(255) DEFAULT NULL,
  `link_desain` varchar(255) DEFAULT NULL,
  `pisau` varchar(255) DEFAULT NULL,
  `plat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_spk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_spk` */

insert  into `master_spk`(`no_spk`,`id_penawaran`,`pic`,`jenis_box`,`jum_produksi`,`link_desain`,`pisau`,`plat`) values 
('SP001','P001','Angga','10x10 cm','10','asdadasdasdasd','a','qwerty'),
('SP002','P001','Angga','10x10 cm','10','asdadasdasdasd','a','qwerty');

/*Table structure for table `master_stokbarang` */

DROP TABLE IF EXISTS `master_stokbarang`;

CREATE TABLE `master_stokbarang` (
  `namabarang` varchar(255) NOT NULL,
  `jenisbarang` varchar(20) DEFAULT NULL,
  `jumlahmasuk` varchar(30) DEFAULT NULL,
  `hargasatuan` varchar(255) DEFAULT NULL,
  `hargatotal` varchar(255) DEFAULT NULL,
  `lokasibarang` varchar(10) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggalmasuk` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`namabarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_stokbarang` */

insert  into `master_stokbarang`(`namabarang`,`jenisbarang`,`jumlahmasuk`,`hargasatuan`,`hargatotal`,`lokasibarang`,`keterangan`,`tanggalmasuk`,`created_at`,`updated_at`,`deleted_at`) values 
('123e21eq','Pisau','12','2000','24000','wsdeq','dws','2023-05-16 04:00:41',NULL,NULL,NULL),
('a','Pisau',NULL,NULL,NULL,NULL,'qwque',NULL,NULL,NULL,NULL),
('q','Pisau',NULL,NULL,NULL,NULL,'123123',NULL,NULL,NULL,NULL),
('qwer','Plat',NULL,NULL,NULL,NULL,'qwe',NULL,NULL,NULL,NULL),
('qwerty','Plat',NULL,NULL,NULL,NULL,'qweriwqajd',NULL,NULL,NULL,NULL);

/*Table structure for table `master_supplier` */

DROP TABLE IF EXISTS `master_supplier`;

CREATE TABLE `master_supplier` (
  `id_supplier` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `npwp_supplier` varchar(255) DEFAULT NULL,
  `alamat_supplier` varchar(255) NOT NULL,
  `provinsi_supplier` varchar(255) NOT NULL,
  `kota_supplier` varchar(255) NOT NULL,
  `kecamatan_supplier` varchar(255) DEFAULT NULL,
  `kelurahan_supplier` varchar(255) DEFAULT NULL,
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
('S001','Umbrella Corporation','123','Kabupaten Cikalang no 5','Sulawesi Selatan','Surabaya','Surabaya','Surabaya','5','123456','lalaland@gmail.com','Pisau','Bca','123','2023-05-16 03:23:20','2023-05-16 03:29:24','2023-05-16 03:29:24'),
('S002','a','a','a','a','a','a','a','a','23','asd@gmail.com','sda','sad','ad','2023-06-06 06:29:47','2023-06-06 06:49:25','2023-06-06 06:49:25'),
('S003','q','q','q','q','q','q','q','q','1','1@gmail.com','q','q','q','2023-06-06 06:49:48','2023-06-06 06:49:48',NULL);

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
('V001','Sidu','Kertas','Kertas','asd','asd','asd','asd','sidu@gmail.com','bca','123','12334234234','324234234','324234234','34234234','324234234','transfer','2023-03-21 04:21:43','2023-03-21 04:21:43',NULL),
('V002','Kiki','Kertas','Kertas','asddsdas','aasdasd','sadasdasd','sdasdasd','kiki@gmail.com','bca','123','32423423434','234234234','344543543','53453453','453453453','transfer','2023-03-21 04:21:43','2023-05-16 03:55:07','2023-05-16 03:55:07');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_02_21_022437_create_migrate',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `permission` */

DROP TABLE IF EXISTS `permission`;

CREATE TABLE `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daftar_berita` varchar(255) DEFAULT NULL,
  `admin` bigint(1) DEFAULT NULL,
  `accounting` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permission` */

insert  into `permission`(`id`,`daftar_berita`,`admin`,`accounting`) values 
(1,'Master Pegawai',0,1),
(2,'Master Customer',0,1),
(3,'Master Supplier',0,1),
(4,'Master Box',0,1),
(5,'Master Vendor',0,1),
(6,'Permission Role',0,1),
(7,'Stok Barang',0,1),
(8,'Pembelian Barang',0,1),
(9,'Masuk/Keluar Barang',0,1),
(10,'Stok Barang Jadi',0,1),
(11,'Form Penawaran',0,1),
(12,'Form DP/Pembayaran',0,1),
(13,'Form Desain, Pisau, Plat',0,1),
(14,'Surat Perintah Kerja',0,1),
(15,'Pengiriman Barang',0,1),
(16,'Penagihan/Invoicing',0,1),
(17,'Laporan Login',0,1),
(18,'Laporan Transaksi',0,1),
(19,'Laporan Keuangan',0,1);

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

/*Table structure for table `processing1` */

DROP TABLE IF EXISTS `processing1`;

CREATE TABLE `processing1` (
  `id_proses1` int(11) NOT NULL AUTO_INCREMENT,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`id_proses1`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `processing1` */

insert  into `processing1`(`id_proses1`,`id_penawaran`,`nama_brand`,`proses`,`status`) values 
(1,'P001','Sidu','Kertas',0),
(2,'P001','Sidu','Tinta',0),
(3,'P001','Sidu','Laminasi',0),
(4,'P002','Sidu','Laminasi',0),
(5,'P002','Sidu','Plong',0),
(6,'P002','Sidu','Hotprint',0);

/*Table structure for table `processing2` */

DROP TABLE IF EXISTS `processing2`;

CREATE TABLE `processing2` (
  `id_proses2` int(11) NOT NULL AUTO_INCREMENT,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`id_proses2`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `processing2` */

insert  into `processing2`(`id_proses2`,`id_penawaran`,`nama_brand`,`proses`,`status`) values 
(10,'P001','Sidu','Kertas',0);

/*Table structure for table `processing3` */

DROP TABLE IF EXISTS `processing3`;

CREATE TABLE `processing3` (
  `id_proses3` int(11) NOT NULL AUTO_INCREMENT,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`id_proses3`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `processing3` */

insert  into `processing3`(`id_proses3`,`id_penawaran`,`nama_brand`,`proses`,`status`) values 
(2,'P001','Sidu','Kertas',0);

/*Table structure for table `processing4` */

DROP TABLE IF EXISTS `processing4`;

CREATE TABLE `processing4` (
  `id_proses4` int(11) NOT NULL AUTO_INCREMENT,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`id_proses4`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `processing4` */

insert  into `processing4`(`id_proses4`,`id_penawaran`,`nama_brand`,`proses`,`status`) values 
(2,'P001','Sidu','Kertas',0);

/*Table structure for table `processing5` */

DROP TABLE IF EXISTS `processing5`;

CREATE TABLE `processing5` (
  `id_proses5` int(11) NOT NULL AUTO_INCREMENT,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`id_proses5`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `processing5` */

insert  into `processing5`(`id_proses5`,`id_penawaran`,`nama_brand`,`proses`,`status`) values 
(3,'P001','Sidu','Kertas',0);

/*Table structure for table `spk_processing1` */

DROP TABLE IF EXISTS `spk_processing1`;

CREATE TABLE `spk_processing1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_proses` varchar(255) DEFAULT NULL,
  `jenis_proses` varchar(255) DEFAULT NULL,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `harga_satuan` varchar(255) DEFAULT NULL,
  `harga_total` varchar(255) DEFAULT NULL,
  `harga_satuan_sebelumnya` varchar(255) DEFAULT NULL,
  `harga_total_sebelumnya` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  `no_spk` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `spk_processing1` */

insert  into `spk_processing1`(`id`,`id_proses`,`jenis_proses`,`nama_vendor`,`jumlah`,`harga_satuan`,`harga_total`,`harga_satuan_sebelumnya`,`harga_total_sebelumnya`,`status`,`no_spk`) values 
(1,'1','Kertas','Sidu','10','10000','100000','0','0',1,'SP001'),
(2,'2','Tinta','Sidu','10','5000','50000','0','0',1,'SP001'),
(3,'3','Laminasi','Sidu','5','3000','15000','0','0',1,'SP001'),
(4,'1','Kertas','Sidu','0','0','0','0','0',1,'SP002'),
(5,'2','Tinta','Sidu','0','0','0','0','0',1,'SP002'),
(6,'3','Laminasi','Sidu','0','0','0','0','0',1,'SP002');

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
