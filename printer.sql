-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 09:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printer`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto`, `harga`, `stok`, `deskripsi`) VALUES
(1, 'Printer EPSON D1121', 'printer1.jpg.png', 10000000, 13, 'Printer epson terbaru'),
(2, 'Printer HP A3323', 'printer2.jpg.png', 14000000, 14, 'Printer HP Terbaru'),
(3, 'Printer EPSON A3363 PRO', 'printer3.jpg.png', 21000000, 14, 'Printer Epson Terbaru'),
(4, 'Printer SAMSUNG G2354', 'printer4.jpg.png', 150000000, 14, 'Printer Samsung Terbaru'),
(6, 'SUKASTRIYO', 'pak sukas.png', 12000000, 0, 'Barang bagus no minus');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_whatsapp` text NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `subtotal` int(50) NOT NULL,
  `foto` text NOT NULL,
  `status` enum('Proses','Terverifikasi','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `nama_lengkap`, `alamat`, `nomor_whatsapp`, `nama_produk`, `subtotal`, `foto`, `status`) VALUES
(1, '2023-04-13', 'Muhammad asraf', 'jl. adul muis', '0888775556', 'Printer SAMSUNG G2354', 10000000, 'printer1.jpg.png', 'Proses'),
(2, '2023-04-13', 'Muhammad asraf', 'jl. adul muis', '0888775556', 'Printer SAMSUNG G2354', 14000000, 'printer2.jpg.png', 'Proses'),
(3, '2023-04-13', 'Muhammad asraf', 'jl. adul muis', '0888775556', 'Printer SAMSUNG G2354', 21000000, 'printer3.jpg.png', 'Ditolak'),
(4, '2023-04-13', 'Muhammad asraf', 'jl. adul muis', '0888775556', 'Printer SAMSUNG G2354', 150000000, 'printer4.jpg.png', 'Terverifikasi'),
(5, '2023-04-13', 'Muhammad asraf', 'sadadasd', '0876856464', 'Printer EPSON D1121', 10000000, 'printer1.jpg.png', 'Proses'),
(6, '2023-04-13', 'Muhammad asraf', 'jl. adul muis', '0897785574', 'SUKASTRIYO', 120000000, 'pak sukas.png', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `roles` enum('Admin','Customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `foto`, `roles`) VALUES
(11232, 'Muhammad Afrizal', 'admin', 'admin', '', 'Admin'),
(11233, 'Rizki Akbar', 'user', 'rizki', '', 'Customer'),
(11234, 'Muhammad asraf', 'user', 'aco', '', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
