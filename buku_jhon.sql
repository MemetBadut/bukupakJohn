-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 03:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_jhon`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `Id_buku` int(10) NOT NULL,
  `Nama_buku` varchar(50) NOT NULL,
  `Kategori` char(30) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Rating` float NOT NULL,
  `Voter` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`Id_buku`, `Nama_buku`, `Kategori`, `Author`, `Rating`, `Voter`) VALUES
(1, 'Rumah Kaca', 'novel', 'Pramoedya Ananta Toer', 4.35, 49),
(2, 'Cantik itu Luka', 'novel', 'Eka Kurniawan', 4.05, 55),
(3, 'Seporsi Mie Ayam Sebelum Mati', 'novel', 'Brian Khrisna', 4.4, 12000),
(4, 'Janji untuk Ayah', 'novel', 'Nurunala', 4, 1580),
(5, 'TUBE', 'novel', 'Sohn Won  Pyung', 3.95, 12088),
(6, 'Ikhlas Penuh Luka', 'novel', 'Boy  Chandra', 4.03, 1080),
(7, 'Legend Of Heavenly Chaos  Demon', 'Manhwa', 'Hanjoong Walya', 4.5, 25443),
(8, 'The Greatest Estate Developer', 'Manhwa', 'BK_Moon', 4.88, 35400),
(9, 'Nano Machine', 'Manhwa', 'Redice Studio', 4.89, 54900),
(10, 'Lookism', 'Manhwa', 'Park  Tae-Joon Cartoon', 3.55, 8723);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`Id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `Id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
