-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2020 at 08:49 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db_kadai1017`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `unique_book` int(12) NOT NULL,
  `bookname` varchar(64) NOT NULL,
  `bookURL` text NOT NULL,
  `bookcomment` text NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`unique_book`, `bookname`, `bookURL`, `bookcomment`, `indate`) VALUES
(13, 'aaa', 'aaa', 'aaaa', '2020-10-25'),
(14, '起業の科学', '', '', '2020-10-25'),
(15, '', '', '', '2020-10-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`unique_book`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `unique_book` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
