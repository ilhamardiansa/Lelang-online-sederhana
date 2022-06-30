-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2022 pada 15.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_bid` int(255) NOT NULL,
  `last_bid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliveri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kendaraan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Transmission` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak_tempuh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `kode_barang`, `nama_barang`, `name`, `gambar`, `open_bid`, `last_bid`, `descripsi`, `location`, `deliveri`, `ongkir`, `kondisi`, `tahun_kendaraan`, `warna`, `Transmission`, `jarak_tempuh`, `bahan_bakar`, `end_date`, `status`) VALUES
(7, 'CAR0002', 'SUPER CAR SUPERs', 'admin', '20220124132408.png', 150000, '150000002', 'baru dan unik', 'malang jawa timur dan jawa barat', 'JNE EXPRESS', '15000', 'baru', '2017', 'hitam', 'manual', '100000', 'pertalite', '2022-03-04', '1'),
(13, 'CAR0005', 'SUPER CAR SUPERs', 'pelelang', '20220211154054.png', 150000, '150000001', 'baru dan unik', 'malang jawa timur dan jawa barat', 'JNE EXPRESS', '15000', 'baru', '2017', 'hitam', 'manual', '10000', 'pertalite', '2022-01-26', '0'),
(14, 'CAR0006', 'TESLA NEW', 'pelelang', '20220212121449.png', 100000232, '10000000', 'baru dan unik', 'malang jawa timur dan jawa barat', 'JNE EXPRESS', '15000', 'baru', '2017', 'hitam', 'manual', '100000', 'pertalite', '2022-02-14', '0'),
(15, 'CAR0007', 'tesla test bro', 'pelelang', '20220214011936.png', 100000, '10000000', 'baru dan unik sekali', 'malang jawa timur dan jawa barat', 'JNE EXPRESS', '15000', 'bekas', '2025', 'hitam', 'manual', '10000', 'pertalite', '2022-02-15', '0'),
(16, 'CAR0008', 'SUPER CAR SUPERs', 'bidders', '20220214025831.png', 10000000, NULL, 'baru dan unik sekali', 'malang jawa timur dan jawa barat', 'Cash On Delivery', '15000', 'baru', '2017', 'hitam', 'manual', '10000', 'pertalite', '2022-02-15', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_bid` int(20) NOT NULL,
  `winners` varchar(20) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bid`
--

INSERT INTO `bid` (`id`, `name`, `datetime`, `id_barang`, `nama_barang`, `jumlah_bid`, `winners`, `pembayaran`) VALUES
(1, 'admin', '2021-10-21 07:00:00', '7', 'BMW Marcendess', 150000000, '0', '0'),
(21, 'admin', '2022-01-25 09:41:54', '7', 'SUPER CAR SUPER', 23, '0', '0'),
(22, 'admin', '2022-01-25 09:41:59', '7', 'SUPER CAR SUPER', 150000001, '0', '0'),
(23, 'admin', '2022-01-25 09:47:28', '7', 'SUPER CAR SUPER', 234545, '0', '0'),
(24, 'pelelang', '2022-02-03 02:28:35', '7', 'SUPER CAR SUPER', 10000000, '0', '0'),
(25, 'pelelang', '2022-02-11 06:24:49', '7', 'SUPER CAR SUPER', 234545, '0', '0'),
(26, 'bidders', '2022-02-11 11:24:45', '7', 'SUPER CAR SUPER', 150000002, '1', 'berhasil'),
(27, 'admin', '2022-02-11 14:26:54', '11', 'SUPER CAR SUPER', 150000001, '0', '0'),
(29, 'admin', '2022-02-12 05:39:17', '13', 'SUPER CAR SUPERs', 150000001, '1', 'berhasil'),
(30, 'admin', '2022-02-12 11:40:12', '11', 'SUPER CAR SUPER', 150000002, '1', 'proses'),
(36, 'admin', '2022-02-13 02:16:49', '7', 'SUPER CAR SUPERs', 23, '0', '0'),
(37, 'admin', '2022-02-13 02:17:01', '14', 'TESLA NEW', 10000000, '1', 'proses'),
(38, 'admin', '2022-02-14 02:23:53', '15', 'tesla test bro', 10000000, '1', 'belum dibayar'),
(39, 'pelelang', '2022-02-14 02:49:06', '12', 'SUPER CAR SUPER', 23, '1', 'belum dibayar'),
(41, 'pelelang', '2022-02-15 10:18:16', '7', 'SUPER CAR SUPERs', 10000000, '0', '0'),
(63, 'admin', '2022-03-02 14:16:09', '7', 'SUPER CAR SUPERs', 23, '0', '0'),
(64, 'pelelang', '2022-03-02 14:16:40', '7', 'SUPER CAR SUPERs', 10000000, '0', '0'),
(65, 'pelelang', '2022-03-02 14:17:24', '7', 'SUPER CAR SUPERs', 10000000, '0', '0'),
(66, 'bidders', '2022-03-02 14:23:39', '7', 'SUPER CAR SUPERs', 10000000, '0', '0'),
(67, 'bidders', '2022-03-02 14:25:27', '7', 'SUPER CAR SUPERs', 10000000, '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deliveri`
--

