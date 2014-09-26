-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 26, 2014 at 07:44 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `odox`
--

-- --------------------------------------------------------

--
-- Table structure for table `documentTracker`
--

CREATE TABLE `documentTracker` (
`id` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `receiverId` int(11) NOT NULL,
  `tranferOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hierarchy`
--

CREATE TABLE `hierarchy` (
`hierachyId` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `Parent_hierachyId` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `geoCode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
`userId` int(10) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(100) NOT NULL,
  `repositoryId` varchar(100) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userHierachy`
--

CREATE TABLE `userHierachy` (
  `userId` int(11) NOT NULL,
  `hierachyId` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documentTracker`
--
ALTER TABLE `documentTracker`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hierarchy`
--
ALTER TABLE `hierarchy`
 ADD PRIMARY KEY (`hierachyId`), ADD KEY `hierarchy_hierarchy_fk` (`Parent_hierachyId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `userHierachy`
--
ALTER TABLE `userHierachy`
 ADD PRIMARY KEY (`userId`,`hierachyId`), ADD KEY `hierarchy_userhierachy_fk` (`hierachyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentTracker`
--
ALTER TABLE `documentTracker`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hierarchy`
--
ALTER TABLE `hierarchy`
MODIFY `hierachyId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hierarchy`
--
ALTER TABLE `hierarchy`
ADD CONSTRAINT `hierarchy_hierarchy_fk` FOREIGN KEY (`Parent_hierachyId`) REFERENCES `hierarchy` (`hierachyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userHierachy`
--
ALTER TABLE `userHierachy`
ADD CONSTRAINT `user_userhierachy_fk` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `hierarchy_userhierachy_fk` FOREIGN KEY (`hierachyId`) REFERENCES `hierarchy` (`hierachyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
