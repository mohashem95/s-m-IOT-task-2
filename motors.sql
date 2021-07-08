-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 12:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `directions`
--

CREATE TABLE `directions` (
  `id` int(255) NOT NULL,
  `robot_direction` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directions`
--

INSERT INTO `directions` (`id`, `robot_direction`) VALUES
(17, 'S'),
(18, 'L'),
(19, 'L'),
(20, 'S'),
(21, 'L'),
(22, 'L'),
(23, 'B'),
(24, 'B'),
(25, 'B'),
(26, 'B'),
(27, 'S'),
(28, 'F'),
(29, 'B'),
(30, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `motorstable`
--

CREATE TABLE `motorstable` (
  `motor1` int(11) NOT NULL,
  `motor2` int(11) NOT NULL,
  `motor3` int(11) NOT NULL,
  `motor4` int(11) NOT NULL,
  `motor5` int(11) NOT NULL,
  `motor6` int(11) NOT NULL,
  `motors_status` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motorstable`
--

INSERT INTO `motorstable` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`, `motors_status`, `id`) VALUES
(96, 180, 26, 132, 48, 147, '', 1),
(116, 0, 148, 55, 86, 137, '', 2),
(116, 0, 148, 55, 86, 137, '', 3),
(90, 90, 90, 152, 90, 90, '', 4),
(90, 90, 90, 152, 90, 90, '', 5),
(90, 90, 90, 90, 90, 90, 'off', 6),
(90, 90, 90, 90, 90, 90, 'off', 7),
(90, 90, 90, 90, 90, 90, 'on', 8),
(29, 123, 157, 90, 90, 140, 'on', 9),
(29, 123, 157, 90, 90, 140, 'off', 10),
(90, 90, 90, 90, 90, 90, 'off', 11),
(90, 90, 90, 90, 90, 90, 'off', 12),
(90, 90, 90, 90, 90, 90, 'off', 13),
(90, 90, 90, 90, 90, 90, 'off', 14),
(90, 90, 90, 90, 90, 90, 'off', 15),
(90, 90, 90, 90, 90, 90, 'off', 16),
(152, 157, 117, 12, 34, 139, 'on', 17),
(32, 108, 153, 0, 12, 144, 'on', 18),
(90, 90, 90, 90, 90, 90, 'off', 19),
(116, 38, 147, 90, 56, 139, 'on', 20),
(29, 143, 127, 90, 146, 41, 'on', 21),
(0, 17, 90, 22, 173, 90, 'off', 22),
(161, 39, 90, 157, 16, 180, 'on', 23),
(90, 90, 90, 90, 90, 90, 'on', 24),
(90, 90, 90, 90, 90, 90, 'off', 25),
(90, 90, 90, 90, 90, 90, 'off', 26),
(90, 90, 90, 90, 90, 90, 'off', 27),
(90, 90, 90, 90, 90, 90, 'on', 28),
(90, 90, 90, 90, 90, 143, 'off', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorstable`
--
ALTER TABLE `motorstable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `motorstable`
--
ALTER TABLE `motorstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
