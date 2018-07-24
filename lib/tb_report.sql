-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 05:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id_report` int(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `kode_klasifikasi` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `judul_stem` text NOT NULL,
  `tgl_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id_report`, `nim`, `kode_klasifikasi`, `judul`, `judul_stem`, `tgl_terbit`) VALUES
(28, 201431299, 'KLS1807006', 'lomba inovasi icon plus', 'lomba inovasi icon plus', '2018-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_klasifikasi` (`kode_klasifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id_report` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD CONSTRAINT `tb_report_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`),
  ADD CONSTRAINT `tb_report_ibfk_2` FOREIGN KEY (`kode_klasifikasi`) REFERENCES `tb_klasifikasi` (`kode_klasifikasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
