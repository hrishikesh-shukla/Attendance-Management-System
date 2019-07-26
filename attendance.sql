-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2019 at 09:14 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `markattendance`
--

DROP TABLE IF EXISTS `markattendance`;
CREATE TABLE IF NOT EXISTS `markattendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `enrollment` varchar(11) NOT NULL,
  `markedBy` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markattendance`
--

INSERT INTO `markattendance` (`id`, `date`, `enrollment`, `markedBy`, `attendance`) VALUES
(1, '08-07-2019', '00224802017', '', 'P'),
(2, '08-07-2019', '00424802017', '', 'A'),
(3, '08-07-2019', '00524802017', '', 'P'),
(4, '08-07-2019', '00724802017', '', 'A'),
(5, '08-07-2019', '00824802017', '', 'P'),
(6, '08-07-2019', '00924802017', '', 'A'),
(7, '08-07-2019', '01024802017', '', 'P'),
(8, '08-07-2019', '01124802017', '', 'A'),
(9, '08-07-2019', '01224802017', '', 'P'),
(10, '08-07-2019', '01324802017', '', 'A'),
(11, '08-07-2019', '01524802017', '', 'P'),
(12, '08-07-2019', '01724802017', '', 'A'),
(13, '08-07-2019', '04224802017', '', 'P'),
(14, '08-07-2019', '00224802017', '', 'P'),
(15, '08-07-2019', '00224802017', '', 'P'),
(16, '08-07-2019', '00424802017', '', 'P'),
(17, '08-07-2019', '00524802017', '', 'A'),
(18, '08-07-2019', '00724802017', '', 'A'),
(19, '08-07-2019', '00824802017', '', 'A'),
(20, '08-07-2019', '00924802017', '', 'A'),
(21, '08-07-2019', '01024802017', '', 'P'),
(22, '08-07-2019', '01124802017', '', 'P'),
(23, '08-07-2019', '01224802017', '', 'P'),
(24, '08-07-2019', '01324802017', '', 'P'),
(25, '08-07-2019', '01524802017', '', 'A'),
(26, '08-07-2019', '01724802017', '', 'A'),
(27, '08-07-2019', '04224802017', '', 'A'),
(28, '08-07-2019', '04224802017', '', 'P'),
(29, '08-07-2019', '01224802017', '', 'P'),
(30, '08-07-2019', '01324802017', '', 'P'),
(31, '08-07-2019', '01524802017', '', 'P'),
(32, '08-07-2019', '01724802017', '', 'P'),
(33, '08-07-2019', '01724802017', '', 'P'),
(34, '08-07-2019', '00224802017', '', 'P'),
(35, '08-07-2019', '00424802017', '', 'P'),
(36, '08-07-2019', '01024802017', '', 'P'),
(37, '08-07-2019', '01124802017', '', 'P'),
(38, '08-07-2019', '00224802017', '', 'P'),
(39, '09-07-2019', '00724802017', '', 'P'),
(40, '09-07-2019', '00824802017', '', 'P'),
(41, '09-07-2019', '01624802017', '', 'P'),
(42, '09-07-2019', '01624802017', '', 'P'),
(43, '09-07-2019', '00624802017', '', 'P'),
(44, '09-07-2019', '05324802017', '', 'P'),
(45, '09-07-2019', '01624802017', '', 'P'),
(46, '09-07-2019', '00524802017', '', 'A'),
(47, '09-07-2019', '00724802017', '', 'A'),
(48, '09-07-2019', '00824802017', '', 'P'),
(49, '09-07-2019', '00924802017', '', 'P'),
(50, '09-07-2019', '00824802017', '', 'P'),
(51, '09-07-2019', '01224802017', '', 'P'),
(52, '09-07-2019', '00324802017', '', 'P'),
(53, '09-07-2019', '00624802017', '', 'P'),
(54, '09-07-2019', '00524802017', '', 'A'),
(55, '09-07-2019', '00624802017', '', 'P'),
(56, '09-07-2019', '04224802017', '', 'A'),
(57, '09-07-2019', '05324802017', '', 'P'),
(58, '09-07-2019', '01624802017', '', 'A'),
(59, '09-07-2019', '00524802017', '', 'P'),
(60, '09-07-2019', '00724802017', '', 'A'),
(61, '09-07-2019', '01624802017', '', 'P'),
(62, '09-07-2019', '00524802017', '', 'A'),
(63, '09-07-2019', '00724802017', '', 'P'),
(64, '09-07-2019', '01124802017', '', 'P'),
(65, '09-07-2019', '01224802017', '', 'P'),
(66, '09-07-2019', '00324802017', '', 'A'),
(67, '09-07-2019', '00624802017', '', 'A'),
(68, '09-07-2019', '00624802017', '', 'P'),
(69, '09-07-2019', '04224802017', '', 'A'),
(70, '09-07-2019', '05324802017', '', 'P'),
(71, '09-07-2019', '00524802017', '', 'P'),
(72, '09-07-2019', '00724802017', '', 'A'),
(73, '09-07-2019', '00824802017', '', 'A'),
(74, '09-07-2019', '00924802017', '', 'P'),
(75, '09-07-2019', '01124802017', '', 'A'),
(76, '09-07-2019', '01224802017', '', 'A'),
(77, '09-07-2019', '00324802017', '', 'A'),
(78, '09-07-2019', '00624802017', '', 'A'),
(79, '09-07-2019', '04224802017', '', 'P'),
(80, '09-07-2019', '05324802017', '', 'A'),
(81, '09-07-2019', '01624802017', '', 'P'),
(82, '09-07-2019', '00524802017', '', 'A'),
(83, '09-07-2019', '00724802017', '', 'A'),
(84, '09-07-2019', '01624802017', '', 'P'),
(85, '09-07-2019', '01024802017', '', 'P'),
(86, '10-07-2019', '03924802017', '', 'P'),
(87, '10-07-2019', '01424802017', '', 'P'),
(88, '10-07-2019', '03924802017', '', 'A'),
(89, '11-07-2019', '01624802017', '', 'A'),
(90, '12-07-2019', '01424802017', '', 'P'),
(91, '12-07-2019', '03924802017', '', 'A'),
(92, '12-07-2019', '09824802017', '', 'P'),
(93, '12-07-2019', '01424802017', '', 'P'),
(94, '12-07-2019', '03924802017', '', 'A'),
(95, '12-07-2019', '09824802017', '', 'P'),
(96, '12-07-2019', '01424802017', '', 'P'),
(97, '12-07-2019', '01424802017', '', 'A'),
(98, '12-07-2019', '01424802017', '', 'P'),
(150, '11-07-2019', '01624802017', 'sunita', 'A'),
(124, '12-07-2019', '03924802017', 'dipankar', 'A'),
(123, '12-07-2019', '01424802017', 'dipankar', 'P'),
(151, '11-07-2019', '00224802017', 'sunita', 'P'),
(136, '09-07-2019', '03424802017', 'sunita', 'P'),
(135, '09-07-2019', '05324802017', 'sunita', 'P'),
(134, '09-07-2019', '04224802017', 'sunita', 'A'),
(133, '09-07-2019', '00624802017', 'sunita', 'A'),
(132, '09-07-2019', '00324802017', 'sunita', 'P'),
(131, '09-07-2019', '01224802017', 'sunita', 'P'),
(130, '09-07-2019', '00924802017', 'sunita', 'A'),
(129, '09-07-2019', '00724802017', 'sunita', 'A'),
(128, '09-07-2019', '00524802017', 'sunita', 'P'),
(127, '09-07-2019', '00124802017', 'sunita', 'P'),
(126, '09-07-2019', '00224802017', 'sunita', 'A'),
(125, '09-07-2019', '01624802017', 'sunita', 'P'),
(117, '09-07-2019', '01424802017', 'dipankar', 'P'),
(118, '09-07-2019', '03924802017', 'dipankar', 'A'),
(119, '10-07-2019', '01424802017', 'dipankar', 'A'),
(120, '10-07-2019', '03924802017', 'dipankar', 'A'),
(121, '11-07-2019', '01424802017', 'dipankar', 'P'),
(122, '11-07-2019', '03924802017', 'dipankar', 'P'),
(139, '10-07-2019', '00124802017', 'sunita', 'P'),
(140, '10-07-2019', '00524802017', 'sunita', 'A'),
(141, '10-07-2019', '00724802017', 'sunita', 'A'),
(142, '10-07-2019', '00924802017', 'sunita', 'P'),
(143, '10-07-2019', '01124802017', 'sunita', 'P'),
(144, '10-07-2019', '01224802017', 'sunita', 'A'),
(145, '10-07-2019', '00324802017', 'sunita', 'A'),
(146, '10-07-2019', '00624802017', 'sunita', 'P'),
(147, '10-07-2019', '04224802017', 'sunita', 'P'),
(148, '10-07-2019', '05324802017', 'sunita', 'P'),
(149, '10-07-2019', '03424802017', 'sunita', 'P'),
(152, '11-07-2019', '00124802017', 'sunita', 'P'),
(153, '11-07-2019', '00524802017', 'sunita', 'P'),
(154, '11-07-2019', '00724802017', 'sunita', 'P'),
(155, '11-07-2019', '00924802017', 'sunita', 'P'),
(156, '11-07-2019', '01124802017', 'sunita', 'A'),
(157, '11-07-2019', '01224802017', 'sunita', 'P'),
(158, '11-07-2019', '00324802017', 'sunita', 'P'),
(159, '11-07-2019', '00624802017', 'sunita', 'P'),
(160, '11-07-2019', '04224802017', 'sunita', 'A'),
(161, '11-07-2019', '05324802017', 'sunita', 'P'),
(162, '11-07-2019', '03424802017', 'sunita', 'P'),
(163, '12-07-2019', '01624802017', 'sunita', 'P'),
(164, '12-07-2019', '00224802017', 'sunita', 'P'),
(165, '12-07-2019', '00124802017', 'sunita', 'A'),
(166, '12-07-2019', '00524802017', 'sunita', 'A'),
(167, '12-07-2019', '00724802017', 'sunita', 'P'),
(168, '12-07-2019', '00924802017', 'sunita', 'A'),
(169, '12-07-2019', '01124802017', 'sunita', 'A'),
(170, '12-07-2019', '01224802017', 'sunita', 'P'),
(171, '12-07-2019', '00324802017', 'sunita', 'A'),
(172, '12-07-2019', '00624802017', 'sunita', 'P'),
(173, '12-07-2019', '04224802017', 'sunita', 'A'),
(174, '12-07-2019', '05324802017', 'sunita', 'A'),
(175, '12-07-2019', '03424802017', 'sunita', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `course` varchar(11) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `email` tinytext NOT NULL,
  `enrollment` varchar(11) NOT NULL,
  `password` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `course`, `semester`, `email`, `enrollment`, `password`) VALUES
