-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 08:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `datedonate` date NOT NULL,
  `timedonate` text NOT NULL,
  `uname` text NOT NULL,
  `bloodgroup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`datedonate`, `timedonate`, `uname`, `bloodgroup`) VALUES
('2019-03-31', '11:00', 'Saumya_99', 'O+'),
('2019-03-14', '03:00', 'pranoti', 'AB+'),
('2019-03-22', '23:00', 'hrituja_173', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `uname` text NOT NULL,
  `contact` text NOT NULL,
  `bg` text NOT NULL,
  `addr` text NOT NULL,
  `sex` text NOT NULL,
  `dateofreceiving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`uname`, `contact`, `bg`, `addr`, `sex`, `dateofreceiving`) VALUES
('Rakshita', '8745693210', 'O+', 'P-123 modern colony,Delhi', 'F', '2019-04-01'),
('bindav', '9834422971', 'A+', 'house no 392 mapusa goa', 'M', '2019-03-15'),
('sanchi', '9631478523', 'B+', 'Mp nagar, kanpur', 'F', '2019-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `name` text NOT NULL,
  `bg` text NOT NULL,
  `sex` text NOT NULL,
  `age` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `uname` text NOT NULL,
  `password` text NOT NULL,
  `addr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`name`, `bg`, `sex`, `age`, `contact`, `email`, `uname`, `password`, `addr`) VALUES
('Saumya Gupta', 'O+', 'option2', '19', '8005148725', 'saumya08gupta@gmail.com', 'saumya_99', 'saumya', 'B-85Awas Vikas Colony ,Jhansi,Uttar Pradesh'),
('pronoti lanjewar', 'AB+', 'option2', '20', '9874512478', 'pro@gmail.com', 'pranoti', 'pro', '13 Baker Street ,New Delhi'),
('Hrituja Sen', 'B+', 'option2', '20', '8963214756', 'hrituja173@gmail.com', 'hrituja_173', 'hrituja', 'B-23/56 New Colony,Tripura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD UNIQUE KEY `username` (`uname`(20));

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD UNIQUE KEY `username` (`uname`(20));

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD UNIQUE KEY `username` (`uname`(20)),
  ADD UNIQUE KEY `emailid` (`email`(30));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