CREATE TABLE `deliveri` (
  `id` int(11) NOT NULL,
  `jasa_pengirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deliveri`
--

INSERT INTO `deliveri` (`id`, `jasa_pengirim`) VALUES
(1, 'JNE EXPRESS'),
(2, 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `atasnama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `nama_bank`, `norek`, `atasnama`) VALUES
(1, 'Bank Central Asia', '1234567891', 'PT BIDDERS'),
(2, 'Bank Rakyat Indonesia', '1234567891', 'PT BIDDERS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_04_091417_create_products_table', 2),
(6, '2022_01_23_061201_create_gambars_table', 3),
(7, '2022_02_16_032226_create_messages_table', 4),
(8, '2022_02_16_040050_create_messages_table', 5),
(9, '2022_02_16_113907_create_notifications_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `panel`
--

CREATE TABLE `panel` (
  `id` int(11) NOT NULL,
  `name_website` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `panel`
--

INSERT INTO `panel` (`id`, `name_website`, `title`, `subtitle`) VALUES
(1, 'BIDDERSs', 'BIDDERS', 'Bid And Auction Sport Cars!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user2323@gmail.com', '$2y$10$oIPO1anKDDfqzPPnCEBC/eBYsdaxqmTyHnLXfyx7bzLC4LFuLG0Gu', '2022-02-12 14:29:14'),
('bidders@gmail.com', '$2y$10$NeyBtJTuK9Kx1usP5zLb/epg8nGR9MuQVY2fj4.4eRA/2jvL2TKOG', '2022-02-12 14:29:57'),
('ilhamardiansya8891@gmail.com', '$2y$10$Y0qWNC59i64q92/D0kTfaeCr872gAL/JhCtonqkKErzyW980VtWbC', '2022-02-14 11:01:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `total_pembayaran` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `name`, `id_barang`, `nama_barang`, `total_pembayaran`, `metode`, `status`) VALUES
(7, 'bidders', '7', 'SUPER CAR SUPER', '150,000,002', 'Bank Central Asia ( BCA )', 'berhasil'),
(9, 'admin', '13', 'SUPER CAR SUPERs', '150,000,001', 'Bank Mandiri', 'berhasil'),
(10, 'admin', '13', 'SUPER CAR SUPERs', '150,000,001', 'Bank Central Asia', 'berhasil'),
(11, 'admin', '11', 'SUPER CAR SUPER', '150,000,002', 'Bank Central Asia', 'proses'),
(12, 'admin', '11', 'SUPER CAR SUPER', '150,000,002', 'Bank Central Asia', 'proses'),
(13, 'admin', '14', 'TESLA NEW', '10,000,000', 'Bank Central Asia', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$dZJmrjIYijwsjP3Otr8df.wSgwG.MdGI4ArL/tTFmrkuUeMKPiWae', 'SdqkpZkwntmFTrEiKUgwbB4ZL7X49DamAEVJwkLQVv8XPtUU51KeEh2UwNz9', '2022-01-19 15:13:40', '2022-02-12 14:42:15'),
(17, 'pelelang', 'pelelang', 'ilhamardiansya8891@gmail.com', NULL, '$2y$10$fuXa7beDQMa15fUWb.BA8.rvOWGfTA/0bpxzvF3wmOboifFuAKyP.', 'dIzG7V55mfuZo9gByDo1dTBU2dRWP3kgXhpULK1oQbItHwYRupzffJqgh89b', '2022-02-03 10:19:13', '2022-02-14 09:11:42'),
(18, 'bidders', 'pelelang', 'ilhamardiansya8890@gmail.com', NULL, '$2y$10$fuXa7beDQMa15fUWb.BA8.rvOWGfTA/0bpxzvF3wmOboifFuAKyP.', NULL, '2022-02-11 08:21:13', NULL),
(19, 'admin2', 'bidders', 'admin2@gmail.com', NULL, '$2y$10$prEH6lPlpQU04E7X/Un.xO3sMenKdH94kbhh4MKyPb0ohncfYOsuC', NULL, '2022-06-29 08:54:26', '2022-06-29 08:54:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deliveri`
--
ALTER TABLE `deliveri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indeks untuk tabel `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `panel`
--
ALTER TABLE `panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
