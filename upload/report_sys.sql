-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 10:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `prob_id` int(11) NOT NULL,
  `prob_date` varchar(32) NOT NULL,
  `prob_time` varchar(32) NOT NULL,
  `prob_pic` varchar(32) NOT NULL,
  `prob_id_user` int(32) NOT NULL,
  `prob_dis` varchar(16) NOT NULL,
  `prob_event` varchar(32) NOT NULL,
  `prob_resu` varchar(32) NOT NULL,
  `prob_repo_user_id` varchar(32) NOT NULL,
  `prob_repo_date` varchar(32) NOT NULL,
  `prob_repo_advice` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`prob_id`, `prob_date`, `prob_time`, `prob_pic`, `prob_id_user`, `prob_dis`, `prob_event`, `prob_resu`, `prob_repo_user_id`, `prob_repo_date`, `prob_repo_advice`) VALUES
(1, '', '', '1', 3, '1', '1', 'awess', '0', '', 'w12'),
(5, '', '', 'prob_pic', 0, '3', '3', '3', '3', '', 'awd'),
(8, '', '', 'prob_pic', 0, '1', '23', '45', '656', '', '7'),
(9, '', '', 'prob_pic', 0, '', '', '', '', '', ''),
(12, '2024-07-10', '17:00', 'upload/20240724_100103aa.jpg', 3, 'awd', 'awd', 'awd', 'awd', '2024-07-04', 'awd22'),
(13, '2024-07-02', '15:18', 'upload/20240724_101612aa.jpg', 3, 'awe', 'wae', 'ewa', '3', '2024-07-08', 'wea'),
(14, '2024-07-03', '15:20', 'upload/20240724_101901aa.jpg', 3, '1', '2', '3', '3', '2024-07-03', '5'),
(15, '2024-07-03', '15:26', 'upload/20240724_102510download.p', 3, 'wae', 'wea', 'awe', 'weawe', '', 'awewaeweaawe'),
(16, '2024-07-03', '16:29', 'upload/20240724_102906download.p', 3, '51351', '3513', '513531', '513531', '2024-07-02', '531'),
(17, '2024-07-03', '03:32', 'upload/20240724_103001download.p', 3, '135', '513', '351', '351', '', '351');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(13) NOT NULL,
  `user_user` varchar(32) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_sirname` varchar(32) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_tel` varchar(11) NOT NULL,
  `user_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_user`, `user_name`, `user_sirname`, `user_pass`, `user_tel`, `user_type`) VALUES
(1, '', '', '', '', '', ''),
(3, 'b', 'b1', 'b', 'b', 'b', '1'),
(4, 'c', 'c', 'c', 'c', 'c', '2'),
(7, 'as', 'as', 'as', 'as', 'as', 'as'),
(10, '', '', '', '', '', ''),
(11, '', '', '', '', '', ''),
(12, '', '', '', '', '', ''),
(13, '', '', '', '', '', ''),
(14, '', '', '', '', '', ''),
(15, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`prob_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `prob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
