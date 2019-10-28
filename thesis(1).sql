-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 10:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL,
  `nomber` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pword`, `nomber`) VALUES
(1, 'elijah', '12345', ''),
(0, 'elijah', '12345', '09054907023');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `sex` varchar(155) NOT NULL,
  `dob` varchar(155) NOT NULL,
  `pob` varchar(155) NOT NULL,
  `roa` varchar(255) NOT NULL,
  `nomber` varchar(14) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `religion` varchar(19) NOT NULL,
  `foccupation` varchar(79) NOT NULL,
  `foa` varchar(79) NOT NULL,
  `fnomber` varchar(14) NOT NULL,
  `moccupation` varchar(79) NOT NULL,
  `mnomber` varchar(14) NOT NULL,
  `moa` varchar(79) NOT NULL,
  `athlete` varchar(200) NOT NULL,
  `hobby` varchar(200) NOT NULL,
  `siblings` varchar(200) NOT NULL,
  `help` varchar(200) NOT NULL,
  `hand` varchar(200) NOT NULL,
  `singing` varchar(200) NOT NULL,
  `drama` varchar(200) NOT NULL,
  `recitation` varchar(200) NOT NULL,
  `excursion` varchar(200) NOT NULL,
  `user` varchar(255) NOT NULL,
  `part` varchar(255) NOT NULL,
  `behaviour` text NOT NULL,
  `soo` text NOT NULL,
  `health` text NOT NULL,
  `hospital` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `sex`, `dob`, `pob`, `roa`, `nomber`, `lga`, `religion`, `foccupation`, `foa`, `fnomber`, `moccupation`, `mnomber`, `moa`, `athlete`, `hobby`, `siblings`, `help`, `hand`, `singing`, `drama`, `recitation`, `excursion`, `user`, `part`, `behaviour`, `soo`, `health`, `hospital`) VALUES
(1, '', '', ' <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', ' <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' <br /><b>Notice</b>:  Undefined index: user in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>77</b><br />', '', '', '', '', ''),
(2, 'Gender', '', ' <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', ' <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', 'Religion', ' <br /><b>Notice</b>:  Undefined index: foccupation in <b>C:xampphtdocscallplan', ' <br /><b>Notice</b>:  Undefined index: foa in <b>C:xampphtdocscallplancontacts', '', '', '', '', '', '', '', '', '', '', '', '', '', ' <br /><b>Notice</b>:  Undefined index: user in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>77</b><br />', '', '', '', '', ''),
(3, 'Gender', '', ' <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', ' <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', 'Religion', ' <br /><b>Notice</b>:  Undefined index: foccupation in <b>C:xampphtdocscallplan', ' <br /><b>Notice</b>:  Undefined index: foa in <b>C:xampphtdocscallplancontacts', '', '', '', '', '', '', '', '', '', '', '', '', '', ' <br /><b>Notice</b>:  Undefined index: user in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>77</b><br />', '', '', '', '', ''),
(4, '', '', ' <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', ' <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' <br /><b>Notice</b>:  Undefined index: user in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>77</b><br />', '', '', '', '', ''),
(5, '', '', ' ', ' ', '', '', '', '', '', '', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', 'yes', '', 'yes', 'yes', ' ', 'yes', '', '', '', ''),
(6, 'Gender', '', '  <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', 'Religion', ' ', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', 'elinoc4', '', '', '', '', ''),
(7, '', '', '  <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'elinoc4', '', '', '', '', ''),
(8, '', '', '  <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'elijah', '', '', '', '', ''),
(9, '', '', '  <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', ' sadsfa', '', '', '', '', '', '', '', '', '', 'sample', '', '', '', '', ''),
(10, '', '2019-12-18', 'what am supposed to right here', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '090645533111', 'ezinihithe', '', '', '', '', '', '090898234', '  weather', '', '', '', '', '', 'yes', '', 'yes', 'yes', 'azubuike Elijah', 'yes', 'great child', 'Imo state', 'none', 'capitol hospital'),
(11, '', '', '  <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '  <br /><b>Notice</b>:  Undefined index: user in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>77</b><br />', '', '', '', '', ''),
(12, '', '', '  <br /><b>Notice</b>:  Undefined index: pob in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>83</b><br />', '  <br /><b>Notice</b>:  Undefined index: roa in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>92</b><br />', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '  <br /><b>Notice</b>:  Undefined index: user in <b>C:xampphtdocscallplancontactsection4.php</b> on line <b>77</b><br />', '', '', '', '', ''),
(13, '', '2019-10-15', '  ', '  ', '09064553313', '', '', '', '', '', '', '080543543543', '  weather', '', '', '', '', '', '', '', '', '', '  azubuike elijah shincen', '', '', '', '', ''),
(14, '', '2019-10-15', '  ', '  ', '090645533111', '', '', '', '', '', '', '080543543543', '  weather', '', '', '', '', '', '', '', '', '', '  azubuike elijah shincen', '', '', '', '', ''),
(15, '', '2019-10-08', '  qwerty', '  qwerty1', '08057811599', '', '', '', '', '', '', '080543543543', '  weather', '', '', '', '', '', '', '', '', '', '  azubuike elijah shincen', '', '', '', '', ''),
(16, '', '', '  ', '  ', '', '', '', '', '', '', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', 'yes', '', 'yes', 'yes', '  ', 'yes', '', '', '', ''),
(17, '', '2019-10-16', 'what am supposed to right here', '  qwerty1', '09064553311', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'elinoc4', '', '', '', '', ''),
(18, '', '2019-10-09', '  qwerty', '  qwerty1', '09064553311', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '  azubuike elijah s', '', '', '', '', ''),
(19, 'Male', '2019-06-11', 'what am supposed to right here', '  qwerty1', '09064553311', '', 'Christian', ' check', ' check', '09098878777', '', '', ' ', '', '', '', '', '', 'no', '', 'no', 'no', '  azubuike elijah sh', 'yes', 'ezinihithe', 'Imo state', 'none', 'capitol hospital'),
(20, 'Male', '2019-10-30', 'lagos', '  qwerty1', '09064553311', 'ezinihithe', 'Christian', ' check', ' check', '090829329389', '', '090898234', '  weather', '', '', '', '', '', 'yes', '', 'yes', 'yes', 'azubuike Elijah', 'yes', 'great child', 'Imo state', 'none', 'capitol hospital'),
(21, 'Male', '2019-10-09', 'lagos', '  qwerty1', '09064553311', '', 'Christian', ' check', ' check', '09070605040', '', '', ' ', '', '', '', '', '', '', '', '', '', 'joshua samuel', '', 'nice child', 'Imo state', 'none', 'capitol hospital'),
(22, '', '', '', 'hghgfjghj', '08057811599', '', '', '', '', '', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', 'yes', '', 'yes', 'yes', '', 'yes', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', '', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', 'yes', '', 'yes', 'yes', '', 'yes', '', '', '', ''),
(24, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', 'yes', '', 'yes', 'yes', '', 'yes', '', '', '', ''),
(25, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', 'yes', '', 'yes', 'yes', '', 'yes', '', '', '', ''),
(26, 'Male', '2019-10-15', '12345', '12345', '12345', '12345', 'Christian', '12345', '12345', '12345', '', '12345', ' 12345', '12345', '12345', '12345', '', 'yes', '', '', '', '', '12345', '', '12345', '12345', '12345', '12345'),
(27, 'Male', '2019-10-14', 'lagos', '', '090645533111', '', 'Christian', ' check', ' check', '080', '', '090', ' qwerty is good', 'qwerty is good', 'qwerty is good', 'qwerty is good', '', 'yes', 'no', '', 'no', 'no', 'chinweuba', 'yes', '', '', '', ''),
(28, 'Male', '', '', '', '', '', 'Christian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kenny', '', '', '', '', ''),
(29, 'Male', '', '', '', '', '', 'Christian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kenny', '', '', '', '', ''),
(30, 'Male', '2019-10-14', 'qwerty is good', 'qwerty is good', '09064553311', '', 'Christian', 'qwerty is good', 'qwerty is good', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kenny', '', '', '', '', ''),
(31, 'Male', '2019-10-14', 'qwerty is good', 'qwerty is good', '09064553311', '', 'Christian', 'qwerty is good', 'qwerty is good', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kenny', '', '', '', '', ''),
(32, '', '2019-10-14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'azuhuike', '', '', '', '', ''),
(33, '', '2019-10-14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'azuhuike', '', '', '', '', ''),
(34, '', '2019-10-14', 'lagos', 'hghgfjghj', '09064553313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'azuhuike', '', '', '', '', ''),
(35, '', '2019-10-22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'elioc4jg', '', '', '', '', ''),
(36, 'Male', '', '', '', '', '', 'Muslim', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '  azubuike elijah shincenlllllllllllLL', '', '', '', '', ''),
(37, 'Female', '2019-10-24', 'what am supposed to right here', 'hghgfjghj', '090645533111', '', 'Christian', '12345', '12345', '12253', '', '23423424', ' SDFSADFSD', 'WRWERWERQW', 'SDFSADFSD', 'DSFSDFD', '', 'no', 'no', '', 'yes', 'no', 'MY BOSS', 'no', '', '', '', ''),
(38, 'Male', '2019-10-08', 'lagos', 'Benin', '09064553311', 'ezinihithe', 'Christian', 'civil Servant', 'ebonyi', '08057811599', '', '08072299819', '  weather', 'yes', 'sex', '4', '', 'no', 'yes', '', 'no', 'no', 'sammy', 'yes', 'his a nice kid', 'Imo state', 'None', 'capitol hospital'),
(39, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'Gender', '', '', '', '', '', 'Religion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffprogress`
--

