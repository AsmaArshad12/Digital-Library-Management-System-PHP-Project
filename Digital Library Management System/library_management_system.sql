-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 08:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(50) NOT NULL,
  `BookTitle` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `BookTitle`, `Image`) VALUES
(8, 'Electricity & Magnetism', 'Electricity & Magnetism Book.JPG'),
(9, 'Advanced Calculus', 'Calculus Book.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `booksrequest`
--

CREATE TABLE `booksrequest` (
  `BookId` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `BookTitle` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Days` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booksrequest`
--

INSERT INTO `booksrequest` (`BookId`, `Name`, `Email`, `BookTitle`, `Date`, `Days`, `Status`) VALUES
(8, 'Anaya', 'A@gmail.com', 'Electricity & Magnetism', '2021-02-09', '6 days', 'Approved'),
(9, 'maryam', 'm@gmail.com', 'Advanced Calculus', '2021-02-17', '6 days', 'Approved'),
(10, 'maryam', 'm@gmail.com', 'Electricity & Magnetism', '2021-02-15', '6 days', 'Pending'),
(11, 'Maham', 'ma@gmail.com', 'Electricity & Magnetism', '2021-02-16', '6 days', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `facultyregistration`
--

CREATE TABLE `facultyregistration` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultyregistration`
--

INSERT INTO `facultyregistration` (`Id`, `Name`, `Email`, `Password`, `Qualification`, `Experience`, `Status`) VALUES
(4, 'maryam', 'm@gmail.com', 'maryam', 'MS LAW', '11 YEARS', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`Email`, `Password`) VALUES
('librarian@gmail.com', 'librarian');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`Id`, `Name`, `Email`, `Password`, `Status`) VALUES
(9, 'Anaya', 'A@gmail.com', 'anaya', 'Approved'),
(10, 'Maham', 'ma@gmail.com', 'maham', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `booksrequest`
--
ALTER TABLE `booksrequest`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `facultyregistration`
--
ALTER TABLE `facultyregistration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `booksrequest`
--
ALTER TABLE `booksrequest`
  MODIFY `BookId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `facultyregistration`
--
ALTER TABLE `facultyregistration`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
