-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2016 at 10:53 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iet_bucket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bucket`
--

CREATE TABLE `bucket` (
  `user_id` int(11) NOT NULL,
  `bucket_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `secur` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bucket`
--

INSERT INTO `bucket` (`user_id`, `bucket_id`, `title`, `description`, `timestmp`, `secur`) VALUES
(1, 2, 'dew', 'jdew fdjew kf kew f ewf kj', '2016-11-05 13:58:33', 0),
(2, 4, 'Study', 'This is sample tect to study drew feriu f ref fref fer.', '2016-11-05 15:39:46', 0),
(2, 5, 'Play', 'This is sample tect to playew d ew  ew ew ewd kewkbewd ewd hew f ewfhj ewfj ewf ewfhj ewwhfew fhjew fhj efhjew drew feriu f ref fref fer.', '2016-11-05 15:40:48', 0),
(2, 6, 'Food', 'All the food items from different part of the world that I am gonna try.', '2016-11-06 01:21:58', 1),
(3, 7, 'Travel', 'Set of goals to travel iand around different poasts of the world.', '2016-11-06 02:11:10', 0),
(4, 8, 'Extreme sports', 'The kick when we do extreme sports', '2016-11-06 04:00:29', 0),
(4, 9, 'Love', 'To find love and have fun', '2016-11-06 04:15:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cmid` int(11) NOT NULL,
  `buckid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cmid`, `buckid`, `userid`, `username`, `comment`) VALUES
(4, 9, 4, 'tiffmat123', 'This is my first comment'),
(5, 9, 4, 'tiffmat123', 'This list looks superbly awesome. I am definitely donna try it.'),
(6, 5, 4, 'tiffmat123', 'Hello, I am commenting here too');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `buckid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `tasktitle` varchar(300) NOT NULL,
  `taskdescription` varchar(500) NOT NULL,
  `taskdate` varchar(200) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`buckid`, `taskid`, `tasktitle`, `taskdescription`, `taskdate`, `timestmp`, `status`) VALUES
(5, 1, 'ytfytft', 'Tver since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchang', '23 November, 2016', '2016-11-05 22:10:45', 1),
(5, 7, 'Aman task', 'This task is to submit amam\'s assignment.', '20 November, 2016', '2016-11-05 22:12:45', 0),
(7, 8, 'See Taj Mahal', 'View the beauty of Taj Mahal and visit Agra, one of the 7 wonders.', '23 November, 2016', '2016-11-06 02:12:44', 0),
(7, 9, 'Cruise', 'Go on a cruise to different parts of world.', '13 November, 2018', '2016-11-06 02:45:23', 1),
(7, 10, 'Egypt', 'See pyramids in egypt', '11 November, 2019', '2016-11-06 02:29:24', 0),
(7, 11, 'Continents', 'Visit all the different continents', '29 November, 2016', '2016-11-06 02:28:41', 0),
(8, 12, 'Sky dive', 'Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. ', '23 November, 2020', '2016-11-06 04:11:56', 1),
(8, 14, 'Swim with dolphins', 'Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. ', '29 November, 2016', '2016-11-06 04:08:31', 0),
(8, 15, 'Complete a marathon', 'Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. ', '30 November, 2016', '2016-11-06 04:08:56', 0),
(8, 16, 'Scuba diving', 'Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. ', '30 November, 2016', '2016-11-06 04:11:52', 1),
(8, 17, 'Ice climbing', 'It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. ', '29 November, 2016', '2016-11-06 04:09:44', 0),
(8, 18, 'Water rafting', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you.', '30 November, 2016', '2016-11-06 04:10:25', 0),
(9, 19, 'Fall in Love', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you.', '30 November, 2016', '2016-11-06 04:17:21', 1),
(9, 20, 'Have a wedding', 'Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you.', '3 November, 2019', '2016-11-06 04:16:42', 0),
(9, 21, 'Cook for partner', '. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for consi', '30 November, 2016', '2016-11-06 04:17:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `stamp`) VALUES
(1, 'cd', 'ygy', 'ggy', 'b632190836bfc233722ba6f2fe6fe1f9', 'fdf@dew.w', '2016-11-05 10:49:26'),
(2, 'Shubam', 'Gupta', 'shubam01', 'c7559c45b80b4c3b505f1e946a909884', 'shubamgupta123@gmail.com', '2016-11-05 11:08:05'),
(3, 'Aman', 'Kimothi', 'aman01', '96c014065d14fb8571b22756c4d86c48', 'aman01@gmail.com', '2016-11-06 02:09:16'),
(4, 'Tiffany', 'Mathew', 'tiffmat123', '0fbe703f74a6a674f54ed8dc55c6a63c', 'tiffmat123@gmail.com', '2016-11-06 03:59:19'),
(5, 'Kamal', 'Saini', 'kamal01', '6dd5a99234ed9a70c7077471b39e1d49', 'kamal01@gmail.com', '2016-11-06 05:13:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bucket`
--
ALTER TABLE `bucket`
  ADD PRIMARY KEY (`bucket_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cmid`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskid`),
  ADD KEY `buckid` (`buckid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bucket`
--
ALTER TABLE `bucket`
  MODIFY `bucket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bucket`
--
ALTER TABLE `bucket`
  ADD CONSTRAINT `bucket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`buckid`) REFERENCES `bucket` (`bucket_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
