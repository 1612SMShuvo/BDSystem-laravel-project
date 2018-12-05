-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 05:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
(9, 'akib', 'akibmd@gmail.com', '12345', NULL, NULL),
(10, 'Shuvo', 'shuvo@gmail.com', '12345', NULL, NULL),
(11, 'SM. Shuvo', 'smshuvo1612@gmail.com', '101010', NULL, NULL),
(12, 'Kamruzzaman', 'morjinaaktar35@gmail.com', '121212', NULL, NULL),
(13, 'Akib', 'akibmd@gmail.com', '12345', NULL, NULL);

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
  `height` float(6,5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `name`, `email`, `phone`, `address`, `lat`, `long`, `bgroup`, `lastdate`, `weight`, `height`, `created_at`, `updated_at`) VALUES
(14, 'Rabby', 'shuvo@gmail.com', '016000000', 'Sukrabad Bazar, Sukrabad Road, Dhaka, Bangladesh', 23.75285200, 90.37884320, 'AB+', '10/5/18', '73', NULL, '2018-12-04 05:05:05', '2018-12-04 05:05:05'),
(15, 'Sarowar', 'akibmd@gmail.com', '01687922145', 'Uttara, Dhaka, Bangladesh', 23.87585470, 90.37954380, 'O+', '19/08/2018', '58', NULL, '2018-12-04 04:48:10', '2018-12-04 04:48:10'),
(16, 'SM. Shuvo', 'smshuvo1612@gmail.com', '01762128000', '102 Shukkrabad,Dhanmondi-32,Dhaka', 23.87585470, 90.37884320, 'AB+', '19/08/2018', '70', NULL, NULL, NULL),
(17, 'Kamruzzaman', 'morjinaaktar35@gmail.com', '01834678230', 'Farmgate,Dhaka', 23.75285200, 90.37884320, 'O+', '12/6/2018', '80', NULL, '2018-12-03 19:09:53', '2018-12-03 19:09:53'),
(18, 'Ahosan', 'smshuvo1612@gmail.com', '01762128000', '102 Shukkrabad,Dhanmondi-32,Dhaka', 23.75285200, 90.37884320, 'A+', '04/04/2018', '63', NULL, '2018-12-04 04:49:04', '2018-12-04 04:49:04'),
(19, 'Nazmul', 'smshuvo1612@gmail.com', '01762128000', 'Dhanmondi-32,Dhaka', 23.75285200, 90.37884320, 'AB+', '10/09/2018', '68', NULL, '2018-12-04 04:51:58', '2018-12-04 04:51:58'),
(20, 'Sowvick bose', 'smshuvo1612@gmail.com', '01834678230', 'Farmgate,Dhaka', 23.75285200, 90.37884320, 'B+', '10/09/2018', '50', NULL, '2018-12-04 05:03:52', '2018-12-04 05:03:52'),
(21, 'Nazmul Islam Nabil', 'smshuvo1612@gmail.com', '0378203', 'Farmgate,Dhaka', 23.75285200, 90.37884320, 'B+', '19/08/2018', '70', NULL, '2018-12-04 06:27:42', '2018-12-04 06:27:42'),
(23, 'akib', 'akibmd@gmail.com', '01687922145', 'Dhaka', 23.75285200, 90.37884320, 'O+', '01/01/2018', '58', 5.50000, '2018-12-04 07:48:44', '2018-12-04 07:48:44'),
(24, 'Kamruzzaman', 'morjinaaktar35@gmail.com', '01762128000', '102 Shukkrabad,Dhanmondi-32', 23.75285200, 90.37884320, 'AB+', '10/09/2018', '50', 5.50000, '2018-12-04 07:51:15', '2018-12-04 07:51:15'),
(25, 'Toha', 'smshuvo1612@gmail.com', '01762128000', 'Farmegate,Dhaka', 23.75285200, 90.37884320, 'AB-', '10/09/2018', '60', 5.50000, '2018-12-04 08:24:47', '2018-12-04 08:24:47'),
(26, 'Kamruzzaman', 'morjinaaktar35@gmail.com', '01762128000', 'Mohakhali', 23.75285200, 90.37884320, 'AB+', '11/11/1110', '65', 6.00000, '2018-12-04 08:34:23', '2018-12-04 08:34:23'),
(27, 'Kamruzzaman', 'morjinaaktar35@gmail.com', '01834678230', '102 Shukkrabad,Dhanmondi-32', 23.75285200, 90.37884320, 'AB+', '12/6/2018', '58', 5.50000, '2018-12-04 15:57:03', '2018-12-04 15:57:03');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
