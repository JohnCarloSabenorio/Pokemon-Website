-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 01:13 AM
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
-- Database: `sabenorio_act`
--

-- --------------------------------------------------------

--
-- Table structure for table `fanarts`
--

CREATE TABLE `fanarts` (
  `art_id` int(11) NOT NULL,
  `author_id` mediumint(6) UNSIGNED DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `author_name` varchar(30) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fanarts`
--

INSERT INTO `fanarts` (`art_id`, `author_id`, `file_name`, `author_name`, `upload_date`) VALUES
(13, 45, 'dawn.jpg', 'John Carlo', '2023-11-05'),
(14, 45, 'mimikyu.jpg', 'John Carlo', '2023-11-05'),
(15, 45, 'lycanroc.jpg', 'John Carlo', '2023-11-05'),
(16, 45, 'trainer.jpg', 'John Carlo', '2023-11-05'),
(17, 43, 'starters.jpg', 'Lyrick', '2023-11-05'),
(18, 43, 'eevee.jpg', 'Lyrick', '2023-11-05'),
(19, 43, 'rayquaza.jpg', 'Lyrick', '2023-11-05'),
(20, 43, 'charizard.jpg', 'Lyrick', '2023-11-05'),
(21, 43, 'cute.jpg', 'Lyrick', '2023-11-05'),
(22, 43, 'articuno.jpg', 'Lyrick', '2023-11-05'),
(24, 43, 'icegym.jpg', 'Lyrick', '2023-11-05'),
(25, 43, 'bakery.jpg', 'Lyrick', '2023-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fanarts`
--
ALTER TABLE `fanarts`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fanarts`
--
ALTER TABLE `fanarts`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fanarts`
--
ALTER TABLE `fanarts`
  ADD CONSTRAINT `fanarts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
