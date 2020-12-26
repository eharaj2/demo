-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 05:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `remember_token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$12$8ez6F0IaaH8U4.C33K5LIOuEOx/xphpA9gG1Bb8zgiC3hS40umDWO', 'rasCo7WdyFRTEICCB35LTQXtDlsHiC0gtdOIIhaC7w1VmGQ99dnAUsDgwcMF', '2020-12-22 01:57:33', '2020-12-22 04:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `image` text NOT NULL,
  `stock` int(11) NOT NULL,
  `is_publish` tinyint(4) NOT NULL DEFAULT 1,
  `region_code` varchar(5) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `price`, `image`, `stock`, `is_publish`, `region_code`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, '{\"en\":\"Amoxiciline 250 mg\",\"ar\":\"\\u0623\\u0645\\u0648\\u0643\\u0633\\u064a\\u0633\\u064a\\u0644\\u064a\\u0646 250 \\u0645\\u062c\\u0645\"}', 'amoxiciline-250-mg', '50.000', '20201226151911.jpg', 10, 1, 'ae', 0, NULL, '2020-12-26 15:19:11'),
(5, '{\"en\":\"Amoxiciline 250 mg\",\"ar\":\"\\u0623\\u0645\\u0648\\u0643\\u0633\\u064a\\u0633\\u064a\\u0644\\u064a\\u0646 250 \\u0645\\u062c\\u0645\"}', 'amoxiciline-250-mg', '50.000', '20201226151954.jpg', 10, 1, 'sa', 0, NULL, '2020-12-26 15:19:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
