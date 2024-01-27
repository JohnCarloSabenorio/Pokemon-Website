-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 06:34 PM
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
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `registration_date`) VALUES
(1, 'John', 'johncarlosabenorio07@gmail.com', '2023-10-01'),
(2, 'Joshua', 'kinnitjuswa@yahoo.com', '2023-09-16'),
(3, 'Lyrick', 'lyrickjonson@gmail.com', '2023-10-01'),
(4, 'nico', 'nicocaporal@yahoo.com', '2023-09-30'),
(5, 'tyrone', 'tyronejaco@gmail.com', '2023-09-28'),
(6, 'kedd', 'keddcyrus@yahoo.com', '2023-09-12'),
(7, 'neil', 'neilvicedo@gmail.com', '2023-10-01'),
(8, 'winston', 'winstonagustin@gmail.com', '2023-10-02'),
(9, 'renzo', 'renzovinas@gmail.com', '2023-10-02'),
(10, 'earl', 'earltacda@gmail.com', '2023-10-01'),
(11, 'yusuf', 'yusufmirasol@yahoo.com', '2023-10-02'),
(12, 'von', 'benedictfadri@yahoo.com', '2023-10-02'),
(13, 'gab', 'gabombao@gmail.com', '2023-10-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
