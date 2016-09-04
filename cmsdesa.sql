-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 08:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `title`, `content`, `foto`) VALUES
(8, 'Hasil Editan', '  Edit Hasil', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`id`, `title`, `content`, `foto`) VALUES
(1, 'Air Terjun Baru', ' Salah satu potensi pariwisata yang ada di Desa Padangbulia adalah air Terjun Wana Ayu.Air terjun ini berlokasi di dusun Runuh Kubu tepatnya 1 Km dari pusat Desa Padangbulia.\r\nPemandangan yang indah dan panorama alam akan memanjakan mata kita sehingga ketenangan dan kebahagiaan batin yang akan kita dapatkan.\r\nBagi para wisatawan silakan berkunjung ke lokasi pariwisata ini,cukup dengan mengaturkan uang sesari untuk perbaiakan jalan menuju ke tempat pariwisata ini,pengalaman yang menagjubkan akan anda dapatkan', '1.jpg'),
(3, 'Air', 'Air', '57cb6512672fe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_session` varchar(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `id_session`, `level`) VALUES
(1, 'Testing', 'Testing', '1234', 'fa059672i7i', 'user'),
(2, 'admin', 'admin', 'admin', '46ddgoob5tg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
