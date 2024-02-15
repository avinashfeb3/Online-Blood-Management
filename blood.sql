-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 02:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE contact (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO contact (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'avi', 'avinash416sng@gmail.', '2147483647', 'Need O+ blood'),
(2, 'mohan', 'mohan@gmail.com', '2147483647', 'Need A- blood'),
(3, 'praveen', 'praveen@gmail.com', '2147483647', 'Need A+ blood'),
(4, 'kishan', 'kishan@gmail.com', '1111111111', 'o\r\n+ blood'),
(5, 'avinash', 'avinash416sng@gmail.', '2147483647', 'Need AB+ blood'),
(6, 'amit', 'amit@gmail.com', '9868445789', 'ab- blood'),
(7, 'amit', 'kishan@gmail.com', '7643219885', 'a- blood'),
(8, 'amit', 'praveen@gmail.com', '9868445789', 'a- blood'),
(9, 'mohan', 'kishan@gmail.com', '7868339154', 'knkfnvnkxcn'),
(11, 'praveen', 'avinash416sng@gmail.', '7643219885', 'Need O+ blood'),
(13, 'amit', 'avinash416sng@gmail.', '9868445789', 'A+ blood'),
(15, 'praveen', 'kishan@gmail.com', '7868339154', 'a- blood'),
(17, 'mohan', 'amit@gmail.com', '7643219885', 'b- blood'),
(19, 'kishan', 'praveen@gmail.com', '7868339154', 'ab+ blood'),
(23, 'sameer', 'sameer19@gmail.com', '9433678917', 'ab- blood'),
(24, 'avi', 'avinash@gmail.com', '9582438219', 'b- blood'),
(25, 'sam', 'rocky34@yahoo.com', '9654821965', 'ab+ blood'),
(27, 'amir', 'amir@outlook.com', '7011140582', 'Need ab- blood'),
(28, 'ameer', 'ameer15@gmail.com', '9686457525', 'Need b- blood'),
(29, 'sourav', 'souravpaney@rediffma', '8447786542', 'Need A- blood'),
(30, 'varun', 'varun@gmail.com', '7053357730', 'Need B- blood'),
(31, 'ahmer', 'ahmer@yahoo.com', '9686774532', 'o- blood'),
(35, 'vikas', 'vikas@gmail.com', '1234567890', 'Need 0 blood'),
(36, 'rohit', 'rohit@gmail.com', '7053346271', 'Need O- blood immediately.'),
(38, 'anuj', 'anuj123@gmail.com', '9654321975', 'Need A- blood'),
(39, 'vinay', 'vinay456@gmail.com', '7678453219', 'Need Ab+ blood'),
(40, 'avinash', 'amit@gmail.com', '7868339154', 'need A+ blood'),
(49, 'nsdcn', 'msdnmcnsdm@gmail.com', '1234567890', 'msmdfmc'),
(57, 'sohan', 'sohan@gmail.com', '7676784334', 'Need A- blood'),
(58, 'sameer', 'amit@gmail.com', '9868445789', 'a+ blood'),
(80, 'Stephen John', 'stephen@outlook.com', '7643219885', 'hi'),
(85, 'smita', 'smita@its.edu.in', '3333333333', 'need o\r\n+ blood'),
(86, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(4, 'Avinash', 'b44f5585b61f945c883f0ccfeac95146'),
(5, 'Avinash', '25f9e794323b453885f5181f1b624d0b'),
(6, 'avinash416sng', 'Ashu@1994'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'test', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `need`
--

CREATE TABLE `need` (
  `id` int(11) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `blood` varchar(40) NOT NULL,
  `need` varchar(40) NOT NULL,
  `hname` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `dn` varchar(40) NOT NULL,
  `wr` varchar(40) NOT NULL,
  `cn` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact1` varchar(40) NOT NULL,
  `contact2` varchar(40) NOT NULL,
  `res` varchar(40) NOT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `need`
--

INSERT INTO `need` (`id`, `pname`, `gender`, `blood`, `need`, `hname`, `city`, `pin`, `dn`, `wr`, `cn`, `address`, `email`, `contact1`, `contact2`, `res`, `photo`) VALUES
(12, 'Avinash Singh', 'Male', 'Select Blood', '', '', '', '', '', '', '', '', '', '', '', '', 'Koala.jpg'),
(13, 'Sameer Sharma', 'Male', 'Select Blood', '', '', '', '', '', '', '', '', '', '', '', '', 'Desert.jpg'),
(15, 'sunny', 'Select Gender', 'Select Blood', '', '', '', '', '', '', '', '', '', '', '', '', 'Lighthouse.jpg'),
(16, 'Ashu', 'Select Gender', 'Select Blood', '', '', '', '', '', '', '', '', '', '', '', '', 'Tulips.jpg'),
(17, 'ameer', 'Male', 'A+', '4', 'LNJP Hospital', 'Delhi', '110092', 'Dr Adrash', '2018-07-08', 'Ruchi Singh', 'School Block Shakarpur', 'ruchifeb19@gmail.com', '7053357730', '9582438219', 'For treatment', 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `bg` varchar(40) NOT NULL,
  `bw` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `contact1` varchar(40) NOT NULL,
  `contact2` varchar(40) NOT NULL,
  `nd` varchar(40) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `d1` varchar(40) NOT NULL,
  `d2` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `fname`, `gender`, `dob`, `bg`, `bw`, `email`, `country`, `state`, `area`, `address`, `pin`, `contact1`, `contact2`, `nd`, `photo`, `d1`, `d2`) VALUES
(31, '', '', 'Please Select', '', 'Please Select', '', '', 'Select Country', 'Select State', '', '', '', '', '', 'Select Donor', 'Penguins.jpg', '', ''),
(32, '', '', 'Please Select', '', 'Please Select', '', '', 'Select Country', 'Select State', '', '', '', '', '', 'Select Donor', 'Avinash pic.jpg', '', ''),
(33, '', '', 'Please Select', '', 'Please Select', '', '', 'Select Country', 'Select State', '', '', '', '', '', 'Select Donor', 'Koala.jpg', '', ''),
(34, 'Avinash', '', 'Please Select', '', 'Please Select', '', '', 'Select Country', 'Select State', '', '', '', '', '', 'Select Donor', 'Chrysanthemum.jpg', '', ''),
(35, 'Avinash', '', 'Please Select', '', 'Please Select', '', '', 'Select Country', 'Select State', '', '', '', '', '', 'Select Donor', 'Penguins.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`,`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need`
--
ALTER TABLE `need`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pname` (`pname`,`dn`,`cn`,`address`,`email`,`contact1`,`contact2`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `need`
--
ALTER TABLE `need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
