-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 06:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkelbesar`
--

CREATE TABLE `tbkelbesar` (
  `idKelBesar` int(11) NOT NULL,
  `namaKelBesar` varchar(100) NOT NULL,
  `namaPicKelBesar` varchar(100) NOT NULL,
  `cpPicKelBesar` varchar(100) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbkelbesar`
--

INSERT INTO `tbkelbesar` (`idKelBesar`, `namaKelBesar`, `namaPicKelBesar`, `cpPicKelBesar`, `dateCreate`) VALUES
(1, 'Kesehatan', 'Daffa', 'daffa', '2021-07-22 17:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelkecil`
--

CREATE TABLE `tbkelkecil` (
  `idKelKecil` int(11) NOT NULL,
  `namaKelKecil` varchar(100) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `namaPicKelKecil` varchar(100) NOT NULL,
  `cpPicKelKecil` varchar(100) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbkelkecil`
--

INSERT INTO `tbkelkecil` (`idKelKecil`, `namaKelKecil`, `idKelBesar`, `namaPicKelKecil`, `cpPicKelKecil`, `dateCreate`) VALUES
(1, 'Rumah Sakit', 1, 'Daffa', 'daffa (line)', '2021-07-22 17:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `userPass` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `idKelKecil` int(11) NOT NULL,
  `role` text NOT NULL DEFAULT 'maba',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `dateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `username`, `userPass`, `nama`, `idKelBesar`, `idKelKecil`, `role`, `status`, `dateUpdate`) VALUES
(1, '05311940000019', '552953323f8676afbc885a686b183c9f', 'Dida Prasetyo Rahmat', 1, 1, 'maba', 0, '2021-07-22 17:29:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkelbesar`
--
ALTER TABLE `tbkelbesar`
  ADD PRIMARY KEY (`idKelBesar`);

--
-- Indexes for table `tbkelkecil`
--
ALTER TABLE `tbkelkecil`
  ADD PRIMARY KEY (`idKelKecil`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbkelbesar`
--
ALTER TABLE `tbkelbesar`
  MODIFY `idKelBesar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbkelkecil`
--
ALTER TABLE `tbkelkecil`
  MODIFY `idKelKecil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
