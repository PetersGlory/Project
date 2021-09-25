-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 11:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `img`, `link`, `date`) VALUES
(1, 'Search Engine', 'This is a Search Engine developed with React, Redux, Firebase, CSS, Material-ui, Axios, and Google api.\r\n\r\nyou can search for any thing you want to search there in the search engine because it\'s associated with google.', 'search.png', 'https://cloned-project-618d5.web.app/', '2021-09-21 07:45:04'),
(2, 'Chat App', 'This is a chat app developed with CSS, React, Redux, Axios, Firebase and Material-ui.\r\n\r\nThis was designed in form of Discord just for fun..', 'Chat.png', 'https://discord-cloned-project.web.app/', '2021-09-21 07:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `intro` text NOT NULL,
  `about` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `skills_intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `intro`, `about`, `img`, `skills_intro`) VALUES
(1, 'Peter Thomas', 'i am a professional Full-Stack Developer based in Ogbomoso, Oyo state.', 'Full Stack Developer with 2+ years of hands-on experience designing, developing, \r\n                and implementing applications and solutions employing a variety of technologies and \r\n                programming languages. Seeking to leverage broad development experience and hands-on \r\n            technical expertise during a challenging role as a Full-stack Developer.', 'peter.png', 'Throughout my coding journey, I\'ve dedicated my time to learn and apply the concepts I\'ve learned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
