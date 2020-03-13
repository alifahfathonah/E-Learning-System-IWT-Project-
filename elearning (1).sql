-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 12:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `aid` int(11) NOT NULL,
  `adate` date DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `verify` varchar(5) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `catogory` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `catogory`) VALUES
(1, 'accounts', 'business'),
(2, 'finance', 'business'),
(3, 'sales', 'business'),
(4, 'communication', 'business'),
(5, 'animation', 'design'),
(6, 'graphic design', 'design'),
(7, 'game design', 'design'),
(8, 'c++', 'programming'),
(9, 'c#', 'programming'),
(10, 'java', 'programming'),
(11, 'microbiology', 'science'),
(12, 'zoology', 'science'),
(13, 'botany', 'science'),
(14, 'dancing', 'art'),
(15, 'music', 'art'),
(16, 'drawing', 'art'),
(17, 'physics', 'engineering'),
(18, 'electrical engineeri', 'engineering'),
(19, 'material engineering', 'engineering'),
(20, 'css3', 'web development'),
(21, 'php', 'web development'),
(22, 'hypertext markup', 'web development'),
(23, 'html', 'web development'),
(24, 'microsoft office', 'productivity'),
(25, 'apple', 'productivity'),
(26, 'google cloud', 'productivity');

-- --------------------------------------------------------

--
-- Table structure for table `course_materials`
--

CREATE TABLE `course_materials` (
  `cid` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `content` varchar(40) DEFAULT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_materials`
--

INSERT INTO `course_materials` (`cid`, `type`, `content`, `mid`) VALUES
(1, 'PDF', 'tute', 1),
(1, 'PDF', 'tute', 2),
(1, 'PDF', 'tute', 3),
(2, 'PDF', 'Business finance', 4),
(2, 'PDF', 'Financial management', 5),
(2, 'PDF', 'Introduction to finance', 6),
(3, 'PDF', 'E-Commerce', 7),
(3, 'PDF', 'Sales tute', 8),
(3, 'PDF', 'Sales management: an overview', 9),
(3, 'PDF', 'Sales & distribution', 10),
(5, 'PDF', '3D animation', 11),
(5, 'PDF', 'Creating 3D animation', 12),
(5, 'PDF', 'Animation', 13),
(5, 'PDF', 'Character animation', 14),
(5, 'PDF', 'Character animation cntd.', 15),
(6, 'PDF', '3D animation', 16),
(6, 'PDF', 'Animation', 17),
(6, 'PDF', 'Character animation', 18),
(6, 'PDF', 'Character animation cntd.', 19),
(8, 'PDF', 'C++ tutorial', 20),
(8, 'PDF', 'Learn C++', 21),
(8, 'PDF', 'C++ exercise', 22),
(8, 'PDF', 'C++ OOD', 23),
(9, 'PDF', 'programming in C#', 28),
(9, 'PDF', 'C# object oriented', 29),
(9, 'PDF', 'programming C# PDF', 30),
(9, 'PDF', 'C# for human beaings', 31),
(10, 'PDF', 'Simple java', 32),
(10, 'PDF', 'Java exercise', 33),
(10, 'PDF', 'Java problems', 34),
(10, 'PDF', 'JAVA', 35);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `nic` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`nic`, `date`, `mid`) VALUES
('963164963V', '2018-05-22', 1),
('963164963V', '2018-05-22', 2),
('963164963V', '2018-05-22', 3),
('963164963V', '2018-05-22', 4),
('963164963V', '2018-05-22', 5);

-- --------------------------------------------------------

--
-- Table structure for table `edit`
--

CREATE TABLE `edit` (
  `nic` varchar(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `nic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `date`, `nic`) VALUES
(0, '2018-05-22 02:19:48', '963164963V'),
(1, '2018-05-22 09:52:15', '125896347V'),
(2, '2018-05-22 11:29:46', '123456789V'),
(3, '2018-05-22 11:30:24', '987654321V'),
(4, '2018-05-22 01:25:34', '789456123V'),
(5, '2018-05-22 01:49:51', '456789123V'),
(6, '2018-05-22 02:20:23', '963852741V');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `q1` varchar(512) DEFAULT NULL,
  `a1` varchar(512) DEFAULT NULL,
  `q2` varchar(512) DEFAULT NULL,
  `a2` varchar(512) DEFAULT NULL,
  `q3` varchar(512) DEFAULT NULL,
  `a3` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `nic`, `q1`, `a1`, `q2`, `a2`, `q3`, `a3`) VALUES
