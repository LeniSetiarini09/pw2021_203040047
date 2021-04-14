-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 00.36
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
-- Database: `pw_tubes_203040047`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `make_up`
--

CREATE TABLE `make_up` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Benefits` varchar(200) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `make_up`
--

INSERT INTO `make_up` (`id`, `Picture`, `Name`, `Brand`, `Benefits`, `Price`) VALUES
(1, 'maskara.jpg', 'Mascara', 'Maybeline', 'Agar bulu mata terlihat lebih tebal, lentik dan panjang. Sehingga akan tampak lebih indah', 'Rp. 50.000'),
(2, 'eyeshadow.jpg', 'Eye Shadow', 'Inez', 'Sebagai pengindah pada kelopak mata', 'Rp. 35.000'),
(3, 'pensilalis.jpg', 'Pensil Alis', 'Viva', 'Mempertebal alis dan merapihkan alis', 'Rp. 30.000'),
(4, 'lipstik.jpg', 'Lipstik', 'Purbasari', 'Melembabkan dan melindungi bibir dari paparan sinar matahari, selain itu lipstik juga bisa membuat bibir menjadi lebih terlihat berwarna', 'Rp. 30.000'),
(5, 'eyeliner.jpg', 'Eye Liner', 'Mizzu', 'Untuk mempertegas garis pada mata, tampilan mata pun menjadi lebih menarik', 'Rp. 30.000'),
(6, 'concealer.jpg', 'Concealer', 'Make Over', 'Untuk menutupi noda seperti bekas jerawat pada wajah', 'Rp. 100.000'),
(7, 'foundation.jpg', 'Foundation', 'Revlon', 'Sebagai alas pada make up yang berfungsi untuk meratakan kulit pada wajah', 'Rp. 145.000'),
(8, 'bedak.jpg', 'Bedak', 'Focallure Face', 'Membuat wajah menjadi lebih bersinar, kulit wajah terlihat lebih lembut dan terlihat lebih cerah', 'Rp. 30.000'),
(9, 'primer.jpg', 'Primer', 'Pixy', 'Membantu melembapkan kulit sekaligus membuat hasil make up menjadi sempurna dan tahan lama', 'Rp. 45.000'),
(10, 'blush-on.jpg', 'Blush On', 'Emina', 'Untuk memerahkan pipi sehingga memberikan penampilan yang lebih menarik', 'Rp.  28000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `make_up`
--
ALTER TABLE `make_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `make_up`
--
ALTER TABLE `make_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
