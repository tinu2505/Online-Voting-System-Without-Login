-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 10:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--
CREATE DATABASE IF NOT EXISTS `election` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `election`;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `f_name` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `acad_year` text NOT NULL,
  `dob` date NOT NULL,
  `rollno` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `name` (`user_name`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(1, 'tushar ', 'kj', 9079202797, 'second', '2005-12-30', '20ecaddfs');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(2, 'tushar t', 'himnath tandon', 9509339075, 'first', '2006-12-30', '22002200');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(3, 'svd', 'adads', 4455445544, 'third', '2006-12-30', '20Ecacs033');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(4, 'abhi singh', 'padam singh', 2255887799, 'third', '2006-12-29', 'asdasd');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(5, 'kk', 'faas', 8684546444, 'fourth', '2006-11-30', 'asdasd3221');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(6, 'dvdxvs', 'sdvdds ', 1351351515, 'first', '2006-12-30', 'cacac');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(7, 'dcdsdsv', 'v vsdvs', 4684846485, 'second', '2006-12-29', '44444');
INSERT DELAYED IGNORE INTO `candidates` (`id`, `user_name`, `f_name`, `mobile`, `acad_year`, `dob`, `rollno`) VALUES(8, 'asddsds', 'csdcdsc', 7894456123, 'fourth', '2006-12-30', 'scac54');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

DROP TABLE IF EXISTS `polls`;
CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polls`
--

INSERT DELAYED IGNORE INTO `polls` (`id`, `post`) VALUES(1, 'vp');
INSERT DELAYED IGNORE INTO `polls` (`id`, `post`) VALUES(2, 'gs');
INSERT DELAYED IGNORE INTO `polls` (`id`, `post`) VALUES(3, 'js');
INSERT DELAYED IGNORE INTO `polls` (`id`, `post`) VALUES(4, 'jjs');

-- --------------------------------------------------------

--
-- Table structure for table `poll_answers`
--

DROP TABLE IF EXISTS `poll_answers`;
CREATE TABLE IF NOT EXISTS `poll_answers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `candidate` text NOT NULL,
  `votes` int(255) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poll_answers`
--

INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(1, 3, 'tushar ', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(2, 4, 'tushar t', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(3, 2, 'svd', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(4, 2, 'abhi singh', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(5, 1, 'kk', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(6, 4, 'dvdxvs', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(7, 3, 'dcdsdsv', 1);
INSERT DELAYED IGNORE INTO `poll_answers` (`id`, `poll_id`, `candidate`, `votes`) VALUES(8, 1, 'asddsds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `f_name` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `acad_year` text NOT NULL,
  `dob` date NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `username` (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `reset_token_hash` (`reset_token_hash`),
  UNIQUE KEY `name` (`user_name`) USING HASH
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
