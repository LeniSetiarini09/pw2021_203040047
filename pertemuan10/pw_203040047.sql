-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2021 pada 05.37
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
-- Struktur dari tabel `judul buku`
--

CREATE TABLE `judul buku` (
  `id` int(11) NOT NULL,
  `judul buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tebal buku` varchar(100) NOT NULL,
  `buku terbit` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `judul buku`
--

INSERT INTO `judul buku` (`id`, `judul buku`, `pengarang`, `penerbit`, `tebal buku`, `buku terbit`, `gambar`) VALUES
(1, 'bulan', 'tere liye', 'gramedia pustaka utama(jakarta)', '440 halaman', '16 januari 2015', 'bulan.jpg'),
(2, 'milea suara dari dilan', 'pidi baiq', 'pastel books', '360 halaman', '2016', 'milea.jpg'),
(3, 'dear nathan', 'erischa febriani', 'best media', '528 halaman', '2016', 'dear nathan.jpg'),
(4, 'dilan', 'pidi baiq', 'pastel books', '333 halaman', '2014', 'dilan.jpg'),
(5, 'hujan', 'tere liye', 'gramedia pustaka utama', '320 halaman', 'januari 2016', 'hujan.jpg'),
(6, 'laskar pelangi', 'andrea hirata', 'bentang pustaka', '529 halaman', '2005', 'laskar-pelangi.jpg'),
(7, 'matahari', 'tere liye', 'gramedia pustaka utama', '404 halaman', 'juli 2016', 'matahari.jpg'),
(8, 'rindu', 'tere liye', 'republika penerbit', '544 halaman', 'oktober 2014', 'rindu.jpg'),
(9, 'sang pemimpi', 'andrea hirata', 'bentang pustaka', '292 halaman', 'juli 2006', 'sang pemimpi.jpg'),
(10, 'sepatu tua', 'sapardi djoko damono', 'gramedia pustaka utama', '114 halaman', '2019', 'sepatu tua.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `judul buku`
--
ALTER TABLE `judul buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `judul buku`
--
ALTER TABLE `judul buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
