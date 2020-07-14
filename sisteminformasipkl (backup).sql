-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 07:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasipkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggarans`
--

CREATE TABLE `anggarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '2',
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporananggaran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggarans`
--

INSERT INTO `anggarans` (`id`, `status_id`, `judul`, `laporananggaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'anggaran1', 'public/files/66gPWEKgmMIRojjUqmo9urfwFCZZAGszA3vAd26y.pdf', '2019-12-23 01:56:18', '2019-12-28 02:49:16'),
(2, 1, 'anggaran 2', 'public/laporan_anggaran/2loEBpnt4qrcYFpeh8czT6W8ZHpL9kiPxlH8Wg3X.pdf', '2020-02-17 22:39:51', '2020-03-31 08:15:49'),
(3, 2, 'anggaran test done', 'public/laporan_anggaran/h1NYQ8Vqooogj2LW6nqJXVYKmDIcsc0gRc17w1UX.pdf', '2020-02-25 08:18:16', '2020-03-31 08:32:42'),
(4, 2, 'hosting', 'public/laporan_anggaran/TH8MK9HPRZQ7RoH4MgMirXrKHCVXeywMwc5qVZCr.pdf', '2020-03-31 08:34:05', '2020-03-31 08:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `namadivisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `namadivisi`) VALUES
(1, 'SDM & Humas'),
(2, 'Sistem Informasi dan Jaringan'),
(3, 'Keuangan'),
(4, 'Managerial Operasi Unit 1 - 4'),
(5, 'Managerial Operasi Unit 5 - 7'),
(6, 'Managerial Pemeliharaan Unit 1 - 4'),
(7, 'Managerial Pemeliharaan Unit 5 - 7'),
(8, 'Belum ditentukan');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agenda` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `role_id`, `divisi_id`, `priority`, `tanggal`, `lokasi`, `agenda`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 1, '2020-01-28 09:00:00', 'Aula ADB', 'Pembukaan', NULL, NULL),
(3, 5, 2, 2, 1, '2020-01-30 13:00:00', 'Unit 4-7', 'Intall Certificate', NULL, NULL),
(7, 2, 1, 2, 3, '2020-01-29 07:30:00', 'Gedung F Lt. 3', 'Test Event 3', '2020-01-27 09:48:49', '2020-01-27 09:48:49'),
(13, 2, 1, 2, 1, '2020-01-31 15:00:00', 'Gedung F Lt. 3', 'LAST TRY', '2020-01-27 10:53:49', '2020-01-27 10:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `kuotas`
--

CREATE TABLE `kuotas` (
  `id` int(11) NOT NULL,
  `divisi_id` int(50) NOT NULL,
  `jumlahkuota` int(50) NOT NULL,
  `statuskuota_id` int(50) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuotas`
--

INSERT INTO `kuotas` (`id`, `divisi_id`, `jumlahkuota`, `statuskuota_id`, `created_at`, `updated_at`) VALUES
(4, 1, 2, 1, '2020-01-03 10:19:02', '2020-01-03 10:19:02'),
(5, 4, 4, 1, '2020-01-03 10:19:25', '2020-01-03 10:19:25'),
(6, 5, 4, 1, '2020-01-03 10:19:44', '2020-01-03 10:19:44'),
(7, 3, 2, 1, '2020-01-03 10:20:02', '2020-01-03 10:20:02'),
(8, 6, 4, 1, '2020-01-03 10:20:33', '2020-01-03 10:20:33'),
(9, 7, 4, 1, '2020-01-03 10:20:54', '2020-01-03 10:20:54'),
(11, 2, 6, 1, '2020-06-07 11:02:27', '2020-07-13 12:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `laporanpkls`
--

CREATE TABLE `laporanpkls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftar_id` bigint(20) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporanpkls`
--

INSERT INTO `laporanpkls` (`id`, `pendaftar_id`, `judul`, `laporan`, `created_at`, `updated_at`) VALUES
(13, 6, 'Praktik Kerja Lapangan Vol. 2', 'public/laporan_pkl/JlrOceMu1aOPfJI4ZdRqM73cx9ArE1fy2CM3HllY.bin', '2020-03-01 11:11:04', '2020-06-27 15:45:43'),
(16, 6, 'UAT.docx', 'public/laporan_pkl/Vuk1PHh8pCflsktzVATFrObDIFsh7OgEkySjlhT9.docx', '2020-03-01 11:17:41', '2020-03-01 11:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `logbooks`
--

CREATE TABLE `logbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logbooks`
--

INSERT INTO `logbooks` (`id`, `pendaftar_id`, `status`, `tanggal`, `lokasi`, `uraian`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '2019-12-23', 'Gedung F Lt. 3', 'coba logbook', '2019-12-30 03:10:00', '2019-12-30 03:10:00'),
(2, 6, 0, '2019-12-26', 'Gedung F Lt. 1', 'coba logbook 2.1', '2019-12-30 04:00:32', '2020-02-27 17:47:28'),
(4, 6, 0, '2020-02-28', 'Gedung F Lt. 3', 'coba logbook', '2020-02-27 17:52:23', '2020-02-27 17:52:23');

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
(2, '2020_01_26_040758_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `penulisanlaporan` int(11) DEFAULT NULL,
  `penguasaanmateri` int(11) DEFAULT NULL,
  `penyelesaianmakalah` int(11) DEFAULT NULL,
  `kemampuananalisa` int(11) DEFAULT NULL,
  `tanggungjawab` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `sikap` int(11) DEFAULT NULL,
  `pengetahuan` int(11) DEFAULT NULL,
  `inisiatif` int(11) DEFAULT NULL,
  `kerjasama` int(11) DEFAULT NULL,
  `kepemimpinan` int(11) DEFAULT NULL,
  `potensi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `pendaftar_id`, `penulisanlaporan`, `penguasaanmateri`, `penyelesaianmakalah`, `kemampuananalisa`, `tanggungjawab`, `kehadiran`, `sikap`, `pengetahuan`, `inisiatif`, `kerjasama`, `kepemimpinan`, `potensi`, `created_at`, `updated_at`) VALUES
(1, 6, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, '2020-03-16 08:36:53', '2020-03-16 08:36:53'),
(3, 1, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, '2020-07-12 13:23:29', '2020-07-12 13:23:29'),
(5, 37, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, '2020-07-12 13:35:51', '2020-07-12 13:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('065b46c4-e535-4cb3-bea8-48cfcccc4ffe', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:14:12', '2020-07-13 12:14:12'),
('09a25fb1-c3f7-4d5f-adf1-68d3873ddcf8', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 10\"}}', NULL, '2020-07-13 12:01:03', '2020-07-13 12:01:03'),
('0e1054e0-3f82-4224-b810-068ef327b69b', 'App\\Notifications\\Mentor\\NotifikasiPengajuanKuota', 'App\\User', 5, '{\"message\":{\"header\":\"Pengajuan mentor & kouta PKL\",\"message\":\"Andi Rosadi mengajukan anda sebagai mentor PKL pada divisi Sistem Informasi dan Jaringan\",\"info\":\"jumlah kuota : 5\"}}', NULL, '2020-06-07 11:02:27', '2020-06-07 11:02:27'),
('13d03147-23b8-4e58-939a-183c8f2cad5a', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-12 12:27:14', '2020-07-12 12:27:14'),
('19f1837a-9d10-4038-ac85-29c415b298a6', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 10\"}}', NULL, '2020-07-13 12:01:03', '2020-07-13 12:01:03'),
('2a4431b4-5070-44ca-a74b-29a726139caf', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 2, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama Meli\",\"info\":\"Mendaftar pada We 41 yy\"}}', NULL, '2020-07-08 13:41:27', '2020-07-08 13:41:27'),
('32463776-c46e-460a-804d-70cb99bb6437', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:10:04', '2020-07-13 12:10:04'),
('3731b594-f8fc-431b-949c-3f013c4158d8', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 15, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama Meli\",\"info\":\"Mendaftar pada We 41 yy\"}}', NULL, '2020-07-08 13:41:27', '2020-07-08 13:41:27'),
('3c12a819-fce6-4137-a2a6-6a301ac7f32e', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-12 12:27:14', '2020-07-12 12:27:14'),
('407bdc48-e6b4-43f1-98e5-09d358c7267a', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 6\"}}', NULL, '2020-07-13 12:25:16', '2020-07-13 12:25:16'),
('4293e963-7144-410e-8019-e4f0ba24a528', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 8\"}}', NULL, '2020-07-12 13:02:31', '2020-07-12 13:02:31'),
('4bc9ab08-fb1e-4c8d-9603-052ade7b6660', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 2, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama Dimas\",\"info\":\"Mendaftar pada Th 17 yy\"}}', NULL, '2020-07-09 00:18:33', '2020-07-09 00:18:33'),
('5238a708-28d0-4eb8-9a64-5b58b919fc9c', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 5\"}}', NULL, '2020-06-07 11:04:37', '2020-06-07 11:04:37'),
('5296e84f-18e4-406c-bd8c-84abf70cc6ec', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 8\"}}', NULL, '2020-07-12 12:20:39', '2020-07-12 12:20:39'),
('62fe5c19-97ae-4cb8-9191-507edc08762e', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 5\"}}', NULL, '2020-06-07 11:04:37', '2020-06-07 11:04:37'),
('633dcde5-2033-4634-baad-1a7ee63b633e', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 6\"}}', NULL, '2020-07-13 12:25:15', '2020-07-13 12:25:15'),
('69782ad3-c949-413a-848b-926ea8d5a472', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-12 13:01:20', '2020-07-12 13:01:20'),
('6efe9155-019f-45fc-9757-cf39d7b224fa', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:07:03', '2020-07-13 12:07:03'),
('73396796-cb8a-4d95-936d-fbbadf296a2a', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 8\"}}', NULL, '2020-07-12 12:20:39', '2020-07-12 12:20:39'),
('809017e0-c1fa-4653-8f38-c4bad10fdaeb', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:10:04', '2020-07-13 12:10:04'),
('9b0145b2-a991-4ce8-90c7-ac93499f1131', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:24:28', '2020-07-13 12:24:28'),
('9b9724e7-3bc8-4142-9aa1-21d9bb3c0d02', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 2, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama Oddy\",\"info\":\"Mendaftar pada Mo 50 yy\"}}', NULL, '2020-07-13 11:50:54', '2020-07-13 11:50:54'),
('9dcfc4d7-2028-4436-a8b9-806dac2a97b1', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-12 13:01:20', '2020-07-12 13:01:20'),
('bd89cefd-47a8-4189-9419-1cc24036844d', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 8\"}}', NULL, '2020-07-12 13:02:31', '2020-07-12 13:02:31'),
('bef60ed0-7f93-4199-9dfc-250e68eaead2', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 15, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama Dimas\",\"info\":\"Mendaftar pada Th 17 yy\"}}', NULL, '2020-07-09 00:18:34', '2020-07-09 00:18:34'),
('bfd30018-cf2c-4c53-9aea-5818d36be97c', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:14:12', '2020-07-13 12:14:12'),
('c44921be-eab7-4bf2-a2af-72f390f17dc2', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:24:28', '2020-07-13 12:24:28'),
('cb2edc1a-2436-417b-a55c-3451f594e687', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 6\"}}', NULL, '2020-07-13 12:29:42', '2020-07-13 12:29:42'),
('cd5aeadb-48ac-4cfd-990c-5b5d7452d451', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 2, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama sunny\",\"info\":\"Mendaftar pada Su 45 yy\"}}', NULL, '2020-06-07 12:45:10', '2020-06-07 12:45:10'),
('d2cb8389-2e43-4566-b432-4a3882f33564', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 15, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama Oddy\",\"info\":\"Mendaftar pada Mo 50 yy\"}}', NULL, '2020-07-13 11:50:54', '2020-07-13 11:50:54'),
('e02cc3b8-bb0d-4dbe-a1dc-5863df298d2d', 'App\\Notifications\\Admin\\NotifikasiPesertaBaru', 'App\\User', 15, '{\"message\":{\"header\":\"Peserta PKL\",\"message\":\"Peserta PKL mendaftarkan diri atas nama sunny\",\"info\":\"Mendaftar pada Su 45 yy\"}}', NULL, '2020-06-07 12:45:10', '2020-06-07 12:45:10'),
('e2912364-3978-4141-abb8-119fae0657a9', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 10\"}}', NULL, '2020-07-12 12:39:11', '2020-07-12 12:39:11'),
('f2f7785b-a867-4715-a4b8-3cd2bb0b06ba', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 7\"}}', NULL, '2020-07-13 12:07:03', '2020-07-13 12:07:03'),
('faf4adc0-e656-49d1-87cb-db01b122bdff', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 2, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 6\"}}', NULL, '2020-07-13 12:29:42', '2020-07-13 12:29:42'),
('fb2d31f0-f995-4d50-9b61-eb2951067a6d', 'App\\Notifications\\Admin\\NotifikasiKouta', 'App\\User', 15, '{\"message\":{\"header\":\"Kouta magang Sistem Informasi dan Jaringan\",\"message\":\"Denny Ahmad menyetujui  kuota pada divisi : Sistem Informasi dan Jaringan\",\"info\":\"Jumlah kuota 10\"}}', NULL, '2020-07-12 12:39:11', '2020-07-12 12:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftars`
--

CREATE TABLE `pendaftars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailjurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` bigint(225) DEFAULT NULL,
  `sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) NOT NULL DEFAULT '2',
  `divisi_id` int(10) DEFAULT '8',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suratpermohonan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `name`, `email`, `emailjurusan`, `nim`, `sekolah`, `fakultas`, `jurusan`, `status_id`, `divisi_id`, `password`, `suratpermohonan`, `created_at`, `updated_at`) VALUES
(1, 'Liza', 'liza@mail.com', 'kampusliza@mail.com', 2147483647, 'Universitas Pancasila', 'Fakultas Akutansi', 'Akutansi', 1, 2, NULL, NULL, NULL, '2020-01-13 16:34:17'),
(2, 'Ilyas', 'ilyas@mail.com', 'kampusilyas@mail.com', 2147483647, 'Universitas Brawijaya', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 1, 2, NULL, NULL, NULL, '2020-03-12 16:17:59'),
(6, 'Dimas Raynaldo', 'edo@mail.com', 'kampusedo@mail.com', 155150201111269, 'Universitas Brawijaya', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 1, 2, '$2y$10$/kmLEaA2yUEJUeeIX5DlAu3UUynthaNKT4yN4s2JCQM/Skg.2XvSi', NULL, '2019-12-20 07:49:36', '2020-01-14 14:28:35'),
(8, 'Memet', 'memet@mail.com', 'kampusmemet@mail.com', 155150207111123, 'Universitas Brawijaya', 'Fakultas Ilmu Administrasi', 'Public', 1, 3, '$2y$10$LlxQ9wc9bakaQg.L6nfciOo2ig/UHeaMt0AFRmmHKRMxgEUGpZ1qa', 'public/surat_permohonan/bo6tmxaew1W3odMJWRoejeEvWleHVTqDZ8Wc3mYb.pdf', '2020-01-03 09:29:53', '2020-07-13 11:37:52'),
(9, 'Siti', 'siti@mail.com', 'kampussiti@mail.com', 1231231231, 'UB', 'Fakultas Ilmu Administrasi', 'Administrasi Publik', 1, 3, '$2y$10$15BPnGOSuC.dPp3E/Xp9k.OzsGuy1Qq.3kZT1Lnk/YDbaZT6Uj2Ma', 'public/surat_permohonan/0flrXXaC7MEjKQ9uiS1ViSI8Njo92wuzgbGZA2Z7.docx', '2020-01-14 14:59:01', '2020-03-12 16:56:01'),
(35, 'Roy', 'roy@mail.com', 'kampusroy@mail.com', 55335533, 'Universitas Brawijaya', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 2, 8, '$2y$10$33NxnlWtXWeBGksIZut1QO5ksngFC39LwI7HosM7wXjLdt5sgnwMm', 'public/surat_permohonan/IQvHnliFNev2KJI7Nnph5mnrQRQrbWo5ZsBgQkmK.docx', '2020-02-25 16:06:51', '2020-07-13 11:29:13'),
(37, 'Meli', 'meli@mail.com', 'kampusmeli@mail.com', 155150201111899, 'Universitas Brawijaya', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 1, 2, '$2y$10$nQDGle73hfLMOt6A4t1n..O1SuW0U3mfF76VIfvyEGRUbAxrgAz4C', 'public/surat_permohonan/FMI79l6cAMMXiq4S4b3gPTHuQJ1BBbINUP4QqH7C.pdf', '2020-07-08 13:41:12', '2020-07-08 13:42:44'),
(38, 'Dimas', 'dimas@mail.com', 'kampusdimas@mail.com', 155150201111299, 'Universitas Brawijaya', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 1, 2, '$2y$10$aIwhDAdHZWTPIEljgjGiUuZQdFBaaKkSmkF0cLdGWBBbThuctyOHm', 'public/surat_permohonan/4tfCFDuhq37JvrX9DUKShSicIYeDLQS9oBouP2Sq.pdf', '2020-07-09 00:17:57', '2020-07-09 00:20:12'),
(39, 'Oddy', 'oddy@mail.com', 'kampusoddy@mail.com', 155150201111771, 'Universitas Brawijaya', 'Fakultas Kedokteran Hewan', 'Kedokteran Hewan', 2, 8, '$2y$10$Vk3ZOOX8RJwTKhZfcd1uxOmjCTqv5mYf5QkHoh3kWHgTH4.n2e/G6', 'public/surat_permohonan/ikHpZ6QGoHxZ6NUYwjnBk62Zn46Mz9kYI6N0VwR1.pdf', '2020-07-13 11:50:48', '2020-07-13 11:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `status`) VALUES
(1, 'Admin'),
(2, 'Mentor'),
(3, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `aktivasi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `aktivasi`) VALUES
(1, 'Aktif'),
(2, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `statuskuota`
--

CREATE TABLE `statuskuota` (
  `id` int(11) NOT NULL,
  `status_kuota` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuskuota`
--

INSERT INTO `statuskuota` (`id`, `status_kuota`) VALUES
(1, 'Disetujui'),
(2, 'Belum Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `divisi_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` bigint(225) NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `divisi_id`, `name`, `nip`, `jabatan`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'Andi Rosadi', 123456789, 'Manajer', 'andymavia45@gmail.com', NULL, '$2y$10$G2yRxIvEwM2PeVgjbZsyUu6mngxAnm.9377MCCCc/gLZLFHqsS6Di', NULL, '2019-07-29 13:14:10', '2020-01-14 12:34:07'),
(5, 2, 2, 'Denny Ahmad', 155150201111333, 'Kepala Divisi SIS', 'denny@mail.com', NULL, '$2y$10$xt//vPEbydvTk1n7H0wQ8eKy/ef77eIiambqlw2n7JLvtaJ8gJeGu', NULL, '2019-12-21 01:48:38', '2020-01-14 12:48:27'),
(6, 3, 3, 'Nina', 1234567, 'Kepala Bagian Keuangan', 'nina@mail.com', NULL, '$2y$10$hSFWghDh45egqwuVnNuBXO6HzC0Jei5zcH1DFwdoUb5WF.d0v7B0K', NULL, '2019-12-23 00:22:20', '2019-12-23 00:26:16'),
(13, 2, 6, 'Putri', 44445555, 'Manajer', 'putri@mail.com', NULL, '$2y$10$P65RpSK7JiiJLTJaCaixOe5E3r7AC69DpATfkx8T0VFkRnBzj22D.', NULL, '2020-01-03 05:42:57', '2020-02-25 06:36:21'),
(15, 1, 1, 'Megi', 12345678, 'Manajer', 'megi@mail.com', NULL, '$2y$10$CGbLgnGhQhL31S5W.8NmQOVwm0XOoyXFoUgwK.65HD4AMaA2RcWsO', NULL, '2020-01-03 06:12:41', '2020-02-25 06:01:23'),
(16, 2, 1, 'Rizal', 155150201111111, 'Kepala Divisi SDM & Humas', 'rizal@mail.com', NULL, '$2y$10$SgpiUKVVboqXOqAQRNmGeOlr1qLLQi3o4CODvQmMmGhnLOgl/FR7G', NULL, '2020-07-08 11:38:54', '2020-07-08 11:38:54'),
(22, 2, 3, 'Abil', 155150201111000, 'Kepala Divisi Keuangan', 'abil@mail.com', NULL, '$2y$10$zHfwGfC/L6KJlOxAhY1C5OkPyCdeKln9iXDRLKHCQJp3UGOMEhOHG', NULL, '2020-07-12 14:02:16', '2020-07-12 14:02:16'),
(23, 2, 7, 'Wati', 155150201122123, 'Kepala Bagian Managerial Pemeliharaan 5-7', 'wati@mail.com', NULL, '$2y$10$MmTqXxQh.dMm3lBDwmyS8.F9W/hqVWG31rADhnZsy.n.Y.TUGUD4i', NULL, '2020-07-13 12:39:26', '2020-07-13 12:39:26'),
(24, 2, 4, 'Agus', 155150201117456, 'Kepala Bagian Managerial Operasi 1-4', 'agus@mail.com', NULL, '$2y$10$m1xwvAFyEBshhBogT54TleQvthiSPEiPpM1Rhgyki2jyoENn7mmQK', NULL, '2020-07-13 12:41:16', '2020-07-13 12:41:16'),
(25, 2, 5, 'Harish', 155150201144442, 'Kepala Bagian Managerial Operasi 5-7', 'harish@mail.com', NULL, '$2y$10$iYe.ByXoTMeJ091MF9zIe.VARL4zJbcZx0/Dop0.94EnrFHoZHkBi', NULL, '2020-07-13 12:42:24', '2020-07-13 12:42:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggarans`
--
ALTER TABLE `anggarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuotas`
--
ALTER TABLE `kuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanpkls`
--
ALTER TABLE `laporanpkls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuskuota`
--
ALTER TABLE `statuskuota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggarans`
--
ALTER TABLE `anggarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kuotas`
--
ALTER TABLE `kuotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporanpkls`
--
ALTER TABLE `laporanpkls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logbooks`
--
ALTER TABLE `logbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuskuota`
--
ALTER TABLE `statuskuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
