-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 10:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcq_shuffler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_officer`
--

CREATE TABLE `exam_officer` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `staff_id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `department` varchar(200) NOT NULL,
  `faculty` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_officer`
--

INSERT INTO `exam_officer` (`id`, `name`, `staff_id`, `username`, `email`, `password`, `phone`, `department`, `faculty`) VALUES
(1, 'Dr A.M Bagiwa', 'p101', 'exam_officer', 'exam_officer@physics.buk.edu.ng', 'password', '08069613551', 'Physics Department', 'Physics Department');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `a` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `b` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `c` varchar(200) DEFAULT NULL,
  `d` varchar(200) DEFAULT NULL,
  `answer` varchar(250) NOT NULL,
  `testId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `testId`) VALUES
(1, 'Which among these cities is popularly known as the business capital of Nigeria?', 'Kano', 'Abuja', 'Lagos', 'Port Harcourt', 'c', 'STAT102-19'),
(2, 'wHAT IS YOUR nAME?', 'aHMAD', 'gARBA', 'Musa', 'jOHN', 'A', 'STAT102-19'),
(3, 'Whic brnd of system do you use', 'NCC', 'HP', 'DELL', 'ACER', 'A', 'STAT102-19'),
(8, 'Do you know what is a current', 'yes', 'no', 'maybe', 'no idea', 'C', 'ELT201-27'),
(9, 'Do like poles in a magnet attract each other?', 'Yes', 'No', 'Maybe', 'No idea', 'B', 'ELT201-27'),
(10, 'Do you like this course', 'Very Well', 'Partially', 'Undecidable', 'I hate it', 'B', 'ELT201-27'),
(11, 'Who is your lecturer for this course', 'Prof F.S Koki', 'Prof B.I.T', 'Prof. Usman Gana', 'Prof G.S.M Galadanchi', 'D', 'ELT201-27'),
(12, 'What category of Journalist do you belong?', 'Developmental Journalist', 'Industrial Journalist', 'Celebrity Journalist', 'Political Journalist', 'C', 'MCOM401-85'),
(13, 'Does mascom involves blogging', 'yes', 'no', 'maybe', 'No idea', 'A', 'MCOM401-85'),
(14, 'a', 'ss', 'uy', '', '', 'A', 'MCOM401-85'),
(15, 'its a true or false', 'true', 'false', '', '', 'B', 'STAT102-19'),
(16, 'a or b. test and handle', 'A', 'B', '', '', 'A', 'MATH425-44'),
(17, 'are you feeling well today', 'yes very well', 'Partially', 'maybe', 'I dont know', 'C', 'ELT201-27'),
(18, 'The _______ is the physical path over which a message travels.', 'Protocol', 'Medium', 'Signal', 'All of the above', 'B', 'COSC407-51'),
(19, 'The Internet model consists of _______ layers.', 'Three ', 'Five ', 'Seven', 'Eight', 'B', 'COSC407-51'),
(20, 'The process-to-process delivery of the entire message is the responsibility of the _______ layer.', 'Network ', 'Transport ', 'Application', 'Physical', 'B', 'COSC407-51'),
(21, 'The _______ layer is the layer closest to the transmission medium.', 'Physical', 'Data link ', 'Network ', 'Transport', 'B', 'COSC407-51'),
(22, 'Mail services are available to network users through the _______ layer.', 'Data link ', 'Physical', 'Transport ', 'Application', 'D', 'COSC407-51'),
(23, 'As the data packet moves from the upper to the lower layers, headers are _______.', 'Added', 'Removed ', 'Rearranged ', 'Modified', 'A', 'COSC407-51'),
(24, 'The _______ layer lies between the network layer and the application layer.', 'Physical', 'Data link ', 'Transport', 'None of the above', 'C', 'COSC407-51'),
(25, 'Layer 2 lies between the physical layer and the _______ layer.', 'Network ', 'Data link ', 'Transport', 'None of the above', 'A', 'COSC407-51'),
(26, 'When data are transmitted from device A to device B, the header from A`s layer 4 is read by B`s _______ layer.', 'Physical', 'Transport ', 'Application', 'None of the above', 'B', 'COSC407-51'),
(27, 'The _______ layer changes bits into electromagnetic signals.', 'Physical', 'Data link ', 'Transport', 'None of the above', 'A', 'COSC407-51'),
(28, 'Which of the following is an application layer service?', 'Remote log-in', 'File transfer and access', 'Mail service', 'All the above', 'D', 'COSC407-51'),
(29, 'Why was the OSI model developed?', 'Manufacturers disliked the TCP/IP protocol suite.', 'The rate of data transfer was increasing exponentially', 'Standards were needed to allow any two systems to communicate.', 'None of the above', 'C', 'COSC407-51'),
(30, 'The physical layer is concerned with the movement of _______ over the physical medium.', 'programs', 'dialogs', 'protocols', 'bits', 'D', 'COSC407-51'),
(31, 'The OSI model consists of _______ layers.', 'three', 'five', 'seven', 'eight', 'C', 'COSC407-51'),
(32, 'In the OSI model, as a data packet moves from the lower to the upper layers, headers are _______.', 'added', 'removed', 'rearranged ', 'modified', 'B', 'COSC407-51'),
(33, 'In the OSI model, when data is transmitted from device A to device B, the header from A`s layer 5 is read by B`s _______ layer.', 'physical', 'transport', 'session', 'presentation', 'C', 'COSC407-51'),
(34, 'In the OSI model, what is the main function of the transport layer?', 'node-to-node delivery ', 'process-to-process message delivery ', 'synchronization', 'updating and maintenance of routing tables', 'B', 'COSC407-51'),
(35, 'In the OSI model, encryption and decryption are functions of the ________ layer.', 'transport', 'session ', 'presentation ', 'application', 'C', 'COSC407-51'),
(36, 'When a host on network A sends a message to a host on network B, which address does the router look at?', 'port', 'logical ', 'physical', 'none of the above', 'C', 'COSC407-51'),
(37, 'To deliver a message to the correct application program running on a host, the _______ address must be consulted.', 'port ', 'IP ', 'physical', 'none of the above', 'A', 'COSC407-51'),
(38, 'IPv6 has _______ -bit addresses.', '32', '64', '128', 'variable', 'C', 'COSC407-51'),
(39, 'ICMPv6 includes _______.', 'IGMP', 'ARP ', 'RARP', 'a and b', 'D', 'COSC407-51'),
(40, 'The ______ layer is responsible for moving frames from one hop (node) to the next.', 'physical', 'data link', 'transport', 'none of the above', 'B', 'COSC407-51'),
(41, 'The ______ layer adds a header to the packet coming from the upper layer that includes the logical addresses of the sender and receiver.', 'physical', 'data link', 'network', 'none of the above', 'C', 'COSC407-51'),
(42, 'The_________ layer is responsible for the delivery of a message from one process to another.', 'physical', 'transport', 'network', 'none of the above', 'B', 'COSC407-51'),
(43, 'The ____ created a model called the Open Systems Interconnection, which allows diverse systems to communicate.', 'OSI', 'ISO', 'IEEE', 'none of the above', 'B', 'COSC407-51'),
(44, 'The seven-layer _____ model provides guidelines for the development of universally compatible networking protocols.', 'OSI', 'ISO', 'IEEE', 'none of the above', 'A', 'COSC407-51'),
(45, 'The physical, data link, and network layers are the ______ support layers.', 'user', 'network', 'both (a) and (b)', 'neither (a) nor (b)', 'B', 'COSC407-51'),
(46, 'The session, presentation, and application layers are the ____ support layers.', 'user', 'network', 'both (a) and (b) ', 'neither (a) nor (b)', 'A', 'COSC407-51'),
(47, 'The TCP/IP _______ layer is equivalent to the combined session, presentation, and application layers of the OSI model.', 'application', 'network', 'data link', 'physical', 'A', 'COSC407-51'),
(48, 'hi', 'hi', 'hi', 'hi', 'hi', 'B', 'MATH425-44'),
(49, 'WHAT IS YOUR NAME', 'ISA', 'REPO', 'MUSA', 'AHMAD', 'A', 'COSC407-48'),
(50, 'question', 'a', 'b', 'c', 'd', 'A', 'PHY1220-70'),
(51, 'wHAT IS CHEMISTRY', 'A', 'B', 'C', 'D', 'A', 'CHEM121-5'),
(52, 'AA', 'AA', 'AA', 'AA', 'AA', 'A', 'AA-83'),
(53, 'How bits make a byte?', '2', '8', '10', '16', 'B', 'COSC4310-9'),
(54, 'What is your name', 'Ahmad', 'Amina', 'Hafsat', 'Ismael', 'A', 'COSC4310-9'),
(55, 'a', 'a', 'a', 'a', 'a', 'B', 'a-47'),
(56, 'b', 'b', 'b', 'b', 'b', 'B', 'a-47'),
(57, 'hey', 'hey', 'hey', 'hey', 'ehe', 'A', 'me-47'),
(58, 'Is MS-Word a microsoft package?', 'Yes', 'No', 'Not sure', 'None of the above', 'A', 'D101-1');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `school` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `details` varchar(100) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `instructions` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `testId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `school`, `department`, `course`, `code`, `details`, `duration`, `date`, `instructions`, `author`, `testId`) VALUES
(32, 'Ahmadu Bello University, Zaria', 'Computer Science', 'Data Communications & Networking', 'COSC407', '1st Semester 2019 Examination', '2Hrs 30mins', '2018-09-24', 'Answer all Questions', 'Administrator', 'COSC407-51'),
(33, 'King Fahad University of Petroleum', 'Computer Science', 'O.O.P', 'COSC4310', '1st Semester 2019 Examination', '30 Minutes', '2019-07-15', 'Answer All Questions', 'Administrator', 'COSC4310-9'),
(34, 'ManPower Development Institute', 'ICT', 'Data Processing', 'D101', '1st Semester 2019 Examination', '30 Minutes', '2019-10-14', 'Answer All Questions', 'Ishaq Garba Galadanchi', 'D101-1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `staff_id` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(250) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `staff_id`, `username`, `password`, `department`, `faculty`, `status`, `role`) VALUES
(1, 'G.S.M Galadanci', 'p101', 'gsmgalad', 'galadanci', 'Physics Department', 'Physical Sciences', 1, 'lecturer'),
(4, 'Ishaq Garba Galadanchi', 'p104', 'ishaq', 'ishaq', 'Computer Engineering', 'Engineering', 1, 'lecturer'),
(6, 'Salisu Ibrahim Salisu', 'p124', 'sis', 'karfe', 'Computer Engineering', 'Physical Sciences', 1, 'lecturer'),
(7, 'Administrator', 'a101', 'admin', 'admin', 'Administration', 'Senate', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_officer`
--
ALTER TABLE `exam_officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_officer`
--
ALTER TABLE `exam_officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
