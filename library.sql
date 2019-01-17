
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 17, 2019 at 03:55 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `summary` varchar(250) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `category`, `date`, `summary`, `user_id`, `availability`, `image`) VALUES
(36, 'article 2', 'john', 'Science', '2019-01-01', 'jhgfdxsz', 0, 1, '8.png'),
(37, 'article o', 'john', 'Science', '2019-01-04', 'mmmmmmmm', NULL, NULL, 'book1.jpg'),
(38, 'Aris el zain', 'michel', 'Science', '0099-09-09', 'gh', NULL, NULL, 'TheWayUp-cvr.jpg'),
(39, 'Love', 'Ronney', 'History', '2018-04-05', 'mmmmmmmm', NULL, NULL, 'library.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `password`) VALUES
(1, 'jesi@gmail.com', '123'),
(2, 'jesid@gmail.com', '123'),
(3, 'jesid@gmail.com', ''),
(4, '', ''),
(5, 'jesi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `password`, `password_1`) VALUES
(14, 'Muddather', 'mudathermohamed50@gmail.com', '000', '999'),
(15, 'Muddather', 'jon@gmail.com', '890', '567'),
(16, 'Muddather', 'nmudather@yahoo.com', '', ''),
(17, '', '', '', ''),
(18, 'jac', 'root@yahoo.com', '000', '000'),
(19, 'monner', 'nnmudather@yahoo.com', '555', '555'),
(20, 'jesi', 'jesi@gmail.com', '123', '123'),
(21, 'dockins', 'raat@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users_listes`
--

CREATE TABLE `users_listes` (
  `id` int(11) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nb_book` int(11) NOT NULL,
  `lists_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_listes`
--

INSERT INTO `users_listes` (`id`, `last_name`, `first_name`, `code`, `nb_book`, `lists_books`) VALUES
(1, 'Retchard', 'dockinsd', 'cj9dma6b)', 2, 0),
(5, 'husein', 'dockins', 'cj9dma6b)', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_listes`
--
ALTER TABLE `users_listes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_listes`
--
ALTER TABLE `users_listes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
