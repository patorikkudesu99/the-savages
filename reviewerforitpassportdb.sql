-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 04:32 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewerforitpassportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `course/job` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `middlename`, `lastname`, `gender`, `age`, `type`, `course/job`, `school`, `emailadd`, `username`, `password`) VALUES
(2, 'Stephen', 'Parker', 'Curry', 'Male', 0, 'Basketball Player', 'Bachelor of Science in Information Technology', 'Stanford University', 'stephencurry@gmail.com', 'stephencurry97', '60da6bdd625e46b4ffa9b6ec1a2193e8'),
(3, 'Shawn', 'Peter', 'Mendes', 'Male', 20, 'Music Soloist', 'ambot', 'Hogwarts School of Witchcraft and Wizardry', 'shawnlovesme@myhobby.com', 'pattypat', '1ef7fd0aa066ccb85bd3c07c0c37e7f8'),
(4, 'Sarina', 'S', 'Uro', 'Female', 24, 'Student', 'Bachelor of Science in Information Technology', 'Golden Success College', 'sarinauro@gmail.com', 'sarina008', 'hogwarts'),
(5, 'fsdf', 'dfds', 'fsdf', 'Female', 18, 'Student', 'fsdfs', 'fdsfsdf', 'fsdf', 'fsdfsd', 'chaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
