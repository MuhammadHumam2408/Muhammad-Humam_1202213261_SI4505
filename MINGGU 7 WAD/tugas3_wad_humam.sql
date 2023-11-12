-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Nov 09, 2023 at 01:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas3_wad_humam`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_motor`
--

CREATE TABLE `data_motor` (
  `id_motor` varchar(99) NOT NULL,
  `nama_motor` varchar(99) NOT NULL,
  `merk_motor` varchar(99) NOT NULL,
  `warna_motor` varchar(99) NOT NULL,
  `harga_motor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_motor`
--

INSERT INTO `data_motor` (`id_motor`, `nama_motor`, `merk_motor`, `warna_motor`, `harga_motor`) VALUES
('A100', 'JUPITER', 'YAMAHA', 'Putih', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_motor`
--
ALTER TABLE `data_motor`
  ADD PRIMARY KEY (`id_motor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
