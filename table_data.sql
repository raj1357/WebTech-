-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 05:18 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `username` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `password1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`username`, `email`, `password1`) VALUES
('madhu', 'madhuv299@gmail.com', 'b2016ac8625134fad426714f331375b3'),
('mmkvarma', 'madthinker7997@gmail.com', '9556a58b836c8937d92c65267d9fedea'),
('sherlock', 'sherlock@gmail.com', 'f04af61b3f332afa0ceec786a42cd365'),
('bahubali', 'amarendrabahubali@outlook.com', '7a8e0556a513b7d2255553ebfb6afec5'),
('Advaita Bhushan', 'Detective234@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
('MMK', '15pa1a05a3@vishnu.edu.in', '118207cd20f31ce29d576fb44af77005'),
('Goku', 'intergallatic@nasa.com', '53a580e2958f15042d2310ee6f5ddbdb'),
('Jyothi ', 'mom@mylove.com', '758ffaed2f0c7ada15b8993ae4ba4318'),
('COOl', 'svjsjvbwejn', 'f47d6d09676a6713ab5b6dc530bbb64f'),
('Prabhas', 'bahubali@recordsetter.com', '8a324e70b087f45fffd85623a35b8bf3'),
('usernamesvncuwsdufb', 'nceujnsgbfkesnk', 'f86012534f6e345c5dba6fecf637a320'),
('snfcekrsd', 'erbgsudnvckn@gmial.com', '61a930a875b65d9b782035a8defe4b46'),
('wjsndvubcuejb', 'cebrsgb@gmail.com', '8e602c50c0f0ac08a09b323083df06d8'),
('Henry Cavill', 'SUPERMAN@GMAIL.COM', '41062c61d30ed5ff8e493c12c392bd49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
