
-- Database: `newphoto`
--

-- --------------------------------------------------------

-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `matric` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `socialnet` varchar(150) DEFAULT NULL,
  `address` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `skill` text NOT NULL,
  `sport` varchar(50) DEFAULT NULL,
  `maritals` varchar(50) NOT NULL,
  `langspoken` varchar(100) NOT NULL,
  `favqoute` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileId`),
  ADD UNIQUE KEY `UC_profile` (`username`,`matric`,`email`,`phone`),
  ADD KEY `FK_profile` (`username`,`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `UC_user` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;
COMMIT;

