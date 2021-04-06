-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2021 at 12:20 PM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biztusct_coinfred`
--

-- --------------------------------------------------------

--
-- Table structure for table `blockedusers`
--

CREATE TABLE `blockedusers` (
  `id` int(11) NOT NULL,
  `blocker` varchar(16) NOT NULL,
  `blockee` varchar(16) NOT NULL,
  `blockdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user1` varchar(16) NOT NULL,
  `user2` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `accepted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `initiator` varchar(16) NOT NULL,
  `app` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `did_read` enum('0','1') NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `user` varchar(16) NOT NULL,
  `gallery` varchar(16) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upgrade`
--

CREATE TABLE `upgrade` (
  `id` int(225) NOT NULL,
  `userid` int(225) NOT NULL,
  `status` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrade`
--

INSERT INTO `upgrade` (`id`, `userid`, `status`) VALUES
(1, 97, 1),
(27, 114, 1),
(3, 98, 1),
(10, 113, 1),
(21, 114, 1),
(28, 114, 0);

-- --------------------------------------------------------

--
-- Table structure for table `useroptions`
--

CREATE TABLE `useroptions` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `background` varchar(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `zipcode` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `verified` varchar(225) NOT NULL,
  `request` int(225) NOT NULL,
  `balance` decimal(20,2) NOT NULL,
  `invested` decimal(20,2) NOT NULL,
  `btc` decimal(20,2) NOT NULL,
  `compound` int(225) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `zipcode`, `phone`, `country`, `type`, `currency`, `verified`, `request`, `balance`, `invested`, `btc`, `compound`, `regdate`) VALUES
