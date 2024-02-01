-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 05:50 AM
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
  `name` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `user_id`, `password`, `question`, `answer`, `date`, `name`) VALUES
(1, 'administrator@admin.com', 'admin', 'A', 'raja', '0000-00-00 00:00:00', 'Administartor');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tbl`
--

CREATE TABLE `attendance_tbl` (
  `sno` int(255) NOT NULL,
  `student_name` varchar(44) NOT NULL,
  `student_uid` varchar(44) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(22) NOT NULL,
  `staff_name` varchar(44) NOT NULL,
  `staff_uid` varchar(44) NOT NULL,
  `subject` varchar(44) NOT NULL,
  `subject_code` varchar(112) NOT NULL,
  `attendance_status` varchar(44) NOT NULL,
  `attendance_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `submission_date` varchar(112) NOT NULL,
  `day` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_tbl`
--

INSERT INTO `attendance_tbl` (`sno`, `student_name`, `student_uid`, `branch`, `semester`, `staff_name`, `staff_uid`, `subject`, `subject_code`, `attendance_status`, `attendance_date`, `submission_date`, `day`) VALUES
(37, 'surya', 'demo', 'CSE', '5th', 'Mrs. Asha Miri', 'Asha@3006', 'java', '11', 'P', '2020-03-22 08:51:13', '2020-03', '22'),
(38, 'Bharat', 'bharat123', 'CSE', '5th', 'Mrs. Asha Miri', 'Asha@3006', 'java', '11', 'A', '2020-03-22 08:51:13', '2020-03', '22'),
(39, 'surya', 'demo', 'CSE', '5th', 'Mrs. Asha Miri', 'Asha@3006', 'java', '12', 'P', '2020-03-23 09:00:41', '2020-03', '23'),
(40, 'Bharat', 'bharat123', 'CSE', '5th', 'Mrs. Asha Miri', 'Asha@3006', 'java', '12', 'P', '2020-03-23 09:00:41', '2020-03', '23'),
(41, 'surya', 'demo', 'CSE', '5th', 'Mrs. Asha Miri', 'Asha@3006', 'java', '12', 'P', '2020-03-23 02:58:18', '2020-03', '25'),
(42, 'Bharat', 'bharat123', 'CSE', '5th', 'Mrs. Asha Miri', 'Asha@3006', 'java', '12', 'P', '2020-03-23 02:58:18', '2020-03', '25');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `sno` int(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `filename` varchar(44) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `notification` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`sno`, `user_id`, `filename`, `name`, `description`, `notification`, `date`) VALUES
(13, 'arun', 'Major Project List', 'Arun', 'Final list of Major Project (Computer Science Engineering)', 'xlsx', '2020-03-03'),
(14, 'arun', 'Time table', 'Arun', 'Time Table 2019-20', 'pdf', '2020-03-04'),
(17, 'Asha@3006', 'corona virus', 'Mrs. Asha Miri', 'New time table of final exam 2020', 'sql', '2020-03-14'),
(18, 'Asha@3006', 'wdzsaf', 'Mrs. Asha Miri', 'adsgs', 'pdf', '2020-03-17'),
(19, 'Asha@3006', 'wdzsaf', 'Mrs. Asha Miri', 'adsgs', 'pdf', '2020-03-17'),
(20, 'Asha@3006', 'safas', 'Mrs. Asha Miri', 'sfdasdfsd', 'jpg', '2020-03-17'),
(21, 'Asha@3006', 'asfadas', 'Mrs. Asha Miri', 'asdads', 'png', '2020-03-17'),
(22, 'Asha@3006', 'ADASFAS', 'Mrs. Asha Miri', 'adsDAS', '', '2020-03-17'),
(23, 'Asha@3006', 'ASFA', 'Mrs. Asha Miri', 'ASFAFAF', '', '2020-03-17'),
(24, 'Asha@3006', 'DFHFGJ', 'Mrs. Asha Miri', 'JRYTEWTW', '', '2020-03-17'),
(25, 'Asha@3006', 'GHMGH', 'Mrs. Asha Miri', 'DTERT3', '', '2020-03-17'),
(26, 'Asha@3006', 'dgdhjhg', 'Mrs. Asha Miri', 'gj', '', '2020-03-17'),
(27, 'Asha@3006', 's', 'Mrs. Asha Miri', 'sfd', '', '2020-03-17'),
(28, 'Asha@3006', 'fg', 'Mrs. Asha Miri', 'dgd', '', '2020-03-17'),
(29, 'Asha@3006', 'gfg', 'Mrs. Asha Miri', 'gdgf', '', '2020-03-17'),
(30, 'Asha@3006', 'a', 'Mrs. Asha Miri', 'a', '', '2020-03-17'),
(31, 'Asha@3006', 'ds', 'Mrs. Asha Miri', 'ds', '', '2020-03-17'),
(32, 'Asha@3006', 'fdf', 'Mrs. Asha Miri', 'dfd', '', '2020-03-17'),
(33, 'Asha@3006', 'dfd', 'Mrs. Asha Miri', 'dfd', '', '2020-03-17'),
(34, 'Asha@3006', '123', 'Mrs. Asha Miri', '23', '', '2020-03-17'),
(36, 'Asha@3006', 'a', 'Mrs. Asha Miri', 'aaadsd', '', '2020-03-17'),
(37, 'Asha@3006', '1wqeeq', 'Mrs. Asha Miri', 'dgsf', '', '2020-03-17'),
(38, 'Asha@3006', 'sfhhdf', 'Mrs. Asha Miri', 'dfghs', '', '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sno` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `branch` varchar(44) NOT NULL,
  `Session` varchar(44) NOT NULL,
  `Name` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sno`, `user_id`, `password`, `date`, `branch`, `Session`, `Name`) VALUES
(7, 'bharat123', '1234', '05-03-2020', '', '2012-2015', 'bharat'),
(8, 'pushkar@123', '11111', '06-03-2020', '', '2020-2023', 'pushkar'),
(9, 'chhotu', '1234', '20-03-2020', 'ET&T', '2020-23', 'Bhevesh');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `sno` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `designation` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `aadhar_no` varchar(30) NOT NULL,
  `address` longtext NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`sno`, `name`, `f_name`, `gender`, `dob`, `doj`, `designation`, `branch`, `contact`, `email`, `aadhar_no`, `address`, `user_id`, `password`, `image`, `question`, `answer`, `status`, `date`) VALUES
(11, 'Mrs. Asha Miri', 'papa', '2', '1990-01-01', '2016-10-03', 'Lecturer', 'CSE', '7470343006', 'ashamiri@gmail.com', '111122223333', 'Khairagarh', 'Asha@3006', '1111', 'jpg', '', '', 'admin', '2020-03-12'),
(12, 'Miss. Roshni Tamrakar	', 'Papa Ji', '2', '1996-01-01', '2016-10-04', 'Lecturer', 'CSE', '7879948800', 'roshni@gmail.com', '222233334444', 'Khairagarh', 'roshni@8800', '1234', 'jpg', '', '', 'staff', '2020-03-12');

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
  `p_contact` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` longtext NOT NULL,
  `user_id` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `image` varchar(33) NOT NULL,
  `session` varchar(30) NOT NULL,
  `question` varchar(33) NOT NULL,
  `answer` varchar(33) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `f_name`, `gender`, `dob`, `branch`, `sem`, `contact`, `p_contact`, `email`, `address`, `user_id`, `password`, `image`, `session`, `question`, `answer`, `date`) VALUES
