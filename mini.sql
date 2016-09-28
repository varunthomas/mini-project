-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 05:30 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `alcanswers`
--

CREATE TABLE IF NOT EXISTS `alcanswers` (
  `anskey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alctestpaper`
--

CREATE TABLE IF NOT EXISTS `alctestpaper` (
`id` int(10) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alctestpaper`
--

INSERT INTO `alctestpaper` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, '\r\nWhat is full form of DFA?', 'Dynamic First Axiom', 'Deterministic finite automata', 'No full form', 'dont know', 'Deterministic finite automata'),
(2, '\r\nWho asdf erktj?', 'hdjd', 'nene', 'djxj', 'ssnm', 'ssnm');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
`rollno` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `maths` decimal(10,3) DEFAULT NULL,
  `dsa` decimal(10,3) DEFAULT NULL,
  `alc` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`rollno`, `name`, `maths`, `dsa`, `alc`) VALUES
(1, 'Anish Praveen', '80.350', '56.000', '80.000'),
(2, 'Eby Joseph', '99.450', '96.320', '98.760'),
(3, 'Sahal Edavana', '67.430', '54.450', '95.320'),
(4, 'Varun Thomas', '66.540', '100.000', '100.000');

-- --------------------------------------------------------

--
-- Table structure for table `dsaanswers`
--

CREATE TABLE IF NOT EXISTS `dsaanswers` (
  `anskey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dsatestpaper`
--

CREATE TABLE IF NOT EXISTS `dsatestpaper` (
  `question` text NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsatestpaper`
--

INSERT INTO `dsatestpaper` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
('\r\nWhat is complexity of binary search?', 'O(logn)', 'O(n*n)', 'O(nlogn)', 'O(n)', 'O(logn)'),
('Which language can be used for programming Josephson''s problem?', 'Java', 'C++', 'C', 'Python', 'Java'),
('\r\nWhaysdfj dkfkad dhfh?', 'msd', 'akjgd', 'msad', 'jsdhhd', 'msd');

-- --------------------------------------------------------

--
-- Table structure for table `mathanswers`
--

CREATE TABLE IF NOT EXISTS `mathanswers` (
  `anskey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mathtestpaper`
--

CREATE TABLE IF NOT EXISTS `mathtestpaper` (
  `question` text NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mathtestpaper`
--

INSERT INTO `mathtestpaper` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
('\r\nWhat is (a+b)^2?', 'a2+b2+2ab', 'a2+b2-2ab', 'a3-b3', 'a2+b2', 'a2+b2+2ab'),
('\r\nwhat is pythagoras theorm?', 'a9=b9', 'a3-b3=2', 'a2+b2=c2', 'a+b-c=d2', 'a2+b2=c2');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `answer2` varchar(50) NOT NULL,
  `answer3` varchar(50) NOT NULL,
  `answer4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`) VALUES
(1, 'What does PHP stand for?', 'Personal Home Page', 'Personal Hypertext Processor', 'Private Home Page', 'PHP: Hypertext Preprocessor', '4'),
(2, 'How do you write "Hello World" in PHP', 'Document.Write("Hello World");', 'echo "Hello World";', '"Hello World";', '"Hello World";', '2'),
(3, 'The PHP syntax is most similar to:', 'VBScript', 'JavaScript', 'Perl and C', 'Perl and C', '3'),
(4, 'How do you get information from a form that is submitted using the "get" method?', 'Request.Form;', '$_GET[];', 'Request.QueryString;', 'Request.QueryString;', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sess`
--

CREATE TABLE IF NOT EXISTS `sess` (
`id` int(10) NOT NULL,
  `dsamark` int(10) NOT NULL,
  `alcmark` int(10) NOT NULL,
  `mathmark` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sess`
--

INSERT INTO `sess` (`id`, `dsamark`, `alcmark`, `mathmark`, `name`) VALUES
(1, 39, 43, 49, 'Anish Praveen'),
(2, 48, 49, 46, 'Eby Joseph'),
(3, 45, 37, 20, 'Sahal Edavana'),
(4, 38, 50, 50, 'Varun Thomas');

-- --------------------------------------------------------

--
-- Table structure for table `stlogin`
--

CREATE TABLE IF NOT EXISTS `stlogin` (
`rollno` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stlogin`
--

INSERT INTO `stlogin` (`rollno`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'anish', 'praveen', 'Anish', 'Praveen'),
(2, 'eby', 'joseph', 'Eby', 'Joseph'),
(3, 'sahal', 'edavana', 'Sahal', 'Edavana'),
(4, 'varun', 'thomas', 'Varun', 'Thomas');

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE IF NOT EXISTS `tlogin` (
`id` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`id`, `username`, `password`, `fname`) VALUES
(1, 'shilja', 'dsa', 'Shilja'),
(2, 'jayasree', 'os', 'Jayasree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alctestpaper`
--
ALTER TABLE `alctestpaper`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sess`
--
ALTER TABLE `sess`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stlogin`
--
ALTER TABLE `stlogin`
 ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `tlogin`
--
ALTER TABLE `tlogin`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alctestpaper`
--
ALTER TABLE `alctestpaper`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
MODIFY `rollno` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sess`
--
ALTER TABLE `sess`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stlogin`
--
ALTER TABLE `stlogin`
MODIFY `rollno` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tlogin`
--
ALTER TABLE `tlogin`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
