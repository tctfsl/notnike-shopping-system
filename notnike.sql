-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 08, 2018 at 02:36 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notnike`
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
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `UserID`, `ItemID`) VALUES
(55, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `secQuestion` text NOT NULL,
  `secQueAnswer` text NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userID`, `email`, `name`, `password`, `secQuestion`, `secQueAnswer`) VALUES
(1, 'abc@def.ghi', 'Kratos', '87654321', 'Fast &', 'Ezy'),
(2, 'test@test.tt', 'Zeus', '12345678', 'Barry', 'Allen'),
(3, 'one@one.one', 'Perseus', '12345678', 'Wally', 'West'),
(5, 'two@two.my', 'Aries', '12345678', 'Diana', 'Prince'),
(6, 'nine@nine.nine', 'Apollo', '12345678', 'Shayera', 'Hol');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Name` varchar(100) NOT NULL,
  `Item_Description` varchar(200) NOT NULL,
  `Item_Price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `Item_Name`, `Item_Description`, `Item_Price`) VALUES
(1, 'ITEM NO.1', 'First shoe', '59.99'),
(2, 'ITEM NO.2', 'Second shoe', '399.00'),
(3, 'item no.3', 'third shoe', '21.00'),
(4, 'item no.4', 'fourth shoe', '38.45');

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
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionID`, `ItemID`, `UserID`, `Address`, `State`, `City`, `Postcode`, `ReceiverName`, `ReceiverPhone`, `CardNumber`, `NameOnCard`, `ExpirationDate`, `CVV`) VALUES
(45, 4, 1, '1', '1', '1', 1, '1', 1, 1111222233334444, '2', '11/45', 123),
(46, 3, 1, '1', '1', '1', 1, '1', 1, 1111222233334444, '2', '11/45', 123),
(47, 1, 1, '1', '1', '1', 1, '1', 1, 1111222233334444, '2', '11/45', 123),
(48, 1, 1, '1', '1', '2', 1, '1', 1, 1111222233334444, '1', '11/45', 123),
(49, 1, 1, '1', '1', '2', 1, '1', 1, 1111222233334444, '1', '11/45', 123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
