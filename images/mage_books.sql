-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 11:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mage_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `book_info` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `writer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_info`, `writer_id`, `status`, `images`, `created`) VALUES
(15, 'boook 3', 'book information', 22, 1, '934378814158dd1360b55401a51749af-5d49232d07a1b.jpg', '2019-08-29 07:09:46'),
(16, 'Book 4', 'book 4 information', 23, 1, 'images (1).jpg', '2019-08-29 09:13:44'),
(17, 'pabon', 'book pabon informatioon', 23, 1, '1c210705aeb5007c9fbe6fa1abde1175-5d49213c2ec13.jpg', '2019-08-29 09:15:00'),
(18, 'book1', 'asFsFsdFsf', 22, 2, 'images (1).jpg', '2019-08-29 09:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(11) NOT NULL,
  `writer_name` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `writer_info` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `writer_name`, `writer_info`, `status`, `created`) VALUES
(22, 'Robintonath Thakor', 'Robintonath Thakor Information', 2, '2019-08-29 03:57:54'),
(23, 'Josim Uddin', 'Kobi Josim Uddin Information', 2, '2019-08-29 03:58:32'),
(24, 'Kazi Nozrul Islam', 'Kazi Nozrul Islam Information', 1, '2019-08-29 03:59:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
