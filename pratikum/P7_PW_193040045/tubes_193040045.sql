-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 18.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040045`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `Foto` varchar(20) NOT NULL,
  `Jenis` varchar(30) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `Foto`, `Jenis`, `Merk`, `Harga`) VALUES
(1, 'images.jpeg', 'Kemeja', 'Alisan', 'IDR = 150.000'),
(2, 'images1.jpeg', 'T-shirt', 'Adidas', 'IDR = 60.000'),
(3, 'images2.jpeg', 'Batik', 'Mega Mendung', 'IDR = 120.000'),
(4, 'images3.png', 'Kaos Lengan Panjang', 'Bluza', 'IDR = 100.000'),
(5, 'images4.png', 'Kaos Lengan Panjang', 'Monstax', 'IDR = 100.000'),
(6, 'images5.png', 'Kaos Lengan Panjang', 'Almana', 'IDR = 110.000'),
(7, 'images6.png', 'Kemeja', 'Alisan', 'IDR = 120.000'),
(8, 'images7.png', 'Kemeja', 'Mockup', 'IDR = 100.000'),
(9, 'images8.png', 'Blus Kerah Dress', 'Rose', 'IDR = 150.000'),
(10, 'images9.png', 'T-shirt', 'Bss', 'IDR = 150.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
