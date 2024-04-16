-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 08:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpsols`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(25) NOT NULL,
  `caption` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `filename`, `caption`) VALUES
(1, 'basin.jpg', 'Water basin at Ryoanji temple, Kyoto'),
(2, 'fountains.jpg', 'Fountains in central Tokyo'),
(3, 'kinkakuji.jpg', 'The Golden Pavilion in Kyoto'),
(4, 'maiko.jpg', 'Maiko&mdash;trainee geishas in Kyoto'),
(5, 'maiko_phone.jpg', 'Every maiko should have one&mdash;a mobile, of course'),
(6, 'menu.jpg', 'Menu outside restaurant in Pontocho, Kyoto'),
(7, 'monk.jpg', 'Monk begging for alms in Kyoto'),
(8, 'ryoanji.jpg', 'Autumn leaves at Ryoanji temple, Kyoto');

-- --------------------------------------------------------

--
-- Table structure for table `images_backup`
--

CREATE TABLE `images_backup` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(25) NOT NULL,
  `caption` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images_backup`
--

INSERT INTO `images_backup` (`image_id`, `filename`, `caption`) VALUES
(1, 'basin.jpg', 'Water basin at Ryoanji temple, Kyoto.'),
(2, 'fountains.jpg', 'Fountains in central Tokyo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `images_backup`
--
ALTER TABLE `images_backup`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images_backup`
--
ALTER TABLE `images_backup`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
