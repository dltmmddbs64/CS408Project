-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 11:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultystaffdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultystaff`
--

CREATE TABLE `facultystaff` (
  `id` int(11) NOT NULL,
  `pos` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultystaff`
--

INSERT INTO `facultystaff` (`id`, `pos`, `name`, `title`, `office`, `phone`, `email`, `courses`, `review`) VALUES
(1, 'Permanent Faculty', 'Tingting Chen', 'Assistant Professor', '8-09', '(909) 869-4842', 'tingtingchen@cpp.edu', NULL, NULL),
(2, 'Permanent Faculty', 'Mohammad Husain', 'Associate Professor', '8-41', '(909) 869-2022', 'mihusain@cpp.edu', NULL, NULL),
(3, 'Permanent Faculty', 'Sampath Jayarathna', 'Assistant Professor', '8-46', '(909) 869-3145', 'ukjayarathna@cpp.edu', NULL, NULL),
(4, 'Permanent Faculty', 'Hao Ji', 'Assistant Professor', '8-42', '(909) 869-5521', 'hji@cpp.edu', NULL, NULL),
(5, 'Permanent Faculty', 'Robert W. Kerbs', 'Interim Associate Dean in the College of Science; Professor of Computer Science', '8-3', '(909) 869-3697', 'rwkerbs@cpp.edu', NULL, NULL),
(6, 'Permanent Faculty', 'Ryan McCune', 'Assistant Professor', '8-44', '(909) 869-3441', 'rrmccune@cpp.edu', NULL, NULL),
(7, 'Permanent Faculty', 'Amar Raheja', 'Professor', '8-10', '(909) 869-4412', 'raheja@cpp.edu', NULL, NULL),
(8, 'Permanent Faculty', 'Craig A. Rich', 'Professor Emeritus', '8-47', '(909) 869-3447', 'carich@cpp.edu', NULL, NULL),
(9, 'Permanent Faculty', 'Salam Salloum', 'Professor', '8-13', '(909) 869-5317', 'ssalloum@cpp.edu', NULL, NULL),
(10, 'Permanent Faculty', 'Daisy F. Sang', 'Interim Chair and Professor of Computer Science', '8-49', '(909) 869-3469', 'fcsang@cpp.edu', NULL, NULL),
(11, 'Permanent Faculty', 'Mandayam A. Srinivas', 'Professor Emeritus', '8-47', '(909) 869-3437', 'masrinivas@cpp.edu', NULL, NULL),
(12, 'Permanent Faculty', 'Yu Sun', 'Assistant Professor', '8-42', '(909) 869-3449', 'yusun@cpp.edu', NULL, NULL),
(13, 'Permanent Faculty', 'Fang \"Daisy\" Tang', 'Associate Professor', '8-11', '(909) 869-2157', 'ftang@cpp.edu', NULL, NULL),
(14, 'Permanent Faculty', 'Lan Yang', 'Professor', '8-12', '(909) 869-4052', 'lyang@cpp.edu', NULL, NULL),
(15, 'Permanent Faculty', 'Gilbert S. Young', 'Professor & Graduate Coordinator', '8-14', '(909) 869-4413', 'gsyoung@cpp.edu', NULL, NULL),
(16, 'Lecturers', 'Dominick A. Atanasio', 'Lecturer', '8-45', '(909) 879-5519', 'daatanasio@cpp.edu', NULL, NULL),
(17, 'Lecturers', 'Patrice Bremond-Gregoire', 'Lecturer', '8-40', '(909) 869-3451', 'patriceb@cpp.edu', NULL, NULL),
(18, 'Lecturers', 'Nima Davarpanah', 'Lecturer', '8-43', '(909) 869-4195', 'ndavarpanah@cpp.edu', NULL, NULL),
(19, 'Lecturers', 'Tony Diaz', 'Lecturer', '8-45', '(909) 879-5519', 'tadiaz@cpp.edu', NULL, NULL),
(20, 'Lecturers', 'Sander Eller', 'Lecturer', '8-43', '(909) 869-4195', 'smeller@cpp.edu', NULL, NULL),
(21, 'Lecturers', 'John Fisher', 'Lecturer', '8-43', '(909) 869-4195', 'jrfisher@cpp.edu', NULL, NULL),
(22, 'Lecturers', 'David S. Garland', 'Lecturer', '8-204', '(909) 869-5597', 'dsgarland@cpp.edu', NULL, NULL),
(23, 'Lecturers', 'David A. Gershman', 'Lecturer', '8-45', '(909) 879-5519', 'dagershman@cpp.edu', NULL, NULL),
(24, 'Lecturers', 'Steve P. Jankly', 'Lecturer', '8-40', '(909) 869-3451', 'spjankly@cpp.edu', NULL, NULL),
(25, 'Lecturers', 'Asha Khakpour', 'Lecturer', '8-45', '(909) 879-5519', 'akhakpour@cpp.edu', NULL, NULL),
(26, 'Lecturers', 'Thanh Nguyen', 'Lecturer', '8-40', '(909) 869-3451', 'tvnguyen7@cpp.edu', NULL, NULL),
(27, 'Lecturers', 'Nick Pantic', 'Lecturer', '8-43', '(909) 869-4195', 'nmpantic@cpp.edu', NULL, NULL),
(28, 'Lecturers', 'Gilberto Perez', 'Lecturer', '8-43', '(909) 869-4195', 'gilbertperez@cpp.edu', NULL, NULL),
(29, 'Lecturers', 'Edwin Rodríguez', 'Lecturer', '8-40', '(909) 869-3451', 'earodriguez@cpp.edu', NULL, NULL),
(30, 'Lecturers', 'Hussain Zaidi', 'Lecturer', '8-40', '(909) 869-3451', 'hmzaidi@cpp.edu', NULL, NULL),
(31, 'Staff', 'Advising Center', 'Undergraduate Advisor', '3-1645', '(909) 979-5654', 'sci_advising@cpp.edu', NULL, NULL),
(32, 'Staff', 'Nam Kim', 'Information Technology Consultant', '8-51A', '(909) 869-4692', 'namkim@cpp.edu', NULL, NULL),
(33, 'Staff', 'Annie Montes', 'Administrative Support Coordinator', '8-49B', '(909) 869-3438', 'amontes@cpp.edu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultystaff`
--
ALTER TABLE `facultystaff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facultystaff`
--
ALTER TABLE `facultystaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
