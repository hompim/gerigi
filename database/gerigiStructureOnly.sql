-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 11:56 PM
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
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `id_kls_bsr` int(11) NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL,
  `link_zoom` varchar(256) NOT NULL,
  `link_presensi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `linkrundown`
--

CREATE TABLE `linkrundown` (
  `idTest` int(11) NOT NULL,
  `idRundown` int(11) NOT NULL,
  `link` varchar(256) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbinfotugas`
--

CREATE TABLE `tbinfotugas` (
  `id_info` int(11) NOT NULL,
  `nama_tugas` varchar(256) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `SubmitForm` text NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbrundown`
--

CREATE TABLE `tbrundown` (
  `idRundown` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jam` time NOT NULL,
  `hasLink` varchar(256) NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbshorten`
--

CREATE TABLE `tbshorten` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `shorten` varchar(256) NOT NULL,
  `origin` varchar(256) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbtugas`
--

CREATE TABLE `tbtugas` (
  `idTugas` int(11) NOT NULL,
  `idInfoTugas` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `idKelKecil` int(11) NOT NULL,
  `link` varchar(256) NOT NULL,
  `dateCreate` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `role` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `dateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkrundown`
--
ALTER TABLE `linkrundown`
  ADD PRIMARY KEY (`idTest`);

--
-- Indexes for table `tbinfotugas`
--
ALTER TABLE `tbinfotugas`
  ADD PRIMARY KEY (`id_info`);

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
-- Indexes for table `tbrundown`
--
ALTER TABLE `tbrundown`
  ADD PRIMARY KEY (`idRundown`);

--
-- Indexes for table `tbshorten`
--
ALTER TABLE `tbshorten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtugas`
--
ALTER TABLE `tbtugas`
  ADD PRIMARY KEY (`idTugas`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkrundown`
--
ALTER TABLE `linkrundown`
  MODIFY `idTest` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbinfotugas`
--
ALTER TABLE `tbinfotugas`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkelbesar`
--
ALTER TABLE `tbkelbesar`
  MODIFY `idKelBesar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkelkecil`
--
ALTER TABLE `tbkelkecil`
  MODIFY `idKelKecil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbrundown`
--
ALTER TABLE `tbrundown`
  MODIFY `idRundown` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbshorten`
--
ALTER TABLE `tbshorten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbtugas`
--
ALTER TABLE `tbtugas`
  MODIFY `idTugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
