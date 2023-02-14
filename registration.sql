-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2023 at 03:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_suket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Lajang','Menikah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2017_05_02_140432_create_provinces_tables', 1),
(4, '2017_05_02_140444_create_regencies_tables', 1),
(5, '2017_05_02_142019_create_districts_tables', 1),
(6, '2017_05_02_143454_create_villages_tables', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_02_01_134055_create_employees_table', 1),
(10, '2023_02_10_012802_create_pelatihans_table', 2),
(11, '2023_02_10_024843_create_periodes_table', 3),
(12, '2023_02_10_060408_create_periodes_table', 4),
(13, '2023_02_10_060658_create_pelatihans_table', 5),
(14, '2023_02_10_062649_create_pelatihans_table', 6),
(15, '2023_02_10_065901_create_employees_table', 7),
(16, '2023_02_10_143349_create_pelatihans_table', 8),
(17, '2023_02_10_143730_create_periodes_table', 9);

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
-- Table structure for table `pelatihans`
--

CREATE TABLE `pelatihans` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelatihans`
--

INSERT INTO `pelatihans` (`id`, `pelatihan`, `created_at`, `updated_at`) VALUES
('1', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER BATCH-1', NULL, NULL),
('2', 'OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI BATCH-1', NULL, NULL),
('3', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT BATCH-1', NULL, NULL),
('4', 'SCAFFOLDING LEVEL OPERATOR BATCH-1', NULL, NULL),
('5', 'TEKNISI INSTRUMENTASI LEVEL - 1 BATCH-1', NULL, NULL),
('6', 'JURU LAS (WELDER) BATCH-1', NULL, NULL),
('7', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER BATCH-2', NULL, NULL),
('8', 'OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI BATCH-2', NULL, NULL),
('9', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT BATCH-2', NULL, NULL),
('10', 'SCAFFOLDING LEVEL OPERATOR BATCH-2', NULL, NULL),
('11', 'TEKNISI INSTRUMENTASI LEVEL - 1 BATCH-2', NULL, NULL),
('12', 'JURU LAS (WELDER) BATCH-2', NULL, NULL),
('13', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER BATCH-3', NULL, NULL),
('14', 'OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI BATCH-3', NULL, NULL),
('15', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT BATCH-3', NULL, NULL),
('16', 'SCAFFOLDING LEVEL OPERATOR BATCH-3', NULL, NULL),
('17', 'TEKNISI INSTRUMENTASI LEVEL - 1 BATCH-3', NULL, NULL),
('18', 'OPERATOR LANTAI PERAWATAN SUMUR', NULL, NULL),
('19', 'JURU LAS (WELDER) BATCH-3', NULL, NULL),
('20', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER BATCH-4', NULL, NULL),
('21', 'OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI BATCH-4', NULL, NULL),
('22', 'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT BATCH-4', NULL, NULL),
('23', 'JURU LAS (WELDER) BATCH-4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `periodes`
--

CREATE TABLE `periodes` (
  `id` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan_id` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periodes`
--

INSERT INTO `periodes` (`id`, `pelatihan_id`, `name`, `created_at`, `updated_at`) VALUES
('1', '1', '09-27 JANUARI 2023', NULL, NULL),
('2', '2', '09-27 JANUARI 2023', NULL, NULL),
('3', '3', '09-27 JANUARI 2023', NULL, NULL),
('4', '4', '09-27 JANUARI 2023', NULL, NULL),
('5', '5', '09-27 JANUARI 2023', NULL, NULL),
('6', '6', '09-27 JANUARI 2023', NULL, NULL),
('7', '7', '06-24 FEBRUARI 2023', NULL, NULL),
('8', '8', '06-24 FEBRUARI 2023', NULL, NULL),
('9', '9', '06-24 FEBRUARI 2023', NULL, NULL),
('10', '10', '06-24 FEBRUARI 2023', NULL, NULL),
('11', '11', '06-24 FEBRUARI 2023', NULL, NULL),
('12', '12', '06-24 FEBRUARI 2023', NULL, NULL),
('13', '13', '06-24 MARET 2023', NULL, NULL),
('14', '14', '06-24 MARET 2023', NULL, NULL),
('15', '15', '06-24 MARET 2023', NULL, NULL),
('16', '16', '06-24 MARET 2023', NULL, NULL),
('17', '17', '06-24 MARET 2023', NULL, NULL),
('18', '18', '06-24 MARET 2023', NULL, NULL),
('19', '19', '06-24 MARET 2023', NULL, NULL),
('20', '20', '08-26 MEI 2023', NULL, NULL),
('21', '21', '08-26 MEI 2023', NULL, NULL),
('22', '22', '08-26 MEI 2023', NULL, NULL),
('23', '23', '08-26 MEI 2023', NULL, NULL);

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
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('1', 'Aceh'),
('2', 'Sumatera Utara'),
('3', 'Sumatera Selatan'),
('4', 'Riau'),
('5', 'Kepulauan Riau'),
('6', 'Jambi'),
('7', 'Lampung'),
('9', 'Jawa Barat'),
('10', 'Jawa Tengah'),
('11', 'Jawa Timur'),
('12', 'Kalimantan Selatan'),
('13', 'Kalimantan Tengah'),
('14', 'Kalimantan Timur'),
('15', 'Kalimantan Utara'),
('16', 'Sulawesi Selatan'),
('17', 'Sulawesi Tengah'),
('18', 'Maluku'),
('19', 'Papua'),
('20', 'Papua Barat'),
('21', 'Nusa Tenggara Timur');

-- --------------------------------------------------------

--
-- Table structure for table `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regencies`
--

INSERT INTO `regencies` (`id`, `province_id`, `name`) VALUES
('1', '1', 'Aceh Tamlang'),
('2', '1', 'Aceh Utara'),
('3', '1', 'Aceh Timur'),
('4', '2', 'Langkat'),
('5', '2', 'Deli Serdang'),
('6', '3', 'Musi Rawas Utara'),
('7', '3', 'Banyuasin'),
('8', '3', 'Musi Banyuasin'),
('9', '3', 'Musi Rawas'),
('10', '3', 'Ogan Ilir'),
('11', '3', 'Muara Enim'),
('12', '3', 'Ogan Komering Ulu'),
('13', '3', 'Lahat'),
('14', '3', 'Prabumulih'),
('15', '3', 'Penukal Abab Lematang Ilir'),
('16', '4', 'Bengkalis'),
('17', '4', 'Rokan Hilir'),
('18', '4', 'Siak'),
('19', '4', 'Kepulauan Meranti'),
('20', '4', 'Dumai'),
('21', '4', 'Kampar'),
('22', '4', 'Indra Giri Hulu'),
('23', '4', 'Rokan Hulu'),
('24', '4', 'Pelawan'),
('25', '5', 'Natuna'),
('26', '5', 'Kepulauan Anambas'),
('27', '6', 'Batanghari'),
('28', '6', 'Tanjung Jabung Barat'),
('29', '6', 'Tanjung Jabung Timur'),
('30', '6', 'Muaro Jambi'),
('31', '6', 'Sarolangun'),
('32', '6', 'Kota Jambi'),
('33', '6', 'Tebo'),
('34', '7', 'Lampung Timur'),
('35', '9', 'Indramayu'),
('36', '9', 'Karawang'),
('37', '9', 'Bekasi'),
('38', '9', 'Subang'),
('39', '9', 'Majalengka'),
('40', '10', 'Blora'),
('41', '10', 'Rembang'),
('42', '10', 'Cilacap'),
('43', '11', 'Sidoarjo'),
('44', '11', 'Gresik'),
('45', '11', 'Bojonegoro'),
('46', '11', 'Tuban'),
('47', '11', 'Bangkalan'),
('48', '11', 'Sumenep'),
('49', '12', 'Tabalong'),
('50', '13', 'Barito Utara'),
('51', '14', 'Penajam Paser Utara'),
('52', '14', 'Kutai Timur'),
('53', '14', 'Bontang'),
('54', '14', 'Samarinda'),
('55', '14', 'Kutai Kertanegara '),
('56', '15', 'Balikpapan '),
('57', '15', 'Bulungan '),
('58', '15', 'Nunukan '),
('59', '16', 'Tarakan '),
('60', '17', 'Wajo '),
('61', '18', 'Banggai '),
('62', '18', 'Seram Bagian Timur '),
('63', '19', 'Seram Bagian Barat '),
('64', '19', 'Jayawijaya '),
('65', '20', 'Nabire '),
('66', '20', 'Teluk Bintuni '),
('67', '21', 'Sorong '),
('68', '21', 'Ngada '),
('69', '21', 'Kupang ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'diklat@ppsdm.net', NULL, '$2y$10$K169E8PJuWXvmKtG/6HKE.HTNte2gm.60FiEJ7jI796sm2r7bjPj2', NULL, '2023-02-10 00:05:17', '2023-02-10 00:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD KEY `districts_regency_id_foreign` (`regency_id`),
  ADD KEY `districts_id_index` (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelatihans`
--
ALTER TABLE `pelatihans`
  ADD KEY `pelatihans_id_index` (`id`),
  ADD KEY `pelatihan` (`pelatihan`),
  ADD KEY `id` (`id`),
  ADD KEY `pelatihan_2` (`pelatihan`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD KEY `periodes_pelatihan_id_foreign` (`pelatihan_id`),
  ADD KEY `periodes_id_index` (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD KEY `provinces_id_index` (`id`);

--
-- Indexes for table `regencies`
--
ALTER TABLE `regencies`
  ADD KEY `regencies_province_id_foreign` (`province_id`),
  ADD KEY `regencies_id_index` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD KEY `villages_district_id_foreign` (`district_id`),
  ADD KEY `villages_id_index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_regency_id_foreign` FOREIGN KEY (`regency_id`) REFERENCES `regencies` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `periodes`
--
ALTER TABLE `periodes`
  ADD CONSTRAINT `periodes_pelatihan_id_foreign` FOREIGN KEY (`pelatihan_id`) REFERENCES `pelatihans` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
