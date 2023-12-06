-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beach_exploration`
--

-- --------------------------------------------------------

--
-- Table structure for table `ide_kegiatan`
--

CREATE TABLE `ide_kegiatan` (
  `id_kegiatan` int(10) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ide_kegiatan`
--

INSERT INTO `ide_kegiatan` (`id_kegiatan`, `gambar`, `deskripsi`, `no`) VALUES
(8, 'slili.jpg', 'bismillah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inspirasi`
--

CREATE TABLE `inspirasi` (
  `id_inspirasi` int(10) NOT NULL,
  `nama_pantai` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inspirasi`
--

INSERT INTO `inspirasi` (`id_inspirasi`, `nama_pantai`, `gambar`, `alamat`) VALUES
(3, 'Pantai slili', 'slili.jpg', 'alamt'),
(4, 'pantai', 'slili.jpg', 'asdbw8yfbwyef');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'nasywa', 'e00cf25ad42683b3df678c61f42c6bda'),
(3, 'davin', 'c84258e9c39059a89ab77d846ddab909'),
(4, 'aben', '32cacb2f994f6b42183a1300d9a3e8d6'),
(5, 'aben', '32cacb2f994f6b42183a1300d9a3e8d6');

-- --------------------------------------------------------

--
-- Table structure for table `panduan_praktis`
--

CREATE TABLE `panduan_praktis` (
  `id_panduan` int(10) NOT NULL,
  `isi` text NOT NULL,
  `no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panduan_praktis`
--

INSERT INTO `panduan_praktis` (`id_panduan`, `isi`, `no`) VALUES
(1, 'isisiisiisiasdfiwefiew', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ide_kegiatan`
--
ALTER TABLE `ide_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `inspirasi`
--
ALTER TABLE `inspirasi`
  ADD PRIMARY KEY (`id_inspirasi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `panduan_praktis`
--
ALTER TABLE `panduan_praktis`
  ADD PRIMARY KEY (`id_panduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ide_kegiatan`
--
ALTER TABLE `ide_kegiatan`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inspirasi`
--
ALTER TABLE `inspirasi`
  MODIFY `id_inspirasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `panduan_praktis`
--
ALTER TABLE `panduan_praktis`
  MODIFY `id_panduan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
