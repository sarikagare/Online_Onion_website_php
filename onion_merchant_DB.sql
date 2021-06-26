-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 01:33 PM
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
-- Database: `onion_merchant`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `NameonCard` varchar(100) NOT NULL,
  `cardno` int(20) NOT NULL,
  `expmonth` int(20) NOT NULL,
  `expyear` int(20) NOT NULL,
  `Cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`FullName`, `Email`, `Address`, `City`, `State`, `zip`, `NameonCard`, `cardno`, `expmonth`, `expyear`, `Cvv`) VALUES
('', '', '', '', '', 0, '', 0, 0, 0, 0),
('', '', '', '', '', 0, '', 0, 0, 0, 0),
('Ashvini', 'aashushewale17@gmail.com', 'सांगवी,ऊमराणे, मुंबई आग्रा हायवे नं. 3', 'नाशिक', 'Maharashtra', 423110, 'Ashwini jivan shewale', 2147483647, 0, 2024, 125),
('Ashvini', 'aashushewale17@gmail.com', 'सांगवी,ऊमराणे, मुंबई आग्रा हायवे नं. 3', 'नाशिक', 'Maharashtra', 423110, 'Ashwini jivan shewale', 2147483647, 0, 2024, 125),
('Ashvini', 'aashushewale17@gmail.com', 'सांगवी,ऊमराणे, मुंबई आग्रा हायवे नं. 3', 'नाशिक', 'Maharashtra', 423110, 'Ashwini jivan shewale', 2147483647, 0, 2023, 999),
('Ashvini', 'aashushewale17@gmail.com', 'सांगवी,ऊमराणे, मुंबई आग्रा हायवे नं. 3', 'नाशिक', 'Maharashtra', 423110, 'Ashwini jivan shewale', 2147483647, 0, 2023, 999),
('Ashvini', 'aashushewale17@gmail.com', 'Nashik', 'नाशिक', 'Maharashtra', 423110, 'Ashwini jivan shewale', 2147483647, 0, 2023, 999),
('', '', '', '', '', 0, '', 0, 0, 0, 0),
('', '', '', '', '', 0, '', 0, 0, 0, 0),
('Ashvini', 'aashushewale17@gmail.com', 'सांगवी,ऊमराणे, मुंबई आग्रा हायवे नं. 3', 'नाशिक', 'Maharashtra', 423110, 'Ashwini jivan shewale', 2147483647, 0, 2026, 352);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Password` varchar(6) NOT NULL,
  `Retype` varchar(6) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Email`, `Password`, `Retype`, `Address`, `ContactNo`, `Gender`) VALUES
('', '', '', '', '', 0, ''),
('Ashvini', 'aashushewale17@', 'aa', 'aa', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'F'),
('Ashvini Shewale', 'aashushewale@gm', 'AASHU@', 'AASHU@', 'Nashik', 2147483647, 'female'),
('ABC', 'abc@gmail.com', 'abc123', 'abc123', 'Chandwad', 2147483647, 'Male'),
('BhuSHNA', 'Bhushna@gmail.c', 'zz', 'zz', 'xyz', 521454210, 'female'),
('Vijay Bharaskr', 'vijaybharaskar1', 'viju@1', 'viju@1', 'Nashik', 2147483647, 'Male'),
('Ashvini', 'aashushewale17@', 'vv', 'vv', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'female'),
('Ashvini', 'aashushewale17@', 'vv', 'vv', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'female'),
('Ashvini', 'aashushewale17@', 'vv', 'vv', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'female'),
('Ashvini', 'aashushewale17@', 'vv', 'vv', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'female'),
('Ashvini', 'aashushewale17@', 'vv', 'vv', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'female'),
('अंकिता जीवन शेवाळे', 'ankita@gmail.co', 'gg', 'gg', 'सांगवी,ऊमराणे, मुंबई', 2147483647, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Red Onion', '1', 'product-images/red.jpg', 30.00),
(2, 'Brown Onion', '2', 'product-images/b7.jpg', 50.00),
(3, 'White Onion', '3', 'product-images/b2.jpg', 48.00),
(4, 'Spring Onion', '4', 'product-images/s1.jpg', 20.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
