-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internspacedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_detail`
--

CREATE TABLE `company_detail` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(45) NOT NULL,
  `comp_address` varchar(45) NOT NULL,
  `comp_email` varchar(45) NOT NULL,
  `comp_phoneNo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_detail`
--

INSERT INTO `company_detail` (`comp_id`, `comp_name`, `comp_address`, `comp_email`, `comp_phoneNo`) VALUES
(1, 'IT Productive', 'Lot 88, Sungai Petani', 'tech12@gmail.com', '048008000'),
(2, 'AZY Technology', 'Jalan Mergong 2 Alor Setar', 'azyyyy11@gmail.com', '046006000');

-- --------------------------------------------------------

--
-- Table structure for table `internship_detail`
--

CREATE TABLE `internship_detail` (
  `intern_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `student_name` varchar(45) NOT NULL,
  `student_ic` varchar(45) NOT NULL,
  `student_program` varchar(45) NOT NULL,
  `student_matricNo` varchar(45) NOT NULL,
  `student_CGPA` varchar(45) NOT NULL,
  `student_phoneNo` varchar(45) NOT NULL,
  `student_email` varchar(45) NOT NULL,
  `student_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_detail`
--

INSERT INTO `internship_detail` (`intern_id`, `user_id`, `comp_id`, `student_name`, `student_ic`, `student_program`, `student_matricNo`, `student_CGPA`, `student_phoneNo`, `student_email`, `student_address`) VALUES
(1, 1, 1, 'FATIN AQILLAH', '020617020692', 'DIPLOMA', '2023189841', '3.33', '0167529320', 'fatinadzuan@gmail.com', 'TAMAN BAIDURI');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level_desc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_desc`) VALUES
(1, 'student'),
(2, 'academic supervisor'),
(3, 'industrial supervisor'),
(4, 'coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(11) NOT NULL,
  `intern_id` int(11) NOT NULL,
  `working_exp` varchar(45) NOT NULL,
  `achievement` varchar(45) NOT NULL,
  `expertise` varchar(45) NOT NULL,
  `language_skills` varchar(45) NOT NULL,
  `references` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phoneNo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `phoneNo`, `email`, `level_id`) VALUES
(1, '2023189841', '1234', 'Fatin Aqillah', 'Taman Baiduri', '0167529320', 'fatinadzuan@gmail.com', 1),
(2, '2020892411', '123', 'Ainaa Nasuha', 'Taman Merbok', '0175837603', 'aina@gmail.com', 2),
(3, '123456789', '1234', 'Nurul Amira Shuhada', 'ALOR SETAR', '0167529320', 'ain@gmail.com', 4),
(4, '2020852488', '1234', 'FATIN AQILLAH ADZUAN', 'JITRA', '0174846352', 'fatinadz@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_detail`
--
ALTER TABLE `company_detail`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `internship_detail`
--
ALTER TABLE `internship_detail`
  ADD PRIMARY KEY (`intern_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `level_id` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_detail`
--
ALTER TABLE `company_detail`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internship_detail`
--
ALTER TABLE `internship_detail`
  MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internship_detail`
--
ALTER TABLE `internship_detail`
  ADD CONSTRAINT `internship_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `internship_detail_ibfk_2` FOREIGN KEY (`comp_id`) REFERENCES `company_detail` (`comp_id`);

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `internship_detail` (`intern_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
