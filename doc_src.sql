-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 04:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_src`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ftitle` varchar(50) NOT NULL,
  `fdescription` varchar(200) NOT NULL,
  `fpath` varchar(50) NOT NULL,
  `ftype` varchar(50) NOT NULL,
  `ftime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`fid`, `uid`, `ftitle`, `fdescription`, `fpath`, `ftype`, `ftime`) VALUES
(1, 5, 'avh', 'so this was am updated one', 'uploads/Document Search Engine_final.pdf', 'pdf', '2018-03-18 06:42:26'),
(2, 5, 'docs', 'this is sample doc', 'uploads/Investigatory.docx', 'docx', '2018-03-18 05:17:34'),
(3, 5, 'Information security', 'This is the book for the lective: Information security', 'uploads/Screenshot (38).png', 'png', '2018-03-06 09:29:09'),
(4, 5, 'to hike team', 'this is an error report', 'uploads/Hello Team Hike.docx', 'docx', '2018-03-08 10:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `time`) VALUES
(5, 'chk', 'incharmi.ck@gmail.com', '123', '2018-03-17 05:53:29'),
(6, 'abc', 'inchk@gmail.com', '1234', '2018-03-18 04:54:01'),
(8, 'xyz', 'in@gml.com', '1234', '2018-03-18 04:55:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fpath` (`fpath`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
