-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2025 pada 05.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `NIPD` varchar(12) NOT NULL,
  `namaMhs` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `NIPD`, `namaMhs`, `tanggalLahir`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '24078100001', 'Putra Siregar', '2005-03-02', 'Jakarta Selatan', '2025-03-22 03:04:15', '2025-03-22 03:06:30'),
(3, '24078100002', 'Budiono Siregar', '2006-03-02', 'Padang', '2025-03-22 04:03:48', NULL),
(5, '24078100003', 'Irfan Gafur', '2006-03-03', 'Kalimantan', '2025-03-22 04:06:25', NULL),
(7, '24078100004', 'Ambarita', '2000-01-01', 'Bekasi', '2025-03-22 04:27:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
