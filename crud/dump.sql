-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 05:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--
CREATE DATABASE IF NOT EXISTS `latihan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `latihan`;

-- --------------------------------------------------------

--
-- Table structure for table `teman`
--

DROP TABLE IF EXISTS `teman`;
CREATE TABLE IF NOT EXISTS `teman` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teman`
--

INSERT INTO `teman` (`id`, `nama`, `alamat`, `foto`) VALUES
(13, 'sample nama', 'sample alamat', '2018-02-16_07-41-31kecerdasan.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
