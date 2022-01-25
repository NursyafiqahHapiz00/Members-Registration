-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `273688_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership_688`
--

CREATE TABLE `membership_688` (
  `ic_no_688` varchar(12) NOT NULL,
  `name_688` varchar(150) NOT NULL,
  `phone_688` varchar(25) NOT NULL,
  `email_688` varchar(50) NOT NULL,
  `member_type_688` varchar(25) NOT NULL,
  `register_date_688` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_688`
--

INSERT INTO `membership_688` (`ic_no_688`, `name_688`, `phone_688`, `email_688`, `member_type_688`, `register_date_688`) VALUES
('000312080649', 'NURSYAFIQAH BINTI HAPIZ', '013-4599456', 'syafiqah@gmail.com', 'Student', '2022-01-04'),
('710726085496', 'NORLIYATI BINTI MOHD KHALILUDDIN', '013-4511559', 'norli@gmail.com', 'Staff', '2022-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership_688`
--
ALTER TABLE `membership_688`
  ADD PRIMARY KEY (`ic_no_688`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
