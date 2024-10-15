-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 12:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitorsrecordsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(100) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `wtvisit` varchar(300) NOT NULL,
  `purpose` varchar(300) NOT NULL,
  `pheno` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `time_in` varchar(300) NOT NULL,
  `time_out` varchar(300) NOT NULL,
  `consent` varchar(300) NOT NULL,
  `officevisited` varchar(300) NOT NULL,
  `dcreted_in` varchar(300) NOT NULL,
  `dcreated_out` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `fullname`, `wtvisit`, `purpose`, `pheno`, `address`, `time_in`, `time_out`, `consent`, `officevisited`, `dcreted_in`, `dcreated_out`) VALUES
(118952519, 'thomas vishigh', 'doris gin', 'official', '08164540549', 'TTTTTT', '02:47:25', '02:47:46', 'YES', 'ITMB', '2024-10-14', '2024-10-14'),
(246466515, 'Attah', 'md', 'Official Visit', '08164540549', 'testtttt', '12:02:10', '12:02:14', 'YES', 'TORBITA', '2024-10-15', '2024-10-15'),
(1634179040, 'Attah', 'Okolo', 'Official Visit', '08164540549', 'TESTTTT', '02:46:37', '02:48:18', 'YES', 'FINPAR', '2024-10-14', '2024-10-14'),
(2082927436, 'asss', 'Okolo', 'Official Visit', '08164540549', 'TESTTTTTT', '06:39:05', '12:02:17', 'YES', 'TORBITA', '2024-10-14', '2024-10-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
