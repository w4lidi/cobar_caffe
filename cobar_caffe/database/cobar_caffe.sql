-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobar_caffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_menu`
--

CREATE TABLE `jenis_menu` (
  `id_jenis_menu` int(3) NOT NULL,
  `jenis_menus` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_menu`
--

INSERT INTO `jenis_menu` (`id_jenis_menu`, `jenis_menus`, `status`, `create_at`) VALUES
(1, 'makanan', 0, '2022-04-19 21:57:33'),
(2, 'minuman', 1, '2022-04-19 21:57:33'),
(4, 'snack', 1, '2022-04-23 23:03:28'),
(5, 'soft drink', 1, '2022-04-23 23:03:28'),
(12, 'BBQ', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `id_jenis_menu` int(3) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_jenis_menu`, `nama_menu`, `stok`, `harga`, `created_at`) VALUES
(2, 2, 'jus sirsak', 10, 10000, '2022-04-19 22:09:21'),
(6, 1, 'balado', 200, 22000, '0000-00-00 00:00:00'),
(14, 12, 'balado', 20, 10000, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` enum('kasir','manager') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `level`, `username`, `password`) VALUES
(27, 'walidi wahyu pratama', 'manager', 'TI17200054', 'c20ad4d76fe97759aa27a0c99bff6710'),
(33, 'aglek', 'kasir', 'TI17200054', 'e9a10ed878c26db3233293357112a846'),
(38, 'rama', 'manager', 'we23', '244b35fb2af3e6b91a3f4c7d63fafc28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD PRIMARY KEY (`id_jenis_menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fk_to_menu` (`id_jenis_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  MODIFY `id_jenis_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_to_menu` FOREIGN KEY (`id_jenis_menu`) REFERENCES `jenis_menu` (`id_jenis_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
