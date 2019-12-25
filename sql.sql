--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(250) NOT NULL,
  `Location` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Date` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT = 1;

--
-- Dumping data for table `tbl_customer`
--
ALTER TABLE `products` AUTO_INCREMENT = 1;
INSERT INTO `products` (`Type`, `Location`, `Description`) VALUES
('Computer', 'Room 123', 'Asus Windows 10'),
('Laptop', 'Room 123', 'Acer Windows 10'),
('Tablet', 'Room 124', 'Lenovo Windows 10'),
('Printer', 'Room 123', 'Samsung'),
('Laptop', 'Room 122', 'HP Specter Ubuntu')