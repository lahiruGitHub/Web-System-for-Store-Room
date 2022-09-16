-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 06:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `codata`
--

CREATE TABLE `codata` (
  `Serialno` varchar(40) NOT NULL,
  `modelname` varchar(40) NOT NULL,
  `loction` varchar(40) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `iname` varchar(30) NOT NULL,
  `condi` varchar(11) NOT NULL,
  `partno` varchar(25) NOT NULL,
  `devicetype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codata`
--

INSERT INTO `codata` (`Serialno`, `modelname`, `loction`, `rname`, `iname`, `condi`, `partno`, `devicetype`) VALUES
('', '', '', '', '', '', '', ''),
('13er', 'acwk', '', '', '', 'used', '23d', 'Switch'),
('adssad', 'ds', 'sasasdsd', 'sdsfdsfd', 'aaaaaaaaaa123', 'used', 'aas', 'Transmision'),
('S1001', 'M454', '', '', '', 'not_use', 'P343', 'Switch'),
('sdsad', 'ascg', '', '', '', '', '', ''),
('sdsad1', 'ack', '', '', '', 'used', ' 567dfg', 'Transmision'),
('sdsad1454', 'ACK card', 'kielaniya', 'dsfdfd', '', 'repaire', ' 567dfg', 'Transmision'),
('sdsad2', 'ascgw', '', '', '', 'fault', ' 567dfg', 'Switch'),
('SS1', 'sadsad', '', '', '', 'used', '', ''),
('SS2', 'A234', '', '', '', 'fault', '', ''),
('ss21', 'ACK card', '', '', '', 'not_use', ' 567dfg', 'Transmision'),
('ss222', 'ackw', '', '', '', 'fault', '', ''),
('ss223', 'acwk', 'kelniya', 'lhitu', 'mr ranira', 'fault', 'ytuyi6', 'Switch'),
('we2', 'ssd', '', '', '', 'used', '', ''),
('wew123we', 'phono', '', '', '', 'used', '567rt12', 'Switch'),
('wq1', 'ack', '', '', '', 'used', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codata`
--
ALTER TABLE `codata`
  ADD PRIMARY KEY (`Serialno`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
