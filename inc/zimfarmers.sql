-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 12:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zimfarmers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'tebulo', '2017project'),
(2, 'kasere', '2017project');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `farming_level` varchar(50) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `surname`, `username`, `gender`, `password`, `address`, `bio`, `farming_level`, `experience`, `location`, `phone`, `email`, `question`) VALUES
(4, 'tapiwa', 'Chiganyura', 'taps', 'Male', '321gnitset', 'chitungwiza      &#13;&#10;', 'supplier of seed maize', 'Intermediate', '7', 'Harare', '0774354324', 'Aibertmadziva13@gmail.com', 'maize');

-- --------------------------------------------------------

--
-- Table structure for table `buyers_adverts`
--

CREATE TABLE `buyers_adverts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers_adverts`
--

INSERT INTO `buyers_adverts` (`id`, `username`, `subject`, `image`, `message`, `phone`, `location`, `time`) VALUES
(1, 'noby', 'seed maize', 'Fresh-Corn-Vegetable-with-Green-Leaves_FEATURED-IMAGE_iStock_000010309799XSmall.jpg', 'i am selling seed maize&#13;&#10;', '0716605802', 'Bulawayo', '2017-11-09 09:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(100) NOT NULL,
  `farming_type` varchar(50) NOT NULL,
  `farming_level` varchar(50) NOT NULL,
  `hectares` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `surname`, `username`, `gender`, `password`, `address`, `farming_type`, `farming_level`, `hectares`, `location`, `phone`, `email`, `question`) VALUES
(12, 'wilson', 'fani', 'briz', 'Male', 'gnitset', '&#13;&#10;             nehosho', 'Mixed Farming', 'Beginner', '9', 'Bulawayo', '0774354324', 'briz@gmail.com', 'maize'),
(14, 'Tapiwa', 'Chiganyura', 'tapiwa', 'Male', '654321', '&#13;&#10;Chitungwiza', 'Mixed Farming', 'Intermediate', '2', 'Harare', '0774354324', 'briz@gmail.com', 'maize');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_adverts`
--

CREATE TABLE `farmers_adverts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_adverts`
--

INSERT INTO `farmers_adverts` (`id`, `username`, `subject`, `image`, `message`, `phone`, `location`, `time`) VALUES
(1, 'ben', 'maize', 'testimony.png', 'cheap cheap maize&#13;&#10;', '0772354000', 'harare', '2017-11-09 05:43:30'),
(2, 'briz', 'maize', 'testimony.png', '&#13;&#10;   testing system', '0774354324', 'senga', '2017-11-09 06:06:37'),
(3, 'tapiwa', 'seed', 'images.jpg', '&#13;&#10;       I am selling 5kg sunflower seed..call me for more info', '0774354324', 'Harare', '2017-11-09 05:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_forum`
--

CREATE TABLE `farmers_forum` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_forum`
--

INSERT INTO `farmers_forum` (`id`, `username`, `message`, `time`) VALUES
(4, 'tapiwa', 'wasup guys', '2017-11-08 10:09:38'),
(13, 'briz', 'wasup guys', '2017-11-09 11:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_status`
--

