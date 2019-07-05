-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 01:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glass_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `featureID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Manufacturer` varchar(255) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Size` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `inStock` int(11) NOT NULL,
  `Pieces` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL DEFAULT 'images/unavailable.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `Title`, `Description`, `Type`, `Manufacturer`, `Color`, `Size`, `Price`, `inStock`, `Pieces`, `imagePath`) VALUES
(1, 'Wine Glass', 'Who says cocktail parties are only for alcoholics? You can walk up to some business exec with this classy glass in your hand, add some colored liquid, and talk him up about your brilliant pitch, and top it off with a big hit of smoke in his face. Smooooth.', 'Bong', 'GRAV', 'Onyx', 10, '56.00', 1, 2, 'images/Products/M1A/wineglass/IMG_6104.jpg'),
(2, 'Wine Glass', 'Who says cocktail parties are only for alcoholics? You can walk up to some business exec with this classy glass in your hand, add some colored liquid, and talk him up about your brilliant pitch, and top it off with a big hit of smoke in his face. Smooooth.', 'Bong', 'GRAV', 'Malachite', 10, '56.00', 1, 2, 'images/Products/M1A/wineglass/IMG_6102.jpg'),
(3, 'Zong', 'Z is kind of a useless letter, but we like it anyway. You\'ll be able to say \"let\'s hit my Zong\" and it will provide a few minutes of conversation. ', 'Bong', 'GRAV', 'Glow-in-the-Dark!', 12, '52.00', 1, 1, 'images/Products/M1A/zong.jpg'),
(4, 'Quinta-Perc', 'When normal smoke just isn\'t clean enough. This stacked bubbler system may as well convert your smoke into pure spirit energy.', 'Bong', 'GRAV', 'Emerald-Quartz', 16, '120.00', 1, 2, 'images/Products/M1A/quinta-perc.jpg'),
(5, 'Beaker', 'The simple things in life never age. This classic style fits any theme for any setting.', 'Bong', 'GRAV', 'Emerald-Quartz', 16, '36.00', 1, 3, 'images/Products/M1A/beaker.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`featureID`),
  ADD KEY `itemID` (`itemID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `featureID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `items` (`itemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
