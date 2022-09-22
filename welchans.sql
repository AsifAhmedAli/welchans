-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2022 at 10:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welchans`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `name` text NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`name`, `username`, `pass`, `id`) VALUES
('admin', 'Management', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email1` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `allergies` varchar(30) NOT NULL,
  `health_conditions` varchar(30) NOT NULL,
  `medicines_using` varchar(30) NOT NULL,
  `reason_of_visit` varchar(30) NOT NULL,
  `time_of_visit` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fname`, `lname`, `email1`, `DOB`, `gender`, `phonenumber`, `city`, `state`, `zip`, `address`, `allergies`, `health_conditions`, `medicines_using`, `reason_of_visit`, `time_of_visit`, `message`) VALUES
(2, 'fname', 'fname', 'fname', '2022-09-23', 'Male', 'fname', 'fname', 'fname', '122', 'fname', 'fname', 'fname', 'fname', 'Upper Respiratory Infection', 'Specific Time', 'value=\"fname\"');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `address`, `phonenumber`, `heading`) VALUES
(1, '1303 McCullough, STE 138<br>              San Antonio, TX 78212', '', 'SAN ANTONIO PRIME WELLNESS');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logofilename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logofilename`) VALUES
('image.1662155588.png');

-- --------------------------------------------------------

--
-- Table structure for table `reason_for_visit`
--

CREATE TABLE `reason_for_visit` (
  `id` int(11) NOT NULL,
  `reason_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reason_for_visit`
--

INSERT INTO `reason_for_visit` (`id`, `reason_name`) VALUES
(1, 'Rashes'),
(2, 'Back Pain (non-opiate)'),
(3, 'Upper Respiratory Infection'),
(4, 'Urinary Tract Infection'),
(5, 'Nausea, Vomiting, Diarrehea'),
(6, 'Heart burn, Acid Reflux'),
(7, 'Pink Eye'),
(8, 'Ear Reflux'),
(9, 'Weight Loss'),
(10, 'Men’s Health'),
(11, 'Women’s Health'),
(14, 'PREP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reason_for_visit`
--
ALTER TABLE `reason_for_visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reason_for_visit`
--
ALTER TABLE `reason_for_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
