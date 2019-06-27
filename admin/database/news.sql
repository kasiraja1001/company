-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 04:54 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `slno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `img`, `slno`) VALUES
('raju', '123', 'mala.jpg', 1),
('pandian', '9600373262', '', 2),
('kasiraja', '123456', '', 3),
('pandian', '12345', '', 4),
('pandian', '12345', '', 5),
('', '', '', 6),
('kasirajapandian', '123', '', 7),
('kasirajapandian', '123', '', 8),
('kasirajapandian', '123', '', 9),
('', '', '', 13),
('', '', '', 14),
('', '', '', 15),
('kasiraja', 'pandian', '', 16),
('kasiraja', '123', '', 17),
('', '', '', 18);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`) VALUES
(2, 'Technology'),
(3, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `date`, `msg`) VALUES
(1, 'kasir', 'kasi2gmail.com', '0000-00-00 00:00:00', ''),
(2, 'kasir', 'kasi2gmail.com', '0000-00-00 00:00:00', 'kasi'),
(3, 'rajukasirajapandian', 'kasiraja@gmail.com', '2019-06-26 10:48:27', 'kpokgpoggkm'),
(4, 'rajukasirajapandian', 'kasiraja@gmail.com', '2019-06-26 10:48:32', 'kpokgpoggkm'),
(5, 'rajukasirajapandian', 'kasiraja@gmail.com', '2019-06-26 10:48:45', 'kpokgpoggkm'),
(6, 'Pandian', 'pandianckr@gmail.com', '2019-06-27 06:29:21', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Text` text NOT NULL,
  `Cat` int(50) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Name`, `Text`, `Cat`, `Date`, `img`) VALUES
(1, 'Travel', 'Travel is not always pretty. It is not always comfortable. Sometimes it hurts, it even breaks your heart. But thats okay. The journey changes you; it should change you.', 2, '2019-06-26 06:14:56.501922', 'c.jpg'),
(2, 'Technology', 'Man cannot discover new oceans unless he has the courage to lose sight of the shore.', 2, '2019-06-26 06:14:56.501922', 'tech.jpg'),
(3, 'Events', 'The journey not the arrival matters', 2, '2019-06-26 06:23:32.610441', 'event.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
