-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 11:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softengdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursename_tb`
--

CREATE TABLE `coursename_tb` (
  `Cos_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursename_tb`
--

INSERT INTO `coursename_tb` (`Cos_code`, `Cos_name`) VALUES
('12345', 'วิศวกรรมซอฟต์แวร์ 2560'),
('12346', 'วิศวกรรมซอฟต์แวร์ 2562'),
('172839', 'อังกฤษเพื่อคนอื่น');

-- --------------------------------------------------------

--
-- Table structure for table `course_tb`
--

CREATE TABLE `course_tb` (
  `Cos_id` int(11) NOT NULL,
  `Cos_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_term` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sect_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_Time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_Room` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_tb`
--

INSERT INTO `course_tb` (`Cos_id`, `Cos_code`, `Cos_term`, `Sub_Code`, `Teach_code`, `Sect_code`, `Cos_Time`, `Cos_Room`) VALUES
(1, '12345', '1/2561', '9011103', '50436', '03', 'จ(1-4)', '1234'),
(2, '12345', '1/2562', '9011103', '50436', '01', 'อ(5-7)', '5466'),
(29, '12345', '1/2560', '9011403', '30144', '03', 'พฤ(5-7)', '90125'),
(30, '12345', '1/2560', '9011204', '30144', '03', 'พ(5-7)', '90126'),
(33, '12345', '1/2560', '9011103', '30144', '03', 'อ(5-7)', '5466'),
(44, '12346', '1/2560', '9011103', '50436', '03', 'อ(5-7)', '1234'),
(57, '12345', '2/2563', '5672202', '30141', '03', '1', '1'),
(58, '12345', '2/2560', '9011202', '30141', '03', 'พ(5-8)', '90125'),
(59, '12345', '2/2560', '5672101', '30141', '03', 'พ(1-4)', '39402'),
(68, '12346', '2/2560', '9011202', '50436', '03', 'อ(5-7)', '5466'),
(73, '12345', '1/2560', '9011103', '50436', '03', 'อ(5-7)', '5466'),
(74, '12345', '1/2560', '9011103', '50436', '03', 'อ(5-7)', '5466'),
(75, '12345', '1/2562', '9011103', '50436', '03', 'อ(5-7)', '5466'),
(76, '12345', '1/2562', '9011103', '50436', '03', 'อ(5-7)', '5466'),
(77, '172839', '1/2560', '9011103', '50436', '03', 'อ(5-7)', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `grade_tb`
--

CREATE TABLE `grade_tb` (
  `Grad_id` int(16) NOT NULL,
  `Grad_Term` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_code` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `GPA` text COLLATE utf8_unicode_ci NOT NULL,
  `grade_font` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grade_tb`
--

INSERT INTO `grade_tb` (`Grad_id`, `Grad_Term`, `Std_code`, `Sub_code`, `GPA`, `grade_font`) VALUES
(1, '1/2561', '60122660134', '911103', '70', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `Mem_id` int(16) NOT NULL,
  `Mem_user` text COLLATE utf8_unicode_ci NOT NULL,
  `Mem_pass` text COLLATE utf8_unicode_ci NOT NULL,
  `Type_id` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2',
  `Email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_tb`
--

INSERT INTO `member_tb` (`Mem_id`, `Mem_user`, `Mem_pass`, `Type_id`, `Email`) VALUES
(1, '60122660134', '123456', '3', 'eazy@gmail.com'),
(2, 'admin', 'admin', '1', 'test@gmail.com'),
(3, '50436', '251241', '2', 'namo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `Reg_id` int(11) NOT NULL,
  `Std_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`Reg_id`, `Std_code`, `Cos_code`) VALUES
(1, '60122660134', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sect_tb`
--

CREATE TABLE `sect_tb` (
  `Sect_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Sect_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sect_tb`
--

INSERT INTO `sect_tb` (`Sect_code`, `Sect_Name`) VALUES
('01', 'เอกบังคับ'),
('02', 'วิชาเลือก'),
('03', 'เลือกเสรี');

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `Std_id` int(16) NOT NULL,
  `Std_Code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Add` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Birth` date NOT NULL,
  `Std_Card` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Major` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Faculty` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`Std_id`, `Std_Code`, `Std_Pname`, `Std_Fname`, `Std_Lname`, `Std_Tel`, `Std_Add`, `Std_Birth`, `Std_Card`, `Std_Major`, `Std_Faculty`, `Std_Image`) VALUES
