-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2020 at 06:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `description`) VALUES
(8, 'Immersive 3D elements', '3D visuals have always delighted people; what held this trend back was technology and the (previously) expensive price tag. But as Pinch Studio explains, the technology is now in a place where you can design in 3D without NASA-tier equipment, opening the gates to more and more designers.'),
(9, 'Virtual Reality and Augmented Reality', 'Virtual Reality (VR) immerses the user in an environment while Augment Reality (AR) enhances their environment. Although VR has primarily been used for gaming thus far, it has also been used for training, as with VirtualShip, a simulation software used to train U.S. Navy, Army, and Coast Guard ship captains. The popular Pokemon Go is an example of AR.'),
(10, 'Big Data and augmented analytics', 'Big Data refers to the exponential growth in the amount of data being created in our world. Thanks to augmented analytics (highly advanced data analytics, often fueled by AI techniques), we can now make sense of and work with enormously complex and varied streams of data.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(15) NOT NULL DEFAULT 'Customer',
  `name` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `password`, `contact`, `verified`, `deleted`) VALUES
(1, 'Administrator', 'Admin 1', 'root', 'toor', 9898000000, 1, 0),
(2, 'Customer', 'Customer 1', 'user1', 'pass1', 9898000001, 1, 0),
(3, 'Customer', 'Customer 2', 'user2', 'pass2', 9898000002, 1, 0),
(4, 'Customer', 'Customer 3', 'user3', 'pass3', 9898000003, 0, 0),
(5, 'Customer', 'Customer 4', 'user4', 'pass4', 9898000004, 0, 1),
(6, 'Customer', 'jigisha ', 'jigisha123', 'jigisha123', 7980358250, 0, 0),
(7, 'Customer', 'hsjsjd', 'user6', 'pass6', 9408523751, 0, 0),
(8, 'Customer', 'jigisha surani', 'jigisha1', 'jigisha1', 7780358055, 0, 0),
(9, 'Customer', 'jigisha ', 'jigisha12', 'jigisha12', 6547383773, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
