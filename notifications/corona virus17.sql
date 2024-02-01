-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 11:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `user_id`, `password`, `question`, `answer`, `date`, `name`) VALUES
(1, 'admin', '123', '', '', '0000-00-00 00:00:00', ''),
(2, '', '', '', '', '2020-02-14 13:48:28', '1'),
(3, '', '', '', '', '2020-02-14 13:52:53', '1'),
(4, '', '', '', '', '2020-02-14 14:03:23', '1'),
(5, '', '', '', '', '2020-02-14 14:04:16', '1'),
(6, '', '', '', '', '2020-02-26 10:34:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` longtext NOT NULL,
  `user_id` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `image` varchar(33) NOT NULL,
  `question` varchar(33) NOT NULL,
  `answer` varchar(33) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `f_name`, `gender`, `dob`, `branch`, `sem`, `contact`, `email`, `address`, `user_id`, `password`, `image`, `question`, `answer`, `date`) VALUES
(1, 'ar', 'ja', '1', '0000-00-00', 'ET&T', '1st', '9179691331', 'ar@afekh', 'Khaira', 'student', '1234', 'png', '', '', '2020-02-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