CREATE TABLE `staffprogress` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `t_title` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `portfolio` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomber` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `portfolio`, `pword`, `email`, `nomber`) VALUES
(5, 'Azubuike Elijah', 'Website Developer', '12345', 'elinoc4@gmail.com', ''),
(6, 'Chinweuba', 'Web dveloper', '12345', '1sirwealth1.com', ''),
(7, 'Azubuike Elijah', 'Web developer', '2482elijah', 'elinoc4@gmail.com', '09064553311'),
(8, 'Chukwuebuka Paul Azubuike', 'Human Resource Management', '123456', 'dasenetor@gmail.com', '08132120048'),
(9, '', '', '', '', '090'),
(10, '', '', '', '', '090');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date_given` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `t_title` varchar(100) NOT NULL,
  `date_com` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `sid`, `date_given`, `status`, `stage`, `t_title`, `date_com`, `cat`, `name`) VALUES
(16, 5, '25.05.2019', '', '7', 'praise songs', '', 'monthly', 'Azubuike Elijah'),
(17, 5, '26.05.2019', '', '1', 'Development', '', 'daily', 'Azubuike Elijah'),
(18, 5, '26.05.2019', '', '', 'scrutum', '', 'weekly', 'Azubuike Elijah'),
(19, 6, '26.05.2019', '', '1', 'its big', '', 'weekly', 'Chinweuba'),
(20, 6, '26.05.2019', '', '1', 'chopnow', '', 'weekly', 'Chinweuba'),
(21, 8, '26.05.2019', '', '1', 'Send twenty thousand naira to Uba', '', 'weekly', 'Chukwuebuka Paul Azubuike'),
(22, 8, '26.05.2019', '', '2', 'Development', '', 'weekly', 'Chukwuebuka Paul Azubuike');

