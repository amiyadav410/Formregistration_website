-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 10:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsiveform3`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conpassword` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fname`, `lname`, `password`, `conpassword`, `gender`, `email`, `phone`, `address`, `id`) VALUES
('Amit', 'yadav', '123456', '123456', 'male', 'ay629139@gmail.com', '9811223344', 'Bagbazar            ', 8),
('Sanjay', 'khadka', '123400', '123400', 'male', 'jhdf@gmail.com', '9805955737', 'balkhu              ', 9),
('sujit', 'yadav', '654321', '654321', 'male', 'su24@gmail.com', '9805122237', 'palpa', 12),
('Nikita ', 'Thapa', '123456', '123456', 'female', 'puja23@gmail.com', '9898009898', 'Bastipur            ', 14),
('Radhika', 'pandit', '989898', '989898', 'female', 'radika12@gmail.com', '9898980098', 'Tinkune             ', 16),
('Neha ', 'chadhary', '989898', '989898', 'female', 'neha34@gmail.com', '9898986543', 'Baneshwor', 21),
('Raju ', 'pandey', '878787', '878787', 'male', 'raju@gmail.com', '9898989898', 'Gaurigau', 22),
('Sapna', 'das', '989898', '989898', 'female', 'sapna@gmail.com', '9876544333', 'kalimati', 23),
('Santosh', 'Sah', '123456', '123456', 'male', 'san234@gmail.com', '9898989898', 'Kirtipur', 24),
('Amit', 'Yadav', '123456', '123456', 'male', 'ay629139@gmail.com', '9898989898', 'Koteshwor', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
