-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Aug 17, 2023 at 03:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `job_id` varchar(30) NOT NULL,
  `s_mail` varchar(30) NOT NULL,
  `c_mail` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`job_id`, `s_mail`, `c_mail`, `status`) VALUES
('undefined', 'undefined', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(8) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` text NOT NULL,
  `ceo` varchar(50) NOT NULL,
  `hr` text NOT NULL,
  `worth` float NOT NULL,
  `founder` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companys`
--

INSERT INTO `companys` (`name`, `email`, `pwd`, `phone`, `location`, `ceo`, `hr`, `worth`, `founder`) VALUES
('Microsoft', 'mehsaniyaafrin@gmail.com', 'afrin', '8238799877', 'Pune', 'Afrin', 'Afrin', 10, 'Afrin'),
('Diksha', 'agile@gmail.com', '123456', '1234567890', 'Pune', 'Afrin', 'Afrin', 2, 'Afrin'),
('agile', 'afrin@gmail.com', '78427842', '0123456789', 'Pune', 'Afrin', 'Afrin', 2, 'Afrin'),
('agile', 'afrin@gmail.com', '1234556', '0123456789', 'Pune', 'Afrin', 'Afrin', 2, 'Afrin'),
('agile', 'afrin@gmail.com', '123456', '0123456789', 'Pune', 'Afrin', 'Afrin', 2, 'Afrin');

-- --------------------------------------------------------

--
-- Table structure for table `project.applications`
--

CREATE TABLE `project.applications` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `degree` text NOT NULL,
  `branch` text NOT NULL,
  `cpi` int(5) NOT NULL,
  `12p` int(5) NOT NULL,
  `10p` int(5) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `job_title` varchar(40) NOT NULL,
  `salary` float NOT NULL,
  `location` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project.students`
--

CREATE TABLE `project.students` (
  `uname` text DEFAULT NULL,
  `pwd` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project.vacancy`
--

CREATE TABLE `project.vacancy` (
  `company_name` int(11) NOT NULL,
  `job_title` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `bomd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project.vacancy`
--

INSERT INTO `project.vacancy` (`company_name`, `job_title`, `salary`, `location`, `bomd`) VALUES
(0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `branch` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `cpi` varchar(5) NOT NULL,
  `twp` varchar(10) NOT NULL,
  `tenp` varchar(10) NOT NULL,
  `pwd` varchar(8) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `degree` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `email`, `dob`, `branch`, `year`, `cpi`, `twp`, `tenp`, `pwd`, `phone`, `degree`) VALUES
('AFRIN', 'mehsaniyaafrin@gmail', '2002-03-25', 'IT', '2023', '9.2', '78', '12345678', '82387998', 'BCA', ' '),
('AFRIN', 'mehsaniyaafrin@gmail', '2002-03-25', 'IT', '2023', '9.2', '78', '12345678', '82387998', 'BCA', ' '),
('AFRIN', 'mehsaniyaafrin@gmail', '2002-03-25', 'IT', '2023', '9.2', '78.2', '78', '12345678', '8238799877', 'BCA'),
('Diksha', 'dmothdiya@gmail.com', '2003-11-16', 'IT', '2022', '9.2', '78.2', '78', 'diksha', '9876543211', 'BCA'),
('Yash Sharma', 'yash@gmail.com', '2002-03-16', 'IT', '2020', '', '78.8', '70.6', 'yash', '9898765432', 'M.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `job_id` varchar(30) NOT NULL,
  `company_name` text NOT NULL,
  `job_title` text NOT NULL,
  `salary` float NOT NULL,
  `location` varchar(55) NOT NULL,
  `deadline` date NOT NULL,
  `bond` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `cgpa` float NOT NULL,
  `twp` float NOT NULL,
  `tenp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`job_id`, `company_name`, `job_title`, `salary`, `location`, `deadline`, `bond`, `age`, `degree`, `cgpa`, `twp`, `tenp`) VALUES
('', 'Microsoft', 'Software developer', 7.9, 'Pune', '2023-08-15', '1', 20, 'BCA', 7, 78.2, 78),
('', 'Microsoft', 'Software developer', 7.9, 'Pune', '2023-08-15', '6', 22, 'BCA', 7, 78.2, 78),
('', 'Microsoft', 'Software developer', 7.9, 'Pune', '2023-08-16', '1', 20, 'B.Tech', 7, 78.2, 78);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
