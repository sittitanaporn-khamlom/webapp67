-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 10:35 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `sid` varchar(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`sid`, `sname`, `slastname`, `address`, `telephone`) VALUES
('110', 'uraiwan', 'inyaem', 'pathumthani', '0898944631'),
('111', 'nanfa', 'sontornjerawat', 'bangkok', '0928192297'),
('112', 'supavinee', 'vijittanmee', 'nonthaburi', '0802376045'),
('113', 'picharn', 'lakben', 'nonthaburi', '0971346205'),
('114', 'ug', 'kongthong', 'pathumthani', '0810126012'),
('115', 'sittitanaporn', 'khamlom', 'bangkok', '0955215051');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentbio`
--
ALTER TABLE `studentbio`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
