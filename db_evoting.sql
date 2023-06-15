-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 06:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dusun`
--

CREATE TABLE `tb_dusun` (
  `id_dusun` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dusun`
--

INSERT INTO `tb_dusun` (`id_dusun`, `nama`) VALUES
(1, 'Wonomulyo'),
(4, 'Argodirejo'),
(6, 'Jadimulyo'),
(8, 'Wanokuni one'),
(12, 'shibuya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kandidadt`
--

CREATE TABLE `tb_kandidadt` (
  `id_kandidat` int(11) NOT NULL,
  `nama_kandidat` varchar(25) NOT NULL,
  `nama_calon` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kandidadt`
--

INSERT INTO `tb_kandidadt` (`id_kandidat`, `nama_kandidat`, `nama_calon`, `foto`) VALUES
(1, 'calon ke-1', 'Senju Hashirama', 'hashirama.PNG'),
(2, 'calon ke-2', 'Uzumaki Naruto', 'naruto.PNG'),
(3, 'calon ke-3', 'Namikaze Minato', 'minato.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suara`
--

CREATE TABLE `tb_suara` (
  `id_suara` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kandidat` varchar(35) NOT NULL,
  `create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suara`
--

INSERT INTO `tb_suara` (`id_suara`, `id_user`, `nama_kandidat`, `create`) VALUES
(8, 6, 'calon ke-3', '2021-12-02 01:10:08'),
(9, 7, 'calon ke-2', '2021-12-02 16:51:55'),
(10, 5, 'calon ke-2', '2021-12-02 16:53:56'),
(11, 8, 'calon ke-1', '2021-12-02 22:23:19'),
(12, 9, 'calon ke-1', '2021-12-02 22:31:13'),
(13, 10, 'calon ke-1', '2021-12-02 22:33:38'),
(14, 11, 'calon ke-2', '2021-12-12 23:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `level` enum('admin','warga') NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_dusun`, `nama`, `email`, `password`, `level`, `status`) VALUES
(1, 0, 'Andi Admin', 'jra94741@gmail.com', '$2y$10$RNdH7gKQNhcgZ4BghGn2h.BL92endlkpvnfbYh10bV04kAas4D/5K', 'admin', 0),
(3, 4, 'Surahmat', 'soer69@gmail.com', '$2y$10$MrdP17FNlUKlP0KPYyJGOeYr2AvmfHRnpOnLg9MRCO7ra7ykhoIR2', 'admin', 0),
(5, 1, 'Niamuridho  Aja', 'niam99@gmail.com', '$2y$10$qRQ4OGzhTCHu8noIcXXgdOw2r9/SyttWMI5Zmr.oyjzV/ReiK3xZS', 'warga', 1),
(6, 4, 'Indah Maharani', 'indah@gmail.com', '$2y$10$a9ZDXZjS2lwC309bRX67ReVwCmff.nPvwpsSAJtCRkxYP0CK7jH1K', 'warga', 1),
(7, 12, 'Vera irmayanti', 'vera69@gmail.com', '$2y$10$h6jJ.eO..QyUwfZW/5/VLuNGpY48AbFgktdmAlNyYxFeujHprAG5W', 'warga', 1),
(8, 4, 'Rindiani', 'rindi22@gmail.com', '$2y$10$tkbErdyehSi7FUWNcNZZDuNDE.1.Lsa4eJeqctdJch1lUL/OKA2K2', 'warga', 1),
(9, 8, 'Lufy d monkey', 'lufy@gmail.com', '$2y$10$/6QiVru7olUVbx9neQi7UOsGZCX5iMTN9k3eeP3LZDxdAnaCCwPTm', 'warga', 1),
(10, 12, 'Rita Anggraini', 'rita@gmail.com', '$2y$10$/bdRrJlDz17fBl7dNvFequ04Cy6lwhhRVfCpx70sieAI.UQbKqUHi', 'warga', 1),
(11, 8, 'Fahrizal Naim', 'fahrizal@gmail.com', '$2y$10$eRGf39kLznmsx4MojcjNkOi8t7J4szL7Dy4ZJBJjWQ7hdwjmSKyLK', 'warga', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id_visimisi`, `id_kandidat`, `visi`, `misi`) VALUES
(1, 3, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi dark</p>\r\n\r\n<p>3. Visi ke-3</p>\r\n', '<p>1. Mendidik para chunin menjadi lebih kuat </p>\r\n\r\n<p>2. Menangkap seluruh biju </p>\r\n\r\n<p>3. Misi saja</p>\r\n'),
(3, 2, '<p>visi foya </p>\r\n', '<p>misi voya</p>\r\n\r\n<p>dont play play bosku</p>\r\n'),
(4, 1, '<p>1. Membangkan jutsu mokuton</p>\r\n', '<p>1. Membangun desa yang penuh kedamaian</p>\r\n\r\n<p>2. Mengembangkan skill ninja ketingkat lebih lanjut</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dusun`
--
ALTER TABLE `tb_dusun`
  ADD PRIMARY KEY (`id_dusun`);

--
-- Indexes for table `tb_kandidadt`
--
ALTER TABLE `tb_kandidadt`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `tb_suara`
--
ALTER TABLE `tb_suara`
  ADD PRIMARY KEY (`id_suara`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dusun`
--
ALTER TABLE `tb_dusun`
  MODIFY `id_dusun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kandidadt`
--
ALTER TABLE `tb_kandidadt`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `id_suara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
