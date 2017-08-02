-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 04:49 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `1_saikat`
--

CREATE TABLE `1_saikat` (
  `follower_name` varchar(100) NOT NULL,
  `follower_id` int(20) NOT NULL,
  `seen_unseen` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `2_dipendranath`
--

CREATE TABLE `2_dipendranath` (
  `follower_name` varchar(100) NOT NULL,
  `follower_id` int(20) NOT NULL,
  `seen_unseen` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cmnts` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`cid`, `name`, `email`, `cmnts`) VALUES
(1, 'sulaagna', 'abc@gmail.com', 'this is a nice website.'),
(2, 'sumanta', 'xyz@gmail.com', 'i am a developer.');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `message_id` int(11) NOT NULL,
  `send_from_id` int(11) NOT NULL,
  `send_to_id` int(11) NOT NULL,
  `messages` text NOT NULL,
  `send_to_name` varchar(100) NOT NULL,
  `send_from_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `send_from_id`, `send_to_id`, `messages`, `send_to_name`, `send_from_name`) VALUES
(1, 2, 1, 'hello...', 'Saikat Maity', 'Dipendranath Ghosh'),
(2, 1, 2, 'hi  !!!!', 'Dipendranath Ghosh', 'Saikat Maity'),
(3, 2, 1, 'Saikat Sir,What\'s up? ', 'Saikat Maity', 'Dipendranath Ghosh'),
(4, 1, 2, 'Everything fine Dng Sir.', 'Dipendranath Ghosh', 'Saikat Maity'),
(5, 1, 2, 'Tomorrow There is an urgent meeting.', 'Dipendranath Ghosh', 'Saikat Maity'),
(6, 2, 1, 'Yah..I heard about the meeting.', 'Saikat Maity', 'Dipendranath Ghosh'),
(7, 2, 1, 'ok.I will be there.', 'Saikat Maity', 'Dipendranath Ghosh');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msg_id` int(11) NOT NULL,
  `messages` text NOT NULL,
  `from_msg_id` int(11) NOT NULL,
  `from_msg_name` varchar(50) NOT NULL,
  `seen_unseen` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online_prof`
--

CREATE TABLE `online_prof` (
  `online_id` int(11) NOT NULL,
  `prof_id` int(11) NOT NULL,
  `prof_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_prof`
--

INSERT INTO `online_prof` (`online_id`, `prof_id`, `prof_name`) VALUES
(3, 1, 'Saikat Maity');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `u_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `phno` text NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`u_id`, `name`, `dob`, `email`, `desg`, `work`, `dept`, `address`, `phno`, `password`) VALUES
(1, 'Saikat Maity', '1967-01-01', 'saikat@gmail.com', 'Head Of the Dept(IT)', 'Dr.B.C.Roy Engineering College,Durgapur', 'IT,CSE', 'Dr.B.C.Roy Engineering College (Professor\'s Hostel),Durgapur.', '9067864578', '12345'),
(2, 'Dipendranath Ghosh', '1970-01-01', 'dng@gmail.com', 'Head Of the Dept(Math)', 'Dr.B.C.Roy Engineering College,Durgapur', 'CSE,IT', 'Fuljhore More,Durgapur', '9945678923', '67890');

-- --------------------------------------------------------

--
-- Table structure for table `streg`
--

CREATE TABLE `streg` (
  `st_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `unirollno` int(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streg`
--

INSERT INTO `streg` (`st_id`, `name`, `dob`, `email`, `branch`, `year`, `dept`, `unirollno`, `address`, `phno`, `password`) VALUES
(5, 'Sumanta Banerjee', '1995-10-13', 'sumantak14@gmail.com', 'CSE', 'on', 'Cse', 2147483647, 'BCREC BOYS HOSTEL', '9434370678', 'sumantak14'),
(6, 'Sulagna Sengupta', '2017-02-14', 'sulagna@gmail.com', 'cse', 'on', 'CSE', 2147483647, 'BCREC GIRLS HOSTEL', '9876543246', 'sulagna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `online_prof`
--
ALTER TABLE `online_prof`
  ADD PRIMARY KEY (`online_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `streg`
--
ALTER TABLE `streg`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `online_prof`
--
ALTER TABLE `online_prof`
  MODIFY `online_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `streg`
--
ALTER TABLE `streg`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
