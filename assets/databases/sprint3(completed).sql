-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2021 at 10:57 PM
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
('ACOQ', 'Drug 35', 'Drug 35 does Drug 35 stuff.'),
('ACOQQ', 'Drug 352', 'Drug 352 does Drug 352 stuff.'),
('ACP', 'Drug 2', 'Drug 2 does Drug 2 stuff.'),
('ACPW', 'Drug 36', 'Drug 36 does Drug 36 stuff.'),
('ACPWQ', 'Drug 362', 'Drug 362 does Drug 362 stuff.'),
('ACQ', 'Drug 3', 'Drug 3 does Drug 3 stuff.'),
('ACQE', 'Drug 37', 'Drug 37 does Drug 37 stuff.'),
('ACQEQ', 'Drug 372', 'Drug 372 does Drug 372 stuff.'),
('ACR', 'Drug 4', 'Drug 4 does Drug 4 stuff.'),
('ACRR', 'Drug 41', 'Drug 41 does Drug 41 stuff.'),
('ACRRQ', 'Drug 412', 'Drug 412 does Drug 412 stuff.'),
('ACS', 'Drug 5', 'Drug 5 does Drug 5 stuff.'),
('ACST', 'Drug 51', 'Drug 51 does Drug 51 stuff.'),
('ACSTQ', 'Drug 512', 'Drug 512 does Drug 512 stuff.'),
('ACT', 'Drug 6', 'Drug 6 does Drug 6 stuff.'),
('ACTY', 'Drug 61', 'Drug 61 does Drug 61 stuff.'),
('ACTYQ', 'Drug 612', 'Drug 612 does Drug 612 stuff.'),
('ACU', 'Drug 7', 'Drug 7 does Drug 7 stuff.'),
('ACUU', 'Drug 71', 'Drug 71 does Drug 71 stuff.'),
('ACUUQ', 'Drug 712', 'Drug 712 does Drug 712 stuff.'),
('ACV', 'Drug 8', 'Drug 8 does Drug 8 stuff.'),
('ACVI', 'Drug 81', 'Drug 81 does Drug 81 stuff.'),
('ACVIQ', 'Drug 812', 'Drug 812 does Drug 812 stuff.'),
('ACW', 'Drug 9', 'Drug 9 does Drug 9 stuff.'),
('ACWO', 'Drug 91', 'Drug 91 does Drug 91 stuff.'),
('ACWOQ', 'Drug 912', 'Drug 912 does Drug 912 stuff.'),
('ACX', 'Drug 10', 'Drug 10 does Drug 10 stuff.'),
('ACXS', 'Drug 101', 'Drug 101 does Drug 101 stuff.'),
('ACXSQ', 'Drug 1012', 'Drug 1012 does Drug 1012 stuff.'),
('ACY', 'Drug 11', 'Drug 11 does Drug 11 stuff.'),
('ACYZ', 'Drug 111', 'Drug 111 does Drug 111 stuff.'),
('ACYZQ', 'Drug 1112', 'Drug 1112 does Drug 1112 stuff.'),
('ACZ', 'Drug 12', 'Drug 12 does Drug 12 stuff.'),
('ACZX', 'Drug 121', 'Drug 121 does Drug 121 stuff.'),
('ADA', 'Drug 13', 'Drug 13 does Drug 13 stuff.'),
('ADAD', 'Drug 131', 'Drug 131 does Drug 131 stuff.'),
('ADB', 'Drug 14', 'Drug 14 does Drug 14 stuff.'),
('ADBF', 'Drug 141', 'Drug 141 does Drug 141 stuff.'),
('ADC', 'Drug 15', 'Drug 15 does Drug 15 stuff.'),
('ADCG', 'Drug 151', 'Drug 151 does Drug 151 stuff.'),
('ADD', 'Drug 16', 'Drug 16 does Drug 16 stuff.'),
('ADDH', 'Drug 161', 'Drug 161 does Drug 161 stuff.'),
('ADE', 'Drug 17', 'Drug 17 does Drug 17 stuff.'),
('ADEJ', 'Drug 171', 'Drug 171 does Drug 171 stuff.'),
('ADF', 'Drug 18', 'Drug 18 does Drug 18 stuff.'),
('ADFK', 'Drug 181', 'Drug 181 does Drug 181 stuff.'),
('ADG', 'Drug 19', 'Drug 19 does Drug 19 stuff.'),
('ADGL', 'Drug 191', 'Drug 191 does Drug 191 stuff.'),
('ADH', 'Drug 20', 'Drug 20 does Drug 20 stuff.'),
('ADHZ', 'Drug 201', 'Drug 201 does Drug 201 stuff.'),
('ADI', 'Drug 21', 'Drug 21 does Drug 21 stuff.'),
('ADIX', 'Drug 211', 'Drug 211 does Drug 211 stuff.'),
('ADJ', 'Drug 22', 'Drug 22 does Drug 22 stuff.'),
('ADJC', 'Drug 221', 'Drug 221 does Drug 221 stuff.'),
('ADK', 'Drug 23', 'Drug 23 does Drug 23 stuff.'),
('ADKV', 'Drug 231', 'Drug 231 does Drug 231 stuff.'),
('ADL', 'Drug 24', 'Drug 24 does Drug 24 stuff.'),
('ADLB', 'Drug 241', 'Drug 241 does Drug 241 stuff.'),
('ADM', 'Drug 25', 'Drug 25 does Drug 25 stuff.'),
('ADMN', 'Drug 251', 'Drug 251 does Drug 251 stuff.'),
('ADN', 'Drug 26', 'Drug 26 does Drug 26 stuff.'),
('ADNM', 'Drug 261', 'Drug 261 does Drug 261 stuff.'),
('ADO', 'Drug 27', 'Drug 27 does Drug 27 stuff.'),
('ADOQ', 'Drug 271', 'Drug 271 does Drug 271 stuff.'),
('ADP', 'Drug 28', 'Drug 28 does Drug 28 stuff.'),
('ADPW', 'Drug 281', 'Drug 281 does Drug 281 stuff.'),
('ADQ', 'Drug 29', 'Drug 29 does Drug 29 stuff.'),
('ADQE', 'Drug 291', 'Drug 291 does Drug 291 stuff.'),
('ADR', 'Drug 30', 'Drug 30 does Drug 30 stuff.'),
('ADRR', 'Drug 301', 'Drug 301 does Drug 301 stuff.'),
('ADS', 'Drug 31', 'Drug 31 does Drug 31 stuff.'),
('ADST', 'Drug 311', 'Drug 311 does Drug 311 stuff.'),
('ADT', 'Drug 32', 'Drug 32 does Drug 32 stuff.'),
('ADTY', 'Drug 321', 'Drug 321 does Drug 321 stuff.'),
('ADU', 'Drug 33', 'Drug 33 does Drug 33 stuff.'),
('ADUU', 'Drug 331', 'Drug 331 does Drug 331 stuff.'),
('ADV', 'Drug 34', 'Drug 34 does Drug 34 stuff.'),
('ADVI', 'Drug 341', 'Drug 341 does Drug 341 stuff.'),
('ADVIQ', 'Drug 3412', 'Drug 3412 does Drug 3412 stuff.');

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
(900, 4001, 2001, '900-4001-2001', 'ADP', 1, '2021-10-29', 'Collected'),
(8001, 4001, 2018, '8001-4001-2018', 'AAB', 1, '2021-10-30', 'Uncollected'),
(8001, 4001, 2018, '8001-4001-2018', 'ACA', 1, '2021-10-30', 'Uncollected'),
(8090, 4001, 2002, '8090-4001-2002', 'AAA', 1, '2021-10-30', 'Uncollected'),
(8090, 4001, 2002, '8090-4001-2002', 'ACA', 2, '2021-10-30', 'Uncollected');

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
('8001-3086-2035', 'img/8001-3086-2035.png'),
('8001-4001-2018', '8001-4001-2018.png'),
('8002-3049-2073', 'img/8002-3049-2073.png'),
('8003-3050-2078', 'img/8003-3050-2078.png'),
('8004-3093-2009', 'img/8004-3093-2009.png'),
('8005-3047-2068', 'img/8005-3047-2068.png'),
('8006-3044-2050', 'img/8006-3044-2050.png'),
('8007-3035-2054', 'img/8007-3035-2054.png'),
('8008-3084-2049', 'img/8008-3084-2049.png'),
('8009-3004-2051', 'img/8009-3004-2051.png'),
('8010-3072-2079', 'img/8010-3072-2079.png'),
('8011-3017-2070', 'img/8011-3017-2070.png'),
('8012-3074-2083', 'img/8012-3074-2083.png'),
('8013-3007-2018', 'img/8013-3007-2018.png'),
('8014-3042-2098', 'img/8014-3042-2098.png'),
('8015-3056-2002', 'img/8015-3056-2002.png'),
('8016-3033-2049', 'img/8016-3033-2049.png'),
('8017-3087-2090', 'img/8017-3087-2090.png'),
('8018-3028-2052', 'img/8018-3028-2052.png'),
('8019-3032-2073', 'img/8019-3032-2073.png'),
('8020-3091-2079', 'img/8020-3091-2079.png'),
('8021-3055-2064', 'img/8021-3055-2064.png'),
('8022-3001-2055', 'img/8022-3001-2055.png'),
('8023-3053-2079', 'img/8023-3053-2079.png'),
('8024-3096-2059', 'img/8024-3096-2059.png'),
('8025-3061-2037', 'img/8025-3061-2037.png'),
('8026-3054-2068', 'img/8026-3054-2068.png'),
('8027-3081-2069', 'img/8027-3081-2069.png'),
('8028-3050-2024', 'img/8028-3050-2024.png'),
('8029-3086-2089', 'img/8029-3086-2089.png'),
('8030-3065-2053', 'img/8030-3065-2053.png'),
('8031-3098-2066', 'img/8031-3098-2066.png'),
('8032-3014-2067', 'img/8032-3014-2067.png'),
('8033-3006-2049', 'img/8033-3006-2049.png'),
('8034-3054-2063', 'img/8034-3054-2063.png'),
('8035-3065-2072', 'img/8035-3065-2072.png'),
('8036-3035-2016', 'img/8036-3035-2016.png'),
('8037-3031-2062', 'img/8037-3031-2062.png'),
('8038-3046-2046', 'img/8038-3046-2046.png'),
('8039-3017-2003', 'img/8039-3017-2003.png'),
('8040-3060-2018', 'img/8040-3060-2018.png'),
('8041-3022-2077', 'img/8041-3022-2077.png'),
('8042-3063-2026', 'img/8042-3063-2026.png'),
('8043-3055-2037', 'img/8043-3055-2037.png'),
('8044-3071-2049', 'img/8044-3071-2049.png'),
('8045-3094-2035', 'img/8045-3094-2035.png'),
('8046-3073-2089', 'img/8046-3073-2089.png'),
('8047-3074-2027', 'img/8047-3074-2027.png'),
('8048-3072-2089', 'img/8048-3072-2089.png'),
('8049-3069-2097', 'img/8049-3069-2097.png'),
('8050-3024-2064', 'img/8050-3024-2064.png'),
('8051-3008-2079', 'img/8051-3008-2079.png'),
('8052-3061-2058', 'img/8052-3061-2058.png'),
('8053-3055-2091', 'img/8053-3055-2091.png'),
('8054-3043-2100', 'img/8054-3043-2100.png'),
('8055-3013-2028', 'img/8055-3013-2028.png'),
('8056-3090-2086', 'img/8056-3090-2086.png'),
('8057-3062-2082', 'img/8057-3062-2082.png'),
('8058-3081-2093', 'img/8058-3081-2093.png'),
('8059-3052-2030', 'img/8059-3052-2030.png'),
('8060-3001-2035', 'img/8060-3001-2035.png'),
('8061-3021-2052', 'img/8061-3021-2052.png'),
('8062-3024-2020', 'img/8062-3024-2020.png'),
('8063-3035-2050', 'img/8063-3035-2050.png'),
('8064-3083-2076', 'img/8064-3083-2076.png'),
('8065-3074-2029', 'img/8065-3074-2029.png'),
('8066-3042-2036', 'img/8066-3042-2036.png'),
('8067-3026-2085', 'img/8067-3026-2085.png'),
('8068-3037-2014', 'img/8068-3037-2014.png'),
('8069-3003-2020', 'img/8069-3003-2020.png'),
('8070-3093-2016', 'img/8070-3093-2016.png'),
('8071-3019-2035', 'img/8071-3019-2035.png'),
('8072-3018-2075', 'img/8072-3018-2075.png'),
('8073-3078-2048', 'img/8073-3078-2048.png'),
('8074-3100-2088', 'img/8074-3100-2088.png'),
('8075-3051-2039', 'img/8075-3051-2039.png'),
('8076-3093-2062', 'img/8076-3093-2062.png'),
('8077-3028-2037', 'img/8077-3028-2037.png'),
('8078-3028-2039', 'img/8078-3028-2039.png'),
('8079-3085-2052', 'img/8079-3085-2052.png'),
('8080-3062-2071', 'img/8080-3062-2071.png'),
('8081-3035-2012', 'img/8081-3035-2012.png'),
('8082-3063-2067', 'img/8082-3063-2067.png'),
('8083-3012-2067', 'img/8083-3012-2067.png'),
('8084-3034-2058', 'img/8084-3034-2058.png'),
('8085-3007-2090', 'img/8085-3007-2090.png'),
('8086-3024-2062', 'img/8086-3024-2062.png'),
('8087-3063-2070', 'img/8087-3063-2070.png'),
('8088-3027-2053', 'img/8088-3027-2053.png'),
('8089-3064-2066', 'img/8089-3064-2066.png'),
('8090-3076-2025', 'img/8090-3076-2025.png'),
('8090-4001-2002', '8090-4001-2002.png'),
('8091-3055-2041', 'img/8091-3055-2041.png'),
('8092-3079-2065', 'img/8092-3079-2065.png'),
('8093-3053-2035', 'img/8093-3053-2035.png'),
('8094-3087-2088', 'img/8094-3087-2088.png'),
('8095-3037-2033', 'img/8095-3037-2033.png'),
('8096-3045-2030', 'img/8096-3045-2030.png'),
('8097-3034-2098', 'img/8097-3034-2098.png'),
('8098-3083-2043', 'img/8098-3083-2043.png'),
('8099-3021-2073', 'img/8099-3021-2073.png'),
('8100-3046-2015', 'img/8100-3046-2015.png'),
('900-4001-2001', 'img/900-4001-2001.png');

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
(2001, 'Terrence', 'tchew@uow.edu.au', '2001', 'Male', '98765432', 'Patient'),
(2002, 'XY', 'xingyi.14@gmail.com', 'benpw', 'Female', '92345678', 'Patient'),
(2003, 'Eric', 'Weyip001@gmail.com', 'charliepw', 'Male', '94564567', 'Patient'),
(2004, 'Danielle', 'danielle@gmail.com', 'daniellepw', 'Female', '85467945', 'Patient'),
(2005, 'Patient5', 'patient5@gmail.com', 'patient2707', 'Female', '94239213', 'Patient'),
(2006, 'Patient6', 'patient6@gmail.com', 'patient3006', 'Male', '96920227', 'Patient'),
(2007, 'Patient7', 'patient7@gmail.com', 'patient2908', 'Male', '93338126', 'Patient'),
(2008, 'Patient8', 'patient8@gmail.com', 'patient1511', 'Male', '98790797', 'Patient'),
(2009, 'Patient9', 'patient9@gmail.com', 'patient0908', 'Male', '97831103', 'Patient'),
(2010, 'Patient10', 'patient10@gmail.com', 'patient2410', 'Male', '91227523', 'Patient'),
(2011, 'Patient11', 'patient11@gmail.com', 'patient0412', 'Male', '91958080', 'Patient'),
(2012, 'Patient12', 'patient12@gmail.com', 'patient1804', 'Male', '98566022', 'Patient'),
(2013, 'Patient13', 'patient13@gmail.com', 'patient1105', 'Female', '97479217', 'Patient'),
(2014, 'Patient14', 'patient14@gmail.com', 'patient1202', 'Female', '93805084', 'Patient'),
(2015, 'Patient15', 'patient15@gmail.com', 'patient1808', 'Female', '94097388', 'Patient'),
(2016, 'Patient16', 'patient16@gmail.com', 'patient0105', 'Male', '96189875', 'Patient'),
(2017, 'Patient17', 'patient17@gmail.com', 'patient1712', 'Female', '91804581', 'Patient'),
(2018, 'Patient18', 'patient18@gmail.com', 'patient1312', 'Female', '93562055', 'Patient'),
(2019, 'Patient19', 'patient19@gmail.com', 'patient0110', 'Male', '94136935', 'Patient'),
(2020, 'Patient20', 'patient20@gmail.com', 'patient0701', 'Male', '94370477', 'Patient'),
(2021, 'Patient21', 'patient21@gmail.com', 'patient1506', 'Male', '91464261', 'Patient'),
(2022, 'Patient22', 'patient22@gmail.com', 'patient2111', 'Female', '95667319', 'Patient'),
(2023, 'Patient23', 'patient23@gmail.com', 'patient2612', 'Male', '94575099', 'Patient'),
(2024, 'Patient24', 'patient24@gmail.com', 'patient0507', 'Female', '90907468', 'Patient'),
(2025, 'Patient25', 'patient25@gmail.com', 'patient2402', 'Female', '96766798', 'Patient'),
(2026, 'Patient26', 'patient26@gmail.com', 'patient0405', 'Female', '96431610', 'Patient'),
(2027, 'Patient27', 'patient27@gmail.com', 'patient0903', 'Male', '92137887', 'Patient'),
(2028, 'Patient28', 'patient28@gmail.com', 'patient0701', 'Male', '97283369', 'Patient'),
(2029, 'Patient29', 'patient29@gmail.com', 'patient2001', 'Male', '94853334', 'Patient'),
(2030, 'Patient30', 'patient30@gmail.com', 'patient1801', 'Male', '96137902', 'Patient'),
(2031, 'Patient31', 'patient31@gmail.com', 'patient0410', 'Female', '94067048', 'Patient'),
(2032, 'Patient32', 'patient32@gmail.com', 'patient2104', 'Male', '92745861', 'Patient'),
(2033, 'Patient33', 'patient33@gmail.com', 'patient1305', 'Male', '96448181', 'Patient'),
(2034, 'Patient34', 'patient34@gmail.com', 'patient2506', 'Male', '98377785', 'Patient'),
(2035, 'Patient35', 'patient35@gmail.com', 'patient0408', 'Male', '90084572', 'Patient'),
(2036, 'Patient36', 'patient36@gmail.com', 'patient3003', 'Male', '90736991', 'Patient'),
(2037, 'Patient37', 'patient37@gmail.com', 'patient2604', 'Female', '97247404', 'Patient'),
(2038, 'Patient38', 'patient38@gmail.com', 'patient0110', 'Male', '92888271', 'Patient'),
(2039, 'Patient39', 'patient39@gmail.com', 'patient2104', 'Male', '97243054', 'Patient'),
(2040, 'Patient40', 'patient40@gmail.com', 'patient2209', 'Female', '95296079', 'Patient'),
(2041, 'Patient41', 'patient41@gmail.com', 'patient0308', 'Male', '93259966', 'Patient'),
(2042, 'Patient42', 'patient42@gmail.com', 'patient1505', 'Male', '93020710', 'Patient'),
(2043, 'Patient43', 'patient43@gmail.com', 'patient0407', 'Male', '92403830', 'Patient'),
(2044, 'Patient44', 'patient44@gmail.com', 'patient3003', 'Male', '94733847', 'Patient'),
(2045, 'Patient45', 'patient45@gmail.com', 'patient0611', 'Male', '93573617', 'Patient'),
(2046, 'Patient46', 'patient46@gmail.com', 'patient2310', 'Female', '90675917', 'Patient'),
(2047, 'Patient47', 'patient47@gmail.com', 'patient0105', 'Female', '94045114', 'Patient'),
(2048, 'Patient48', 'patient48@gmail.com', 'patient1305', 'Male', '93602554', 'Patient'),
(2049, 'Patient49', 'patient49@gmail.com', 'patient2407', 'Female', '94902630', 'Patient'),
(2050, 'Patient50', 'patient50@gmail.com', 'patient2311', 'Female', '96406678', 'Patient'),
(2051, 'Patient51', 'patient51@gmail.com', 'patient1301', 'Female', '97501341', 'Patient'),
(2052, 'Patient52', 'patient52@gmail.com', 'patient1912', 'Female', '94370302', 'Patient'),
(2053, 'Patient53', 'patient53@gmail.com', 'patient1902', 'Female', '98034267', 'Patient'),
(2054, 'Patient54', 'patient54@gmail.com', 'patient2806', 'Female', '95185751', 'Patient'),
(2055, 'Patient55', 'patient55@gmail.com', 'patient0509', 'Female', '94060577', 'Patient'),
(2056, 'Patient56', 'patient56@gmail.com', 'patient2301', 'Female', '91399610', 'Patient'),
(2057, 'Patient57', 'patient57@gmail.com', 'patient2302', 'Female', '92408566', 'Patient'),
(2058, 'Patient58', 'patient58@gmail.com', 'patient2107', 'Female', '96087029', 'Patient'),
(2059, 'Patient59', 'patient59@gmail.com', 'patient2411', 'Male', '97589437', 'Patient'),
(2060, 'Patient60', 'patient60@gmail.com', 'patient1511', 'Male', '94071104', 'Patient'),
(2061, 'Patient61', 'patient61@gmail.com', 'patient2912', 'Male', '94223402', 'Patient'),
(2062, 'Patient62', 'patient62@gmail.com', 'patient0909', 'Male', '95418462', 'Patient'),
(2063, 'Patient63', 'patient63@gmail.com', 'patient3011', 'Female', '96663977', 'Patient'),
(2064, 'Patient64', 'patient64@gmail.com', 'patient1709', 'Female', '90760922', 'Patient'),
(2065, 'Patient65', 'patient65@gmail.com', 'patient1010', 'Female', '92894045', 'Patient'),
(2066, 'Patient66', 'patient66@gmail.com', 'patient1402', 'Male', '90315845', 'Patient'),
(2067, 'Patient67', 'patient67@gmail.com', 'patient3010', 'Female', '97681009', 'Patient'),
(2068, 'Patient68', 'patient68@gmail.com', 'patient2909', 'Male', '92427769', 'Patient'),
(2069, 'Patient69', 'patient69@gmail.com', 'patient2408', 'Male', '91979329', 'Patient'),
(2070, 'Patient70', 'patient70@gmail.com', 'patient2203', 'Female', '97397092', 'Patient'),
(2071, 'Patient71', 'patient71@gmail.com', 'patient2311', 'Male', '95042846', 'Patient'),
(2072, 'Patient72', 'patient72@gmail.com', 'patient0504', 'Male', '98650459', 'Patient'),
(2073, 'Patient73', 'patient73@gmail.com', 'patient2701', 'Female', '94635674', 'Patient'),
(2074, 'Patient74', 'patient74@gmail.com', 'patient2012', 'Female', '95189856', 'Patient'),
(2075, 'Patient75', 'patient75@gmail.com', 'patient0204', 'Male', '95195077', 'Patient'),
(2076, 'Patient76', 'patient76@gmail.com', 'patient1406', 'Male', '91738390', 'Patient'),
(2077, 'Patient77', 'patient77@gmail.com', 'patient2801', 'Male', '93878085', 'Patient'),
(2078, 'Patient78', 'patient78@gmail.com', 'patient1304', 'Female', '97241221', 'Patient'),
(2079, 'Patient79', 'patient79@gmail.com', 'patient1009', 'Male', '94411073', 'Patient'),
(2080, 'Patient80', 'patient80@gmail.com', 'patient0102', 'Male', '91351241', 'Patient'),
(2081, 'Patient81', 'patient81@gmail.com', 'patient0210', 'Female', '91592416', 'Patient'),
(2082, 'Patient82', 'patient82@gmail.com', 'patient2403', 'Female', '95694513', 'Patient'),
(2083, 'Patient83', 'patient83@gmail.com', 'patient1604', 'Female', '92250935', 'Patient'),
(2084, 'Patient84', 'patient84@gmail.com', 'patient2703', 'Male', '98843605', 'Patient'),
(2085, 'Patient85', 'patient85@gmail.com', 'patient2812', 'Male', '92758132', 'Patient'),
(2086, 'Patient86', 'patient86@gmail.com', 'patient0902', 'Male', '95310274', 'Patient'),
(2087, 'Patient87', 'patient87@gmail.com', 'patient0304', 'Female', '97579238', 'Patient'),
(2088, 'Patient88', 'patient88@gmail.com', 'patient2505', 'Male', '93236715', 'Patient'),
(2089, 'Patient89', 'patient89@gmail.com', 'patient2103', 'Female', '95208916', 'Patient'),
(2090, 'Patient90', 'patient90@gmail.com', 'patient0703', 'Female', '98444467', 'Patient'),
(2091, 'Patient91', 'patient91@gmail.com', 'patient1301', 'Male', '95564730', 'Patient'),
(2092, 'Patient92', 'patient92@gmail.com', 'patient2001', 'Male', '95770482', 'Patient'),
(2093, 'Patient93', 'patient93@gmail.com', 'patient1904', 'Male', '97915028', 'Patient'),
(2094, 'Patient94', 'patient94@gmail.com', 'patient0808', 'Female', '96847462', 'Patient'),
(2095, 'Patient95', 'patient95@gmail.com', 'patient1812', 'Male', '98621530', 'Patient'),
(2096, 'Patient96', 'patient96@gmail.com', 'patient1410', 'Female', '94206477', 'Patient'),
(2097, 'Patient97', 'patient97@gmail.com', 'patient1007', 'Male', '91453876', 'Patient'),
(2098, 'Patient98', 'patient98@gmail.com', 'patient0901', 'Male', '93363903', 'Patient'),
(2099, 'Patient99', 'patient99@gmail.com', 'patient1108', 'Female', '93250173', 'Patient'),
(2100, 'Patient100', 'patient100@gmail.com', 'patient2112', 'Female', '90889504', 'Patient'),
(3001, 'PharmaTest', 'phra@gmail.com', '3001', 'Female', '86319475', 'Pharmacist'),
(3002, 'PHR B', 'phrb@gmail.com', 'phrb', 'Male', '90861345', 'Pharmacist'),
(3003, 'PHR C', 'phrc@gmail.com', 'phrc', 'Male', '81638543', 'Pharmacist'),
(3004, 'PHR D', 'phrd@gmail.com', 'phrd', 'Female', '97158904', 'Pharmacist'),
(3005, 'Pharmacist5', 'pharmacist5@gmail.com', 'pharmacist1602', 'Female', '94435137', 'Pharmacist'),
(3006, 'Pharmacist6', 'pharmacist6@gmail.com', 'pharmacist1705', 'Male', '92095226', 'Pharmacist'),
(3007, 'Pharmacist7', 'pharmacist7@gmail.com', 'pharmacist2801', 'Male', '97384806', 'Pharmacist'),
(3008, 'Pharmacist8', 'pharmacist8@gmail.com', 'pharmacist2002', 'Male', '94706928', 'Pharmacist'),
(3009, 'Pharmacist9', 'pharmacist9@gmail.com', 'pharmacist2702', 'Male', '97130338', 'Pharmacist'),
(3010, 'Pharmacist10', 'pharmacist10@gmail.com', 'pharmacist2707', 'Male', '91095641', 'Pharmacist'),
(3011, 'Pharmacist11', 'pharmacist11@gmail.com', 'pharmacist3012', 'Male', '96476969', 'Pharmacist'),
(3012, 'Pharmacist12', 'pharmacist12@gmail.com', 'pharmacist1509', 'Male', '90154813', 'Pharmacist'),
(3013, 'Pharmacist13', 'pharmacist13@gmail.com', 'pharmacist0809', 'Female', '93153445', 'Pharmacist'),
(3014, 'Pharmacist14', 'pharmacist14@gmail.com', 'pharmacist1802', 'Female', '91732943', 'Pharmacist'),
(3015, 'Pharmacist15', 'pharmacist15@gmail.com', 'pharmacist2401', 'Female', '92443599', 'Pharmacist'),
(3016, 'Pharmacist16', 'pharmacist16@gmail.com', 'pharmacist0608', 'Male', '97464635', 'Pharmacist'),
(3017, 'Pharmacist17', 'pharmacist17@gmail.com', 'pharmacist2707', 'Female', '93197039', 'Pharmacist'),
(3018, 'Pharmacist18', 'pharmacist18@gmail.com', 'pharmacist2012', 'Female', '92826907', 'Pharmacist'),
(3019, 'Pharmacist19', 'pharmacist19@gmail.com', 'pharmacist2505', 'Male', '97798912', 'Pharmacist'),
(3020, 'Pharmacist20', 'pharmacist20@gmail.com', 'pharmacist2004', 'Male', '90132630', 'Pharmacist'),
(3021, 'Pharmacist21', 'pharmacist21@gmail.com', 'pharmacist1706', 'Male', '95999325', 'Pharmacist'),
(3022, 'Pharmacist22', 'pharmacist22@gmail.com', 'pharmacist2008', 'Female', '92011571', 'Pharmacist'),
(3023, 'Pharmacist23', 'pharmacist23@gmail.com', 'pharmacist1605', 'Male', '93137321', 'Pharmacist'),
(3024, 'Pharmacist24', 'pharmacist24@gmail.com', 'pharmacist0608', 'Female', '96714663', 'Pharmacist'),
(3025, 'Pharmacist25', 'pharmacist25@gmail.com', 'pharmacist0910', 'Female', '90380701', 'Pharmacist'),
(3026, 'Pharmacist26', 'pharmacist26@gmail.com', 'pharmacist2707', 'Female', '96158617', 'Pharmacist'),
(3027, 'Pharmacist27', 'pharmacist27@gmail.com', 'pharmacist1311', 'Male', '93995652', 'Pharmacist'),
(3028, 'Pharmacist28', 'pharmacist28@gmail.com', 'pharmacist1909', 'Male', '97202708', 'Pharmacist'),
(3029, 'Pharmacist29', 'pharmacist29@gmail.com', 'pharmacist0911', 'Male', '98633286', 'Pharmacist'),
(3030, 'Pharmacist30', 'pharmacist30@gmail.com', 'pharmacist1710', 'Male', '97643746', 'Pharmacist'),
(3031, 'Pharmacist31', 'pharmacist31@gmail.com', 'pharmacist2910', 'Female', '90623596', 'Pharmacist'),
(3032, 'Pharmacist32', 'pharmacist32@gmail.com', 'pharmacist0408', 'Male', '96977023', 'Pharmacist'),
(3033, 'Pharmacist33', 'pharmacist33@gmail.com', 'pharmacist0211', 'Male', '97916730', 'Pharmacist'),
(3034, 'Pharmacist34', 'pharmacist34@gmail.com', 'pharmacist1511', 'Male', '97148352', 'Pharmacist'),
(3035, 'Pharmacist35', 'pharmacist35@gmail.com', 'pharmacist1102', 'Male', '93022072', 'Pharmacist'),
(3036, 'Pharmacist36', 'pharmacist36@gmail.com', 'pharmacist1711', 'Male', '95251990', 'Pharmacist'),
(3037, 'Pharmacist37', 'pharmacist37@gmail.com', 'pharmacist0301', 'Female', '93854562', 'Pharmacist'),
(3038, 'Pharmacist38', 'pharmacist38@gmail.com', 'pharmacist2009', 'Male', '98845797', 'Pharmacist'),
(3039, 'Pharmacist39', 'pharmacist39@gmail.com', 'pharmacist3105', 'Male', '95571144', 'Pharmacist'),
(3040, 'Pharmacist40', 'pharmacist40@gmail.com', 'pharmacist0804', 'Female', '98586966', 'Pharmacist'),
(3041, 'Pharmacist41', 'pharmacist41@gmail.com', 'pharmacist0809', 'Male', '96788282', 'Pharmacist'),
(3042, 'Pharmacist42', 'pharmacist42@gmail.com', 'pharmacist0510', 'Male', '97056950', 'Pharmacist'),
(3043, 'Pharmacist43', 'pharmacist43@gmail.com', 'pharmacist2109', 'Male', '98052510', 'Pharmacist'),
(3044, 'Pharmacist44', 'pharmacist44@gmail.com', 'pharmacist2609', 'Male', '90384307', 'Pharmacist'),
(3045, 'Pharmacist45', 'pharmacist45@gmail.com', 'pharmacist2107', 'Male', '91554482', 'Pharmacist'),
(3046, 'Pharmacist46', 'pharmacist46@gmail.com', 'pharmacist1712', 'Female', '95109491', 'Pharmacist'),
(3047, 'Pharmacist47', 'pharmacist47@gmail.com', 'pharmacist2208', 'Female', '91246393', 'Pharmacist'),
(3048, 'Pharmacist48', 'pharmacist48@gmail.com', 'pharmacist1906', 'Male', '92598221', 'Pharmacist'),
(3049, 'Pharmacist49', 'pharmacist49@gmail.com', 'pharmacist2906', 'Female', '92727977', 'Pharmacist'),
(3050, 'Pharmacist50', 'pharmacist50@gmail.com', 'pharmacist1302', 'Female', '95369215', 'Pharmacist'),
(3051, 'Pharmacist51', 'pharmacist51@gmail.com', 'pharmacist2112', 'Female', '96097285', 'Pharmacist'),
(3052, 'Pharmacist52', 'pharmacist52@gmail.com', 'pharmacist2105', 'Female', '95983639', 'Pharmacist'),
(3053, 'Pharmacist53', 'pharmacist53@gmail.com', 'pharmacist0512', 'Female', '93965245', 'Pharmacist'),
(3054, 'Pharmacist54', 'pharmacist54@gmail.com', 'pharmacist2807', 'Female', '93847625', 'Pharmacist'),
(3055, 'Pharmacist55', 'pharmacist55@gmail.com', 'pharmacist0210', 'Female', '92964491', 'Pharmacist'),
(3056, 'Pharmacist56', 'pharmacist56@gmail.com', 'pharmacist1009', 'Female', '90451755', 'Pharmacist'),
(3057, 'Pharmacist57', 'pharmacist57@gmail.com', 'pharmacist2812', 'Female', '94282851', 'Pharmacist'),
(3058, 'Pharmacist58', 'pharmacist58@gmail.com', 'pharmacist1112', 'Female', '96514885', 'Pharmacist'),
(3059, 'Pharmacist59', 'pharmacist59@gmail.com', 'pharmacist2011', 'Male', '91024214', 'Pharmacist'),
(3060, 'Pharmacist60', 'pharmacist60@gmail.com', 'pharmacist0504', 'Male', '90949407', 'Pharmacist'),
(3061, 'Pharmacist61', 'pharmacist61@gmail.com', 'pharmacist0903', 'Male', '90735870', 'Pharmacist'),
(3062, 'Pharmacist62', 'pharmacist62@gmail.com', 'pharmacist0702', 'Male', '98614664', 'Pharmacist'),
(3063, 'Pharmacist63', 'pharmacist63@gmail.com', 'pharmacist1811', 'Female', '93688455', 'Pharmacist'),
(3064, 'Pharmacist64', 'pharmacist64@gmail.com', 'pharmacist1012', 'Female', '98400317', 'Pharmacist'),
(3065, 'Pharmacist65', 'pharmacist65@gmail.com', 'pharmacist2609', 'Female', '90508908', 'Pharmacist'),
(3066, 'Pharmacist66', 'pharmacist66@gmail.com', 'pharmacist0412', 'Male', '91620628', 'Pharmacist'),
(3067, 'Pharmacist67', 'pharmacist67@gmail.com', 'pharmacist2010', 'Female', '95664877', 'Pharmacist'),
(3068, 'Pharmacist68', 'pharmacist68@gmail.com', 'pharmacist0807', 'Male', '91215374', 'Pharmacist'),
(3069, 'Pharmacist69', 'pharmacist69@gmail.com', 'pharmacist0408', 'Male', '97198694', 'Pharmacist'),
(3070, 'Pharmacist70', 'pharmacist70@gmail.com', 'pharmacist1707', 'Female', '90486111', 'Pharmacist'),
(3071, 'Pharmacist71', 'pharmacist71@gmail.com', 'pharmacist1906', 'Male', '95515183', 'Pharmacist'),
(3072, 'Pharmacist72', 'pharmacist72@gmail.com', 'pharmacist1707', 'Male', '97636267', 'Pharmacist'),
(3073, 'Pharmacist73', 'pharmacist73@gmail.com', 'pharmacist0307', 'Female', '93045999', 'Pharmacist'),
(3074, 'Pharmacist74', 'pharmacist74@gmail.com', 'pharmacist1805', 'Female', '97196221', 'Pharmacist'),
(3075, 'Pharmacist75', 'pharmacist75@gmail.com', 'pharmacist2509', 'Male', '95175095', 'Pharmacist'),
(3076, 'Pharmacist76', 'pharmacist76@gmail.com', 'pharmacist2806', 'Male', '90525290', 'Pharmacist'),
(3077, 'Pharmacist77', 'pharmacist77@gmail.com', 'pharmacist2006', 'Male', '96952873', 'Pharmacist'),
(3078, 'Pharmacist78', 'pharmacist78@gmail.com', 'pharmacist1808', 'Female', '90143380', 'Pharmacist'),
(3079, 'Pharmacist79', 'pharmacist79@gmail.com', 'pharmacist2802', 'Male', '97445123', 'Pharmacist'),
(3080, 'Pharmacist80', 'pharmacist80@gmail.com', 'pharmacist0603', 'Male', '96784614', 'Pharmacist'),
(3081, 'Pharmacist81', 'pharmacist81@gmail.com', 'pharmacist2001', 'Female', '92091189', 'Pharmacist'),
(3082, 'Pharmacist82', 'pharmacist82@gmail.com', 'pharmacist0805', 'Female', '92077490', 'Pharmacist'),
(3083, 'Pharmacist83', 'pharmacist83@gmail.com', 'pharmacist0504', 'Female', '92593659', 'Pharmacist'),
(3084, 'Pharmacist84', 'pharmacist84@gmail.com', 'pharmacist1308', 'Male', '91213899', 'Pharmacist'),
(3085, 'Pharmacist85', 'pharmacist85@gmail.com', 'pharmacist1811', 'Male', '92535950', 'Pharmacist'),
(3086, 'Pharmacist86', 'pharmacist86@gmail.com', 'pharmacist2511', 'Male', '91216955', 'Pharmacist'),
(3087, 'Pharmacist87', 'pharmacist87@gmail.com', 'pharmacist2012', 'Female', '91026636', 'Pharmacist'),
(3088, 'Pharmacist88', 'pharmacist88@gmail.com', 'pharmacist0602', 'Male', '93720389', 'Pharmacist'),
(3089, 'Pharmacist89', 'pharmacist89@gmail.com', 'pharmacist2401', 'Female', '97317422', 'Pharmacist'),
(3090, 'Pharmacist90', 'pharmacist90@gmail.com', 'pharmacist3009', 'Female', '90188522', 'Pharmacist'),
(3091, 'Pharmacist91', 'pharmacist91@gmail.com', 'pharmacist0302', 'Male', '93437683', 'Pharmacist'),
(3092, 'Pharmacist92', 'pharmacist92@gmail.com', 'pharmacist1508', 'Male', '91464020', 'Pharmacist'),
(3093, 'Pharmacist93', 'pharmacist93@gmail.com', 'pharmacist0205', 'Male', '96077220', 'Pharmacist'),
(3094, 'Pharmacist94', 'pharmacist94@gmail.com', 'pharmacist0208', 'Female', '98721974', 'Pharmacist'),
(3095, 'Pharmacist95', 'pharmacist95@gmail.com', 'pharmacist3010', 'Male', '97991089', 'Pharmacist'),
(3096, 'Pharmacist96', 'pharmacist96@gmail.com', 'pharmacist1112', 'Female', '98278375', 'Pharmacist'),
(3097, 'Pharmacist97', 'pharmacist97@gmail.com', 'pharmacist0710', 'Male', '96613484', 'Pharmacist'),
(3098, 'Pharmacist98', 'pharmacist98@gmail.com', 'pharmacist2506', 'Male', '91681559', 'Pharmacist'),
(3099, 'Pharmacist99', 'pharmacist99@gmail.com', 'pharmacist1703', 'Female', '93463183', 'Pharmacist'),
(3100, 'Pharmacist100', 'pharmacist100@gmail.com', 'pharmacist0710', 'Female', '93643574', 'Pharmacist'),
(4001, 'DoctorTest', 'dra@gmail.com', '4001', 'Male', '81275643', 'Doctor'),
(4002, 'DR B', 'drb@gmail.com', 'bpw', 'Female', '98086543', 'Doctor'),
(4003, 'DR C', 'drc@gmail.com', 'cpw', 'Female', '98127409', 'Doctor'),
(4004, 'DR D', 'drd@gmail.com', 'dpw', 'Male', '81849878', 'Doctor'),
(4005, 'Doctor5', 'doctor5@gmail.com', 'doctor1707', 'Female', '95108291', 'Doctor'),
(4006, 'Doctor6', 'doctor6@gmail.com', 'doctor0605', 'Male', '90170723', 'Doctor'),
(4007, 'Doctor7', 'doctor7@gmail.com', 'doctor2606', 'Male', '96939657', 'Doctor'),
(4008, 'Doctor8', 'doctor8@gmail.com', 'doctor0711', 'Male', '92840624', 'Doctor'),
(4009, 'Doctor9', 'doctor9@gmail.com', 'doctor1405', 'Male', '98045313', 'Doctor'),
(4010, 'Doctor10', 'doctor10@gmail.com', 'doctor0209', 'Male', '94839410', 'Doctor'),
(4011, 'Doctor11', 'doctor11@gmail.com', 'doctor1607', 'Male', '98599760', 'Doctor'),
(4012, 'Doctor12', 'doctor12@gmail.com', 'doctor2510', 'Male', '96411331', 'Doctor'),
(4013, 'Doctor13', 'doctor13@gmail.com', 'doctor0709', 'Female', '93165406', 'Doctor'),
(4014, 'Doctor14', 'doctor14@gmail.com', 'doctor2708', 'Female', '97067355', 'Doctor'),
(4015, 'Doctor15', 'doctor15@gmail.com', 'doctor1606', 'Female', '93045150', 'Doctor'),
(4016, 'Doctor16', 'doctor16@gmail.com', 'doctor1609', 'Male', '98564839', 'Doctor'),
(4017, 'Doctor17', 'doctor17@gmail.com', 'doctor3001', 'Female', '96724246', 'Doctor'),
(4018, 'Doctor18', 'doctor18@gmail.com', 'doctor1702', 'Female', '98705032', 'Doctor'),
(4019, 'Doctor19', 'doctor19@gmail.com', 'doctor1310', 'Male', '90524306', 'Doctor'),
(4020, 'Doctor20', 'doctor20@gmail.com', 'doctor2306', 'Male', '90253096', 'Doctor'),
(4021, 'Doctor21', 'doctor21@gmail.com', 'doctor2610', 'Male', '94201763', 'Doctor'),
(4022, 'Doctor22', 'doctor22@gmail.com', 'doctor2407', 'Female', '95218937', 'Doctor'),
(4023, 'Doctor23', 'doctor23@gmail.com', 'doctor0511', 'Male', '97215104', 'Doctor'),
(4024, 'Doctor24', 'doctor24@gmail.com', 'doctor2305', 'Female', '97672259', 'Doctor'),
(4025, 'Doctor25', 'doctor25@gmail.com', 'doctor1504', 'Female', '96911314', 'Doctor'),
(4026, 'Doctor26', 'doctor26@gmail.com', 'doctor2202', 'Female', '96012860', 'Doctor'),
(4027, 'Doctor27', 'doctor27@gmail.com', 'doctor0304', 'Male', '93611314', 'Doctor'),
(4028, 'Doctor28', 'doctor28@gmail.com', 'doctor0812', 'Male', '95455685', 'Doctor'),
(4029, 'Doctor29', 'doctor29@gmail.com', 'doctor2702', 'Male', '98669881', 'Doctor'),
(4030, 'Doctor30', 'doctor30@gmail.com', 'doctor1203', 'Male', '98207614', 'Doctor'),
(4031, 'Doctor31', 'doctor31@gmail.com', 'doctor1605', 'Female', '98613047', 'Doctor'),
(4032, 'Doctor32', 'doctor32@gmail.com', 'doctor1504', 'Male', '96422480', 'Doctor'),
(4033, 'Doctor33', 'doctor33@gmail.com', 'doctor2002', 'Male', '98104999', 'Doctor'),
(4034, 'Doctor34', 'doctor34@gmail.com', 'doctor3011', 'Male', '98563489', 'Doctor'),
(4035, 'Doctor35', 'doctor35@gmail.com', 'doctor1004', 'Male', '93224590', 'Doctor'),
(4036, 'Doctor36', 'doctor36@gmail.com', 'doctor2210', 'Male', '92453982', 'Doctor'),
(4037, 'Doctor37', 'doctor37@gmail.com', 'doctor0302', 'Female', '96697099', 'Doctor'),
(4038, 'Doctor38', 'doctor38@gmail.com', 'doctor1004', 'Male', '91901861', 'Doctor'),
(4039, 'Doctor39', 'doctor39@gmail.com', 'doctor2302', 'Male', '98371106', 'Doctor'),
(4040, 'Doctor40', 'doctor40@gmail.com', 'doctor2408', 'Female', '93319896', 'Doctor'),
(4041, 'Doctor41', 'doctor41@gmail.com', 'doctor1408', 'Male', '92243263', 'Doctor'),
(4042, 'Doctor42', 'doctor42@gmail.com', 'doctor0401', 'Male', '96529298', 'Doctor'),
(4043, 'Doctor43', 'doctor43@gmail.com', 'doctor0301', 'Male', '95578276', 'Doctor'),
(4044, 'Doctor44', 'doctor44@gmail.com', 'doctor2308', 'Male', '93684488', 'Doctor'),
(4045, 'Doctor45', 'doctor45@gmail.com', 'doctor2805', 'Male', '91762191', 'Doctor'),
(4046, 'Doctor46', 'doctor46@gmail.com', 'doctor2807', 'Female', '94068183', 'Doctor'),
(4047, 'Doctor47', 'doctor47@gmail.com', 'doctor0803', 'Female', '98296248', 'Doctor'),
(4048, 'Doctor48', 'doctor48@gmail.com', 'doctor0102', 'Male', '94092544', 'Doctor'),
(4049, 'Doctor49', 'doctor49@gmail.com', 'doctor1605', 'Female', '97323547', 'Doctor'),
(4050, 'Doctor50', 'doctor50@gmail.com', 'doctor1607', 'Female', '92960490', 'Doctor'),
(4051, 'Doctor51', 'doctor51@gmail.com', 'doctor0202', 'Female', '96218209', 'Doctor'),
(4052, 'Doctor52', 'doctor52@gmail.com', 'doctor0902', 'Female', '90252575', 'Doctor'),
(4053, 'Doctor53', 'doctor53@gmail.com', 'doctor2306', 'Female', '98727760', 'Doctor'),
(4054, 'Doctor54', 'doctor54@gmail.com', 'doctor0303', 'Female', '98620386', 'Doctor'),
(4055, 'Doctor55', 'doctor55@gmail.com', 'doctor0907', 'Female', '93219412', 'Doctor'),
(4056, 'Doctor56', 'doctor56@gmail.com', 'doctor0210', 'Female', '96361699', 'Doctor'),
(4057, 'Doctor57', 'doctor57@gmail.com', 'doctor2310', 'Female', '96115547', 'Doctor'),
(4058, 'Doctor58', 'doctor58@gmail.com', 'doctor0811', 'Female', '91429408', 'Doctor'),
(4059, 'Doctor59', 'doctor59@gmail.com', 'doctor1306', 'Male', '96021912', 'Doctor'),
(4060, 'Doctor60', 'doctor60@gmail.com', 'doctor0507', 'Male', '92409507', 'Doctor'),
(4061, 'Doctor61', 'doctor61@gmail.com', 'doctor1201', 'Male', '93414019', 'Doctor'),
(4062, 'Doctor62', 'doctor62@gmail.com', 'doctor2507', 'Male', '97938697', 'Doctor'),
(4063, 'Doctor63', 'doctor63@gmail.com', 'doctor0808', 'Female', '92779078', 'Doctor'),
(4064, 'Doctor64', 'doctor64@gmail.com', 'doctor2405', 'Female', '92819352', 'Doctor'),
(4065, 'Doctor65', 'doctor65@gmail.com', 'doctor2907', 'Female', '98672584', 'Doctor'),
(4066, 'Doctor66', 'doctor66@gmail.com', 'doctor0407', 'Male', '95967958', 'Doctor'),
(4067, 'Doctor67', 'doctor67@gmail.com', 'doctor1405', 'Female', '95840228', 'Doctor'),
(4068, 'Doctor68', 'doctor68@gmail.com', 'doctor2512', 'Male', '96044131', 'Doctor'),
(4069, 'Doctor69', 'doctor69@gmail.com', 'doctor0507', 'Male', '96269882', 'Doctor'),
(4070, 'Doctor70', 'doctor70@gmail.com', 'doctor2609', 'Female', '92168850', 'Doctor'),
(4071, 'Doctor71', 'doctor71@gmail.com', 'doctor0610', 'Male', '93264508', 'Doctor'),
(4072, 'Doctor72', 'doctor72@gmail.com', 'doctor0806', 'Male', '94994035', 'Doctor'),
(4073, 'Doctor73', 'doctor73@gmail.com', 'doctor2411', 'Female', '93114328', 'Doctor'),
(4074, 'Doctor74', 'doctor74@gmail.com', 'doctor3003', 'Female', '98086920', 'Doctor'),
(4075, 'Doctor75', 'doctor75@gmail.com', 'doctor3101', 'Male', '98040176', 'Doctor'),
(4076, 'Doctor76', 'doctor76@gmail.com', 'doctor2312', 'Male', '94767344', 'Doctor'),
(4077, 'Doctor77', 'doctor77@gmail.com', 'doctor0204', 'Male', '98560546', 'Doctor'),
(4078, 'Doctor78', 'doctor78@gmail.com', 'doctor2304', 'Female', '90359995', 'Doctor'),
(4079, 'Doctor79', 'doctor79@gmail.com', 'doctor1711', 'Male', '91272846', 'Doctor'),
(4080, 'Doctor80', 'doctor80@gmail.com', 'doctor0605', 'Male', '94662979', 'Doctor'),
(4081, 'Doctor81', 'doctor81@gmail.com', 'doctor0703', 'Female', '90929915', 'Doctor'),
(4082, 'Doctor82', 'doctor82@gmail.com', 'doctor1909', 'Female', '97293016', 'Doctor'),
(4083, 'Doctor83', 'doctor83@gmail.com', 'doctor1811', 'Female', '92496257', 'Doctor'),
(4084, 'Doctor84', 'doctor84@gmail.com', 'doctor1912', 'Male', '97827805', 'Doctor'),
(4085, 'Doctor85', 'doctor85@gmail.com', 'doctor0403', 'Male', '91813826', 'Doctor'),
(4086, 'Doctor86', 'doctor86@gmail.com', 'doctor1501', 'Male', '95132598', 'Doctor'),
(4087, 'Doctor87', 'doctor87@gmail.com', 'doctor1512', 'Female', '98116501', 'Doctor'),
(4088, 'Doctor88', 'doctor88@gmail.com', 'doctor2305', 'Male', '90868924', 'Doctor'),
(4089, 'Doctor89', 'doctor89@gmail.com', 'doctor0106', 'Female', '98628685', 'Doctor'),
(4090, 'Doctor90', 'doctor90@gmail.com', 'doctor1303', 'Female', '94182159', 'Doctor'),
(4091, 'Doctor91', 'doctor91@gmail.com', 'doctor2506', 'Male', '90891860', 'Doctor'),
(4092, 'Doctor92', 'doctor92@gmail.com', 'doctor1407', 'Male', '91782260', 'Doctor'),
(4093, 'Doctor93', 'doctor93@gmail.com', 'doctor1611', 'Male', '97640278', 'Doctor'),
(4094, 'Doctor94', 'doctor94@gmail.com', 'doctor1409', 'Female', '92035799', 'Doctor'),
(4095, 'Doctor95', 'doctor95@gmail.com', 'doctor3004', 'Male', '90651374', 'Doctor'),
(4096, 'Doctor96', 'doctor96@gmail.com', 'doctor2908', 'Female', '98155686', 'Doctor'),
(4097, 'Doctor97', 'doctor97@gmail.com', 'doctor2610', 'Male', '90233627', 'Doctor'),
(4098, 'Doctor98', 'doctor98@gmail.com', 'doctor1306', 'Male', '95050490', 'Doctor'),
(4099, 'Doctor99', 'doctor99@gmail.com', 'doctor2704', 'Female', '98856065', 'Doctor'),
(4100, 'Doctor100', 'doctor100@gmail.com', 'doctor1502', 'Female', '94623348', 'Doctor');

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
