-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 03:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u700659242_divstress`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(3, 'admin'),
(4, 'registrar');

-- --------------------------------------------------------

--
-- Table structure for table `sendfile`
--

CREATE TABLE `sendfile` (
  `id` int(11) NOT NULL,
  `trackingnumber` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `usercode1` text DEFAULT NULL,
  `viewstatus` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `visibility` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `middlename` text DEFAULT NULL,
  `check1` text DEFAULT NULL,
  `check2` text DEFAULT NULL,
  `check3` text DEFAULT NULL,
  `check4` text DEFAULT NULL,
  `check5` text DEFAULT NULL,
  `check6` text DEFAULT NULL,
  `check7` text DEFAULT NULL,
  `check8` text DEFAULT NULL,
  `check9` text DEFAULT NULL,
  `check1quantity` varchar(255) DEFAULT NULL,
  `check2quantity` varchar(255) DEFAULT NULL,
  `check3quantity` varchar(255) DEFAULT NULL,
  `check4quantity` varchar(255) DEFAULT NULL,
  `check5quantity` varchar(255) DEFAULT NULL,
  `check6quantity` varchar(255) DEFAULT NULL,
  `check7quantity` varchar(255) DEFAULT NULL,
  `check8quantity` varchar(255) DEFAULT NULL,
  `check9quantity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sendfile`
--

INSERT INTO `sendfile` (`id`, `trackingnumber`, `detail`, `usercode1`, `viewstatus`, `date`, `message`, `status`, `visibility`, `firstname`, `lastname`, `middlename`, `check1`, `check2`, `check3`, `check4`, `check5`, `check6`, `check7`, `check8`, `check9`, `check1quantity`, `check2quantity`, `check3quantity`, `check4quantity`, `check5quantity`, `check6quantity`, `check7quantity`, `check8quantity`, `check9quantity`) VALUES
(6, '1094980718', 'test1', 'paytrickcorrea@gmail.com', 'Request Approved', 'Thu Jan 04 2024 09:21:20 GMT+0800 (Singapore Standard Time)', 'test2', 'unread', 'show', 'john', 'john', 'john', 'Transcript of Records', '0', 'Cert of Grades', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `student_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `address`, `course`, `year_level`, `email`, `firstname`, `middlename`, `lastname`, `student_id`) VALUES
(36, 'john', 'john', 'john', 'john', 'john', 'paytrickcorrea@gmail.com', 'john', 'john', 'john', '2020-1234'),
(37, 'Shahhah', 'shhsb', 'Babah', 'Nana', 'Annan', 'papa@gmail.com', 'Anann', 'Nanan', 'Nanan', '1244'),
(38, 'Vanessa', 'Vanessa', 'Casini', 'BSIT', '4', 'vanessagipoleobsit1c@gmail.com', 'VANESSA', 'Ditche', 'GIPOLEO', '2020-6789'),
(39, 'Wilson', 'Wilson', 'Casini', 'BSBA', '1', 'aquinoativo@gmail.com', 'Wilson', 'Ativo', 'Aquino', '2020-4237'),
(40, 'Maulyn', 'Maulyn', 'Casini', 'BSBA', '1', 'ativoaquino@gmail.com', 'Maulyn', 'Ativo', 'Aquino', '2020-7489');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrar`
--

CREATE TABLE `tbl_registrar` (
  `id` int(11) NOT NULL,
  `details` varchar(100) DEFAULT NULL,
  `posted_date` datetime(6) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tracking_number` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `visibility` text DEFAULT NULL,
  `check1` text DEFAULT NULL,
  `check2` text DEFAULT NULL,
  `check3` varchar(255) DEFAULT NULL,
  `check4` text DEFAULT NULL,
  `check5` text DEFAULT NULL,
  `check6` text DEFAULT NULL,
  `check7` text DEFAULT NULL,
  `check8` text DEFAULT NULL,
  `check9` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `middlename` text DEFAULT NULL,
  `check1quantity` varchar(255) DEFAULT NULL,
  `check2quantity` varchar(255) DEFAULT NULL,
  `check3quantity` varchar(255) DEFAULT NULL,
  `check4quantity` varchar(255) DEFAULT NULL,
  `check5quantity` varchar(255) DEFAULT NULL,
  `check6quantity` varchar(255) DEFAULT NULL,
  `check7quantity` varchar(255) DEFAULT NULL,
  `check8quantity` varchar(255) DEFAULT NULL,
  `check9quantity` varchar(255) DEFAULT NULL,
  `check1status` text DEFAULT NULL,
  `check2status` text DEFAULT NULL,
  `check3status` text DEFAULT NULL,
  `check4status` text DEFAULT NULL,
  `check5status` text DEFAULT NULL,
  `check6status` text DEFAULT NULL,
  `check7status` text DEFAULT NULL,
  `check8status` text DEFAULT NULL,
  `check9status` text DEFAULT NULL,
  `student_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registrar`
--

INSERT INTO `tbl_registrar` (`id`, `details`, `posted_date`, `status`, `tracking_number`, `email`, `visibility`, `check1`, `check2`, `check3`, `check4`, `check5`, `check6`, `check7`, `check8`, `check9`, `firstname`, `lastname`, `middlename`, `check1quantity`, `check2quantity`, `check3quantity`, `check4quantity`, `check5quantity`, `check6quantity`, `check7quantity`, `check8quantity`, `check9quantity`, `check1status`, `check2status`, `check3status`, `check4status`, `check5status`, `check6status`, `check7status`, `check8status`, `check9status`, `student_id`) VALUES
(310, 'test1', '2024-01-04 09:03:00.000000', 'Request Approved', '*!&)*($()!', 'paytrickcorrea@gmail.com', 'show', 'Transcript of Records', NULL, 'Cert of Grades', NULL, NULL, NULL, NULL, NULL, NULL, 'john', 'john', 'john', '1', '0', '1', '0', '0', '0', '0', '0', '0', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendfile`
--
ALTER TABLE `sendfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registrar`
--
ALTER TABLE `tbl_registrar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sendfile`
--
ALTER TABLE `sendfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_registrar`
--
ALTER TABLE `tbl_registrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
