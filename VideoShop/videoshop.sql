-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 02:30 AM
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
-- Database: `videoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` varchar(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `aaddress` varchar(50) NOT NULL,
  `aage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `aaddress`, `aage`) VALUES
('1', 'thunder', 'saifa', 'ปทุมธานี', 21);

-- --------------------------------------------------------

--
-- Table structure for table `actor_product`
--

CREATE TABLE `actor_product` (
  `aid` varchar(3) NOT NULL,
  `pid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor_product`
--

INSERT INTO `actor_product` (`aid`, `pid`) VALUES
('1', '003'),
('1', '004');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `maddress` varchar(50) NOT NULL,
  `mtel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `maddress`, `mtel`) VALUES
('1', 'สิทธิธนาพร', 'คำหลอม', 'กรุงเทพ', '0955215051');

-- --------------------------------------------------------

--
-- Table structure for table `mem_product`
--

CREATE TABLE `mem_product` (
  `mid` varchar(3) NOT NULL,
  `pid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mem_product`
--

INSERT INTO `mem_product` (`mid`, `pid`) VALUES
('1', '001');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` varchar(3) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pdetail` varchar(400) NOT NULL,
  `ptime` time NOT NULL,
  `pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdetail`, `ptime`, `pdate`) VALUES
('001', 'เพื่อน(ไม่)สนิท', 'ภาพยนตร์แนวตลกดราม่าในรั้วโรงเรียนของ GDH ', '02:10:00', '2024-09-25'),
('002', 'พี่มากพระโขนง', 'เรื่องราวความรักที่ผูกพันระหว่างคนเป็นและผีสาง', '02:20:00', '2024-09-25'),
('003', 'ชัตเตอร์ กดติดวิญญาณ', 'แนว: สยองขวัญ/ระทึกขวัญ', '01:40:00', '2024-09-25'),
('004', 'โกดังผี', 'แนว: ตลก/สยองขวัญ', '01:30:00', '2024-09-25'),
('005', 'บุปผาราตรี', 'แนว: สยองขวัญ/โรแมนติก', '02:00:00', '2024-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `actor_product`
--
ALTER TABLE `actor_product`
  ADD KEY `aid` (`aid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `mem_product`
--
ALTER TABLE `mem_product`
  ADD KEY `mid` (`mid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
