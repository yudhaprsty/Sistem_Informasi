-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 01:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adivaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(100) NOT NULL,
  `member_pasien` varchar(50) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama_pasien` text NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `usia_pasien` int(50) NOT NULL,
  `pekerjaan_pasien` varchar(100) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `telp_pasien` varchar(12) NOT NULL,
  `riwayat_perawatan` varchar(100) NOT NULL,
  `alergi` varchar(100) NOT NULL,
  `jenis_perawatan` varchar(100) NOT NULL,
  `biaya_perawatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `member_pasien`, `tanggal_daftar`, `nama_pasien`, `jenis_kelamin`, `usia_pasien`, `pekerjaan_pasien`, `alamat_pasien`, `telp_pasien`, `riwayat_perawatan`, `alergi`, `jenis_perawatan`, `biaya_perawatan`) VALUES
(2, '546849', '0000-00-00', 'haii', 'Male', 2, 'fer', 'haihai', '123456', 'yyyy', 'hhhhh', 'haijuga', 38),
(3, '1234', '0000-00-00', 'ggg', 'Female', 12, 'hhhhh', 'gg', '12', '', '', 'wg', 0),
(5, '12213', '0000-00-00', 'wedaacf', '', 77, '', 'edfawsdfg', '12134', '', '', 'sdsdfg', 12234355),
(6, '12213', '0000-00-00', 'yudha', '', 14, 'pengangguran', 'dc', '12345', '', 'debu', 'kudis', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `status_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_profil` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `usia` int(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `status_id`, `username`, `password`, `foto_profil`, `nama`, `tanggal_lahir`, `usia`, `alamat`, `no_telp`) VALUES
(1, 1, 'admin', '1234', 'images/media.jpg', 'tina', '2017-11-30', 22, 'Dramaga Cantik', '0987'),
(2, 0, 'resepsionis', '1234', 'images/picture.jpg', 'atun', '2017-11-15', 15, 'bogor', '812');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
