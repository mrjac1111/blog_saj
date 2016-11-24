-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 08:25 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

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
(5, 62, 'Salam', 'asfdadfafdafdsfasfasdf', '14800153841546-200.png');

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
(61, 'jawad', 'ahmad', 'mrjac11111@gmail.com', 'abid', '1479830639light_big.jpg', 'male'),
(62, 'Jawad', 'Ahmad', 'mrjac1111@gmail.com', 'Abid11223344.', '1479834134saj-blog-logo.png', 'male'),
(63, 'jawad', 'ahmad', 'mrjac1144@gmail.com', 'Abid11223344.', '1479919681p3.jpg', 'male'),
(64, 'Abid', 'Niamat', 'Abi1122@gmail.com', 'Abid11223344.', '1479921769dawateislami-logo.png', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
