-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2021 at 08:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csit314`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rolename` varchar(100) NOT NULL,
  `des` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rolename`, `des`) VALUES
('Admin', 'Manage new and existing user'),
('Doctor', 'Manege patient and prescription'),
('Patient', 'View new and past prescription'),
('Pharmacist', 'Manage and dispense drugs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `role`) VALUES
(1001, 'AdminTest123', 'adma@gmail.com', '1001', 'Female', '83755274', 'Admin'),
(1002, 'ADM B', 'admb@gmail.com', 'admb', 'Male', '98301733', 'Admin'),
(1003, 'ADM C', 'admc@gmail.com', 'admc', 'Female', '85301987', 'Admin'),
(1004, 'ADM D', 'admd@gmail.com', 'admd', 'Male', '81351089', 'Admin'),
(2001, 'PatientTestqwqwq', 'alex@gmail.com', '2001', 'Male', '98765432', 'Patient'),
(2002, 'Ben', 'ben@gmail.com', 'benpw', 'Male', '92345678', 'Patient'),
(2003, 'Charlie', 'charlie@gmail.com', 'charliepw', 'Female', '94564567', 'Patient'),
(2004, 'Danielle', 'danielle@gmail.com', 'daniellepw', 'Female', '85467945', 'Patient'),
(3001, 'PharmaTest', 'phra@gmail.com', '3001', 'Female', '86319475', 'Pharmacist'),
(3002, 'PHR B', 'phrb@gmail.com', 'phrb', 'Male', '90861345', 'Pharmacist'),
(3003, 'PHR C', 'phrc@gmail.com', 'phrc', 'Male', '81638543', 'Pharmacist'),
(3004, 'PHR D', 'phrd@gmail.com', 'phrd', 'Female', '97158904', 'Pharmacist'),
(4001, 'DoctorTest', 'dra@gmail.com', '4001', 'Male', '81275643', 'Doctor'),
(4002, 'DR B', 'drb@gmail.com', 'bpw', 'Female', '98086543', 'Doctor'),
(4003, 'DR C', 'drc@gmail.com', 'cpw', 'Female', '98127409', 'Doctor'),
(4004, 'DR D', 'drd@gmail.com', 'dpw', 'Male', '81849878', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rolename`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USER_FKEY` (`role`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `USER_FKEY` FOREIGN KEY (`role`) REFERENCES `role` (`rolename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
