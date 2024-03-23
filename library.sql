-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 11:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libray`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
('', '', '', '', '', ''),
('09876', 'Bizuayehu', 'Mamuye', 'buze', 'Bizuayehuagide@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `book_status` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author`, `book_status`, `edition`, `quantity`, `type`) VALUES
('0931', 'java', 'Zewdu', ' available', '5th', 1, 'Health and Wellness'),
('432', 'ip2', 'dsf', 'available', '5th', 1, 'Biography'),
('7654', 'Numerics', 'james', 'available', '7th', 1, 'Fiction'),
('7655', 'algebra', 'james', 'available', '8th', 8, 'Health and Wellness'),
('7659', 'Automata', 'kebede', 'available', '3rd', 981, 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `Id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `book_id` varchar(100) NOT NULL,
  `approve` varchar(50) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return_book` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`Id`, `username`, `book_id`, `approve`, `issue`, `return_book`) VALUES
(38, 'nigus', '7659', 'Approved', '2022-08-08', '2022-08-09'),
(39, 'nigus', '7654', 'Approved', '2022-08-10', '2022-08-10'),
(40, 'nigus', '7659', 'Approved', '2022-08-08', '2022-08-09'),
(41, 'nigus', '7659', 'Approved', '2022-08-08', '2022-08-09'),
(42, 'nigus', '432', 'Approved', '2022-08-09', '2022-08-16'),
(43, 'buze', '0931', 'Approved', '2022-09-07', '2022-09-21'),
(44, 'itisme', '0931', 'Approved', '2022-10-20', '2022-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `mybooks`
--

CREATE TABLE `mybooks` (
  `book_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mybooks`
--

INSERT INTO `mybooks` (`book_id`, `username`, `date`, `status`) VALUES
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('7659', 'nigus', '0000-00-00', 'returned'),
('7659', 'nigus', '2022-08-10', 'returned'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued'),
('', '', '0000-00-00', 'issued');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `phone_Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `lastname`, `username`, `email`, `password`, `userid`, `phone_Number`) VALUES
('Bizuayehu', 'Mamuye', 'Buze', 'biauayehu@gmail.com', '123', '01075', 969063839),
('Bizuayehu Mamuye', 'Agde', 'bizuayehu', 'Bizuayehuagide@gmail.com', 'bbbmmm', '01075/12', 0),
('Bizuayehu Mamuye', 'Agde', 'bizuayehu', 'Bizuayehuagide@gmail.com', 'bbbmmm', '01075/12', 969063839),
('', '', 'biniam', '', 'bbbmmm', '', 0),
('', '', 'henok', '', 'bbbmmm', '', 0),
('', '', 'biniamsfj', '', 'wrnflrsf', '', 0),
('Awigchrew', 'Behailu', 'awigchew', 'awigchew@gmail.com', '123456', 'GUR/00473', 922325640),
('', 'rwet', 'wet', '', 'te', '', 0),
('', '', 'wer', '', 'ercqr', '', 0),
('', '', '32rcr', '', 'wtrwv', '', 0),
('', 'cw', 'erc', '', 'wr', '', 0),
('', 'ywqcgd', 'fsd', '', 'ewf', '', 0),
('', 'fs ,d', 'hnf.kd', '', 'werlnw', '', 0),
('', 'hn', 'kj,n', '', 'jkn', '', 0),
('', 'jhbbb', 'nn', '', '0', '', 0),
('', '', 'ukjn', 'mb@gmil.com', 'yes', '', 0),
('', '', 'hello', '', 'nigus', '', 0),
('', '', 'ayele', '', 'masresha', '', 0),
('', '', '5w34t', '', '4wtw5e', '', 0),
('Muse', 'Semu', ' jm;lk', 'muse@gmail.com', '11234', 'Gur/00964', 2147483647),
('Nigus', 'Dibekulu', 'nigus', 'nigus@gmail.com', '123456', 'GUR/00473', 2147483647),
('', '', 'helo', 'rewt@gmail', 'twte', '', 0),
('Elias ', 'Yohannes', 'elias', 'Elias@gmail.com', '123', 'GUR/01198/12', 968430765),
('kirubel', 'kinfe', 'kirukira', 'kirukira@kira.com', 'kirukira', '00347', 0),
('biniyam ', 'nahusenay ', 'kebt', 'binniyamoliGreat@gamail.com', '1234', 'gur/00473/12', 0),
('King', 'Dibekulu', 'kira', 'kirukira@kira.com', '12345', 'gur/00473/12', 0),
('ayele', 'masreha', 'aa', 'aa@gm', '1234567', '12', 0),
('Worku', 'almaw', 'werku', 'worku@gmail.com', '123123', 'GUR/01198/12', 0),
('qwreeqw', 'erqdwe', 'ewrqw', 'ewrfe@greg', 'ewtwre', 'rwgfws', 0),
('4wtraw', 'ewrad', 'wera', 'weraf@gmsdgdnf', 'rwsaf', 'weqrfw', 0),
('rtuwrw', 'twg5egy5g6te', '56gte5t', '5hyg5@gmdcpom', '5645e', '5747', 0),
('Rca', 'dcrc', 'wrcA', 'WQRecd@gmsd', 'w', 'ewrqew', 0),
('getahun', 'gobeze', 'itisme', 'getahungobeze@gmail.com', '43112850', '366788', 0),
('getahun', 'gobeze', 'rrrt', 'getahungobeze@gmail.com', '765', '366788', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
