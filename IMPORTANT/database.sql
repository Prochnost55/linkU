-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 02:08 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `useremail` varchar(100) NOT NULL,
  `Bday` text NOT NULL,
  `RollNo` varchar(6) NOT NULL,
  `ContNum` varchar(10) NOT NULL,
  `AddClg` varchar(100) NOT NULL,
  `AddHome` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`useremail`, `Bday`, `RollNo`, `ContNum`, `AddClg`, `AddHome`) VALUES
('aks3555@gmail.com', '1997-10-26', '160504', '9410511989', 'B-302,Kailash Hostel,GBPEC', 'Pratibha Typing Institute,\r\nGandhi Stadium Road,\r\nPilibhit '),
('test@test.com', '1997-06-18', '160251', '9745686875', 'A325,jaks,jald', 'jalknconal sdl,\r\najd;lfa,\r\nsadkf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `password` text NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `privileges` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `useremail`, `gender`, `privileges`) VALUES
('test test', 'test', 'test@test.com', 'Male', 'local'),
('abhishek singh', 'abhi8560', 'aks3555@gmail.com', 'Male', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`useremail`),
  ADD UNIQUE KEY `userID` (`useremail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`useremail`),
  ADD UNIQUE KEY `useremail` (`useremail`),
  ADD KEY `useremail_2` (`useremail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
