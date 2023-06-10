-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 06:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `course`, `hobby`, `contact`, `email`, `address`, `password`) VALUES
(1, 'sunil', 'Male', 'BBA', 'Programming,Watching Movies,Cricket,Hockey', '2147483647', 'skpal@gmail.com', 'gfgfgff', ''),
(2, 'sunil', 'Male', 'MCA', 'Programming,Watching Movies', '2147483647', 'skpal@gmail.com', 'jkjhkh', ''),
(3, 'sunil', 'Male', 'MCA', 'Programming,Watching Movies', '9990052521', 'skpal@gmail.com', 'jkjhkh', ''),
(4, 'sunil', 'Male', 'BCA', 'Programming,Watching Movies,Cricket,Hockey', '9990052521', 'skpal.sunilkumar@gmail.com', 'dfsfgfd', ''),
(5, 'sunil', 'Male', 'BTech', 'Programming,Watching Movies', '9990052521', 'skpal@gmail.com', 'asdasd', ''),
(6, 'sunil', 'female', 'MCA', 'Programming,Watching Movies,Cricket', '9990052521', 'skpal@gmail.com', 'dfsdffgtrtert', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
