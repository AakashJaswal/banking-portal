-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 08:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `username` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `withdraw/deposit` varchar(8) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`username`, `date`, `withdraw/deposit`, `amount`) VALUES
('ajaswal', '2016-01-01', 'Withdraw', 100),
('ajaswal', '2016-02-23', 'Deposit', 2000),
('ajaswal', '2016-04-23', 'Withdraw', 500),
('ajaswal', '2016-04-23', 'Withdraw', 100),
('ajaswal', '2016-06-23', 'Deposit', 1500),
('ajit', '2016-02-23', 'Deposit', 2000),
('ajit', '2016-04-23', 'Withdraw', 500),
('ajit', '2016-04-23', 'Withdraw', 100),
('ajit', '2016-06-23', 'Deposit', 1500),
('saurab', '2016-02-23', 'Deposit', 2000),
('saurab', '2016-04-23', 'Withdraw', 500),
('saurab', '2016-04-23', 'Withdraw', 100),
('saurab', '2016-06-23', 'Deposit', 1500),
('kapil', '0000-00-00', 'deposit', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  `time_posted` time NOT NULL,
  `date_edited` varchar(30) NOT NULL,
  `time_edited` time NOT NULL,
  `public` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locator`
--

CREATE TABLE `locator` (
  `pin` int(11) NOT NULL,
  `address` text NOT NULL,
  `location` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locator`
--

INSERT INTO `locator` (`pin`, `address`, `location`) VALUES
(400001, 'Shop No.1,Alpha Road', 'colaba'),
(400002, 'Shop No.2,charlie Road', 'CST'),
(400003, 'Shop No.4,Bhanu Road', 'Andheri'),
(400004, 'Shop No.23,dhemu Road', 'Bandra'),
(400706, 'Shop No.54,LP Road', 'Nerul'),
(400005, 'Shop No.23,charlie Road', 'Kurla');

-- --------------------------------------------------------

--
-- Table structure for table `locker`
--

CREATE TABLE `locker` (
  `Locker No` int(11) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locker`
--

INSERT INTO `locker` (`Locker No`, `availability`) VALUES
(101, 'yes'),
(201, 'yes'),
(301, 'yes'),
(401, 'yes'),
(501, 'yes'),
(601, 'yes'),
(701, 'yes'),
(801, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ajaswal', 'aezakmiaj'),
(2, 'ajit', 'aezakmi'),
(3, 'saurab', 'aezakmi'),
(4, 'kapil', 'aezakmi'),
(5, 'abcd', '74123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
