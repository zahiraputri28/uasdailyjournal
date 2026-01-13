-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2026 at 03:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Volunteer', 'Mengikuti kegiatan volunteer, membantu masyarakat, dan belajar memberi dampak positif.', 'art1.jpg', '2025-06-01 09:10:08', 'admin'),
(2, 'Sushi', 'Makan sushi di waktu weekend di resto terbaru.', 'art2.jpg', '2025-08-25 15:30:03', 'admin'),
(3, 'Kucingku', 'Habiskan waktu bermain, merawat, dan melihat hal hal yang kucingku lakukan.', 'art3.jpg', '2025-10-12 12:35:01', 'admin'),
(4, 'Lagu', 'Mendengarkan lagu favoritku agar rileks, fokus, dan menambah semangat.', 'art4.jpg', '2025-11-26 21:36:55', 'admin'),
(5, 'Belajar', 'Belajar membuat website, memahami HTML, CSS, dan JavaScript di matkul PBW.', 'art5.jpg', '2025-10-18 16:41:46', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `username` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `isi`, `gambar`, `username`) VALUES
(1, 'Alam', 'Pemandangan Danau', 'gal1.jpg', 'admin'),
(2, 'Berenang', 'Tempat Berenang', 'gal2.jpg', 'admin'),
(3, 'Pemandangan', 'Pemandangan disaat jogging', 'gal3.jpg', 'admin'),
(4, 'Main', 'Kereta gantung', 'gal4.jpg', 'admin'),
(5, 'Makan', 'Makan siang ', 'gal5.jpg', 'admin'),
(6, 'Me', 'Fotoku', 'gal6.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '123456', 'user1.jpg'),
(2, 'danny', 'admin', 'user2.jpg'),
(3, 'sandra', '135790', 'user3.jpg'),
(4, 'kenzo', 'kenzo04', 'user4.jpg'),
(5, 'keyla', 'keyylaa', 'user5.jpg'),
(6, 'Adit', 'adit6', 'user6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
