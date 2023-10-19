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
-- Table structure for table `studentenroll`
--

CREATE TABLE `studentenroll` (
  `s_id` varchar(100) NOT NULL,
  `b_id` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `t_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentenroll`
--

INSERT INTO `studentenroll` (`s_id`, `b_id`, `year`, `t_id`) VALUES
('S101', 'B401', 2, 'T103'),
('S102', 'B402', 1, 'T102'),
('S103', 'B401', 1, 'T102'),
('S104', 'B403', 2, 'T106'),
('S105', 'B402', 1, 'T104'),
('S106', 'B401', 1, 'T109'),
('S107', 'B403', 1, 'T107'),
('S108', 'B402', 1, 'T103'),
('S109', 'B403', 2, 'T102'),
('S110', 'B401', 1, 'T106'),
('S111', 'B401', 1, 'T102'),
('S112', 'B403', 2, 'T102'),
('S113', 'B402', 1, 'T101'),
('S114', 'B403', 2, 'T104'),
('S115', 'B401', 1, 'T106'),
('S116', 'B403', 2, 'T103'),
('S117', 'B403', 2, 'T103'),
('S118', 'B404', 1, 'T101'),
('S119', 'B405', 2, 'T110'),
('S120', 'B405', 1, 'T105'),
('S121', 'B405', 1, 'T104'),
('S122', 'B406', 1, 'T104'),
('S123', 'B408', 1, 'T109'),
('S124', 'B409', 1, 'T109'),
('S125', 'B406', 2, 'T108'),
('S126', 'B410', 2, 'T107'),
('S127', 'B406', 1, 'T105'),
('S128', 'B409', 2, 'T109'),
('S129', 'B406', 2, 'T106'),
('S130', 'B409', 2, 'T109');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentenroll`
--
ALTER TABLE `studentenroll`
  ADD KEY `Test` (`s_id`),
  ADD KEY `Test1` (`b_id`),
  ADD KEY `test2` (`t_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentenroll`
--
ALTER TABLE `studentenroll`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test2` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
