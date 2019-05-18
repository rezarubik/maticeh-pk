-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 07:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maticeh`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_guru`, `id_pemesan`, `id_mapel`, `tanggal`, `jam`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2019-05-01', 'Pagi', 0, NULL, NULL),
(2, 2, 3, 2, '2019-05-01', 'Siang', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(11) NOT NULL,
  `institusi` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direktori_cv` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `id_guru`, `institusi`, `direktori_cv`, `created_at`, `updated_at`) VALUES
(1, 2, 'PNJ', NULL, '2019-04-30 17:00:00', NULL),
(2, 7, 'PNJ', 'cv\\_Ch4 Basic_classification_unlocked.pdf', NULL, NULL),
(3, 18, 'PNJ', '/assets/cv\\_Ch3 Data_exploration_unlocked.pdf', NULL, NULL),
(4, 19, 'PNJ', '\\assets\\cv\\_Ch3 Data_exploration_unlocked.pdf', NULL, NULL),
(5, 20, '', 'cv\\_Ch2 Data Prepocessing_unlocked.pdf', NULL, NULL),
(6, 21, '', 'cv\\_Ch2 Data_unlocked.pdf', NULL, NULL),
(7, 22, '', 'cv\\_Ch2 Data Prepocessing_unlocked.pdf', NULL, NULL),
(8, 24, '', 'cv\\_Ch3 Data_exploration_unlocked.pdf', NULL, NULL),
(9, 25, '', 'cv\\_Ch1 Introduction_unlocked.pdf', NULL, NULL),
(10, 27, '', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL),
(11, 28, '', 'cv\\CV_nadiah_tsamara_pratiwi.pdf', NULL, NULL),
(12, 29, '', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL),
(13, 30, '', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL),
(14, 31, '', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL),
(15, 32, '', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL),
(16, 33, '', 'cv\\CV_nadiah_tsamara_pratiwi.pdf', NULL, NULL),
(17, 34, '', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL),
(18, 36, 'Politeknik Negeri Jakarta', 'cv\\CV Muhammad Reza Pahlevi Y.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_available`
--

CREATE TABLE `jadwal_available` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(11) NOT NULL,
  `hari` date NOT NULL,
  `sesi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `id_guru`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mathematics', NULL, NULL),
(2, 2, 'Web Programming', NULL, NULL),
(3, 2, 'Sains', NULL, NULL),
(4, 21, 'Matematika, IPA SMP', NULL, NULL),
(5, 22, 'Matematika, IPA', NULL, NULL),
(6, 24, 'Matematika SMP, IPA SMP, Fisika SMA', NULL, NULL),
(7, 25, 'Matematika, Fisika', NULL, NULL),
(8, 27, 'Coding', NULL, NULL),
(9, 28, 'Matematika SMP, IPA SMP, Fisika SMA', NULL, NULL),
(10, 29, 'Tidur, Jogging', NULL, NULL),
(11, 30, 'Tidur, Jogging', NULL, NULL),
(12, 31, 'Masak', NULL, NULL),
(13, 32, 'Tidur, Jogging', NULL, NULL),
(14, 33, 'Matematika, IPA', NULL, NULL),
(15, 34, 'Matematika SD, SMP, SMA IPS', NULL, NULL),
(16, 36, 'Matematika IPA dan IPS, Matematika dan Fisika SMP, Matematika dan IPA SD', NULL, NULL);

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
(1, '2019_04_27_172727_create_absens_table', 1),
(2, '2019_04_27_170304_create_gurus_table', 2),
(3, '2019_04_27_172631_create_jadwal_availables_table', 3),
(4, '2019_04_27_172542_create_mata_pelajarans_table', 4),
(5, '2019_04_27_172707_create_pemesanans_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `link` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tgl_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_pemesan`, `link`, `status`, `tgl_bayar`, `tgl_verifikasi`) VALUES
(1, 3, 'path', 0, '2019-05-01', '0000-00-00'),
(2, 1, 'path', 0, '2019-05-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_guru`, `id_pemesan`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '1', 0, '2019-04-30 17:00:00', NULL),
(2, '2', '3', 1, '2019-04-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(126) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten/kota` varchar(126) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `alamat`, `provinsi`, `kabupaten/kota`, `status`, `role`, `no_hp`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(2, 'Reza', 'reza@email.com', '123321', NULL, 'Jl. Teluk Langsa 4 Blok C.8 No.4', '', '', 2, '2', '08646546', 'Laki-laki', '2019-04-28 07:21:12', NULL),
(19, 'Priska', 'priska@email.com', 'admin', NULL, 'jakot', '', '', 2, '2', '124', 'perempuan', NULL, NULL),
(20, 'Bella', 'bella@gmail.com', 'admina', NULL, 'asdajksd', '', '', 2, '2', '123', 'perempuan', NULL, NULL),
(22, 'Rafi', 'rafiaja@email.com', '123321', NULL, 'Bojong', '', '', 3, '2', '038285625', 'Laki-Laki', '2019-05-02 09:09:01', '2019-05-02 09:09:01'),
(24, 'Nadiah Tsamara Pratiwi', 'tspnadiah@gmail.com', 'admin', NULL, 'Jl. Kalibata Tengah XVII No.29', '', '', 1, '2', '089699179002', 'Perempuan', '2019-05-02 09:17:17', '2019-05-02 09:17:17'),
(25, 'Jack Martin R', 'jack@gmail.com', 'admin', NULL, 'Jl. Depok Baru', '', '', 1, '2', '123451234', 'Perempuan', '2019-05-13 09:30:12', '2019-05-13 09:30:12'),
(27, 'Muhammad Adhi Herliyanto', 'adhi@gmail.com', 'admin', NULL, 'Jl. Babon', '', '', 0, '2', '125', 'Laki-Laki', '2019-05-13 09:33:13', '2019-05-13 09:33:13'),
(28, 'Siti Nur Haliza', 'liza@gmail.com', 'admin', NULL, 'Jl.Teluk', '', '', 0, '2', '234', 'Perempuan', '2019-05-13 09:34:35', '2019-05-13 09:34:35'),
(29, 'Alfa', 'alfa@gmail.com', 'admin', NULL, 'Teluk Langsa 4', '', '', 0, '2', '1234', 'Perempuan', '2019-05-13 17:53:14', '2019-05-13 17:53:14'),
(30, 'Beta', 'beta@gmail.com', 'admin', NULL, 'Teluk Langsa 4', '', '', 0, '2', '1234', 'Laki-Laki', '2019-05-13 18:04:10', '2019-05-13 18:04:10'),
(31, 'Gama', 'gama@gmail.com', 'admin', NULL, 'Jl. Teluk Langsa 4', '', '', 0, '2', '92922', 'Laki-Laki', '2019-05-13 18:09:23', '2019-05-13 18:09:23'),
(32, 'Teta', 'teta@gmail.com', 'admin', NULL, 'Teluk Langsa 4', '', '', 2, '2', '1234', 'Laki-Laki', '2019-05-13 18:16:42', '2019-05-13 18:16:42'),
(33, 'priska', 'priskaputri15@gmail', 'friska15', NULL, 'jl. budi mulia', '', '', 1, '2', '082227738902', 'Perempuan', '2019-05-14 04:37:24', '2019-05-14 04:37:24'),
(34, 'Asymala Permata Sari', 'asymalapsari@gmail.com', '123456', NULL, 'Lembah Nirmala 1, RT 11/14 No.47. Cimanggis, Depok', '', '', 0, '2', '081807879100', 'Perempuan', '2019-05-14 05:24:44', '2019-05-14 05:24:44'),
(36, 'Muhammad Reza Pahlevi Y', 'rezarubik17@gmail.com', 'admin', NULL, 'Jl. Teluk Langsa 4 Blok C.8 No.4', 'DKI Jakarta', 'Jakarta Timur/Duren Sawit', 1, '2', '089501011011', 'Laki-Laki', '2019-05-14 16:57:25', '2019-05-14 16:57:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_available`
--
ALTER TABLE `jadwal_available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jadwal_available`
--
ALTER TABLE `jadwal_available`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
