-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 03:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipseko`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_keg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `id_sasaran` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `status_keg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_keg`, `id_user`, `tgl_kegiatan`, `nama_kegiatan`, `id_sasaran`, `catatan`, `status_keg`) VALUES
(1, 47, '2021-02-14', 'melaksanakan pembelajaan di kelas XII RPL 1 dengan materi pembuatan aplikasi sederhana dengan codeigniter', 1, 'Kegiatan yang anda masukan tidak sesuai dengan jadal', 0),
(2, 46, '2021-02-17', 'Melaksanakan Pendataan Siswa', 16, '', 2),
(5, 48, '2021-02-19', 'Melakukan Pendataan Lab RPL dan TKJ', 13, '', 0),
(6, 48, '2021-02-13', 'Melakukan Pendataan Laptop', 13, '', 0),
(7, 48, '2021-02-19', 'Melakukan Pendataan PC All In One', 19, '', 0),
(8, 48, '2021-02-17', 'Melakukan Pembelajaran dikelas XII RPL 3', 20, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'validator_guru'),
(2, 'validator_tu'),
(3, 'guru'),
(4, 'tu');

-- --------------------------------------------------------

--
-- Table structure for table `sasaran`
--

CREATE TABLE `sasaran` (
  `id_sasaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_sasaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran`
--

INSERT INTO `sasaran` (`id_sasaran`, `id_user`, `nama_sasaran`) VALUES
(0, 47, 'Menjadi Wakil bendahara dan Pengurus Barang'),
(1, 47, 'Melaksanakan Pembelajaran/ Penilaian'),
(2, 47, 'Menjadi Wali Kelas XII RPL 1'),
(3, 47, 'Menjadi Pembina Ekstrakurikuler'),
(8, 47, 'Menjadi Pendamping Lomba'),
(9, 47, 'Menjadi Wakil Kepala Sekolah SMKN 1 Kragilan'),
(13, 48, 'Menjadi Kepala Program studi RPL'),
(15, 46, 'Menjadi Kepala Perpustakaan'),
(16, 46, 'Menjadi Operator sekolah'),
(17, 46, 'Menjadi Wali Kelas'),
(19, 48, 'Menjadi Teknisi Lab RPL'),
(20, 48, 'Melakukan Pembelajaran / Penialaian'),
(21, 49, 'Menjadi Wali Kelas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `is_active`, `id_level`) VALUES
(1, 'arif', '$2y$10$KgsGm6hmJuX8xyxcB01YA.o.u6xxj6f6hLr9BHXidV2GKKYEMTRVm', 'Arif Fahrudin, S.Kom', 1, 1),
(46, 'hayati', '$2y$10$Ld4f5XtwTupV9whITO0RoulFKGfH4xE/vC1rZfK.ov8myHfpo/xlm', 'Hayati, S.Pdi', 1, 4),
(47, 'aditya', '$2y$10$g.PBmMF9tFZJ1VxSvXrgNezOIuM/fVR4dZrFbOQPPJRjNhX1hGF4O', 'Aditya Rizky TR', 1, 3),
(48, 'dede', '$2y$10$EsfZbyxWmgxCg0pE150gUeIdJKbcHbpGgCwppS8Bndd.bnQwCyRUe', 'Dede Irawan, S.Ds', 1, 4),
(49, 'teguh', '$2y$10$tpBGwjOrzffJHHxsu/nx6us3qfcy1qgXoL0iJXzHNP8MOt/aY.NXy', 'teguh', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_keg`),
  ADD KEY `id_sasaran` (`id_sasaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `sasaran`
--
ALTER TABLE `sasaran`
  ADD PRIMARY KEY (`id_sasaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sasaran`
--
ALTER TABLE `sasaran`
  MODIFY `id_sasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_sasaran`) REFERENCES `sasaran` (`id_sasaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
