-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2015 at 07:35 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `date` int(11) NOT NULL,
  `html` text NOT NULL,
  `update` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `date`, `html`, `update`) VALUES
(12, 'Somesing', 1451308276, 'text2', 1451315084),
(17, 'Somesing t', 1451308293, 'text2as', 0),
(20, '{:uk}Ð¤Ð¾Ñ', 1451308489, 'asdasda', 0),
(27, 'aaasdasd', 1451308547, 'asdasda', 0),
(31, 'Reactasdsa', 1451308656, 'asdasdasdas', 0),
(34, 'User', 1451308769, 'asdasd', 0),
(35, 'some new', 1451308781, 'asdasda', 0),
(38, 'newOne', 1451313527, 'asdasda', 0),
(39, 'dxczxc', 1451313675, 'zxczxczx', 0),
(40, 'ggg', 1451313700, 'ggg&lt;dsad&gt;&lt;/asdas&gt;', 0),
(41, '&#1050;&#1', 1451314182, 'xzczxczxcz', 1451314182),
(42, 'new anaa', 1451317690, 'dsadasd', 1451317690),
(46, 'sdfds', 1451320139, 'fsdfsdf', 1451320139),
(47, 'asdadadaaa', 1451320170, 'sdasdasd', 1451320170),
(48, '', 0, '', 0),
(57, 'ghhhhh', 0, '', 0),
(58, 'dddddddddd', 1451320834, 'dfgd', 1451320834);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
