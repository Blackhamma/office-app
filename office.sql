-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 10:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `num` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `srl` varchar(50) NOT NULL,
  `authorized` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `office` varchar(50) NOT NULL,
  `descrip` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `officer` varchar(50) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  `transfer_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prob` text NOT NULL,
  `diag` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `user_id`, `num`, `created`, `srl`, `authorized`, `division`, `office`, `descrip`, `username`, `officer`, `transfer`, `transfer_date`, `prob`, `diag`, `last_update`) VALUES
(9, 0, 'LCIT30193', '2018-03-01', 'C7G9B25', 'MUAD OFFEI', 'LRD', 'DIRECTOR\'S OFFICE', 'System Unit', 'MUAD OFFEI', 'Admin', '', '2018-05-11 16:30:12', 'HARD DISK NOT FOUND.', 'CORRUPTED OS.', '2018-05-30 14:25:16'),
(10, 0, 'LCIT30181', '2018-03-01', 'NO SERIAL', 'GEDRGIA ASHITEY', 'LVD', '', 'UPS', 'GEDRGIA ASHITEY', 'Admin', '', '2018-05-11 16:30:12', 'NO UPS', '', '2018-04-06 10:39:15'),
(11, 0, 'LCIT30162', '2018-03-01', 'NO SERIAL', 'ANNETTE MAWUSI AKATSA', 'LVD', 'STAMPING', 'UPS', 'ANNETTE MAWUSI AKATSA', 'Admin', '', '2018-05-11 16:30:12', 'NO UPS', 'NO UPS', '2018-04-06 10:41:43'),
(12, 0, 'LCIT020418', '2018-04-06', 'NO SERIAL', 'JEPHTER', 'LVD', 'IT', 'System Unit', 'JONATHAN', '', '', '2018-05-11 16:30:12', 'BLUE SCREEN', 'RE-INSTALLATION OF OPERATING SYSTEM ', '2018-05-11 13:38:12'),
(13, 0, 'LCIT230457', '2018-05-01', '', '', 'PVLMD', '', 'System Unit', 'gu35t', 'Admin', 'Jona', '2018-05-11 16:30:12', '', '', '2018-05-12 14:47:56'),
(14, 0, 'LCIT230450', '2018-05-01', '', '', 'PVLMD', '', 'UPS', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-09 16:47:37'),
(15, 0, 'LCIT230451', '2018-05-02', '', '', 'LRD', '', 'Monitor', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-09 16:47:50'),
(16, 0, 'LCIT230453', '2018-05-04', '', '', 'SMD', '', 'UPS', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-09 16:48:21'),
(17, 0, 'LCIT230454', '2018-05-05', '', '', 'SMD', '', 'Keyboard', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-12 12:27:36'),
(19, 0, 'LCIT30194', '2018-05-07', '', '', 'PVLMD', '', 'System Unit', 'FERDINAND', 'Admin', 'Ferdinand', '2018-05-11 16:30:12', '', '', '2018-05-12 12:27:26'),
(20, 0, 'LCIT30195', '2018-05-08', '', '', 'SMD', '', 'System Unit', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-10 00:29:44'),
(21, 0, 'LCIT30199', '2018-05-01', '', '', 'SMD', '', 'System Unit', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-10 00:30:43'),
(22, 0, 'LCIT230458', '2018-05-31', '', '', 'Select Division', '', 'System Unit', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-10 09:55:48'),
(23, 0, 'LCIT230459', '2018-05-30', '', '', '', '', 'System Unit', '', 'Admin', 'Ferdinand', '2018-05-11 16:30:12', '', '', '2018-05-10 10:54:51'),
(24, 0, 'LCIT2354', '2018-05-02', '', '', 'PVLMD', '', 'Printer', '', 'Admin', '', '2018-05-11 16:30:12', '', '', '2018-05-10 10:06:51'),
(25, 0, 'LCIT301939', '2018-05-13', '', '', '', '', '', '', 'Admin', '', '2018-05-13 09:09:20', '', '', '2018-05-13 09:09:20'),
(26, 0, 'LCIT230460', '2018-05-14', '', '', '', '', '', '', 'Admin', '', '2018-05-13 09:21:55', '', '', '2018-05-13 09:21:55'),
(27, 0, 'LCIT230461', '2018-05-14', '', '', '', '', '', '', 'Admin', '', '2018-05-13 09:24:17', '', '', '2018-05-13 09:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `password`, `role`, `status`) VALUES
(6, 'dsvfg', 'bfdbdf', 'dgdn', '$2y$10$15CjBqWMmgGohdZkL1uS3utvlKWuJUkz3hAcLClU4S7Y7li.Powjm', 'NSP', ''),
(7, 'xxzvcxb', 'cbfdhfdh', 'fdhtfjg', '$2y$10$Dkv6G4y.TW3XpCAdm2p2Uu6FAzsaqfnn/hAOJCpzTm3j/8vsY2DHW', 'IT Officer', 'on'),
(10, 'Annan', 'dsvidivh', 'jvdjhjdh', '$2y$10$0ujVkV2jTZkFeMDUinieBOFdTGV5GHbaKHCCw5NPglV58Ai08lTo.', 'IT Officer', 'on'),
(11, 'dskjvhskjhb', 'jknbnkvnb', 'jdjkgjkhdkj', '$2y$10$MFWaGH8Gm.xzFd/IQPDbruswo5fNINs..eJwSo6eDZtQthxJYNdMq', 'OTHERS', 'on'),
(12, 'iudshhjfhd', 'dfbjhjfhbj', 'nvnbbjj', '$2y$10$clzXqytlW8i/V.uJAHoYQeJo88OKnD0hEjjZkqcHgIWM6aJ.ANIF2', 'Administrator', 'on'),
(13, 'KFDJKFDJ', 'JNCBB', 'VNNMB', '$2y$10$ng.8EqOSkAQlWOwLCAR6ZuN7c52pSrBILob1Z/yzXxEUPu9QlpgqK', 'Administrator', ''),
(14, 'Kanton', 'Ben', 'Article', '$2y$10$aV8.7NW/wOBDHKcP7tKfn.yG2gAVdJMt9lge8WsrlmrVHyepv1ix2', 'OTHERS', 'on'),
(24, 'FERDINAND', 'KWARTENG', 'SORCE', '$2y$10$57oinsM.VL5P7.aLqMN1yOj6WH0MdvO4QN.bdPH89TAuotrvmZlhe', 'Administrator', 'on'),
(28, 'Annan', 'Jake', 'Admin', '$2y$10$TqHY9YvboRJQ2dVxKK.uj.cMesAcsuv1.TBBi1csrPdnDEPREyFFy', 'Administrator', 'on'),
(32, 'Jonathan', 'Appiah', 'Jona', '$2y$10$OtyyRw840tNAPD2QApzVROlBSncH7dDSjxJoW8Gl5ADgSgPMvSrtO', 'IT Officer', 'on'),
(33, 'Nathan', 'Donkor', 'Nathen', '$2y$10$Vrkvd3zYRDwlCjRZErXukODWtWVqVZBMjqswoSOahGK9vaYHIZuUi', 'NSP', 'on'),
(34, 'fdgfgghhvhg', 'dfdfggjhg', 'gcgvghgh', '$2y$10$Ay4hioOqvddaY4RNVySRdOJxv/bd1JBodsQH8eBlgPuXqd3msHB8q', 'OTHERS', 'on'),
(35, 'hghghhjh', 'fcgvgvgy', 'rfyggygy', '$2y$10$lhJLmmVhwd2WDZMtNUcqhO580LZNN5o6PRQmDpuricry1t3Hvyrde', 'Administrator', 'on'),
(37, 'keredklgvklfdkl', 'kvfnkbgknm', 'knkgknkkgfbk', '$2y$10$G0pzCXBLRW1xJmeyDD63w.NYgZnfORmIIKgSpwNy2rz6Da6v26l8G', 'Administrator', 'on'),
(38, 'Kanton', 'KWARTENG', 'kk', '$2y$10$n0548PS3mlTJR.SpmdHPvuKM5E1XeVCQTgJDMNk9T957zqsjPZj/e', 'OTHERS', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
