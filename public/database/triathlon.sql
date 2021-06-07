-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 17.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triathlon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`email`, `password`, `nama`) VALUES
('admin@gmail.com', '$2y$10$g7E5VeIJaDrdbS7PYg3sT.x.kT9SnNhUxL4RYoxYm3J0VGCe8hRI6', 'admin PT Salvage');

-- --------------------------------------------------------

--
-- Struktur dari tabel `competition`
--

CREATE TABLE `competition` (
  `id_competition` int(11) NOT NULL,
  `nama_competition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `competition`
--

INSERT INTO `competition` (`id_competition`, `nama_competition`) VALUES
(1, 'Duathlon'),
(2, 'Triathlon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(255) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `age_group` int(11) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `no_ktp`, `id_paket`, `status`, `age_group`, `bukti_bayar`, `harga`) VALUES
('60bc8605d66a1', '03728168327497982', 3, 1, 2, NULL, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `id_competition` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `desk1` text NOT NULL,
  `desk2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `id_competition`, `nama_paket`, `harga`, `desk1`, `desk2`) VALUES
(1, 1, 'Duathlon', 100000, '', ''),
(2, 2, 'Elite', 200000, '', ''),
(3, 2, 'Age Group', 300000, '', ''),
(4, 2, 'Kids', 400000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `no_ktp` varchar(20) NOT NULL,
  `nama_panjang` varchar(100) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `nama_bib` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `sex` char(1) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `nama_komunitas` varchar(100) NOT NULL,
  `swim_time_750` varchar(10) NOT NULL,
  `ec_nama` varchar(100) NOT NULL,
  `ec_email` varchar(50) NOT NULL,
  `ec_hp` varchar(20) NOT NULL,
  `ukuran_jersey` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`no_ktp`, `nama_panjang`, `nama_panggilan`, `nama_bib`, `email`, `kewarganegaraan`, `tanggal_lahir`, `no_hp`, `negara`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `alamat`, `sex`, `gol_darah`, `nama_komunitas`, `swim_time_750`, `ec_nama`, `ec_email`, `ec_hp`, `ukuran_jersey`, `password`) VALUES
('03728168327497982', 'arini indah', 'Arini', 'Rin', 'arini.inf@gmail.com', 'WNI', '1999-10-10', '0987654345678', 'Indonesia', 'Jawa Timur', 'Surabaya', 'Sukolilo', '60111', 'Jalan Keputih gang 3 No 9a Keputih Sukolilo', 'P', 'O', 'Alalala', '900', 'chan', 'chan@gmail.com', '086665656778', 'L', '$2y$10$mwiUq0gEe1jUyLOkmNFvCuNKaLnI2evkhDMXHDrKha7DlM/b3n7YS'),
('98765678976567', 'Chaniyah Zulfa Mukhlishah', 'Chaniyah', 'Chan', 'chaniyahzm@gmail.com', 'Indonesia', '2021-06-07', '082767676676', 'Indonesia', 'JAWA TIMUR', 'Surabaya', 'Waru', '60112', 'Jalan Waru', 'F', 'B', 'Alalala', '900', 'Chaniyah Zulfa Mukhlishah', 'arini.inf@gmail.com', '082767676676', 'S', '$2y$10$PwPmYwTJPOKuceQn/ThGb.0NnERyslW8jqJbMj0DHZrGmwl23Kk9C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id_competition`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `no_ktp` (`no_ktp`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_competition` (`id_competition`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no_ktp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `competition`
--
ALTER TABLE `competition`
  MODIFY `id_competition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`no_ktp`) REFERENCES `users` (`no_ktp`);

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_competition`) REFERENCES `competition` (`id_competition`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