(1, 'Hrishikesh', 'Shukla', 'BCA', 3, 'shuklar727@gmail.com', '01624802017', 'student'),
(2, 'Aakashdeep', 'Indauri', 'BCA', 3, 'akkii@gmail.com', '00224802017', 'student'),
(3, 'rahat', 'ali', 'BCA', 3, 'abhn@gmail.com', '00124802017', 'student'),
(4, 'shivani', 'sinha', 'BVOC', 2, 'ssinha@gmail.com', '00424802017', 'student'),
(5, 'shashank', 'purohit', 'BCA', 3, 'spurohit@gmail.com', '00524802017', 'student'),
(6, 'mannat', 'dhingra', 'BCA', 3, 'mannatd@gmail.com', '00724802017', 'student'),
(7, 'siddharth', 'singh', 'BVOC', 1, 'ssingh@gmail.com', '00824802017', 'student'),
(8, 'preeti', 'gupta', 'BCA', 3, 'pgupta@gmail.com', '00924802017', 'student'),
(9, 'aashish', 'sundri', 'BCA', 1, 'asundri@gmail.com', '01024802017', 'student'),
(10, 'ashutosh', 'yadav', 'BCA', 3, 'ashuyadav@gmail.com', '01124802017', 'student'),
(11, 'harshit', 'kumar', 'BCA', 3, 'kumarharshit@gmail.com', '01224802017', 'student'),
(12, 'megha', 'joshi', 'BCA', 2, 'meghajoshi@gmail.com', '01324802017', 'student'),
(13, 'nitin', 'kumar', 'BVOC', 3, 'kumarnitin@gmail.com', '01424802017', 'student'),
(14, 'dishaa', 'chopraa', 'BCA', 3, 'dishachopra@gmail.com', '00324802017', 'student'),
(15, 'simran', 'chopra', 'BCA', 3, 'schopra@gmail.com', '00624802017', 'student'),
(16, 'hemant', 'shah', 'BCA', 2, 'hshah@gmail.com', '03224802017', 'student'),
(17, 'karthik', 'arwin', 'BCA', 3, 'karwina@gmail.com', '04224802017', 'student'),
(18, 'nihir', 'shetty', 'BCA', 3, 'snihir@gmail.com', '05324802017', 'student'),
(19, 'aakashdeep', 'indauriya', 'BCA', 1, 'akky@gmail.com', '02624802017', 'student'),
(20, 'prem', 'chopra', 'BCA', 2, 'premc@gmail.com', '03324802017', 'student'),
(21, 'shafaqat', 'khan', 'BCA', 3, 'skhan@gmail.com', '03424802017', 'student'),
(22, 'md', 'sahib', 'BVOC', 1, 'mdsahib@gmail.com', '03524802017', 'student'),
(23, 'manav', 'khan', 'BVOC', 2, 'manavkhan@gmail.com', '03624802017', 'student'),
(24, 'mayank', 'goel', 'BVOC', 3, 'mgoel@gmail.com', '03924802017', 'student'),
(25, 'vn', 'vn', 'BCA', 1, 'fv@j.g', '09924802017', 'fvhn'),
(26, 'bhuvan', 'bam', 'BCA', 1, 'bb@vines.com', '09824802017', 'dcfv');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `course`, `semester`, `email`, `username`, `password`) VALUES
(1, 'dipankar', 'kumar', 'BVOC', 3, 'kdip@gmail.com', 'kdip', '123'),
(2, 'sunita', 'chaurasiya', 'BCA', 3, 'sunitac@gmail.com', 'sunitac', 'teacher'),
(3, 'monika', 'Rajput', 'BCA', 1, 'mrajput@gmail.com', 'mrajput', 'teacher'),
(4, 'manika', 'sambhor', 'BCA', 2, 'msambhor@gmail.com', 'msambhor', 'teacher'),
(5, 'bhupender', 'singh', 'BVOC', 1, 'bsingh@gmail.com', 'bhupender', 'teacher'),
(6, 'manish', 'jain', 'BVOC', 2, 'mjain@gmail.com', 'mjain', 'teacher'),
(7, 'ranbir', 'singh', 'BVOC', 2, 'rsingh@gmail.com', 'rsingh', 'teacher'),
(8, 'naresh', 'roy', 'BCA', 1, 'dfcgv@fg.h', 'fvhb', 'sdrcf'),
(9, 'hum', 'tum', 'BVOC', 3, 'humtum#gmail.com', 'bj', 'bmj'),
(10, 'demo', 'try', 'BVOC', 2, 'sudhanshuanila@yahoo.co.in', 'bkjk', 'bjk'),
(11, 'gj', 'gj', 'BVOC', 2, 'gj@h.d', 'gj', 'gj'),
(12, 'dery', 'temo', 'BCA', 1, 'sudhanshuanila@yahoo.co.in', 'fyh', 'vhj'),
(14, 'hoho', 'haha', 'BVOC', 2, 'hgh@d.njn', 'kljuh', 'huj'),
(15, 'naresha', 'rai', 'BVOC', 3, 'nrao@yahho.com', 'knj', 'n,j');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
