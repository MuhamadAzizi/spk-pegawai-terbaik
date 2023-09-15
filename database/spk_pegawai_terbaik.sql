-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pegawai_terbaik`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat` int(3) DEFAULT NULL,
  `golongan` int(3) DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan_1` varchar(50) NOT NULL,
  `jabatan_2` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hp_1` varchar(13) NOT NULL,
  `hp_2` varchar(13) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `no_npwp` varchar(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat_1` text NOT NULL,
  `alamat_2` text NOT NULL,
  `level_akun` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` varchar(3) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `bobot` int(11) NOT NULL,
  `jenis` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `bobot`, `jenis`) VALUES
('K1', 'Capaian Kinerja Pegawai', 5, 'benefit'),
('K2', 'Perilaku', 4, 'benefit'),
('K3', 'Keterlambatan', 2, 'cost'),
('K4', 'Kualitas Pekerjaan', 2, 'benefit'),
('K5', 'Ketepatan Waktu Pengumpulan', 2, 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `matrix`
--

CREATE TABLE `matrix` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` varchar(3) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'kasubag_tu'),
(2, 'pimpinan', 'pimpinan', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pangkat` (`pangkat`),
  ADD KEY `golongan` (`golongan`),
  ADD KEY `level_akun` (`level_akun`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrix`
--
ALTER TABLE `matrix`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `matrix`
--
ALTER TABLE `matrix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matrix`
--
ALTER TABLE `matrix`
  ADD CONSTRAINT `matrix_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matrix_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