(1, 'ar', 'ja', '1', '0000-00-00', 'ET&T', '1st', '9179691331', '', 'ar@afekh', 'Khaira', 'student', '1234', 'png', '', '', '', '2020-02-12'),
(2, 'surya', 'singham', '1', '0000-00-00', 'CSE', '5th', '1234567890', '4544646666', 'surya@gmail.com', 'balod', 'demo', '1234', 'png', '', '', '', '2020-02-27'),
(6, 'Bharat', 'Papa', '1', '2020-03-12', 'CSE', '5th', '1111111111', '2222222222', 'bharat@gmail.com', 'kgh', 'bharat123', '1234', 'png', '', '', '', '2020-03-19'),
(7, 'Bhevesh', 'papa', '1', '2000-02-04', 'ET&T', '1st', '8745457885', '9977784726', 'bhevesh@gmail.com', 'khaira', 'chhotu', '1234', 'jpg', '', '', '', '2020-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `sno` int(55) NOT NULL,
  `staff_name` varchar(55) NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `subject_name` varchar(55) NOT NULL,
  `subject_code` varchar(55) NOT NULL,
  `branch` varchar(55) NOT NULL,
  `semester` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`sno`, `staff_name`, `user_id`, `subject_name`, `subject_code`, `branch`, `semester`) VALUES
(11, 'Mrs. Asha Miri', 'Asha@3006', 'java', '11', 'CSE', '5th'),
(12, 'Mrs. Asha Miri', 'Asha@3006', 'mpi', '12', 'CSE', '5th'),
(13, 'Mrs. Asha Miri', 'Asha@3006', 'CA', '13', 'CSE', '4th'),
(14, 'Mrs. Asha Miri', 'Asha@3006', 'C++', '14', 'CSE', '3rd'),
(15, 'Miss. Roshni Tamrakar	', 'roshni@8800', 'DT', '21', 'CSE', '3rd'),
(16, 'Miss. Roshni Tamrakar	', 'roshni@8800', 'CN', '22', 'CSE', '3rd'),
(17, 'Miss. Roshni Tamrakar	', 'roshni@8800', 'linux', '23', 'CSE', '5th'),
(18, 'Miss. Roshni Tamrakar	', 'roshni@8800', 'DBMS', '24', 'CSE', '6th'),
(19, 'Miss. Roshni Tamrakar	', 'roshni@8800', 'aaa', '222', 'ET&T', '1st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `sno` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