CREATE TABLE `farmers_status` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_status`
--

INSERT INTO `farmers_status` (`id`, `username`, `message`, `image`, `time`) VALUES
(20, 'noby', '&#13;&#10;&#9;&#9;   testing message', 'testimony.png', '2017-11-08 05:02:34'),
(24, 'briz', '&#13;&#10;&#9;&#9; done', 'testimony.png', '2017-11-08 05:02:34'),
(25, 'briz', '&#13;&#10;&#9;&#9;   finakl', '22904762_1229079643860595_9083320643082040341_o.jpg', '2017-11-08 05:05:19'),
(26, 'briz', '&#13;&#10;&#9;&#9;finally', '', '2017-11-08 10:06:25'),
(27, 'briz', '&#13;&#10;&#9;&#9;   yaah it wrkd', '', '2017-11-08 10:14:26'),
(28, 'briz', '&#13;&#10;&#9;&#9;   is it wrking', '', '2017-11-08 10:14:49'),
(29, 'tapiwa', '&#13;&#10;&#9;&#9;   taps checking', '', '2017-11-08 10:16:32'),
(30, 'briz', '&#13;&#10;&#9;&#9;   welcome', '', '2017-11-08 10:31:38'),
(31, 'briz', '&#13;&#10;&#9;&#9;what is this', 'E1.jpg', '2017-11-08 14:23:45'),
(32, 'briz', '&#13;&#10;&#9;&#9;   check', 'E.jpg', '2017-11-08 14:29:51'),
(33, 'briz', '&#13;&#10;&#9;&#9;   oowk hope this wil help', 'E.jpg', '2017-11-08 14:33:13'),
(34, 'briz', '&#13;&#10;&#9;&#9;   hey hey hey farmers', 'testimony.png', '2017-11-08 14:35:37'),
(35, 'briz', '&#13;&#10;&#9;&#9;   hiiiiwe', '22904762_1229079643860595_9083320643082040341_o.jpg', '2017-11-08 14:50:12'),
(36, 'briz', 'maize production&#13;&#10;&#9;&#9;', 'Fresh-Corn-Vegetable-with-Green-Leaves_FEATURED-IMAGE_iStock_000010309799XSmall.jpg', '2017-11-09 04:56:06'),
(37, 'tapiwa', '&#13;&#10;&#9;&#9;   sunflower', 'images.jpg', '2017-11-09 06:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `crop_type` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `company` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `hectares` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `helpers`
--

CREATE TABLE `helpers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(50) NOT NULL,
  `farming_type` varchar(50) NOT NULL,
  `farming_level` varchar(50) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpers`
--

INSERT INTO `helpers` (`id`, `name`, `surname`, `username`, `gender`, `password`, `address`, `farming_type`, `farming_level`, `experience`, `location`, `phone`, `email`, `question`) VALUES
(2, 'grace', 'tebulo', 'grace', 'Male', '2gnitset', '&#13;&#10;             cabs houses', 'Hotculture', 'Proffessional', '9', 'Mashonaland West', '0716605802', 'nobytechy@gmail.com', 'maize');

-- --------------------------------------------------------

--
-- Table structure for table `helpers_forum`
--

CREATE TABLE `helpers_forum` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpers_forum`
--

INSERT INTO `helpers_forum` (`id`, `username`, `message`, `time`) VALUES
(1, 'ben', 'hey', '2017-11-09 08:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `username`, `title`, `message`, `time`) VALUES
(1, 'tapiwa', 'maize seed', 'ndeipi mbeu inoita this year yechibage', '2017-11-09 05:55:57'),
(2, 'ben', 'price', 'seed maize imariii', '2017-11-09 05:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`, `phone`) VALUES
(1, '', '0774354324'),
(2, '', '0774354324'),
(3, '', '0774354324'),
(4, 'wil@gmail.com', ''),
(5, 'Aibertmadziva13@gmail.com', ''),
(6, 'nobytechy@gmail.com', ''),
(7, '', '3445567898');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `username`, `image`, `message`, `time`) VALUES
(5, 'tebulo', 'tractor_field_plowing_clouds_agriculture_51977_2048x1152.jpg', '&#13;&#10;&#9;&#9; new tractors in the country', '2017-11-09 05:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers_adverts`
--
ALTER TABLE `buyers_adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers_adverts`
--
ALTER TABLE `farmers_adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers_forum`
--
ALTER TABLE `farmers_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers_status`
--
ALTER TABLE `farmers_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpers`
--
ALTER TABLE `helpers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpers_forum`
--
ALTER TABLE `helpers_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `buyers_adverts`
--
ALTER TABLE `buyers_adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `farmers_adverts`
--
ALTER TABLE `farmers_adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `farmers_forum`
--
ALTER TABLE `farmers_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `farmers_status`
--
ALTER TABLE `farmers_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `helpers`
--
ALTER TABLE `helpers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `helpers_forum`
--
ALTER TABLE `helpers_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
