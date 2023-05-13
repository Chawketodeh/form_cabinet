-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 10:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mon_cabinet`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `passw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date_res` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `type`, `name`, `email`, `phone`, `address`, `passw`, `date_res`) VALUES
(4, '', 'Bob Marley 3', 'bob@gmail.com', '+111555999', 'Texas, USA', '$2y$10$xUQyXgpjADn.7GrsNPPnAe3rtQ3ilaGqE.h0PU1jW41MwKXUZF3j2', '2023-05-07 18:50:03'),
(5, '', 'Cristiano Ronaldo', 'cristiano.ronaldo@gmail.com', '+32447788993', 'Manchester, England', '$2y$10$TAf0twlAIUhZhYSVVcDYouGedJy7hajnbPr4ZxnkN6QlK5dB9X9sy', '2023-07-20 16:36:03'),
(28, '', 'loulou', 'loulou@gmail.com', '+1111111111222222222', 'Texas, USA', '12345678', '2023-05-08 20:40:33'),
(29, '', 'chou', 'chou@gmail.com', '1234567890', 'Clifornia, USA', '11111111', '2023-05-09 08:11:39'),
(31, 'Client', 'saf', 'saf@gmail.com', '+1111111111222222222', 'Texas, USA', '$2y$10$5vT2XfsWijQ8zD0WNr2x3eVtnVCD08lH9lfrDctlzS8bKHsM42UFC', '2023-05-09 13:48:00'),
(32, '', 'ayoub', 'ayoub@gmail.com', '+1111111111222222222', 'SOUSSE', '$2y$10$L7Me0Q.1o3I.KRkYXVyLfOeXsuJ3sDBxk1q6Xez3Qhv1Glwl6Ea5y', '2023-05-09 16:03:10'),
(33, '', 'test', 'test@gmail.com', '+1111111111222222222', 'Texas, USA', '123', '2023-05-09 16:13:55'),
(34, '', 'salem', 'salem@gmail.com', '+1111111111222222222', 'Texas, USA', '112', '2023-05-10 00:36:52'),
(35, '', 'salem 1', 'salem1@gmail.com', '+1111111111222222222', 'Texas, USA', '123', '2023-05-10 00:38:43'),
(36, 'Surgeon', 'salut', 'salut@gmail.com', '+1111111111222222222', 'Texas, USA', '&&&', '2023-05-10 01:52:47'),
(37, '', 'Neila hochlef', 'Neila.hochlef@gmail.com', '243215367', 'Sousse', '$2y$10$KIp8DlICfq7RAwe7SqWbfuFmzhJ8AND8q8jcqlJ3Gf5cS3WWQBZ3S', '2023-05-10 09:24:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
