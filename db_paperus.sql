-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 09.42
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paperus`
--
CREATE DATABASE IF NOT EXISTS `db_paperus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_paperus`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Struktur dari tabel `master_box`
--

DROP TABLE IF EXISTS `master_box`;
CREATE TABLE `master_box` (
  `id_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lebar_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_box`
--

INSERT INTO `master_box` (`id_box`, `tipe_box`, `nama_box`, `panjang_box`, `lebar_box`, `tinggi_box`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('B001', 'a', 'a', 'a', 'a', 'a', 'a', '2023-05-15 20:38:28', '2023-05-15 20:38:28', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_customer`
--

DROP TABLE IF EXISTS `master_customer`;
CREATE TABLE `master_customer` (
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nofax_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batasan_hutang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hutang_sekarang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hutang_tersedia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_customer`
--

INSERT INTO `master_customer` (`id_customer`, `nama_customer`, `npwp_customer`, `alamat_customer`, `provinsi_customer`, `kota_customer`, `kecamatan_customer`, `kelurahan_customer`, `kodepos_customer`, `notelp_customer`, `nofax_customer`, `email_customer`, `batasan_hutang`, `hutang_sekarang`, `hutang_tersedia`, `no_rekening`, `metode_pembayaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
('CU001', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '1', '1', '1@gmail.com', NULL, '1', '1', '1', '1', '2023-05-15 20:22:35', '2023-05-15 20:25:13', '2023-05-15 20:25:13'),
('CU002', 'a', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', '1', '1', '1@gmail.com', NULL, '1', '1', '123', '1', '2023-05-15 20:31:26', '2023-05-15 20:31:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_desain`
--

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_desain`
--

INSERT INTO `master_desain` (`id_desain`, `id_penawaran`, `pic`, `jenis_box`, `link_desain`, `pisau`, `plat`, `status_desain`, `created_at`, `updated_at`, `deleted_at`) VALUES
('DE001', 'P001', 'Angga', '10x10 cm', 'asdadasdasdasd', 'a', 'qwerty', 1, NULL, NULL, NULL),
('DE002', 'P002', 'Budi', '10x10 cm', NULL, 'a', 'qwer', 1, '2023-05-24 21:27:20', '2023-05-24 21:27:20', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_desaingunting`
--

DROP TABLE IF EXISTS `master_desaingunting`;
CREATE TABLE `master_desaingunting` (
  `id_penawaran` varchar(255) DEFAULT NULL,
  `link_desain` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pegawai`
--

DROP TABLE IF EXISTS `master_pegawai`;
CREATE TABLE `master_pegawai` (
  `id_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_personal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_pegawai`
--

INSERT INTO `master_pegawai` (`id_pegawai`, `nama_pegawai`, `npwp_pegawai`, `alamat_pegawai`, `provinsi_pegawai`, `kota_pegawai`, `kecamatan_pegawai`, `kelurahan_pegawai`, `kodepos_pegawai`, `notelp_pegawai`, `fax_pegawai`, `email_pegawai`, `kontak_personal`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
('P001', 'Hwe', '231312', 'Surabaya', 'Jawa Timur', 'Bandung', 'Sidoarjo', 'Sidoarjo', '61213', '12345', '12345', 'lala@gmail.com', '+123456789', '$2y$10$IZYmK/V56VjFYPh8lPkrr.nhVE7MlFjjFThig4rkqSfUfpGH8zjzC', '2023-05-08 20:48:33', '2023-05-15 20:36:10', '2023-05-15 20:36:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pembayaran`
--

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pembayaran`
--

INSERT INTO `master_pembayaran` (`id_pembayaran`, `id_penawaran`, `nama_brand`, `pic`, `jenis_box`, `qty`, `jum_produksi`, `harga`, `pembayaran`, `sisa`, `termin`, `status_pembayaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
('PB001', 'P001', 'Sidu', 'Angga', '10x10 cm', '5', '10', '45000', '45000', '0', '2023-04-10', 1, NULL, NULL, NULL),
('PB002', 'P002', 'Sidu', 'Budi', '10x10 cm', '5', '100', '45000', '45000', '0', '2023-05-25', 1, '2023-05-24 21:26:55', '2023-05-24 21:26:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pembelianbarang`
--

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pembelianbarang`
--

INSERT INTO `master_pembelianbarang` (`tipebox`, `namabarang`, `jenisbarang`, `supplier`, `jumlah`, `harga`, `diskon`, `nett`, `created_at`, `updated_at`, `deleted_at`) VALUES
('qweqwe', 'qwe', 'qwe', 'qe', '123', '123', NULL, '123', NULL, '2023-05-15 21:01:31', '2023-05-15 21:01:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_penawaran`
--

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_penawaran`
--

INSERT INTO `master_penawaran` (`id_penawaran`, `nama_brand`, `pic`, `jenis_box`, `panjang`, `lebar`, `tinggi`, `qty`, `jum_produksi`, `harga_satuan`, `harga_satuan_terakhir`, `diskon`, `net`, `harga_net_terakhir`, `status_penawaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
('P001', 'Sidu', 'Angga', '10x10 cm', '12', '12', '12', '5', '10', '10000', '0', '10', '45000', NULL, 1, NULL, NULL, NULL),
('P002', 'Sidu', 'Budi', '10x10 cm', '12', '12', '12', '5', '100', '10000', '10000', '10', '45000', NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pengiriman`
--

DROP TABLE IF EXISTS `master_pengiriman`;
CREATE TABLE `master_pengiriman` (
  `no_spk` varchar(255) NOT NULL,
  `no_surat_jalan` varchar(255) DEFAULT NULL,
  `no_kendaraan` varchar(255) DEFAULT NULL,
  `nama_pengiriman` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `alamat_penerima` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pengiriman`
--

INSERT INTO `master_pengiriman` (`no_spk`, `no_surat_jalan`, `no_kendaraan`, `nama_pengiriman`, `nama_penerima`, `alamat_penerima`, `qty`, `tanggal`) VALUES
('SP001', 'Los angeles', '1', 'asd', '12 8 Let It Be', 'Los angeles', '12', '2023-05-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_spk`
--

DROP TABLE IF EXISTS `master_spk`;
CREATE TABLE `master_spk` (
  `no_spk` varchar(255) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `jenis_box` varchar(255) DEFAULT NULL,
  `jum_produksi` varchar(255) DEFAULT NULL,
  `link_desain` varchar(255) DEFAULT NULL,
  `pisau` varchar(255) DEFAULT NULL,
  `plat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_spk`
--

INSERT INTO `master_spk` (`no_spk`, `id_penawaran`, `pic`, `jenis_box`, `jum_produksi`, `link_desain`, `pisau`, `plat`) VALUES
('SP001', 'P001', 'Angga', '10x10 cm', '10', 'asdadasdasdasd', 'a', 'qwerty'),
('SP002', 'P001', 'Angga', '10x10 cm', '10', 'asdadasdasdasd', 'a', 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_stokbarang`
--

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_stokbarang`
--

INSERT INTO `master_stokbarang` (`namabarang`, `jenisbarang`, `jumlahmasuk`, `hargasatuan`, `hargatotal`, `lokasibarang`, `keterangan`, `tanggalmasuk`, `created_at`, `updated_at`, `deleted_at`) VALUES
('123e21eq', 'Pisau', '12', '2000', '24000', 'wsdeq', 'dws', '2023-05-16 04:00:41', NULL, NULL, NULL),
('a', 'Pisau', NULL, NULL, NULL, NULL, 'qwque', NULL, NULL, NULL, NULL),
('q', 'Pisau', NULL, NULL, NULL, NULL, '123123', NULL, NULL, NULL, NULL),
('qwer', 'Plat', NULL, NULL, NULL, NULL, 'qwe', NULL, NULL, NULL, NULL),
('qwerty', 'Plat', NULL, NULL, NULL, NULL, 'qweriwqajd', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_supplier`
--

DROP TABLE IF EXISTS `master_supplier`;
CREATE TABLE `master_supplier` (
  `id_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_supplier`
--

INSERT INTO `master_supplier` (`id_supplier`, `nama_supplier`, `npwp_supplier`, `alamat_supplier`, `provinsi_supplier`, `kota_supplier`, `kecamatan_supplier`, `kelurahan_supplier`, `kodepos_supplier`, `notelp_supplier`, `email_supplier`, `item`, `nama_bank`, `no_rekening`, `created_at`, `updated_at`, `deleted_at`) VALUES
('S001', 'Umbrella Corporation', '123', 'Kabupaten Cikalang no 5', 'Sulawesi Selatan', 'Surabaya', 'Surabaya', 'Surabaya', '5', '123456', 'lalaland@gmail.com', 'Pisau', 'Bca', '123', '2023-05-15 20:23:20', '2023-05-15 20:29:24', '2023-05-15 20:29:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_vendor`
--

DROP TABLE IF EXISTS `master_vendor`;
CREATE TABLE `master_vendor` (
  `id_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batasan_hutang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hutang_sekarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hutang_tersedia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisa_hutang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_vendor`
--

INSERT INTO `master_vendor` (`id_vendor`, `nama_vendor`, `jenis_item`, `kategori_vendor`, `alamat_vendor`, `kota_vendor`, `kecamatan_vendor`, `kelurahan_vendor`, `email_vendor`, `nama_bank`, `no_akun`, `no_rekening`, `batasan_hutang`, `hutang_sekarang`, `hutang_tersedia`, `sisa_hutang`, `metode_pembayaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
('V001', 'Sidu', 'Kertas', 'Kertas', 'asd', 'asd', 'asd', 'asd', 'sidu@gmail.com', 'bca', '123', '12334234234', '324234234', '324234234', '34234234', '324234234', 'transfer', '2023-03-20 21:21:43', '2023-03-20 21:21:43', NULL),
('V002', 'Kiki', 'Kertas', 'Kertas', 'asddsdas', 'aasdasd', 'sadasdasd', 'sdasdasd', 'kiki@gmail.com', 'bca', '123', '32423423434', '234234234', '344543543', '53453453', '453453453', 'transfer', '2023-03-20 21:21:43', '2023-05-15 20:55:07', '2023-05-15 20:55:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_21_022437_create_migrate', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `processing1`
--

DROP TABLE IF EXISTS `processing1`;
CREATE TABLE `processing1` (
  `id_proses1` int(11) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `processing1`
--

INSERT INTO `processing1` (`id_proses1`, `id_penawaran`, `nama_brand`, `proses`, `status`) VALUES
(1, 'P001', 'Sidu', 'Kertas', 0),
(2, 'P001', 'Sidu', 'Tinta', 0),
(3, 'P001', 'Sidu', 'Laminasi', 0),
(4, 'P002', 'Sidu', 'Laminasi', 0),
(5, 'P002', 'Sidu', 'Plong', 0),
(6, 'P002', 'Sidu', 'Hotprint', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `processing2`
--

DROP TABLE IF EXISTS `processing2`;
CREATE TABLE `processing2` (
  `id_proses2` int(11) NOT NULL,
  `id_penawaran` varchar(255) DEFAULT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_processing1`
--

DROP TABLE IF EXISTS `spk_processing1`;
CREATE TABLE `spk_processing1` (
  `id` int(255) NOT NULL,
  `id_proses` varchar(255) DEFAULT NULL,
  `jenis_proses` varchar(255) DEFAULT NULL,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `harga_satuan` varchar(255) DEFAULT NULL,
  `harga_total` varchar(255) DEFAULT NULL,
  `harga_satuan_sebelumnya` varchar(255) DEFAULT NULL,
  `harga_total_sebelumnya` varchar(255) DEFAULT NULL,
  `status` bigint(1) DEFAULT NULL,
  `no_spk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spk_processing1`
--

INSERT INTO `spk_processing1` (`id`, `id_proses`, `jenis_proses`, `nama_vendor`, `jumlah`, `harga_satuan`, `harga_total`, `harga_satuan_sebelumnya`, `harga_total_sebelumnya`, `status`, `no_spk`) VALUES
(1, '1', 'Kertas', 'Sidu', '10', '10000', '100000', '0', '0', 1, 'SP001'),
(2, '2', 'Tinta', 'Sidu', '10', '5000', '50000', '0', '0', 1, 'SP001'),
(3, '3', 'Laminasi', 'Sidu', '5', '3000', '15000', '0', '0', 1, 'SP001'),
(4, '1', 'Kertas', 'Sidu', '0', '0', '0', '0', '0', 1, 'SP002'),
(5, '2', 'Tinta', 'Sidu', '0', '0', '0', '0', '0', 1, 'SP002'),
(6, '3', 'Laminasi', 'Sidu', '0', '0', '0', '0', '0', 1, 'SP002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `master_box`
--
ALTER TABLE `master_box`
  ADD PRIMARY KEY (`id_box`);

--
-- Indeks untuk tabel `master_customer`
--
ALTER TABLE `master_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `master_desain`
--
ALTER TABLE `master_desain`
  ADD PRIMARY KEY (`id_desain`),
  ADD KEY `id_penawaran` (`id_penawaran`);

--
-- Indeks untuk tabel `master_desaingunting`
--
ALTER TABLE `master_desaingunting`
  ADD KEY `id_penawaran` (`id_penawaran`);

--
-- Indeks untuk tabel `master_pegawai`
--
ALTER TABLE `master_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `master_pembayaran`
--
ALTER TABLE `master_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_penawaran` (`id_penawaran`);

--
-- Indeks untuk tabel `master_pembelianbarang`
--
ALTER TABLE `master_pembelianbarang`
  ADD PRIMARY KEY (`namabarang`);

--
-- Indeks untuk tabel `master_penawaran`
--
ALTER TABLE `master_penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indeks untuk tabel `master_pengiriman`
--
ALTER TABLE `master_pengiriman`
  ADD PRIMARY KEY (`no_spk`);

--
-- Indeks untuk tabel `master_spk`
--
ALTER TABLE `master_spk`
  ADD PRIMARY KEY (`no_spk`);

--
-- Indeks untuk tabel `master_stokbarang`
--
ALTER TABLE `master_stokbarang`
  ADD PRIMARY KEY (`namabarang`);

--
-- Indeks untuk tabel `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `master_vendor`
--
ALTER TABLE `master_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `processing1`
--
ALTER TABLE `processing1`
  ADD PRIMARY KEY (`id_proses1`);

--
-- Indeks untuk tabel `processing2`
--
ALTER TABLE `processing2`
  ADD PRIMARY KEY (`id_proses2`);

--
-- Indeks untuk tabel `spk_processing1`
--
ALTER TABLE `spk_processing1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `processing1`
--
ALTER TABLE `processing1`
  MODIFY `id_proses1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `processing2`
--
ALTER TABLE `processing2`
  MODIFY `id_proses2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spk_processing1`
--
ALTER TABLE `spk_processing1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_desain`
--
ALTER TABLE `master_desain`
  ADD CONSTRAINT `master_desain_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_pembayaran` (`id_penawaran`);

--
-- Ketidakleluasaan untuk tabel `master_desaingunting`
--
ALTER TABLE `master_desaingunting`
  ADD CONSTRAINT `master_desaingunting_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_penawaran` (`id_penawaran`);

--
-- Ketidakleluasaan untuk tabel `master_pembayaran`
--
ALTER TABLE `master_pembayaran`
  ADD CONSTRAINT `master_pembayaran_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `master_penawaran` (`id_penawaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
