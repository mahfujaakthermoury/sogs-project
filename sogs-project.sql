-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 07:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sogs-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `premanent_address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `class` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `religion` text NOT NULL,
  `nationality` text NOT NULL,
  `blood` varchar(20) NOT NULL,
  `formFileMultiple` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `father_name`, `mother_name`, `present_address`, `premanent_address`, `dob`, `phone_number`, `school_name`, `class`, `roll`, `religion`, `nationality`, `blood`, `formFileMultiple`) VALUES
(1, 'Mahfuja', 'Mahmud', 'Nahar', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(2, 'mmmmm', 'ggggg', 'nnnnnnnnnnn', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(3, 'test name', '', '99999', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(4, 'LLLLLLLLL', '', '33333', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(5, 'LLLLLLLLL', '', '33333', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(6, 'LLLLLLLLL', '', '33333', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(7, 'Mahdi', '00000', '000000', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(8, 'she', '1212', '1212', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(9, 'my', 'myfather', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(10, 'my', 'myfather', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(11, 'my', 'myfather', 'mymother', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(12, 'my', 'my', 'my', 'my', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(13, 'my', 'my', 'my', 'my', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(14, '', '', '', '', 'sylher', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(15, '', '', '', '', 'sylher', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(16, 'my', 'my', 'my', 'my', 'my', '0002-01-01', 1777777888, 'technical', 0, 0, '', '', '', ''),
(17, 'my', 'my', 'my', 'my', 'my', '0002-01-01', 1777777888, 'technical', 0, 0, '', '', '', ''),
(18, 'my', 'my', 'my', 'my', 'my', '0002-01-01', 1777777888, 'technical', 0, 0, '', '', '', ''),
(19, '', '', '', '', '', '0000-00-00', 0, '', 1, 1, '', '', '', ''),
(20, '', '', '', '', '', '0000-00-00', 0, '', 1, 1, '', '', '', ''),
(21, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(22, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'muslim', 'nationality', '', ''),
(23, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'muslim', 'nationality', '', ''),
(24, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'muslim', 'bangladeshi', '', ''),
(25, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', 'A(+ve)', ''),
(26, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', 'A(+ve)', ''),
(27, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', 'A(+ve)', ''),
(28, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', 'A(+ve)', ''),
(29, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', 'A(+ve)', ''),
(30, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', 'parson5.jpg'),
(31, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', 'parson5.jpg'),
(32, 'test name', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(33, 'test name', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(34, 'test name', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(35, 'test name', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(36, 'test name', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', ''),
(37, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'muslim', 'bangladeshi', 'A(+ve)', ''),
(38, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'muslim', 'bangladeshi', 'A(+ve)', ''),
(39, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'hindu', 'others', '', ''),
(40, '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 'hindu', 'others', '', ''),
(41, 'my', '', '', '', '', '0000-00-00', 0, '', 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mahfuja', 'mahfuja@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
