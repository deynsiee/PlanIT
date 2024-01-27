-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `fitness_form`
--

CREATE TABLE `fitness_form` (
  `fitnessID` int(3) NOT NULL,
  `uname` varchar(1) NOT NULL,
  `p_date` date NOT NULL,
  `p_time` time NOT NULL,
  `activity_rate` varchar(50) NOT NULL,
  `target_goal` varchar(20) NOT NULL,
  `t_task` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list_form`
--

CREATE TABLE `list_form` (
  `listID` int(3) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `m_list` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `loginID` int(3) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plan_form`
--

CREATE TABLE `plan_form` (
  `planID` int(3) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `d_date` date NOT NULL,
  `d_time` time NOT NULL,
  `note` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `userID` int(3) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `useradr` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(15) NOT NULL,
  `civil_stat` text NOT NULL,
  `age` int(3) NOT NULL,
  `regdate` date NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `todo_form`
--

CREATE TABLE `todo_form` (
  `taskID` int(3) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `t_task` varchar(50) NOT NULL,
  `t_time` time NOT NULL,
  `t_date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wh_form`
--

CREATE TABLE `wh_form` (
  `uname` varchar(30) NOT NULL,
  `weight` decimal(4,2) NOT NULL,
  `height` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fitness_form`
--
ALTER TABLE `fitness_form`
  ADD PRIMARY KEY (`fitnessID`);

--
-- Indexes for table `list_form`
--
ALTER TABLE `list_form`
  ADD PRIMARY KEY (`listID`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `plan_form`
--
ALTER TABLE `plan_form`
  ADD PRIMARY KEY (`planID`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `todo_form`
--
ALTER TABLE `todo_form`
  ADD PRIMARY KEY (`taskID`);

--
-- Indexes for table `wh_form`
--
ALTER TABLE `wh_form`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
