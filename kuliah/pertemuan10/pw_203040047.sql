-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2021 pada 14.20
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040047`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Leni Setiarini', '203040047', 'setiarini.leni@gmail.com', 'Teknik Informatika', 'leni.jpg'),
(2, 'Anne Imaniar', '203020050', 'imaniar.anne@gmail.com', 'Teknik Pangan', 'anne.jpg'),
(3, 'Chyntia Putri', '203040002', 'chyntia.putri@gmail.com', 'Teknik Informatika', 'chyntia.jpg'),
(4, 'Devi Indriawati', '203010024', 'devi.indriawati@gmail.com', 'Teknik Lingkungan', 'devi.jpg\r\n'),
(5, 'Elsa Fadila', '203030065', 'elsa.fadila@gmail.com', 'Perancangan Wilayah dan Kota', 'elsa.jpg'),
(6, 'Diyang Wulandari', '203020043', 'diyang.wulandari@gmail.com', 'Teknik Pangan', 'diyang.jpg'),
(7, 'Karina Hamidah', '203010020', 'karina.hamidah@gmail.com', 'Teknik Lingkungan', 'karina.jpg'),
(8, 'Listya Meriandini', '203030076', 'listya.meriandini@gmail.com', 'Perancangan Wilayah dan Kota', 'listya.jpg'),
(9, 'Naisya Nurul', '203040014', 'naisya.nurul@gmail.com', 'Teknik Informatika', 'naisya.jpg'),
(10, 'Siti Nursyahbani', '203020012', 'siti.nursyahbani@gmail.com', 'Teknik Pangan', 'siti.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
