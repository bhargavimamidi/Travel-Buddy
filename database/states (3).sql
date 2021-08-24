-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: May 17, 2021 at 02:24 PM
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
-- Database: `states`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `place` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `nor` int(20) NOT NULL,
  `noa` int(20) NOT NULL,
  `noc` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mobile` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`place`, `checkin`, `checkout`, `nor`, `noa`, `noc`, `email`, `Mobile`) VALUES
('Kochi', '2021-05-13', '2021-05-20', 1, 2, 0, 'saibha@gmail.com', 93),
('Kochi', '2021-05-20', '2021-05-28', 1, 2, 0, 'saibhargavi@gmail.com', 93479),
('Thiruvananthapuram', '2021-05-28', '2021-05-29', 1, 2, 0, 'saibhargavi260@gmail.com', 9347915984);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place` varchar(20) NOT NULL,
  `brief` varchar(500) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `package1` int(11) NOT NULL,
  `package2` int(11) NOT NULL,
  `btv` varchar(500) DEFAULT NULL,
  `bps` varchar(500) DEFAULT NULL,
  `bpe` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place`, `brief`, `image1`, `image2`, `package1`, `package2`, `btv`, `bps`, `bpe`) VALUES
('Kochi', 'Spread over a series of islands and crisscrossed by the sea and backwaters, Kochi (long known as Cochin) speaks of the old world charm and leisure. The culturally and historically rich port city is the gateway for several visitors to start their tour of Kerala in south India. Located between the Arabian Sea and the Western Ghats, Kochi has been one of the most sought-after destinations in India.', 'kochidet.jpg', 'kochihead.jpg', 10000, 25000, 'The best time to visit Kochi is between October and April.', 'Your mid-range hotel options are, The The North Pride Hotel, Fort Castle, Orion Holidays, Harbour View Rcidency and many more that fall between a price range of Rs 2,000 to Rs 5500. Homestays are good options for backpackers.In case you’re looking for luxury accommodation, there are several European and American styled hotels around the Fort Kochi. Some of the popular options are Taj by Vivanta, Bruton Boatyard, Neemrana’s Le Colonial and Malabar House.', 'From the ubiquitous north Indian food to Chinese, Spanish and Continental cuisine, you can find almost every kind of food you desire to eat. Though finding  pure vegetarian eateries could be difficult, several restaurants and hotels offer sadya, the typical Kerala lunch on a banana leaf. Thattukadas offer value for money but lack of hygiene could be a concern.'),
('Thiruvananthapuram', 'Called the ‘Evergreen city of India’, Thiruvananthapuram is the capital of the state of Kerala. The city comprises beautiful beaches, long stretches of palm-fringed shorelines, windy backwaters and historical structures. Along with its natural and historical significance, the city is also popular for its ancient temples that are renowned for their architecture making Thiruvananthapuram one of the most visited pilgrim centers of India.', 'Thiruvananthapudet.jpg', 'Thiruvananthapuhead.png', 45000, 75000, 'October and November are generally pleasant and sometimes light rain showers are observed, hence making it the best time to visit Thiruvananthapuram.', 'There are ample accommodation options in Thiruvananthapuram. You can find many budget, mid-range, and luxury hotels in the city. The hotels are known for their hospitality and services. Keys Hotel has been liked by visitors and is close to most of the tourist spots in the city. Rooms here cost around Rs 3000 per night. The Capital Trivandrum near Pulimoodu junction is a good mid-range hotel costing around Rs 2500.', 'There are several multi-cuisine restaurants that serve local as well as Tamilian, Chinese, and North Indian cuisine. You can also find several fast-food restaurants in the city. The local cuisine is unique and characterized by the use of plenty of coconut and spice. Do also try non-veg cuisine like Fish pollichathu (fish served on a banana leaf) and Fish molee (fish in coconut sauce).');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state` varchar(15) NOT NULL,
  `place` varchar(50) NOT NULL,
  `locationtype` varchar(15) NOT NULL,
  `budget` int(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state`, `place`, `locationtype`, `budget`, `image`) VALUES
('Kerala', 'Allepey', 'beaches', 50000, 'allepey.jpeg'),
('Kerala', 'Kochi', 'beaches', 10000, 'kochi.jpg'),
('Kerala', 'Kovalam', 'beaches', 100000, 'kovalam.jpg'),
('Maharashtra', 'Mumbai', 'beaches', 250000, ''),
('Kerala', 'Munnar', 'Mountains', 75000, 'munnar.jpg'),
('Kerala', 'Thiruvananthapuram', 'Mountains', 100000, 'Thiruvananthapu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Mobile`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`place`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
