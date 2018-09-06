-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2018 at 05:59 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `CartID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  PRIMARY KEY (`CartID`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `UserID`, `ItemID`) VALUES
(57, 1, 3),
(56, 1, 2),
(54, 1, 1),
(59, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Name` varchar(100) NOT NULL,
  `Item_Description` varchar(200) NOT NULL,
  `Item_Picture` varchar(100) NOT NULL,
  `Item_Price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `Item_Name`, `Item_Description`, `Item_Picture`, `Item_Price`) VALUES
(1, 'ITEM NO.1', 'First shoe', '', '59.99'),
(2, 'ITEM NO.2', 'Second shoe', '', '399.00'),
(3, 'item no.3', 'third shoe', '', '21.00'),
(4, 'item no.4', 'fourth shoe', '', '38.45');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Postcode` int(11) NOT NULL,
  `ReceiverName` varchar(50) NOT NULL,
  `ReceiverPhone` int(11) NOT NULL,
  `CardNumber` bigint(16) NOT NULL,
  `NameOnCard` varchar(50) NOT NULL,
  `ExpirationDate` varchar(5) NOT NULL,
  `CVV` int(3) NOT NULL,
  PRIMARY KEY (`TransactionID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionID`, `ItemID`, `UserID`, `Address`, `State`, `City`, `Postcode`, `ReceiverName`, `ReceiverPhone`, `CardNumber`, `NameOnCard`, `ExpirationDate`, `CVV`) VALUES
(1, 3, 1, '1', '1', '1', 1, '1', 1, 1111111111111111, '1', '12/45', 210),
(2, 2, 1, '1', '1', '1', 1, '1', 1, 1111111111111111, '1', '12/45', 210),
(3, 1, 1, '1', '1', '1', 1, '1', 1, 1111111111111111, '1', '12/45', 210),
(4, 4, 1, '1', '1', '1', 1, '1', 1, 1111111111111111, '1', '12/45', 210);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `User_Name`, `Email`, `Password`) VALUES
(1, 'BOIII', 'somebody@gmail', '11111111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
