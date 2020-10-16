-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 12:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `id_desain` int(50) NOT NULL,
  `kode_desain` varchar(100) NOT NULL,
  `nama_desain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`id_desain`, `kode_desain`, `nama_desain`) VALUES
(1, 'D1.jpg', 'lt50 lb22 5x10'),
(2, 'D1-2.jpg', 'lt60 lb22 6x10'),
(3, 'D2.jpg', 'lt50 lb46 5x10 Lantai 1'),
(4, 'D2-2.jpg', 'lt50 lb46 5x10 Lantai 2'),
(5, 'D3.jpg', 'lt50 lb60 5x10 Lantai 1'),
(6, 'D3-2.jpg', 'lt50 lb60 5x10 Lantai 2'),
(7, 'D4.jpg', 'lt66 lb76n62 6x11 4 kamar'),
(8, 'D5.jpg', 'lb 30 lt 60 5x12'),
(9, 'D5-2.jpg', 'lt60 lb36 6x10'),
(10, 'D6.jpg', 'lt75 lb66 5x15'),
(11, 'D7.jpg', 'lt75 lb51 5x15'),
(12, 'D8.jpg', 'lt76 6x13 Lantai 1'),
(13, 'D8-2.jpg', 'lt76 6x3 Lantai 2'),
(14, 'D9.jpg', 'lt75 lb34 5x15'),
(15, 'D9-2.jpg', 'lb 39 lt 72 6x12');

-- --------------------------------------------------------

--
-- Table structure for table `fakta`
--

CREATE TABLE `fakta` (
  `id_fakta` int(5) NOT NULL,
  `kode_fakta` varchar(50) NOT NULL,
  `isi_fakta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakta`
--

INSERT INTO `fakta` (`id_fakta`, `kode_fakta`, `isi_fakta`) VALUES
(1, 'Gambar 1', '5x10'),
(2, 'Gambar 1', '6x10'),
(3, 'Gambar 2', '5x10'),
(4, 'Gambar 2', '6x11'),
(5, 'Gambar 3', '5x10'),
(6, 'Gambar 3', '5x15'),
(7, 'Gambar 4', '6x11'),
(9, 'Gambar 5', '5x12'),
(10, 'Gambar 5', '6x10'),
(11, 'Gambar 6', '5x15'),
(12, 'Gambar 6', '6x12'),
(13, 'Gambar 7', '5x15'),
(14, 'Gambar 7', '6x12'),
(15, 'Gambar 8', '6x12'),
(16, 'Gambar 8', '7x11'),
(17, 'Gambar 9', '5x15'),
(18, 'Gambar 9', '6x12'),
(19, 'Gambar 10', 'BELUM ADA DESAIN UNTUK UKURAN DIATAS');

-- --------------------------------------------------------

--
-- Table structure for table `kesimpulan`
--

CREATE TABLE `kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL,
  `solusi` varchar(50) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kesimpulan`
--

INSERT INTO `kesimpulan` (`kode_kesimpulan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
(1, 'Solusi 1', 'Rumah 1 Lantai', 'pakar', 'setuju'),
(2, 'Solusi 1', 'Memiliki 1 Kamar Tidur', 'pakar', 'setuju'),
(3, 'Solusi 1', 'Luas Lahan <70 m2', 'pakar', 'setuju'),
(4, 'Solusi 2', 'Rumah 2 Lantai', 'pakar', 'setuju'),
(5, 'Solusi 2', 'Memiliki 2 Kamar Tidur', 'pakar', 'setuju'),
(6, 'Solusi 2', 'Luas Lahan 70 m2', 'pakar', 'setuju'),
(7, 'Solusi 3', 'Rumah 2 Lantai', 'pakar', 'setuju'),
(8, 'Solusi 3', 'Memiliki 3 Kamar Tidur', 'pakar', 'setuju'),
(9, 'Solusi 3', 'Luas Lahan 70 m2', 'pakar', 'setuju'),
(10, 'Solusi 4', 'Rumah 2 Lantai', 'pakar', 'setuju'),
(11, 'Solusi 4', 'Memiliki 4 Kamar Tidur', 'pakar', 'setuju'),
(12, 'Solusi 4', 'Luas Lahan 70 m2', 'pakar', 'setuju'),
(13, 'Solusi 5', 'Rumah 1 Lantai', 'pakar', 'setuju'),
(14, 'Solusi 5', 'Memiliki 2 Kamar Tidur', 'pakar', 'setuju'),
(15, 'Solusi 5', 'Luas Lahan 70 m2', 'pakar', 'setuju'),
(16, 'Solusi 6', 'Rumah 2 Lantai', 'pakar', 'setuju'),
(17, 'Solusi 6', 'Memiliki 2 Kamar Tidur', 'pakar', 'setuju'),
(18, 'Solusi 6', 'Luas Lahan 80 m2', 'pakar', 'setuju'),
(19, 'Solusi 7', 'Rumah 2 Lantai', 'pakar', 'setuju'),
(20, 'Solusi 7', 'Memiliki 3 Kamar Tidur', 'pakar', 'setuju'),
(21, 'Solusi 7', 'Luas Lahan 80 m2', 'pakar', 'setuju'),
(22, 'Solusi 8', 'Rumah 2 Lantai', 'pakar', 'setuju'),
(23, 'Solusi 8', 'Memiliki 4 Kamar Tidur', 'pakar', 'setuju'),
(24, 'Solusi 8', 'Luas Lahan 80 m2', 'pakar', 'setuju'),
(25, 'Solusi 9', 'Rumah 1 Lantai', 'pakar', 'setuju'),
(26, 'Solusi 9', 'Memiliki 2 Kamar Tidur', 'pakar', 'setuju'),
(29, 'Solusi 9', 'Luas Lahan 80 m2', 'pakar', 'setuju'),
(30, 'Solusi 10', 'Rumah 1 Lantai', 'pakar', 'setuju'),
(31, 'Solusi 10', 'Memiliki 3 Kamar Tidur', 'pakar', 'setuju'),
(32, 'Solusi 10', 'Luas Lahan 80 m2', 'pakar', 'setuju'),
(33, 'Solusi 11', 'Rumah 1 Lantai', 'pakar', 'setuju'),
(34, 'Solusi 11', 'Memiliki 4 Kamar Tidur', 'pakar', 'setuju'),
(35, 'Solusi 11', 'Luas Lahan 80 m2', 'pakar', 'setuju'),
(36, 'Solusi 0', 'Untuk Desain Rumah dengan data tersebut belum tersedia', 'pakar', 'setuju'),
(37, 'Solusi 0-0', 'Silahkan hubungin admin kami untuk konsultasi lebih lanjut', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `nama`) VALUES
(1, 'darmawan'),
(2, 'darmawan'),
(3, 'darmawan'),
(4, 'darmawan');

