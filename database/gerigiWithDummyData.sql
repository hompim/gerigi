-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 04:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `id_kls_bsr`, `dateUse`, `dateCreate`, `link_zoom`, `link_presensi`) VALUES
(1, 1, '2021-07-23', '2021-07-23', 'https://zoom.us/day1', 'https://intip.in/Absenday1'),
(2, 1, '2021-07-24', '2021-07-24', 'https://zoom.us/day2', 'https://intip.in/Absenday1');

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

--
-- Dumping data for table `linkrundown`
--

INSERT INTO `linkrundown` (`idTest`, `idRundown`, `link`, `idKelBesar`, `dateUse`, `dateCreate`) VALUES
(1, 2, 'https://intip.in/pretest', 1, '2021-07-24', '2021-07-23'),
(2, 4, 'https://intip.in/postest', 1, '2021-07-24', '2021-07-23');

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

--
-- Dumping data for table `tbrundown`
--

INSERT INTO `tbrundown` (`idRundown`, `nama`, `jam`, `hasLink`, `dateUse`, `dateCreate`) VALUES
(1, 'Pembukaan', '09:00:00', 'Tidak', '2021-07-23', '2021-07-23'),
(2, 'Pretest', '09:15:00', 'Ya', '2021-07-23', '2021-07-23'),
(3, 'Materi', '09:30:00', 'Tidak', '2021-07-23', '2021-07-23'),
(4, 'Postest', '10:30:00', 'Ya', '2021-07-23', '2021-07-23');

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
(1, '05311940000019', 'ef8961d24bdfaff391c292cd82fd3bed', 'Dida Prasetyo Rahmat', 1, 1, 'maba', 1, '2021-07-22 17:29:42'),
(2, '1234567890', 'ef8961d24bdfaff391c292cd82fd3bed', 'Anggota ke-2', 1, 1, 'maba', 1, '2021-07-23 17:22:02'),
(3, '123123123', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Bambang', 1, 1, 'maba', 0, '2021-07-23 17:23:31');

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
-- AUTO_INCREMENT for table `tbshorten`
--
ALTER TABLE `tbshorten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
