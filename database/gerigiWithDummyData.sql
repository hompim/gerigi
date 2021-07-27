-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2021 at 05:03 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

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

DROP TABLE IF EXISTS `link`;
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL,
  `id_kls_bsr` int(11) NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL,
  `link_zoom` varchar(256) NOT NULL,
  `link_presensi` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
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

DROP TABLE IF EXISTS `linkrundown`;
CREATE TABLE IF NOT EXISTS `linkrundown` (
  `idTest` int(11) NOT NULL,
  `idRundown` int(11) NOT NULL,
  `link` varchar(256) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL,
  PRIMARY KEY (`idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkrundown`
--

INSERT INTO `linkrundown` (`idTest`, `idRundown`, `link`, `idKelBesar`, `dateUse`, `dateCreate`) VALUES
(1, 2, 'https://intip.in/pretest', 1, '2021-07-24', '2021-07-23'),
(2, 4, 'https://intip.in/postest', 1, '2021-07-24', '2021-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbinfotugas`
--

DROP TABLE IF EXISTS `tbinfotugas`;
CREATE TABLE IF NOT EXISTS `tbinfotugas` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tugas` varchar(256) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `SubmitForm` text NOT NULL DEFAULT 'tidak',
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbinfotugas`
--

INSERT INTO `tbinfotugas` (`id_info`, `nama_tugas`, `keterangan`, `SubmitForm`, `dateUse`, `dateCreate`) VALUES
(1, 'Penugasan Pra-gerigi 1', 'melakukan cover dance jingle gerigi seperti pada contoh <a href=\"https://google.com\">berikut.</a><br>di upload paling lambat hari ke 3 pelaksanaan gerigi pada instagram masing-masing dengan caption ini itu sebagainya dan hastag kaya gini serta profile instagram publik', 'tidak', '2021-07-28', '2021-07-25'),
(2, 'tugas gerigi day-2', 'membuat vidio tentang kontribusi yang akan di berikan untuk ITS', 'tidak', '2021-07-28', '2021-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelbesar`
--

DROP TABLE IF EXISTS `tbkelbesar`;
CREATE TABLE IF NOT EXISTS `tbkelbesar` (
  `idKelBesar` int(11) NOT NULL AUTO_INCREMENT,
  `namaKelBesar` varchar(100) NOT NULL,
  `namaPicKelBesar` varchar(100) NOT NULL,
  `cpPicKelBesar` varchar(100) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`idKelBesar`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbkelbesar`
--

INSERT INTO `tbkelbesar` (`idKelBesar`, `namaKelBesar`, `namaPicKelBesar`, `cpPicKelBesar`, `dateCreate`) VALUES
(1, 'Covid', 'Hendry', 'Hendry', '2021-07-22 17:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelkecil`
--

DROP TABLE IF EXISTS `tbkelkecil`;
CREATE TABLE IF NOT EXISTS `tbkelkecil` (
  `idKelKecil` int(11) NOT NULL AUTO_INCREMENT,
  `namaKelKecil` varchar(100) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `namaPicKelKecil` varchar(100) NOT NULL,
  `cpPicKelKecil` varchar(100) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`idKelKecil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbkelkecil`
--

INSERT INTO `tbkelkecil` (`idKelKecil`, `namaKelKecil`, `idKelBesar`, `namaPicKelKecil`, `cpPicKelKecil`, `dateCreate`) VALUES
(1, 'Isoman', 1, 'Hendry', 'Dida(line)', '2021-07-22 17:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbrundown`
--

DROP TABLE IF EXISTS `tbrundown`;
CREATE TABLE IF NOT EXISTS `tbrundown` (
  `idRundown` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jam` time NOT NULL,
  `hasLink` varchar(256) NOT NULL,
  `dateUse` date NOT NULL,
  `dateCreate` date NOT NULL,
  PRIMARY KEY (`idRundown`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbrundown`
--

INSERT INTO `tbrundown` (`idRundown`, `nama`, `jam`, `hasLink`, `dateUse`, `dateCreate`) VALUES
(1, 'Pembukaan', '09:00:00', 'Tidak', '2021-07-27', '2021-07-23'),
(2, 'Pretest', '09:15:00', 'Ya', '2021-07-27', '2021-07-23'),
(3, 'Materi', '09:30:00', 'Tidak', '2021-07-27', '2021-07-23'),
(4, 'Postest', '10:30:00', 'Ya', '2021-07-27', '2021-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbshorten`
--

DROP TABLE IF EXISTS `tbshorten`;
CREATE TABLE IF NOT EXISTS `tbshorten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `shorten` varchar(256) NOT NULL,
  `origin` varchar(256) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbshorten`
--

INSERT INTO `tbshorten` (`id`, `name`, `shorten`, `origin`, `date_created`) VALUES
(1, 'Breakpoint', 'Breakpoint', 'https://breakpoint.id/', '2021-07-24 09:56:36'),
(2, 'Daffa', 'Daffa', 'http://daffakurnia.me', '2021-07-24 10:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbtugas`
--

DROP TABLE IF EXISTS `tbtugas`;
CREATE TABLE IF NOT EXISTS `tbtugas` (
  `idTugas` int(11) NOT NULL,
  `idInfoTugas` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `idKelKecil` int(11) NOT NULL,
  `link` varchar(256) NOT NULL,
  `dateCreate` date NOT NULL,
  PRIMARY KEY (`idTugas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtugas`
--

INSERT INTO `tbtugas` (`idTugas`, `idInfoTugas`, `idUser`, `idKelBesar`, `idKelKecil`, `link`, `dateCreate`) VALUES
(1, 1, 1, 1, 1, 'google.com', '2021-07-24'),
(2, 2, 2, 1, 1, 'www.youtube.com', '2021-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

DROP TABLE IF EXISTS `tbuser`;
CREATE TABLE IF NOT EXISTS `tbuser` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `userPass` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `idKelBesar` int(11) NOT NULL,
  `idKelKecil` int(11) NOT NULL,
  `role` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `dateUpdate` datetime NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `username`, `userPass`, `nama`, `idKelBesar`, `idKelKecil`, `role`, `status`, `dateUpdate`) VALUES
(1, '05311940000019', 'ef8961d24bdfaff391c292cd82fd3bed', 'Dida Prasetyo Rahmat', 1, 1, 'maba', 1, '2021-07-22 17:29:42'),
(2, '1234567890', 'ef8961d24bdfaff391c292cd82fd3bed', 'Anggota ke-2', 1, 1, 'maba', 1, '2021-07-23 17:22:02'),
(3, '123123123', 'f5bb0c8de146c67b44babbf4e6584cc0', 'Bambang', 1, 1, 'maba', 0, '2021-07-23 17:23:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
