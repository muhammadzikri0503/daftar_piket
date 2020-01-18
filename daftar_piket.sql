-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2020 pada 09.08
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_piket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kelas`) VALUES
(5, 'X TKJ 1', 'X'),
(6, 'X TKJ 2', 'X'),
(7, 'X TKJ 3', 'X'),
(8, 'X MM 1', 'X'),
(9, 'X MM 2', 'X'),
(10, 'X MM 3', 'X'),
(11, 'X RPL 1', 'X'),
(12, 'X RPL 2', 'X'),
(13, 'XI TKJ 1', 'XI'),
(14, 'XI TKJ 2', 'XI'),
(15, 'XI TKJ 3', 'XI'),
(16, 'XI MM 1', 'XI'),
(17, 'XI MM 2', 'XI'),
(18, 'XI MM 3', 'XI'),
(19, 'XI RPL 1', 'XI'),
(20, 'XI RPL 2', 'XI'),
(21, 'XII TKJ 1', 'XII'),
(22, 'XII TKJ 2', 'XII'),
(23, 'XII TKJ 3', 'XII'),
(24, 'XII MM 1', 'XII'),
(25, 'XII MM 2', 'XII'),
(26, 'XII MM 3', 'XII'),
(27, 'XII RPL 1', 'XII'),
(28, 'XII RPL 2', 'XII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jenis_kelamin`, `username`, `password`, `id_level`) VALUES
(1, 'admin', 'laki-laki', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(5, 'Zikri', 'laki-laki', 'zikri', '2c9ea2c0392944cf7016eaced0f22aef', 2),
(6, 'Faras', 'laki-laki', 'faras', 'de49bc972ada083c504efce5c8d6750c', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(6) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jenis_kelamin`, `nama_jurusan`, `id_kelas`, `nama_jadwal`) VALUES
('ST0001', 'Muhammad Zikri', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Monday'),
('ST0002', 'Ryan Agung PP', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Monday'),
('ST0003', 'Imam Farras Mukhairi', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Monday'),
('ST0004', 'Kelvin', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Tuesday'),
('ST0005', 'Ronny Febrian Saputra', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Wednesday'),
('ST0006', 'Bagas Saputra', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Thursday'),
('ST0007', 'Rahmadion Putra', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Friday'),
('ST0008', 'Nicolas Simanjuntak', 'laki-laki', 'Rekayasa Perangkat Lunak', 28, 'Saturday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
