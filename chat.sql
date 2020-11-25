-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`user_1`, `user_2`) VALUES
(5, 1),
(5, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `user_id` varchar(3) NOT NULL,
  `user_id_2` varchar(3) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `text`, `user_id`, `user_id_2`, `photo`, `name`, `time`) VALUES
(1, 'Quarantine again', '3', '4', 'images/girl.png', 'Nastya', '2020-10-23 23:25:25'),
(2, 'Hello!', '1', '5', 'images/user.png', 'Ivan', '2020-10-23 23:25:25'),
(3, 'how are things going', '4', '2', 'images/user.png', 'Peter', '2020-10-23 23:25:25'),
(4, 'How are exams', '2', '1', 'images/girl.png', 'Katya', '2020-10-23 23:25:25'),
(75, 'Готов к завтрашнему колоквиуму с матана? ', '5', '2', 'images/girl.png', 'Katya', '2020-11-15 11:36:41'),
(76, 'Такое, спишу наверное', '2', '5', 'images/user.png', 'Viktor', '2020-11-15 11:36:41'),
(90, 'hello\r\n', '5', '4', '', '', '2020-11-15 13:08:17'),
(97, 'how u doing', '5', '4', '', '', '2020-11-15 13:16:29'),
(111, '', '5', '1', '', '', '2020-11-20 00:03:43'),
(112, '', '5', '1', '', '', '2020-11-20 00:03:46'),
(113, '', '5', '1', '', '', '2020-11-20 15:11:51'),
(114, '', '5', '1', '', '', '2020-11-20 15:12:52'),
(115, '', '5', '1', '', '', '2020-11-20 15:15:34'),
(116, '[object HTMLTextAreaElement]', '[ob', '[ob', '', '', '2020-11-20 16:47:34'),
(117, 'test\n', '5', '1', '', '', '2020-11-20 16:58:55'),
(118, 'Test 2', '5', '1', '', '', '2020-11-20 17:02:04'),
(119, 'Test 2', '5', '1', '', '', '2020-11-20 17:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `polzovateli`
--

CREATE TABLE `polzovateli` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polzovateli`
--

INSERT INTO `polzovateli` (`id`, `name`, `phone`, `email`, `photo`, `password`) VALUES
(1, 'Ivan', '55555', '25325', 'images/user.png', ''),
(2, 'Katya', '2352352', '523253523', 'images/girl.png', ''),
(3, 'Nastya', '48562', 'nas@i.ua', 'images/girl.png', '1'),
(4, 'Peter', '785496', 'pet@i.ua', 'images/user.png', ''),
(5, 'Viktor', '999999', 'V@i.ua', 'images/user.png', '999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD UNIQUE KEY `user_1` (`user_1`,`user_2`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polzovateli`
--
ALTER TABLE `polzovateli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `polzovateli`
--
ALTER TABLE `polzovateli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
