-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 06:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_saj`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `postImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `description`, `postImage`) VALUES
(1, 62, 'sdadfasf', 'sdafaasdasdfaf', '1480011993frontpage-header@0,5x.png'),
(2, 62, 'Salam', 'asdfsdfafsd', '1480014500frontpage-header@0,5x.png'),
(3, 62, 'Salam', 'asfasfasfdasf', '1480014643dawateislami-logo.png'),
(4, 62, 'Salam', 'safdasfafadsfasf', '1480015334al-quran-muslim-islam-holy-book-prayer-512.png'),
(5, 62, 'Salam', 'asfdadfafdafdsfasfasdf', '14800153841546-200.png'),
(6, 0, '', '', ''),
(7, 0, '', '', ''),
(8, 0, '', '', ''),
(9, 5, '', '', '14800518721479919681p3.jpg'),
(10, 5, '', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', '14800521901479919681p3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`, `profileImage`, `gender`) VALUES
(1, 'Jawad', 'Ahmad', 'mrjac1111@gmail.com', 'Abid11223344.', '14800488501479921656dawateislami-logo.png', 'male'),
(2, 'Abid', 'Niamat', 'abi1122@gmail.com', 'Abid11223344.', '1480049709147939960512108222_446611458878743_3898628819874068549_n.jpg', 'male'),
(3, 'Jawad', 'Ahmad', 'mrjac1144@gmail.com', 'Abid11223344.', '14800504861479919681p3.jpg', 'male'),
(4, 'Jawad', 'Ahmad', 'mrjac1155@gmail.com', 'Abid11223344.', '14800509551479919681p3.jpg', 'male'),
(5, 'Jawad', 'Ahmad', 'mrjac1166@gmail.com', 'Abid11223344.', '14800511011479919681p3.jpg', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
