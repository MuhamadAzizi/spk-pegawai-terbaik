-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2021 at 06:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nip` varchar(25) NULL,
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
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nip`, `nama`, `pangkat`, `golongan`, `tempat_lahir`, `tgl_lahir`, `jabatan_1`, `jabatan_2`, `email`, `password`, `hp_1`, `hp_2`, `no_rek`, `no_npwp`, `nik`, `alamat_1`, `alamat_2`, `level_akun`) VALUES
(1, '19690917 199403 2 002', 'Dra. Tuty Amalia, MAP.', 1, 1, 'Bandung', '1969-09-17', 'Kepala Kantor', 'Kuasa Pengguna Anggaran', 'tamalia@bps.go.id', '$2y$10$CDfpCESi4I2.ob9HBNIExe9j6gWbsVk1vgz5gJ4g6YsSi2FarIusi', '082115887769', '', '1532-01-001221-50-2', '694497397423000', '3273025709690014', 'Jl. Bukit Dago Selatan No. 33 RT. 006/003, Dago, Coblong, Kota Bandung, Provinsi Jawa Barat', 'Rumah Dinas', 1),
(2, '19740815 200604 2 001', 'Suhuda Patmiyati SE, MM.', 2, 2, 'Bandung', '1974-08-15', 'Kasubbag Umum', '', 'suhuda@bps.go.id', '$2y$10$yf5fJQFKT2o4JSqRrhlEr.uB.szukqCsLnckxPuSjxBEI0N.aDjF2', '081319085841', '089627874112', '0188-01-044118-50-6', '486620180401000', '3604015508740126', 'Jl. KM. Idris Bo. 20/49, RT. 002 RW. 013, Kel. Cipare, Kec. Serang, kota Serang', '', NULL),
(3, '19650731 199402 2 001', 'Dra. Surasti', 3, 3, 'Wonogiri', '1965-07-31', 'Koordinator Fungsi Statistik Sosial', '', 'surasti@bps.go.id', '$2y$10$r3a6xNZN2W7riW9/nhwZP.hYgKVpKBHJOQIc.YdnHZCqMJzTmnGQu', '081299342445', '', '0120-01-059518-50-5', '244404125418000', '3603127107650003', 'Perum Bumi Asti Tangerang', '', NULL),
(4, '19630615 198303 1 006', 'R dudung Abdul Hakim Heronusantoro, SE.', 3, 3, 'Indramayu', '1963-06-15', 'Koordinator Fungsi Statistik Produksi', '', 'dudung.hakim@bps.go.id', '$2y$10$qmalQ4DQK43hTvg6MTFifOgIpMuNZJURmBPExCMJeW1VLSIqov3ay', '081218136795', '', '0120-01-008500-50-9', '692933336402000', '3671081506630003', 'Jl. Cempaka II No. 71 Kel. Periuk Jaya Kec. Periuk Kota Tangaerang', '', NULL),
(5, '19740211 199403 1 002', 'Cipno Hartono, S.PKP., MM.', 2, 2, 'Indramayu', '1974-02-11', 'Koordinator Fungsi Statistik Distribusi', '', 'cipno@bps.go.id', '$2y$10$p2V4vPe87sQJAqf9SXywqOuUJdoORoWWQHCy91Cq5Xr5hG6gvtlWe', '081808132608', '', '3853-01-018276-53-8', '774466130401000', '3604101102740004', 'Taman Pipitan Indah Blok B4 No.47 RT.19 / RW.05 Kel. Pipitan Kec. Walantaka Kota Serang - 42183', '', NULL),
(6, '19830425 200602 2 001', 'Afni Hasriati, SST, M.Si.', 2, 2, '', '1983-04-25', 'Koordinator Fungsi Nerwilis', '', 'afni@bps.go.id', '$2y$10$7FKpQLhDT4JCeDVu/D/WrOVWFVOG6v8ijD7a0vYkiMgCKTh2vx9/O', '085966480698', '', '', '759361629402000', '', '', '', NULL),
(7, '19830515 200902 1 011', 'Deny Gumbira, S.Si.', 3, 3, 'Serang', '1983-05-15', 'Koordinator Fungsi I P D S', 'Pejabat Pengadaan', 'deny.gumbira@bps.go.id', '$2y$10$1T1BwYIaPGNaufMNLkSVSOudQ/8KNKRjfP0t9HXkYy4DGPuwLPmtW', '085966480698', '081391318053', '0084-01-047899-50-5', '341766996401000', '3673051505830001', 'Perum KSB Kav. Kelapa Gading Blok Z No. 29 Rt. 06/10, Kelurahan Banjaragung, Kecamatan Cipocok Jaya', '', NULL),
(8, '19710417 199303 2 003', 'Lilis Arisah', 4, 4, 'Serang', '1968-10-28', 'Staf Sub Bagian Umum', 'Staf Pengelola Keuangan / PPABP', 'larisah@bps.go.id', '$2y$10$cNCUlmyQCfDB2hxPKVLaJuwWjG70qRrA.HgWByt4cvWqG3W3jBBOu', '087774546841', '', '0084-01-012797-50-0', '596533398401000', '3604135704710001', 'Kp./Ds. Tirtayasa RT.05 / RW.02 Kec. Tirtayasa Kab. Serang - 42193', '', NULL),
(9, '19800811 201406 1 002', 'Bastian Komara', 5, 5, 'Jakarta Timur', '1980-08-11', 'Staf Sub Bagian Umum', 'Bendahara Pengeluaran', 'bastian.komara@bps.go.id', '$2y$10$eBQZ6nfTdKzAhA.edmcFAu7NsvO8lLUtNv6KhxnbZrcIMcGhYrRYa', '081382244557', '085966691116', '0084-01-071442-50-8', '711535948407000', '3275011108800035', 'Jl. P. Sumatra 6/28 RT. 005/014, Kel. Aren Jaya, Kec. Bekasi Timur, Kota Bekasi - 17111 Provinsi Jawa Barat', '', NULL),
(10, '19780106 201101 2 007', 'Sari Muharani, S.Sos', 4, 4, 'Jakarta', '1978-01-06', 'Statistisi Pertama Fungsi Nerwilis', 'Staf Fungsi Nerwilis', 'muharani@bps.go.id', '$2y$10$vYRRwwnCL8LJtAwplJ0Ieuk3OttcJsAx4LA07vxxvUWFcs.NSmdA2', '081380088082', '', '', '684806607411000', '7571024601780003', 'JL.BULAK WANGI 4 KEDAUNG,PAMULANG,KAB.TANGERANG  ', '', NULL),
(11, '19971105 201912 2 001', 'Rizki Nur Novitasari, S.Tr.Stat.', 6, 6, 'Semarang', '1997-11-05', 'Staf Fungsi Statistik Sosial', '', 'rizki.nur@bps.go.id', '$2y$10$Vh2syeMr2w73ADfSH/Dxaep6Lks.O4v65fRYAzhEtU5AK7vWmC2LK', '087732175796', '', '0084-01-134401-50-6', '927851014517000', '3374084511970003', 'Jl. Ijen Dalam I No. 27 Kel. Jombang Kec. Candisari Kota Semarang Prov. Jawa Tengah', '', NULL),
(12, '19630405 198603 1 002', 'Mabrur Ams', 3, 3, 'Serang', '1963-04-05', 'Statistisi Penyedia Fungsi Statistik Distribusi', 'Staf Fungsi Statistik Distribusi', 'mabrur@bps.go.id', '$2y$10$wGT02HJAwQCgZtcYdF65wen6vuIs84c3ozwJeiN8oUg/cB4A6YpNq', '087771750692', '', '4849-01-009414-53-7', '596533547401000', '3604130504630001', 'Kp. Tipar Indah RT. 006 RW 003, Desa Tirtayasa, Kec. Tirtayasa, Kab. Serang', '', NULL),
(13, '19970920 201912 2 001', 'Dian Eka Pratiwi, S.Tr.Stat.', 6, 6, 'Kendal', '1997-09-20', 'Staf Fungsi Statistik Produksi', '', 'dian.pratiwi@bps.go.id', '$2y$10$Itx0wnLz6VqJ2OUOtyp19OsC989mBRwhFvEqwoMxr47w09c1YGnOK', '085642735717', '', '0084-01-134402-50-2', '928335181513000', '3324076009970001', 'Dusun Somopuro RT. 002/007 Kel. Bebengan Kec. Boja Kab. Kendal Prov. Jawa Tengah', '', NULL),
(14, '19890101 201012 2 004', 'Nurfika, S.ST.', 2, 2, 'Jakarta', '1989-01-01', 'Staf Seksi IPDS', '', 'nurfika@bps.go.id', '$2y$10$Gh/vNNKwZU4J7/ZaRnyueuFuLfdQnykumX.r3afWmteH/xEl5LMz2', '081291523654', '', '3047-01-002826-50-6 ', '578590515009000', '3175094101890006', 'Cibubur, Jakarta Timur', '', NULL),
(16, '19820308 200901 1 012', 'Ade Supriyanto', 7, 7, 'Serang', '1982-03-08', 'KSK Pamarayan', '', 'adesupri@bps.go.id', '$2y$10$fn/E81OhrYqW/NAOOaA9HOHx8qJL0dpYpxJYK4S/k/1u0hRnL/N/O', '081317071785', '085959668509', '4843-01-008532-53-2', '774466163401000', '3604230803820004', 'Kp. Cimaung Kadu RT.24 / RW.07 Ds. Sukamenak Kec. Cikeusal Kab. Serang - 42175', '', NULL),
(17, '19840703 200604 1 001', 'Ahmad Rafiq', 7, 7, 'Serang', '1984-07-03', 'KSK Ciomas', '', 'arafiq@bps.go.id', '$2y$10$Qpk3v1XYpb6u9gNapsS/.uEB7KkZ6G1kamyE0SLPxBMjxLPXpWW/i', '089651503008', '', '0084-01-049640-50-4', '596533687401000', '3604220307840005', 'Perumahan BPI Panggungrawi Blok W No. 10, RT. 006 RW. 006, Kel. Panggungrawi, Kota Cilegon', '', NULL),
(18, '19751025 200901 1 006', 'Ahmad Suparyadi', 7, 7, 'Serang', '1975-10-25', 'KSK Kragilan', '', 'ahmads@bps.go.id', '$2y$10$uUbWolRwV7oNTBHxzVeFYekfmFXMQT0rc4.1iGDGZqJ2ddc.KZNta', '081386316935', '087771748171', '0084-01-049620-50-4', '596533596401000', '3604232510750004', 'Kp. Cimaung RT.14 / RW.06 Ds. Sukaraja Kec. Cikuesal Kab. Serang - 42175', '', NULL),
(19, '19860613 201101 1 009', 'Dani Rahman, SP.', 2, 2, 'Serang', '1986-06-13', 'KSK Mancak', '', 'danirahman@bps.go.id', '$2y$10$i0qOzsEiBXhUabGZL/1XP.CjGpjPm8vl9XfU9RjOECWat32Dn1St2', '085920127968', '', '0120-01-075823-50-6 ', '362218240401000', '3673011306860001', 'Jl.KM Idris Rt. 004 Rw. 013, Kelurahan Cipare, Kecamatan Serang, Kota Serang 42117', '', NULL),
(20, '19860308 200902 1 007', 'Deki Sukmaringga, S.Si., ME.', 4, 4, 'Pati', '1986-03-08', 'KSK Kramatwatu', '', 'dekis@bps.go.id', '$2y$10$yF8nkxIuljtdBsnzQoGZM.HiPtQqHpu1/II80/oJaj4qA7piVOzH.', '087771273712', '', '0084-01-050357-50-0', '882880602507000', '3313120803860002', 'Perum Taman Pesona Blok E2 No.11 Ds. Lialang Kec. Taktakan Kota Serang', '', NULL),
(21, '19750504 200604 1 001', 'Encang Suarsa, SE.', 6, 6, 'Garut', '1975-05-04', 'KSK Kramatwatu', '', 'encang@bps.go.id', '$2y$10$dlC4ohyT7PoPF1EYM08u9enuoT8KAZvpUZC/gwSEHqx3/yVzEIxI6', '087771434681', '', '0084-01-049644-50-8', '596533463401000', '3604010405750298', 'Taman Banten Lestari Blok F12-B No.19 RT.01 / RW.025 Kel. Unyur Kota Serang', '', NULL),
(22, '19760616 200710 1 001', 'Hafidin', 7, 7, 'Serang', '1976-06-16', 'KSK Tirtayasa', '', 'hafidin@bps.go.id', '$2y$10$OFgIlNlCd7gpJ2370h139uev18I1cccFUv12iCpcQFsiopiYGNKLy', '087885411578', '085695491555', '4849-01-000970-50-2', '774466155401000', '3604131606760001', 'Kp./Ds. Tirtayasa No.21 RT.01 / RW.01 Kec. Tirtayasa Kab. Serang Banten - 42193', '', NULL),
(23, '19831126 201403 1 001', 'Halawani, S.Si.', 4, 4, 'Serang', '1983-11-26', 'KSK Kopo', '', 'halawani@bps.go.id', '$2y$10$Y2p94bwht.F4gppDUYLfce691suhNE7NG1SKAkkJDI/L2A3aVghR2', '087871777258', '', '0084-01-068586-50-9', '368729299401000', '3604012611830955', 'Komp. Ciceri Permai III, Jl. Nusantara IV Blok D3 No. 18, RT. 003 RW. 019, Kota Serang', '', NULL),
(24, '19681028 199102 1 001', 'Hasan Faozi', 2, 2, 'Serang', '1968-10-28', 'KSK Cikeusal', 'Fungsional Statistisi Penyelia', 'hasan@bps.go.id', '$2y$10$fu5bN1E5nAUrYYtanh0qvOWAJWeXJsbnycFaDvdsA/NoKhWgEnb8G', '087774166333', '', '0084-01-049617-50-1', '596533513401000', '3604222810680002', 'Jl. Raya Serang-Pandeglang KM.14 Kp. Cibodas RT.07 / RW.05 Ds./Kec. Baros Kab. Serang 42173', '', NULL),
(25, '19800403 200701 1 007', 'Indrat Susanto', 7, 8, 'Wonogiri', '1980-04-03', 'KSK Anyar', 'Pengelola Barang Milik Negara dan Persediaan', 'indrats@bps.go.id', '$2y$10$t7lPCRt6nLsp0CifFkhuM.eVX9QTNa97H3Hdbowmvr4MJXTpYSx0u', '087771281224', '', '1411-01-000256-50-6', '774466148417000', '3672020304800004', 'Jl. Gelatik Kav. Blok H No.159 Kel. Bendungan Kota Cilegon', '', NULL),
(26, '19900226 201403 2 004', 'Kartika Sari, S.Si', 4, 4, 'Kebumen', '1990-02-26', 'KSK Carenang', '', 'kartikasari@bps.go.id', '$2y$10$uw71m1bL4wp3YXgOtQmJ5uGXDJS335AHJ7IUu0Z.xwulsQUcJHOEK', '081804468946', '', '3853-01-026171-53-6', '701445439523000', '3305146602900001', 'Kejawang, RT. 001 RW. 003, Sruweng, Kab. Kebumen, Provinsi Jawa Tengah', '', NULL),
(27, '19841218 201003 2 002', 'Mia Sari Dewi, S.Ikom.', 6, 6, 'Garut', '1984-12-18', 'KSK Pabuaran', '', 'mia.sd@bps.go.id', '$2y$10$fUrD.LRf11NyHExAcxYhku/TslP0mTC4M0LqR70MwPHJST0h53U0q', '087774698328', '', '0084-01-049917-50-3', '882880636401000', '3673055812840003', 'Komp. Puri Serang Hijau Blok A4 No. 7, RT. 001 RW. 013, Kec. Cipocok Jaya, Kota Serang', '', NULL),
(28, '19640807 200604 1 008', 'Mohammad Tavip, SP.', 4, 4, 'Serang', '1964-08-07', 'KSK Cikande', '', 'mtavip@bps.go.id', '$2y$10$IuXNgA4vlqARsn8KM1g.POOHUHWmt8oQH7RnHtsrXGyqYspDkJnlq', '081808199788', '', '0084-01-049912-50-3', '596533620401000', '3604010708640040', 'Kp. Cimuncang Cilik RT.002 / RW.19 Kel. Cimuncang, Kota Serang', '', NULL),
(29, '19781112 200604 1 001', 'Muhlisi', 7, 7, 'Serang', '1978-11-12', 'KSK Kibin', '', 'muhlisi@bps.go.id', '$2y$10$eNWuQFYqWz.4gEEtZW1ZbuSvPEH2H35sTYR81ZxTYCfYx5/9hmftK', '085310711024', '', '0084-01-049983-50-4', '596533489401000', '3604231211780001', 'Perum Persada Banten Blok H.6 No.10 Kel. Teritih Kec. Walantaka Kota Serang - 42183', '', NULL),
(30, '19691118 200212 1 002', 'Mulyono', 6, 6, 'Wonogiri', '1969-11-18', 'KSK Petir', '', 'mulyono3@bps.go.id', '$2y$10$NmU6jcPxhgbyXjiGPzhRQes0IZqs2RTVCYNaeMPrUbxeosDlOy99i', '081318440001', '087771466664', '0084-01-048855-50-4', '596533554401000', '3604021811690170', 'Griya Serang Asri RT.020 / RW.010 Kec. Cipocok Jaya Kota Serang', '', NULL),
(31, '19881114 201403 1 004', 'Novian Tamara, S.Si.', 4, 4, 'Banyumas', '1988-11-14', 'KSK Tanara', '', 'novian.tamara@bps.go.id', '$2y$10$tCGBy5ftaQKPMVK1SGTpjO/M//ddZA71dyCUFtHmbBeW8h343nP6a', '08998494100', '', '3853-01-026230-53-4', '701443319521000', '3302121411880001', 'Komp. P&K Jl. Camar No. 3 Penancangan Kota Serang', '', NULL),
(32, '19690309 199501 1 001', 'Sadar Sukri', 4, 4, 'Serang', '1969-03-09', 'KSK Tunjung Teja', '', 'sadar@bps.go.id', '$2y$10$aa4iCsJRtWPwzJEuZ1aSt..6jrPf7iBaoNa70g5l3Puli1Chld472', '081295477453', '', '4843-01-009311-53-1', '596533612401000', '3604200903690001', 'Kp. Tambalung Sasak RT.016 RW. 004, Desa Kamuning, Kec. Tunjung Teja, Kab. Serang', 'Kanggan RT. 004 RW. 014, Wringinputih, Borobudur, Magelang', NULL),
(33, '19860328 201403 1 002', 'Shidiq Abdul Aziz, S.Si.', 4, 4, 'Magelang', '1986-03-28', 'KSK Pulo Ampel', '', 'shidiq.aziz@bps.go.id', '$2y$10$NXsU3eTVNAkpKh/cUkj5Du89/YfROXURPIzkHhh4/50XFA0qFjhUK', '085228086112', '085799176401', '3853-01-001859-50-7', '700962160524000', '3308022803860002', 'Komp. P&K Jl. Camar No. 3 Penancangan Kota Serang', '', NULL),
(34, '19850610 201403 1 002', 'Sugiyarto, SE.', 4, 4, 'Sragen', '1985-06-10', 'KSK Baros', '', 'sugiyarto2@bps.go.id', '$2y$10$NC.MFKV/FSOgF/uvxhQtFOoTC60rEf3BobXifFX6TlEjNjKh5gELq', '085726877991', '085212952273', '3853-01-026173-53-8', '256003963528000', '3673051006850001', 'Komp. P&K Jl. Camar No. 3 Penancangan Kota Serang', '', NULL),
(35, '19710613 200604 1 001', 'Suhadi, SE.', 6, 6, 'Serang', '1971-06-13', 'KSK Ciruas', 'Pejabat Penandatanganan Surat Perintah Membayar', 'suhadi@bps.go.id', '$2y$10$33pfbODtvd61noPfnWfiqOz8f8C7lxKaLVJrLqUTiHsMwEAUg/NFy', '087771281107', '', '0084-01-049911-50-7', '596533661401000', '3604011306710149', 'Griya Lopang Indah Blok FG.9 No.19 Kota Serang', '', NULL),
(36, '19680810 198803 1 002', 'Supriyadi', 4, 4, 'Serang', '1968-08-10', 'KSK Jawilan', '', 'supriyadi2@bps.go.id', '$2y$10$hFPMnC1wW0Cmuko77pZmWunb5GFJ6vfGA3zD1ZlKg3bhyIDzbt4iy', '083813992157', '', '0084-01-049614-50-3', '596533653401000', '3604231008680002', 'Kp. Cimaung RT. 014 RW.006, Desa Sukaraja, Kec. Cikuesal, Kab. Serang - 42175', '', NULL),
(37, '19741105 199503 2 001', 'Tati Rachmawati, S.AP.', 2, 2, 'Jakarta Pusat', '1974-11-05', 'Fungsional Umum Stat. Distribusi', '', '', '$2y$10$QK5f2fZztLzNgtW7wk1DI.kx8w6VT./f9m/tSkVXkqZ6AjKUjleKG', '085773200823', '', '', '', '3175054511740007', 'Jl. Kirai Indah RT.05/010 Kel.Kalisari, Jakarta Timur', '', NULL),
(38, '19880515 201101 2 023', 'Nur Laeli Fitriyani, A.Md.', 6, 6, 'Banyumas', '1988-05-15', 'KSK Pontang', '', 'nurlaeli@bps.go.id', '$2y$10$JPMRJfkbvRQzT1fzzWISh.yyBrNUZZeFjPGgEARNlNwlAz7i3yqwS', '081219012998', '087770062841', '1411-01-001904-50-0', '364400978401000', '3302175505880006', 'Desa Cipete RT. 002 RW. 002, Kec. Cilongok, Kab. Banyumas, Provinsi Jawa Tengah', '', NULL),
(39, '19850202 200801 1 004', 'Khafid Akhiriyanto, S.ST.', 3, 3, 'Kudus', '1985-02-02', 'Koordinator Fungsi Nerwilis', 'Pejabat Pembuat Komitmen', 'khafid@bps.go.id', '$2y$10$1dEN8PXRY8ZD1fqDtTWHf.rgVDtKhCE25j6aFtsnuH54HWUD4iJGu', '08567339378', '087894998346', '5684-01-000392-50-3', '583896691311000', '1704050202850001', 'Perum Puri Permai 1 Blok C1 No. 12, Desa Pete, Kec. Tigaraksa, Kab. Tangerang', '', NULL),
(40, '19650503 199203 2 001', 'Cahya Rochmaini Wirawati, SE.', 3, 3, 'Palembang', '1965-05-03', 'Kasi. Stat. Produksi', '', 'rochmaini@bps.go.id', '$2y$10$8olh0aSjNf12yM6R..AnreHiIi43H3YKNwmWscxFYTAGQXpfLehZS', '08128374770', '08179851561', '0084-01-040252-50-8', '596533448401000', '3604044305650118', 'Bumi Serang Damai Blok C1 No.10 RT.01 / RW.12 Kota Serang 42162', '', 4),
(41, '19731008 199512 1 001', 'Suhandi, S.ST.', 3, 3, 'Jakarta Barat', '1973-10-08', 'Kasi. Stat. Sosial', '', 'suhandi@bps.go.id', '$2y$10$AUN20EoLJSJK0WqlIN2AbuJMJEhnXcjQEANE69V0bHXWOapB3c7Gu', '081318352185', '087871717917', '0188-01-044234-50-6', '486620016401000', '3604020810730411', 'Griya Reang Indah C-1 No.3 Cipocok Jaya Kota Serang', '', 4),
(42, '19810901 200312 2 001', 'Yudiarti Septiana Triaswati, S.ST.', 3, 3, 'KEDIRI', '1981-09-01', 'Kasi. Stat. Distribusi', '', 'yudiarti@bps.go.id', '$2y$10$Ge7FWPOgEk4QtoYZHC8gKOncmSB/dSk4tQBrh4ZrI5Yp3Xs/KzgH.', '087771387076', '', '0084-01-043028-50-0', '574111076401000', '3604014109810992', 'Perumnas Ciracas Indah Blok B-30 Kota Serang', '', 4),
(43, '19830326 200712 2 005', 'Nur Rodiana, S.ST.', 2, 2, 'Nganjuk', '1983-03-26', 'Kasi. Nerwilis', '', 'rodiana_nur@bps.go.id', '$2y$10$tDi5Z7Xig/ce3MO1ryLUJ.ai6Oo3P.3tdjMoDBoYEpjpnfkB35jKe', '085399058185', '087843010306', '1412-01-000867-50-5', '573219532802000', '', '', '', 4),
(44, '19810404 200604 1 008', 'Bisma Ariasena Slamet, SE.', 6, 6, 'Jakarta', '1981-04-04', 'KSK. Kec. Ciruas', '', 'bisma.as@bps.go.id', '$2y$10$8cgvS6wuZb8pn00QUoF9ae9i.69QA99vl4pSYwDXOJvRdf8Y61q2.', '087773141981', '', '0084-01-049639-50-3', '343096681401000', '3673050404810003', 'Komplek Permata Banjar Asri Blok A4 No.2 Kel. Banjar Sari Kec. Cipocok Jaya Kota Serang', '', NULL),
(45, '19780201 200212 1 002', 'Marco, S.Kom.', 3, 3, 'Jakarta Utara', '1978-01-01', 'Kasi. IPDS', 'PBJ', 'marco@bps.go.id', '$2y$10$PKmRNgv7ZhinbfWzsv4qGOGjBzb86uEIDNi0YzEWFsMIQdFeCRgwC', '081354578635', '', '3637-01-020341-53-5', '779842145834000', '3172030102780009', 'Jl. Ayip Usman Kebaharan Dukuh RT.04 / RW.04 Kel. Lopang Kec. Serang Kota Serang', '', 4),
(46, '19850923 201403 2 002', 'Endang Purnaningsih, S.Si.', 6, 6, 'Tabalong', '1985-09-23', 'KSK Ciruas', '', 'endang.purnaningsih@bps.go.id', '$2y$10$4WGmZhrt/Gf1A8SurCJQYeYqDAjlKqRsTh9HfKnpa38c3dU2yfEcq', '085228977570', '087838290570', '3853-01-026172-53-2', '701158982541000', '3471136309850001', 'Jl. Veteran No. 171, Kota Yogyakarta, Provinsi D.I. Yogyakarta', '', NULL),
(47, '19680827 200604 1 011', 'Akhmad Jamroni, S.Sos.', 4, 4, 'Serang', '1968-08-27', 'KSK Cinangka', '', 'jamroni@bps.go.id', '$2y$10$yGZLFtgI7/vSgEFg117R1uiG831c2RnTP.xVrfAccDGmjUpYe0YwW', '081310292779', '087871411141', '3470-01-021822-53-2', '596533497401000', '3604312708680001', 'Kp. Sirih RT.02 / RW.01 Ds. Kamasan Kec. Cinangka Kab. Serang', '', NULL),
(48, '19681211 199403 1 008', 'Slamet Eka Saptino', 8, 8, 'Bandung', '1968-12-11', 'KSK Pamarayan', '', 'slamet.es@bps.go.id', '$2y$10$dfJZzDZZcaoGicozzZHb2epE07j74DrOMrxtbiYZPRMj2XsaB3ox6', '085711854974', '', '4843-01-009421-53-0', '596533380401000', '3604231112680001', 'Kp. Liang Landak RT.014  RW.003, Desa Cikeusal, Kec. Cikeusal, Kab. Serang', '', NULL),
(49, '19721105 199403 1 001', 'Nana Suharna, S.ST.', 3, 3, 'Bandung', '1972-11-05', 'Kasi. Statistik Distribusi', 'PPK', 'nana.suharna@bps.go.id', '$2y$10$GG/2.6Ke5VKI1I8Lj0a/kOV9LOizoH.LcLrwmf8VJLGl7x6iawrTi', '087871707964', '', '', '596533406401000', '3604230511720001', 'Kp. Cirogol Rt. 04 Rw. 01, Desa Cikeusal, Kecamatan Cikeusal 42175', '', 4),
(51, '19781121 199912 2 001', 'Desi Novianti, S.ST., M.M.', 9, 9, 'Rejang Lebong', '1978-11-21', 'Kasubbag Tata Usaha', 'PPSPM', 'desi.novianti@bps.go.id', '$2y$10$nZT05CMMEWnyT.zgse9BI.0KqqXhlLPMDzKMjcpOVibxorl9B5u9S', '087871398594', '', '1411-01-000276-50-6', '596533539401000', '3673066111780002', 'Komp. Griya Baladika, Jl. Perintis III No. 51 Blok C, RT. 002 RW 015', '', NULL),
(52, '19731025 199403 1 004', 'Epriata, SE., MAP.', 2, 2, 'Banjar-Pandeglang', '1973-10-25', 'Kasubbag Tata Usaha', 'Pejabat Penandatanganan Surat Perintah Membayar', 'epriata@bps.go.id', '$2y$10$lp4JZU0lzGk7M7B1FoWXp.mqQHmLX6lL5gCF.cA63iwEMGTI.R6RK', '081310337628', '', '0062-01-032185-50-1', '585725914419000', '3601342510730001', 'Kp. Ciekek Malati RT 03 RW 03 Kel. Karaton Kec. Majasari Kab. Pandeglang 42211', '', NULL),
(53, '19821211 201003 1 002', 'Didin Ritaudin, SE.', 4, 4, 'Lebak', '1982-12-11', 'Kasi. Statistik Distribusi', '', 'ritaudin@bps.go.id', '$2y$10$Ty5y6ziphlvgNYMJmbphI.D8TahOXufFLUEQ1hLuGqtCq/rW8bKRW', '081646014446', '', '0080-01-039423-50-0 ', '351159439419000', '3602141112820006', 'BTN Curug Narimbang, Desa Rangkas Bitung Timur 42313', '', 4),
(54, '19860909 201003 1 002', 'Richo Hendrix Sanggoro, SE.', 2, 2, 'Madiun', '1986-09-09', 'KSK Kibin', '', 'richo@bps.go.id', '$2y$10$O28cW/EJRhY0MbSaBvPquOD9Xrp89zXSg/DI6NbrW4SRgQCnrMhkO', '081336989947', '', '0084-01-049619-50-3', '882880628621000', '3604280909860001', 'Puspa Regency B10 No. 3, RT. 009 RW. 001, Kel. Serang, Kec. Serang, Kota Serang', 'Kp. Cianjur RT.015 / RW.04 Ds. Sindangsari Kec. Pabuaran Kab. Serang', NULL),
(55, '19691003 199203 1 005', 'Eko Subiyanto, S.ST., MM.', 9, 9, 'Kebumen', '1969-10-03', 'Kasi. Statistik Sosial', 'Pejabat Pengadaan Barang & Jasa', 'eko.subiyanto@bps.go.id', '$2y$10$tABFqUYX7mitDv6gysLgKeweZ4Vy3x2NtewpiTFpHth0T/V3ET82i', '081389370380', '081519124507', '0120-01-075834-50-7', '692933344418000', '3603120310690011', 'Perum Taman Buah Kutabumi I blok D5 No. 4 Rt 2/13 kel. kuta Bumi kec. Pasar Kemis, Tangerang 13269', '', 4),
(56, '19650715 198603 1 006', 'Tarya Suryana, SE., MM.', 9, 9, 'Ciamis', '1965-07-15', 'Kasi. Statistik Produksi', '', 'tarya@bps.go.id', '$2y$10$5ck8734WG2ERSPEujKKzseJA5QsiGhSAR1pmL5Ru571yrOg2Rw/Tu', '087809198730', '', '012001040196502', '692933377418000', '3603111507650003', 'Perum BCK Jl. Gagak Raya, Blok. B9/4 Kecamatan Cibeber, Kota Cilegon', '', 4),
(57, '19631019 199003 1 001', 'Ir. Indra Warman', 1, 1, 'Bengkalis', '1963-10-19', 'Kepala Kantor', 'Kuasa Pengguna Anggaran', 'warman@bps.go.id', '$2y$10$g9ALW8aqU6tm.3yoAwN4JelP5EGnaFwwUqarRfv5BX6Jrjf6Do6mW', '08129504564', '', '0084-01-040239-50-0', '243582475401000', '3604011910630563', 'Mandala Citra Indah Blok G9 No. 6, RT. 003 RW. 015, Kel. Unyur, Kec. Serang, Kota Serang', '', 1),
(58, '19870328 201003 1 001', 'Rizki Budi Prasetio, SE. ME.', 2, 2, 'Tegal', '1987-03-28', 'Staf Seksi IPDS', '', 'rizki.bp@bps.go.id', '$2y$10$Uy/ASc5LnJq2toEKhTd8IOHxjbRJh08oJP9SkBi.TGZW5aJ711KKu', '081315180203', '', '0084-01-049626-50-0', '882880610501000', '3376032803870001', 'Perum Nuansa Alam Banjar Estate C2 No. 5, Kec. Cipocok Jaya, Kota Serang', '', NULL),
(60, '19850917201403 2 001', 'Yesi Sasmita, SE', 4, 4, 'Sawahlunto', '1985-09-17', 'Staf Tata Usaha', 'BENDAHARA PENGELUARAN', 'yesi.sasmita@bps.go.id', '$2y$10$FRg8UAlTY1X39Ykd3vyMJemj5Ovt3qlANcZS0kpAz64BvO0djFqaO', '081311289945', '087871212191', '3853-01-026174-53-4', '786227744432000', '3672015709850004', 'Komp. Pondok cilegon Indah Blok E31, No. 11, Kota Cilegon', '', NULL);

-- --------------------------------------------------------

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
-- Dumping data for table `matrix`
--

INSERT INTO `matrix` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(93, 8, 'K1', 95),
(94, 8, 'K2', 90),
(95, 8, 'K3', 5),
(96, 8, 'K4', 85),
(97, 8, 'K5', 90),
(98, 12, 'K1', 90),
(99, 12, 'K2', 90),
(100, 12, 'K3', 10),
(101, 12, 'K4', 85),
(102, 12, 'K5', 80),
(103, 17, 'K1', 90),
(104, 17, 'K2', 75),
(105, 17, 'K3', 10),
(106, 17, 'K4', 90),
(107, 17, 'K5', 85),
(108, 18, 'K1', 90),
(109, 18, 'K2', 80),
(110, 18, 'K3', 10),
(111, 18, 'K4', 90),
(112, 18, 'K5', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