-- --------------------------------------------------------

--
-- Table structure for table `taskprogress`
--

CREATE TABLE `taskprogress` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `t_title` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskprogress`
--

INSERT INTO `taskprogress` (`id`, `sid`, `tid`, `status`, `t_title`, `comment`, `name`) VALUES
(2, 5, 16, '', 'testing', '', ''),
(3, 5, 16, 'Decline', 'working onit', '', 'Azubuike Elijah'),
(4, 5, 16, '', 'Development', '', 'Azubuike Elijah'),
(5, 5, 17, '', 'Development', '', 'Azubuike Elijah'),
(6, 5, 16, '', 'ass', '', 'Azubuike Elijah'),
(7, 5, 16, '', 'were you go', '', 'Azubuike Elijah'),
(8, 5, 16, 'Decline', 'read', '', 'Azubuike Elijah'),
(9, 6, 19, '', 'ok sir', '', 'Chinweuba'),
(10, 6, 20, '', 'reply', '', 'Chinweuba'),
(11, 8, 21, '', 'just did that Sir', '', 'Chukwuebuka Paul Azubuike'),
(12, 8, 22, '', 'update ', '', 'Chukwuebuka Paul Azubuike');

-- --------------------------------------------------------

--
-- Table structure for table `tut`
--

CREATE TABLE `tut` (
  `id` int(11) NOT NULL,
  `email` varchar(155) NOT NULL,
  `sex` varchar(155) NOT NULL,
  `nomber` varchar(155) NOT NULL,
  `pword` varchar(155) NOT NULL,
  `user` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tut`
--

INSERT INTO `tut` (`id`, `email`, `sex`, `nomber`, `pword`, `user`) VALUES
(1, 'elinoc4@gmail.coom', 'Male', '09064553311', '$2y$10$HJcS91I.jLf7eYJJc9mYfOVhGRexiX22XxYXNnPS.1UlIiU03Aoey', 'elinogreat');

-- --------------------------------------------------------

--
-- Table structure for table `verified`
--

CREATE TABLE `verified` (
  `id` int(11) NOT NULL,
  `regno` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verified`
--

INSERT INTO `verified` (`id`, `regno`) VALUES
(1, '2147483647'),
(2, '09064553311'),
(3, '08132120048'),
(4, '09055643311');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffprogress`
--
ALTER TABLE `staffprogress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `taskprogress`
--
ALTER TABLE `taskprogress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`tid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tut`
--
ALTER TABLE `tut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verified`
--
ALTER TABLE `verified`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `staffprogress`
--
ALTER TABLE `staffprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `taskprogress`
--
ALTER TABLE `taskprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tut`
--
ALTER TABLE `tut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verified`
--
ALTER TABLE `verified`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staffprogress`
--
ALTER TABLE `staffprogress`
  ADD CONSTRAINT `staffprogress_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `staffs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `connect` FOREIGN KEY (`sid`) REFERENCES `staffs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taskprogress`
--
ALTER TABLE `taskprogress`
  ADD CONSTRAINT `link` FOREIGN KEY (`tid`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
