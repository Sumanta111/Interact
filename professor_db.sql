-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 04:44 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `professor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `14_saikat`
--

CREATE TABLE `14_saikat` (
  `follower_name` varchar(100) DEFAULT NULL,
  `follower_id` int(20) DEFAULT NULL,
  `seen_unseen` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `18_dipendranath`
--

CREATE TABLE `18_dipendranath` (
  `follower_name` varchar(100) DEFAULT NULL,
  `follower_id` int(20) DEFAULT NULL,
  `seen_unseen` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `19_gsmit`
--

CREATE TABLE `19_gsmit` (
  `follower_name` varchar(100) DEFAULT NULL,
  `follower_id` int(20) DEFAULT NULL,
  `seen_unseen` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `26_sumanta`
--

CREATE TABLE `26_sumanta` (
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
(76, 18, 19, 'hi', 'GSMIT', NULL),
(74, 18, 19, 'hi', 'GSMIT', NULL),
(75, 19, 18, 'hello', 'Dipendranath Ghosh', NULL),
(73, 14, 18, 'Hello.I am Saikat Maity', 'Dipendranath Ghosh', NULL),
(72, 18, 14, 'hi.. I am DNG', 'Saikat Maity', NULL),
(105, 26, 14, 'hello boss.', 'Saikat Maity', 'Sumanta Banerjee'),
(106, 26, 14, 'whats up', 'Saikat Maity', 'Sumanta Banerjee');

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

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msg_id`, `messages`, `from_msg_id`, `from_msg_name`, `seen_unseen`) VALUES
(22, 'Hello..I am HOD.', 14, 'Saikat Maity', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `session` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`session`, `username`, `time`, `id`) VALUES
('4f56fi8bkc3qfdt9k95lu97aq5', 'Saikat Maity', 1500191816, 14),
('bkk15va56vg52skag3dunr8fd4', 'Saikat Maity', 1500202444, 14),
('a2nt7o9r4c4531f8cdqlojm531', 'Saikat Maity', 1500723831, 14),
('k8mol9nn8cvk4tsjus3q8qqhg2', 'Saikat Maity', 1500706779, 14),
('4f56fi8bkc3qfdt9k95lu97aq5', 'Saikat Maity', 1500191816, 14),
('bkk15va56vg52skag3dunr8fd4', 'Saikat Maity', 1500202444, 14),
('a2nt7o9r4c4531f8cdqlojm531', 'Saikat Maity', 1500723831, 14),
('k8mol9nn8cvk4tsjus3q8qqhg2', 'Saikat Maity', 1500706779, 14);

-- --------------------------------------------------------

--
-- Table structure for table `online_prof`
--

CREATE TABLE `online_prof` (
  `prof_id` int(11) NOT NULL,
  `prof_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_prof`
--

INSERT INTO `online_prof` (`prof_id`, `prof_name`) VALUES
(26, 'Sumanta Banerjee'),
(14, 'Saikat Maity'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(14, 'Saikat Maity'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee'),
(26, 'Sumanta Banerjee');

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
(14, 'Saikat Maity', '2017-02-14', 'saikat@gmail.com', 'IT HOD', 'Dr.B.C.Roy Engineering College', 'Information Technology', 'BCREC', '9078654789', '8cb2237d0679ca88db6464eac60da96345513964'),
(18, 'Dipendranath Ghosh', '2014-01-27', 'dng@gmail.com', 'MATH DEPT HOD', 'Dr.B.C.Roy Engineering College', 'Mathematics', 'BCREC', '74848939384', '8cb2237d0679ca88db6464eac60da96345513964'),
(25, 'Bappaditya', '1972-01-01', 'bappa@gmail.com', 'Professor', 'Teaching', 'CSE', 'Dr. B.C.Roy Engineering College,Durgapur', '8934789345', '12345'),
(26, 'Sumanta Banerjee', '2017-07-18', 'sumantabanerjee111@gmail.com', 'STUDENT', 'working', 'cse', 'Mitracompound,Paschim Medinipore', '9434370678', '12345'),
(28, 'vjh', '0000-00-00', 'bvjhbj@hm.com', 'jhv', 'bj', 'jh', 'hgh', '78', 'gh');

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
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `streg`
--
ALTER TABLE `streg`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
