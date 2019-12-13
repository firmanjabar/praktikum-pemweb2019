-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 11:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `available` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `year` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `role`, `available`, `age`, `location`, `year`, `email`, `img`, `password`) VALUES
(21, 'Firman Abdul Jabar', 'Asisten Praktikum', 'Pemrograman Web', 21, 'Cianjur, Indonesia', '1', 'firmanabduljabar@gmail.com', '5dd74871943f6.jpg', '74bfebec67d1a87b161e5cbcf6f72a4a'),
(23, 'Nadiem Makarim', 'Kemendikbud', 'Menteri', 40, 'Jakarta, Indonesia', '5', 'nadiem@gmail.com', '5dd74a02e9ec5.jpg', '703f7151558b93339c8a8b43cab57c21'),
(27, 'Mohammed Salah', 'Attacker', 'Liverpool FC', 31, 'Liverpool, UK', '3', 'salah@gmail.com', '5de0dbd3a4fdb.jpg', '2a07e3ff3df21b226d0cd044d4a7cc83');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