(1, '60122660118', 'Mr.', 'Kuy', 'Puat', '0652556595', 'USA', '2019-09-19', '1529900975465', 'SE', 'SE', ''),
(2, '60122660134', 'Mrs.', 'Worawit', 'Luffy', '0659897895', 'LA, USA', '1998-12-25', '152990098755', 'Science', 'Physics', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tb`
--

CREATE TABLE `subject_tb` (
  `Sub_id` int(16) NOT NULL,
  `Sub_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Credit` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_tb`
--

INSERT INTO `subject_tb` (`Sub_id`, `Sub_code`, `Sub_Name`, `Sub_Credit`) VALUES
(1, '9011103', 'ภาษาอังกฤษเพื่อทักษะการเรียน', '3'),
(2, '9011202', 'สุนทรียภาพของชีวิต', '3'),
(3, '9011403', 'เทคโนโลยีสารสนเทศเพื่อการเรียนรู้', '3'),
(4, '9011204', 'ทักษะการรู้สารสนเทศ', '3'),
(5, '5672202', 'การเขียนโปรแกรมเชิงวัตถุ', '3'),
(6, '5672101', 'คณิตศาสตร์ดิสครีตสำหรับวิศวกรรมซอฟต์แวร์', '3');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tb`
--

CREATE TABLE `teacher_tb` (
  `Teach_id` int(16) NOT NULL,
  `Teach_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Birth` date NOT NULL,
  `Teach_Add` text COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `Teach _Major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach _Faculty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach _Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_tb`
--

INSERT INTO `teacher_tb` (`Teach_id`, `Teach_code`, `Teach_Pname`, `Teach_Fname`, `Teach_Lname`, `Teach_Birth`, `Teach_Add`, `Teach_Tel`, `Teach_Card`, `Teach _Major`, `Teach _Faculty`, `Teach _Image`) VALUES
(1, '50436', 'นางสาว', 'กนกกัญญา', 'รวมไมตรี', '2019-09-17', 'test', '1234567890', '1234567891234', 'คณะเทคโนโลยีอุตสาหกรรม', 'คณะเทคโนโลยีอุตสาหกรรม', ''),
(2, '30141', 'นางสาว', 'กรรณิกา', 'พิมสิงห์รี', '2019-09-17', 'test', '1234567890', '1234567891234', 'คณะเทคโนโลยีอุตสาหกรรม', 'คณะเทคโนโลยีอุตสาหกรรม', ''),
(3, '30144', 'นางสาว', 'กฤษดา', 'ชัยเรือง', '2019-09-17', 'test', '1234567890', '1234567891234', 'นักวิชาการโสตทัศนศึกษา', 'คณะเทคโนโลยีอุตสาหกรรม', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tb`
--
ALTER TABLE `course_tb`
  ADD PRIMARY KEY (`Cos_id`);

--
-- Indexes for table `grade_tb`
--
ALTER TABLE `grade_tb`
  ADD PRIMARY KEY (`Grad_id`);

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`Mem_id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `sect_tb`
--
ALTER TABLE `sect_tb`
  ADD PRIMARY KEY (`Sect_code`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`Std_id`);

--
-- Indexes for table `subject_tb`
--
ALTER TABLE `subject_tb`
  ADD PRIMARY KEY (`Sub_id`);

--
-- Indexes for table `teacher_tb`
--
ALTER TABLE `teacher_tb`
  ADD PRIMARY KEY (`Teach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_tb`
--
ALTER TABLE `course_tb`
  MODIFY `Cos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `grade_tb`
--
ALTER TABLE `grade_tb`
  MODIFY `Grad_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_tb`
--
ALTER TABLE `member_tb`
  MODIFY `Mem_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `Std_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject_tb`
--
ALTER TABLE `subject_tb`
  MODIFY `Sub_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_tb`
--
ALTER TABLE `teacher_tb`
  MODIFY `Teach_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
