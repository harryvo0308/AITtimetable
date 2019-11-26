-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2019 at 02:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ait_timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_timetable`
--

CREATE TABLE `f_timetable` (
  `F_ID` int(250) NOT NULL,
  `Groups` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Time` time NOT NULL,
  `Teacher` varchar(250) NOT NULL,
  `Semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `G_ID` int(20) NOT NULL,
  `G_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`G_ID`, `G_Name`) VALUES
(1, 'BIM 1st Semester '),
(2, 'BIM 2nd Semester '),
(3, 'BIM 3rd Semester '),
(4, 'BIM 4st Semester '),
(5, 'BIM 5st Semester '),
(6, 'BIM 6st Semester '),
(7, 'BIT(MAD) 1st Semester'),
(8, 'BIT(MAD) 2nd Semester'),
(9, 'BIT(MAD) 3rd Semester'),
(10, 'BIT(MAD) 4st Semester'),
(11, 'BIT(MAD) 5st Semester'),
(12, 'BIT(MAD) 6st Semester'),
(13, 'BIT (GAP) 3rd Semester'),
(14, 'BIT (GAP) 4th  Semester '),
(15, 'BIT (GAP) 5TH Semester'),
(16, 'BIT (GAP) 6th  Semester ');

-- --------------------------------------------------------

--
-- Table structure for table `m_timetable`
--

CREATE TABLE `m_timetable` (
  `M_ID` int(250) NOT NULL,
  `Groups` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Time` time NOT NULL,
  `Teacher` varchar(250) NOT NULL,
  `Semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_timetable`
--

INSERT INTO `m_timetable` (`M_ID`, `Groups`, `Room`, `Subject`, `Time`, `Teacher`, `Semester`) VALUES
(10, '1', 'Classroom 17', 'Animation', '00:00:11', 'Aeron', 'A19'),
(11, '2', 'PC 14', 'C++2', '09:00:00', 'Roshan', 'A19'),
(12, '1', 'PC 12', '2D Animaition', '09:00:00', 'Jenny', 'B19'),
(13, '1', 'Classroom 18', '2D Animaition', '11:00:00', 'Roshan', 'A19'),
(14, '1', 'Classroom 3', 'Digital Pathways', '09:00:00', 'Collin', 'A19');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `R_ID` int(50) NOT NULL,
  `R_Number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`R_ID`, `R_Number`) VALUES
(1, 'Classroom 3'),
(2, 'Classroom 17'),
(3, 'Classroom 18'),
(4, 'PC 12'),
(5, 'PC 14'),
(6, 'PC 15'),
(7, 'PC 16'),
(8, 'MAC 13'),
(9, 'ISCD Lab'),
(10, 'GGS Room');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `Sem_ID` int(50) NOT NULL,
  `Sem_Code` varchar(250) NOT NULL,
  `Semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`Sem_ID`, `Sem_Code`, `Semester`) VALUES
(1, 'Sem_1', 'A19'),
(2, 'Sem_2', 'B19');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Sub_ID` int(250) NOT NULL,
  `Sub_Code` varchar(250) NOT NULL,
  `Sub_Name` varchar(250) NOT NULL,
  `Sub_Duration` int(50) NOT NULL,
  `G_ID` int(20) NOT NULL,
  `Sub_Class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Sub_ID`, `Sub_Code`, `Sub_Name`, `Sub_Duration`, `G_ID`, `Sub_Class`) VALUES
