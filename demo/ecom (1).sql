-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 09:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` smallint(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `img`, `product_name`, `discription`, `price`, `qty`) VALUES
(1, 'samsung m31.jpg', 'samsung m31', 'samsung m31 4g', 10000, 0),
(2, 'samsung m52.jpg', 'samsung m52', 'samsung m53 4g', 11000, 0),
(3, 'samsung m53.jpg', 'samsung m53', 'samsung m53 5G', 25999, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `course`, `hobby`, `contact`, `email`, `address`, `password`) VALUES
(1, 'sunil', 'Male', 'BBA', 'Programming,Watching Movies,Cricket,Hockey', '2147483647', 'skpal@gmail.com', 'gfgfgff', '9090'),
(2, 'sunil', 'Male', 'MCA', 'Programming,Watching Movies', '2147483647', 'skpal@gmail.com', 'jkjhkh', '655655'),
(3, 'sunil', 'Male', 'MCA', 'Programming,Watching Movies', '9990052521', 'skpal@gmail.com', 'jkjhkh', '8998998'),
(4, 'sunil', 'Male', 'BCA', 'Programming,Watching Movies,Cricket,Hockey', '9990052521', 'skpal.sunilkumar@gmail.com', 'dfsfgfd', '232233'),
(5, 'sunil', 'Male', 'BTech', 'Programming,Watching Movies', '9990052521', 'skpal@gmail.com', 'asdasd', '1212121212'),
(6, 'sunil', 'female', 'MCA', 'Programming,Watching Movies,Cricket', '9990052521', 'skpal@gmail.com', 'dfsdffgtrtert', '545445454'),
(7, 'sdsds', 'female', 'BBA', 'Programming,Watching Movies,Cricket', '98989898989', 'skjkj@gmail.com', 'xzfdf', '67676'),
(8, 'arun', 'Male', 'BTech', 'Programming,Cricket', '9990052521', 'arunpal99@gmail.com', 'Rajendra Nagar', '4532'),
(9, 'skpal', 'Male', 'MCA', 'Programming,Watching Movies', '9891043437', 'skpal.sunilkumar@gmail.com', 'shalimar Garden', '9898'),
(10, 'sdsd', '', '', '', '', '', '', ''),
(11, 'sdsds', '', '', '', '', '', '', ''),
(12, 'sdsds', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` smallint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
