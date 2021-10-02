CREATE TABLE `loadcell` (
  `weight` varchar(8) NOT NULL,
  `unit` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `loadcell`
--
ALTER TABLE `loadcell`
  ADD PRIMARY KEY (`weight`,`unit`);