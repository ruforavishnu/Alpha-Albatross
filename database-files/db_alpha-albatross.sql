-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2021 at 05:03 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alpha-albatross`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `id` int(11) NOT NULL,
  `taskDescription` varchar(255) DEFAULT NULL,
  `timeStamp` datetime NOT NULL,
  `taskStatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `taskDescription`, `timeStamp`, `taskStatus`) VALUES
(1, 'work on dropshipping #1', '2021-06-08 11:07:59', 'Little-done'),
(2, 'editing task2 ', '2021-06-08 17:19:55', 'Almost-done'),
(4, 'so, i think we have completed the todo app in php', '2021-06-08 18:15:44', 'Not-Begun'),
(8, 'updating task8 #4 and status to almost-done', '2021-06-09 07:55:20', 'Almost-done'),
(9, 'Editing task 9 #3', '2021-06-09 07:55:49', 'Started'),
(11, 'editing task11 #1', '2021-06-09 07:57:33', 'Started'),
(12, 'Get the select option box working #5', '2021-06-09 07:58:10', 'Started'),
(14, 'Test all options of the select element #2', '2021-06-09 07:59:29', 'Half-done'),
(16, 'testing element 16 #1', '2021-06-09 08:00:28', 'Started'),
(17, 'Reach final stage of development', '2021-06-10 12:02:54', 'Completed'),
(18, 'Making the code more effective #4', '2021-06-10 16:36:15', 'Started'),
(19, 'making the code for addTask more effective #1', '2021-06-10 16:37:45', 'Little-done'),
(20, 'starting to write code for retrieveTasks function #1', '2021-06-10 16:39:22', 'Started'),
(21, 'checking if retrieveAllTasks function really worked', '2021-06-10 17:05:53', 'Started'),
(22, 'testing create new task', '2021-06-11 10:07:59', 'Completed'),
(23, 'Add new task to list #1', '2021-06-11 10:18:32', 'Started'),
(24, 'adding new task #2', '2021-06-11 10:19:14', 'Little-done'),
(25, 'Created task ', '2021-06-11 10:19:42', 'Completed'),
(26, 'wrote effective code', '2021-06-11 10:20:11', 'Little-done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
