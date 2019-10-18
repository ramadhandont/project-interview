-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Okt 2019 pada 21.00
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_nm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_nm`) VALUES
(1, 'Datsun'),
(2, 'Honda'),
(3, 'Toyota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `model_nm` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`model_id`, `model_nm`, `brand_id`) VALUES
(1, 'CROSS', 1),
(2, 'GO PANCA', 1),
(3, 'JAZZ', 2),
(4, 'MOBILIO', 2),
(5, 'NEW BRIO', 2),
(6, 'KIJANG', 3),
(7, 'HAICE', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `bbm` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`product_id`, `brand`, `model`, `bbm`, `harga`, `foto`) VALUES
(6, 'Datsun', 'CROSS', NULL, NULL, 'echarts (3).png'),
(7, 'Datsun', 'CROSS', NULL, NULL, 'images.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `variant`
--

CREATE TABLE `variant` (
  `variant_id` int(11) NOT NULL,
  `variant_nm` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `variant`
--

INSERT INTO `variant` (`variant_id`, `variant_nm`, `brand_id`, `model_id`) VALUES
(1, 'GO CROSS - 2018', 1, 1),
(2, 'A', 1, 2),
(3, 'D', 1, 2),
(4, 'T', 1, 2),
(5, 'RS', 2, 3),
(6, 'S', 2, 3),
(7, 'S', 2, 4),
(8, 'SATYA', 2, 5),
(9, '2.0 G', 3, 6),
(10, '2.0 V', 3, 6),
(11, 'COMMUTER MANUAL', 3, 7),
(12, 'STD MANUAL', 3, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`variant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `variant`
--
ALTER TABLE `variant`
  MODIFY `variant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
