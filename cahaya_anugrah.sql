-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 08:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cahaya_anugrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` int(11) UNSIGNED NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `kategori`, `kondisi`, `jumlah`, `nama`, `harga`, `image`, `deskripsi`) VALUES
(4, 'mesin', 'Baru', 12, 'Sprayer', 1000000, 'images/img_20191210105103.jpg', 'apapun deskripsinya tetap aku padamu');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `password`, `no_telp`, `gambar`, `gender`, `alamat`, `email`, `tgl_lahir`) VALUES
(10, 'Reza Anugrah', 'apamoe', '081355000114', 'images/img_20191210100435.jpg', 'Laki-laki', 'jl.padi unggul 1', 'rheza.anugrah00@gmail.com', '2019-12-02'),
(11, 'Siapa', 'reza', '081369874521', 'images/img_20191210115346.jpg', 'Perempuan', 'wonomulyo', 'apamoe.moemoe@gmail.com', '2019-12-04'),
(12, 'asdf', 'asdfg', '12345678', 'images/img_20191210120332.jpg', 'Laki-laki', 'adsadwasdq', 'asdad.asdads@gmail.com', '2019-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kd_barang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
