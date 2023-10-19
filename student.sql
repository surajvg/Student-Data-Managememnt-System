-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 06:27 PM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(100) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `gender`, `email`, `ph_no`) VALUES
('S101', 'GOURISH', 'male', 'gourish@gmail.com', '9343346829'),
('S102', 'SURAJ', 'male', 'suraj@gmail.com', '9145238695'),
('S103', 'ARUN', 'male', 'arun@gmail.com', '9145826739'),
('S104', 'DHRUVA', 'male', 'dhruva@gmail.com', '9236485139'),
('S105', 'CHANDU', 'male', 'chandu@gmail.com', '9645823158'),
('S106', 'CHARAN', 'male', 'charan@gmail.com', '9856321459'),
('S107', 'SAGAR', 'male', 'sagar@gmail.com', '9856321869'),
('S108', 'ANIL', 'male', 'anil@gmail.com', '9985462589'),
('S109', 'ANAND', 'male', 'anand@gmail.com', '9158746294'),
('S110', 'SAIPRASAD', 'male', 'saiprasad@gmail.com', '9625489673'),
('S111', 'PRASAD', 'male', 'prasad@gmail.com', '9845682147'),
('S112', 'SHUBHA', 'female', 'shubha@gmail.com', '8956748532'),
('S113', 'KAVAN', 'female', 'kavana@gmail.com', '8549612339'),
('S114', 'PREETI', 'female', 'preeti@gmail.com', '7546829135'),
('S115', 'SHREEVALLABHA', 'male', 'shreevallabha@gmail.com', '7849632518'),
('S116', 'HEMANT', 'male', 'hemant@gmail.com', '8764982359'),
('S117', 'SOMANNA', 'male', 'somanna@gmail.com', '9696485629'),
('S118', 'SHRAVAN', 'male', 'shravan@gmail.com', '9587469325'),
('S119', 'VIKAS', 'male', 'vikas@gmail.com', '9658745896'),
('S120', 'PAWAN', 'male', 'pawan@gmail.com', '9235698647'),
('S121', 'MUKTA', 'female', 'mukta@gmail.com', '7896589658'),
('S122', 'VARSHA', 'female', 'varsha@gmail.com', '8965785496'),
('S123', 'SONALI', 'female', 'sonali@gmail.com', '8569458723'),
('S124', ' SOUMYA', 'female', 'soumya@gmail.com', '8759669485'),
('S125', 'SHARANYA', 'female', 'sharanya@gmail.com', '8569745263'),
('S126', 'DHANALAXMI', 'female', 'dhanalaxmi@gmail.com', '8942579418'),
('S127', 'AMAY', 'male', 'amay@gmail.com', '7845968513'),
('S128', 'SANJAY', 'male', 'sanjay@gmail.com', '8523697416'),
('S129', 'ANANT', 'male', 'anant@gmail.com', '9856478523'),
('S130', 'MADHU', 'female', 'madhu@gmail.com', '9514872635');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
