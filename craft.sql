-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 11:17 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `craft`
--
CREATE DATABASE IF NOT EXISTS `craft` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `craft`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `atype` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `pk` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`atype`, `name`, `email`, `pw`, `pk`, `gender`, `address`, `phone`, `pincode`, `city`, `state`, `country`) VALUES
('Retailer', 'Pritam Das', 'dpritam589@gmail.com', 'asd', 'ADIDAS007', 'Male', 'Purba Sripur,Boral', 8013819220, 700154, 'Kolkata', 'West Bengal', 'India'),
('Consumer', 'MS Dhoni', 'msd7@gmail.com', 'msd', '', 'Male', 'Boral', 8456985222, 500132, 'Ranchi', 'Jharkhand', 'India'),
('Consumer', 'Subhajit Halder', 'subhajithalder626@gmail.com', 'bbta', '', 'Male', 'bolta house', 9876543210, 700199, 'Mumbai', 'Gujrat', 'Norway');

-- --------------------------------------------------------

--
-- Table structure for table `adminid`
--

CREATE TABLE IF NOT EXISTS `adminid` (
  `id` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminid`
--

INSERT INTO `adminid` (`id`, `pw`) VALUES
('rimo', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `adminpk`
--

CREATE TABLE IF NOT EXISTS `adminpk` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `passkey` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `adminpk`
--

INSERT INTO `adminpk` (`cid`, `company`, `passkey`) VALUES
(14, 'Adidas', 'ADIDAS007');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pprice` bigint(20) NOT NULL,
  `pcolour` varchar(80) NOT NULL,
  `pbrand` varchar(50) NOT NULL,
  `psize` varchar(40) NOT NULL,
  `pdescription` varchar(400) NOT NULL,
  `image` longblob NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE IF NOT EXISTS `gifts` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gname` varchar(50) NOT NULL,
  `gdetails` varchar(200) NOT NULL,
  `gworth` bigint(20) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`gid`, `gname`, `gdetails`, `gworth`) VALUES
(1, 'Dominos Weekend', 'Buy 2 medium/large Dominos pizza and get 4 free.', 1000),
(2, 'Big Bazaar Holiday Sale', 'Shop for Rs.4000/- and get Rs.1000/- cash in future pay wallet.', 2500),
(3, 'Walmart Gift Card', 'Get a Walmart gift card for upto Rs.1000/- free shopping.', 6000),
(4, 'Lucky Holiday Tour', '100 Lucky Customers will get a chance to go for a Holiday Tour.', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pprice` bigint(20) NOT NULL,
  `pcolour` varchar(80) NOT NULL,
  `pbrand` varchar(50) NOT NULL,
  `psize` varchar(40) NOT NULL,
  `pdescription` varchar(400) NOT NULL,
  `image` longblob NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`bid`, `email`, `subcat`, `pid`, `pname`, `pprice`, `pcolour`, `pbrand`, `psize`, `pdescription`, `image`, `qty`, `status`) VALUES
(1, 'subhajithalder626@gmail.com', 'Men Sports Wear', 43, 'CR7 JARSEY', 3600, 'WHITE', 'ADIDAS', 'S,M,L', 'This is original ronaldo jarsey.', 0x75706c6f6164732f313439353336323437365f72696d6f2e6a7067, 0, 'Requesting To Return'),
(2, 'msd7@gmail.com', 'Men Sports Wear', 44, 'JARSEY', 2800, 'BLACK', 'ADIDAS', 'S,M,L', 'This is real madrid jarsey.', 0x75706c6f6164732f313439353336323533355f72696d6f2e6a7067, 0, 'Delivered'),
(3, 'msd7@gmail.com', 'Men Top Wear', 9, 'T SHIRT', 350, 'BLACK', 'LEE', 'S,M,L,XL', 'This is lee branded t shirt.', 0x75706c6f6164732f313439353335383838385f72696d6f2e6a706567, 1, 'Undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `subcat` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(150) NOT NULL,
  `pprice` bigint(20) NOT NULL,
  `pcolour` varchar(80) NOT NULL,
  `pbrand` varchar(50) NOT NULL,
  `psize` varchar(40) NOT NULL,
  `pdescription` varchar(400) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`subcat`, `pid`, `pname`, `pprice`, `pcolour`, `pbrand`, `psize`, `pdescription`, `image`) VALUES
