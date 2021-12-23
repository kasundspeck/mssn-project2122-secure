-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 03:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mssn-project2122`
--
CREATE DATABASE IF NOT EXISTS `mssn-project2122` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mssn-project2122`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `question_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `question_id`, `username`, `message`) VALUES
(1, 1, 'hannamayr', 'Right click and select new folder'),
(2, 1, 'hannamayr', 'Or use google'),
(3, 2, 'enisahuseni', 'There are many tutorials on Youtube'),
(4, 1, 'enisahuseni', 'bla'),
(5, 3, 'enisahuseni', 'Maybe this helps.'),
(7, 2, 'enisahuseni', 'By hacking it! '),
(8, 2, 'enisahuseni', 'just kidding'),
(9, 2, 'enisahuseni', 'just kidding'),
(10, 1, 'enisahuseni', 'just kidding'),
(12, 1, 'enisahuseni', 'boring'),
(13, 3, 'enisahuseni', 'Java'),
(14, 5, 'hannamayr', 'Mr. Robot');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `username`, `question`) VALUES
(1, 'enisahuseni', 'How do you create a folder?'),
(2, 'hannamayr', 'How do you hack a site?'),
(3, 'enisahuseni', 'What is the best programming language?'),
(4, 'enisahuseni', 'What is the best series?'),
(6, 'hannamayr', 'What is your favourite recipe?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NameU` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `PasswordU` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NameU`, `Lastname`, `Email`, `Username`, `PasswordU`) VALUES
('admin', 'admin', 'admin@admin.com', 'admin', '$2y$10$sYmR0I8pxAq.KQo1ULkQjuXNXozAE1dbSBCiloL5Jvc8.0x8gFNRO'),
('ale', 'ale', 'ale@ale.it', 'ale', '$2y$10$E1tVVE4SpqzclgIXQMiMz.XPY72ntbpVCH426VWwY8s1TqUt40g/y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
