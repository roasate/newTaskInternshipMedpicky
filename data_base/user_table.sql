-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2017 at 11:15 AM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.18-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydomain`
--

-- --------------------------------------------------------

--
-- Table structure for table `userTable`
--

CREATE TABLE `userTable` (
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_registration` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `mobile_number` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userTable`
--

INSERT INTO `userTable` (`user_name`, `email`, `date_of_birth`, `date_of_registration`, `user_id`, `category`, `address`, `blood_group`, `mobile_number`) VALUES
('Nirmal', 'nirmal2609@gmail.com', '1997-04-01', '2017-04-01', 1, 'employer', 'CET', 'A +ve', '9897989710'),
('Rohit', 'rohit13@gmail.com', '1997-06-17', '2017-12-14', 2, 'HR', 'CET', 'b +ve', '9897989711'),
('Santhisenan', 'santhisenan12@gmail.com', '1997-03-08', '2017-01-04', 3, 'manager', 'CET', 'o -ve', '9898454310'),
('Sam', 'sam18@gmail.com', '1997-04-09', '2017-01-08', 4, 'senior manager', 'CET', 'o -ve', '9898454311');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userTable`
--
ALTER TABLE `userTable`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phoneNumber` (`mobile_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userTable`
--
ALTER TABLE `userTable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
