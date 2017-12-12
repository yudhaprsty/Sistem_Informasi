-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 03:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyawan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nip`, `nama`, `jk`, `tgl_masuk`, `status`) VALUES
(1, '320102000101', 'Dina', 'Perempuan', '2016-03-01', 'Tetap'),
(2, '320102000102', 'Antonia', 'Perempuan', '2016-03-17', 'Tetap'),
(3, '320102000103', 'Andri', 'Laki-laki', '2016-03-21', 'K0'),
(4, '320102000104', 'Indah', 'Perempuan', '2016-03-25', 'K1'),
(5, '320102000105', 'Lastri', 'Perempuan', '2016-03-27', 'Tetap'),
(6, '320102000106', 'Andi', 'Laki-laki', '2016-03-30', 'Tetap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
