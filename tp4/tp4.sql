-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 04:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_pinjam_buku`
--

CREATE TABLE `list_pinjam_buku` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `waktu_pinjam` date NOT NULL,
  `waktu_kembali` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_pinjam_buku`
--

INSERT INTO `list_pinjam_buku` (`id`, `Nama`, `Judul`, `Genre`, `Category`, `waktu_pinjam`, `waktu_kembali`, `status`) VALUES
(4, 'jerry', 'Lord of the Wing\'s', 'Action', 'Novel', '2021-04-22', '2021-04-22', 'Sudah'),
(5, 'boris', 'lost money', 'Comedy', 'Komik', '2021-04-22', '2021-04-22', 'Sudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_pinjam_buku`
--
ALTER TABLE `list_pinjam_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_pinjam_buku`
--
ALTER TABLE `list_pinjam_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
