-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 09:31 PM
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
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `drugid` varchar(10) NOT NULL,
  `drugname` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`drugid`, `drugname`, `description`) VALUES
('AAA', 'Acetaminophen', 'Acetaminophen is used to treat mild to moderate and pain, to treat moderate to severe pain in conjunction with opiates, or to reduce fever. Common conditions that acetaminophen treats include headache, muscle aches, arthritis, backache, toothaches, sore throat, colds, flu, and fevers.'),
('AAB', 'Adderall', 'Adderall contains a combination of amphetamine and dextroamphetamine. Amphetamine and dextroamphetamine are central nervous system stimulants that affect chemicals in the brain and nerves that contribute to hyperactivity and impulse control.'),
('AAC', 'Amitriptyline', 'Amitriptyline is a tricyclic antidepressant with sedative effects. Amitriptyline affects certain chemical messengers (neurotransmitters) that communicate between brain cells and help regulate mood.'),
('AAD', 'Amlodipine', 'Amlodipine is a calcium channel blocker that dilates (widens) blood vessels and improves blood flow.'),
('AAE', 'Amoxicillin', 'Amoxicillin is a penicillin antibiotic that fights bacteria.'),
('AAF', 'Ativan', 'Ativan is a prescription medicine used to treat anxiety disorders.'),
('AAJ', 'Brilinta', 'Brilinta (ticagrelor) prevents platelets in your blood from sticking together to form an unwanted blood clot that could block an artery.'),
('AAW', 'Entyvio', 'Entyvio (vedolizumab) reduces the effects of a substance in the body that can cause inflammation.'),
('AAX', 'Farxiga', 'Farxiga (dapagliflozin) is an oral diabetes medicine that helps control blood sugar levels. Dapagliflozin works by helping the kidneys get rid of glucose from your bloodstream.'),
('ABG', 'Imbruvica', 'Imbruvica (ibrutinib) is a cancer medicine that interferes with the growth and spread of cancer cells in the body.'),
('ABH', 'Invokana', 'Invokana (canagliflozin) is an oral diabetes medicine that helps control blood sugar levels. Canagliflozin works by helping the kidneys get rid of glucose from your bloodstream.'),
('ABJ', 'Jardiance', 'Jardiance (empagliflozin) is an oral diabetes medicine that helps control blood sugar levels. Empagliflozin works by helping the kidneys get rid of glucose from your bloodstream.'),
('ABO', 'Loratadine', 'Loratadine is an antihistamine that reduces the effects of natural chemical histamine in the body. Histamine can produce symptoms of sneezing, itching, watery eyes, and runny nose.'),
('ABR', 'Meloxicam', 'Meloxicam is a nonsteroidal anti-inflammatory drug (NSAID). It works by reducing hormones that cause inflammation and pain in the body.'),
('ACA', 'Onpattro', 'Onpattro (patisiran) a double-stranded small interfering ribonucleic acid (siRNA), formulated as a lipid complex injection.'),
('ACB', 'Otezla', 'Otezla (apremilast) inhibits an enzyme within your immune system that can affect certain cells and contribute to inflammation in the body.'),
('ACC', 'Ozempic', 'Ozempic (semaglutide) is similar to a hormone that occurs naturally in the body and helps control blood sugar, insulin levels, and digestion.'),
('ACF', 'Probuphine', 'Probuphine (buprenorphine) is an opioid medication. An opioid is sometimes called a narcotic.'),
('ACK', 'Viagra', 'Viagra (sildenafil) relaxes muscles found in the walls of blood vessels and increases blood flow to particular areas of the body.'),
('ACM', 'Xanax', 'Xanax (alprazolam) is a benzodiazepine. It is thought that alprazolam works by enhancing the activity of certain neurotransmitters in the brain.'),
('ACO', 'Drug 1', 'Drug 1 does Drug 1 stuff.'),
('ACP', 'Drug 2', 'Drug 2 does Drug 2 stuff.'),
('ACQ', 'Drug 3', 'Drug 3 does Drug 3 stuff.'),
('ACR', 'Drug 4', 'Drug 4 does Drug 4 stuff.'),
('ACS', 'Drug 5', 'Drug 5 does Drug 5 stuff.'),
('ACT', 'Drug 6', 'Drug 6 does Drug 6 stuff.'),
('ACU', 'Drug 7', 'Drug 7 does Drug 7 stuff.'),
('ACV', 'Drug 8', 'Drug 8 does Drug 8 stuff.'),
('ACW', 'Drug 9', 'Drug 9 does Drug 9 stuff.'),
('ACX', 'Drug 10', 'Drug 10 does Drug 10 stuff.'),
('ACY', 'Drug 11', 'Drug 11 does Drug 11 stuff.'),
('ACZ', 'Drug 12', 'Drug 12 does Drug 12 stuff.'),
('ADA', 'Drug 13', 'Drug 13 does Drug 13 stuff.'),
('ADB', 'Drug 14', 'Drug 14 does Drug 14 stuff.'),
('ADC', 'Drug 15', 'Drug 15 does Drug 15 stuff.'),
('ADD', 'Drug 16', 'Drug 16 does Drug 16 stuff.'),
('ADE', 'Drug 17', 'Drug 17 does Drug 17 stuff.'),
('ADF', 'Drug 18', 'Drug 18 does Drug 18 stuff.'),
('ADG', 'Drug 19', 'Drug 19 does Drug 19 stuff.'),
('ADH', 'Drug 20', 'Drug 20 does Drug 20 stuff.'),
('ADI', 'Drug 21', 'Drug 21 does Drug 21 stuff.'),
('ADJ', 'Drug 22', 'Drug 22 does Drug 22 stuff.'),
('ADK', 'Drug 23', 'Drug 23 does Drug 23 stuff.'),
('ADL', 'Drug 24', 'Drug 24 does Drug 24 stuff.'),
('ADM', 'Drug 25', 'Drug 25 does Drug 25 stuff.'),
('ADN', 'Drug 26', 'Drug 26 does Drug 26 stuff.'),
('ADO', 'Drug 27', 'Drug 27 does Drug 27 stuff.'),
('ADP', 'Drug 28', 'Drug 28 does Drug 28 stuff.'),
('ADQ', 'Drug 29', 'Drug 29 does Drug 29 stuff.'),
('ADR', 'Drug 30', 'Drug 30 does Drug 30 stuff.'),
('ADS', 'Drug 31', 'Drug 31 does Drug 31 stuff.'),
('ADT', 'Drug 32', 'Drug 32 does Drug 32 stuff.'),
('ADU', 'Drug 33', 'Drug 33 does Drug 33 stuff.'),
('ADV', 'Drug 34', 'Drug 34 does Drug 34 stuff.');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescriptionid` int(10) DEFAULT NULL,
  `doctorid` int(10) DEFAULT NULL,
  `patientid` int(10) DEFAULT NULL,
  `tokenid` varchar(100) DEFAULT NULL,
  `drugid` varchar(100) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `prescriptiondate` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescriptionid`, `doctorid`, `patientid`, `tokenid`, `drugid`, `qty`, `prescriptiondate`, `status`) VALUES