('Men Top Wear', 3, 'T SHIRT', 450, 'GREY', 'PUMA', 'S,M,L,XL', 'This is cotton t shirt.', 0x75706c6f6164732f313439353335383330355f72696d6f2e6a706567),
('Men Top Wear', 4, 'JACKET', 4250, 'BLACK', 'FERRARI', 'S,M,L,XL', 'This is great jacket.', 0x75706c6f6164732f313439353335383338355f72696d6f2e6a706567),
('Men Top Wear', 6, 'JACKET', 6000, 'BLUE', 'PUMA', 'S,M,L,XL', 'This is arsenal jacket.', 0x75706c6f6164732f313439353335383631355f72696d6f2e6a706567),
('Men Top Wear', 7, 'T SHIRT', 800, 'RED', 'ADIDAS', 'S,M,L', 'This is skin tight t shirt.', 0x75706c6f6164732f313439353335383731385f72696d6f2e6a706567),
('Men Top Wear', 8, 'BLAZER', 2800, 'PURPLE', 'RAYMOND', 'S,M,L', 'This is a great rated blazer.', 0x75706c6f6164732f313439353335383831365f72696d6f2e6a706567),
('Men Top Wear', 9, 'T SHIRT', 350, 'BLACK', 'LEE', 'S,M,L,XL', 'This is lee branded t shirt.', 0x75706c6f6164732f313439353335383838385f72696d6f2e6a706567),
('Men Top Wear', 10, 'T SHIRT', 2400, 'RED', 'NIKE', 'S,M,L,XL', 'This is full sleeve t shirt.', 0x75706c6f6164732f313439353335383937335f72696d6f2e6a706567),
('Men Top Wear', 11, 'TRACK TOP', 6700, 'BLACK', 'ADIDAS ORIGINAL', 'S,M,L,XL', 'This is a track suit top.', 0x75706c6f6164732f313439353335393032395f72696d6f2e6a706567),
('Men Top Wear', 12, 'HOODY', 3500, 'GREY', 'ADIDAS ORIGINAL', 'S,M,L,XL', 'This is mostly recommended hoody.', 0x75706c6f6164732f313439353335393431335f72696d6f2e6a706567),
('Men Top Wear', 13, 'JACKET', 7400, 'BLACK', 'PUMA', 'S,M,L,XL', 'This is most popular jacket.', 0x75706c6f6164732f313439353335393530355f72696d6f2e6a706567),
('Men Top Wear', 14, 'T SHIRT', 400, 'BLUE', 'PUMA', 'S,M,L,XL', 'This is mostly recommended t shirt.', 0x75706c6f6164732f313439353335393537325f72696d6f2e6a706567),
('Men Bottom Wear', 15, 'JEANS', 2500, 'BLACK', 'DENIM', '28,30,32,34,36', 'This is denim full pant.', 0x75706c6f6164732f313439353335393735395f72696d6f2e6a706567),
('Men Bottom Wear', 16, 'JEANS', 3000, 'BLUE', 'DENIM', '28,30,32,34,36', 'This is blue coloured denim.', 0x75706c6f6164732f313439353335393833345f72696d6f2e6a706567),
('Men Bottom Wear', 17, 'LEATHER PANT', 3400, 'BLACK', 'PETER ENGLAND', '28,30,32,34,36', 'This is unique pant.', 0x75706c6f6164732f313439353335393931335f72696d6f2e6a706567),
('Men Bottom Wear', 18, 'TROUSER', 1400, 'SILVER', 'PETER ENGLAND', '28,30,32,34,36', 'This is silver coloured half trouser.', 0x75706c6f6164732f313439353336303135385f72696d6f2e6a706567),
('Men Bottom Wear', 19, 'TROUSER', 2600, 'BROWN', 'PETER ENGLAND', '28,30,32,34,36', 'This is a unique colour.', 0x75706c6f6164732f313439353336303230395f72696d6f2e6a706567),
('Men Bottom Wear', 20, 'TROUSER', 3200, 'BLACK', 'PETER ENGLAND', '28,30,32,34,36', 'This is black trouser.', 0x75706c6f6164732f313439353336303237315f72696d6f2e6a706567),
('Men Bottom Wear', 21, 'TROUSER', 2600, 'BLACK', 'PETER ENGLAND', '28,30,32,34,36', 'This is a kind of formal dress.', 0x75706c6f6164732f313439353336303334305f72696d6f2e6a706567),
('Men Bottom Wear', 22, 'TROUSER', 1800, 'BLUE', 'PUMA', '28,30,32,34,36', 'This is puma branded.', 0x75706c6f6164732f313439353336303430305f72696d6f2e6a706567),
('Men Bottom Wear', 23, 'TROUSER', 1500, 'BLACK', 'PUMA', '28,30,32,34,36', 'This is mostly recommended trouser.', 0x75706c6f6164732f313439353336303435315f72696d6f2e6a706567),
('Men Foot Wear', 25, 'LOAFER', 3400, 'BLACK', 'PUMA', '6,7,8,9,10', 'This is best loafer.', 0x75706c6f6164732f313439353336303635375f72696d6f2e6a706567),
('Men Foot Wear', 27, 'SNEAKER', 1200, 'BLUE', 'ADIDAS', '6,7,8,9,10', 'This is a sneaker with a good price.', 0x75706c6f6164732f313439353336303832385f72696d6f2e6a706567),
('Men Foot Wear', 31, 'SNEAKER', 3400, 'SILVER', 'SPARX', '6,7,8,9,10', 'This is a great sneaker.', 0x75706c6f6164732f313439353336313038325f72696d6f2e6a706567),
('Men Foot Wear', 32, 'CASUAL SHOE', 4500, 'BLUE', 'NIKE', '6,7,8,9', 'This is nike latest edition shoe.', 0x75706c6f6164732f313439353337373037335f72696d6f2e6a7067),
('Men Foot Wear', 33, 'SNEAKER', 3200, 'BLUE', 'LOTTO', '6,7,8,9,10', 'This is blue sneaker.', 0x75706c6f6164732f313439353336313534385f72696d6f2e6a706567),
('Men Inner Wear', 34, 'BOXER', 350, 'BLUE', 'JOCKEY', '80,85,90', 'This is a blue boxer.', 0x75706c6f6164732f313439353336313637365f72696d6f2e6a706567),
('Men Inner Wear', 35, 'VEST', 240, 'BLACK', 'JOCKEY', '80,85,90', 'This is jockey vest.', 0x75706c6f6164732f313439353336313737315f72696d6f2e6a706567),
('Men Inner Wear', 36, 'VEST', 550, 'RED,BLACK,GREY', 'JOCKEY', '80,85,90', 'This is pack of 3 vests.', 0x75706c6f6164732f313439353336313834305f72696d6f2e6a706567),
('Men Inner Wear', 37, 'BOXER', 580, 'GREEN', 'JOCKEY', '80,85,90', 'This is pack of 2 boxers.', 0x75706c6f6164732f313439353336313930365f72696d6f2e6a706567),
('Men Inner Wear', 38, 'BOXER', 300, 'RED', 'JOCKEY', '80,85,90', 'This is a jockey boxer.', 0x75706c6f6164732f313439353336323031375f72696d6f2e6a706567),
('Men Inner Wear', 39, 'VEST', 180, 'BLACK', 'JOCKEY', '80,85,90', 'This is black jockey vest.', 0x75706c6f6164732f313439353336323036355f72696d6f2e6a706567),
('Men Sports Wear', 40, 'JARSEY', 1800, 'BLUE', 'NIKE', 'S,M,L', 'This is India team jarsey.', 0x75706c6f6164732f313439353336323237325f72696d6f2e6a706567),
('Men Sports Wear', 41, 'JARSEY', 2000, 'YELLOW', 'PUMA', 'S,M,L', 'This is borussia dortmund jarsey.', 0x75706c6f6164732f313439353336323334335f72696d6f2e6a706567),
('Men Sports Wear', 42, 'TRACK PANT', 1200, 'BLACK', 'PUMA', '28,30,32,34', 'This is a normal track pant.', 0x75706c6f6164732f313439353336323430365f72696d6f2e6a706567),
('Men Sports Wear', 43, 'CR7 JARSEY', 3600, 'WHITE', 'ADIDAS', 'S,M,L', 'This is original ronaldo jarsey.', 0x75706c6f6164732f313439353336323437365f72696d6f2e6a7067),
('Men Sports Wear', 44, 'JARSEY', 2800, 'BLACK', 'ADIDAS', 'S,M,L', 'This is real madrid jarsey.', 0x75706c6f6164732f313439353336323533355f72696d6f2e6a7067),
('Men Foot Wear', 45, 'SNEAKER', 3600, 'WHITE', 'REEBOK', '6,7,8,9', 'This is reebok white sneaker.', 0x75706c6f6164732f313439353336333139375f72696d6f2e6a706567),
('Men Foot Wear', 46, 'SLIPPER', 700, 'BLUE', 'PUMA', '6,7,8,9', 'This is puma slipper.', 0x75706c6f6164732f313439353336333236355f72696d6f2e6a706567),
('Men Foot Wear', 47, 'FLIP FLOP', 800, 'GREY', 'REEBOK', '6,7,8,9', 'This is a normal flip flop.', 0x75706c6f6164732f313439353336333333375f72696d6f2e6a706567),
('Men Sports Wear', 48, 'TRACK SUIT', 8000, 'BLUE', 'REEBOK', 'S,M,L', 'This is a full set of a track suit.', 0x75706c6f6164732f313439353336333533395f72696d6f2e6a706567),
('Men Sports Wear', 49, 'JARSEY', 2400, 'WHITE', 'ADIDAS', 'S,M,L', 'This is germany national team jarsey.', 0x75706c6f6164732f313439353336333539315f72696d6f2e6a706567),
('Men Sports Wear', 50, 'JARSEY', 2000, 'PURPLE', 'ADIDAS', 'S,M,L', 'This is real madrid away jarsey.', 0x75706c6f6164732f313439353336333731305f72696d6f2e6a706567),
('Men Sports Wear', 51, 'JARSEY', 3000, 'BLUE', 'ADIDAS', 'S,M,L', 'This chelsea team jarsey.', 0x75706c6f6164732f313439353336333736385f72696d6f2e6a706567),
('Men Sports Wear', 52, 'TRACK TOP', 3200, 'RED', 'ADIDAS', 'S,M,L', 'This is manchester united track top.', 0x75706c6f6164732f313439353336333934345f72696d6f2e6a706567),
('Men Sports Wear', 53, 'JARSEY', 2800, 'RED', 'ADIDAS', 'S,M,L', 'This is bayern munich jarsey.', 0x75706c6f6164732f313439353336333939335f72696d6f2e6a706567),
('Men Bottom Wear', 54, 'TRACK PANT', 1600, 'GREY', 'ADIDAS', '28,30,32,34', 'This is adidas track pant.', 0x75706c6f6164732f313439353336343034365f72696d6f2e6a706567),
('Men Foot Wear', 55, 'CANVAS', 2400, 'BROWN', 'SPARX', '6,7,8,9,10', 'This is a great canvas.', 0x75706c6f6164732f313439353336313332365f72696d6f2e6a706567),
('Women Ethnic Wear', 56, 'ETHNIC DRESS', 3600, 'BLACK', 'ETHNIC BRAND', 'X,Y,Z', 'This is a kind of ethnic dress.', 0x75706c6f6164732f313439353337373636375f72696d6f2e6a706567),
('Women Ethnic Wear', 57, 'SAREE', 4600, 'BLUE', 'ETHNIC BRAND', 'X,Y,Z', 'This is a blue saree.', 0x75706c6f6164732f313439353337373735315f72696d6f2e6a706567),
('Women Ethnic Wear', 58, 'SAREE', 4200, 'RED', 'ETHNIC BRAND', 'X,Y,Z', 'This is red saree.', 0x75706c6f6164732f313439353337373832335f72696d6f2e6a706567),
('Women Ethnic Wear', 59, 'SAREE', 6000, 'BLUE', 'ETHNIC BRAND', 'X,Y,Z', 'This is blue saree.', 0x75706c6f6164732f313439353337373837395f72696d6f2e6a706567),
('Women Ethnic Wear', 60, 'ETHNIC DRESS', 3200, 'BLACK', 'ETHNIC BRAND', 'X,Y,Z', 'This is a ethnic dress.', 0x75706c6f6164732f313439353337373932385f72696d6f2e6a706567),
('Women Ethnic Wear', 61, 'ETHNIC DRESS', 5400, 'BLACK', 'ETHNIC BRAND', 'X,Y,Z', 'This is a ethnic dress.', 0x75706c6f6164732f313439353337373937305f72696d6f2e6a706567),
('Women Western Wear', 64, 'WESTERN DRESS', 3800, 'BLUE', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383339355f72696d6f2e6a706567),
('Women Western Wear', 65, 'WESTERN DRESS', 4300, 'BLACK', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383430305f72696d6f2e6a706567),
('Women Western Wear', 66, 'WESTERN DRESS', 7000, 'SKY BLUE', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383430365f72696d6f2e6a706567),
('Women Western Wear', 67, 'WESTERN DRESS', 4400, 'PINK', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383431315f72696d6f2e6a706567),
('Women Western Wear', 68, 'WESTERN DRESS', 6200, 'BLUE', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383431365f72696d6f2e6a706567),
('Women Western Wear', 69, 'WESTERN DRESS', 4500, 'WHITE', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383432315f72696d6f2e6a706567),
('Women Western Wear', 70, 'WESTERN DRESS', 7400, 'BLACK', 'WESTERN BRAND', 'X,Y,Z', 'This is a western dress.', 0x75706c6f6164732f313439353337383432365f72696d6f2e6a706567),
('Women Foot Wear', 71, 'STYLISH SHOE', 2200, 'BLACK', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337383935335f72696d6f2e6a706567),
('Women Foot Wear', 72, 'STYLISH SHOE', 1800, 'BLACK', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337383936305f72696d6f2e6a706567),
('Women Foot Wear', 73, 'STYLISH SHOE', 2000, 'SKY BLUE', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337383938325f72696d6f2e6a706567),
('Women Foot Wear', 74, 'STYLISH SHOE', 4600, 'GOLDEN', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337393030305f72696d6f2e6a706567),
('Women Foot Wear', 75, 'STYLISH SHOE', 3400, 'GOLDEN', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337393030395f72696d6f2e6a706567),
('Women Foot Wear', 76, 'STYLISH SHOE', 3000, 'RED', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337393031345f72696d6f2e6a706567),
('Women Foot Wear', 77, 'STYLISH SHOE', 2600, 'BLACK', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337393032305f72696d6f2e6a706567),
('Women Foot Wear', 78, 'STYLISH SHOE', 1600, 'BLACK', 'SHOE BRAND', '6,7,8,9', 'This is a stylish shoe.', 0x75706c6f6164732f313439353337393032355f72696d6f2e6a706567),
('Women Inner Wear', 79, 'INNER WEAR', 1400, 'BLACK', 'INNER BRAND', 'X,Y,Z', 'This is inner wear for women.', 0x75706c6f6164732f313439353337393534355f72696d6f2e6a706567),
('Women Inner Wear', 80, 'INNER WEAR', 1200, 'RED', 'INNER BRAND', 'X,Y,Z', 'This is inner wear for women.', 0x75706c6f6164732f313439353337393535375f72696d6f2e6a706567),
('Women Inner Wear', 81, 'INNER WEAR', 3400, 'BLACK', 'INNER BRAND', 'X,Y,Z', 'This is pack of 3 inner wear for women.', 0x75706c6f6164732f313439353337393536325f72696d6f2e6a706567),
('Women Inner Wear', 82, 'INNER WEAR', 4000, 'YELLOW,RED,BLUE', 'INNER BRAND', 'X,Y,Z', 'This is pack of 3 inner wear for women.', 0x75706c6f6164732f313439353337393536395f72696d6f2e6a706567),
('Women Inner Wear', 83, 'INNER WEAR', 2200, 'BLUE', 'INNER BRAND', 'X,Y,Z', 'This is pack of 2 inner wear for women.', 0x75706c6f6164732f313439353337393537375f72696d6f2e6a706567),
('Women Inner Wear', 84, 'INNER WEAR', 2000, 'RED', 'INNER BRAND', 'X,Y,Z', 'This is pack of 2 inner wear for women.', 0x75706c6f6164732f313439353337393538325f72696d6f2e6a706567),
('Women Inner Wear', 85, 'INNER WEAR', 1800, 'BLACK', 'INNER BRAND', 'X,Y,Z', 'This is inner wear for women.', 0x75706c6f6164732f313439353337393538385f72696d6f2e6a706567),
('Boys Clothing', 86, 'SHERWANI', 1200, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids sherwani.', 0x75706c6f6164732f313439353338303135345f72696d6f2e6a706567),
('Boys Clothing', 87, 'T SHIRT', 1400, 'WHITE', 'KIDS BRAND', 'X,Y,Z', 'This is kids t shirt.', 0x75706c6f6164732f313439353338303135395f72696d6f2e6a706567),
('Boys Clothing', 88, 'T SHIRT', 1000, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids t shirt.', 0x75706c6f6164732f313439353338303136345f72696d6f2e6a706567),
('Boys Clothing', 89, 'T SHIRT', 1400, 'BLUE', 'KIDS BRAND', 'X,Y,Z', 'This is kids t shirt.', 0x75706c6f6164732f313439353338303136395f72696d6f2e6a706567),
('Boys Clothing', 90, 'T SHIRT', 800, 'YELLOW', 'KIDS BRAND', 'X,Y,Z', 'This is kids t shirt.', 0x75706c6f6164732f313439353338303137345f72696d6f2e6a706567),
('Boys Clothing', 91, 'TROUSER', 2200, 'RED,BLUE,ORANGE', 'KIDS BRAND', 'X,Y,Z', 'This is kids pack of 3 trouser.', 0x75706c6f6164732f313439353338303137395f72696d6f2e6a706567),
('Girls Clothing', 92, 'FROCK', 1200, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303638325f72696d6f2e6a706567),
('Girls Clothing', 93, 'FROCK', 1400, 'SKY BLUE', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303638385f72696d6f2e6a706567),
('Girls Clothing', 94, 'FROCK', 1100, 'GREEN', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303639325f72696d6f2e6a706567),
('Girls Clothing', 95, 'FROCK', 1800, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303730325f72696d6f2e6a706567),
('Girls Clothing', 96, 'FROCK', 1500, 'PINK', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303730385f72696d6f2e6a706567),
('Girls Clothing', 97, 'FROCK', 1600, 'WHITE', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303731335f72696d6f2e6a706567),
('Girls Clothing', 98, 'FROCK', 1000, 'WHITE', 'KIDS BRAND', 'X,Y,Z', 'This is kids frock.', 0x75706c6f6164732f313439353338303731385f72696d6f2e6a706567),
('Boys Foot Wear', 99, 'SHOE', 1000, 'ORANGE', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338313531345f72696d6f2e6a706567),
('Boys Foot Wear', 100, 'KITO', 1200, 'BLACK', 'KIDS BRAND', 'X,Y,Z', 'This is kids kito.', 0x75706c6f6164732f313439353338313532315f72696d6f2e6a706567),
('Boys Foot Wear', 101, 'KITO', 1100, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids kito.', 0x75706c6f6164732f313439353338313532365f72696d6f2e6a706567),
('Boys Foot Wear', 102, 'SNEAKER', 1500, 'BLACK', 'PUMA', 'X,Y,Z', 'This is kids sneaker.', 0x75706c6f6164732f313439353338313533305f72696d6f2e6a706567),
('Boys Foot Wear', 103, 'KITO', 1000, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids kito.', 0x75706c6f6164732f313439353338313533355f72696d6f2e6a706567),
('Boys Foot Wear', 104, 'SNEAKER', 1600, 'BLUE', 'PUMA', 'X,Y,Z', 'This is kids sneaker.', 0x75706c6f6164732f313439353338313533395f72696d6f2e6a706567),
('Girls Foot Wear', 108, 'KIDS SHOE', 1000, 'PINK', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338323031315f72696d6f2e6a706567),
('Girls Foot Wear', 109, 'KIDS SHOE', 1200, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338323031365f72696d6f2e6a706567),
('Girls Foot Wear', 110, 'KIDS SHOE', 1100, 'PINK', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338323032315f72696d6f2e6a706567),
('Girls Foot Wear', 111, 'KIDS SHOE', 800, 'BLUE', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338323033305f72696d6f2e6a706567),
('Girls Foot Wear', 112, 'KIDS SHOE', 1500, 'RED', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338323033385f72696d6f2e6a706567),
('Girls Foot Wear', 113, 'KIDS SHOE', 1400, 'VIOLET', 'KIDS BRAND', 'X,Y,Z', 'This is kids shoe.', 0x75706c6f6164732f313439353338323034335f72696d6f2e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `review` varchar(800) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `email`, `name`, `pid`, `rating`, `review`) VALUES
(14, 'dpritam589@gmail.com', 'Pritam Das', 7, '4', 'Good.'),
(16, 'msd7@gmail.com', 'MS Dhoni', 44, '5', 'This is good.'),
(18, 'dpritam589@gmail.com', 'Pritam Das', 40, '3', 'Quality is average.'),
(19, 'msd7@gmail.com', 'MS Dhoni', 7, '5', 'Great Product.'),
(21, 'msd7@gmail.com', 'MS Dhoni', 32, '5', 'Best Shoe.'),
(22, 'msd7@gmail.com', 'MS Dhoni', 33, '3', 'Average quality.'),
(23, 'subhajithalder626@gmail.com', 'Subhajit Halder', 43, '5', 'I am a CR7 fan.');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pprice` bigint(20) NOT NULL,
  `pcolour` varchar(80) NOT NULL,
  `pbrand` varchar(50) NOT NULL,
  `psize` varchar(40) NOT NULL,
  `pdescription` varchar(400) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
