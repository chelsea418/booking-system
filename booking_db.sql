-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 10:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `booking_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `id_place` int(11) NOT NULL,
  `date` date NOT NULL,
  `no_person` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`booking_id`, `email`, `id_place`, `date`, `no_person`) VALUES
(3, 'dev@test.com', 2, '2020-11-17', 4),
(4, '', 1, '2020-11-18', 2),
(5, '1', 1, '0000-00-00', 12),
(6, '1', 3, '2020-11-17', 5),
(7, '1', 2, '2020-11-19', 5);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id_place` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id_place`, `name`, `image`, `category`, `desc`) VALUES
(1, 'Amaya View', 'amayaview.jpg', 'Sights and Landmark', 'Amaya View’s pride is this lifestyle infinity pool, both for adults and kids, which is perfectly set on the cliffside for a perfect view of the city. Relax and close your eyes as you float in its cold, clean waters. Lounge by the poolside, reading your favorite book and sipping some pina coladas! Azul, the Spanish for blue, being the coolest and most calming of all color, not only captures serenity and peace, but is considered beneficial both to the mind and body.'),
(2, 'High Ridge', 'highridge.jpg', 'Sights and Landmark', 'The view panoramic view of the City of Golden Friendship is priceless, perfect spot for couples and family get together.'),
(3, 'White Water Rafting', 'white rafting river.jpeg', 'Nature and Parks', 'Cagayan de Oro is the Whitewater Rafting Capital in the Philippines. It isthe only city in the country that offers rafting year-round. Its river depth, incline and rock formations make rafting here in the Cagayan River a fund and exciting experience.'),
(4, 'Mapawa Nature Park', 'mapawa nature park.jpg', 'Nature and Parks', 'Mapawa Nature Park is a go-to place in Cagayan de Oro for all adventure junkies out there. It has a camping site, which is also best for team-building activities. There is also rappelling, canyoneering, horse back riding, swimming at the waterfalls, and many more.'),
(5, 'Macahambus Cave', 'macahambus cave.jpg', 'Nature and Parks', 'Macahambus Cave is a scenic cave in the Misamis Oriental province, part of Cagayan de Oro, in the Philippines. The area of the cave is part of the tropical Macahambus Forest nature reserve.'),
(6, 'Stargate', 'stargate.jpeg', 'Water & Amusement Parks', 'Rise and shine in the morning and be amazed to see the mountains, the river running by, the singing birds and the romantic sunset view. The resort is an ideal base to discover nearby Uptown SM City Cagayan de Oro and Centrio Ayala mall. Nearby mountain resort and restaurant with amazing nature and city view respectively. Ateneo Xavier University, Macahambus Cave and Limketkai Mall are an easy drive away. Local best \"kambingan restaurant\", eat all you can Lechon pork, Daru resto bar are just 5 minutes drive from the resort.');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `name`, `email`, `password`) VALUES
(2, 'Jian Jaico Cajita', 'test@dev.com', '$2y$10$6wU0UCIzOeN2pqIK7HHSh.8rGHSLoHNm9BU.1L'),
(6, 'Jian Jaico Cajita', 'dev@test.com', '$2y$10$r4n3UMrCbG/2FI/TT3vYE.OtX0fQXW32UqDaNqCoqDLvFAcv6TfWa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_place`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
