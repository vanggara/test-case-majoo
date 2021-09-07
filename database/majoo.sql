-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 04:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `ID_PEMBELI` int(11) NOT NULL,
  `NAMA_DEPAN_PEMBELI` varchar(100) NOT NULL,
  `NAMA_BELAKANG_PEMBELI` varchar(100) NOT NULL,
  `EMAIL_PEMBELI` varchar(100) NOT NULL,
  `ALAMAT_PEMBELI` varchar(100) NOT NULL,
  `NEGARA_PEMBELI` varchar(100) NOT NULL,
  `PROVINSI_PEMBELI` varchar(100) NOT NULL,
  `KODE_POS_PEMBELI` varchar(50) NOT NULL,
  `ID_PRODUK` int(11) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`ID_PEMBELI`, `NAMA_DEPAN_PEMBELI`, `NAMA_BELAKANG_PEMBELI`, `EMAIL_PEMBELI`, `ALAMAT_PEMBELI`, `NEGARA_PEMBELI`, `PROVINSI_PEMBELI`, `KODE_POS_PEMBELI`, `ID_PRODUK`, `STATUS`) VALUES
(11, 'Vicky', 'Anggara', 'vickyanggara16@gmail.com', 'RT2 RW2 No,12', 'Indonesia', 'Jawa Timur', '61471', 3, 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_PRODUK` int(11) NOT NULL,
  `NAMA_PRODUK` varchar(100) NOT NULL,
  `HARGA_PRODUK` int(11) NOT NULL,
  `DESKRIPSI_PRODUK` varchar(500) NOT NULL,
  `FOTO_PRODUK` varchar(100) NOT NULL,
  `DTC_CRT` date NOT NULL,
  `DTM_UPD` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `NAMA_PRODUK`, `HARGA_PRODUK`, `DESKRIPSI_PRODUK`, `FOTO_PRODUK`, `DTC_CRT`, `DTM_UPD`) VALUES
(3, 'majoo Pro', 2750000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.', 'paket-advance.png', '0000-00-00', NULL),
(9, 'majoo Advance', 2750000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.', 'paket-advance.png', '0000-00-00', NULL),
(10, 'majoo LifeStyle', 2750000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luc', 'paket-lifestyle.png', '0000-00-00', NULL),
(11, 'majoo Desktop', 2750000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat lectus vel pulvinar dignissim. Quisque tempor augue nulla, non convallis mauris aliquet luc', 'paket-desktop.png', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME_USER` varchar(50) NOT NULL,
  `PASSWORD_USER` varchar(50) NOT NULL,
  `LAST_LOGIN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME_USER`, `PASSWORD_USER`, `LAST_LOGIN`) VALUES
(1, 'admin', 'password', '2021-09-07 04:34:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`ID_PEMBELI`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_PRODUK`),
  ADD UNIQUE KEY `NAMA_PRODUK` (`NAMA_PRODUK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `USERNAME_USER` (`USERNAME_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `ID_PEMBELI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_PRODUK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
