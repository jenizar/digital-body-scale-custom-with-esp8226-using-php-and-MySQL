-- Table structure for table `outscale`
--

CREATE TABLE `outscale` (
  `id` int(11) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `unit` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outscale`
--
ALTER TABLE `outscale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outscale`
--
ALTER TABLE `outscale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
