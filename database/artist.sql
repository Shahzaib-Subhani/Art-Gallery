-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 07:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(6) NOT NULL,
  `descrip` longtext NOT NULL,
  `user` int(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `quantity` int(5) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `sell` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `title`, `price`, `descrip`, `user`, `img`, `quantity`, `cart_id`, `sell`) VALUES
(9, 'Guardian Knot Wood', '19200', 'Wood carving is a form of woodworking by means of a cutting tool (knife) in one hand or a chisel by two hands or with one hand on a chisel and one hand on a mallet, resulting in a wooden figure or figurine, or in the sculptural ornamentation of a wooden object.', 42, 'w.jpg', 1, 19, 41),
(11, 'White Horse Ceramic', '12600', 'A ceramic material is an inorganic, non-metallic, often crystalline oxide, nitride or carbide material. Some elements, such as carbon or silicon, may be considered ceramics. Ceramic materials are brittle, hard, strong in compression, weak in shearing and tension', 41, 'h.jpg', 2, 23, 42);

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(6) NOT NULL,
  `descrip` longtext NOT NULL,
  `seller` int(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(6) NOT NULL,
  `descrip` longtext NOT NULL,
  `seller` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `price`, `descrip`, `seller`, `img`) VALUES
(17, 'Dog Standing Bronze', 16800, 'Common bronze alloys have the unusual and desirable property of expanding slightly just before they set, thus filling the finest details of a mould. Then, as the bronze cools, it shrinks a little, making it easier to separate from the mould.', 42, 'dog.jpg'),
(18, 'Golden Buddha Statue', 12800, 'A relatively rare element, gold is a precious metal that has been used for coinage, jewelry, and other arts throughout recorded history. In the past, a gold standard was often implemented as a monetary policy.', 42, 'b.jpg'),
(19, 'Guardian Knot Wood', 19200, 'Wood carving is a form of woodworking by means of a cutting tool (knife) in one hand or a chisel by two hands or with one hand on a chisel and one hand on a mallet, resulting in a wooden figure or figurine, or in the sculptural ornamentation of a wooden object.', 41, 'w.jpg'),
(20, 'Japanese Geisha Ceramic', 11200, 'A ceramic material is an inorganic, non-metallic, often crystalline oxide, nitride or carbide material. Some elements, such as carbon or silicon, may be considered ceramics. Ceramic materials are brittle, hard, strong in compression, weak in shearing and tension.', 41, 'b.jpg'),
(22, 'Morning Dew Bronze', 45800, 'Common bronze alloys have the unusual and desirable property of expanding slightly just before they set, thus filling the finest details of a mould. Then, as the bronze cools, it shrinks a little, making it easier to separate from the mould', 42, 'mor.jpg'),
(23, 'White Horse Ceramic', 12600, 'A ceramic material is an inorganic, non-metallic, often crystalline oxide, nitride or carbide material. Some elements, such as carbon or silicon, may be considered ceramics. Ceramic materials are brittle, hard, strong in compression, weak in shearing and tension', 42, 'h.jpg'),
(33, 'jsjdfh', 4888, 'kfjsdkjfksdjfk', 41, 'girl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(36, 'ramish', 'qamar', 'ramishqamar89@hotmail.com', '83fb4d28c2d47f94e7bb57a04d850651'),
(37, 'usama', 'awan', 'alviu027@gmail.com', 'a92c6dac3229d848eaefb8e23a30707f'),
(41, 'Shahzaib', 'Subhani', 'shahzaibsubhani28@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(42, 'Subhani', 'shah', 'mianshahzaibpnj@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(43, 'Raham', 'Khan', 'rehanumar7303250@gmail.com', 'bd612f4c2ca5410ef8a2cce84b13d309'),
(44, 'Noor', 'Fatima', 'noor02fati@gmail.com', 'db5a15e4d0c2708f1f41ee1be55cdbea'),
(45, 'Muzamal', 'Rehman', 'muzamal.rso@gmail.com', '0192023a7bbd73250516f069df18b500'),
(46, 'Usman', 'Choora', 'subhaniusman285@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `email`, `otp`) VALUES
(56, 'shahzaibsubhani28@gmail.com', 641657),
(57, 'shahzaibsubhani28@gmail.com', 287248),
(58, 'ramishqamar89@hotmail.com', 545654),
(59, 'alviu027@gmail.com', 999258),
(60, 'dhsjdh@kdjkd.fjkdkf', 707559),
(61, 'mianshahzaibpnj@gmail.com', 219775),
(62, 'mianshahzaibpnj@gmail.com', 646852),
(63, 'mianshahzaibpnj@gmail.com', 121285),
(64, 'mianshahzaibpnj@gmail.com', 693369),
(65, 'shahzaibsubhani28@gmail.com', 496273),
(66, 'mianshahzaibpnj@gmail.com', 792655),
(67, 'rehanumar7303250@gmail.com', 174851),
(68, 'rehanumar7303250@gmail.com', 986510),
(69, 'rehanumar7303250@gmail.com', 523463),
(70, 'rehanumar7303250@gmail.com', 702833),
(71, 'noor02fati@gmail.com', 451010),
(72, 'noor02fati@gmail.com', 816478),
(73, 'muzamal.rso@gmail.com', 433524),
(74, 'muzamal.rso@gmail.com', 923291),
(75, 'muzamal.rso@gmail.com', 192504),
(76, 'muzamal.rso@gmail.com', 560537),
(77, 'muzamal.rso@gmail.com', 917599),
(78, 'subhaniusman285@gmail.com', 376083);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