(12, '963164963V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', 'a91d24d7eab7683bc73b857d42dfc48a9577c600ccb5e7d7adabab54eebc112232f3de2539208f22a560ad320d1f2cda5a5f1a127baf6bf871b0e282c2b85220', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', '3e3b2456c1891fdb9909cee703def41f8a55eca27774eb5960a3ac877f1bb1c13a68eb0a8d222764ee6854f5a085c2d49994c56c7f736c4acbc4bc201f8bb32d', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', '5cc50107ac375e075cca5f7977b4cccd42b4232e54d878ac1f5e557c942ccb17d76c757fe8625d748330df822df4d50aaa473ca9126110c5bf82e8510e227f88'),
(13, '125896347V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff'),
(14, '123456789V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f'),
(15, '987654321V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f'),
(16, '789456123V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f'),
(17, '456789123V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff'),
(18, '963852741V', 'f71885167f87e2a71c1122418d8fe97d1b9c77ded5261d6c0a6709324da716b8f1981571625d8753c20de37b9612251ca59acf02f335c04fc947e5750146ddb6', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', '59f87d102efd7482ec24ea83c3e3901c2e14289076bd9873cfeb50130cbb32e87d6955e00ba8624f72147f66baf5aa3990a18b33da8a1a6f64b2149f58a2f40a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f', 'b114f311db0e009ca2a88a9b97b1d7b362ddb27dc3dd214c6d20327a1fc3add8cc488cca4cc3565a876f6040f8b73a7b92475be1d0b1bc453f6140fba7183b9a', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `rif_id` int(11) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rep_id` int(11) NOT NULL,
  `rp_date` date DEFAULT NULL,
  `rp_time` time DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `riv_id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selectt`
--

CREATE TABLE `selectt` (
  `cid` int(11) NOT NULL,
  `nic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nic` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `password` varchar(512) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nic`, `email`, `fname`, `lname`, `address`, `institute`, `password`, `type`) VALUES
('123456789V', 'prof@els.com', 'Jagath', 'Kulawansa', 'B1560, Huston', 'Havard', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'prof'),
('125896347V', 'test@123.com', 'test', 'test', 'hshh', 'shj', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'student'),
('456789123V', '123@gmail.com', 'test', 'test', 'test', 'SLIIT', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'student'),
('789456123V', 'coordinator@els.com', 'Bonani', 'Chachurangi', '158, Kundasale', 'SLIIT', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'coordinator'),
('963164963V', 'yasaslive@gmail.com', 'Yasas', 'Alwis', '158, Halloluwa', 'SLIIT', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'student'),
('963852741V', 'sajith@sliit.lk', 'sajith', 'perera', 'SLIIT', 'SLIIT', '12b03226a6d8be9c6e8cd5e55dc6c7920caaa39df14aab92d5e3ea9340d1c8a4d3d0b8e4314f1f6ef131ba4bf1ceb9186ab87c801af0d5c95b1befb8cedae2b9', 'student'),
('987654321V', 'admin@els.com', 'Kasun', 'Muthuhettige', 'AA123, California', 'California Institute of Technology', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `fk_cm` (`cid`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`nic`,`mid`),
  ADD KEY `fk_dm` (`mid`);

--
-- Indexes for table `edit`
--
ALTER TABLE `edit`
  ADD PRIMARY KEY (`nic`,`cid`,`date`),
  ADD KEY `fk_ee` (`cid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`,`nic`),
  ADD KEY `fk_log` (`nic`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `fk_q` (`nic`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`rif_id`),
  ADD KEY `fk_ref` (`cid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rep_id`),
  ADD KEY `fk_rp` (`nic`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`riv_id`),
  ADD KEY `fk_r` (`nic`);

--
-- Indexes for table `selectt`
--
ALTER TABLE `selectt`
  ADD PRIMARY KEY (`cid`,`nic`),
  ADD KEY `fk_se` (`nic`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course_materials`
--
ALTER TABLE `course_materials`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `edit`
--
ALTER TABLE `edit`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `rif_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `riv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`);

--
-- Constraints for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD CONSTRAINT `fk_cm` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `fk_d` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`),
  ADD CONSTRAINT `fk_dm` FOREIGN KEY (`mid`) REFERENCES `course_materials` (`mid`);

--
-- Constraints for table `edit`
--
ALTER TABLE `edit`
  ADD CONSTRAINT `fk_e` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`),
  ADD CONSTRAINT `fk_ee` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_q` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `fk_ref` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk_rp` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_r` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`);

--
-- Constraints for table `selectt`
--
ALTER TABLE `selectt`
  ADD CONSTRAINT `fk_s` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `fk_se` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
