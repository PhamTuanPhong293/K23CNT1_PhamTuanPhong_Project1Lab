-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 03:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptp_lesson07_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ptpkhoa`
--

CREATE TABLE `ptpkhoa` (
  `PTPMAKH` varchar(2) NOT NULL,
  `PTPTENKH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ptpkhoa`
--

INSERT INTO `ptpkhoa` (`PTPMAKH`, `PTPTENKH`) VALUES
('AV', 'Anh Văn'),
('BC', 'Blockchain'),
('MT', 'Mỹ Thuật'),
('TH', 'Tin Học'),
('VH', 'Văn Học');

-- --------------------------------------------------------

--
-- Table structure for table `ptpmonhoc`
--

CREATE TABLE `ptpmonhoc` (
  `PTPMAMH` varchar(3) NOT NULL,
  `PTPTENMH` varchar(50) NOT NULL,
  `PTPSOTIET` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ptpmonhoc`
--

INSERT INTO `ptpmonhoc` (`PTPMAMH`, `PTPTENMH`, `PTPSOTIET`) VALUES
('T01', 'Tin học đại cương', 45),
('T02', 'Tin học cơ bản', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ptpkhoa`
--
ALTER TABLE `ptpkhoa`
  ADD PRIMARY KEY (`PTPMAKH`);

--
-- Indexes for table `ptpmonhoc`
--
ALTER TABLE `ptpmonhoc`
  ADD PRIMARY KEY (`PTPMAMH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
