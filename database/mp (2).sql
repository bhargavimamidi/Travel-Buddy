-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: May 17, 2021 at 02:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mp`
--

CREATE TABLE `mp` (
  `name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `secret` varchar(50) DEFAULT NULL,
  `dp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mp`
--

INSERT INTO `mp` (`name`, `password`, `username`, `Mobile`, `Email`, `secret`, `dp`) VALUES
('Bhargavi', 'bhargavi', 'bhargavi', 9347915984, 'saibhargavi260@gmail.com', 'potturi', 'dp.jpg'),
('Ritika', 'ritika', 'rits', 123456789, 'rits@gmail.com', 'idk', 'dp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Name` varchar(100) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Name`, `Review`) VALUES
('Bhargavi', 'It was a great experience with travel buddy. I am definitely going to recommend it.Thank you for your amazing package.'),
('Nishanth', 'This is an amazing application.Thank you for this hassle-free experience Travel Buddy.Keep going with the great work.'),
('Pavan', 'Your Thiruvananthapuram package is amazing. Thank you Travel Buddy.Thank you for this hassle-free experience Travel Buddy.'),
('Ritika', 'I took you Kochi package.It was a great experience with travel buddy. I am definitely going to recommend it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mp`
--
ALTER TABLE `mp`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