(1, 'DS', 'Digital Storytelling', 4, 1, 'A'),
(2, 'CD', 'Creative Drawing', 4, 1, 'A'),
(3, 'SE', 'Shooting and Editing', 4, 1, 'A'),
(4, 'ANI', 'Animation', 4, 1, 'A'),
(5, 'DP', 'Digital Pathways', 4, 2, 'A'),
(6, 'MG', 'Motion Graphics', 4, 2, 'A'),
(7, 'SP', 'Screen Production', 4, 2, 'A'),
(8, 'DA', '2D Animaition', 4, 2, 'A'),
(9, 'EM', 'Entertainment and Media', 4, 3, 'A'),
(10, 'DP', 'Design Principles', 4, 3, 'A'),
(11, 'MASP', 'Minor Advanced Screen Prod', 4, 3, 'A'),
(12, '3A', '3D Animation', 4, 3, 'A'),
(13, 'ITW', 'Intro to Web', 4, 7, 'A'),
(14, 'C++', 'C++1', 4, 7, 'A'),
(15, 'FP', 'Found programming', 4, 7, 'A'),
(16, 'IS', 'Info Systems', 4, 7, 'A'),
(17, 'DB', 'Database Systems', 4, 8, 'A'),
(18, 'C++', 'C++2', 4, 8, 'A'),
(19, 'DM', 'Discrete Maths', 4, 8, 'A'),
(20, 'ITS', 'Intro to software', 4, 8, 'A'),
(21, 'SAD', 'System Analysis Design', 4, 9, 'A'),
(22, 'JAVA', 'JAVA PRG', 4, 9, 'A'),
(23, 'DPM', 'Digtal Project Management', 4, 9, 'A'),
(24, 'FN', 'Foundation Networks', 4, 9, 'A'),
(25, 'ID', 'Interface Design', 4, 10, 'A'),
(26, 'ES', 'Enterprise Systems', 4, 10, 'A'),
(27, 'MAA', 'Mobile Apps Android', 4, 10, 'A'),
(28, 'AW', 'Advanced Studio 1', 4, 10, 'A'),
(29, 'DDA', 'Data Driven Apps', 4, 11, 'A'),
(30, 'EP', 'External Project', 2, 11, 'A'),
(31, 'AW', 'Advanced Studio 2', 4, 11, 'A'),
(32, 'BGEP', ' Basic Game Engine Programming ', 4, 13, 'A'),
(33, 'AI', 'Artificial Intelligence', 4, 14, 'A'),
(34, 'AGEP', ' Advanced Game Engine Programming', 4, 14, 'A'),
(35, 'GD', 'Game Dev', 4, 14, 'A'),
(36, 'AR', 'Augmented Realit', 4, 15, 'A'),
(37, 'AGD', 'Adv Game Dev', 4, 15, 'A'),
(38, 'AGP', ' Adv Game Proj', 8, 16, 'A'),
(39, 'DP', 'Design Principles', 4, 4, 'A'),
(40, 'CD', 'Creative Drawing', 4, 4, 'A'),
(41, 'DI', 'Digital Images', 4, 4, 'A'),
(42, 'CDT', 'Com Design Theory', 4, 4, 'A'),
(43, 'DT', 'Design Thinking', 4, 4, 'A'),
(44, 'SE', 'Shooting and Editing', 4, 4, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_ID` int(50) NOT NULL,
  `T_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_ID`, `T_Name`) VALUES
(1001, 'Roshan'),
(1002, 'Collin'),
(1003, 'Jenny'),
(1004, 'Aeron'),
(1005, 'Roy'),
(1006, 'Hung'),
(1007, 'Nguyen'),
(1008, 'Harry'),
(1009, 'Lih'),
(1010, 'Tony');

-- --------------------------------------------------------

--
-- Table structure for table `th_timetable`
--

CREATE TABLE `th_timetable` (
  `TH_ID` int(250) NOT NULL,
  `Groups` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Time` time NOT NULL,
  `Teacher` varchar(250) NOT NULL,
  `Semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_timetable`
--

CREATE TABLE `t_timetable` (
  `T_ID` int(250) NOT NULL,
  `Groups` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Time` time NOT NULL,
  `Teacher` varchar(250) NOT NULL,
  `Semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `w_timetable`
--

CREATE TABLE `w_timetable` (
  `W_ID` int(250) NOT NULL,
  `Groups` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Time` time NOT NULL,
  `Teacher` varchar(250) NOT NULL,
  `Semester` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_timetable`
--
ALTER TABLE `f_timetable`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`G_ID`);

--
-- Indexes for table `m_timetable`
--
ALTER TABLE `m_timetable`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`Sem_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Sub_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `th_timetable`
--
ALTER TABLE `th_timetable`
  ADD PRIMARY KEY (`TH_ID`);

--
-- Indexes for table `t_timetable`
--
ALTER TABLE `t_timetable`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `w_timetable`
--
ALTER TABLE `w_timetable`
  ADD PRIMARY KEY (`W_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_timetable`
--
ALTER TABLE `f_timetable`
  MODIFY `F_ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `G_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `m_timetable`
--
ALTER TABLE `m_timetable`
  MODIFY `M_ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `R_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `Sem_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Sub_ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `th_timetable`
--
ALTER TABLE `th_timetable`
  MODIFY `TH_ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_timetable`
--
ALTER TABLE `t_timetable`
  MODIFY `T_ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `w_timetable`
--
ALTER TABLE `w_timetable`
  MODIFY `W_ID` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
