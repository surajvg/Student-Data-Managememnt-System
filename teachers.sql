-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 06:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` varchar(100) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_name`, `gender`, `designation`) VALUES
('T101', 'ANUPAMA', 'FEMALE', 'HOD'),
('T102', 'SAGAR', 'MALE', 'ASST PROF'),
('T103', 'KARTHIK', 'MALE', 'PROF'),
('T104', 'SACHIN', 'MALE', 'ASST PROF'),
('T105', 'SHRUTHI', 'FEMALE', 'ASST PROF'),
('T106', 'KURIAN', 'MALE', 'PROF'),
('T107', 'BASAVARAJ', 'MALE', 'ASST PROF'),
('T108', 'SURVI', 'FEMALE', 'PROF'),
('T109', 'SWATHI', 'FEMALE', 'ASST PROF'),
('T110', 'AFSHAN', 'FEMALE', 'ASST PROF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
