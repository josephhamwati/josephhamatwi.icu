-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2024 at 03:36 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin@example.com', '2024-05-06 09:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `comment` text NOT NULL,
  `sender` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `parent_id`, `comment`, `sender`, `date`) VALUES
(1, 0, 'asad', 'asa', '2024-05-30 16:15:42'),
(2, 0, 'not happy with roads in lusaka', 'thomas', '2024-05-30 16:18:05'),
(3, 2, 'we will work on it', 'admin', '2024-05-30 16:18:44'),
(4, 0, 'sds', 'ss', '2024-06-01 03:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `p_id` int DEFAULT NULL,
  `d_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`d_id`, `p_id`, `d_name`) VALUES
(1, 1, 'Lusaka District'),
(2, 1, 'Chongwe Distric'),
(3, 2, 'Ndola District'),
(4, 2, 'Kitwe District'),
(5, 3, 'Chipata Distric'),
(6, 3, 'Petauke Distric'),
(7, 4, 'Mongu District'),
(8, 4, 'Kaoma District');

-- --------------------------------------------------------

--
-- Table structure for table `problem_category`
--

DROP TABLE IF EXISTS `problem_category`;
CREATE TABLE IF NOT EXISTS `problem_category` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `problem_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problem_category`
--

INSERT INTO `problem_category` (`pro_id`, `problem_name`) VALUES
(1, 'Potholes'),
(2, 'Street Lights'),
(3, 'Garbage Collection'),
(4, 'Road Maintenance'),
(5, 'Traffic Lights');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

DROP TABLE IF EXISTS `province`;
CREATE TABLE IF NOT EXISTS `province` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`p_id`, `p_name`) VALUES
(1, 'Lusaka'),
(2, 'Copperbelt'),
(3, 'Eastern'),
(4, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `report_problem`
--

DROP TABLE IF EXISTS `report_problem`;
CREATE TABLE IF NOT EXISTS `report_problem` (
  `rp_id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int DEFAULT NULL,
  `problem_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('NO','YES') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`rp_id`),
  KEY `pro_id` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

DROP TABLE IF EXISTS `tb_data`;
CREATE TABLE IF NOT EXISTS `tb_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `date` varchar(50) NOT NULL,
  `reply_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nickname` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ward_id` int DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fullname`, `username`, `password`, `email`, `gender`, `nickname`, `ward_id`) VALUES
(8, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'Male', 'user', 11),
(9, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', 'Male', 'test', 11);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
CREATE TABLE IF NOT EXISTS `ward` (
  `w_id` int NOT NULL AUTO_INCREMENT,
  `d_id` int DEFAULT NULL,
  `w_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`w_id`),
  KEY `d_id` (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`w_id`, `d_id`, `w_name`) VALUES
(9, 1, 'Kamwala Ward'),
(10, 1, 'Kabulonga Ward'),
(11, 2, 'Chalala Ward'),
(12, 2, 'Ngwerere Ward'),
(13, 3, 'Chifubu Ward'),
(14, 3, 'Mukuba Ward'),
(15, 4, 'Ndeke Ward'),
(16, 4, 'Wusakile Ward');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `province` (`p_id`);

--
-- Constraints for table `report_problem`
--
ALTER TABLE `report_problem`
  ADD CONSTRAINT `report_problem_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `problem_category` (`pro_id`);

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `ward_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `district` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