(71, 'Scott', 'Murdoch', 'Smurdoch45', 'srmurdoch44@gmail.com', 'c1f57204618b1aafa8a2aa8221f47b1f', '17240', '+34650537487', 'Spain', 'Starter', 'BTC', 'YES', 2, 3167.99, 3490.34, 0.11, 0, '2020-10-29 04:32:06'),
(82, 'Christie', 'Bankston', 'CBankston', 'heynursey10@gmail.com', 'dc849c9e5f819fae82b2b0dcec7144d9', '35962', '12565052745', 'United States', 'Starter', 'BTC', 'YES', 2, 1850.21, 1770.00, 0.09, 0, '2020-11-13 21:10:19'),
(96, 'Dustin', 'Lachapelle', 'Dustin', 'dustinlachapelle@bell.net', '0d06f98ba741b26d5e1249a90f0b6dc2', '', '1-705-618-8299', 'Canada', 'Starter', 'BTC', 'YES', 2, 408.00, 408.00, 0.02, 0, '2020-12-20 19:10:23'),
(110, 'Jennifer ', 'Johnson ', 'jjjohnsredhead70', 'jjjohns@midco.net', 'aa6fa5f30b55a4d7c34180b8684c379e', '57783', '6056410679', 'United States', 'Starter', 'BTC', 'YES', 2, 1613.19, 1613.19, 0.04, 0, '2021-01-06 15:58:40'),
(111, 'Godsgift', 'Tor', 'Tohr', 'godsgift.tor.gt@gmail.com', '027c0de595ec6c886384942cec4ee222', '', '08151459450', 'Nigeria', 'Starter', 'BTC', 'YES', 2, 0.00, 0.00, 0.00, 0, '2021-01-06 16:17:43'),
(120, 'Shop Arena', '', '', 'innocentdestiny228@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '08143190358', 'Norfolk Island', 'standard', 'euros', '', 0, 5000.00, 8000.00, 0.00, 0, '2021-01-19 10:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `id` int(225) NOT NULL,
  `userid` int(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `document` varchar(225) NOT NULL,
  `file2` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `verifydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`id`, `userid`, `username`, `document`, `file2`, `file`, `verifydate`) VALUES
(1, 0, '', '', '', '', '2020-07-08 15:04:07'),
(2, 0, '', '', '', '', '2020-07-12 04:12:41'),
(3, 0, '', '', '', '', '2020-07-12 04:13:06'),
(4, 0, 'okeogbe', 'passport', '', '', '2020-07-12 04:14:06'),
(5, 0, '', '', '', '', '2020-07-12 04:17:57'),
(12, 1, 'L_Decode', 'Drivers\'s Licence', '', '106485880_10158819041068598_2773733371700384841_o.jpg', '2020-07-12 05:14:11'),
(13, 58, '', '', '', '', '2020-07-12 12:50:25'),
(14, 59, 'Drake', 'Passport', '', 'Screenshot_20200714-073922.png', '2020-07-15 00:48:45'),
(15, 62, 'finaltest', 'passport', '', 'AGENTK.png', '2020-07-17 14:00:56'),
(16, 65, 'Testrun', 'Passport', '', 'IMG-20200719-WA0146.jpg', '2020-07-19 18:32:36'),
(17, 66, 'RyanGodet ', 'Drivers License ', '', '415E72A3-BE35-45B8-9D39-D90D34007110.jpeg', '2020-07-21 13:41:42'),
(18, 66, 'RyanGodet ', 'Drivers license ', '', '1A2DEC0D-6271-488A-87E9-CB406B395716.jpeg', '2020-07-21 13:45:51'),
(19, 70, '', '', '', 'IMG_20201015_100350.jpg', '2020-10-29 04:36:01'),
(20, 71, 'Smurdoch45', 'Passport', '', 'Passport.pdf', '2020-10-29 04:38:04'),
(21, 71, 'Smurdoch45', 'Passport', '', 'Passport.pdf', '2020-10-29 04:40:15'),
(22, 71, 'Smurdoch45', 'Passport', '', 'Passport.JPG', '2020-10-29 12:59:33'),
(23, 78, 'Annemiek369', 'Passport', '', '4L1B7901.jpg', '2020-11-03 12:51:16'),
(24, 82, 'CBankston', 'Drivers License', '', '20201113_200129.jpg', '2020-11-13 21:20:06'),
(25, 59, 'Jossyblaze', 'Passport', '', 'IMG_20201113_082311.jpg', '2020-11-16 01:33:02'),
(26, 94, 'SchoolMax', 'passport', '', 'profile.png', '2020-12-18 12:50:30'),
(27, 94, 'SchoolMax', 'passport', '', 'default (2) - Copy.png', '2020-12-19 08:57:10'),
(28, 96, 'Dustin', 'Drivers licence ', '', 'AFC0DF5C-5E2D-4370-80BC-412D2C99E7C3.jpeg', '2020-12-20 19:16:58'),
(29, 96, 'Dustin', 'Drivers licence ', '', '221FDDB3-B71A-44C4-9DB0-2B84F092551D.jpeg', '2020-12-20 19:27:36'),
(30, 102, 'r_bankston_3', 'Drivers license', '', 'image.jpg', '2020-12-27 22:06:03'),
(31, 103, '', '', '840F244C-3629-45DF-9FF6-FE2D8695254B.jpeg', 'E595C5D3-975E-4810-AE5D-C7D49F99E4B3.jpeg', '2020-12-29 01:20:26'),
(32, 103, '', '', 'EEB3B2A6-7B7C-46F4-B547-44D3576356B9.jpeg', '70A58C6B-1E67-4B0B-A97E-071C331117EA.jpeg', '2020-12-29 01:22:21'),
(33, 103, '', '', '2.jpg', '1.jpg', '2020-12-29 01:24:00'),
(34, 103, '', '', 'C29C12DA-7CDC-45C4-9E6C-6D9A0C2AAFA3.jpeg', 'AC1277AE-6025-46CF-A33A-B4BEE562637B.jpeg', '2020-12-29 01:28:15'),
(35, 110, 'Jjjohnsonredhead70 ', 'Drivers license ', 'image.jpg', 'image.jpg', '2021-01-06 16:16:05'),
(36, 110, 'jjjohnsredhead70', 'Drivers license ', 'image.jpg', 'image.jpg', '2021-01-06 16:19:21'),
(37, 111, 'Tohr', 'License ', 'FA07A121-60B8-4018-81FF-4C9346D3822F.jpeg', '60806DBB-B427-4C82-9496-3BA7BA6616A5.jpeg', '2021-01-06 16:23:12'),
(38, 110, 'jjjohnsredhead70', 'Drivers license ', 'image.jpg', 'image.jpg', '2021-01-06 17:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(20) NOT NULL,
  `userid` int(225) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `status` int(225) NOT NULL,
  `thedate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `userid`, `amount`, `status`, `thedate`) VALUES
(1, 76, 15.00, 0, '2020-11-02 06:31:22'),
(2, 78, 1000.00, 0, '2020-11-06 05:09:29'),
(3, 78, 5352.00, 0, '2020-11-06 05:36:01'),
(4, 59, 100.00, 1, '2020-11-22 23:06:56'),
(5, 82, 100.00, 1, '2020-11-22 23:14:46'),
(6, 97, 5000.00, 1, '2020-12-21 07:13:05'),
(7, 82, 1876.97, 0, '2021-01-02 11:12:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blockedusers`
--
ALTER TABLE `blockedusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upgrade`
--
ALTER TABLE `upgrade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useroptions`
--
ALTER TABLE `useroptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blockedusers`
--
ALTER TABLE `blockedusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upgrade`
--
ALTER TABLE `upgrade`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