-- --------------------------------------------------------

--
-- Table structure for table `masalah`
--

CREATE TABLE `masalah` (
  `id_masalah` int(50) NOT NULL,
  `kode_masalah` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalah`
--

INSERT INTO `masalah` (`id_masalah`, `kode_masalah`, `isi_pertanyaan`) VALUES
(20, 'M1', 'Apakah budget/anggaran yang anda siapkan untuk pembangunan rumah anda kurang dari 500Jt'),
(25, 'M2', 'Apakah budget/anggaran yang anda siapkan untuk pembangunan rumah anda kurang dari 1 Milyar'),
(27, 'M1-a', 'Apakah luas lahan yang anda siapkan antara 50~70 m2'),
(28, 'M1-b', 'Apakah luas lahan yang anda siapkan antara 71~80 m2'),
(29, 'M1-c', 'Apakah anda menginginkan rumah bertingkat'),
(30, 'M1-d', 'Apakah anda hanya menginginkan 1 kamar tidur'),
(31, 'M1-e', 'Apakah anda hanya menginginkan 2 kamar tidur'),
(32, 'M1-f', 'Apakah anda hanya menginginkan 2 kamar tidur'),
(33, 'M1-g', 'Apakah anda hanya menginginkan 3 kamar tidur'),
(34, 'M1-h', 'Apakah anda menginginkan rumah bertingkat'),
(35, 'M1-i', 'Apakah anda hanya menginginkan 2 kamar tidur'),
(36, 'M1-j', 'Apakah anda hanya menginginkan 3 kamar tidur'),
(37, 'M1-k', 'Apakah anda hanya menginginkan 2 kamar tidur');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int(50) NOT NULL,
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `kode_solusi`, `isi_solusi`) VALUES
(23, 'S1', 'Solusi 1'),
(24, 'S2', 'Solusi 2'),
(25, 'S3', 'Solusi 3'),
(26, 'S4', 'Solusi 4'),
(27, 'S5', 'Solusi 5'),
(28, 'S6', 'Solusi 6'),
(29, 'S7', 'Solusi 7'),
(30, 'S8', 'Solusi 8'),
(31, 'S9', 'Solusi 9'),
(32, 'S10', 'Solusi 10'),
(33, 'S0', 'Solusi 0');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kode_supplier`, `nama_supplier`, `username`, `password`) VALUES
(1, 'sp001', 'Supplier A', 'suppliera', 'suppliera'),
(2, 'sp002', 'Supplier B', 'supplierb', 'supplierb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(2, 'Andri', 'wijaya', '$2y$10$PrC7TRgdE4Rd6h3Z6vp4AOAyA.MDyol6BeWcR7SY8EoUvs7FsXeGm', 'admin'),
(4, 'Agus', 'admin1', '$2y$10$wydhKkmoRRaabhRIq9qf7OLeUsbYNeU0jfQrcoa2Pu.fXEArIcjge', 'admin'),
(6, 'Oding', 'odading', '$2y$10$D5Y41bDQNKZPZN4KfJNMX.eWpcccW7IBWgHmcGZAhvy.Qi8/U85Xa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id_desain`);

--
-- Indexes for table `fakta`
--
ALTER TABLE `fakta`
  ADD PRIMARY KEY (`id_fakta`);

--
-- Indexes for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `masalah`
--
ALTER TABLE `masalah`
  ADD PRIMARY KEY (`id_masalah`),
  ADD UNIQUE KEY `kode_masalah` (`kode_masalah`),
  ADD UNIQUE KEY `kode_masalah_2` (`kode_masalah`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `id_desain` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fakta`
--
ALTER TABLE `fakta`
  MODIFY `id_fakta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  MODIFY `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masalah`
--
ALTER TABLE `masalah`
  MODIFY `id_masalah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
