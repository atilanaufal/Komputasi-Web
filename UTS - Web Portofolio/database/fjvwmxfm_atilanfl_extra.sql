
--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_banner`
--
ALTER TABLE `about_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contact_content`
--
ALTER TABLE `contact_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ft_skills`
--
ALTER TABLE `ft_skills`
  ADD PRIMARY KEY (`ft_sk_id`);

--
-- Indexes for table `home_banner`
--
ALTER TABLE `home_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`intr_id`);

--
-- Indexes for table `mk_skills`
--
ALTER TABLE `mk_skills`
  ADD PRIMARY KEY (`msk_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`prjt_id`);

--
-- Indexes for table `short_intr_card`
--
ALTER TABLE `short_intr_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_prjt_card`
--
ALTER TABLE `short_prjt_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_sk_card`
--
ALTER TABLE `short_sk_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`sk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_banner`
--
ALTER TABLE `about_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `contact_content`
--
ALTER TABLE `contact_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ft_skills`
--
ALTER TABLE `ft_skills`
  MODIFY `ft_sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_banner`
--
ALTER TABLE `home_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `intr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mk_skills`
--
ALTER TABLE `mk_skills`
  MODIFY `msk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `prjt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `short_intr_card`
--
ALTER TABLE `short_intr_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `short_prjt_card`
--
ALTER TABLE `short_prjt_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `short_sk_card`
--
ALTER TABLE `short_sk_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
