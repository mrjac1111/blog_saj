-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 08:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saj_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileImage` varchar(50) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstName`, `lastName`, `email`, `password`, `profileImage`, `gender`) VALUES
(1, 'salman', 'salman', 'ms@gmail.com', 'salman', '1', ''),
(2, 'John', 'Doe', 'john@example.com', 'salman', '1', ''),
(3, 'salman', 'salman', 'ms@gmail.com', 'salman', '1', ''),
(4, 'salman', 'salman', 'ms@gmail.com', 'salman', '1', ''),
(5, 'salman', 'salman', 'ms@gmail.com', 'salman', '1', ''),
(6, 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'jawad', ''),
(7, 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'jawad', ''),
(8, 'Salam', 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'MS.MAIL388@GMAIL.COM', 'jawad', ''),
(9, 'Salam', 'Abid', 'mrjac1111@gmail.com', 'ASDASDASD', 'jawad', ''),
(10, 'jawad', 'Ahmad Attari', 'mrjac1111@gmail.com', '12345', 'jawad', ''),
(11, 'Abid', 'Niamat', 'abid@gmail.com', '12345', 'jawad', ''),
(12, '', '', '', '', 'jawad', ''),
(13, '', '', '', '', 'jawad', ''),
(14, 'Abid', 'Niamat', 'abid@gmail.com', '1223423', 'jawad', ''),
(15, 'Abid', 'Niamat', 'abid@gmail.com', '12345', 'jawad', ''),
(16, 'Abid', 'Niamat', 'abid@gmail.com', '12324', 'jawad', ''),
(17, 'Salam', 's', 's@gmail.com', '23213', 'jawad', ''),
(18, 'Salam', 's', 's@gmail.com', 'afsdf', 'jawad', ''),
(19, '', '', '', '', 'jawad', ''),
(20, '', '', '', '', 'jawad', ''),
(21, '', '', '', '', 'jawad', ''),
(22, '', '', '', '', 'jawad', ''),
(23, '', '', '', '', 'jawad', ''),
(24, '', '', '', '', 'jawad', ''),
(25, '', '', '', '', 'jawad', ''),
(26, '', '', '', '', 'jawad', ''),
(27, '', '', '', '', 'jawad', ''),
(28, 'jawad', 'ahmad', 'mrjac1111@gmail.com', '212313', 'jawad', ''),
(29, 'jawad', 'ahmad', 'mrjac1111@gmail.com', '3123123', 'jawad', ''),
(30, 'jawad', 'ahmad', 'mrjac1111@gmail.com', '123', 'jawad', ''),
(31, 'jawad', 'ahmad', 'mrjac1111@gmail.com', '', 'jawad', ''),
(32, 'asdf', '', 'adf@gmail.com', '123', 'jawad', ''),
(33, 'asdf', '', 'adf@gmail.com', '', 'jawad', ''),
(34, 'Jawad', '', 'measfdf@asfasf.com', '', 'jawad', ''),
(35, 'Jawad', '', 'measfdf@asfasf.com', 'Jawad1122', 'jawad', ''),
(36, 'Jawad', 'Ahmad', 'adf@gmail.com', 'jAWAD1122', 'jawad', ''),
(37, 'sd', 'Ahmad', 'as@gmail.com', 'Salman123', 'jawad', ''),
(38, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid112233', 'jawad', ''),
(39, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(40, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(41, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(42, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(43, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(44, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(45, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(46, 'Jawad', 'Ahmad', 'mrjac1111@gmail.com', 'Abid14432', 'jawad', ''),
(47, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14322', 'jawad', ''),
(48, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14322', 'jawad', ''),
(49, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14322', 'jawad', ''),
(50, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid14322', 'jawad', ''),
(51, 'Abid', 'Ahmad', 'mrjac1111@gmail.com', 'Abid143221', 'jawad', ''),
(52, 'Jawad', 'Ahmad', 'measfdf@asfasf.com', 'Abid112233.', '1478769354magazine-blog-template.jpg', 'male'),
(53, 'jawad', 'ahmad', 'mrjac1111@gmail.com', 'Abid112233.', '147876976806_BLOG.jpg', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
