-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 11:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsystem2`
--
CREATE DATABASE IF NOT EXISTS `bdsystem2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bdsystem2`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_14_150544_create_tbl_donor_table', 1),
(2, '2018_11_01_044858_create_tbl_profile_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor`
--

CREATE TABLE `tbl_donor` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_donor`
--

INSERT INTO `tbl_donor` (`id`, `uname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'SM.Shuvo', 'smshuvo1612@gmail.com', '123456', NULL, NULL),
(2, 'Nazmul', 'morjinaaktar35@gmail.com', '11223344', NULL, NULL),
(3, 'Oli', 'oli35-1565@diu.edu.bd', '000000', NULL, NULL),
(4, 'John Wick', 'boogymen@gmaul.com', 'marha', NULL, NULL),
(5, 'SM.Shuvo', 'morjinaaktar35@gmail.com', '12345', NULL, NULL),
(6, 'Nur', 'nur@jhdbjklsduik', '098768', NULL, NULL),
(7, 'Shuvo34', 'smshuvo1612@gmail.com', '898989', NULL, NULL),
(8, 'Miraj', 'miraj.khalequzzaman@gmail.com', '101919', NULL, NULL),
(9, 'akib', 'akibmd719@gmail.com', '12345', NULL, NULL),
(10, 'Shuvo', 'shuvo@gmail.com', '12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double(10,8) DEFAULT NULL,
  `long` double(10,8) DEFAULT NULL,
  `bgroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `name`, `email`, `phone`, `address`, `lat`, `long`, `bgroup`, `lastdate`, `weight`, `created_at`, `updated_at`) VALUES
(1, 'S.M Mazidul Islam Shuvo', 'smshuvo1612@gmail.com', '01762128000', '102 Shukkrabad,Dhanmondi-32', NULL, NULL, 'AB+', '01/01/2018', '70', '2018-11-26 20:03:22', '2018-11-26 20:03:22'),
(2, 'Nazmul Islam Nabil', 'morjinaaktar35@gmail.com', '01834678230', '102 Shukkrabad,Dhanmondi-32', NULL, NULL, 'B+', '04/04/2018', '80', NULL, NULL),
(3, 'Miraj', 'miraj.khalequzzaman@gmail.com', '9845748390', 'Farmgate', NULL, NULL, 'O+', '04/04/2018', '63', '2018-11-05 15:33:58', '2018-11-05 15:33:58'),
(4, 'Sagar', 'fdsdytft@hvjhkjkj', '986764563', 'Barishal', NULL, NULL, 'O-', '01/01/2018', '65', '2018-11-05 18:57:57', '2018-11-05 18:57:57'),
(5, 'Rakib', 'nur@jhdbjklsduik', '01834678230', '102 Shukkrabad,Dhanmondi-32', NULL, NULL, 'A+', '19/08/2018', '53', '2018-11-05 18:59:55', '2018-11-05 18:59:55'),
(6, 'Sowvick', 'nur@jhdbjklsduik', '98888888', 'Farmgate', NULL, NULL, 'AB+', '01/01/2018', '63', '2018-11-05 15:37:55', '2018-11-05 15:37:55'),
(7, 'Oli Ullah', 'oli35-1565@diu.edu.bd', '01762128000', '102 Shukkrabad,Dhanmondi-32', NULL, NULL, 'O+', '04/04/2018', '58', '2018-11-26 21:56:58', '2018-11-26 21:56:58'),
(8, 'mahin', 'mahin@khgaj', '98457483900000', 'Shukrabad', NULL, NULL, 'B+', '19/08/2018', '65', NULL, NULL),
(9, 'Minhaz', 'nur@jhdbjklsduik', '0t45672', 'Dhanmondi-32', NULL, NULL, 'O-', '12/6/2018', '70', NULL, NULL),
(10, 'Sowvick', 'miraj.khalequzzaman@gmail.com', '98888888', 'Barishal', NULL, NULL, 'O+', '19/08/2018', '63', NULL, NULL),
(11, 'mmm', 'kjsfh@jbfdjgbdfj', '98888888', 'Mohakhali', NULL, NULL, 'b+', '11/11/1110', '80', NULL, NULL),
(12, 'Sagar', 'kjsfh@jbfdjgbdfj', '986764563', 'Mohakhali', NULL, NULL, 'O-', '12/6/2018', '58', NULL, NULL),
(13, 'Golam Sorwar', 'akibmd719@gmail.com', '01687922145', 'Uttara 10 No. Sector Jame Mosque, Road No 2, Dhaka, Bangladesh', 23.88042740, 90.39102320, 'o+', '10/5/18', '58', NULL, NULL),
(14, 'shuvo', 'shuvo@gmail.com', '016000000', 'Sukrabad Bazar, Sukrabad Road, Dhaka, Bangladesh', 23.75285200, 90.37884320, 'AB+', '10/5/18', '70', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
<ss>