-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 04:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evieta`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `foto`, `id_users`) VALUES
('J123456', 'Julkifli Rachman', 'Pria', 'julkifli.png', 2),
('J3A228795', 'Siti Badriah', 'Wanita', 'sibad.png', 1),
('J3C776543', 'Julkipli Saepudin', 'Wanita', 'blank.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `month_revenue`
--

CREATE TABLE `month_revenue` (
  `id` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `month_revenue`
--

INSERT INTO `month_revenue` (`id`, `bulan`, `revenue`) VALUES
(1, 'September', 250),
(2, 'Oktober', 300),
(3, 'November', 450),
(4, 'Desember', 600),
(5, 'Januari', 325);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa_angkatan`
--

CREATE TABLE `ormawa_angkatan` (
  `id` int(10) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `jumlah_mhs` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ormawa_angkatan`
--

INSERT INTO `ormawa_angkatan` (`id`, `angkatan`, `jumlah_mhs`) VALUES
(1, 2019, 175),
(2, 2020, 150),
(3, 2021, 85);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa_divisi`
--

CREATE TABLE `ormawa_divisi` (
  `id` int(11) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `jumlah_mhs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ormawa_divisi`
--

INSERT INTO `ormawa_divisi` (`id`, `divisi`, `jumlah_mhs`) VALUES
(1, 'BPH', 6),
(2, 'Acara', 18),
(3, 'Humas', 10),
(4, 'DDD', 8),
(5, 'Sponsorship', 13);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa_prodi`
--

CREATE TABLE `ormawa_prodi` (
  `id` int(10) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `jumlah_mhs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ormawa_prodi`
--

INSERT INTO `ormawa_prodi` (`id`, `prodi`, `jumlah_mhs`) VALUES
(1, 'komunikasi', 30),
(6, 'manajemen informatika', 22),
(7, 'manajemen agribisnis', 34),
(8, 'ekowisata', 7),
(9, 'akuntansi', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`) VALUES
(1, 'sibad225', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'kipli223', '1e01ba3e07ac48cbdab2d3284d1dd0fa'),
(3, 'kipli223', '1e01ba3e07ac48cbdab2d3284d1dd0fa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `month_revenue`
--
ALTER TABLE `month_revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa_angkatan`
--
ALTER TABLE `ormawa_angkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa_divisi`
--
ALTER TABLE `ormawa_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa_prodi`
--
ALTER TABLE `ormawa_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ormawa_angkatan`
--
ALTER TABLE `ormawa_angkatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ormawa_divisi`
--
ALTER TABLE `ormawa_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ormawa_prodi`
--
ALTER TABLE `ormawa_prodi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
