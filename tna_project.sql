-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2022 at 06:11 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tna_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(1, 'hova', '120xrdyuguih 12099h   h  ghyrvycyfcytcf fy ', 'images.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `department` enum('TRANSACTIONAL BANKING','CORPORATE BANKING') NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `department`, `password`) VALUES
(1, 'tyut', 'ezramokua068@gmail.com', 'CORPORATE BANKING', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'ff', 'ezrua08r@gmail.com', 'TRANSACTIONAL BANKING', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'rt', 'ezrua085r@gmail.com', 'TRANSACTIONAL BANKING', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'ezramoku', 'ezruag08@gmail.com', 'TRANSACTIONAL BANKING', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'admin', 'william@webdamn.com', 'TRANSACTIONAL BANKING', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

DROP TABLE IF EXISTS `user2`;
CREATE TABLE IF NOT EXISTS `user2` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `department` enum('Transactional_banking','Corporate_banking') NOT NULL,
  `a` enum('-','Yes','No') NOT NULL,
  `b` enum('-','Yes','No') NOT NULL,
  `c` enum('-','Yes','No') NOT NULL,
  `d` enum('-','Yes','No') NOT NULL,
  `e` enum('-','Yes','No') NOT NULL,
  `f` enum('-','Yes','No') NOT NULL,
  `g` enum('Yes','No') NOT NULL,
  `h` enum('Yes','No') NOT NULL,
  `i` enum('Yes','No') NOT NULL,
  `j` enum('Yes','No') NOT NULL,
  `k` enum('Yes','No') NOT NULL,
  `l` enum('Yes','No') NOT NULL,
  `m` enum('Yes','No') NOT NULL,
  `n` enum('Yes','No') NOT NULL,
  `o` enum('Yes','No') NOT NULL,
  `p` enum('Yes','No') NOT NULL,
  `q` enum('Yes','No') NOT NULL,
  `r` enum('Yes','No') NOT NULL,
  `s` enum('Yes','No') NOT NULL,
  `t` enum('Yes','No') NOT NULL,
  `u` enum('Yes','No') NOT NULL,
  `v` enum('Yes','No') NOT NULL,
  `w` enum('Yes','No') NOT NULL,
  `x` enum('Yes','No') NOT NULL,
  `y` enum('Yes','No') NOT NULL,
  `z` enum('Yes','No') NOT NULL,
  `aa` enum('Yes','No') NOT NULL,
  `bb` enum('Yes','No') NOT NULL,
  `cc` enum('Yes','No') NOT NULL,
  `dd` enum('Yes','No') NOT NULL,
  `ee` enum('Yes','No') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id`, `email`, `department`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`, `x`, `y`, `z`, `aa`, `bb`, `cc`, `dd`, `ee`) VALUES
(40, 'ezra.obwocha@ncbagroup.com', 'Transactional_banking', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(48, 'myadmin@webdamn.com', 'Transactional_banking', 'Yes', 'Yes', 'Yes', 'No', 'No', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(47, 'admin@webdamn.com', 'Corporate_banking', 'Yes', 'No', 'No', 'No', 'No', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(49, 'myadmin@webdamn.comm', 'Transactional_banking', 'Yes', 'Yes', 'No', 'Yes', 'Yes', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(50, 'myadmin@webdamn.com', 'Corporate_banking', 'Yes', 'No', 'No', 'No', 'No', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user3`
--

DROP TABLE IF EXISTS `user3`;
CREATE TABLE IF NOT EXISTS `user3` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `department` enum('Transactional_banking','Corporate_banking') NOT NULL,
  `a` enum('-','Yes','No') NOT NULL,
  `b` enum('-','Yes','No') NOT NULL,
  `c` enum('-','Yes','No') NOT NULL,
  `d` enum('-','Yes','No') NOT NULL,
  `e` enum('-','Yes','No') NOT NULL,
  `f` enum('-','Yes','No') NOT NULL,
  `g` enum('Yes','No') NOT NULL,
  `h` enum('Yes','No') NOT NULL,
  `i` enum('Yes','No') NOT NULL,
  `j` enum('Yes','No') NOT NULL,
  `k` enum('Yes','No') NOT NULL,
  `l` enum('Yes','No') NOT NULL,
  `m` enum('Yes','No') NOT NULL,
  `n` enum('Yes','No') NOT NULL,
  `o` enum('Yes','No') NOT NULL,
  `p` enum('Yes','No') NOT NULL,
  `q` enum('Yes','No') NOT NULL,
  `r` enum('Yes','No') NOT NULL,
  `s` enum('Yes','No') NOT NULL,
  `t` enum('Yes','No') NOT NULL,
  `u` enum('Yes','No') NOT NULL,
  `v` enum('Yes','No') NOT NULL,
  `w` enum('Yes','No') NOT NULL,
  `x` enum('Yes','No') NOT NULL,
  `y` enum('Yes','No') NOT NULL,
  `z` enum('Yes','No') NOT NULL,
  `aa` enum('Yes','No') NOT NULL,
  `bb` enum('Yes','No') NOT NULL,
  `cc` enum('Yes','No') NOT NULL,
  `dd` enum('Yes','No') NOT NULL,
  `ee` enum('Yes','No') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user3`
--

INSERT INTO `user3` (`id`, `email`, `department`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`, `x`, `y`, `z`, `aa`, `bb`, `cc`, `dd`, `ee`) VALUES
(47, 'ezramokua068@gmail.com', 'Corporate_banking', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(46, 'william@webdamn.com', 'Transactional_banking', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `department` enum('Transactional_banking','Corporate_banking') NOT NULL,
  `a` enum('-','Yes','No') NOT NULL,
  `b` enum('-','Yes','No') NOT NULL,
  `c` enum('-','Yes','No') NOT NULL,
  `d` enum('-','Yes','No') NOT NULL,
  `e` enum('-','Yes','No') NOT NULL,
  `f` enum('-','Yes','No') NOT NULL,
  `g` enum('Yes','No') NOT NULL,
  `h` enum('Yes','No') NOT NULL,
  `i` enum('Yes','No') NOT NULL,
  `j` enum('Yes','No') NOT NULL,
  `k` enum('Yes','No') NOT NULL,
  `l` enum('Yes','No') NOT NULL,
  `m` enum('Yes','No') NOT NULL,
  `n` enum('Yes','No') NOT NULL,
  `o` enum('Yes','No') NOT NULL,
  `p` enum('Yes','No') NOT NULL,
  `q` enum('Yes','No') NOT NULL,
  `r` enum('Yes','No') NOT NULL,
  `s` enum('Yes','No') NOT NULL,
  `t` enum('Yes','No') NOT NULL,
  `u` enum('Yes','No') NOT NULL,
  `v` enum('Yes','No') NOT NULL,
  `w` enum('Yes','No') NOT NULL,
  `x` enum('Yes','No') NOT NULL,
  `y` enum('Yes','No') NOT NULL,
  `z` enum('Yes','No') NOT NULL,
  `aa` enum('Yes','No') NOT NULL,
  `bb` enum('Yes','No') NOT NULL,
  `cc` enum('Yes','No') NOT NULL,
  `dd` enum('Yes','No') NOT NULL,
  `ee` enum('Yes','No') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `department`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`, `x`, `y`, `z`, `aa`, `bb`, `cc`, `dd`, `ee`) VALUES
(50, 'myadmin@webdamn.com', 'Corporate_banking', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes'),
(49, 'william@webdamn.com', 'Corporate_banking', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
