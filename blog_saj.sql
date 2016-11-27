-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 07:23 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

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
  `description` varchar(5000) NOT NULL,
  `postImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `description`, `postImage`) VALUES
(16, 5, 'Post1', 'Firefox canâ€™t find the server at github.com.\r\n\r\n    Check the address for typing errors such as ww.example.com instead of www.example.com\r\n    If you are unable to load any pages, check your computerâ€™s network connection.\r\n    If your computer or netw', '14801011281480014643dawateislami-logo.png'),
(17, 5, 'Post1', 'Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸl', '14801033841480005606al-quran-muslim-islam-holy-book-prayer-512.png'),
(18, 5, 'Post 3', 'Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸl', '1480104001light_big.jpg'),
(19, 5, 'Post1', 'Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸlich buddhistische Gesellschaft.Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸlich buddhistische Gesellschaft.Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸlich buddhistische Gesellschaft.Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸlich buddhistische Gesellschaft.Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸlich buddhistische Gesellschaft.Der Buddhismus hat seinen Ursprung in Indien und zielt darauf ab, dass sich die Menschen von Ihrem Leiden fÃ¼r immer befreien kÃ¶nnen. In den beiden Distrikten Spiti und Ladakh lebt, abgegrenzt von der AuÃŸenwelt durch den Himalaya, eine fast ausschlieÃŸlich buddhistische Gesellschaft.', '1480104156images.jpg'),
(20, 2, 'Salam', 'opentype''),url(''../fonts/fontawesome-webfont.woff2?v=4.6.3'') format(''woff2''),url(''../fonts/fontawesome-webfont.woff?v=4.6.3'') format(''woff''),url(''../fonts/fontawesome-webfont.ttf?v=4.6.3'') format(''truetype''),url(''../fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular'') format(''svg'');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul&gt;li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-ms-filter:&quot;progid:DXImageTransform.Microsoft.BasicImage(rotation=1)&quot;;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:&quot;progid:DXImageTransform.Microsoft.BasicImage(rotation=2)&quot;;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:&quot;progid:DXImageTransform.Microsoft.BasicImage(rotation=3)&quot;;-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:&quot;progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)&quot;;-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{-ms-filter:&quot;progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)&quot;;-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:&quot;f000&quot;}.fa-music:before{content:&quot;f001&quot;}.fa-search:before{content:&quot;f002&quot;}.fa-envelope-o:before{content:&quot;f003&quot;}.fa-heart:before{content:&quot;f004&quot;}.fa-star:before{content:&quot;f005&quot;}.fa-star-o:before{content:&quot;f006&quot;}.fa-user:before{content:&quot;f007&quot;}.fa-film:be', '1480107746300x200_ggb_fort_point.jpg'),
(21, 9, 'Post11', 'PHP Get ID of Last Inserted Record - W3Schools\r\nwww.w3schools.com/php/php_mysql_insert_lastid.asp\r\nGet ID of The Last Inserted Record. If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, we can get the ID of the last ...\r\nGet the ID generated in the last query - PHP\r\nphp.net/manual/en/function.mysql-insert-id.php\r\n... (product) values (''kossu'')&quot;); printf(&quot;Last inserted record has id %dn&quot;, mysql_insert_id()); ?&gt; .... How to get ID of the last updated row in MySQL? 75 down vote\r\nâ€ŽMysqli::$insert_id Â· â€ŽPDO::lastInsertId Â· â€ŽMysql_insert_id\r\nPHP: PDO::lastInsertId - Manual\r\nphp.net/manual/en/pdo.lastinsertid.php\r\nIf you''re accessing MSSQL/SQL Server 2008 R2 (or higher) from Linux via FreeTDS there''s a slightly neater way of getting the last insert ID than the solution(s) ...', '1480201293light_big.jpg'),
(22, 9, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nWhy do we use it?\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1480260000index.png'),
(23, 15, 'To DROP a FOREIGN KEY Constraint', 'ALTER TABLE Orders\r\nDROP FOREIGN KEY fk_PerOrders\r\n\r\nSQL Server / Oracle / MS Access:\r\nALTER TABLE Orders\r\nDROP CONSTRAINT fk_PerOrders', '1480265612index.png'),
(24, 16, 'salo Don', 'Where does it come from?\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1480267998light_big.jpg'),
(25, 17, 'Waji', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1480268868300x200_ggb_fort_point.jpg'),
(26, 17, 'Post 99', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '148026920706_BLOG.jpg'),
(27, 17, 'Darsy Nizami', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1480269642ABBY-Free-PSD-Blog-Theme-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Student'),
(2, 'Author '),
(3, 'Admin');

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
(5, 'Jawad', 'Ahmad', 'mrjac1166@gmail.com', 'Abid11223344.', '14800511011479919681p3.jpg', 'male'),
(6, 'jawad', 'ahmad', 'mrjac1166@gmail.com', 'Abid11223344.', '148008574614800515791479919681p3.jpg', 'male'),
(7, 'jawad', 'ahmad', 'mrjac1177@gmail.com', 'Abid1122334455.', '1480194829blogin-template.jpg', 'male'),
(8, 'Abid', 'Nia', 'kinggee244@gmail.com', 'Abid11223344.', '14801951101546-200.png', 'male'),
(9, 'jawad', 'ahmad', 'Abi112233@gmail.com', 'Abid11223344.', '1480195225blogin-template.jpg', 'male'),
(10, 'jawad', 'ahmad', 'mrjac112266@gmail.com', 'Abid11223344.', '1480195462blogin-template.jpg', 'male'),
(11, 'Jadsfasf', 'Abasfsaf', 'wajeehuddin125@gmail.com', 'Abid11223344.', '1480195878dawateislami-logo1.png', 'male'),
(12, 'Jadsfasf', 'sdfasfasf', 'saasf@gmai.com', 'Abid11223344.', '1480196349dawateislami-logo1.png', 'male'),
(13, 'Salman', 'Bahi', 'salo@gmail.com', 'Abid11223344.', '1480202652dawateislami-logo.png', 'male'),
(14, 'Abid', 'Nimat', 'Abi112288@gmail.com', 'Abid11223344.', '1480260256index.png', 'male'),
(15, 'Abid', 'Nimat', 'abi1122557788@gmail.com', 'Abid11223344.', '1480260611index.png', 'male'),
(16, 'Salman', 'Bahi', 'Salo11223344@gmail.com', 'Abid11223344.', '1480267766300x200_ggb_fort_point.jpg', 'male'),
(17, 'Waji', 'Ud  Din Attari', 'waji@gmail.com', 'Abid11223344.', '1480268776images.jpg', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `user_role_id`) VALUES
(2, 15, 1),
(3, 16, 3),
(4, 17, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
