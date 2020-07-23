-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 06:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hilon_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `company_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_tbl`
--

INSERT INTO `company_tbl` (`company_id`, `name`, `phone`, `address`, `logo`, `status`) VALUES
('cmpy5f194bdda7287', 'PT. Asuransi Jiwasraya (Persero)', '085718215867', 'surade kabupaten sukabumi', '23-07-2020lg1595496774.jpg', '1'),
('cmpy5f195f66340af', 'PT. PT (Persero)', '089636679390', 'sukabumi', '23-07-2020lg1595498342.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pic_tbl`
--

CREATE TABLE `pic_tbl` (
  `pic_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `company_id` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic_tbl`
--

INSERT INTO `pic_tbl` (`pic_id`, `name`, `email`, `phone`, `address`, `company_id`, `status`) VALUES
(1, 'Febi Aris Rinaldi', 'rfebiaris@gmail.com', '089636679390', 'Surade Sukabumi Pantai Ujung Genteng Penangkaran Penyu', 'cmpy5f194bdda7287', '1'),
(2, 'Febi Aris Rinaldi', 'rfebiaris@gmail.com', '089636679390', 'fsdfdfdsfsdf', 'cmpy5f195f66340af', '1'),
(3, 'Aris', 'aris@gmail.com', '089636679390', 'sukabumi', 'cmpy5f194bdda7287', '1'),
(6, 'pit', 'pi@gmail.com', '32432943049', 'kjrkwjksdjf\r\n', 'cmpy5f195f66340af', '1'),
(7, 'Rinaldi', 'rinaldi@gmail.com', '90842903840932', 'jfksdjf;akja;kdj', 'cmpy5f194bdda7287', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `pic_tbl`
--
ALTER TABLE `pic_tbl`
  ADD PRIMARY KEY (`pic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pic_tbl`
--
ALTER TABLE `pic_tbl`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
