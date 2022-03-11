-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 01:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Fashion', 'Category for anything related to fashion.', '2014-06-01 00:35:07', '2014-05-30 12:04:33'),
(2, 'Electronics', 'Gadgets, drones and more.', '2014-06-01 00:35:07', '2014-05-30 12:04:33'),
(3, 'Motors', 'Motor sports and more', '2014-06-01 00:35:07', '2014-05-30 12:04:54'),
(5, 'thananjeyans', 'updates', '2022-03-12 15:42:58', '2016-01-08 07:57:26'),
(6, 'Books', 'Kindle books, audio books and more.', '2022-03-18 15:43:05', '2016-01-08 07:57:47'),
(13, 'Sports', 'Drop into new winter gear.', '2016-01-09 02:24:24', '2016-01-08 19:54:24'),
(19, 'thananjeyan', 'Hello world', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'thananjeyan', 'Hello world', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'thananjeyans', 'Hello world', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'thananjeyans', 'Hello world', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'thananjeyans', 'Hello world', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'thananjeyans', 'Hello world', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'thananjeyans', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'thananjeyans', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'thananjeyans', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'thananjeyans', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