(8001, 4001, 2001, '8001-4001-2001', 'AAA', 3, '2020-12-20', 'Collected'),
(8090, 4001, 2001, '8090-4001-2001', 'AAA', 1, '2021-10-28', 'Uncollected');

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
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `tokenid` varchar(35) NOT NULL,
  `qr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`tokenid`, `qr`) VALUES
('8001-4001-2001', 'img/8001-4001-2001.png'),
('8090-4001-2001', 'img/8090-4001-2001.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
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
(1001, 'ADM A', 'adma@gmail.com', '1001', 'Female', '83755274', 'Admin'),
(1002, 'ADM B', 'admb@gmail.com', 'admb', 'Male', '98301733', 'Admin'),
(1003, 'ADM C', 'admc@gmail.com', 'admc', 'Female', '85301987', 'Admin'),
(1004, 'ADM D', 'admd@gmail.com', 'admd', 'Male', '81351089', 'Admin'),
(1009, 'test', 'test@Gmail.com', '123', 'Female', '902891829', 'Admin'),
(2001, 'XY', 'xingyi.14@gmail.com', '2001', 'Female', '98765432', 'Patient'),
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
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`drugid`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD KEY `FKEY2` (`patientid`),
  ADD KEY `FKEY1` (`doctorid`),
  ADD KEY `fkey3` (`tokenid`),
  ADD KEY `fkey4` (`drugid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rolename`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`tokenid`);

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
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `FKEY1` FOREIGN KEY (`doctorid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FKEY2` FOREIGN KEY (`patientid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fkey3` FOREIGN KEY (`tokenid`) REFERENCES `token` (`tokenid`),
  ADD CONSTRAINT `fkey4` FOREIGN KEY (`drugid`) REFERENCES `drug` (`drugid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `USER_FKEY` FOREIGN KEY (`role`) REFERENCES `role` (`rolename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
